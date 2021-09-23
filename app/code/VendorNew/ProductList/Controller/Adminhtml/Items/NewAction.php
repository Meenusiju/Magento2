<?php

namespace VendorNew\ProductList\Controller\Adminhtml\Items;

class NewAction extends \VendorNew\ProductList\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
