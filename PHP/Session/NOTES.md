## PHP Session eg.9

A session is a way to store information (in variables) to be used across multiple pages. Unlike a cookie, the information is not stored on the users computer.

When a session is started following things happen −

- PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as 3c7foj34c3jj973hjkop2fc937e3443.
- A cookie called **PHPSESSID** is automatically sent to the user's computer to store unique session identification string.
- A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.

When a PHP script wants to retrieve the value from a session variable, PHP automatically gets the unique session identifier string from the PHPSESSID cookie and then looks in its temporary directory for the file bearing that name and a validation can be done by comparing both values.

### Starting a PHP Session

A PHP session is easily started by making a call to the `session_start()` function. This function first checks if a session is already started and if none is started then it starts one. It is recommended to put the call to `session_start()` at the beginning of the page.

Session variables are stored in associative array called `$_SESSION[]`. These variables can be accessed during lifetime of a session.

Example 9.1

```php
<?php 

	session_start();
	
	$_SESSION['name'] = "John";
	echo 'Session is set';

?>
```

Output

```html
Session is set
```

### Accessing Session value
Now session is set so data in `$_SESSION` is accessible across the various pages of an entire website

Example 9.2

```php
<?php

	session_start();

	if( isset( $_SESSION['name'] ) ){
		echo "My name is " . $_SESSION['name'];
	}

?>
```

Output

If session is set you will get the following output

```html
My name is John
```

### Destroying a PHP Session

A PHP session can be destroyed by `session_destroy()` function. This function does not need any argument and a single call can destroy all the session variables. 

Example 9.3

```php
<?php

	session_start();

	session_destroy();

	echo "All session values are destroyed";

?>
```

Output

```html
All session values are destroyed
```

If you want to destroy a single session variable then you can use `unset()` function to unset a session variable.

Example 9.4

```php
<?php
	session_start();

	unset($_SESSION['name']);
	echo 'Session key "name" is destroyed';
?>
```

Output

```html
Session key "name" is destroyed
```