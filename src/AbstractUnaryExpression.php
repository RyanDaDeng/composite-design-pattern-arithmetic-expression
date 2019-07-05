<?php
namespace CompositeDesignPattern;
use CompositeDesignPattern\Interfaces\ExpressionInterface;
abstract class AbstractUnaryExpression implements ExpressionInterface
{
    public $right;

    public function __construct(ExpressionInterface $expression)
    {
        $this->right = $expression;
    }
}