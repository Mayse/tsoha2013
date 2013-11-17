USE saunakanta;
CREATE TABLE sauna(
snimi varchar(128) PRIMARY KEY,
sijainti varchar(128),
koko int
);

CREATE TABLE kayttaja(
knimi varchar(128) PRIMARY KEY
);

CREATE TABLE omistaja(
snimi varchar(128),
knimi varchar(128),
PRIMARY KEY (snimi,knimi),
FOREIGN KEY(snimi) REFERENCES sauna(snimi),
FOREIGN KEY(knimi) REFERENCES kayttaja(knimi)
);

CREATE TABLE saunavuoro(
ID int NOT NULL AUTO_INCREMENT,
snimi varchar(128),
alkuaika datetime,
loppuaika datetime,
PRIMARY KEY (ID),
FOREIGN KEY(snimi) REFERENCES sauna(snimi)
);

CREATE TABLE ilmoittautuminen(
knimi varchar(128),
ID int,
PRIMARY KEY (knimi,ID)
FOREIGN KEY (ID) REFERENCES saunavuoro(ID),
FOREIGN KEY (knimi) REFERENCES kayttaja(knimi)
);
