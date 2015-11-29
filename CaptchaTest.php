<?php
class CaptchaTest extends PHPUnit_Framework_TestCase
{
	// public function testTextNumberEnter1ReturnOne()
	// {
	// 	$captcha = new Captcha(1);
	// 	$this->assertEquals('one',$Captcha->getTextNumber(1));
	// }
	public function testGetTextNumberWiht6ReturnSix()
	{

		$captcha = new Captcha();
		$this->assertEquals('six',$captcha->getTextNumber(6));
	}

	public function testGetTextNumberWiht10ReturnTen()
	{

		$captcha = new Captcha();
		$this->assertEquals('ten',$captcha->getTextNumber(10));
	}


	public function testSetRightOperandPattern1Wiht5ReturnFive()
	{
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setRightOperand(5);
		$this->assertEquals('five',$captcha->getRightOperand());
	}


	public function testSetRightOperandPattern2Wiht4Return4()
	{
		
	}

	public function testSetLeftOperandPattern2Wiht7ReturnSeven()
	{

	}




	public function testGetOperator1ReturnPlusOperator()
	{
		$captcha = new Captcha();
		$this->assertEquals('+',$captcha->getOperator(1));

	}

	public function testGetOperator2ReturnMinusOperator()
	{
		$captcha = new Captcha();
		$this->assertEquals('-',$captcha->getOperator(2));
	}

}