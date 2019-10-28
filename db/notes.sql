CREATE TABLE category (
  id SERIAL PRIMARY KEY NOT NULL,
  name VARCHAR(40) NOT NULL
  );

INSERT INTO category (name) VALUES ('To Do');
INSERT INTO category (name) VALUES ('School');
INSERT INTO category (name) VALUES ('Shopping');
INSERT INTO category (name) VALUES ('Other');

CREATE TABLE note (
  id SERIAL PRIMARY KEY NOT NULL,
  title VARCHAR(80) NOT NULL,
  content VARCHAR(4000) NOT NULL
  );

INSERT INTO note (title, content)
  VALUES ('School Supplies', 'text content goes here.');

INSERT INTO note (title, content)
  VALUES ('Groceries', 'text content goes here.');

INSERT INTO note (title, content)
  VALUES ('Car', 'text content goes here.');

INSERT INTO note (title, content)
  VALUES ('Personal', 'text content goes here.');

  CREATE TABLE note_category (
  noteId int NOT NULL REFERENCES note(id),
  categoryId int NOT NULL REFERENCES category(id)
  );
  INSERT INTO note_category (noteId, categoryId)
  VALUES ( 1, 1);