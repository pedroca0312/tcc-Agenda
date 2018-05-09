-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE atividade (
id_atividade int PRIMARY KEY,
descricao varchar(80),
data_cadastro date,
data_previsao date,
id_turma int,
id_disciplina int
)

CREATE TABLE area_formacao (
id_area int PRIMARY KEY,
descricao varchar(80)
)

CREATE TABLE tipo_usuario  (
id_tipo_usuario int PRIMARY KEY,
desc_usuario varchar(80)
)

CREATE TABLE turma (
ano varchar(7),
nome varchar(50),
id_turma int PRIMARY KEY,
id_curso int
)

CREATE TABLE usuario (
nome varchar(50),
senha varchar(20),
id_usuario int PRIMARY KEY,
num_matricula int,
email varchar(50),
id_area int,
id_tipo_usuario int,
FOREIGN KEY(id_area) REFERENCES area_formacao (id_area),
FOREIGN KEY(id_tipo_usuario) REFERENCES tipo_usuario  (id_tipo_usuario)
)

CREATE TABLE disciplina (
nome varchar(50),
id_disciplina int PRIMARY KEY
)

CREATE TABLE comentario (
data_hora date,
id_comentario int PRIMARY KEY,
comentario varchar(80),
id_usuario int,
id_atividade int,
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario),
FOREIGN KEY(id_atividade) REFERENCES atividade (id_atividade)
)

CREATE TABLE curso (
id_curso int PRIMARY KEY,
nome varchar(50)
)

CREATE TABLE disciplinas_curso (
id_disciplina int,
id_curso int,
FOREIGN KEY(id_disciplina) REFERENCES disciplina (id_disciplina),
FOREIGN KEY(id_curso) REFERENCES curso (id_curso)
)

CREATE TABLE docentes_turma (
id_usuario int,
id_turma int,
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario),
FOREIGN KEY(id_turma) REFERENCES turma (id_turma)
)

CREATE TABLE aluno_turma (
id_turma int,
id_usuario int,
data_saida date,
data_entrada date,
status varchar(20),
FOREIGN KEY(id_turma) REFERENCES turma (id_turma),
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
)

ALTER TABLE atividade ADD FOREIGN KEY(id_turma) REFERENCES turma (id_turma)
ALTER TABLE atividade ADD FOREIGN KEY(id_disciplina) REFERENCES disciplina (id_disciplina)
ALTER TABLE turma ADD FOREIGN KEY(id_curso) REFERENCES curso (id_curso)
