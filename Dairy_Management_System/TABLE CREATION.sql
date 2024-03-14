TABLE CREATION


CREATE TABLE register (
  username varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  Date date NOT NULL DEFAULT current_timestamp()
);

CREATE TABLE login (
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  Date date NOT NULL DEFAULT current_timestamp()
);

CREATE TABLE cust_details (
  id int(5) NOT NULL,
  fname varchar(15) NOT NULL,
  lname varchar(15) NOT NULL,
  phonenumber int(15) NOT NULL,
  address varchar(20) NOT NULL,
  totalamount int(10) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE milk (
  id int(2) NOT NULL,
  Customer_name varchar(15) NOT NULL,
  Milk_quantity int(5) NOT NULL,
  price int(5) NOT NULL
);

CREATE TABLE ghee (
  id int(2) NOT NULL,
  Customer_name varchar(15) NOT NULL,
  Ghee_quantity int(5) NOT NULL,
  price int(5) NOT NULL
);

CREATE TABLE butter (
  id int(2) NOT NULL,
  Customer_name varchar(15) NOT NULL,
  Butter_quantity int(5) NOT NULL,
  price int(5) NOT NULL
); 

CREATE TABLE cheese (
  id int(2) NOT NULL,
  Customer_name varchar(15) NOT NULL,
  Cheese_quantity int(5) NOT NULL,
  price int(5) NOT NULL
);

CREATE TABLE egg (
  id int(2) NOT NULL,
  Customer_name varchar(15) NOT NULL,
  Egg_quantity int(5) NOT NULL,
  price int(5) NOT NULL
);