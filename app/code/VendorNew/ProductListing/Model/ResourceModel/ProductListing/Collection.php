<?php


namespace VendorNew\ProductListing\Model\ResourceModel\ProductListing;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'VendorNew\ProductListing\Model\ProductListing',
            'VendorNew\ProductListing\Model\ResourceModel\ProductListing'
        );
    }
}