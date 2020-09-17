## Variables eg.2

### Declaring a variable

In PHP variable starts with the $ sign, followed by the name of the variable:

```php
<?php 
	$name = "John Doe"; 
	$num1 = 10;
	$num2 = 15.70;
?>
```

A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

- A variable starts with the `$` sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive (`$age` and `$AGE` are two different variables)

> Remember PHP variable name are case sensitive

### Using a variable

The PHP echo statement is often used to output data to the screen.

Example 2.1

```php
<?php 
	$name = "John Doe";
	echo "My name is $name";
?>
```

Output

```bash
My Name is John Doe
```

Eample 2.2

```php
<?php 
	$num1 = 10;
	$num2 = 25;
	$ans = $num1 + $num2; 
	echo "The ans is $ans";
?>
```

```bash
The ans is 35
```