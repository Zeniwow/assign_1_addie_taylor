<!DOCTYPE html>
<!-- Taylor's page-->

<html lang="en">

<head>
	<title>Locations</title>
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
     
<div class="below_menu_container">

<section>
     <h1>Locations</h1>
     <h2>Come see us at one of our great locations! Access to our Atlantis location may
     change due to recent geological changes.</h2>
             
     <ul>
         <li>On the South side of Atlantis at 1901 Castle Corner, Atlantis City, Atlantis,
             00001</li>
         <li>Next to a big building at 801 Grand, Des Moines, Iowa, 50263</li>
         <li>Next to crater 6748bhd at 123 Moon Drive, Moon City, The Moon, STARS. (Space suit
             recommended)</li>
     </ul>
     
     <h2>Hours</h2>
     <p>We are open from 10am-11pm Mon-Fri at all locations.</p>
 </section>

</div>

 <!--Footer test-->
      <?php include '../resources/footer.php'; ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>