<?php 

    $errors = array();
    if( isset( $_GET['submit'] ) ){
        
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $gender = $_GET['gender'];
        $languages = array();
        if ( empty($name) ){
            
            array_push($errors, 'name');
        }
        if( empty($email) ){
         
            array_push($errors, 'email');
        }
        if( empty($password) ){
           
            array_push($errors, 'password');
        }
        if( empty($gender) ){
         
            array_push($errors, 'gender');
        }
        if( isset( $_GET['html'] ) ){

            array_push($languages, $_GET['html']);        
        }
        else{
            array_push($errors, 'html');
        }
        if( isset( $_GET['css'] ) ){

            array_push($languages, $_GET['css']);        
        }
        if( isset( $_GET['javascript'] ) ){

            array_push($languages, $_GET['javascript']);        
        }
        if( isset( $_GET['php'] ) ){

            array_push($languages, $_GET['php']);        
        }
        
        if(  isset($_GET['adult'])    ){
            if( $_GET['adult'] != 'yes' ){
                array_push($errors, 'adult');
            }
        }
        else{
            array_push($errors, 'adult');
        }
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
                        <div class="form-group">
                        <span style="color:red;"><?php if( in_array('gender', $errors) ){ echo 'Gender is required'; } ?> </span>
                            <label for="gender"></label>
                            <select class="form-control"  name="gender" id="">
                                <option selected value="">Please Select your gender</option>
                                <option <?php if( isset($_GET['gender']) &&  $_GET['gender'] == 'male'){ echo 'selected'; } ?> value="male">Male</option>
                                <option <?php if( isset($_GET['gender']) &&  $_GET['gender'] == 'female'){ echo 'selected'; } ?>  value="female">Female</option>
                            </select>
                            <small id="" class="form-text text-muted">Gender</small>
                        </div>
                        <div class="form-group">
                            <label for="languages">Languages you know</label>
                            <div class="form-check">
                                <span style="color:red;"><?php if( in_array('html', $errors) ){ echo 'HTML is required'; } ?> </span><br> 
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="html" id="" value="html" <?php if( isset($_GET['html']) ){ echo 'checked'; } ?> >
                                HTML  
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="css" id="" value="css" <?php if( isset($_GET['css']) ){ echo 'checked'; } ?> >
                                CSS  
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="javascript" id="" value="javascript" <?php if( isset($_GET['javascript']) ){ echo 'checked'; } ?> >
                                Javascript  
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="php" id="" value="php" <?php if( isset($_GET['php']) ){ echo 'checked'; } ?> >
                                PHP
                              </label>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="languages">Above 18 year?</label>
                            <span style="color:red;"><?php if( in_array('adult', $errors) ){ echo 'your age should be above 18'; } ?> </span><br> 
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="adult" id="adult" value="yes" <?php if( isset( $_GET['adult']) && $_GET['adult'] == 'yes' ){ echo 'checked'; } ?> >
                                yes
                              </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="adult" id="adult" value="no" <?php if( isset( $_GET['adult'] ) && $_GET['adult'] == 'no' ){ echo 'checked'; } ?> >
                                no
                              </label>
                            </div>
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