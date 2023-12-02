<?php

    class Additioner
    {
        public function process(int $a, int $b)
        {
            return $a + $b;
        }
    }


    class Subtraction
    {
       public function process(int $a, int $b)
        {
            return $a - $b;
        }
    }

    class Multiplication
    {
       public function process(int $a, int $b)
        {
            return $a * $b;
        }
    }


    class Division
    {
        public function process(int $a, int $b)
        {
            return $a / $b;
        }
    }


        class Calculator
        {

            private Additioner $additioner;
            private Subtraction $subtraction;
            private Multiplication $multiplication;
            private Division $division;


            public function __construct(Additioner $additioner, Subtraction $subtraction, Multiplication $multiplication, Division $division)
            {
                $this->additioner = $additioner;
                $this->subtraction = $subtraction;
                $this->multiplication = $multiplication;
                $this->division = $division;
            }   
            
            public function calculate(string $operation, int $a, int $b)
            {
                switch ($operation) {
                    case "add":
                return $this->additioner->process($a, $b);
                case "sub":
                return $this->subtraction->process($a, $b);
                case "multi":
                return $this->multiplication->process($a, $b);
                case "div":
                return $this->division->process($a, $b);

                }
            }
        }


        $additioner = new Additioner();
        $subtraction = new Subtraction();
        $multiplication = new Multiplication();
        $devision = new Division();
        

        $calculator = new Calculator($additioner, $subtraction, $multiplication, $division);

        