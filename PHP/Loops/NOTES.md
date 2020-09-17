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