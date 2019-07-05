## Challenge


Use design patterns to transform arithmetic expressions into a well-designed structure to calculate the answers.

For example:

![](https://github.com/RyanDaDeng/composite-design-pattern-arithmetic-expression/blob/master/question.png)

## Usage & Test

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

## Solution

Use Composite design pattern:

![](https://github.com/RyanDaDeng/composite-design-pattern-arithmetic-expression/blob/master/design-pattern.png)


Transform the question into a Composite structure:

![](https://github.com/RyanDaDeng/composite-design-pattern-arithmetic-expression/blob/master/structure.png)

