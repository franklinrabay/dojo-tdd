# dojo-tdd
Dojo Red&amp;White about TDD

## What you will need?
1. Apache mod_rewrite installed and enabled
2. [Composer](https://getcomposer.org/)

## How to install
1. Clone the repository to your machine
2. Check .htaccess File, the **RewriteBase /tdd** must be moved to your base path name (Example: dojo-tdd)
3. Check your Routes file **/src/Core/routes.php** the $router->setBasePath('/tdd'); must be moved to your base path