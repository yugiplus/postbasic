<?php


namespace CustomPost\Post\Api\Data;

interface PostInterface
{

    const POST_ID = 'post_id';
    const TITLE_POST = 'Title_Post';
    const CONTENT_POST = 'Content_Post';
    


    /**
     * Get post_id
     * @return string|null
     */
    
    public function getpostId();

    /**
     * Set post_id
     * @param string $post_id
     * @return \CustomPost\Post\Api\Data\PostInterface
     */
    
    public function setpostId($postId);

    /**
     * Get TitlePost
     * @return string|null
     */
    
    public function getTitlePost();

    /**
     * Set TitlePost
     * @param string $TitlePost
     * @return \CustomPost\Post\Api\Data\PostInterface
     */
    
    public function setTitlePost($TitlePost);

    /**
     * Get ContentPost
     * @return string|null
     */
    
    public function getContentPost();

    /**
     * Set ContentPost
     * @param string $ContentPost
     * @return \CustomPost\Post\Api\Data\PostInterface
     */
    
    public function setContentPost($ContentPost);

    /**
     * Get DateTimeCreatePost
     * @return string|null
     */
}
