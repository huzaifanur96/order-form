<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201111093402 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` ADD sym_ack_quantity VARCHAR(255) DEFAULT NULL, ADD sym_ack_sentiment VARCHAR(255) DEFAULT NULL, ADD sym_ack_font VARCHAR(255) DEFAULT NULL, ADD sym_ack_font_ink VARCHAR(255) DEFAULT NULL, ADD sym_ack_motif VARCHAR(255) DEFAULT NULL, ADD sym_ack_motif_ink VARCHAR(255) DEFAULT NULL, ADD sym_ack_paper VARCHAR(255) DEFAULT NULL, ADD ret_add_imp_street VARCHAR(255) DEFAULT NULL, ADD ret_add_imp_city VARCHAR(255) DEFAULT NULL, ADD ret_add_imp_state VARCHAR(255) DEFAULT NULL, ADD ret_add_imp_zip VARCHAR(255) DEFAULT NULL, ADD rem_por_style VARCHAR(255) DEFAULT NULL, ADD rem_por_size VARCHAR(255) DEFAULT NULL, ADD rem_por_photo VARCHAR(255) DEFAULT NULL, ADD rem_por_special_instructions LONGTEXT DEFAULT NULL, ADD mem_pra_car_quantity VARCHAR(255) DEFAULT NULL, ADD mem_pra_car_style VARCHAR(255) DEFAULT NULL, ADD mem_pra_car_verse VARCHAR(255) DEFAULT NULL, ADD mem_pra_car_ink VARCHAR(255) DEFAULT NULL, ADD mem_pra_car_paper VARCHAR(255) DEFAULT NULL, ADD mem_pra_car_custom_verse VARCHAR(255) DEFAULT NULL, ADD mem_book_obi_quantity VARCHAR(255) DEFAULT NULL, ADD mem_book_obi_paper VARCHAR(255) DEFAULT NULL, ADD mem_book_obi_tassel_color VARCHAR(255) DEFAULT NULL, ADD mem_book_obi_obituary_file VARCHAR(255) DEFAULT NULL, ADD don_car_env_quantity VARCHAR(255) DEFAULT NULL, ADD don_car_env_donation_information LONGTEXT DEFAULT NULL, ADD don_car_env_street VARCHAR(255) DEFAULT NULL, ADD don_car_env_city VARCHAR(255) DEFAULT NULL, ADD don_car_env_state VARCHAR(255) DEFAULT NULL, ADD don_car_env_zip VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP sym_ack_quantity, DROP sym_ack_sentiment, DROP sym_ack_font, DROP sym_ack_font_ink, DROP sym_ack_motif, DROP sym_ack_motif_ink, DROP sym_ack_paper, DROP ret_add_imp_street, DROP ret_add_imp_city, DROP ret_add_imp_state, DROP ret_add_imp_zip, DROP rem_por_style, DROP rem_por_size, DROP rem_por_photo, DROP rem_por_special_instructions, DROP mem_pra_car_quantity, DROP mem_pra_car_style, DROP mem_pra_car_verse, DROP mem_pra_car_ink, DROP mem_pra_car_paper, DROP mem_pra_car_custom_verse, DROP mem_book_obi_quantity, DROP mem_book_obi_paper, DROP mem_book_obi_tassel_color, DROP mem_book_obi_obituary_file, DROP don_car_env_quantity, DROP don_car_env_donation_information, DROP don_car_env_street, DROP don_car_env_city, DROP don_car_env_state, DROP don_car_env_zip');
    }
}
