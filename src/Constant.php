<?php

namespace CompositeDesignPattern;
use CompositeDesignPattern\Interfaces\ExpressionInterface;
class Constant implements ExpressionInterface
{
    public $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }

    public function calculate(): float
    {
        return $this->value;
    }

}