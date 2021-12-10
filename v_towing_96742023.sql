
create database v_towing_96742023;

 
use v_towing_96742023;

create table Company(
Company_ID int auto_increment,
Company_Name varchar(30) not null,
Company_PhoneNumber varchar(20) not null,
Company_EmailAddress varchar(30),
Company_WebsiteAddress varchar (20),
primary key(Company_ID)
);

create table Company_Location(
CompanyLocation_Name varchar(30) not null,
CompanyLocation_Region char(30),
CompanyLocation_StreetName varchar(20),
CompanyLocation_GPSAddress varchar(10),
Company_ID int auto_increment,
foreign key (Company_ID) references Company(Company_ID)
);

create table Towing_Agent(
Agent_Id int not null,
Agent_Name char(30),
Agent_PhoneNumber varchar(20),
Agent_EmailAddress varchar(30),
Company_Name varchar(30) not null,
Company_ID int auto_increment,
foreign key ( Company_ID) references Company(Company_ID)
on update cascade
on delete cascade
);	

create table Vehicle(
Vehicle_ID int auto_increment,
Vehicle_NumberPlate varchar(10),
Vehicle_Type varchar(15),
Vehicle_ManufacturingDate date,
Vehicle_Condition varchar(30),
Company_Id int,
primary key(Vehicle_ID),
foreign key(Company_Id) references Company(Company_Id)
);

create table RegisteredCarOwner(
CarOwner_Id int auto_increment,
CarOwner_Name varchar(20),
CarOwner_PhoneNumber varchar(20),
CarOwner_EmailAddress varchar(30),
CarOwner_LocationAddress varchar(30),
Vehicle_ID int,
primary key(CarOwner_Id),
foreign key(Vehicle_ID) references Vehicle(Vehicle_ID)
);

create table Towing(
Towing_ID int auto_increment,
Towing_PickupPoint varchar(30),
Towing_DropOff varchar(50),
Towing_Distance float,
Towing_Reason char(30),
Company_ID int,
primary key(Towing_ID),
foreign key(Company_ID)references Company(Company_ID)
on update cascade
on delete cascade
);


create table TowingTruck (
TowingTruck_NumberPlate varchar(20),
TowingTruck_Condition varchar(30),
Company_ID int,
Towing_ID int,
foreign key (Company_ID) references Company(Company_ID),
foreign key (Towing_ID) references Towing(Towing_ID)
on update cascade
on delete cascade
);



create table JunkCarRemoval(
JunkCarRemoval_PickupPoint varchar(30),
JunkCarRemoval_DropOff varchar(50),
JunkCarRemoval_Distance varchar(20),
Company_ID int,
Vehicle_ID int,
foreign key (Company_ID) references Company(Company_ID),
foreign key(Vehicle_ID)references Vehicle(Vehicle_ID)
on update cascade
on delete cascade
);


create table RoadsideRepairs(
Repair_AutomobilePartName varchar(30),
Repair_Model varchar(20),
Repair_Size varchar(20),
Repair_Description varchar(30),
Company_ID int,
Vehicle_ID int,
foreign key (Company_ID) references Company(Company_ID),
foreign key(Vehicle_ID ) references Vehicle(Vehicle_ID )
on update cascade
on delete cascade 
);

create table FuelRefill(
FuelRefil_NumberOfLitres int,
FuelRefil_Type enum("diesel","petrol","gas"),
Company_ID int,
Vehicle_ID int,
foreign key (Company_ID) references Company(Company_ID),
foreign key(Vehicle_ID) references Vehicle(Vehicle_ID)
on update cascade
on delete cascade
);


create table HeavyDutyTowing(
HeavyDutyTowing_weight int,
HeavyDutyTowing_decription varchar(50),
check (HeavyDutyTowing_weight <= 15),
Company_ID int,
Vehicle_ID int,
Towing_ID int,
foreign key (Company_ID) references Company(Company_ID),
foreign key(Vehicle_ID) references Vehicle(Vehicle_ID),
foreign key (Towing_ID)references Towing(Towing_ID)
on update cascade
on delete cascade
);

create table Payment(
Payment_ReceiptNumber int not null,
Payment_PaidAmount int,
Payment_Date date,
Company_ID int,
CarOwner_Id int,
foreign key (Company_ID) references Company(Company_ID),
foreign key (CarOwner_Id) references RegisteredCarOwner(CarOwner_Id)
on update cascade
on delete cascade
);

/* indexes created, speeds up the process of searching certain entities*/

create unique index Index_Company
on Company (Company_Name);

create unique index Index_RegisteredCarOwner
on RegisteredCarOwner (CarOwner_Name);

create unique index Index_Agent
on Towing_Agent (Agent_Name);

create unique index Index_Vehicle
on Vehicle (Vehicle_NumberPlate);

insert into Company values(10020311, "Adom Towing Services", "+233503848330", "adomtowing02@yahoo.com", "adomtowing.com");
insert into Company values(10020312, "Nuel Towing Services", "+233500548996", "nueltowing@ygmail.com", "nueltowing.com");
insert into Company values(10020313, "FirstCall Towing Services", "+23350387583", "firstcalltowing14@yahoo.com", "firstcalltowing.com");
insert into Company values(10020314, "City Motors Towing Services", "+233505890300", "citymotorstowing@gmail.com", "citymotorstowing.com");
insert into Company values(10020315, "Emergency Towing Services", "+233503668024", "emergencytowing@yahoo.com", "emergencytowing.com");


insert into Vehicle values(1301,"GW-4848-10","Corolla",'2009-03-11',"Has a punctured tyre",10020315);
insert into Vehicle values(1302,"GN-4493-15","Toyota",'2015-11-21',"Damaged Bumper",10020312);
insert into Vehicle values(1303,"CR-7292-20","Saloon",'2020-02-04',"Empy fuel tank",10020311);
insert into Vehicle values(1304,"WR-7823-11","Tipper Truck",'2015-11-21',"Broken Starter Motor",10020314);
insert into Vehicle values(1305,"AR-2104-10","BMW",'2010-01-30',"Sputtered Engine",10020313);

insert into RegisteredCarOwner values(1001,"Amed Sam",+233506890030,"amedsam@gmail.com","Opposite Cocoa Clinic",1301);
insert into RegisteredCarOwner values(1002,"Prince Abu",+2335068990,"princeabu39@gmail.com","Near Melcom Shop",1304);
insert into RegisteredCarOwner values(1003,"Lianna Mensah",+233506890028,"liannamensah@yahoo.com","Adjascent Ocar Decor",1303);
insert into RegisteredCarOwner values(1004,"Carl Finn",+233579371039,"carlfinn@gmail.com","Near Relief Hospital",1305);
insert into RegisteredCarOwner values(1005,"Afia Addo",+233556897639,"afiaaddo@gmail.com","Around Adepa Royal Hotel",1302);

insert into Towing values(001,"Tema Motorway","Trinity Car Pack",3.6,"Faulty Vehicle",10020312 );
insert into Towing values(002,"Circle Roundabout","Kwame Nkrumah Car Pack",2.4,"Unauthorized parking",10020315);
insert into Towing values(003,"Fibii Mall","Fijai Station Car Pack",5.8,"Faulty Vehicle",10020313);
insert into Towing values(004,"Apam Junction","Cape Coast Stadium Car Pack",4.6,"Unauthorized parking",10020314);
insert into Towing values(005,"Anyianam-Kumasi Road","Kumasi Metroplitan Assembly",1.4,"Unauthorized parking",10020311);

insert into Company_Location values("North Kaneshie","Greater Accra Region","Zeeba Lane","GR-089-734",10020315);
insert into Company_Location values("East Legon","Greater Accra Region","East Legon Junction","GR-865-245",10020314);
insert into Company_Location values("Agona Swedru","Central Region","Agona West","CR-567-087",10020311);
insert into Company_Location values("Kumasi Central Market","Ashanti Region","Tafo","AR-234-765",10020314);
insert into Company_Location values("Agona Nkwanta","Westen Region","Agona","WR-574-247",10020312);
insert into Company_Location values("Mamprobi","Greater Accra Region","Akoshie Junction","GR-897-567",10020315);
insert into Company_Location values("Apam","Central Region","Asebu","CR-746-769",10020313);
insert into Company_Location values("Nyankrom","Western Region","Axim","WR-858-876",10020314);
insert into Company_Location values("Asamankese","Ashanti Region","Manhyia","AR-343-363",10020313);
insert into Company_Location values("Anomabo","Central Region","Essiam","CR-876-485",10020312);


insert into Towing_Agent values("1030","George Kumi","+233579393287","georgekumi@gmail.com","Adom Towing Services",10020311);
insert into Towing_Agent values("1031","Felicia Anor","+233578693558","feliciaanor@gmail.com","Emergency Towing Services",10020315);
insert into Towing_Agent values("1032","Naa Kai","+233509003387","naakai@yahoo.com","FirstCall Towing Services",10020313);
insert into Towing_Agent values("1033","Kevin Allotey","+233579393287","kevinallotey@gmail.com","Nuel Towing Services",10020311);
insert into Towing_Agent values("1034","Manuel Rooster","+233556293580","manuelrooster@yahoo.com","Emergency Towing Services",10020314);
insert into Towing_Agent values("1035","Erica Daniels","+233509361200","ericadaniels16@gmail.com","City Motors Towing Services",10020312);
insert into Towing_Agent values("1036","Frank Kwese","+233509195089","frankkwese@yahoo.com","Adom Towing Services",10020313);
insert into Towing_Agent values("1037","William Tetteh","+23350103299","williamtetteh_16@gmail.com","FirstCall Towing Services","10020312");
insert into Towing_Agent values("1038","Frances Duah","+233240322287","francesduah_15@yahoo.com","City Motors Towing Services",10020311);
insert into Towing_Agent values("1039","Jemima Senie","+233572390087","jemimasenie2014@gmail.com","Nuel Towing Services",10020315);


insert into TowingTruck values("GW-4777-2010","Good condition",10020311,001);
insert into TowingTruck values("GN-1046-2011","Slightly stable condition",10020314,002);
insert into TowingTruck values("CR-3445-2009","Good condition",10020313,001);
insert into TowingTruck values("AR-5707-2019","Good condition",10020311,005);
insert into TowingTruck values("GW-2740-2015","Good condition",10020315,004);
insert into TowingTruck values("WR-5809-2010","Good condition",10020312,001);
insert into TowingTruck values("GN-8641-2011","Slightyly good condition",10020313,003);
insert into TowingTruck values("CR-0644-2020","Good condition",10020311,002);
insert into TowingTruck values("AS-4699-2013","Bad condition",10020315,005);
insert into TowingTruck values("VR-6438-2006","Good condition",10020312,001);


insert into JunkCarRemoval values("Circle Roundabout","Kwame Nkrumah Car Pack",2.4,10020312,1301);
insert into JunkCarRemoval values("Apam Junction","Cape Coast Stadium Car Pack",4.6,10020314,1304);
insert into JunkCarRemoval values("Fibii Mall","Fijai Station Car Pack",5.8,10020313,1303);
insert into JunkCarRemoval values("Tema Motorway","Trinity Car Pack",3.6,10020314,1302);
insert into JunkCarRemoval values("Anyianam-Kumasi Road","Kumasi Metroplitan Assembly",1.4,10020315,1303);
insert into JunkCarRemoval values("Circle Roundabout","Kwame Nkrumah Car Pack",2.4,10020311,1305);
insert into JunkCarRemoval values("Apam Junction","Cape Coast Stadium Car Pack",4.6,10020312,1304);
insert into JunkCarRemoval values("Fibii Mall","Fijai Station Car Pack",5.8,10020315,1301);
insert into JunkCarRemoval values("Tema Motorway","Trinity Car Pack",3.6,10020311,1305);
insert into JunkCarRemoval values("Anyianam-Kumasi Road","Kumasi Metroplitan Assembly",1.4,10020314,1302);


insert into RoadsideRepairs values("alternator","MT 201","10x7 cm","changed faulty altenator",10020312,1301);
insert into RoadsideRepairs values("bumper","BP 506","20x5 cm","changed bent bumper",10020311,1305);
insert into RoadsideRepairs values("engine starter","Pegues 1:25","5x6 cm","changed faulty engine starter",10020314,1302);
insert into RoadsideRepairs values("disk brake","AMX'27","15x2 cm","changed broken disk brake",10020314,1301);
insert into RoadsideRepairs values(NULL,"MPC 72","10x5 cm","changed faulty oxygen sensor",10020315,1304);
insert into RoadsideRepairs values("engine block","M 227","20x10 cm","changed faulty engine block",10020312,1305);
insert into RoadsideRepairs values(NULL,"SS1/25","15x10 cm","changed faulty window motor",10020314,1302);
insert into RoadsideRepairs values("battery","HO M224","20x15 cm","changed weak battery",10020315,1301);
insert into RoadsideRepairs values("vacuum gauge","PP0024","10x2 cm","changed broken vacuum guage",10020312,1305);
insert into RoadsideRepairs values("brake light","W03","5x5 cm","changed faulty brake light",10020311,1303);

insert into FuelRefill values(52, "petrol",10020315,1305);
insert into FuelRefill values(51, "diesel",10020313,1301);
insert into FuelRefill values(62, "petrol",10020311,1302);
insert into FuelRefill values(57, "petrol",10020311,1301);
insert into FuelRefill values(60, "diesel",10020314,1304);
insert into FuelRefill values(12, "gas",10020312,1302);
insert into FuelRefill values(49, "petrol",10020313,1305);
insert into FuelRefill values(54, "petrol",10020314,1304);
insert into FuelRefill values(15, "gas",10020311,1301);
insert into FuelRefill values(62, "diesel",10020315,1303);


insert into HeavyDutyTowing values(9,"Shipment of clothes",10020313,1301,004);
insert into HeavyDutyTowing values(14,"Shipment of automobile parts",10020313,1304,003);
insert into HeavyDutyTowing values(12,"Shipment of tyre",10020313,1303,002);
insert into HeavyDutyTowing values(15,"Shipment of electrical gardgets",10020313,1305,001);
insert into HeavyDutyTowing values(9,"Shipment of clothes",10020313,1301,005);
insert into HeavyDutyTowing values(15,"Shipment of electrical gardgets",10020313,1302,003);
insert into HeavyDutyTowing values(13,"Shipment of automobile parts",10020313,1304,002);
insert into HeavyDutyTowing values(11,"Shipment of tyre",10020313,1301,004);
insert into HeavyDutyTowing values(15,"Shipment of automobile parts",10020313,1302,003);
insert into HeavyDutyTowing values(10,"Shipment of clothes",10020313,1305,001);

insert into Payment values(178063401,200,'2020-02-11',10020312,1003);
insert into Payment values(178063402,250,'2020-12-21',10020314,1001);
insert into Payment values(178063403,100,'2019-08-07',10020311,1005);
insert into Payment values(178063404,350,'2020-03-19',10020312,1004);
insert into Payment values(178063405,120,'2018-06-13',10020312,1003);
insert into Payment values(178063406,275,'2020-02-24',10020315,1002);
insert into Payment values(178063407,400,'2020-04-19',10020311,1003);
insert into Payment values(178063408,190,'2021-09-11',10020313,1004);
insert into Payment values(178063409,510,'2021-05-08',10020315,1003);
insert into Payment values(1780634010,290,'2019-02-23',10020314,1001);


 /* query 1*/
SELECT Company.Company_Name, Vehicle.Vehicle_ID
FROM (Vehicle
LEFT JOIN Company ON Vehicle.Company_ID = Company.Company_ID)
ORDER BY Vehicle.Vehicle_ID asc;



/*query 2 */
SELECT * FROM Towing 
WHERE Towing_Reason LIKE '%unauthorized%';


/*query 3*/
SELECT HeavyDutyTowing_weight,
CASE
    WHEN HeavyDutyTowing_weight < 15 THEN 'The towing weight is appropriate'
    WHEN HeavyDutyTowing_weight = 15 THEN 'The towing weight is just above normal '
    ELSE 'Towing cannot take place '

END AS HeavyDutyTowingWeight
FROM HeavyDutyTowing
ORDER BY HeavyDutyTowing.HeavyDutyTowing_weight asc;


/* query 4*/
SELECT Vehicle.Vehicle_NumberPlate, RegisteredCarOwner.CarOwner_ID
FROM (RegisteredCarOwner
INNER JOIN Vehicle ON RegisteredCarOwner.Vehicle_ID = Vehicle.Vehicle_ID)
ORDER BY RegisteredCarOwner.CarOwner_ID asc;

/*query 5*/
 select isnull(NULL);

/*query 6*/
SELECT SUM(Payment_PaidAmount) AS Total_For_2020
FROM Payment
WHERE Payment_Date like '%2020%';
