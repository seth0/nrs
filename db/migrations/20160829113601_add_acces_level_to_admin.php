<?php

use Phinx\Migration\AbstractMigration;

class AddAccesLevelToAdmin extends AbstractMigration
{
 function change()
    {
      $table = $this->table('users');
      $table->addColumn('acces_level', 'integer', ['default' => '1'])
      ->save();
    }
}
