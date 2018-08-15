<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tiersconst`.
 */
class m180618_013528_create_tiersconst_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tiersconst', [
            'id' => $this->primaryKey(),
            'tier' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tiersconst');
    }
}
