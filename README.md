Smile Engine
=======

Smile Engine is a Full-stack PWA javascript and works with PHP



### Install & Usage


1 - Get ```https://github.com/toptunes/Smile_Engine-Demo```


```
It will work only in the root folder or if you use XAMPP make changes in the XAMPP setting:

DocumentRoot "c:/xampp/htdocs/Smile_Engine-Demo" 

If you use DirectAdmin or Cpanel you should install it in the /public/ directory

```

2 - Go to ```/CPU/conn.php``` and set database name and password to MySQL (it works with MySQLi - no PDO yet)
```
After you set the database name, Import this structure as an example.

https://github.com/toptunes/Smile_Engine-Demo/blob/master/database_name.sql

```

3 - Almost All php files in ```app/views/html/modules/``` is an examples.

4 - Make a new file ```example.php``` in ```/modules/``` . And copy this code below.

```php
<?php


$html_final = module('div','example','

Here you can write HTML, JSON, or just write hello world

If you want to use JSON you should learn how to make preload modules

');


?>

```

5 - If you use XAMPP, open http://127.0.0.1/example (you can see Module)


6 - Smile Engine can work with object-oriented programming but modules are like objects. try to use it functional 

7 - you can change URL routing by changing the array in : ```app/views/html/switcher/routing.php```

### tutorials

_tutorials is coming soon._

### Designed by Mohammad Norouzi

> It's up to you how to make modules. Complete Client-side render without knowing javascript OR half client-side render.  
> We will make a lot of modules as a PHP file. But on per request will load one or maximum 5 child modules.  
> If you have the experience, you can make preload modules.  
> many "include" files will replace on release version (automatically)  
> This Framework is suited for functional programmers that want to make easy scalable projects  
> You can't Define the function inside modules. either Do procedural programming or make a function on_ CPU/fn.php _and Do functional  
> All existing modules are an example and are not part of the framework  

### Links

https://www.linkedin.com/in/toptunes/

Online Demo : http://app.abyekiha.com/
_Login into the panel with this number: 09354894522_







