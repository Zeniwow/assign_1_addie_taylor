<!DOCTYPE html>
<!-- Addie's page-->

<html lang="en">

<head>
	<title>About</title>
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
   <h1>About/ Contact Us</h1>
   <h2>Questions?</h2>
   <p>Here at Fuccio's Italian Restaurant we want you to feel as comfortable as possible!
        If you have any questions or concerns please feel free to call us at 319-795-8876 or
        look us up on Facebook at Fuccio's Restaurant! You can message us on Facebook with
        any concerns or questions you may have. If you would like to book us for catering
        please call the number listed or stop by anytime and set up a time and place that 
        is most convenient for you.</p>

   <h2>Thank you for coming to see us!</h2> 
   <p>We want to be sure that you enjoy your time here at Fuccio's Restaurant! Our goal is 
      to give you an authentic Italian meal at a reasonable price. We work together as a team to make Fuccio's Restaurant a perfect place to bring anyone of all ages. From         ages 0-100, you're guaranteed to love our food.</p>

   <h2>How to Find Us</h2>
   
   <ul>
       <li>Our main restaurant is in Des Moines at 801 Grand.</li>
       <li> Phone number: 319-795-8876</li>
       <li>E-mail: fucciosrestaurant@yahoo.com</li>
       <li>Fuccio's Restaurant on Facebook</li>
   </ul>

 </section>
 
</div>

<!--Footer test-->
      <?php include '../resources/footer.php'; ?>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>