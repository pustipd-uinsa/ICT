<?php

use yii\db\Migration;

/**
 * Class m200218_015845_jadwal
 */
class m200218_015845_jadwal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('jadwal', 
        [
            'id' => $this->primaryKey(),
            'kelas' => $this->string(100),
            'tanggal' => $this->date(),
            'waktu' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200218_015845_jadwal cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200218_015845_jadwal cannot be reverted.\n";

        return false;
    }
    */
}
