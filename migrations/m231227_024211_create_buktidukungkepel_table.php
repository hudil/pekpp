<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%buktidukung}}`.
 */
class m231227_024211_create_buktidukungkepel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%buktidukungkepel}}', [
            'id' => $this->primaryKey(),
            'kepel_id' => $this->integer()->notNull(),
            'nomor' => $this->string(10),
            'namafile' => $this->string()
        ]);

        $this->createIndex(
            'idx-buktidukungkepel-kepel_id',
            'buktidukungkepel',
            'kepel_id'
        );

        $this->addForeignKey(
            'fk-buktidukungkepel-kepel_id',
            'buktidukungkepel',
            'kepel_id',
            'kepel',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-buktidukungkepel-kepel_id',
            'buktidukungkepel'
        );

        $this->dropIndex(
            'idx-buktidukungkepel-kepel_id',
            'buktidukungkepel'
        );

        $this->dropTable('{{%buktidukungkepel}}');
    }
}
