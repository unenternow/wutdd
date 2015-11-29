<?php
require_once("random.php");
class CaptchaTest extends PHPUnit_Framework_TestCase
{
	// public function testTextNumberEnter1ReturnOne()
	// {
	// 	$captcha = new Captcha(1);
	// 	$this->assertEquals('one',$Captcha->getTextNumber(1));
	// }
	public function setup()
	{
		$this->captcha = new captcha();
	}

	public function testGetTextNumberWiht6ReturnSix()
	{
		$this->assertEquals('six',$this->captcha->getTextNumber(6));
	}

	public function testGetTextNumberWiht10ReturnTen()
	{
		$this->assertEquals('ten',$this->captcha->getTextNumber(10));
	}


	public function testSetRightOperandPattern1Wiht5ReturnFive()
	{
		$this->captcha->setPattern(1);
		$this->captcha->setRightOperand(5);
		$this->assertEquals('five',$this->captcha->getRightOperand());
	}

	public function testSetRightOperandPattern2Wiht4Return4()
	{
		$this->captcha->setPattern(2);
		$this->captcha->setRightOperand(4);
		$this->assertEquals('4',$this->captcha->getRightOperand());
	}

	public function testSetLeftOperandPattern2Wiht7ReturnSeven()
	{
		$this->captcha->setPattern(2);
		$this->captcha->setLeftOperand(7);
		$this->assertEquals('seven',$this->captcha->getLeftOperand());
	}

	public function testGetOperator1ReturnPlusOperator()
	{
		$this->captcha->setOperator(1);
		$this->assertEquals('+',$this->captcha->getOperator());

	}

	public function testGetOperator2ReturnMinusOperator()
	{
		$this->captcha->setOperator(2);
		$this->assertEquals('-',$this->captcha->getOperator());
	}

	public function testGetResultPattern1Operator1plus()
	{
		$this->captcha->setPattern(1);
		$this->captcha->setLeftOperand(1);
		$this->captcha->setOperator(1);
		$this->captcha->setRightOperand(2);
		$this->assertEquals('1 + two = ?',$this->captcha->result());
	}

	public function testGetResultPattern1Operator2Minus()
	{
		$this->captcha->setPattern(1);
		$this->captcha->setLeftOperand(1);
		$this->captcha->setOperator(2);
		$this->captcha->setRightOperand(2);
		$this->assertEquals('1 - two = ?',$this->captcha->result());
	}

	public function testGetResultPattern2Operator1Plus()
	{
		$this->captcha->setPattern(2);
		$this->captcha->setLeftOperand(7);
		$this->captcha->setOperator(1);
		$this->captcha->setRightOperand(4);
		$this->assertEquals('seven + 4 = ?',$this->captcha->result());
	}

	public function testGetResultPattern2Operator1Minus()
	{
		$this->captcha->setPattern(2);
		$this->captcha->setLeftOperand(7);
		$this->captcha->setOperator(2);
		$this->captcha->setRightOperand(4);
		$this->assertEquals('seven - 4 = ?',$this->captcha->result());
	}

	public function testGenerateCaptchaPattern1OperateType1()
	{	
		$random_mock = $this->getMockBuilder('Random')->getMock();
		$random_mock ->method('randomPattern')->willReturn(1);
		$random_mock ->method('randomOperator')->willReturn(1);
		$random_mock ->method('randomOperand')->willReturn(4);
		
		$this->captcha->generate($random_mock);
		$this->assertEquals('4 + four = ?',$this->captcha->result());
	}





	// public function testMockRandomPatternShouldReturn1()
	// {
	// 	$captcha_mock = $this->getMockBuilder('Captcha')->getMock();
	// 	$captcha_mock ->method('randomPattern')->willReturn(1);
	// 	$this->assertEquals(1,$captcha_mock->randomPattern());
	// }

	// public function testMockRandomPatternShouldReturn7()
	// {
	// 	$captcha_mock = $this->getMockBuilder('Captcha')->getMock();
	// 	$captcha_mock ->method('randomPattern')->willReturn(7);
	// 	$this->assertEquals(7,$captcha_mock->randomPattern());
	// }

}