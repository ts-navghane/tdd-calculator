# TDD Calculator

A simple PHP calculator application developed using TDD

## Prerequisites
* [PHP 7.1+](https://www.php.net/downloads)
* [GIT](https://git-scm.com/downloads)
* [Composer](https://getcomposer.org/download/)
* [PHPUnit](https://phpunit.de/getting-started/phpunit-9.html)

## Getting Started

**What is TDD?**

Test-driven development (TDD) is a software development process that relies on the repetition of a very short development cycle: requirements are turned into very specific test cases, then the code is improved so that the tests pass. This is opposed to software development that allows code to be added that is not proven to meet requirements.

Test-driven development cycle:
* Add a test
* Run all tests and see if the new test fails
* Write the code
* Run tests
* Refactor code
* Repeat

**How to set up?**

Clone project 

`$ git clone https://github.com/ts-navghane/tdd-calculator.git`

Run composer install 

`$ composer install`

Run PHPUnit test cases 

`$ vendor/bin/phpunit tests/`
