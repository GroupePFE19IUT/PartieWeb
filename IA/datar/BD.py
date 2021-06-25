import sqlite3

connection = sqlite3.connect("Databases.db")
cursor = connection.cursor()

user = ("pfe",)
cursor.execute("select * from test_user where login = ?", user)

print(cursor.fetchone())
connection.close