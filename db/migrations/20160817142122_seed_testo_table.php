<?php
use Phinx\Migration\AbstractMigration;
class SeedTestoTable extends AbstractMigration
{
    public function up()
    {
        $this->execute("
            insert into testo (title, testo, user_id, created_at)
            values
            ('Testimonial Title', 'Testimonial text', 1, '2015-08-26 19:15:43')
        ");
    }
    public function down()
    {
    }
}
