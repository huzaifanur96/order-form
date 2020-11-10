<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201110120017 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, funeral_home VARCHAR(255) NOT NULL, contact VARCHAR(255) NOT NULL, funeral_home_date DATE NOT NULL, funeral_home_street VARCHAR(255) NOT NULL, funeral_home_city VARCHAR(255) NOT NULL, funeral_home_state VARCHAR(255) NOT NULL, funeral_home_zip VARCHAR(255) NOT NULL, funeral_home_telephone VARCHAR(255) NOT NULL, funeral_home_email VARCHAR(255) NOT NULL, funeral_home_ship_merchandise_to VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `order`');
    }
}
