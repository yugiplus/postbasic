<?php


namespace CustomPost\Post\Block\FrontEndPost;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \CustomPost\Post\Model\ResourceModel\Post\Collection as PostCollection;
use \CustomPost\Post\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use \CustomPost\Post\Model\Post;

class FrontEndPost extends \Magento\Framework\View\Element\Template
{
	protected $_postCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param PostCollectionFactory $postCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        PostCollectionFactory $postCollectionFactory,
        array $data = []
    ) {
        $this->_postCollectionFactory = $postCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Post[]
     */
    public function getPosts()
    {
        /** @var PostCollection $postCollection */
        $postCollection = $this->_postCollectionFactory->create();
        $postCollection->addFieldToSelect('*')->load();
        return $postCollection->getItems();
    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getPostUrl(
        Post $post
    ) {
        return '/Post/Post/view/id/' . $post->getId();
    }
}
