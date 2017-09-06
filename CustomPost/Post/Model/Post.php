<?php


namespace CustomPost\Post\Model;

use CustomPost\Post\Api\Data\PostInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements PostInterface
{

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('CustomPost\Post\Model\ResourceModel\Post');
    }

    /**
     * Get post_id
     * @return string
     */
    public function getpostId()
    {
        return $this->getData(self::POST_ID);
    }

    /**
     * Set post_id
     * @param string $postId
     * @return \CustomPost\Post\Api\Data\PostInterface
     */
    public function setpostId($postId)
    {
        return $this->setData(self::POST_ID, $postId);
    }

    /**
     * Get TitlePost
     * @return string
     */
    public function getTitlePost()
    {
        return $this->getData(self::TITLE_POST);
    }

    /**
     * Set TitlePost
     * @param string $TitlePost
     * @return \CustomPost\Post\Api\Data\PostInterface
     */
    public function setTitlePost($TitlePost)
    {
        return $this->setData(self::TITLE_POST, $TitlePost);
    }

     /**
     * Get ContentPost
     * @return string
     */
    public function getContentPost()
    {
        return $this->getData(self::CONTENT_POST);
    }

    /**
     * Set ContentPost
     * @param string $ContentPost
     * @return \CustomPost\Post\Api\Data\PostInterface
     */
    public function setContentPost($ContentPost)
    {
        return $this->setData(self::CONTENT_POST, $ContentPost);
    }

}
