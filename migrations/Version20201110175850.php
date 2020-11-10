<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201110175850 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` ADD full_name_of_deceased VARCHAR(255) DEFAULT NULL, ADD deceased_date_of_birth DATE DEFAULT NULL, ADD deceased_date_of_death DATE DEFAULT NULL, ADD deceased_interment_information LONGTEXT DEFAULT NULL, ADD family_contact_name VARCHAR(255) DEFAULT NULL, ADD family_contact_street VARCHAR(255) DEFAULT NULL, ADD family_contact_city VARCHAR(255) DEFAULT NULL, ADD family_contact_state VARCHAR(255) DEFAULT NULL, ADD family_contact_zip VARCHAR(255) DEFAULT NULL, ADD family_contact_telephone VARCHAR(255) DEFAULT NULL, ADD family_contact_email VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP full_name_of_deceased, DROP deceased_date_of_birth, DROP deceased_date_of_death, DROP deceased_interment_information, DROP family_contact_name, DROP family_contact_street, DROP family_contact_city, DROP family_contact_state, DROP family_contact_zip, DROP family_contact_telephone, DROP family_contact_email');
    }
}
