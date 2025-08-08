<?php

use yii\db\Migration;


class m240807_000002_create_branches_table extends yii\db\Migration
{
    public function safeUp()
    {
        $this->createTable('{{%branches}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'mfo_code' => $this->string(50)->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%branches}}');
    }
}
