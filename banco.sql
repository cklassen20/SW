CREATE TABLE usuario(
	id BIGINT NOT NULL AUTO_INCREMENT,
	email VARCHAR(128) NOT NULL,
	pass VARCHAR(256) NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT ui_usuario_email UNIQUE INDEX(email)
);

CREATE TABLE aluno(
	id BIGINT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(128) NOT NULL,
	sobrenome VARCHAR(128) NOT NULL,
	idusuario BIGINT NOT NULL,
	genero SMALLINT NOT NULL,
	datanascimento TIMESTAMP,
	serie SMALLINT NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT fk_aluno_idusuario FOREIGN KEY(idusuario) REFERENCES usuario(id)
);

CREATE TABLE desempenho(
	id BIGINT NOT NULL AUTO_INCREMENT,
	idaluno BIGINT NOT NULL,
	tipo SMALLINT NOT NULL,
	movimentos INTEGER NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT fk_desempenho_idaluno FOREIGN KEY(idaluno) REFERENCES aluno(id)
);

CREATE TABLE trajeto(
	id BIGINT NOT NULL AUTO_INCREMENT,
	iddesempenho BIGINT NOT NULL,
	movimento SMALLINT NOT NULL,
	ordem INTEGER NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT fk_trajeto_iddesempenho FOREIGN KEY(iddesempenho) REFERENCES desempenho(id)
);