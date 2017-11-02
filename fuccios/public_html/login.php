<!DOCTYPE html>
<!-- Login page-->

<html lang="en">
<!-- Addies page -->
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_sheet.css">
</head>

<body>
    
  <!-- start nav bar-->

     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>

            <!-- Three line "hamburger" icon for the collapsed navigation -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Title on nav bar -->
          <a class="navbar-brand" href='index.html'>Home</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">

         <!--nav bar insert-->
          
          <?php include '../resources/navigation.php'; ?>
          
        </div>
      </div>
     </nav>
 <!-- end nav bar-->
       
<div class="below_menu_container">    
     
    <header>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <div class="below_menu_container">
            <h1 class="display-3 title">Fuccio's Restaurant</h1>
            <img class="logo" alt="Fuccio's" src="Pics/restaurant.png"/>
          </div>
        </div>
      </div>
     </header>

     <div class="alert alert-danger">
          <strong>Warning!</strong> Never give out your password to strangers!
     </div>

 <div class="container">
      <form class="form-horizontal">
        <div class="form-group">
          <label style="font-weight: bold; color: black;" class="control-label col-sm-2" for="user_name">Username:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="user_name" placeholder="Enter username">
          </div>
        </div>
        <div class="form-group">
          <label  style="font-weight: bold; color: black;" class="control-label col-sm-2" for="user_password">Password:</label>
          <div class="col-sm-10"> 
            <input  type="Password" class="form-control" id="user_password" placeholder="Enter password">
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label style="font-weight: bold; color: black;"><input  type="checkbox"> Remember me</label>
            </div>
          </div>
        </div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
  </div>

</div>
 
 <!--Footer test-->
      <?php include '../resources/footer.php'; ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>

</html>
