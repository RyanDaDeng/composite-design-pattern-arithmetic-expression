<?php

namespace CompositeDesignPattern;
class Adder extends AbstractBinaryExpression
{

    public function calculate(): float
    {
        return $this->left->calculate() + $this->right->calculate();
    }
}