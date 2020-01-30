USE 5ainf1920;

CREATE TABLE computer (
	id INTEGER NOT NULL PRIMARY KEY,
	marcaTatiera VARCHAR(50),
    marcaMonitor VARCHAR(50),
    marcaCase VARCHAR(50)
)

-- DROP TABLE persona
-- DROP DATABASE 5ainf1920

INSERT INTO computer(id, marcaTatiera, marcaMonitor,marcaCase) 
     VALUES (1, 'Acer', 'Acer','Acer');
     
INSERT INTO computer(id, marcaTatiera, marcaMonitor,marcaCase) 
     VALUES (1, 'Asus', 'Hp','Dell');
       
INSERT INTO computer(id, marcaTatiera, marcaMonitor,marcaCase) 
     VALUES (1, 'Hp', 'Microsoft','Hp');
            (4, 'Apple', 'Apple','Apple');
			
--https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql
CREATE USER 'admin5ainf'@'localhost' IDENTIFIED BY 'admin5ainf';
GRANT ALL PRIVILEGES ON 5ainf1920 . computer TO 'admin'@'localhost';
