<?php

use app\core\Helpers;

class m0002_other_migration
{
    public function up()
    {
        Helpers::log('working in the migration');
    }
    public function down()
    {
        echo 'destroying migration: ' . \get_class($this);
    }
}
