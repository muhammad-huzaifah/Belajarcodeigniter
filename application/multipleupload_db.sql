CREATE DATABASE multiupload_db;

USE multiupload_db;

CREATE TABLE tb_berkas (
						   kd_berkas INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
						   nama_berkas VARCHAR(255) DEFAULT NULL,
						   keterangan_berkas VARCHAR(255) DEFAULT NULL,
						   tipe_berkas VARCHAR(100) DEFAULT NULL,
						   ukuran_berkas FLOAT NOT NULL
) ENGINE=InnoDB DEFAULT CHAR SET = latin1;
