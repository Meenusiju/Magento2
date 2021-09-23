<?php

namespace VendorNew\ProductList\Controller\Adminhtml\Items;

class Index extends \VendorNew\ProductList\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('VendorNew_ProductList::test');
        $resultPage->getConfig()->getTitle()->prepend(__('Create Product Admin Page'));
        $resultPage->addBreadcrumb(__('Manage'), __('Manage'));
        $resultPage->addBreadcrumb(__('Date'), __('Date'));
        return $resultPage;
    }
}