<?php

use yii\db\Migration;

/**
 * Handles the creation of table `assortment`.
 * Has foreign keys to the tables:
 *
 * - `categories`
 */
class m180419_091232_create_assortment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('assortment', [
            'id' => $this->primaryKey(),
            'categories_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'content' => $this->text(),
            'new' => $this->text(),
            'pay' => $this->integer(),
            'pay_action' => $this->integer(),
            'img' => $this->text(),
            'new_img' => $this->text(),
        ]);

        // creates index for column `categories_id`
        $this->createIndex(
            'idx-assortment-categories_id',
            'assortment',
            'categories_id'
        );

        // add foreign key for table `categories`
        $this->addForeignKey(
            'fk-assortment-categories_id',
            'assortment',
            'categories_id',
            'categories',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `categories`
        $this->dropForeignKey(
            'fk-assortment-categories_id',
            'assortment'
        );

        // drops index for column `categories_id`
        $this->dropIndex(
            'idx-assortment-categories_id',
            'assortment'
        );

        $this->dropTable('assortment');
    }
}
