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
snimi varchar(128),
alkuaika datetime,
loppuaika datetime,
PRIMARY KEY (snimi,alkuaika,loppuaika),
FOREIGN KEY (snimi) REFERENCES sauna(snimi)
);

CREATE TABLE ilmoittautuminen(
knimi varchar(128),
snimi varchar(128),
alkuaika datetime,
loppuaika datetime,
FOREIGN KEY (knimi) REFERENCES kayttaja(knimi),
FOREIGN KEY (snimi) REFERENCES sauna(snimi),
FOREIGN KEY (alkuaika) REFERENCES saunavuoro(alkuaika),
FOREIGN KEY (loppuaika) REFERENCES saunavuoro(loppuaika),
PRIMARY KEY (knimi,snimi,alkuaika,loppuaika)
);
