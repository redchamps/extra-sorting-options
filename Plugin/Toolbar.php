<?php
namespace RedChamps\ExtraSortingOptions\Plugin;

class Toolbar
{
    /**
     * Force return descending direction for "Newest" sorting option
     * @param \Magento\Catalog\Block\Product\ProductList\Toolbar $subject
     * @param callable $proceed
     * @return string
     */
    public function aroundGetCurrentDirection(\Magento\Catalog\Block\Product\ProductList\Toolbar $subject, callable $proceed)
    {
        if ($subject->isOrderCurrent('created_at')) {
            return "desc";
        }
        return $proceed();
    }
}
