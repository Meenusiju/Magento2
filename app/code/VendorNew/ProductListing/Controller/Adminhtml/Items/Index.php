<?php

namespace VendorNew\ProductListing\Controller\Adminhtml\Items;

class Index extends \VendorNew\ProductListing\Controller\Adminhtml\Items
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
        $resultPage->setActiveMenu('VendorNew_ProductListing::test');
        $resultPage->getConfig()->getTitle()->prepend(__('Create Product Admin Page'));
        $resultPage->addBreadcrumb(__('Manage'), __('Manage'));
        $resultPage->addBreadcrumb(__('Date'), __('Date'));
        return $resultPage;
    }
}