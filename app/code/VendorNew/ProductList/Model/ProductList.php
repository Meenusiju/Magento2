<?php

namespace VendorNew\ProductList\Model;

use Magento\Framework\Model\AbstractModel;

class ProductList extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('VendorNew\ProductList\Model\ResourceModel\ProductList');
    }
}