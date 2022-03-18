<?php
  require_once('config.php');
  require_once('core/controller.Class.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Google-login</title>
   <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
.container{
margin-top: 100px;

}
body {
width: 800px;
font-family: "Dosis", sans-serif;
padding: 0;
margin: 0 auto;
}

form {
border: 3px solid #7ddaff;
background: linear-gradient(to top,
rgb(17, 117, 231, 0.5),
rgba(136, 0, 133, 0.6));
margin: 0px auto;
padding: 40px;
border-radius: 4px;
}
</style>
    <body>

      <div class="container" style="">
     <?php if(isset($_COOKIE['id']) && isset($_COOKIE['sess'])){
            $Controller = new Controller;
            if($Controller -> checkUserStatus($_COOKIE['id'], $_COOKIE['sess'])){
                echo $Controller -> printData(intval($_COOKIE['id']));
                echo '<a href="logout.php">Log Out</a>';
            }
            
        }else{ ?>
      <img src="img/logo.png" alt="logo" style="display: table; margin: 0 auto; max-width: 150px"/>
      <form action='' method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" style="width: 80%; margin-left: 50px;">
          <small id="emailHelp" class="form-text text-muted"  style="width: 80%; margin-left: 50px;">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" style="width: 80%;margin-left: 50px">
        </div>
        <br>
        <button type="submit" class="btn btn-success" style="width: 80%; margin-left: 50px;">LogIn</button>
        <button onclick="window.location = '<?php echo $login_url; ?>'" type="button" class="btn btn-warning"  style="width: 80%; margin-left: 50px; margin-top: 20px;">Login With Google</button>
        </form>
        <?php } ?>
      </div>
    </body>
</html>