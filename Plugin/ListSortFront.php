<?php
namespace RedChamps\ExtraSortingOptions\Plugin;

use Magento\Catalog\Model\Config;

class ListSortFront extends Base
{
    /**
     * @param Config $subject
     * @param $result
     * @return mixed
     */
    public function afterGetAttributeUsedForSortByArray(Config $subject, $result)
    {
        $result = array_merge($result, $this->getExtraSortingOptions());
        return $result;
    }
}