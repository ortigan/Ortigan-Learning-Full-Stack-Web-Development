## PHP Include eg.7

You can include the content of a PHP file into another PHP file before the server executes it. There are two PHP functions which can be used to included one PHP file into another PHP file.

- `include()`
- `require()`

The include and require statements are identical, except upon failure:

- `require` will produce a fatal error (E_COMPILE_ERROR) and stop the script
- `include` will only produce a warning (E_WARNING) and the script will continue

**Syntax**

```php
include 'filename';

// or

require 'filename';
```

Example 7.1

In this example we will include file `add_function_7.1.php` in file `include_7.1.php`

`filename: add_function_7.1.php`

```php
<?php 

    function add($n1, $n2)
    {
        return $n1+$n2;
    }

?>
```

`filename: include_7.1.php`

```php
<?php 

    include 'add_function.php';

    $num1 = 10;
    $num2 = 20;

    $ans = add($num1, $num2);
    echo 'The addition of '. $num1 . ' and ' . $num2 . ' is = ' . $ans;

?>
```

Output

```html
The addition of 10 and 20 is = 30
```

Example 7.2

In this example we will require file `sub_function_7.2.php` in file `require_7.2.php` 

`filename: sub_function_7.2.php`

```php
<?php 

    function sub($n1, $n2)
    {
        return $n1-$n2;
    }

?>
```

`filename: require_7.2.php`

```php
<?php 

    require 'sub_function.php';

    $num1 = 10;
    $num2 = 20;

    $ans = sub($num2, $num1);
    echo 'The subtraction of '. $num2 . ' and ' . $num1 . ' is = ' . $ans;

?>
```

Output

```html
The subtraction of 20 and 10 is = 10
```