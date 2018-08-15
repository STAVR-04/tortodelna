<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tiers`.
 */
class m180615_055918_create_tiers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tiers', [
            'id' => $this->primaryKey(),
            'tier' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tiers');
    }
}
