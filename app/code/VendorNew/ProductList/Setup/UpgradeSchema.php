<?php

namespace VendorNew\ProductList\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        /**
         * Creating table vendornew_productlist_table
         */
        if (version_compare($context->getVersion(), '1.0.1') < 0) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('vendornew_productlist_table')
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
                    'VendorNew ProductList Table'
                );
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
}