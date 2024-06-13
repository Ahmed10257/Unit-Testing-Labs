<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

require_once './src/Factorial.php';

#[CoversClass(Factorial::class)]
class FactorialTest extends TestCase {

    
    public function testFactorialOfZero() {
        $factorial = new Factorial();
        $this->assertEquals(1, $factorial->calculate(0));
    }

    public function testFactorialOfOne() {
        $factorial = new Factorial();
        $this->assertEquals(1, $factorial->calculate(1));
    }

    public function testFactorialOfFive() {
        $factorial = new Factorial();
        $this->assertEquals(120, $factorial->calculate(5));
    }

    public function testFactorialOfRandomInt() {
        $factorial = new Factorial();
        $n = 6;
        $this->assertEquals(720, $factorial->calculate($n));
        $this->assertEquals($factorial->calculate($n), $factorial->calculate($n - 1) * $n);
    }

    public function testFactorialOfNegativeNumber() {
        $factorial = new Factorial();
        $this->assertNull($factorial->calculate(-3));
    }

    public function testFactorialOfNonInteger() {
        $factorial = new Factorial();
        $this->assertNull($factorial->calculate(1.5));
        $this->assertNull($factorial->calculate(false));
        $this->assertNull($factorial->calculate('abc'));
    }

}
?>