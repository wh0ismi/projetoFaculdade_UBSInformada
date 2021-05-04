CREATE TABLE IF NOT EXISTS tb_beneficiarios(
    id int AUTO_INCREMENT NOT null PRIMARY KEY,
    nomeCompleto varchar(100) NOT null,
    cpf varchar(11) NOT null UNIQUE,
    dataNascimento date NOT null,
    email varchar(50) NOT null,
    numeroContato varchar(20) NOT null,
    cep varchar(10) not null,
    enderecoCompleto varchar(100) NOT null
)DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS tb_vacinas(
    id int AUTO_INCREMENT NOT null PRIMARY KEY,
    dataAplicacao date NOT null,
    idBeneficiario int NOT null,
    unidadeSaude varchar(100) NOT null,
    lote varchar(20) NOT null,
    codigoVacina varchar(20) NOT null,
    nomeVacina varchar(50) NOT null,
    cnes varchar(10) NOT null
)DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;


CREATE TABLE IF NOT EXISTS tb_receituarios(
    id int AUTO_INCREMENT NOT null PRIMARY KEY,
    idBeneficiario int NOT null,
    unidadeSaude varchar(100) NOT null,
    nomeMedico varchar(100) NOT null,
    crm varchar(10) NOT null,
    dataHoje date NOT null,
    areaPrescricao mediumtext NOT null
)DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS tb_atestados(
    id int AUTO_INCREMENT NOT null PRIMARY KEY,
    dataEmissao date NOT null,
    idBeneficiario int NOT null,
    unidadeSaude varchar(100) NOT null, 
    nomeMedico varchar(100) NOT null,
    crm varchar(10) NOT null,
    diasAfastados int(3) NOT null,
    dataInicio date NOT null,
    dataFinal date NOT null,
    areaCiencia mediumtext NOT null  	
)DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
