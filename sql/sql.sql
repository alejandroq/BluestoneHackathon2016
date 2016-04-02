--DROP TABLES
DROP TABLE Organization;
DROP TABLE Event;
DROP TABLE User;
DROP TABLE UserAndEvent;
DROP TABLE Chat;

--CREATE STATEMENTS 
CREATE TABLE Organization (
	org_OrgID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	org_Name VARCHAR(30) NOT NULL
);
CREATE TABLE User (
	user_EmailAddress VARCHAR(100) PRIMARY KEY NOT NULL,
	user_Password VARCHAR(100) NOT NULL,
	user_FirstName VARCHAR(30) NOT NULL,
	user_LastName VARCHAR(30) NOT NULL,
	user_PositionClass VARCHAR(30) NULL,
	user_OrgID INT NULL,
	user_ManagerEmail VARCHAR(100) NULL,
	CONSTRAINT fk_user_OrgID FOREIGN KEY (user_OrgID) REFERENCES Organization(org_OrgID),
	CONSTRAINT fk_user_ManagerEmail FOREIGN KEY (user_ManagerEmail) REFERENCES User(user_EmailAddress)
);
CREATE TABLE Chat (
	chat_ID INT PRIMARY KEY AUTO_INCREMENT,
	chat_UserOne VARCHAR(100) NOT NULL,
	chat_UserTwo VARCHAR(100) NOT NULL,
	chat_FileAttachment VARCHAR(200) NULL,
	chat_Message TEXT NOT NULL,
	CONSTRAINT fk_chat_userOne FOREIGN KEY (chat_UserOne) REFERENCES User(user_EmailAddress),
	CONSTRAINT fk_chat_userTwo FOREIGN KEY (chat_UserTwo) REFERENCES User(user_EmailAddress)
);
CREATE TABLE Event (
	event_EventID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	event_EventName VARCHAR(30) NOT NULL,
	event_Begins DATETIME NOT NULL,
	event_Ends DATETIME NULL,
	event_Description TEXT
);
CREATE TABLE UserAndEvent (
	user_EmailAddress VARCHAR(100) NOT NULL,
	event_EventID INT NOT NULL,
	CONSTRAINT fk_user_event_emailAddress FOREIGN KEY (user_EmailAddress) REFERENCES User(user_EmailAddress),
	CONSTRAINT fk_user_event_eventID FOREIGN KEY (event_EventID) REFERENCES Event(event_EventID)
);

--DUMMY RECORDS
INSERT INTO Organization (org_Name) VALUES 
('Coka Cola'), ('Pepsi');
INSERT INTO User (user_EmailAddress, user_Password, user_FirstName, user_LastName, user_PositionClass, user_OrgID, user_ManagerEmail) VALUES 
('quesadar@dukes.jmu.edu', '1234', 'Alejandro', 'Quesada', 'SalesManager', 1, NULL), 
('stJohn@yahoo.com', '1234', 'Thomas', 'St. John', 'SalesRep', 1, 'quesadar@dukes.jmu.edu'),
('Wallace@yahoo.com', '1234', 'Tom', 'Wallace', 'SalesAccountant', 1, 'quesadar@dukes.jmu.edu'),
('Mycuchi@hotmail.com', '1234', 'John', 'Michuchu', 'HR', 2, NULL);
INSERT INTO Chat (chat_UserOne, chat_UserTwo, chat_Message) VALUES
('quesadar@dukes.jmu.edu', 'stJohn@yahoo.com', 'Hello World!'),
('stJohn@yahoo.com', 'quesadar@dukes.jmu.edu', 'Goodbye World!');
INSERT INTO Event (event_EventName, event_Begins, event_Ends, event_Description) VALUES 
('Event 1', '2016-04-03', NULL, 'This is a great Event!');
INSERT INTO UserAndEvent (user_EmailAddress, event_EventID) VALUES
('quesadar@dukes.jmu.edu', 1);

--COMMON QUERIES
SELECT (a.user_EmailAddress)Manager_Email, (b.user_EmailAddress)Employee_Email
FROM User a, User b
WHERE a.user_EmailAddress = b.user_ManagerEmail;
SELECT * FROM Chat;
SELECT * FROM Event;
SELECT * FROM UserAndEvent;
SELECT * FROM Organization; 
SELECT * FROM Organization LEFT JOIN User ON user_OrgID = org_OrgID;


