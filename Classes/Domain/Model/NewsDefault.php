<?php
namespace Justabunchof\NewsIconExtension\Domain\Model;

/**
 * News model for default news
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class NewsDefault extends \GeorgRinger\News\Domain\Model\NewsDefault {
    /**
     * @var string
     */
    protected $newsicon;

    /**
     * Get newsicon
     *
     * @return string
     */
    public function getNewsicon()
    {
        // return "teststring";
        return $this->newsicon;
    }

    /**
     * Set newsicon
     *
     * @param string $newsicon newsicon
     * @return void
     */
    public function setNewsicon($newsicon)
    {
        $this->newsicon = $newsicon;
    }
}