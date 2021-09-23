<?php

namespace  VendorNew\ProductListing\Controller\Adminhtml\Items;

class Edit extends \VendorNew\ProductListing\Controller\Adminhtml\Items
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
       
        $model = $this->_objectManager->create(' VendorNew\ProductListing\Model\ProductListing');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This product no longer exists.'));
                $this->_redirect('vendornew_productlisting/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_vendornew_productlisting_items', $model);
        $this->_initAction();
        if ($model->getId()) {
            $title = __('Edit Product');
        } else {
            $title = __('New Product Create Form');
        }
        $this->_view->getPage()->getConfig()->getTitle()->prepend($title);
        $this->_view->getLayout()->getBlock('items_items_edit');
        $this->_view->renderLayout();
    }
}
