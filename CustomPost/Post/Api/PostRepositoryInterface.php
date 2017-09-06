<?php


namespace CustomPost\Post\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PostRepositoryInterface
{


    /**
     * Save Post
     * @param \CustomPost\Post\Api\Data\PostInterface $post
     * @return \CustomPost\Post\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function save(
        \CustomPost\Post\Api\Data\PostInterface $Post
    );

    /**
     * Retrieve Post
     * @param string $postId
     * @return \CustomPost\Post\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getById($postId);

    /**
     * Retrieve Post matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \CustomPost\Post\Api\Data\PostSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Post
     * @param \CustomPost\Post\Api\Data\PostInterface $post
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function delete(
        \CustomPost\Post\Api\Data\PostInterface $Post
    );

    /**
     * Delete Post by ID
     * @param string $postId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    
    public function deleteById($postId);
}
