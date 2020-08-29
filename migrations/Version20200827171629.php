<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200827171629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visitas MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE visitas DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE visitas ADD ip VARCHAR(16) NOT NULL, DROP id');
        $this->addSql('ALTER TABLE visitas ADD PRIMARY KEY (ip, fecha)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visitas ADD id INT AUTO_INCREMENT NOT NULL, DROP ip, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
