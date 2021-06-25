from facenet_pytorch import MTCNN, InceptionResnetV1
import torch
from torchvision import datasets
from torch.utils.data import DataLoader
from PIL import Image
import cv2
import time
import os
import sqlite3
import datetime


mtcnn0 = MTCNN(image_size=240, margin=0, keep_all=False, min_face_size=40) 
mtcnn = MTCNN(image_size=240, margin=0, keep_all=True, min_face_size=40)  

resnet = InceptionResnetV1(pretrained='vggface2').eval()
date = datetime.datetime.now()



dataset = datasets.ImageFolder('datar/dataset') 
idx_to_class = {i:c for c,i in dataset.class_to_idx.items()} 

def collate_fn(x):
    return x[0]

loader = DataLoader(dataset, collate_fn=collate_fn)

name_list = []
embedding_list = [] 


for img, idx in loader:
   
   
    face, prob = mtcnn0(img, return_prob=True) 
    if face is not None and prob>0.99:
        emb = resnet(face.unsqueeze(0)) 
        embedding_list.append(emb.detach()) 
        name_list.append(idx_to_class[idx])        


data = [embedding_list, name_list] 
torch.save(data, 'data.pt') 


load_data = torch.load('data.pt') 
embedding_list = load_data[0] 
name_list = load_data[1] 
liste_etudiant = []

cam = cv2.VideoCapture(0) 

while True:
    ret, frame = cam.read()
    if not ret:
        print("fail to grab frame, try again")
        break
        
    img = Image.fromarray(frame)
    img_cropped_list, prob_list = mtcnn(img, return_prob=True) 
    
    if img_cropped_list is not None:
    
        boxes, _ = mtcnn.detect(img)

             
        for i, prob in enumerate(prob_list):
            if prob>0.95:
                emb = resnet(img_cropped_list[i].unsqueeze(0)).detach() 
                
                dist_list = [] 
                
                
                for idx, emb_db in enumerate(embedding_list):
                    
                    
                    dist = torch.dist(emb, emb_db).item()
                    #################
                    dist_list.append(dist)

                min_dist = min(dist_list) 
                min_dist_idx = dist_list.index(min_dist) 
                name = name_list[min_dist_idx] 
                
                box = boxes[i] 
                
                original_frame = frame.copy() 
                
                if min_dist<=0.95:
                 
                    print("recherche vers l'insertion de la BD")
                    liste_etudiant.append(str(name))
                    frame = cv2.putText(frame, str(name)+' '+str(min_dist), (box[0].astype(int),box[1].astype(int)), cv2.FONT_HERSHEY_SIMPLEX, 1, (63, 0, 252),1, cv2.LINE_AA)

                frame = cv2.rectangle(frame, (box[0].astype(int),box[1].astype(int)) , (box[2].astype(int),box[3].astype(int)), (13,214,53), 2)
    cv2.imshow("IMG", frame)
        
    print(liste_etudiant)
    
    k = cv2.waitKey(1)
    if k%256==27: # ESC
        print('Esc pressed, closing...')
        break
        
    elif k%256==32: # space to save image
        print('Enter your name :')
        name = input()
        
        # create directory if not exists
        if not os.path.exists('datar/dataset/'+name):
            os.mkdir('datar/dataset/'+name)
            
        img_name = "datar/dataset/{}/{}.jpg".format(name, int(time.time()))
        cv2.imwrite(img_name, original_frame)
        print(" saved: {}".format(img_name))
        
print(liste_etudiant)
def trie(liste):
    liste2 = []
    for x in liste:
        if x not in liste2:
            liste2.append(x)
    return (liste2)

etudiants = trie(liste_etudiant)


print("Etudiant detecter : {} ".format(trie(liste_etudiant)))
datS = time.strftime("%Y-%d-%m", time.localtime())

heur = str(date.hour) + ":" + str(date.minute)
dat =str(datS)
heure = str(heur)
try:
    connection = sqlite3.connect("C:/wamp64/www/CI_GIMOYPRE/application/config/BD/GIMOYPRE.db")
    cursor = connection.cursor()

    
    cursor.execute("SELECT CodeM from SELECTCodeM")
    cours=cursor.fetchone()
    cour=cours[0]
    #id_programmation = cour[1]
    
    
    print(cour)
     #new_user = (cursor.lastrowid,'login','pss','03/09/2021','235454')
    for etudiant in etudiants:
        et = (etudiant,cour,dat,heure)
        print(str(et))
        cursor.execute('insert into Presence(Matricule_etudiant,CodeM,DateP,HeurP) Values(?,?,?,?)',et)
        print(et)
    #req = cursor.execute("select * from test_users")
    #print(req.fetchall())

    #for row in req.fetchall():
       # print(row)
    connection.commit()
    print("enregistrement reussie")
except Exception as e:
 
    print("erreur", e)
    connection.rollback()

finally:
    connection.close()    
cam.release()
cv2.destroyAllWindows()