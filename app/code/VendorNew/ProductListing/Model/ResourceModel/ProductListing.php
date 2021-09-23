<?php


namespace VendorNew\ProductListing\Model\ResourceModel;

class ProductListing extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('vendornew_productlisting_table', 'entity_id');  
    }
}