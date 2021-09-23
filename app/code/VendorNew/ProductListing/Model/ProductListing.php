<?php

namespace VendorNew\ProductListing\Model;

use Magento\Framework\Model\AbstractModel;

class ProductListing extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('VendorNew\ProductListing\Model\ResourceModel\ProductListing');
    }
}