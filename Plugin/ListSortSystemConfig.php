<?php
namespace RedChamps\ExtraSortingOptions\Plugin;

use Magento\Catalog\Model\Config\Source\ListSort;

class ListSortSystemConfig extends Base
{
    /**
     * @param ListSort $subject
     * @param $result
     * @return array
     */
    public function afterToOptionArray(ListSort $subject, $result)
    {
        return $this->appendOptions($result);
    }
}