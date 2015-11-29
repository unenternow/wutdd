<?php
class CaptchaTest extends PHPUnit_Framework_TestCase
{
	public function testTextNumberEnter1ReturnOne()
	{
		$this->assertEquals('one',$Captcha->getTextNumber);
	}

}