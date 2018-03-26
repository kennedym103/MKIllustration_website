
<?php
include("inc/data.php");
include("inc/functions.php");
$pageTitle = "Personal Media Library";
$section = null;
 include("inc/header.php"); ?>

 <main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron jumbotron-front">
    <div class="container">
      <h1 class="text-center">Inspiring UI & Engaging Design</h1>
      <p class="text-center">Browse through some of my work below, I am always looking for feedback. Feel free to reach out to me via the contact section of this site.</p>
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
