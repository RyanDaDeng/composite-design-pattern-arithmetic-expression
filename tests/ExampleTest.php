<?php

namespace CompositeDesignPattern\tests;

use  CompositeDesignPattern\{Divider, Multiplier, Adder, Constant, Subtracter, Negate};
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $expression =
            new Divider(
                new Multiplier(
                    new Negate(new Constant(5.0)),
                    new Divider(new Constant(9.0), new Constant(6.0))
                ),
                new Adder(
                    new Constant(7.0),
                    new Subtracter(new Constant(2.0), new Constant(1.5))
                )
            );
        $this->assertEquals(-1, $expression->calculate(), 0.0);
    }
}
