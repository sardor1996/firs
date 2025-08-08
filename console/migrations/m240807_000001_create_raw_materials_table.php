<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%raw_materials}}`.
 */
class m240807_000001_create_raw_materials_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%raw_materials}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'color' => $this->string(100),
            'type' => $this->string(100),
            'size_type' => "ENUM('kg', 'meters', 'liters', 'pieces') NOT NULL",
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%raw_materials}}');
    }
}
