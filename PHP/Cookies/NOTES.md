## PHP Cookies eg.8

A cookie is a small text file that lets you store a small amount of data (nearly 4KB) on the user's computer.

There are three steps involved in identifying returning users −

- Server script sends a set of cookies to the browser. For example name, age, or identification number etc.
- Browser stores this information on local machine for future use.
- When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.

### Setting Cookies with PHP

The `setcookie()` function is used to set a cookie in PHP.

**Syntax**

```php
setcookie(name, value, expire, path, domain, security);
```

[Parameters](https://www.notion.so/d1f74007885148b1afecedba053a6c13)

> Make sure you call the `setcookie()` function before any output generated by your script otherwise cookie will not set.

Example 8.1

```php
<?php
    $name = "John";
    setcookie("user_name", $name, strtotime('+10 minute'));
?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"; ?>
   </body>
   
</html>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Set Cookie</h2>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

Output

```html
Set Cookie
Key: 'user_name'
Value: John
```

> If the expiration time of the cookie is set to 0, or omitted, the cookie will expire at the end of the session i.e. when the browser closes.

### Accessing Cookies Values

The PHP `$_COOKIE` superglobal variable is used to retrieve a cookie value. It typically an associative array that contains a list of all the cookies values sent by the browser in the current request, keyed by cookie name. The individual cookie value can be accessed using standard array notation, for example to display the username cookie set in the previous example, you could use the following code.

Example 8.2

```php
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Accessing Cookie</h2>
            <p>Key: 'user_name'</p>
            <p>Value: '<?php if( isset( $_COOKIE['user_name'] ) ){ echo $_COOKIE['user_name']; } ?>'</p>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

Output

```html
Accessing Cookie
Key: 'user_name'
Value: John
```