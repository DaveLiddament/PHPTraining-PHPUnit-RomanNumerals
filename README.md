# Roman Numerals kata

The purpose of this project is to introduce developers to using [Test Driven Development](https://en.wikipedia.org/wiki/Test-driven_development) to write code that converts an integer into its Roman Numeral equivalent.
Each commit represents a step in the process. The commit message explains what happened in that commit and gives a hint for the next step. 

It is suggested that readers checkout the tag `STEP_1` and work through the exercise. 


## Roman Numerals

There are many resources online for showing mappings between roman numerals and integer values. Examples include:
- [Know the Romans](http://www.knowtheromans.co.uk/Categories/SubCatagories/RomanNumerals/RomanNumerals1-1000/)
- [Wikipedia](https://en.wikipedia.org/wiki/Roman_numerals)

## Setup

Here are the steps you need to go through to get the tests running. If you are having trouble then refer to the project [Sample PHPUnit Setup](https://github.com/DaveLiddament/PHPTraining-PHPUnit-SamplePHPUnitSetup)

### Requirements

Install the following:

- PHP 5.3 or higher
- [Composer](https://getcomposer.org/) 

### Running composer

In the root directory of the project run composer. This will pull down all the dependencies:

```
composer install
```

### Running tests

You should now be able to run the unit tests. From the root directory of this project run:

```
./vendor/bin/phpunit
```

You should see an output like this:

```
PHPUnit 4.8.0 by Sebastian Bergmann and contributors.



Time: 56 ms, Memory: 2.75MB

OK (1 test, 1 assertion)
```

The important bit is `OK (1 test, 1 assertion)` this means the tests have run successfully. 



## Next step

Go to the first commit read through the commit message and have a go at the exercise. 

