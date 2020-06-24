CREATE TABLE users(
	id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		userFulName TEXT(255)NOT NULL,
	 	userName TEXT(255)NOT NULL,
    	userEmail VARCHAR(255)NOT NULL,
    	userPassword VARCHAR(255)NOT NULL,
    	userDateTime DATETIME NOT NULL DEFAULT NOW(),
    	userStatus TEXT(100) NOT NULL,
    	userRole	VARCHAR(100) NOT NULL
);

/*userStatus: active, blocked, banned, warned*/
/*userRole: admin, subscriber, editor, customer, moderator*/

INSERT INTO users(userName,userEmail,userPassword,userStatus,userRole) VALUES('Khandaker mahfuz Hasan','khandakermahfuzhasan@gmail.com','12345','active','admin');
INSERT INTO users(userName,userEmail,userPassword,userStatus,userRole) VALUES('Shojib Khan','shojibkhan@gmail.com','12345','active','editor');

CREATE TABLE books(
    id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    book_name TEXT(100) NOT NULL,
    auth_name TEXT(100) NOT NULL,
    book_price VARCHAR(255) NOT NULL,
    poster_id TEXT(100) NOT NULL,
    dateTime DATETIME NOT NULL DEFAULT NOW()
);


/* CHARBOX */
DROP TABLE chatbox;
CREATE TABLE chatbox(
    id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    senderName TeXT(255) NOT NULL,
    receiveName TEXT(255) NOT NULL,
    message TEXT(255) NOT NULL,
    conversationBTW TEXT(255) NOT NULL,
    view BOOLEAN NOT NULL,
    dateTime datetime NOT NULL DEFAULT NOW()
);

INSERT INTO chatbox(senderName,receiveName,message,sentby) VALUES('khmahfuz','sabrina_zaman','Hi! How are you?');
INSERT INTO chatbox(senderName,receiveName,message) VALUES('sabrina_zaman','khmahfuz','I am fine!Thank you');

CREATE TABLE users_activity(
    ua_id INT(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT(255) NOT NULL,
    ua_dateTime DATETIME NOT NULL DEFAULT NOW()
);