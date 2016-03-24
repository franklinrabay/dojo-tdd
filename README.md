# dojo-tdd
Dojo Red&amp;White about TDD

## What you will need?
1. Apache mod_rewrite installed and enabled
2. [Composer](https://getcomposer.org/)
3. [PHPUnit](https://phpunit.de/) to run tests

## How to install
1. Clone the repository to your machine
2. Check .htaccess File, the **RewriteBase /tdd** must be moved to your base path name (Example: dojo-tdd)
3. Check your Routes file **/src/Core/routes.php** the $router->setBasePath('/tdd'); must be moved to your base path (Example: dojo-tdd)

## How to run
1. Execute `composer install` to install dependencies
2. Access http://localhost/dojo-tdd (Or your base path if you changed it)
3. The tests are on /tests. To run, go to terminal and run `phpunit [Filename.php]`

If you have some problem to install, please mail to soufranklinrabay@gmail.com or create an issue and i will be pleasure to help you ;)