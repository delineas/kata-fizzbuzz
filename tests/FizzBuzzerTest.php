<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzerTest extends TestCase {

    public function setUp() : void {
        $this->fizzbuzzer = new FizzBuzzer();
    }

    public function testFizzBuzzerCanBeInstanciated() {
        $this->assertInstanceOf('FizzBuzzer', $this->fizzbuzzer);
    }

    public function testShouldReturn1WhenInputIs1() {

        $input = 1;

        $result = $this->fizzbuzzer->execute($input);

        $this->assertEquals(1, $result);

    }



    public function testShouldReturn2WhenInputIs2()
    {

        $input = 2;

        $result = $this->fizzbuzzer->execute($input);

        $this->assertEquals(2, $result);
    }

    public function testShouldReturnFizzWhenInputIs3()
    {
        $input = 3;

        $result = $this->fizzbuzzer->execute($input);

        $this->assertEquals('Fizz', $result);
    }

    public function testShouldReturnBuzzWhenInputIs5()
    {
        $input = 5;

        $result = $this->fizzbuzzer->execute($input);

        $this->assertEquals('Buzz',$result);
    }

    public function testShouldReturnFizzWhenInputIs6()
    {
        $input = 6;

        $result = $this->fizzbuzzer->execute($input);

        $this->assertEquals('Fizz', $result);
    }


    public function testShouldReturnFizzBuzzWhenInputIs15()
    {
        $input = 15;

        $result = $this->fizzbuzzer->execute($input);

        $this->assertEquals('FizzBuzz', $result);
    }

    public function testShouldReturnRangeWhenInputIsRange()
    {
        $input = [
            1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16
        ];
        $expected = [
            1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz', 16
        ];

        $result = $this->fizzbuzzer->executeRange($input);

        $this->assertEquals($expected, $result);
    }



    public function testShouldReturnTypeException()
    {
        $this->expectException('TypeError');
        
        $input = 'hola';
        $this->fizzbuzzer->execute($input);

    }

}