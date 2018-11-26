<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181126113300 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE faq_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE proposal_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE proposal_comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE proposal_type_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE utilisateur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE comment (id INT NOT NULL, content TEXT NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE faq (id INT NOT NULL, question TEXT NOT NULL, answer TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE proposal (id INT NOT NULL, mark INT NOT NULL, content TEXT NOT NULL, user_id INT NOT NULL, proposal_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE proposal_comment (id INT NOT NULL, comment_id INT NOT NULL, proposal_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE proposal_type (id INT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE utilisateur (id INT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE faq_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE proposal_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE proposal_comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE proposal_type_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE utilisateur_id_seq CASCADE');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE faq');
        $this->addSql('DROP TABLE proposal');
        $this->addSql('DROP TABLE proposal_comment');
        $this->addSql('DROP TABLE proposal_type');
        $this->addSql('DROP TABLE utilisateur');
    }
}
