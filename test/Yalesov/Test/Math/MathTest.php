<?php
namespace Yalesov\Test\Math;

use Yalesov\Math\Math;

class MathTest extends \PHPUnit_Framework_TestCase
{
    public function testGetDecimalPlace()
    {
        $this->assertEquals(0, Math::getDecimalPlace(0));
        $this->assertEquals(0, Math::getDecimalPlace(10));
        $this->assertEquals(1, Math::getDecimalPlace(0.1));
        $this->assertEquals(9, Math::getDecimalPlace(0.123456789));
        $this->assertEquals(9, Math::getDecimalPlace(0.1234567890));
        $this->assertEquals(0, Math::getDecimalPlace(0.0000000000));
        $this->assertEquals(0, Math::getDecimalPlace(-10));
        $this->assertEquals(1, Math::getDecimalPlace(-0.1));
        $this->assertEquals(9, Math::getDecimalPlace(-0.123456789));
        $this->assertEquals(9, Math::getDecimalPlace(-0.1234567890));
        $this->assertEquals(0, Math::getDecimalPlace(-0.0000000000));
    }

    /**
     * @depends testGetDecimalPlace
     */
    public function testRoundUp()
    {
        $this->assertEquals(0, Math::roundUp(0, 0));
        $this->assertEquals(0, Math::roundUp(0, 1));
        $this->assertEquals(0, Math::roundUp(0, -1));

        $this->assertEquals(1, Math::roundUp(0.1, 0));
        $this->assertEquals(1, Math::roundUp(0.9, 0));
        $this->assertEquals(1, Math::roundUp(1, 0));
        $this->assertEquals(1, Math::roundUp(1.0, 0));
        $this->assertEquals(2, Math::roundUp(1.1, 0));

        $this->assertEquals(10, Math::roundUp(0.1, -1));
        $this->assertEquals(10, Math::roundUp(0.9, -1));
        $this->assertEquals(10, Math::roundUp(1, -1));
        $this->assertEquals(10, Math::roundUp(1.0, -1));
        $this->assertEquals(10, Math::roundUp(1.1, -1));

        $this->assertEquals(10, Math::roundUp(1, -1));
        $this->assertEquals(10, Math::roundUp(9, -1));
        $this->assertEquals(10, Math::roundUp(10, -1));
        $this->assertEquals(10, Math::roundUp(10.0, -1));
        $this->assertEquals(20, Math::roundUp(10.1, -1));

        $this->assertEquals(10, Math::roundUp(0.1, -1));
        $this->assertEquals(0.1, Math::roundUp(0.1, 1));

        $this->assertEquals(0, Math::roundUp(-0, 0));
        $this->assertEquals(0, Math::roundUp(-0.1, 0));
        $this->assertEquals(0, Math::roundUp(-0.9, 0));
        $this->assertEquals(-1, Math::roundUp(-1, 0));
        $this->assertEquals(-1, Math::roundUp(-1.0, 0));
        $this->assertEquals(-1, Math::roundUp(-1.1, 0));

        $this->assertEquals(0, Math::roundUp(-0.1, -1));
        $this->assertEquals(-0.1, Math::roundUp(-0.1, 1));
    }
}
