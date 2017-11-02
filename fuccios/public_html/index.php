<!DOCTYPE html>
<!-- Main page we worked on this page together-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Main page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_sheet.css">
  </head>

  <body>
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
            <a class="navbar-brand active" href='index.html'>Home</a>
          </div>

          <div id="navbar" class="collapse navbar-collapse">
          
          <!--nav bar insert-->
          
          <?php include '../resources/navigation.php'; ?>
          
          </div>
        </div>
       </nav>
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
          <div class="col-sm-12 ">
            <h1>Welcome to Fuccio's Restaurant</h1>
          </div>
        
          <article> 
            <div class="col-sm-12">
              <p class="description">Bring the whole family to Fuccio's Restaurant and enjoy an authentic Italian meal. From spaghetti to  risotto, Fuccio's has got it all!</p>
              <p class="description">We make every order with freshly cut ingredients so you get the best tasting meal possible!</p>
            </div>
          </article>

          <div class="img_background_color"> 
            <img class="picture" src="Pics/Lasanga.jpg" alt="Fuccio's" width="550" height="374" style="margin-left:210px;"/>
            <img class="picture" src="Pics/Manacotti.jpg" alt="Fuccio's" width="550" height="374" style="margin-right:210px;"/> <br/>
            <img class="picture" src="Pics/pizza.jpg" alt="Fuccio's" width="550" height="374" style="margin-left:210px;"/>
            <img class="picture" src="Pics/breadsticks.jpg" alt="Fuccio's" width="550" height="374" style="margin-right:210px;"/>
          </div>
              
          <div>
            <h2>Come enjoy our authentic Italian cuisine!</h2>
            <p>Our main location is in Des Moines at 801 Grand</p>
            <p>Open 10am-11pm</p>
            <h2>We also do to-go orders. Call 319-795-8876 or just stop in!</h2>
          </div>

          <div>
           <h2>We'd love to serve you! Look at our events page and see all the fun activities we have to offer!</h2>
            <a style="margin: 5px;" href='events.php'  class="btn btn-primary">Events</a>
            <h2>Check out our extensive Menu!</h2>
            <a style="margin: 5px;" href="menu.php"  class="btn btn-primary">Menu</a> 
          </div>
        </section> 
        
    </div>

      <!--Footer test-->
      <?php include '../resources/footer.php'; ?>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>

