<?php


namespace CustomPost\Post\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'CustomPost\Post\Model\Post',
            'CustomPost\Post\Model\ResourceModel\Post'
        );
    }
}
