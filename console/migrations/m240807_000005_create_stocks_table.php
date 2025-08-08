<?php

use yii\db\Migration;


class m240807_000005_create_stocks_table extends yii\db\Migration
{
    public function safeUp()
    {
        $this->createTable('{{%stocks}}', [
            'id' => $this->primaryKey(),
            'material_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'amount' => $this->decimal(10,2),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey('fk_stock_material', '{{%stocks}}', 'material_id', '{{%raw_materials}}', 'id');
        $this->addForeignKey('fk_stock_branch', '{{%stocks}}', 'branch_id', '{{%branches}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%stocks}}');
    }
}
