<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309154202 extends AbstractMigration
{
//    public function isTransactional(): bool
//    {
//        return false;
//    }

    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->warnIf(true, 'Something might be going wrong');
        $this->addSql('CREATE TABLE example_table (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');



//        $users = [
//            ['name' => 'mike', 'email' => 'a@mail.ru'],
//            ['name' => 'jwage', 'email' => 'a@mail.ru'],
////            ['name' => 'ocramius', 'email' => 'a@mail.ru'],
//        ];
//
//        foreach ($users as $user) {
//            $this->addSql('INSERT INTO users (name, email) VALUES(:name, :email)', $user);
//        }

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
