<?php


namespace CustomPost\Post\Api\Data;

interface PostSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get Post list.
     * @return \CustomPost\Post\Api\Data\PostInterface[]
     */
    
    public function getItems();

    /**
     * Set Post list.
     * @param \CustomPost\Post\Api\Data\PostInterface[] $items
     * @return $this
     */
    
    public function setItems(array $items);
}
