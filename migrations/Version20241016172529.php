<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241016172529 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_collec DROP FOREIGN KEY FK_BD9EF2097B6461');
        $this->addSql('DROP INDEX IDX_BD9EF2097B6461 ON user_collec');
        $this->addSql('ALTER TABLE user_collec DROP manga_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_collec ADD manga_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_collec ADD CONSTRAINT FK_BD9EF2097B6461 FOREIGN KEY (manga_id) REFERENCES mangas (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_BD9EF2097B6461 ON user_collec (manga_id)');
    }
}
