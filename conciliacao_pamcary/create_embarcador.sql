CREATE TABLE embarcador (
    id INT IDENTITY(1,1) PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    layout TEXT NOT NULL,
    status_id CHAR(1) DEFAULT 'a',
    data_cadastro DATETIME DEFAULT GETDATE()
);
