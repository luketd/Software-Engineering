################################################################################
#To be implimented into PHP
################################################################################

use software;

select * from additional_info;
select * from forms;
select * from login;
select * from pickup;

#########################################
#Password Queries
##get the password of the user, replace email and password with variable
Select IF(password=4321,TRUE,FALSE) from login where Email="matt@gmail.com" ;
##will go to 0 if password or email doesnt match

##INSERT email and password, put email and password as variables
INSERT INTO login (Email, password) VALUES("testing@gmail.com", "password");

#########################################
#Forms Queries

#Forms, all Values are variables
INSERT into forms (ID, Email, First_name, Last_name, Contact_method, City, Zip_code, Cross_Street, Suite_Apartment_num, Address,Phone_Number)
	VALUES(437892, "testing@gmail.com", "testing", "test", "Phone", "Medford", "8077", null, null, "789 Main St", "243-346-8123" );

#additional_info
INSERT into additional_info (ID, Size_Of_Donation, Location, Hear_about, Comments)
	VALUES(437892, "large", "in shed", "Facebook", "Breakable, be safe");

#####################################
#Get receipt data
Select forms.ID, forms.First_name, forms.Last_name, forms.City, forms.Zip_code, forms.Address, forms.Phone_number, info.Size_of_donation, info.Location from forms inner join additional_info as info on info.ID=forms.ID where forms.ID=1234;


############################################################################
#Pickup Queries

#get zip code from this query
Select Zip_code from forms where ID=1234;
#Then, get the first 6 pickup
Select pickup.Pickup_dates from pickup where pickup.Zip_code=8077 and InUse IS null order by Pickup_dates limit 6;

#Update schedule when pickup is chosen
UPDATE pickup set InUse=1 where Pickup_dates="11/2/2020" and Zip_code=8077;



