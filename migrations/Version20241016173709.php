<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241016173709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE series ADD user_collec_id INT NOT NULL');
        $this->addSql('ALTER TABLE series ADD CONSTRAINT FK_3A10012D58ADC37E FOREIGN KEY (user_collec_id) REFERENCES user_collec (id)');
        $this->addSql('CREATE INDEX IDX_3A10012D58ADC37E ON series (user_collec_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE series DROP FOREIGN KEY FK_3A10012D58ADC37E');
        $this->addSql('DROP INDEX IDX_3A10012D58ADC37E ON series');
        $this->addSql('ALTER TABLE series DROP user_collec_id');
    }
}
