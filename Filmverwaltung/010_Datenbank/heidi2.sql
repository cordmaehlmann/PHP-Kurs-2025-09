
USE filmverwaltung;

SELECT * FROM filme;

SELECT * FROM filme WHERE id=1;

INSERT INTO filme (titel, jahr, genre, vertrieb, fsk, einspielergebnis, laenge) VALUES
('The Accountant', 2016, 'Action', 'Warner Bros.', 16, 155.6, 128); 
SELECT * FROM filme;

