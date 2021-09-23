<?php


namespace VendorNew\ProductList\Model\ResourceModel\ProductList;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'VendorNew\ProductList\Model\ProductList',
            'VendorNew\ProductList\Model\ResourceModel\ProductList'
        );
    }
}