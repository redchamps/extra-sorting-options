<?php
namespace RedChamps\ExtraSortingOptions\Plugin;

class Base
{
    /**
     * @param $options
     * @return array
     */
    public function appendOptions($options)
    {
        foreach ($this->getExtraSortingOptions() as $key => $value) {
            $options[] = ['label' => $value, 'value' => $key];
        }
        return $options;
    }

    public function getExtraSortingOptions()
    {
        return [
            'created_at' => __('Newest')
        ];
    }
}
