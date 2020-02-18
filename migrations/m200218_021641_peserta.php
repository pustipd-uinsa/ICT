<?php

use yii\db\Migration;

/**
 * Class m200218_021641_peserta
 */
class m200218_021641_peserta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('peserta', [
            'id' => $this->primaryKey(),
            'nim' => $this->string(100)->notNull()->unique(),
            'id_jadwal' => $this->integer(), 
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200218_021641_peserta cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200218_021641_peserta cannot be reverted.\n";

        return false;
    }
    */
}
