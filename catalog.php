<?php
include("inc/data.php");
include("inc/functions.php");
include("inc/header.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
  if ($_GET["cat"] == "UI") {
    $pageTitle = "UI / Application Development";
    $section = "UI";
  } else if ($_GET["cat"] == "branding") {
    $pageTitle = "Branding & Print Design";
    $section = "branding";
  } else if ($_GET["cat"] == "illustration") {
    $pageTitle = "Illustration";
    $section = "illustration";
  }
}

  ?>

 <main role="main">

   <?php
   if (isset($_GET["cat"])) {
     if ($_GET["cat"] == "UI") {
      echo '<div class="jumbotron-fluid jumbotron jumbotron-ui">
         <div class="container">
           <h1 class="display-3 text-center">UI</h1>
           <p class="text-center">Increasing my focus on Web/UI developement in the past few years, I am constantly striving to bring rich immersive experiences into the digital realm.</p>
         </div>
       </div>';
     } else if ($_GET["cat"] == "jumbotron-fluid jumbotron jumbotron-branding") {
       echo '<div class="jumbotron">
         <div class="container">
           <h1 class="display-3 text-center">Branding</h1>
           <p class="text-center">From strategy and initial mockups through print production, I have experience designing and managing all aspects of the print process.</p>
         </div>
       </div>';
     } else if ($_GET["cat"] == "illustration") {
       echo '<div class="jumbotron-fluid jumbotron jumbotron-illustration">
         <div class="container">
           <h1 class="display-3 text-center">Illustration</h1>
           <p class="text-center">I have a passion for visualizing ideas and stories into full thematic works of art. Utilizing a mix of traditional and digital media my work has been used to create decals for surfboards, imagery for package design, and pieces for display in private collections.</p>
         </div>
       </div>';
     }
   }

    ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->


<div class="section catalog page">

  <div class="container">
    <h1 class="breadcrumbs"><?php
    if($section != null){
      echo "<a href='catalog.php'>Full Catalog</a> - ";
    }
    echo $pageTitle;
     ?></h1>
    <ul class="row">
      <?php $categories = array_category($catalog, $section);
       foreach($categories as $id){
        echo get_item_html($id, $catalog[$id]);
      }
      ?>
    </ul>
  </div>
</div>
</main>

<?php include("inc/footer.php"); ?>
