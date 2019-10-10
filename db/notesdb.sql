CREATE TABLE public.user
(
	userId SERIAL NOT NULL PRIMARY KEY,
	firstName VARCHAR(100) NOT NULL UNIQUE,
	lastName VARCHAR(100) NOT NULL UNIQUE,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE public.category
(
	categoryId SERIAL NOT NULL PRIMARY KEY,
	categoryName VARCHAR(50) NOT NULL
);

CREATE TABLE public.notes
(
	notesId SERIAL NOT NULL PRIMARY KEY,
	user_id INT NOT NULL REFERENCES public.user(userId),
	category_id INT NOT NULL REFERENCES public.category(categoryId),
	created time with time zone NOT NULL,
	note_title VARCHAR(50) NOT NULL,
	note_text TEXT NOT NULL
);