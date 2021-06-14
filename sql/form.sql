-- Database creation
CREATE DATABASE forum;

-- User Table with Identifier of UDID
CREATE TABLE userData (
    UDID  INT(11)      NOT NULL AUTO_INCREMENT,
    UName VARCHAR(100) NOT NULL UNIQUE,
    PWD   VARCHAR(200) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    salt  TEXT(12)      NOT NULL,
    PRIMARY KEY (UDID)
);

INSERT INTO userData (UDID, UName, PWD, email, salt) VALUES
    (1, 'prox', 'c824e69b6a8b70d663ebc27957252813a8a9860b5fe1106e9d36813b029d3ccb', 'atcav1@outlook.com', 'ebca53d4ba01');

CREATE TABLE profileData (
    PDID                INT(11)       	NOT NULL AUTO_INCREMENT
    UDID                INT(11)       	NOT NULL,
    fName               VARCHAR(50)     NULL,
    lName               VARCHAR(50)     NULL,
    UIMG                VARCHAR(255)    NULL,
    web                 VARCHAR(150)    NULL,
    social              VARCHAR(150)    NULL,
    PRIMARY KEY (PDID),
    FOREIGN KEY (CDID) 	REFERENCES userData(CDID)
);