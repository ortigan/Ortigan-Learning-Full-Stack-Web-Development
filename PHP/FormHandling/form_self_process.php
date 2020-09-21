<?php 
    if( isset( $_GET['submit'] ) ){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
    
        if( empty($name) ){
            echo "name is required";
    
        }
        else if( empty($email) ){
            echo "email is required ";
        }
        else if( empty($password) ){
            echo "password is required ";
        }
        else{
            
            echo "Hello " . $name . "<br>";
            echo "Your email is ".$email;
        }
    }
    else{


?>
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
                    <form action="form.php" method="get">
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
                        <input class="btn btn-primary" type="submit" value="submit" name="submit">
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
<?php 
    }
?>