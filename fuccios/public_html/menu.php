<!DOCTYPE html>
<!-- Addie's page-->

<html lang="en">

<head>
	<title>Menu</title>
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
          <a class="navbar-brand" href='index.php'>Home</a>
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
            <h1 class="display-3 title">Fuccio's Restaurant</h1>
            <img class="logo" alt="Fuccio's" src="Pics/restaurant.png"/>
        </div>
    </div>
 </header>
 
 <section> 
     <h1> Menu</h1>
     <h2>Look at all we have to offer!</h2>
     <p>We have everything you could want! Bread sticks, pasta, salads, and soups!</p>
     <img class="picture" alt="Fuccio's" src="Pics/breadsticks.jpg" width="410" height="280"/>
     <img class="picture" alt="Fuccio's" src="Pics/salad.jpg" width="410" height="280"/>
     <img class="picture" alt="Fuccio's" src="Pics/Soup.jpg" width="410" height="280"/>

     <h1><em>Featured Items</em></h1>
     <table class="table table-hover">
         <tr>
             <th>Featured Appetizers</th>
             <th>Featured Main Courses</th>
             <th>Featured Desserts</th>
         </tr>
         <tr>
             <td>Bread sticks and Soup</td>
             <td>Lasagna Fritta</td>
             <td>Cookie Cake</td>
         </tr>
         <tr>
             <td colspan='1'>Spinach-Artichoke Dip</td>
             <td>Chicken Flat bread</td>
             <td>Berry Crostata</td>
         </tr>
         <tr> 
             <td>Chickpea Bruschetta</td>
             <td>Chicken Scallopini</td>
             <td>Cheesecake</td>
         </tr>
         <tr>
             <td>Grilled Seafood Salad</td>
             <td>Shrimp Scampi Fritta</td>
             <td>Chocolate Tiramisu</td>
         </tr>
         </table>
        
     <img class="picture" alt="Fuccio's" src="Pics/dip.jpg" width="410" height="280"/>
     <img class="picture" alt="Fuccio's" src="Pics/Lasanga.jpg" width="410" height="280"/>
     <img class="picture" alt="Fuccio's" src="Pics/Manacotti.jpg" width="410" height="280"/>

        <h2>Lighter Options</h2>
        <h3><em>All under 600 Calories!</em></h3>
        <p>Grilled Salmon-460 Calories</p>
        <p>Chicken Piccata-500 Calories</p>
        <p>Tilapia Piccata-420 Calories</p>
        <p>Linguine Di Mare-570 Calories</p>
        <p>Chicken Margherita-590 Calories</p>

    
    <br>

         <h2>Main Course</h2>
         <h3><em>Make your own meal. Pick a meat,<br>a sauce, and a type of noodle to<br>make your own Italian creation!</em></h3>
         <p>Chicken, Beef, or Steak</p>
         <p>Angel Hair, Shells, Bucatini, Farfalle, or Pappardelle</p>
         <p>Alfredo, Checca, Agliata, Bolognese, Agrodolce</p>

        
    <br>
  
     <h2>Kid's Menu</h2>
        <h3> <em>Perfect meals for your tots</em></h3>
        <p>Mac and Cheese </p>
        <p>Buttered Noodles</p>
        <p>Chicken Nuggets</p>
        <p>Grilled Cheese</p>
        <p>Spaghetti and Meatballs</p>

    <img class="picture" alt="Fuccio's" src="Pics/fediccini.jpg" width="410" height="280"/>
    <img class="picture" alt="Fuccio's" src="Pics/pizza.jpg" width="410" height="280"/>
    <img class="picture" alt="Fuccio's" src="Pics/Spaghetti.jpg" width="410" height="280"/>

 </section>
</div>

 <!--Footer test-->
      <?php include '../resources/footer.php'; ?>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>