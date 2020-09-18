## Form Handling eg.5

There are two ways the browser client can send information to the web server.

- The GET Method
- The POST Method

When we develop a website or a web application, we often have to create forms to take input from users, like a **Login** form or a **Registration** form.

Creating a form on the webpage is accomplished using HTML, while PHP serves as a transport for those values from the webpage to the server and then in further processing those values.

PHP provides two **superglobals** `$_GET` and `$_POST` for collecting form-data for processing.

### The GET Method

The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the ? character.

```bash
http://www.test.com/index.htm?name1=value1&name2=value2
```

**When to use Get Method?**

- The variable names and values will be visible in URL if HTML forms submitted by the GET method.
- The GET method is restricted to send up to *2048 characters* only.
- When you submit sensitive information like passwords then should not use this method.
- GET method can't be used, to send binary data like images and Word documents.
- GET method data can be accessed using PHP QUERY_STRING environment variable.
- PHP $_GET associative array is used to access all the sent information by GET method.

Example 5.1

`Filename: form_get_5.1.html`

```html
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
            <h2>Form Handling <br/> <small>using <b>GET</b> Method</small></h2>
            <div class="row">
                <div class="col-md-4">
                    <form action="form_get_process_5.1.php" method="get">
                        <div class="form-group">
                            <label for="Name"></label>
                            <input type="text"
                            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Name</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="email"></label>
                            <input type="text"
                            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Email</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="password"></label>
                            <input type="password"
                            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Password</small>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

`Filename: form_get_process_5.1.php`

```php
<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo "Hello " . $name . "<br>";
    echo "Your email is ".$email;
?>
```

Output

```bash
Hello John Doe
Your email is john.doe@gmail.com
```

### The POST Method

Information sent from a form with the POST method is invisible and has no limits on the amount of information to send.

> However, there is an 8 MB max size for the POST method, by default (can be changed by setting the post_max_size in the php.ini file).

**When to use POST Method?**

- The POST method can be used to send ASCII as well as binary data.
- The data sent by POST method goes through HTTP header, so security depends on HTTP protocol. By using Secure HTTP, you can make sure that your information is secure.
- PHP $_POST associative array is used to access all the sent information by POST method.
- Variables are not visible in the URL so users can't bookmark your page.

Example 5.2

`Filename: form_post_5.2.html`

```html
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
            <h2>Form Handling <br/> <small>using <b>POST</b> Method</small></h2>
            <div class="row">
                <div class="col-md-4">
                    <form action="form_post_process_5.2.php" method="post">
                        <div class="form-group">
                            <label for="Name"></label>
                            <input type="text"
                            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Name</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="email"></label>
                            <input type="text"
                            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Email</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="password"></label>
                            <input type="password"
                            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Password</small>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

`Filename: form_post_process_5.2.php`

```php
<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "Hello " . $name . "<br>";
    echo "Your email is ".$email;
?>
```

Output

```bash
Hello John Doe
Your email is john.doe@gmail.com
```