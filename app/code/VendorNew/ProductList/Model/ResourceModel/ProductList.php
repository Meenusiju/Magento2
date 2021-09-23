<?php


namespace VendorNew\ProductList\Model\ResourceModel;

class ProductList extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('vendornew_productlist_table', 'entity_id');  
    }
}