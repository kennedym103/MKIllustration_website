<?php
function get_item_html($id, $item) {
  $output =  "<li class='card float-left mr-4 ml-4 mt-4' style='width: 18rem;'> <a class='card-img-container' href='details.php?id="
  . $id . "'><img class='card-img-top img-fluid' src='"
  . $item["crd_img"] . "' alt='"
  . $item["title"] . "'/>"
  . "<div class='card-body'>"
  . "<h5 class='card-title'>"
  . $item["title"] . "</h5><p class='card-text'>"
  . $item["medium"] . "</p>"
  . "<div class='btn-container'><p class='card-yr'> Project completed in "
  . $item["year"] . "</p><div class='ml-auto btn btn-type crd-btn'>"
  . $item["type"] . "</div></div>"
  . "</div></a></li>";

  return $output;
}

function array_category($catalog, $category) {

  $output = array();
  foreach ($catalog as $id => $item) {
    if ( $category == null OR strtolower($category) == strtolower($item["category"])) {
      $sort = $item["title"];
      $sort = ltrim($sort, "The ");
      $sort = ltrim($sort, "A ");
      $sort = ltrim($sort, "An ");
      $output[$id] = $sort;
    }
  }
  asort($output);
  return array_keys($output);
}
