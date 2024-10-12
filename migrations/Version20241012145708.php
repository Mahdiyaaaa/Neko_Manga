<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012145708 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_collec (id INT AUTO_INCREMENT NOT NULL, satut_id INT NOT NULL, user_id INT NOT NULL, manga_id INT NOT NULL, rating INT DEFAULT NULL, owned_volumes SMALLINT NOT NULL, INDEX IDX_BD9EF209B6E005CA (satut_id), INDEX IDX_BD9EF209A76ED395 (user_id), INDEX IDX_BD9EF2097B6461 (manga_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_collec ADD CONSTRAINT FK_BD9EF209B6E005CA FOREIGN KEY (satut_id) REFERENCES status (id)');
        $this->addSql('ALTER TABLE user_collec ADD CONSTRAINT FK_BD9EF209A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_collec ADD CONSTRAINT FK_BD9EF2097B6461 FOREIGN KEY (manga_id) REFERENCES mangas (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_collec DROP FOREIGN KEY FK_BD9EF209B6E005CA');
        $this->addSql('ALTER TABLE user_collec DROP FOREIGN KEY FK_BD9EF209A76ED395');
        $this->addSql('ALTER TABLE user_collec DROP FOREIGN KEY FK_BD9EF2097B6461');
        $this->addSql('DROP TABLE user_collec');
    }
}
