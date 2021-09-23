<?php

namespace VendorNew\ProductListing\Controller\Adminhtml\Items;

class NewAction extends \VendorNew\ProductListing\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
