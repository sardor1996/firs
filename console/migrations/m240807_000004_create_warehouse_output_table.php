<?php

use yii\db\Migration;


class m240807_000004_create_warehouse_output_table extends yii\db\Migration
{
    public function safeUp()
    {
        $this->createTable('{{%warehouse_output}}', [
            'id' => $this->primaryKey(),
            'material_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'department' => $this->string(100),
            'amount' => $this->decimal(10,2),
            'output_date' => $this->date(),
        ]);

        $this->addForeignKey('fk_output_material', '{{%warehouse_output}}', 'material_id', '{{%raw_materials}}', 'id');
        $this->addForeignKey('fk_output_branch', '{{%warehouse_output}}', 'branch_id', '{{%branches}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%warehouse_output}}');
    }
}
