CREATE TABLE pesawat(
	kode_pesawat INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nama_pesawat VARCHAR(50) NOT NULL,
	jenis_pesawat VARCHAR(50) NOT NULL
);


CREATE TABLE maskapai(
	kode_maskapai INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nama_maskapai VARCHAR(50) NOT NULL
);
CREATE TABLE tiket(
	kode_tiket INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	no_penerbangan varchar(50) NOT NULL,
	kelas varchar(100) NOT NULL,
	asal varchar(100) NOT NULL,
	tujuan varchar(100) NOT NULL,
	harga int(100) NOT NULL,
	kode_pesawat INT NOT NULL,
	FOREIGN KEY(kode_pesawat) REFERENCES pesawat(kode_pesawat) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE customer_memesan_tiket(
	id_customer INT NOT NULL,
	kode_tiket INT NOT NULL,
	kode_pesan INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	kode_maskapai INT NOT NULL,
	nama_pemesan varchar(100) NOT NULL,
	no_identitas varchar(100) NOT NULL,
	tgl_penerbangan varchar(100) NOT NULL,
	waktu_terbang INT NOT NULL,
	tgl_tiba varchar(100) NOT NULL,
	FOREIGN KEY (id_customer) REFERENCES customer(id_customer) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (kode_tiket) REFERENCES tiket(kode_tiket) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (kode_maskapai) REFERENCES maskapai(kode_maskapai) ON UPDATE CASCADE ON DELETE CASCADE
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

INSERT INTO pesawat VALUES(
	4001,'Boeing',777);

INSERT INTO maskapai VALUES(
	5001,'Garuda');
	
INSERT INTO tiket VALUES(
	30001, 'GA-JB01', 'firstclass', 'Soekarno Hatta (Jakarta)', 'Ngurah Rai (Bali)', 30000000, 4001);
	
INSERT INTO customer_memesan_tiket VALUES(
        10001, 30001, 60001, 5001, "Rifqi", "3271040104980010", "23/01/2019", "150", "23/01/2019");
