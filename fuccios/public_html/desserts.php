<!DOCTYPE html>
<!-- Taylor's page-->

<html lang="en">

<head>
	<title>Desserts</title>
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
<!-- end nav bar-->

<div class="below_menu_container">

<section>
   <h1>Desserts</h1>
   <h2>We have a fine selection of gelato flavors for you to choose from. All of our gelato      dishes are made fresh daily by our skilled chef's.</h2>
   <p>All of our gelato dishes also come in Chocolate and Vanilla.</p>
   
   <h2>Gelato</h2>

     <table class="table table-hover">
         <tr>
             <th>Gelato</th>
             <th>Gluten Free Gelato</th>
             <th>Fat Free Gelato</th>
         </tr>
         <tr>
               <td>Cookies and Cream</td>
               <td>Almond</td>
               <td>Cherry</td>
         </tr>
         <tr>
               <td>Napoleon</td>
               <td>Peanut Butter</td>
               <td>Peach</td>
         </tr>
         </table>
   


   <h2>Cookie Cake</h2>
     <table class="table table-hover">
         <tr>
             <th>Cookie Cake</th>
             <th>Gluten Free</th>
             <th>Fat Free</th>
         </tr>
         <tr>
               <td>Chocolate Chip</td>
               <td>Almond</td>
               <td>Peanut Butter</td>
         </tr>
         <tr> 
               <td>Monster</td>
               <td>Peanut Butter</td>
               <td>Coconutty</td>
         </tr>
         <tr>
               <td>Double Choco Chunk</td>
               <td>Chocolate Chip</td>
               <td>Chocolate Mint</td>
         </tr>
         </table>


   <h2>Crostata</h2>
     <table class="table table-hover">
         <tr>
             <th>Crosata</th>
             <th>Gluten Free</th>
             <th>Fat Free</th>
         </tr>
         <tr>
               <td>Raspberry</td>
               <td>Almond</td>
               <td>Cherry</td>
        </tr>
         <tr> 
               <td>Blueberry</td>
               <td>Rhubarb</td>
               <td>Peach</td>
         </tr>
         <tr>
               <td>Boysonberry</td>
               <td>Chocolate Chip</td>
               <td>Apple</td>
         </tr>
         </table>

   <h2>Cheesecake</h2> 
        <table class="table table-hover">
         <tr>
             <th>Cheesecake</th>
             <th>Gluten Free</th>
             <th>Fat Free</th>
         </tr>
         <tr>
               <td>Cookies and Cream</td>
               <td>Almond</td>
               <td>Cherry</td>
        </tr>
         <tr> 
               <td>Tiramisu</td>
               <td>Peanut Butter</td>
               <td>Peach</td>
         </tr>
         <tr>
               <td>Lemon</td>
               <td>Chocolate Chip</td>
               <td>Apple</td>
         </tr>
         </table>








   <img class="picture" alt="Fuccio's" src="Pics/Gelato.jpg" width="410" height="280"/>
 </section>
 
 </div>
 
<!--Footer test-->
      <?php include '../resources/footer.php'; ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>

</html>