<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180922131622 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE user_crochet');
        $this->addSql('ALTER TABLE crochet CHANGE title title VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_crochet (user_id INT NOT NULL, crochet_id INT NOT NULL, INDEX IDX_20233E8A76ED395 (user_id), INDEX IDX_20233E87CB286DA (crochet_id), PRIMARY KEY(user_id, crochet_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_crochet ADD CONSTRAINT FK_20233E87CB286DA FOREIGN KEY (crochet_id) REFERENCES crochet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_crochet ADD CONSTRAINT FK_20233E8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE type');
        $this->addSql('ALTER TABLE crochet CHANGE title title LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
