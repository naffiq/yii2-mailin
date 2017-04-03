<?php

namespace naffiq\mailin;

use yii\base\Component;

/**
 * Class Mailin
 *
 * Used as a component wrapper for SendinBlue Mailin PHP Library
 *
 * @package naffiq\mailin
 */
class Mailin extends Component
{
    /**
     *
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiUrl = 'https://api.sendinblue.com/v2.0';

    /**
     * @var \Sendinblue\Mailin
     */
    private $mailin;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->mailin = new \Sendinblue\Mailin($this->apiUrl, $this->apiKey);
    }

    /**
     * @return \Sendinblue\Mailin
     */
    public function getClient()
    {
        return $this->mailin;
    }
}