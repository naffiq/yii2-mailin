<?php

/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 4/3/17
 * Time: 2:18 PM
 */
class MailinTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var \naffiq\mailin\Mailin
     */
    private $mailin;

    public function setUp()
    {
        $this->key = getenv('MAILIN_API_KEY');
        if (empty($this->key)) {
            throw new ErrorException('Provide your api key via "MAILIN_API_KEY" environment variable!');
        }

        $this->mailin = new \naffiq\mailin\Mailin([
            'apiKey' => $this->key
        ]);
    }

    public function testInit()
    {
        $this->assertTrue($this->mailin->getClient() instanceof \Sendinblue\Mailin);
    }

    public function testGetAccount()
    {
        $account = $this->mailin->getClient()->get_account();
        $this->assertEquals('success', $account['code']);
    }
}