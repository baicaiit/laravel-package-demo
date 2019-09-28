<?php
/**
 * User: baicai
 * Date: 2019/9/27
 * Time: 14:31
 */

use \PHPUnit\Framework\TestCase;
use \Baicaiit\Hasher\MD5Hasher;

class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $res = $this->hasher->check('password', $password);

        $this->assertTrue($res);
    }
}