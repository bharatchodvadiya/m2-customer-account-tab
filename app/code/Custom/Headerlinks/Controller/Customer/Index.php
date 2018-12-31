<?php
namespace Custom\Headerlinks\Controller\Customer;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $resultPageFactory;

	public function __construct(
        \Magento\Framework\App\Action\Context $contextData,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($contextData);
    }

	public function execute() {
		//$this->_view->loadLayout();
		//$this->_view->renderLayout();
		$resultPageData = $this->resultPageFactory->create();
		$resultPageData->getConfig()->getTitle()->set(__('Custom Tab'));
        return $resultPageData;
	}

}
