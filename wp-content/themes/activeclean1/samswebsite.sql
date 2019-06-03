-- create and select the database
/*DROP DATABASE IF EXISTS samswebsite;
CREATE DATABASE samswebsite;
USE samswebsite;*/

/*
USE activecl_samswebsite


*/

-- create the tables for the database

/*CREATE TABLE customers (
  customerID        INT            NOT NULL   AUTO_INCREMENT,
  emailAddress      VARCHAR(255)   NOT NULL,
  password          VARCHAR(60)    NOT NULL,
  firstName         VARCHAR(60)    NOT NULL,
  lastName          VARCHAR(60)    NOT NULL,
  shipAddressID     INT                       DEFAULT NULL,
  billingAddressID  INT                       DEFAULT NULL,  
  PRIMARY KEY (customerID),
  UNIQUE INDEX emailAddress (emailAddress)
);
*/
/*
January - 31 days
February - 28 days in a common year and 29 days in leap years
March - 31 days
April - 30 days
May - 31 days
June - 30 days
July - 31 days
August - 31 days
September - 30 days
October - 31 days
November - 30 days
December - 31 days
*/
/*CREATE TABLE appointments (
    Day DATE NOT NULL,
    0800-0900 VARCHAR (1) NULL,
    0900-1000 VARCHAR (1) NULL,
    1000-1100 VARCHAR (1) NULL,
    1100-1200 VARCHAR (1) NULL,
    1200-0100 VARCHAR (1) NULL,
    0100-0200 VARCHAR (1) NULL,
    0200-0300 VARCHAR (1) NULL,
    0300-0400 VARCHAR (1) NULL,
    0400-0500 VARCHAR (1) NULL,
    0500-0600 VARCHAR (1) NULL,
    0600-0700 VARCHAR (1) NULL
);
*/

/*CREATE TABLE orders(
    orderID INT NOT NULL AUTO_INCREMENT,
    type VARCHAR (25) NOT NULL,
    first_name VARCHAR (100) NOT NULL,
    last_name VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    phone_number  VARCHAR (20) NOT NULL,
    st_address VARCHAR(100) NOT NULL,
    apt_num VARCHAR (10) NULL,
    city VARCHAR (20) NOT NULL,
    state VARCHAR (20) NOT NULL,
    zip VARCHAR (10) NOT NULL,
    bdrms INT NOT NULL,
    baths INT NOT NULL,
    date_of_service VARCHAR (20) NOT NULL,
    time_of_service VARCHAR (20) NOT NULL,
    duration VARCHAR (20) NOT NULL,
    enter VARCHAR (255) NOT NULL,
    enter_instructions text NULL,
    more_information text NULL
);
*/

/*
CREATE TABLE orders(
    orderID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(25) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number  VARCHAR(20) NOT NULL,
    st_address VARCHAR(100) NOT NULL,
    apt_num VARCHAR(10) NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    zip VARCHAR(10) NOT NULL,
    bdrms INT NOT NULL,
    baths INT NOT NULL,
    date_of_service VARCHAR(20) NOT NULL,
    time_of_service VARCHAR(20) NOT NULL,
    duration VARCHAR(20) NULL,
    enter VARCHAR(255) NOT NULL,
    enter_instructions text NULL,
    more_information text NULL,
    time_ordered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_amount_db VARCHAR(20) NOT NULL
);
*/

/*
CREATE TABLE appointments(
    DAY DATE NOT NULL,
    eighttonine VARCHAR(1) NULL,
    ninetoten VARCHAR(1) NULL,
    tentoeleven VARCHAR(1) NULL,
    eleventotwelve VARCHAR(1) NULL,
    twelvetoone VARCHAR(1) NULL,
    onetotwo VARCHAR(1) NULL,
    twotothree VARCHAR(1) NULL,
    threetofour VARCHAR(1) NULL,
    fourtofive VARCHAR(1) NULL,
    fivetosix VARCHAR(1) NULL,
    sixtoseven VARCHAR(1) NULL
);
*/

CREATE TABLE appointments (
    Day DATE NOT NULL,
    8AM_9AM VARCHAR(1) NULL,
    9AM_10AM VARCHAR(1) NULL,
    10AM_11AM VARCHAR(1) NULL,
    11AM_12PM VARCHAR(1) NULL,
    12AM_1PM VARCHAR(1) NULL,
    1PM_2PM VARCHAR(1) NULL,
    2PM_3PM VARCHAR(1) NULL,
    3PM_4PM VARCHAR(1) NULL,
    4PM_5PM VARCHAR(1) NULL,
    5PM_6PM VARCHAR(1) NULL,
    6PM_7PM VARCHAR(1) NULL
);

CREATE TABLE customers (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    customer_id VARCHAR (255) NOT NULL,
    first_name VARCHAR (255) NOT NULL,
    last_name VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    phone_number VARCHAR (255) NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE transactions (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    transaction_id VARCHAR (255) NOT NULL,
    customer_id VARCHAR (255) NOT NULL,
    type VARCHAR(25) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number  VARCHAR(20) NOT NULL,
    st_address VARCHAR(100) NOT NULL,
    apt_num VARCHAR(10) NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    zip VARCHAR(10) NOT NULL,
    bdrms INT NOT NULL,
    baths INT NOT NULL,
    extra_services VARCHAR(255) NULL,
    date_of_service VARCHAR(20) NOT NULL,
    time_of_service VARCHAR(20) NOT NULL,
    duration VARCHAR(20) NULL,
    enter VARCHAR(255) NOT NULL,
    enter_instructions text NULL,
    more_information text NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    subtotal_db VARCHAR(20) NOT NULL,
    item_sales_tax_db VARCHAR(20) NOT NULL,
    total_amount_db VARCHAR(20) NOT NULL
);

CREATE table giftcards (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    customer_id VARCHAR (255) NOT NULL,
    transaction_id VARCHAR (255) NOT NULL,
    amount VARCHAR(20) NOT NULL,
    to_name VARCHAR(100) NOT NULL,
    recipient_email VARCHAR(100) NOT NULL,
    from_name VARCHAR(100) NOT NULL,
    sender_email VARCHAR(100) NOT NULL,
    message TEXT NULL,
    card_code VARCHAR(100) NOT NULL,
    taken VARCHAR(100) NULL
);

INSERT INTO appointments (Day) VALUES
('2019-01-01'),
('2019-01-02'),
('2019-01-03'),
('2019-01-04'),
('2019-01-05'),
('2019-01-06'),
('2019-01-07'),
('2019-01-08'),
('2019-01-09'),
('2019-01-10'),
('2019-01-11'),
('2019-01-12'),
('2019-01-13'),
('2019-01-14'),
('2019-01-15'),
('2019-01-16'),
('2019-01-17'),
('2019-01-18'),
('2019-01-19'),
('2019-01-20'),
('2019-01-21'),
('2019-01-22'),
('2019-01-23'),
('2019-01-24'),
('2019-01-25'),
('2019-01-26'),
('2019-01-27'),
('2019-01-28'),
('2019-01-29'),
('2019-01-30'),
('2019-01-31'),

('2019-02-01'),
('2019-02-02'),
('2019-02-03'),
('2019-02-04'),
('2019-02-05'),
('2019-02-06'),
('2019-02-07'),
('2019-02-08'),
('2019-02-09'),
('2019-02-10'),
('2019-02-11'),
('2019-02-12'),
('2019-02-13'),
('2019-02-14'),
('2019-02-15'),
('2019-02-16'),
('2019-02-17'),
('2019-02-18'),
('2019-02-19'),
('2019-02-20'),
('2019-02-21'),
('2019-02-22'),
('2019-02-23'),
('2019-02-24'),
('2019-02-25'),
('2019-02-26'),
('2019-02-27'),
('2019-02-28'),

('2019-03-01'),
('2019-03-02'),
('2019-03-03'),
('2019-03-04'),
('2019-03-05'),
('2019-03-06'),
('2019-03-07'),
('2019-03-08'),
('2019-03-09'),
('2019-03-10'),
('2019-03-11'),
('2019-03-12'),
('2019-03-13'),
('2019-03-14'),
('2019-03-15'),
('2019-03-16'),
('2019-03-17'),
('2019-03-18'),
('2019-03-19'),
('2019-03-20'),
('2019-03-21'),
('2019-03-22'),
('2019-03-23'),
('2019-03-24'),
('2019-03-25'),
('2019-03-26'),
('2019-03-27'),
('2019-03-28'),
('2019-03-29'),
('2019-03-30'),
('2019-03-31'),

('2019-04-01'),
('2019-04-02'),
('2019-04-03'),
('2019-04-04'),
('2019-04-05'),
('2019-04-06'),
('2019-04-07'),
('2019-04-08'),
('2019-04-09'),
('2019-04-10'),
('2019-04-11'),
('2019-04-12'),
('2019-04-13'),
('2019-04-14'),
('2019-04-15'),
('2019-04-16'),
('2019-04-17'),
('2019-04-18'),
('2019-04-19'),
('2019-04-20'),
('2019-04-21'),
('2019-04-22'),
('2019-04-23'),
('2019-04-24'),
('2019-04-25'),
('2019-04-26'),
('2019-04-27'),
('2019-04-28'),
('2019-04-29'),
('2019-04-30'),


('2019-05-01'),
('2019-05-02'),
('2019-05-03'),
('2019-05-04'),
('2019-05-05'),
('2019-05-06'),
('2019-05-07'),
('2019-05-08'),
('2019-05-09'),
('2019-05-10'),
('2019-05-11'),
('2019-05-12'),
('2019-05-13'),
('2019-05-14'),
('2019-05-15'),
('2019-05-16'),
('2019-05-17'),
('2019-05-18'),
('2019-05-19'),
('2019-05-20'),
('2019-05-21'),
('2019-05-22'),
('2019-05-23'),
('2019-05-24'),
('2019-05-25'),
('2019-05-26'),
('2019-05-27'),
('2019-05-28'),
('2019-05-29'),
('2019-05-30'),
('2019-05-31'),

('2019-06-01'),
('2019-06-02'),
('2019-06-03'),
('2019-06-04'),
('2019-06-05'),
('2019-06-06'),
('2019-06-07'),
('2019-06-08'),
('2019-06-09'),
('2019-06-10'),
('2019-06-11'),
('2019-06-12'),
('2019-06-13'),
('2019-06-14'),
('2019-06-15'),
('2019-06-16'),
('2019-06-17'),
('2019-06-18'),
('2019-06-19'),
('2019-06-20'),
('2019-06-21'),
('2019-06-22'),
('2019-06-23'),
('2019-06-24'),
('2019-06-25'),
('2019-06-26'),
('2019-06-27'),
('2019-06-28'),
('2019-06-29'),
('2019-06-30'),

('2019-07-01'),
('2019-07-02'),
('2019-07-03'),
('2019-07-04'),
('2019-07-05'),
('2019-07-06'),
('2019-07-07'),
('2019-07-08'),
('2019-07-09'),
('2019-07-10'),
('2019-07-11'),
('2019-07-12'),
('2019-07-13'),
('2019-07-14'),
('2019-07-15'),
('2019-07-16'),
('2019-07-17'),
('2019-07-18'),
('2019-07-19'),
('2019-07-20'),
('2019-07-21'),
('2019-07-22'),
('2019-07-23'),
('2019-07-24'),
('2019-07-25'),
('2019-07-26'),
('2019-07-27'),
('2019-07-28'),
('2019-07-29'),
('2019-07-30'),
('2019-07-31'),

('2019-08-01'),
('2019-08-02'),
('2019-08-03'),
('2019-08-04'),
('2019-08-05'),
('2019-08-06'),
('2019-08-07'),
('2019-08-08'),
('2019-08-09'),
('2019-08-10'),
('2019-08-11'),
('2019-08-12'),
('2019-08-13'),
('2019-08-14'),
('2019-08-15'),
('2019-08-16'),
('2019-08-17'),
('2019-08-18'),
('2019-08-19'),
('2019-08-20'),
('2019-08-21'),
('2019-08-22'),
('2019-08-23'),
('2019-08-24'),
('2019-08-25'),
('2019-08-26'),
('2019-08-27'),
('2019-08-28'),
('2019-08-29'),
('2019-08-30'),
('2019-08-31'),

('2019-09-01'),
('2019-09-02'),
('2019-09-03'),
('2019-09-04'),
('2019-09-05'),
('2019-09-06'),
('2019-09-07'),
('2019-09-08'),
('2019-09-09'),
('2019-09-10'),
('2019-09-11'),
('2019-09-12'),
('2019-09-13'),
('2019-09-14'),
('2019-09-15'),
('2019-09-16'),
('2019-09-17'),
('2019-09-18'),
('2019-09-19'),
('2019-09-20'),
('2019-09-21'),
('2019-09-22'),
('2019-09-23'),
('2019-09-24'),
('2019-09-25'),
('2019-09-26'),
('2019-09-27'),
('2019-09-28'),
('2019-09-29'),
('2019-09-30'),


('2019-10-01'),
('2019-10-02'),
('2019-10-03'),
('2019-10-04'),
('2019-10-05'),
('2019-10-06'),
('2019-10-07'),
('2019-10-08'),
('2019-10-09'),
('2019-10-10'),
('2019-10-11'),
('2019-10-12'),
('2019-10-13'),
('2019-10-14'),
('2019-10-15'),
('2019-10-16'),
('2019-10-17'),
('2019-10-18'),
('2019-10-19'),
('2019-10-20'),
('2019-10-21'),
('2019-10-22'),
('2019-10-23'),
('2019-10-24'),
('2019-10-25'),
('2019-10-26'),
('2019-10-27'),
('2019-10-28'),
('2019-10-29'),
('2019-10-30'),
('2019-10-31'),

('2019-11-01'),
('2019-11-02'),
('2019-11-03'),
('2019-11-04'),
('2019-11-05'),
('2019-11-06'),
('2019-11-07'),
('2019-11-08'),
('2019-11-09'),
('2019-11-10'),
('2019-11-11'),
('2019-11-12'),
('2019-11-13'),
('2019-11-14'),
('2019-11-15'),
('2019-11-16'),
('2019-11-17'),
('2019-11-18'),
('2019-11-19'),
('2019-11-20'),
('2019-11-21'),
('2019-11-22'),
('2019-11-23'),
('2019-11-24'),
('2019-11-25'),
('2019-11-26'),
('2019-11-27'),
('2019-11-28'),
('2019-11-29'),
('2019-11-30'),
('2019-11-30'),

('2019-12-01'),
('2019-12-02'),
('2019-12-03'),
('2019-12-04'),
('2019-12-05'),
('2019-12-06'),
('2019-12-07'),
('2019-12-08'),
('2019-12-09'),
('2019-12-10'),
('2019-12-11'),
('2019-12-12'),
('2019-12-13'),
('2019-12-14'),
('2019-12-15'),
('2019-12-16'),
('2019-12-17'),
('2019-12-18'),
('2019-12-19'),
('2019-12-20'),
('2019-12-21'),
('2019-12-22'),
('2019-12-23'),
('2019-12-24'),
('2019-12-25'),
('2019-12-26'),
('2019-12-27'),
('2019-12-28'),
('2019-12-29'),
('2019-12-30'),
('2019-12-31');




/*
January - 31 days
February - 28 days in a common year and 29 days in leap years
March - 31 days
April - 30 days
May - 31 days
June - 30 days
July - 31 days
August - 31 days
September - 30 days
October - 31 days
November - 30 days
December - 31 days
*/


/*
when appointment is set
update appointments set 8to9 = 1 where Day = '2018-09-28';
*/

/*

*/

/*CREATE TABLE january (
    days INT NOT NULL AUTO_INCREMENT,
    day INT NOT NULL,
    timeBlock VARCHAR(255) NOT NOT NULL,
    taken VARCHAR(10) NULL
);

INSERT INTO january (days, day, timeBlock, taken) VALUES
(null, 1, '8:00AM-9:00AM', 'no'),
(null, 1, '9:00AM-10:00AM', 'no'),
(null, 1, '10:00AM-11:00AM', 'no'),
(null, 1, '11:00AM-12:00AM', 'no'),
(null, 1, '12:00AM-1:00AM', 'no'),
(null, 1, '1:00AM-2:00AM', 'no'),
(null, 1, '2:00AM-3:00AM', 'no'),
(null, 1, '3:00AM-4:00AM', 'no'),
(null, 1, '4:00AM-5:00AM', 'no'),
(null, 1, '5:00AM-6:00AM', 'no'),
(null, 1, '6:00AM-7:00AM', 'no'),

(null, 2, '8:00AM-9:00AM', 'no'),
(null, 2, '9:00AM-10:00AM', 'no'),
(null, 2, '10:00AM-11:00AM', 'no'),
(null, 2, '11:00AM-12:00AM', 'no'),
(null, 2, '12:00AM-1:00AM', 'no'),
(null, 2, '1:00AM-2:00AM', 'no'),
(null, 2, '2:00AM-3:00AM', 'no'),
(null, 2, '3:00AM-4:00AM', 'no'),
(null, 2, '4:00AM-5:00AM', 'no'),
(null, 2, '5:00AM-6:00AM', 'no'),
(null, 2, '6:00AM-7:00AM', 'no'),

(null, 3, '8:00AM-9:00AM', 'no'),
(null, 3, '9:00AM-10:00AM', 'no'),
(null, 3, '10:00AM-11:00AM', 'no'),
(null, 3, '11:00AM-12:00AM', 'no'),
(null, 3, '12:00AM-1:00AM', 'no'),
(null, 3, '1:00AM-2:00AM', 'no'),
(null, 3, '2:00AM-3:00AM', 'no'),
(null, 3, '3:00AM-4:00AM', 'no'),
(null, 3, '4:00AM-5:00AM', 'no'),
(null, 3, '5:00AM-6:00AM', 'no'),
(null, 3, '6:00AM-7:00AM', 'no');*/




/*
INSERT INTO categories (categoryID, categoryName) VALUES
(1, 'Guitars'),
(2, 'Basses'),
(3, 'Drums');
*/
/*
CREATE TABLE clients (
    clientID INT NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(60) NOT NULL,
    lastName VARCHAR(60) NOT NULL,
    emailAddress VARCHAR(255) NOT NULL,
    phoneNumber VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    apt VARCHAR (60) NOT NULL,
    city VARCHAR (60) NOT NULL,
    state VARCHAR (60) NOT NULL,
    zipCode VARCHAR(60) NOT NULL,
    bedroomService FLOAT NOT NULL,
    bathroomService FLOAT NOT NULL,
    time VARCHAR (60) NOT NULL,
    duration VARCHAR (60) NOT NULL,
    enterMethod VARCHAR (60) NOT NULL,
    comments VARCHAR (60) NOT NULL
    );
    
CREATE TABLE paymentDetails (
    clientID INT NOT NULL AUTO_INCREMENT,
    cardNumber VARCHAR(255) NOT NULL,
    cardExpiration VARCHAR(25) NOT NULL,
    cardCVC INT NOT NULL
    );
*/

/*CREATE TABLE addresses (
  addressID         INT            NOT NULL   AUTO_INCREMENT,
  customerID        INT            NOT NULL,
  line1             VARCHAR(60)    NOT NULL,
  line2             VARCHAR(60)               DEFAULT NULL,
  city              VARCHAR(40)    NOT NULL,
  state             VARCHAR(2)     NOT NULL,
  zipCode           VARCHAR(10)    NOT NULL,
  phone             VARCHAR(12)    NOT NULL,
  disabled          TINYINT(1)     NOT NULL   DEFAULT 0,
  PRIMARY KEY (addressID),
  INDEX customerID (customerID)
);
*/
/*CREATE TABLE orders (
  orderID           INT            NOT NULL   AUTO_INCREMENT,
  customerID        INT            NOT NULL,
  orderDate         DATETIME       NOT NULL,
  shipAmount        DECIMAL(10,2)  NOT NULL,
  taxAmount         DECIMAL(10,2)  NOT NULL,
  shipDate          DATETIME                  DEFAULT NULL,
  shipAddressID     INT            NOT NULL,
  cardType          INT            NOT NULL,
  cardNumber        CHAR(16)       NOT NULL,
  cardExpires       CHAR(7)        NOT NULL,
  billingAddressID  INT            NOT NULL,
  PRIMARY KEY (orderID), 
  INDEX customerID (customerID)
);
*/
/*CREATE TABLE orderItems (
  itemID            INT            NOT NULL   AUTO_INCREMENT,
  orderID           INT            NOT NULL,
  productID         INT            NOT NULL,
  itemPrice         DECIMAL(10,2)  NOT NULL,
  discountAmount    DECIMAL(10,2)  NOT NULL,
  quantity          INT NOT NULL,
  PRIMARY KEY (itemID), 
  INDEX orderID (orderID), 
  INDEX productID (productID)
);
*/
/*CREATE TABLE products (
  productID         INT            NOT NULL   AUTO_INCREMENT,
  categoryID        INT            NOT NULL,
  productCode       VARCHAR(10)    NOT NULL,
  productName       VARCHAR(255)   NOT NULL,
  description       TEXT           NOT NULL,
  listPrice         DECIMAL(10,2)  NOT NULL,
  discountPercent   DECIMAL(10,2)  NOT NULL   DEFAULT 0.00,
  dateAdded         DATETIME       NOT NULL,
  PRIMARY KEY (productID), 
  INDEX categoryID (categoryID), 
  UNIQUE INDEX productCode (productCode)
);
*/
/*CREATE TABLE categories (
  categoryID        INT            NOT NULL   AUTO_INCREMENT,
  categoryName      VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
);
*/
/*CREATE TABLE administrators (
  adminID           INT            NOT NULL   AUTO_INCREMENT,
  emailAddress      VARCHAR(255)   NOT NULL,
  password          VARCHAR(255)   NOT NULL,
  firstName         VARCHAR(255)   NOT NULL,
  lastName          VARCHAR(255)   NOT NULL,
  PRIMARY KEY (adminID)
);
*/
-- Insert data into the tables
/*INSERT INTO categories (categoryID, categoryName) VALUES
(1, 'Guitars'),
(2, 'Basses'),
(3, 'Drums');

INSERT INTO products (productID, categoryID, productCode, productName, description, listPrice, discountPercent, dateAdded) VALUES
(1, 1, 'strat', 'Fender Stratocaster', 'The Fender Stratocaster is the electric guitar design that changed the world. New features include a tinted neck, parchment pickguard and control knobs, and a ''70s-style logo. Includes select alder body, 21-fret maple neck with your choice of a rosewood or maple fretboard, 3 single-coil pickups, vintage-style tremolo, and die-cast tuning keys. This guitar features a thicker bridge block for increased sustain and a more stable point of contact with the strings. At this low price, why play anything but the real thing?\r\n\r\nFeatures:\r\n\r\n* New features:\r\n* Thicker bridge block\r\n* 3-ply parchment pick guard\r\n* Tinted neck', '699.00', '30.00', '2016-10-30 09:32:40'),
(2, 1, 'les_paul', 'Gibson Les Paul', 'This Les Paul guitar offers a carved top and humbucking pickups. It has a simple yet elegant design. Cutting-yet-rich tone—the hallmark of the Les Paul—pours out of the 490R and 498T Alnico II magnet humbucker pickups, which are mounted on a carved maple top with a mahogany back. The faded finish models are equipped with BurstBucker Pro pickups and a mahogany top. This guitar includes a Gibson hardshell case (Faded and satin finish models come with a gig bag) and a limited lifetime warranty.\r\n\r\nFeatures:\r\n\r\n* Carved maple top and mahogany back (Mahogany top on faded finish models)\r\n* Mahogany neck, ''59 Rounded Les Paul\r\n* Rosewood fingerboard (Ebony on Alpine white)\r\n* Tune-O-Matic bridge with stopbar\r\n* Chrome or gold hardware\r\n* 490R and 498T Alnico 2 magnet humbucker pickups (BurstBucker Pro on faded finish models)\r\n* 2 volume and 2 tone knobs, 3-way switch', '1199.00', '30.00', '2016-12-05 16:33:13'),
(3, 1, 'sg', 'Gibson SG', 'This Gibson SG electric guitar takes the best of the ''62 original and adds the longer and sturdier neck joint of the late ''60s models. All the classic features you''d expect from a historic guitar. Hot humbuckers go from rich, sweet lightning to warm, tingling waves of sustain. A silky-fast rosewood fretboard plays like a dream. The original-style beveled mahogany body looks like a million bucks. Plus, Tune-O-Matic bridge and chrome hardware. Limited lifetime warranty. Includes hardshell case.\r\n\r\nFeatures:\r\n\r\n* Double-cutaway beveled mahogany body\r\n* Set mahogany neck with rounded ''50s profile\r\n* Bound rosewood fingerboard with trapezoid inlays\r\n* Tune-O-Matic bridge with stopbar tailpiece\r\n* Chrome hardware\r\n* 490R humbucker in the neck position\r\n* 498T humbucker in the bridge position\r\n* 2 volume knobs, 2 tone knobs, 3-way switch\r\n* 24-3/4" scale', '2517.00', '52.00', '2017-02-04 11:04:31'),
(4, 1, 'fg700s', 'Yamaha FG700S', 'The Yamaha FG700S solid top acoustic guitar has the ultimate combo for projection and pure tone. The expertly braced spruce top speaks clearly atop the rosewood body. It has a rosewood fingerboard, rosewood bridge, die-cast tuners, body and neck binding, and a tortoise pickguard.\r\n\r\nFeatures:\r\n\r\n* Solid Sitka spruce top\r\n* Rosewood back and sides\r\n* Rosewood fingerboard\r\n* Rosewood bridge\r\n* White/black body and neck binding\r\n* Die-cast tuners\r\n* Tortoise pickguard\r\n* Limited lifetime warranty', '489.99', '38.00', '2017-06-01 11:12:59'),
(5, 1, 'washburn', 'Washburn D10S', 'The Washburn D10S acoustic guitar is superbly crafted with a solid spruce top and mahogany back and sides for exceptional tone. A mahogany neck and rosewood fingerboard make fretwork a breeze, while chrome Grover-style machines keep you perfectly tuned. The Washburn D10S comes with a limited lifetime warranty.\r\n\r\nFeatures:\r\n\r\n    * Spruce top\r\n    * Mahogany back, sides\r\n    * Mahogany neck Rosewood fingerboard\r\n    * Chrome Grover-style machines', '299.00', '0.00', '2017-07-30 13:58:35'),
(6, 1, 'rodriguez', 'Rodriguez Caballero 11', 'Featuring a carefully chosen, solid Canadian cedar top and laminated bubinga back and sides, the Caballero 11 classical guitar is a beauty to behold and play. The headstock and fretboard are of Indian rosewood. Nickel-plated tuners and Silver-plated frets are installed to last a lifetime. The body binding and wood rosette are exquisite.\r\n\r\nThe Rodriguez Guitar is hand crafted and glued to create precise balances. From the invisible careful sanding, even inside the body, that ensures the finished instrument''s purity of tone, to the beautifully unique rosette inlays around the soundhole and on the back of the neck, each guitar is a credit to its luthier and worthy of being handed down from one generation to another.\r\n\r\nThe tone, resonance and beauty of fine guitars are all dependent upon the wood from which they are made. The wood used in the construction of Rodriguez guitars is carefully chosen and aged to guarantee the highest quality. No wood is purchased before the tree has been cut down, and at least 2 years must elapse before the tree is turned into lumber. The wood has to be well cut from the log. The grain must be close and absolutely vertical. The shop is totally free from humidity.', '415.00', '39.00', '2017-07-30 14:12:41'),
(7, 2, 'precision', 'Fender Precision', 'The Fender Precision bass guitar delivers the sound, look, and feel today''s bass players demand. This bass features that classic P-Bass old-school design. Each Precision bass boasts contemporary features and refinements that make it an excellent value. Featuring an alder body and a split single-coil pickup, this classic electric bass guitar lives up to its Fender legacy.\r\n\r\nFeatures:\r\n\r\n* Body: Alder\r\n* Neck: Maple, modern C shape, tinted satin urethane finish\r\n* Fingerboard: Rosewood or maple (depending on color)\r\n* 9-1/2" Radius (241 mm)\r\n* Frets: 20 Medium-jumbo frets\r\n* Pickups: 1 Standard Precision Bass split single-coil pickup (Mid)\r\n* Controls: Volume, Tone\r\n* Bridge: Standard vintage style with single groove saddles\r\n* Machine heads: Standard\r\n* Hardware: Chrome\r\n* Pickguard: 3-Ply Parchment\r\n* Scale Length: 34" (864 mm)\r\n* Width at Nut: 1-5/8" (41.3 mm)\r\n* Unique features: Knurled chrome P Bass knobs, Fender transition logo', '799.99', '30.00', '2017-06-01 11:29:35'),
(8, 2, 'hofner', 'Hofner Icon', 'With authentic details inspired by the original, the Hofner Icon makes the legendary violin bass available to the rest of us. Don''t get the idea that this a just a "nowhere man" look-alike. This quality instrument features a real spruce top and beautiful flamed maple back and sides. The semi-hollow body and set neck will give you the warm, round tone you expect from the violin bass.\r\n\r\nFeatures:\r\n\r\n* Authentic details inspired by the original\r\n* Spruce top\r\n* Flamed maple back and sides\r\n* Set neck\r\n* Rosewood fretboard\r\n* 30" scale\r\n* 22 frets\r\n* Dot inlay', '499.99', '25.00', '2017-07-30 14:18:33'),
(9, 3, 'ludwig', 'Ludwig 5-piece Drum Set with Cymbals', 'This product includes a Ludwig 5-piece drum set and a Zildjian starter cymbal pack.\r\n\r\nWith the Ludwig drum set, you get famous Ludwig quality. This set features a bass drum, two toms, a floor tom, and a snare—each with a wrapped finish. Drum hardware includes LA214FP bass pedal, snare stand, cymbal stand, hi-hat stand, and a throne.\r\n\r\nWith the Zildjian cymbal pack, you get a 14" crash, 18" crash/ride, and a pair of 13" hi-hats. Sound grooves and round hammer strikes in a simple circular pattern on the top surface of these cymbals magnify the basic sound of the distinctive alloy.\r\n\r\nFeatures:\r\n\r\n* Famous Ludwig quality\r\n* Wrapped finishes\r\n* 22" x 16" kick drum\r\n* 12" x 10" and 13" x 11" toms\r\n* 16" x 16" floor tom\r\n* 14" x 6-1/2" snare drum kick pedal\r\n* Snare stand\r\n* Straight cymbal stand hi-hat stand\r\n* FREE throne', '699.99', '30.00', '2017-07-30 12:46:40'),
(10, 3, 'tama', 'Tama 5-Piece Drum Set with Cymbals', 'The Tama 5-piece Drum Set is the most affordable Tama drum kit ever to incorporate so many high-end features.\r\n\r\nWith over 40 years of experience, Tama knows what drummers really want. Which is why, no matter how long you''ve been playing the drums, no matter what budget you have to work with, Tama has the set you need, want, and can afford. Every aspect of the modern drum kit was exhaustively examined and reexamined and then improved before it was accepted as part of the Tama design. Which is why, if you start playing Tama now as a beginner, you''ll still enjoy playing it when you''ve achieved pro-status. That''s how good these groundbreaking new drums are.\r\n\r\nOnly Tama comes with a complete set of genuine Meinl HCS cymbals. These high-quality brass cymbals are made in Germany and are sonically matched so they sound great together. They are even lathed for a more refined tonal character. The set includes 14" hi-hats, 16" crash cymbal, and a 20" ride cymbal.\r\n\r\nFeatures:\r\n\r\n* 100% poplar 6-ply/7.5mm shells\r\n* Precise bearing edges\r\n* 100% glued finishes\r\n* Original small lugs\r\n* Drum heads\r\n* Accu-tune bass drum hoops\r\n* Spur brackets\r\n* Tom holder\r\n* Tom brackets', '799.99', '15.00', '2017-07-30 13:14:15');
*/
/*
INSERT INTO customers (customerID, emailAddress, password, firstName, lastName, shipAddressID, billingAddressID) VALUES
(1, 'allan.sherwood@yahoo.com', '650215acec746f0e32bdfff387439eefc1358737', 'Allan', 'Sherwood', 1, 2),
(2, 'barryz@gmail.com', '3f563468d42a448cb1e56924529f6e7bbe529cc7', 'Barry', 'Zimmer', 3, 4),
(3, 'christineb@solarone.com', 'ed19f5c0833094026a2f1e9e6f08a35d26037066', 'Christine', 'Brown', 5, 6);
*/
/*
INSERT INTO addresses (addressID, customerID, line1, line2, city, state, zipCode, phone, disabled) VALUES
(1, 1, '100 East Ridgewood Ave.', '', 'Paramus', 'NJ', '07652', '201-653-4472', 0),
(2, 1, '21 Rosewood Rd.', '', 'Woodcliff Lake', 'NJ', '07677', '201-653-4472', 0),
(3, 2, '16285 Wendell St.', '', 'Omaha', 'NE', '68135', '402-896-2576', 0),
(4, 2, '16285 Wendell St.', '', 'Omaha', 'NE', '68135', '402-896-2576', 0),
(5, 3, '19270 NW Cornell Rd.', '', 'Beaverton', 'OR', '97006', '503-654-1291', 0),
(6, 3, '19270 NW Cornell Rd.', '', 'Beaverton', 'OR', '97006', '503-654-1291', 0);
*/
/*
INSERT INTO orders (orderID, customerID, orderDate, shipAmount, taxAmount, shipDate, shipAddressID, cardType, cardNumber, cardExpires, billingAddressID) VALUES
(1, 1, '2017-05-30 09:40:28', '5.00', '32.32', '2017-06-01 09:43:13', 1, 2, '4111111111111111', '04/2022', 2),
(2, 2, '2017-06-01 11:23:20', '5.00', '0.00', NULL, 3, 2, '4111111111111111', '08/2021', 4),
(3, 1, '2017-06-03 09:44:58', '10.00', '89.92', NULL, 1, 2, '4111111111111111', '04/2022', 2);
*/
/*INSERT INTO orderItems (itemID, orderID, productID, itemPrice, discountAmount, quantity) VALUES
(1, 1, 2, '399.00', '39.90', 1),
(2, 2, 4, '699.00', '69.90', 1),
(3, 3, 3, '499.00', '49.90', 1),
(4, 3, 6, '549.99', '0.00', 1);
*/

/*
INSERT INTO administrators (adminID, emailAddress, password, firstName, lastName) VALUES
(1, 'admin@myguitarshop.com', '6a718fbd768c2378b511f8249b54897f940e9022', 'Admin', 'User'),
(2, 'joel@murach.com', '971e95957d3b74d70d79c20c94e9cd91b85f7aae', 'Joel', 'Murach'),
(3, 'mike@murach.com', '3f2975c819cefc686282456aeae3a137bf896ee8', 'Mike', 'Murach');
*/



-- Create a user named mgs_user
/*GRANT ALL PRIVILEGES ON *.* TO
ON *
TO root@localhost WITH GRANT OPTION
IDENTIFIED BY 'QCf9Y8gyNXS7PniM';*/