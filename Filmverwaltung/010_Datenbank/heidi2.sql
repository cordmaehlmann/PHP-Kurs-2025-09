
USE filmverwaltung;

-- SELECT * FROM filme;

-- SELECT * FROM filme WHERE id=1;

-- INSERT INTO filme (titel, jahr, genre, vertrieb, fsk, einspielergebnis, laenge) VALUES ('The Accountant', 2016, 'Action', 'Warner Bros.', 16, 155.6, 128); 


-- DELETE FROM filme WHERE id=1;


UPDATE filme SET titel='The Godfather 3', jahr=1972, genre='Crime/Drama', vertrieb='Paramount Pictures', fsk=16, einspielergebnis=250.34, laenge=175 WHERE id=9;


SELECT * FROM filme;

