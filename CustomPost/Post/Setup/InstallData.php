<?php


namespace CustomPost\Post\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $table_custompost_post = $setup->getConnection()->newTable($setup->getTable('custompost_post'));

        
        $table_custompost_post->addColumn(
            'post_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_custompost_post->addColumn(
            'Title_Post',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'TitlePost'
        );


        $table_custompost_post->addColumn(
            'Content_Post',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'ContentPost'
        );

        $setup->getConnection()->createTable($table_custompost_post);

        $setup->endSetup();
    }
}
