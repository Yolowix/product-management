<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240904074627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'add value on User';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            "INSERT INTO user (username, roles, password) VALUES 
            ('admin', '[\"ROLE_ADMIN\"]', '".password_hash('root', PASSWORD_BCRYPT)."')"
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM user WHERE username = 'admin'");
    }
}
