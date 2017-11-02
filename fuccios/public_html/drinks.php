<!DOCTYPE html>
<!-- Taylor's page-->

<html lang="en">

<head>
	<title>Drinks</title>
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
 
 <section>
     <h1>Drinks</h1>
     <h2>We have the proper beverage for all of our meals!</h2>
     <p>Choose from our wide selection of wines!</p>
     <img class="picture" alt="Wine" src="Pics/wine.jpg" width="410" height="280"/>
     <h2>Some of our available wine brands:</h2>
     
     <ul>
         <li>Prairie Berry</li>
         <li>Pinot Nior Midsize Car</li>
         <li>Fiat 500 Cabernet</li>
         <li>I can't believe it's not Barbera</li>
         <li>White Gold</li>
         <li>Black Gold</li>
         <li>Goldy Gold</li>
         <li>Turquoise Gold</li>
         <li>Bloody Gold</li>
         <li>Metallic Gold</li>
         <li>EXPLOSIVE Gold</li>
         <li>The Wine Brand...</li>
     </ul>
     
     <p>  We keep a professional wine connoisseur on staff at all times.</p>
</section>

</div>

 <!--Footer test-->
      <?php include '../resources/footer.php'; ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>

</html>