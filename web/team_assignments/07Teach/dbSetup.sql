-- We will put this team activity example in its own database
CREATE DATABASE login_test;

CREATE TABLE login
(
	id SERIAL PRIMARY KEY NOT NULL,
	username VARCHAR(80) UNIQUE NOT NULL,
	password VARCHAR(255) NOT NULL
);
-- Why make password have a length of 255? See: http://stackoverflow.com/questions/21479655/maximum-length-of-generated-hash-when-using-password-hash


-- Create a user for this activity and grant it permission to this table
CREATE USER s_user WITH PASSWORD 's_pass';

GRANT SELECT, INSERT, UPDATE ON login TO s_user;
GRANT USAGE, SELECT ON login_id_seq TO s_user;
