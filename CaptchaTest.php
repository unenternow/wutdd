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
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setRightOperand(4);
		$this->assertEquals('4',$captcha->getRightOperand());
	}

	public function testSetLeftOperandPattern2Wiht7ReturnSeven()
	{
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setLeftOperand(7);
		$this->assertEquals('seven',$captcha->getLeftOperand());
	}

	public function testGetOperator1ReturnPlusOperator()
	{
		$captcha = new Captcha();
		$captcha->setOperator(1);
		$this->assertEquals('+',$captcha->getOperator());

	}

	public function testGetOperator2ReturnMinusOperator()
	{
		$captcha = new Captcha();
		$captcha->setOperator(2);
		$this->assertEquals('-',$captcha->getOperator());
	}

	public function testGetResultPattern1Operator1plus()
	{
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setLeftOperand(1);
		$captcha->setOperator(1);
		$captcha->setRightOperand(2);
		$this->assertEquals('1 + two = ?',$captcha->result());
	}

	public function testGetResultPattern1Operator2Minus()
	{
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setLeftOperand(1);
		$captcha->setOperator(2);
		$captcha->setRightOperand(2);
		$this->assertEquals('1 - two = ?',$captcha->result());
	}

	public function testGetResultPattern2Operator1Plus()
	{
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setLeftOperand(7);
		$captcha->setOperator(1);
		$captcha->setRightOperand(4);
		$this->assertEquals('seven + 4 = ?',$captcha->result());
	}

	public function testGetResultPattern2Operator1Minus()
	{
		$captcha = new Captcha();
		$captcha->setPattern(2);
		$captcha->setLeftOperand(7);
		$captcha->setOperator(2);
		$captcha->setRightOperand(4);
		$this->assertEquals('seven - 4 = ?',$captcha->result());
	}
}