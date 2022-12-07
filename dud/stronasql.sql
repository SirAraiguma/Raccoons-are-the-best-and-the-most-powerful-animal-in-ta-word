CREATE DATABASE kociaczki;

Use kociaczki;

CREATE TABLE koty (
id int PRIMARY KEY,
imie varchar(30),
lat varchar(30),
rasa varchar(30)
);

INSERT INTO koty (id,imie,lat,rasa) VALUES
(1,"Wilfred","5 lat","Chinchilla Persian"),
(2,"Loki","543 lat","Lykoi"),
(3,"Amardi","9 lat","floppa"),
(4,"jinx","14 lat","Himalayan");


