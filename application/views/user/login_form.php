<head>
  <title>Hallintajärjestelmä</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
  <style>

body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
  </style>


</head>
 <body>
  
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
  <div class="container">

   <form class="form-signin">
   <h2 class="form-signin-heading">Kirjaudu sisään</h2>
     <label for="username">Käyttäjänimi:</label>
     <input class="form-control" type="text" size="20" id="username" name="username" required autofocus/>
     <br/>
     <label for="password">Salasana:</label>
     <input class="form-control" type="password" size="20" id="password" name="password" required autofocus/>
     <br>
     <button type="submit" class="btn btn-lg btn-primary btn-block" value="Login">Kirjaudu</button>
   </form>
   </div>
 </body>
</html>