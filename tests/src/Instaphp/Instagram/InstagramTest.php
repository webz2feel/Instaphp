<?php

namespace Instaphp\Instagram;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-22 at 10:29:30.
 * @ignore
 */
class InstagramTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var Instagram
	 */
	protected $object;

	/**
	 * @var array
	 */
	protected $config = [
        'api_endpoint' => 'https://api.instagram.com/{version}',
		'api_protocol' => 'https',
		'api_host' => 'api.instagram.com',
		'api_version' => 'v1',
		'client_id' => TEST_CLIENT_ID,
		'client_secret' => TEST_CLIENT_SECRET,
		'access_token' => '',
		'redirect_uri' => '',
		'http_useragent' => 'Instaphp/Guzzle/cUrl v3 (+http://instaphp.com)',
		'http_timeout' => 6,
		'http_connect_timeout' => 2,
        'log_enabled' => true,
        'log_level' => \Monolog\Logger::DEBUG,
        'log_path' => './instagram_test.log',
        'client_ip' => '127.0.0.1',
        'debug' => TRUE,
        'verify' => TRUE,
	];

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Instagram($this->config);
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	/**
	 * @covers Instaphp\Instagram\Instagram::SetAccessToken
	 * @todo   Implement testSetAccessToken().
	 */
	public function testSetAccessToken()
	{
		// Remove the following lines when you implement this test.
		$this->object->setAccessToken(TEST_ACCESS_TOKEN);
		$this->assertEquals($this->object->getAccessToken(), TEST_ACCESS_TOKEN);
	}

}
