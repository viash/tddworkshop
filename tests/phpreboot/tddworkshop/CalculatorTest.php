<?php
namespace Phpreboot\tddworkshop;

use Phpreboot\tddworkshop\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    private $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function tearDown()
    {
        $this->calculator = null;
    }

/*    public function testAddReturnsAnInteger()
    {
        $result = $this->calculator->add();

        $this->assertInternalType('integer', $result, 'Result of `add` is not an integer.');
    }

    public function testAddWithoutParameterReturnsZero()
    {
        $result = $this->calculator->add();
        $this->assertSame(0, $result, 'Empty string on add do not return 0');
    }
*/ /*   public function testAddWithSingleNumberReturnsSameNumber()
    {
        $result = $this->calculator->add('3');
        $this->assertSame(3, $result, 'Add with single number do not returns same number');
    }
    public function testAddWithTwoParametersReturnsTheirSum()
    {
        $result = $this->calculator->add('2,4');

        $this->assertSame(6, $result, 'Add with two parameter do not returns correct sum');
    }
    /**
     * @expectedException \InvalidArgumentException
     */
/*    public function  testAddWithNonStringParameterThrowsException()
    {
        $this->calculator->add(5);//, 'Integer parameter do not throw error'
    }
    /**
     * @expectedException \InvalidArgumentException
     */
/*    public function testAddWithNonNumbersThrowException()
    {
        $this->calculator->add('1,a'); //, 'Invalid parameter do not throw exception'
    }
/*    public function testAddWithMultipleArguments()
    {
      $result = $this->calculator->add('3,4,5');

      $this->assertSame(12, $result, 'Invalid parameter do not throw exception');
    }
    public function testAddWithNewLineinString()
    {
      $result = $this->calculator->add('3\n4,5');
      $this->assertSame(12, $result, 'Invalid parameter do not throw exception');
    }
    public function testAddWithCustomDefinedDelimitterinString()
    {
      $result = $this->calculator->add('\\;\\3;4;5');
      $this->assertSame(12, $result, 'Invalid parameter do not throw exception');
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAddWithNegativeNumbersinString()
    {
      $this->calculator->add("\\;\\3;4;-5");
    }
    public function testAddlessthanThousandinString()
    {
      $result = $this->calculator->add('\\;\\3;4;1005');
      $this->assertSame(7, $result, 'Invalid parameter do not throw exception');
    }

//*****************Multiply **********************//
/*    public function testMultiplyReturnsAnInteger()
    {
        $result = $this->calculator->multiply();

        $this->assertInternalType('integer', $result, 'Result of `add` is not an integer.');
    }

    public function testAddWithoutParameterReturnsZero()
    {
        $result = $this->calculator->add();
        $this->assertSame(0, $result, 'Empty string on add do not return 0');
    }
*//*    public function testMultiplyWithSingleNumberReturnsSameNumber()
    {
        $result = $this->calculator->multiply('3');
        $this->assertSame(3, $result, 'Add with single number do not returns same number');
    }
    public function testMultiplyWithTwoParametersReturnsTheirSum()
    {
        $result = $this->calculator->multiply('2,4');

        $this->assertSame(6, $result, 'Add with two parameter do not returns correct sum');
    }
    /**
     * @expectedException \InvalidArgumentException
     */
/*    public function  testMultiplyWithNonStringParameterThrowsException()
    {
        $this->calculator->multiply(5);//, 'Integer parameter do not throw error'
    }
    /**
     * @expectedException \InvalidArgumentException
     */
  /*  public function testMultiplyWithNonNumbersThrowException()
    {
      $this->calculator->multiply('1,a'); //, 'Invalid parameter do not throw exception'
    }
/*    public function testMultiplyWithMultipleArguments()
    {
      $result = $this->calculator->multiply('3,4,5');
      $this->assertSame(60, $result, 'Invalid parameter do not throw exception');
    }
  /*  public function testMultiplyWithNewLineinString()
    {
      $result = $this->calculator->multiply('3\n4,5');
      $this->assertSame(60, $result, 'Invalid parameter do not throw exception');
    }*/
  /*  public function testMultiplyWithCustomDefinedDelimitterinString()
    {
      $result = $this->calculator->multiply('\\;\\3;4;5');
      $this->assertSame(60, $result, 'Invalid parameter do not throw exception');
    }
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testMultiplyWithNegativeNumbersinString()
    {
      $this->calculator->multiply('\\;\\3;4;-5');
    }
    public function testMultiplylessthanThousandinString()
    {
      $result = $this->calculator->multiply('\\;\\3;4;1005');
      $this->assertSame(12, $result, 'Invalid parameter do not throw exception');
    }
}
