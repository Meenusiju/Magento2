<?php


namespace VendorNew\ProductList\Controller\Adminhtml\Items;

class Delete extends \VendorNew\ProductList\Controller\Adminhtml\Items
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                $model = $this->_objectManager->create('VendorNew\ProductList\Model\ProductList');
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('You deleted the product.'));
                $this->_redirect('vendornew_productlist/*/');
                return;
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addError(
                    __('We can\'t delete product right now. Please review the log and try again.')
                );
                $this->_objectManager->get('Psr\Log\LoggerInterface')->critical($e);
                $this->_redirect('vendornew_productlist/*/edit', ['id' => $this->getRequest()->getParam('id')]);
                return;
            }
        }
        $this->messageManager->addError(__('We can\'t find a product to delete.'));
        $this->_redirect('vendornew_productlist/*/');
    }
}