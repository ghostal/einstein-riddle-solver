# Einstein's Riddle Solver

To run the solver using docker:

    docker-compose up

Alternatively, just run it using PHP directly:

    php solver.php

## The Riddle

Allegedly, Albert Einstein posed this riddle, but that's most likely not true. Nevertheless, this is the riddle:

A street has 5 houses which are painted 5 different colors. In each house lives a person of different nationality. The
5 owners each drink a different kind of beverage, smoke a different brand of cigar, and keep a different pet.

Given a series of facts about the relationships between the houses and the preferences of their residents, the goal is
to work out the nationality of the man who owns the fish.

1. The Brit lives in the red house.
2. The Swede keeps dogs as pets.
3. The Dane drinks tea.
4. The green house is on the immediate left of the white house.
5. The green house's owner drinks coffee.
6. The owner who smokes Pall Mall rears birds.
7. The owner of the yellow house smokes Dunhill.
8. The owner living in the center house drinks milk.
9. The Norwegian lives in the first house.
10. The owner who smokes Blends lives next to the one who keeps cats.
11. The owner who keeps the horse lives next to the one who smokes Dunhill.
12. The owner who smokes Bluemasters drinks beer.
13. The German smokes Prince.
14. The Norwegian lives next to the blue house.
15. The owner who smokes Blends lives next to the one who drinks water.

The most common way to solve the riddle is by a series of logical deductions, much like a sudoku puzzle.

However, it should also be possible to find a solution by brute-force.

## Motivation

The project had two main goals. Firstly, to implement a recursive backtracking solution as demonstrated in Richard
Buckley's [excellent lecture][1] on writing a sudoku solver. Secondly, to experiment with a fluent API for defining
the rules, inspired by the fluent APIs used in Laravel's schema builder. Fluent APIs often read similarly to spoken
English, and I wanted to experiment with this technique.


## Conclusions

While I was successful in solving the riddle using recursive backtracking, I found that leaning too hard into creating
fluent APIs that read clearly made things feel more complicated and awkward in the underlying implementation.

Also, I found that it was better to rephrase certain rules to fit a single sentence structure, rather than having to
implement another alternative API (so "the owner living in the center house drinks milk" becomes "the man who drinks
milk lives in the center house").

Example of rule definitions API (from `Solver::checkRules()`):

    $check[] = $the->manWhoDrinksMilk()->livesIn($the->centerHouse());
    $check[] = $the->norwegian()->livesIn($the->firstHouse());
    $check[] = $the->manWhoSmokesBlends()->livesNextTo($the->manWhoKeepsCats());

If a fluent API that maps closely to spoken English is really a requirement, I suspect it may be worthwhile to build
such a thing over the top of a more traditional API. Otherwise, simply sticking with a more traditional API, or
accepting trade-offs between fluency and ease-of-implementation may be a better choice.

[1]: https://www.youtube.com/watch?v=q1I7WKncE64
