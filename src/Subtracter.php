<?php

namespace CompositeDesignPattern;

class Subtracter extends AbstractBinaryExpression
{

    public function calculate(): float
    {
        return $this->left->calculate() - $this->right->calculate();
    }
}