<?php


namespace myGear;


class gear
{

    private $count;
    private $orientation;

    public function __construct()
    {
        $this->count = 0;
    }

    public function rotateRight(){

        $this->count = $this->count+1;

        switch ($this->orientation){
            case "w":
                $this->orientation = "n";
            case "n":
                $this->orientation = "e";
            case "e":
                $this->orientation = "s";
            case "s":
                $this->orientation = "w";
        }
    }

    public function rotateLeft(){

        $this->count = $this->count+1;

        switch ($this->orientation){
            case "w":
                $this->orientation = "s";
            case "n":
                $this->orientation = "w";
            case "e":
                $this->orientation = "n";
            case "s":
                $this->orientation = "e";
        }
    }

    /**
     * @return mixed
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

}