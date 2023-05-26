CREATE DATABASE animespro CHARACTER SET utf8mb4_general_ci;

CREATE TABLE anime(
    ID_ANIME INT PRIMARY KEY AUTO_INCREMENT,
    nombre CHAR (200),
    nombre_prota(200)
);

INSERT INTO anime(nombre, nombre_prota) VALUES ("Helsing", "Alucard");

SELECT * FROM animes WHERE nombre_prota="ALucard" AND nombre="Helsing";

INSERT INTO animes(nombre, nombre_prota) VALUES ("Attack on titan", "Eren Yeager");

SELECT * FROM animes;
SELECT nombre, nombre_prota FROM animes;

ALTER TABLE animes ADD nombre_antagonista CHAR(200)
;

UPDATE animes SET nombre_antagonista="Max Montana" WHERE ID_ANIME=1;
UPDATE animes SET nombre_antagonista="Titanes" WHERE ID_ANIMES=2;

UPDATE animes SET nombre_antagonista="General" WHERE nombre_antagonista="Max Montana";

DELETE FROM animes WHERE nombre_antagonista="Gnereal";

TRUNCATE animes;

DROP DATABASE animespro;

INSERT INTO animes(nombre, nombre_protam nombre_antagonista) VALUES ("Titanes del pacífico: Tierra de nadie", "Jaeger", "Kaijus");
INSERT INTO animes(nombre, nombre_protam nombre_antagonista) VALUES ("Castlevania", "Trevor Velmont", "Drácula");

---SELECT [FUNCION](COLUMNA) FROM [nombre_tabla]
SELECT COUNT(nombre_prota) FROM animes;
SELECT AVG(ID_ANIME) FROM animes;
SELECT MIN(ID_ANIME) FROM animes;
SELECT MAX (ID_ANIME) FROM animes;
SELECT SUM(ID_ANIME) FROM animes;