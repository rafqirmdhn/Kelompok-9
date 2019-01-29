CREATE TABLE customer(
	id_customer INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	username VARCHAR(20) NOT NULL, 
	password VARCHAR(20) NOT NULL, 
	first_name VARCHAR(20) NOT NULL, 
	last_name VARCHAR(20) NOT NULL,
	email VARCHAR(20) NOT NULL, 
	gender CHAR(1) NOT NULl, 
	no_telp VARCHAR(15) NOT NULL, 
	alamat VARCHAR(50) NOT NULL 
	); 

CREATE TABLE admin(
	id_admin INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	nama_admin VARCHAR(10) NOT NULL
	);

-- Insert Record

INSERT INTO customer VALUES(
	10001, "rifqi123", "12345678", "Rifqi", "Fauzi", "rifqi@gmail.com" "L", "082123456789", "Sawah Besar"
	10002, "budi365", "36578901", "Budi", "Soetomo", "budi@gmail.com", "L", "08211648987","Kopo"
	10003, "kifahi12", "13579246", "Muhammad", "kifahi", "kifahi@gmail.com", "L", "082109876532","Jatinegara"
	10004, "jofardo54", "08642975", "Jofardho", "Adlinnas", "jofardho@gmail.com", "L", "082165479832","Bukittinggi"
	10005, "rolanda21", "traveloka", "Rolanda", "Difandana", "rolanda@gmail.com", "L", "085709812365","Jakarta"
	10006, "fathur30", "payungteduh", "Fathur", "Rabbani", "fathur@gmail.com", "L", "085605551234","Kopo"
	10007, "dhika65", "danillajpr", "Ardhika", "Nofardiansa", "dhika@gmail.com", "L", "087877766655","Kopo"
	10008, "adriandhy", "listentofeast", "Ryan", "Adriandhy", "adriandhy@gmail.com", "L", "087709875374","Kopo"
	10009, "ficocacola", "seveneleven", "Fico", "Fachriza", "fico@gmail.com", "L", "087862489531","Kopo"
	10010, "alphisugoi", "twitterbapuk", "Alphiandi", "Sugoi", "sugoi@gmail.com", "L", "08771597328","Kopo"
	);

INSERT INTO admin VALUES(
	201, "Luther Hariyanto"
	202, "Manuel Leleuly"
	203, "Indriana Fadillah"
	204, "Zinedine Zidane"
	205, "Rafqi Ramadhan"
	);