<?php

use yii\db\Migration;


class m240807_000003_create_warehouse_input_table extends yii\db\Migration
{
    public function safeUp()
    {
        $this->createTable('{{%warehouse_input}}', [
            'id' => $this->primaryKey(),
            'material_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'amount' => $this->decimal(10,2),
            'input_date' => $this->date(),
        ]);

        $this->addForeignKey('fk_input_material', '{{%warehouse_input}}', 'material_id', '{{%raw_materials}}', 'id');
        $this->addForeignKey('fk_input_branch', '{{%warehouse_input}}', 'branch_id', '{{%branches}}', 'id');
    }

    public function safeDown()
    {
        $this->dropTable('{{%warehouse_input}}');
    }
}
