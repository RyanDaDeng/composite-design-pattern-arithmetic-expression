<?php

namespace CompositeDesignPattern;
class Negate extends AbstractUnaryExpression
{

    public function calculate(): float
    {
        return -$this->right->calculate();
    }
}