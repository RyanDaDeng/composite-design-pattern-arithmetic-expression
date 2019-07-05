<?php

namespace CompositeDesignPattern;

class Multiplier extends AbstractBinaryExpression
{

    public function calculate(): float
    {
        return $this->left->calculate() * $this->right->calculate();
    }
}