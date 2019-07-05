<?php

namespace CompositeDesignPattern;
use CompositeDesignPattern\Interfaces\ExpressionInterface;
abstract class AbstractBinaryExpression extends AbstractUnaryExpression
{
    /**
     * @var ExpressionInterface $left
     */
    protected $left;

    public function __construct(ExpressionInterface $left, ExpressionInterface $right)
    {
        parent::__construct($right);
        $this->left = $left;
    }
}