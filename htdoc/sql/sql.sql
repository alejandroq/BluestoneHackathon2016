--DROP TABLES
DROP TABLE PositionAndPanel;
DROP TABLE Position;
DROP TABLE Panel;
DROP TABLE Organization;
DROP TABLE Event;
DROP TABLE User;
DROP TABLE UserAndEvent;
DROP TABLE Chat;
DROP TABLE Note;

--CREATE STATEMENTS 
CREATE TABLE Organization (
	org_OrgID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	org_Name VARCHAR(30) NOT NULL
);
CREATE TABLE Position (
	pos_PositionID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	pos_PositionTitle VARCHAR(30) NOT NULL
);
CREATE TABLE Panel (
	pan_PanelID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	pan_PanelName VARCHAR(30) NOT NULL
);
CREATE TABLE PositionAndPanel (
	posAndPan_PositionID INT NOT NULL,
	posAndPan_PanelID INT NOT NULL,
	CONSTRAINT fk_pos_PositionID FOREIGN KEY (posAndPan_PositionID) REFERENCES Position (pos_PositionID),
	CONSTRAINT fk_pan_PanelID FOREIGN KEY (posAndPan_PanelID) REFERENCES Panel (pan_PanelID)
);
CREATE TABLE User (
	user_EmailAddress VARCHAR(100) PRIMARY KEY NOT NULL,
	user_Password VARCHAR(100) NOT NULL,
	user_FirstName VARCHAR(30) NOT NULL,
	user_LastName VARCHAR(30) NOT NULL,
	user_PositionID INT NOT NULL,
	user_OrgID INT NULL,
	user_ManagerEmail VARCHAR(100) NULL,
	CONSTRAINT fk_user_OrgID FOREIGN KEY (user_OrgID) REFERENCES Organization(org_OrgID),
	CONSTRAINT fk_user_ManagerEmail FOREIGN KEY (user_ManagerEmail) REFERENCES User(user_EmailAddress)
);
CREATE TABLE Note (
	note_ID INT PRIMARY KEY AUTO_INCREMENT,
	note_Title VARCHAR(30) NOT NULL,
	note_Content TEXT NOT NULL,
	note_CreateDate TIMESTAMP,
	note_CreatorEmail VARCHAR(100) NOT NULL,
	CONSTRAINT fk_note_creator_email FOREIGN KEY (note_CreatorEmail) REFERENCES User(user_EmailAddress)
);
CREATE TABLE Chat (
	chat_ID INT PRIMARY KEY AUTO_INCREMENT,
	chat_UserOne VARCHAR(100) NOT NULL,
	chat_UserTwo VARCHAR(100) NOT NULL,
	chat_FileAttachment VARCHAR(200) NULL,
	chat_Message TEXT NOT NULL,
	chat_ExchangeDate TIMESTAMP NOT NULL,
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
INSERT INTO Position (pos_PositionTitle) VALUES
('Sales Manager'), ('Sales Rep'), ('Sales Accountant'), ('HR'), ('Admin');
INSERT INTO Panel (pan_PanelName) VALUES
('Calendar'), ('Chat'), ('Reminders'), ('Notes'), ('Upcoming Events'), ('File Management'), ('Organization Hierarchy'), ('Manage Content'), ('Data Dashboard');
INSERT INTO PositionAndPanel (posAndPan_PositionID, posAndPan_PanelID) VALUES
(1,1),(1,2),(1,3),(1,4),(1,5),
(2,1),(2,2),(2,3),(2,4),(2,5),
(3,1),(3,2),(3,3),(3,4),(3,5),
(4,1),(4,2),(4,3),(4,4),(4,5),
(5,1),(5,2),(5,3),(5,4),(5,5),
(5,6),(5,7),(5,8);
INSERT INTO User (user_EmailAddress, user_Password, user_FirstName, user_LastName, user_PositionID, user_OrgID, user_ManagerEmail) VALUES 
('admin@coffee.com', '1234', 'James', 'Fey', 5, 1, NULL),
('quesadar@dukes.jmu.edu', '1234', 'Alejandro', 'Quesada', 1, 1, NULL), 
('stJohn@yahoo.com', '1234', 'Thomas', 'St. John', 2, 1, 'quesadar@dukes.jmu.edu'),
('Wallace@yahoo.com', '1234', 'Tom', 'Wallace', 3, 1, 'quesadar@dukes.jmu.edu'),
('Mycuchi@hotmail.com', '1234', 'John', 'Michuchu', 4, 2, NULL);
INSERT INTO Chat (chat_UserOne, chat_UserTwo, chat_Message) VALUES
('quesadar@dukes.jmu.edu', 'stJohn@yahoo.com', 'Hello World!'),
('stJohn@yahoo.com', 'quesadar@dukes.jmu.edu', 'Goodbye World!');
INSERT INTO Event (event_EventName, event_Begins, event_Ends, event_Description) VALUES 
('Old Event', '2015-03-02', NULL, 'This WAS an Event!')
('Event 1', '2016-04-03', NULL, 'This is a great Event!'),
('Event 2', '2016-04-05', NULL, 'This is a better Event!');
INSERT INTO UserAndEvent (user_EmailAddress, event_EventID) VALUES
('quesadar@dukes.jmu.edu', 1);
INSERT INTO Note (note_Title, note_Content, note_CreatorEmail) VALUES 
('File 1', 'Hello World!', 'quesadar@dukes.jmu.edu');

--COMMON QUERIES
SELECT (a.user_EmailAddress)Manager_Email, (b.user_EmailAddress)Employee_Email
FROM User a, User b
WHERE a.user_EmailAddress = b.user_ManagerEmail;
SELECT * FROM Chat;
SELECT * FROM Event;
SELECT * FROM UserAndEvent;
SELECT * FROM Organization; 
SELECT * FROM Note;
SELECT * FROM Organization LEFT JOIN User ON user_OrgID = org_OrgID;
SELECT * FROM Event WHERE event_Begins >= CURDATE() ORDER BY event_Begins ASC;
SELECT * FROM Event ORDER BY event_Begins ASC;
SELECT COUNT(*)Users FROM User LEFT JOIN Position ON user_PositionID = pos_PositionID WHERE pos_PositionTitle = 'Admin';


