<?php

/**
* A dice
*/
class CDice {
    /**
    * Properties
    *
    */
    private $faces;
    private $lastThrow = 0;

    /**
    * Constructor
    *
    * @param int $faces the number of faces to use.
    */
    public function __construct($faces=6) {
        $this->faces = $faces;
    }

    /**
    * Throw the dice
    */
    public function ThrowDice() {
        $this->lastThrow = rand(1, $this->faces);
        return $this->lastThrow;
     }

     /**
     * Returns the last throw
     */
     public function GetLastThrow() {
        return $this->lastThrow;
     }
     
    /**
    * Get the number of faces.
    *
    */
    public function GetFaces() {
        return $this->faces;
    }

}

