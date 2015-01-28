from transwarp import db
db.create+engine(user='root',password='gentai',database='test',host='127.0.0.1',port=3306)

user = db.select('select * from user')
