<?php
include("inc/data.php");
include("inc/functions.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  if(isset($catalog[$id])) {
    $item = $catalog[$id];
  }
}

if (!isset($item)) {
  header("location:catalog.php");
  exit;
}

$pageTitle = $item["title"];
$section = null;

 include("inc/header.php"); ?>

<div class="section page">
  <div class="container">
    <div class="bread-crumbs">
      <a href="catalog.php">Full Catalog</a>
      &gt;
      <a href="catalog.php?cat=<?php echo strtolower($item["category"]); ?>">
        <?php echo $item["category"]; ?></a>
        &gt; <?php echo $item["title"] ?>
    </div>
    <div class="img-fluid">
      <span>
        <img class="img-fluid" src="<?php echo $item["img"]; ?>"  alt="<?php echo $item["title"] ?>" />
      </span>
    </div>
    <div class="media-details">
      <h1><?php echo $item["title"]; ?></h1>
      <div class="detail-description"><?php echo $item["description"]; ?></div>
    </div>
  </div>
</div>

<?php include("inc/footer.php"); ?>
