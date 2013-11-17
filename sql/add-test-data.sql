USE saunakanta;
INSERT INTO `sauna` (`snimi`, `sijainti`, `koko`) VALUES ('sauna1', 'nurkan takana', 5);
INSERT INTO `sauna` (`snimi`, `sijainti`, `koko`) VALUES ('sauna2', 'saunakatu 5, portaat alas ja oikealla. Ovikoodi 0202', 25);

INSERT INTO `kayttaja` (`knimi`) VALUES ('saunoja1');
insert into `kayttaja` (`knimi`) VALUES ('saunoja2');
insert into `kayttaja` (`knimi`) VALUES ('saunoja3');
insert into `kayttaja` (`knimi`) VALUES ('saunoja4');

INSERT INTO `omistaja` (`knimi`,`snimi`) VALUES ('saunoja1','sauna1');
INSERT INTO `omistaja` (`knimi`,`snimi`) VALUES ('saunoja2','sauna2');
INSERT INTO `omistaja` (`knimi`,`snimi`) VALUES ('saunoja3','sauna1');

INSERT INTO `saunavuoro` (`snimi`,`alkuaika`,`loppuaika`) VALUES ('sauna1','2013-11-18 21:00:00','2013-11-18 23:00:00');
INSERT INTO `saunavuoro` (`snimi`,`alkuaika`,`loppuaika`) VALUES ('sauna2','2013-12-30 20:15:00','2013-12-31 01:00:00');

INSERT INTO `ilmoittautuminen` (`knimi`,`ID`) VALUES ('saunoja1','1');
INSERT INTO `ilmoittautuminen` (`knimi`,`ID`) VALUES ('saunoja2','1');
INSERT INTO `ilmoittautuminen` (`knimi`,`ID`) VALUES ('saunoja1','2');
INSERT INTO `ilmoittautuminen` (`knimi`,`ID`) VALUES ('saunoja3','1');
