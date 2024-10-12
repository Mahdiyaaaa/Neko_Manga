<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012141721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE manga_gender (id INT AUTO_INCREMENT NOT NULL, name_gender VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mangas_manga_gender (mangas_id INT NOT NULL, manga_gender_id INT NOT NULL, INDEX IDX_54ACE34CDDC4978F (mangas_id), INDEX IDX_54ACE34CE8AA294D (manga_gender_id), PRIMARY KEY(mangas_id, manga_gender_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mangas_manga_gender ADD CONSTRAINT FK_54ACE34CDDC4978F FOREIGN KEY (mangas_id) REFERENCES mangas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mangas_manga_gender ADD CONSTRAINT FK_54ACE34CE8AA294D FOREIGN KEY (manga_gender_id) REFERENCES manga_gender (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mangas_manga_gender DROP FOREIGN KEY FK_54ACE34CDDC4978F');
        $this->addSql('ALTER TABLE mangas_manga_gender DROP FOREIGN KEY FK_54ACE34CE8AA294D');
        $this->addSql('DROP TABLE manga_gender');
        $this->addSql('DROP TABLE mangas_manga_gender');
    }
}
