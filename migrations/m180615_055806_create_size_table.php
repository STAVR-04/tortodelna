<?php

use yii\db\Migration;

/**
 * Handles the creation of table `size`.
 */
class m180615_055806_create_size_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('size', [
            'id' => $this->primaryKey(),
            'size' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('size');
    }
}
