Create database T1php;
use T1php;

CREATE TABLE  alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    escolaridade INT,
    matriculado TINYINT(1) DEFAULT 0
);