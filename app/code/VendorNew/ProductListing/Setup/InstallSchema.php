<?php

namespace VendorNew\ProductListing\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        /**
         * Creating table vendornew_productlisting_table
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('vendornew_productlisting_table')
        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Product Id'
        )->addColumn(
            'sku',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            ['nullable' => false],
            'SKU'
        )->addColumn(
            'vendor_number',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            ['nullable' => false],
            'Vendor Number'  
        )->addColumn(
             'vendor_note',
             \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
              ['nullable' => false],
              'Vendor Note'            
        )->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false],
            'Created At'
        )->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false],
            'Updated At'
        )->setComment(
            'VendorNew ProductListing Table'
        );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}