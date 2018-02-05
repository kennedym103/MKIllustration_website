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

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

<div class="section catalog page">

  <div class="container">
    <h1><?php
    if($section != null){
      echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
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
