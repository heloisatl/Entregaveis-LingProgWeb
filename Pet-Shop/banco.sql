CREATE TABLE Animal(
    id INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    dono VARCHAR(50) NOT NULL,
    raca VARCHAR(50) NOT NULL, 
    contato INT(9) NOT NULL,
    sexo VARCHAR(1) NOT NULL, --select
    servico VARCHAr(1) NOT NULL, --select
    especie VARCHAR(1) NOT NULL, --select
    imagem VARCHAR(700), --url para a foto
);
