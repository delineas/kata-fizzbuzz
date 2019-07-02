<?php

class FizzBuzzer {

    public function execute(int $input) {
        if ($this->isDivisibleBy3($input) && $this->isDivisibleBy5($input)) {
            return 'FizzBuzz';
        }
        if($this->isDivisibleBy3($input)) {
            return 'Fizz';
        }
        if ($this->isDivisibleBy5($input)) {
            return 'Buzz';
        }
        return $input;
    }

    public function executeRange(array $input) {
        return array_map(
            function($number) {
                return $this->execute($number);
            }
            ,
            $input
        );
    }

    private function isDivisibleBy3($number) 
    {
        return $number % 3 == 0;
    }
    private function isDivisibleBy5($number)
    {
        return $number % 5 == 0;
    }
}