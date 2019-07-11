<?php
namespace Fineweb\Shipping\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Magento\Catalog\Block\Product\View;

class Estimate extends Template
{
    protected $_product_view;

    /**
     * Estimate constructor.
     * @param View $_product_view
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        View $_product_view,
        Context $context,
        array $data = []
    ) {
        $this->_product_view = $_product_view;
        parent::__construct($context, $data);
    }

    /**
     * @return \Magento\Catalog\Model\Product
     */
    public function getProductInfo() {
        return $this->_product_view->getProduct();
    }
}