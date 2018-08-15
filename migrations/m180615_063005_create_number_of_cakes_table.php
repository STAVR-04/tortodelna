<?php

use yii\db\Migration;

/**
 * Handles the creation of table `number_of_cakes`.
 */
class m180615_063005_create_number_of_cakes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('number_of_cakes', [
            'id' => $this->primaryKey(),
            'number' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('number_of_cakes');
    }
}
