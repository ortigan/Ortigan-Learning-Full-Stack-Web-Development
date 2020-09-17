# Notes

## Syntax eg.1

A PHP script can be placed anywhere in the document.

A PHP script starts with <?php and ends with ?>:

```php
<?php
// PHP code goes here
?>
```

PHP files are saved with .php extension 

Basic "Hello World" program

Example 1.1

```php
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
```

> PHP statement are end with a semicolon (;)

> All keywords are not case sensitive but variable names are case sensitive

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

## Strings eg.3

Functions to manipulate string 

### strlen() - returns the length of the string

Example 3.1

```php
<?php
	echo strlen("Welcome to Ortigan Learning");
?>
```

Output

```bash
	28
```

### str_word_count() - Count Words in a String

Example 3.2

```php
<?php
    echo str_word_count("Welcome to Ortigan Learning!"); 
?>
```

Output

```bash
4
```

## Loops eg.4

Like any other language, loop in PHP is used to execute a statement or a block of statements, multiple times until and unless a specific condition is met. This helps the user to save both time and effort of writing the same code multiple times.

PHP have for loops:

1. for loop
2. while loop
3. foreach loop
4. do-while loop

### For Loop

This type of loops is used when the user knows in advance, how many times the block needs to execute. That is, the number of iterations is known beforehand. These type of loops are also known as entry-controlled loops. There are three main parameters to the code, namely the initialization, the test condition and the counter.

**Syntax**

```php
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
```

**Parameters**

- *init counter*: Initialize the loop counter value
- *test counter*: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
- *increment counter*: Increases the loop counter value

Example 4.1

```php
<?php 
    for ($i=0; $i < 10; $i++) { 
        echo $i+1 . "<br>";
    }
?>
```

Output

```bash
1
2
3
4
5
6
7
8
9
10
```

### While Loop

The while loop is also an entry control loop like for loops i.e., it first checks the condition at the start of the loop and if its true then it enters the loop and executes the block of statements, and goes on executing it as long as the condition holds true.

**Syntax**

```php
while (condition is true) {
  code to be executed;
}
```

Example 4.2

```php
<?php 
	$a = 0;
	while ($a <= 10) {
	    echo $a . "<br>";
	    $a++;
	}
?>
```

Output

```bash
0
1
2
3
4
5
6
7
8
9
10
```

### Foreach Loop

This loop is used to iterate over arrays. For every counter of loop, an array element is assigned and the next counter is shifted to the next element.

**Syntax**

```php
foreach ($array as $value) {
  code to be executed;
}
```

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

Example 4.3

```php
<?php
	$names = array('Pranav', 'Gaurav', "Parag", 'Jayesh', 'JD');
  foreach ( $names as $name ) {
    echo $name . "<br>";
	}
?>
```

Output

```bash
Pranav
Gaurav
Parag
Jayesh
JD
```

### Do while Loop

The do while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

**Syntax**

```php
do {
  code to be executed;
} while (condition is true);
```

Example 4.4

```php
<?php
    $a = 0;
    do {
    echo $a . "<br>";
    $a++;
    } while ($a <= 10);
?>
```

Output

```bash
0
1
2
3
4
5
6
7
8
9
10
```