<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slider`.
 * Has foreign keys to the tables:
 *
 * - `assortment`
 */
class m180424_090535_create_slider_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'assortment_id' => $this->integer()->notNull(),
            'content' => $this->text(),
        ]);

        // creates index for column `assortment_id`
        $this->createIndex(
            'idx-slider-assortment_id',
            'slider',
            'assortment_id'
        );

        // add foreign key for table `assortment`
        $this->addForeignKey(
            'fk-slider-assortment_id',
            'slider',
            'assortment_id',
            'assortment',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `assortment`
        $this->dropForeignKey(
            'fk-slider-assortment_id',
            'slider'
        );

        // drops index for column `assortment_id`
        $this->dropIndex(
            'idx-slider-assortment_id',
            'slider'
        );

        $this->dropTable('slider');
    }
}
