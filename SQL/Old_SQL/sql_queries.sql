use software;

LOAD DATA INFILE 'C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/Additional.csv'
	 INTO TABLE pickup
	 FIELDS TERMINATED BY ','
	 ENCLOSED BY '"'
 	 LINES TERMINATED BY '\n'
     IGNORE 1 ROWS
     (Pickup_dates,Zip_code);

LOAD DATA INFILE 'C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/Login.csv'
	 INTO TABLE login
	 FIELDS TERMINATED BY ','
	 ENCLOSED BY '"'
 	 LINES TERMINATED BY '\n'
     IGNORE 1 ROWS
     (Email,Password);

LOAD DATA INFILE 'C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/addition.csv'
	 INTO TABLE additional_info
	 FIELDS TERMINATED BY ','
	 ENCLOSED BY '"'
 	 LINES TERMINATED BY '\n'
     IGNORE 1 ROWS
     (ID, Size_Of_Donation, Location, Hear_about, Comments);

LOAD DATA INFILE 'C:/ProgramData/MySQL/MySQL Server 8.0/Uploads/forms.csv'
	 INTO TABLE forms
	 FIELDS TERMINATED BY ','
	 ENCLOSED BY '"'
 	 LINES TERMINATED BY '\n'
     IGNORE 1 ROWS
     (ID, Email, First_name, Last_name, Contact_method, City, Zip_code, Cross_Street, Suite_Apartment_num, Address,Phone_Number);
     
