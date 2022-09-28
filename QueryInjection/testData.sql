
CREATE DATABASE inject_test;
USE inject_test;
CREATE TABLE People(personID INTEGER PRIMARY KEY AUTO_INCREMENT, Name TEXT, Age INTEGER, Town TEXT);

INSERT INTO People(Name, Age, Town) VALUES("Sally", 43, "Salem");
INSERT INTO People(Name, Age, Town) VALUES("Alan", 19, "New Albany");
INSERT INTO People(Name, Age, Town) VALUES("Chuck", 31, "Charlestown");
INSERT INTO People(Name, Age, Town) VALUES("Maria", 22, "Marysville");
INSERT INTO People(Name, Age, Town) VALUES("Carrie", 54, "Corydon");

