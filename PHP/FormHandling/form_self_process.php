<?php 
    $errors = array();
    if( isset( $_GET['submit'] ) ){

        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        // $errors = [];
       
        if ( empty($name) ){
            // $errors['name'] = 'required';
            array_push($errors, 'name');
        }
        if( empty($email) ){
            // $errors['email'] = 'required';
            // echo "email is required";
            array_push($errors, 'email');
        }
        if( empty($password) ){
            // echo "password is required ";
            // $errors['password'] = 'required';
            array_push($errors, 'password');
        }
        // print_r($errors);
        if( count($errors) == 0 ){
            
            echo "Hello " . $name . "<br>";
            echo "Your email is ".$email;
        }
    }
   
    if( !( isset($_GET['submit']) ) || count($errors) > 0 ){

    
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
                            <span style="color:red;"><?php if( in_array('name', $errors) ){ echo 'Name is required'; } ?></span>
                            <input type="text"
                            class="form-control" name="name" value="<?php if( isset( $_GET['name'] ) ){ echo $_GET['name']; } ?>" id="name" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Name</small>
                            
                        </div>
                        <div class="form-group">
                        <span style="color:red;"><?php if( in_array('email', $errors) ){ echo 'Email is required'; } ?></span>
                            <label for="email"></label>
                            <input type="email"
                            class="form-control" name="email" value="<?php if( isset( $_GET['email'] ) ){ echo $_GET['email']; } ?>" id="email" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Email</small>
                        </div>
                        <div class="form-group">
                        <span style="color:red;"><?php if( in_array('password', $errors) ){ echo 'Password is required'; } ?> </span>
                            <label for="password"></label>
                            <input type="password"
                            class="form-control" name="password" value="<?php if( isset( $_GET['password'] ) ){ echo $_GET['password']; } ?>" id="password" aria-describedby="helpId" placeholder="">
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