DROP TABLE IF EXISTS TD_produits;
CREATE TABLE TD_produits (
  id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  typeProduit_id int(10),
  nom varchar(250) ,
  prix float(5,2),
  photo varchar(50)
)  DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;



INSERT INTO TD_produits (`id`, `typeProduit_id`, `nom`, `prix`,`photo`)VALUES (NULL, 1, 'salade', '2.00','salade.jpeg');
INSERT INTO TD_produits (`id`, `typeProduit_id`, `nom`, `prix`,`photo`)VALUES (NULL, 1, 'choux', '2.50','choux.jpeg');
INSERT INTO TD_produits (`id`, `typeProduit_id`, `nom`, `prix`,`photo`)VALUES (NULL, 1, 'pomme de terre', '1.50','pommeterre.jpeg');
INSERT INTO TD_produits (`id`, `typeProduit_id`, `nom`, `prix`,`photo`)VALUES (NULL, 1, 'tomate', '1.50','tomate.jpeg');
INSERT INTO TD_produits (`id`, `typeProduit_id`, `nom`, `prix`,`photo`)VALUES (NULL, 1, 'haricot', '6.50','haricot.jpeg');
INSERT INTO TD_produits (`id`, `typeProduit_id`, `nom`, `prix`,`photo`)VALUES (NULL, 1, 'potiron', '3.00','potiron.jpeg');


DROP TABLE IF EXISTS TD_typeProduits;
create table TD_typeProduits
(
id int(10) not null PRIMARY KEY ,
libelle varchar(50) 
)  DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
insert into TD_typeProduits values (1,"légume");
insert into TD_typeProduits values (2,"fruit");
insert into TD_typeProduits values (3,"autre");

CREATE TABLE TD_users (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  username VARCHAR(100) NOT NULL DEFAULT '',
  password VARCHAR(255) NOT NULL DEFAULT '',
  motdepasse VARCHAR(255) NOT NULL DEFAULT '',
  roles VARCHAR(255) NOT NULL DEFAULT '',
  email  VARCHAR(255) NOT NULL DEFAULT '',
  isEnabled TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--mot de passe crypté avec security.encoder.bcrypt

INSERT INTO TD_users (id,username,password,motdepasse,email,roles) VALUES
(1, 'admin', '$2y$13$mJK5hyDNAY9rcDuEBofjJ.h3d7xBwlApfMoknBDO0AvXLr1AaJM02', 'admin', 'admin@gmail.com','ROLE_ADMIN'),
(2, 'invite', '$2y$13$j5rdj5QL3fd.IZlA5JNbc.kTRaa1YbJK/G7h2mB51ySzaDdgEbo8W', 'invite', 'admin@gmail.com','ROLE_INVITE'),
(3, 'vendeur', '$2y$13$/gwC0Iv6ssewrr9JeUDDuOcRTWD.uIEjJpH1HUWPAxe.5EwY98OEO','vendeur', 'vendeur@gmail.com','ROLE_VENDEUR'),
(4, 'client', '$2y$13$bhuMlUWdfc5mAhVumuKUG.etahlJ399DEwuQPhbdXjiCdKIeX2nii', 'client', 'client@gmail.com','ROLE_CLIENT'),
(5, 'client2', '$2y$13$SYEM3Tk/5G.C85pIAm0cSOd8BFrFTEnLHBSWsW96Q3k9gCdFXRmvm','client2', 'client2@gmail.com','ROLE_CLIENT');

