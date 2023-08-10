<?php

class Backup {
    public bool $sucess;
    public float $size;

    public function __construct()
    {
        $this->sucess = false;
        $this->size = 0;
    }
}