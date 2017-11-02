<!DOCTYPE html>
<!-- Addie's page-->

<html lang="en">

<head>
	<title>Events</title>
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
     <h1>Events</h1>
     <h2>Celebrate your special occasion with us!</h2>
     <p>Book us to cater your special event.</p>
     <p>From birthdays to weddings, Fuccio's is the perfect choice for any event!</p>
     <h2>Our upcoming events</h2>
     
     <ul> 
         <li>September 20 Kids eat free from 2-7 pm.</li>
         <li>September 25 Live singing from Paolo from 8-10 pm.</li>  
         <li>October 1st Live classical piano playing from 7-10 pm.</li>
         <li>October 20 Customer Appreciation Day (Everything half priced) from 12-5.</li>
     </ul>
</section>

</div>

 <!--Footer test-->
      <?php include '../resources/footer.php'; ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>

</html>