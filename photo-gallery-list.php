<?php include('includes/top.php'); ?>
<?php include('includes/header.php'); ?>

<div class="main single-page" role="main">
	<article class="row">
		
		<div class="large-12 columns">

			<div class="row article-container">
			
				<div class="large-12 article-text columns">
					<ul class="breadcrumbs">
						<li><a href="index.php" class="home">Home</a></li>
				  		<li class="current"><a>Photos</a></li>
					</ul>

					<h1>Photo Gallery Archive</h1>

			
				
			<div id="galleries-list">
            <ul class="small-block-grid-2 large-block-grid-4 block-list">
                            <li>
                <a class="cover-image fi-thumbnails th" href="gallery.php" style="background-image: url('images/colortest2.jpg')"><h3>Photo Gallery Title</h3><img src="images/colortest2.jpg" alt="slide 1" /></a>
              </li>
              <li>
                <a class="cover-image fi-thumbnails th" href="gallery.php" style="background-image: url('images/colortest3.jpg')"><h3>Photo Gallery Title</h3><img src="images/colortest3.jpg" alt="slide 1" /></a>
              </li>
              <li>
                <a class="cover-image fi-thumbnails th" href="gallery.php" style="background-image: url('images/colortest4.png')"><h3>Photo Gallery Title</h3><img src="images/colortest4.png" alt="slide 1" /></a>
              </li> 
            </ul>
        </div><!-- end galleries-list -->                 
                 </div><!-- end large-12 article-text -->
			</div><!-- end row article-container -->
			<hr />
			<div class="pagination-centered">
				<ul class="pagination">
				  <li class="arrow unavailable"><a href="">&laquo;</a></li>
				  <li class="current"><a href="">1</a></li>
				  <li><a href="">2</a></li>
				  <li><a href="">3</a></li>
				  <li><a href="">4</a></li>
				  <li class="unavailable"><a href="">&hellip;</a></li>
				  <li><a href="">12</a></li>
				  <li><a href="">13</a></li>
				  <li class="arrow"><a href="">&raquo;</a></li>
				</ul>
			</div><!-- end pagination-centered -->
		</div><!-- end large-11 columns -->

	</article>
</div>

<?php include('includes/bottom.php'); ?>
