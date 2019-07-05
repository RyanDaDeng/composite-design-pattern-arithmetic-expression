## Challenge


Use design patterns to transform arithmetic expressions into a well-designed structure to calculate the answers.

For example: (edited) 



## Solution

Use Composite design pattern



## Test

````php

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
        
````