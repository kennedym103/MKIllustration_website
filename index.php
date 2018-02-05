
<?php
include("inc/data.php");
include("inc/functions.php");
$pageTitle = "Personal Media Library";
$section = null;
 include("inc/header.php"); ?>

 <main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>
		<div class="section catalog random">

			<div class="container">

				<h2>May we suggest something?</h2>


					<ul class="row">

						<?php
						$random = array_rand($catalog, 4);
						 foreach($random as $id){
			        echo get_item_html($id, $catalog[$id]);
			      }
			      ?>
				</ul>


			</div>

		</div>

  </main>

	<?php include("inc/footer.php"); ?>
