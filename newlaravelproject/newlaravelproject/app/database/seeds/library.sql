DROP DATABASE IF EXISTS library;
CREATE DATABASE IF NOT EXISTS library;

USE library;
CREATE TABLE IF NOT EXISTS books(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  title VARCHAR(128) NOT NULL,
  authorlastname VARCHAR(64) NULL,
  datepublished DATE NOT NULL
  );

  INSERT INTO books(id, title, authorlastname, datepublished)
  VALUES (null, 'harry potter', 'rowling', '2000-12-25');

INSERT INTO books(id, title, authorlastname, datepublished)
  VALUES (null, 'the four hour work week', 'ferriss', '2005-07-31');
