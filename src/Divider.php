<?php

namespace CompositeDesignPattern;

class Divider extends AbstractBinaryExpression
{

    public function calculate(): float
    {
        return $this->left->calculate() / $this->right->calculate();
    }
}