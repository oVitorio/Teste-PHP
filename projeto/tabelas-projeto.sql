CREATE DATABASE teste;


CREATE TABLE pessoa (
	idPessoa INT NOT NULL AUTO_INCREMENT , 
	nome VARCHAR(200) NOT NULL , 
	dt_nascimento DATE NOT NULL , 
	escolaridade ENUM('Ensino Fundamental','Ensino Médio','Ensino Superior') NOT NULL , 
	PRIMARY KEY (idPessoa)
);

CREATE TABLE telefone(
    idTelefone INT NOT NULL AUTO_INCREMENT,
    idPessoa INT NOT NULL,
    telefone varchar(15),
    PRIMARY KEY (idTelefone),
    FOREIGN KEY (idPessoa) REFERENCES pessoa (idPessoa)
);