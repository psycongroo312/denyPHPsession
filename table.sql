CREATE database BOOKS;

CREATE TABLE BOOKS (id int AUTO_INCREMENT, name varchar(100), author varchar(100), pages varchar(100), PRIMARY KEY (id));

INSERT INTO BOOKS (name, author, pages) VALUES ("fight_club", "Chuck_Palahniuk", 254);

INSERT INTO BOOKS (name, author, pages) VALUES ("center_of_gravity", "Alexei_Polarinov", 480);




CREATE database AUTHORS;

CREATE TABLE AUTHORS (id int AUTO_INCREMENT, full_name varchar(100), date_of_birth varchar(100), date_of_death varchar(100), PRIMARY KEY (id));

INSERT INTO AUTHORS (full_name, date_of_birth, date_of_death) VALUES ("Dostoevsky", "11.11.1821", "09.02.1881");

INSERT INTO AUTHORS (full_name, date_of_birth, date_of_death) VALUES ("German_Gesse", "02.07.1877", "09.08.1962");



CREATE database GENRES;

CREATE TABLE GENRES (id int AUTO_INCREMENT, genres varchar(100), PRIMARY KEY (id));

INSERT INTO GENRES (genres) VALUES ("non_fiction");

INSERT INTO GENRES (genres) VALUES ("classics");