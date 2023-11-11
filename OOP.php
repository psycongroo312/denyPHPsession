<?php

class Animal

{
    private int $age;
    private int $height;
    private int $length;
    private string $voice;
    private bool $hasTail;


    public function __construct(int $age, int $height, int $length, string $voice, bool $hasTail)
    
    {
        

        if ($age < 0)
        {
            $age = 0;
        }

        $this->age = $age;

        if ($height < 0)
        {
            $height = 0;
        }

        $this->age = $height;

        if ($length < 0)
        {
            $length = 0;
        }

        $this->length = $length;

        $this->voice = $voice;

        if ($hasTail === true) {

            $hasTail = true;
    }

    $this->hasTail = true;

    }

    public function getAge(){
        return $this->age;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getLength(){
        return $this->length;
    }

    public function getVoice(){
        return $this->voice;
    }

    public function getHasTail(){
        return $this->hasTail;
    }


}