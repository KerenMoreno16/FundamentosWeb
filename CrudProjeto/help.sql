CREATE TABLE pessoa(
	idPessoa INT PRIMARY KEY AUTO_INCREMENT,
	nomePessoa VARCHAR(30) NOT NULL,
    emailPessoa VARCHAR(30) not null,
	idadePessoa int not null
);

INSERT into pessoa (nomePessoa, emailPessoa,idadePessoa) values ("Alciomar Hollanda", "alciomar@gmail.com", 29);
INSERT into pessoa (nomePessoa, emailPessoa,idadePessoa) values ("Ackley Dias Will", "ackley@gmail.com", 32);
INSERT into pessoa (nomePessoa, emailPessoa,idadePessoa) values ("Keren Moreno", "keren@gmail.com", 18);

