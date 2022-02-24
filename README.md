Smile Engine
=======

Smile Engine is a Full-stack PWA javascript and works with PHP


### Install & Usage


1 - Get "git clone --bare  https://github.com/toptunes/Smile_Engine-Demo"

2 - go to /CPU/conn.php and set database name and password to MySQL (it works with MySQLi - no PDO yet)

3 - almost All php files in "app/views/html/modules/" is an examples.

4 - make a new php file "example.php" and put this code in it :

```php
<?php


$html_final = module('div','example','

Here you can write $html, $json or just write hello world

if you want to use json you should learn how to make preload modules

');


?>

```

5 - if you use xampp open http://localhost:8080/example  (you can see module)


### tutorial

_Video tutorial is coming soon._

### Designed by Mohammad Norouzi

1. _It's up to you how to make modules. Complete Client-side render without knowing javascript OR half client-side render._
2. _We will make a lot of modules as a PHP file. But on per request will load one or maximum 5 child modules._
3. _If you have the experience, you can make preload modules._
4. _many "include" files will replace on release version (automatically)_
5. _This Framework is suited for small teams that want to make easy scalable projects_
6. _You can't Define the function inside modules. either Do procedural programming or make a function on_ CPU/fn.php _and Do functional_
7. _All existing modules are an example and are not part of the framework_

### Links

https://www.linkedin.com/in/toptunes/

Online Demo : http://app.abyekiha.com/
_Login into the panel with this number: 09354894522_




