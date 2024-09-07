<?php
declare(strict_types=1);

class Car {

    private string $type;
    private string $model;
    private float $maxVelocity;

    public function __construct(string $type, string $model, float $maxVelocity) {
        $this -> type = $type;
        $this -> model = $model;
        $this -> maxVelocity = $maxVelocity;
    }

    public function getType() {
        return $this -> type;
    }

    public function getModel() {
        return $this -> model;
    }

    public function getMaxVelocity() {
        return $this -> maxVelocity;
    }
}