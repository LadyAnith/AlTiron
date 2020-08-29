<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200827164333 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE config (id INT AUTO_INCREMENT NOT NULL, parametro VARCHAR(50) NOT NULL, valor VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gira (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, nombre VARCHAR(100) NOT NULL, lugar VARCHAR(100) NOT NULL, coordenadas VARCHAR(20) NOT NULL, horario TIME NOT NULL, precio DOUBLE PRECISION NOT NULL, webs VARCHAR(200) NOT NULL, precio_visible TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mensajes_contacto (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, asunto VARCHAR(100) NOT NULL, nombre VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, telefono VARCHAR(9) DEFAULT NULL, mensaje VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE multimedia (id INT AUTO_INCREMENT NOT NULL, tipo VARCHAR(50) NOT NULL, url VARCHAR(200) NOT NULL, categoria VARCHAR(50) NOT NULL, fecha_material DATE NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rrss (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(50) NOT NULL, url VARCHAR(200) NOT NULL, activa TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, nombre VARCHAR(50) NOT NULL, rol VARCHAR(50) DEFAULT NULL, contra VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visitas (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE config');
        $this->addSql('DROP TABLE gira');
        $this->addSql('DROP TABLE mensajes_contacto');
        $this->addSql('DROP TABLE multimedia');
        $this->addSql('DROP TABLE rrss');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE visitas');
    }
}
