<?php

use yii\db\Migration;

/**
 * Handles the creation of table `imgconst`.
 * Has foreign keys to the tables:
 *
 * - `type`
 * - `tiersconst`
 * - `position`
 */
class m180618_015257_create_imgconst_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('imgconst', [
            'id' => $this->primaryKey(),
            'img' => $this->text(),
            'id_type' => $this->integer()->notNull(),
            'id_tier' => $this->integer()->notNull(),
            'id_position' => $this->integer()->notNull(),
        ]);

        // creates index for column `id_type`
        $this->createIndex(
            'idx-imgconst-id_type',
            'imgconst',
            'id_type'
        );

        // add foreign key for table `type`
        $this->addForeignKey(
            'fk-imgconst-id_type',
            'imgconst',
            'id_type',
            'type',
            'id',
            'CASCADE'
        );

        // creates index for column `id_tier`
        $this->createIndex(
            'idx-imgconst-id_tier',
            'imgconst',
            'id_tier'
        );

        // add foreign key for table `tiersconst`
        $this->addForeignKey(
            'fk-imgconst-id_tier',
            'imgconst',
            'id_tier',
            'tiersconst',
            'id',
            'CASCADE'
        );

        // creates index for column `id_position`
        $this->createIndex(
            'idx-imgconst-id_position',
            'imgconst',
            'id_position'
        );

        // add foreign key for table `position`
        $this->addForeignKey(
            'fk-imgconst-id_position',
            'imgconst',
            'id_position',
            'position',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `type`
        $this->dropForeignKey(
            'fk-imgconst-id_type',
            'imgconst'
        );

        // drops index for column `id_type`
        $this->dropIndex(
            'idx-imgconst-id_type',
            'imgconst'
        );

        // drops foreign key for table `tiersconst`
        $this->dropForeignKey(
            'fk-imgconst-id_tier',
            'imgconst'
        );

        // drops index for column `id_tier`
        $this->dropIndex(
            'idx-imgconst-id_tier',
            'imgconst'
        );

        // drops foreign key for table `position`
        $this->dropForeignKey(
            'fk-imgconst-id_position',
            'imgconst'
        );

        // drops index for column `id_position`
        $this->dropIndex(
            'idx-imgconst-id_position',
            'imgconst'
        );

        $this->dropTable('imgconst');
    }
}
