CREATE TABLE accounts (
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
name VARCHAR(50) NOT NULL,
typeOfAccount VARCHAR(8) CHECK (typeOfAccount = 'Artist' OR typeOfAccount = 'Student'),
dob DATE,
age INT,
email VARCHAR(255) NOT NULL,
PRIMARY KEY (username)
);

CREATE TABLE post (
postID SERIAL NOT NULL,
username VARCHAR(35) NOT NULL,
likes INT,
tags VARCHAR(255),
text VARCHAR(3000) NOT NULL,
PRIMARY KEY (postID),
FOREIGN KEY (username) REFERENCES accounts(username)
);

CREATE TABLE userToLikes (
username VARCHAR(35) NOT NULL,
postID INTEGER NOT NULL,
FOREIGN KEY (username) REFERENCES accounts(username),
FOREIGN KEY (postID) REFERENCES post(postID),
PRIMARY KEY (username, postID)
);

CREATE TABLE comments (
username VARCHAR(35) NOT NULL,
postID INTEGER NOT NULL,
text VARCHAR(3000),
timestamp DATE,
likes INT,
FOREIGN KEY (username) REFERENCES accounts(username),
FOREIGN KEY (postID) REFERENCES post(postID),
PRIMARY KEY (username, postID)
);

CREATE TABLE follows (
username VARCHAR(35) NOT NULL,
followee VARCHAR(35) NOT NULL,
FOREIGN KEY (username) REFERENCES accounts(username),
FOREIGN KEY (followee) REFERENCES accounts(username),
PRIMARY KEY (username, followee)
);

CREATE TABLE messages (
username VARCHAR(35) NOT NULL,
recipient VARCHAR(35) NOT NULL,
messageID SERIAL,
text VARCHAR(3000),
FOREIGN KEY (username) REFERENCES accounts(username),
FOREIGN KEY (recipient) REFERENCES accounts(username),
PRIMARY KEY (username, recipient, messageID)
);

CREATE TABLE notifications (
notificationID SERIAL,
username VARCHAR(35) NOT NULL,
timestamp DATE,
killTime DATE,
notifMessage VARCHAR(3000)
);

CREATE TABLE groups (
groupID SERIAL,
managerID VARCHAR(35) NOT NULL,
groupName VARCHAR(255),
tags VARCHAR(255),
FOREIGN KEY (managerID) REFERENCES accounts(username),
PRIMARY KEY (groupID)
);

CREATE TABLE accountToGroup (
username VARCHAR(35) NOT NULL,
groupID INT NOT NULL,
FOREIGN KEY (username) REFERENCES accounts(username),
FOREIGN KEY (groupID) REFERENCES groups(groupID),
PRIMARY KEY (username, groupID)
);

CREATE TABLE files (
groupID INT NOT NULL,
filename VARCHAR(255) NOT NULL,
filetype VARCHAR(50) NOT NULL,
FOREIGN KEY (groupID) REFERENCES groups(groupID),
PRIMARY KEY (groupID, filename)
);

CREATE TABLE groupSplit (
groupSplitID SERIAL,
groupID INT NOT NULL,
splitAB VARCHAR(2) NOT NULL CHECK (splitAB = 'A' OR splitAB = 'B'),
FOREIGN KEY (groupID) REFERENCES groups(groupID),
PRIMARY KEY (groupSplitID)
);

CREATE TABLE splitFiles (
groupSplitID INT NOT NULL,
splitAB VARCHAR(2) NOT NULL CHECK (splitAB = 'A' OR splitAB = 'B'),
splitFilename VARCHAR(255) NOT NULL,
splitFiletype VARCHAR(50) NOT NULL,
splitFile BYTEA NOT NULL,
FOREIGN KEY (groupSplitID) REFERENCES groupSplit(groupSplitID),
PRIMARY KEY (groupSplitID, splitFilename)
);

CREATE TABLE platformManagers (
managerID SERIAL,
password VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
PRIMARY KEY (managerID)
);

CREATE TABLE summary (
traffic INT NOT NULL,
groupsMade INT NOT NULL,
accountsMade INT NOT NULL,
date DATE NOT NULL
);
