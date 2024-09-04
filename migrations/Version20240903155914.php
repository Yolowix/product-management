<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240903155914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add entity objects';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE product (
            id INT AUTO_INCREMENT NOT NULL, 
            code VARCHAR(255) NOT NULL, 
            name VARCHAR(255) NOT NULL, 
            description LONGTEXT NOT NULL, 
            image VARCHAR(255) NOT NULL, 
            category VARCHAR(255) NOT NULL, 
            price NUMERIC(10, 2) NOT NULL, 
            quantity INT NOT NULL, 
            internal_reference VARCHAR(255) NOT NULL, 
            shell_id INT NOT NULL, 
            inventory_status VARCHAR(255) NOT NULL, 
            rating DOUBLE PRECISION NOT NULL, 
            created_at DATETIME NOT NULL, 
            updated_at DATETIME NOT NULL, 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE product');
    }
}
