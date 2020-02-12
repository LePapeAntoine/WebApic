/*DROP DATABASE IF EXISTS db730661205;
*/
CREATE DATABASE IF NOT EXISTS db730661205;
USE db730661205;


# -----------------------------------------------------------------------------
#       TABLE : FORMATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FORMATION
 (
   NUMEROFORMATION INT(30) NOT NULL  AUTO_INCREMENT,
   NUMTYPE INT(30) NOT NULL  ,
   NUMEROPERIODE INT(30) NOT NULL  ,
   NUMEROC INT(30) NOT NULL  ,
  PRIMARY KEY (NUMEROFORMATION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FORMATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_FORMATION_TYPE_FORMATION
     ON FORMATION (NUMTYPE ASC);

CREATE  INDEX I_FK_FORMATION_PERIODE
     ON FORMATION (NUMEROPERIODE ASC);

CREATE  INDEX I_FK_FORMATION_CLIENT
     ON FORMATION (NUMEROC ASC);

# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLIENT
 (
   NUMEROC INT(30) NOT NULL AUTO_INCREMENT,
   ADRESSEC VARCHAR(128)   ,
   TELC INT(30)   ,
   MAILC VARCHAR(128)   ,
   MDPC VARCHAR(128)   ,
     
   PRIMARY KEY (NUMEROC) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       TABLE : ENTREPRISE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENTREPRISE
 (
   NUMEROC INT(30) NOT NULL  ,
   NOMRESPONSABLE VARCHAR(32)   ,
   NOMENTREPRISE VARCHAR(32)   ,
   ADRESSEC VARCHAR(128)   ,
   TELC INT(30)   ,
   MAILC VARCHAR(128)   ,
   MDPC VARCHAR(128)   ,
   
   PRIMARY KEY (NUMEROC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_FORMATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_FORMATION
 (
   NUMTYPE INT(30) NOT NULL  AUTO_INCREMENT,
   PRIXTYPE INT(30),
   LIBELLEFORMATION VARCHAR(255),
  PRIMARY KEY (NUMTYPE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PARTICULIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PARTICULIER
 (
   NUMEROC INT(30) NOT NULL ,
   NOMPARTICULIER VARCHAR(128)   ,
   PRENOMPARTICULIER VARCHAR(128)   ,
   ADRESSEC VARCHAR(128)   ,
   TELC INT(30)   ,
   MAILC VARCHAR(128)   ,
   MDPC VARCHAR(128)   ,
     
   PRIMARY KEY (NUMEROC) 
 ) 
 comment = "";



# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE FORMATION 
  ADD FOREIGN KEY FK_FORMATION_TYPE_FORMATION (NUMTYPE)
      REFERENCES TYPE_FORMATION (NUMTYPE) ;


ALTER TABLE FORMATION 
  ADD FOREIGN KEY FK_FORMATION_PERIODE (NUMEROPERIODE)
      REFERENCES PERIODE (NUMEROPERIODE) ;


ALTER TABLE FORMATION 
  ADD FOREIGN KEY FK_FORMATION_CLIENT (NUMEROC)
      REFERENCES CLIENT (NUMEROC) ;


ALTER TABLE ENTREPRISE 
  ADD FOREIGN KEY FK_ENTREPRISE_CLIENT (NUMEROC)
      REFERENCES CLIENT (NUMEROC) ;


ALTER TABLE PARTICULIER 
  ADD FOREIGN KEY FK_PARTICULIER_CLIENT (NUMEROC)
      REFERENCES CLIENT (NUMEROC) ;


