<?php
namespace RedChamps\ExtraSortingOptions\Plugin;

use Magento\Catalog\Model\Category\Attribute\Source\Sortby;

class ListSortCategory extends Base
{
    /**
     * @param Sortby $subject
     * @param $result
     * @return array
     */
    public function afterGetAllOptions(Sortby $subject, $result)
    {
        return $this->appendOptions($result);
    }
}