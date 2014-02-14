<?php include('includes/top.php'); ?>
<a name="news" data-magellan-destination="news"></a>
<?php include('includes/header.php'); ?>
<?php 

if(isset($_GET['image']) && ($image = $_GET['image'])){
	$image = 'images/'.$image;
}else{
	$randomImage = rand(1,6);
	$image = 'images/news-example'.$randomImage.'.jpg';
}

?>

<div class="main single-page" role="main">
	<article class="row">
		
		<div class="large-11 columns">


			
			<div class="row">
				<div class="article-header" style="background-image: url('<?php echo $image; ?>');">
					
				</div>
			</div>
			<div class="effect" style="background-image: url('<?php echo $image; ?>');"></div>
			<div class="row article-container">
				
				
				<!-- If the article has an image, add the "has-image" class below:-->
				<!-- (alternatively, if you remove the has-image class, you get a more traditional image above text) -->
				<!--<div class="large-8 article-text has-image columns"> -->
				<div class="large-8 article-text has-image columns">
					<ul class="breadcrumbs">
						<li><a href="index.php" class="home">Home</a></li>
						<li><a href="index.php#news" class="home">News</a></li>
						<li class="current"><a href="#">Going Sailing This Weekend? Let Us Know!</a></li>
					</ul>

					<h1>Going Sailing This Weekend? Let Us Know!</h1>
					<span>Posted on Feb 21</span>

					
					<p>Probably the river.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quaesita enim virtus est, non quae relinqueret naturam, sed quae tueretur. Quod mihi quidem visus est, cum sciret, velle tamen confitentem audire Torquatum. Tum ille timide vel potius verecunde: Facio, inquit. Haec et tu ita posuisti, et verba vestra sunt. Itaque hic ipse iam pridem est reiectus; Duo Reges: constructio interrete. Ergo id est convenienter naturae vivere, a natura discedere. Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. Etsi ea quidem, quae adhuc dixisti, quamvis ad aetatem recte isto modo dicerentur. </p>
					<p>Quae cum magnifice primo dici viderentur, considerata minus probabantur. Ego vero isti, inquam, permitto. Maximas vero virtutes iacere omnis necesse est voluptate dominante. Addidisti ad extremum etiam indoctum fuisse. Memini vero, inquam; Respondent extrema primis, media utrisque, omnia omnibus. Ergo, inquit, tibi Q. Traditur, inquit, ab Epicuro ratio neglegendi doloris. Summus dolor plures dies manere non potest? Praeclare hoc quidem. Habent enim et bene longam et satis litigiosam disputationem. </p>
					<ul>
						<li>An dolor longissimus quisque miserrimus, voluptatem non optabiliorem diuturnitas facit?</li>
						<li>Summus dolor plures dies manere non potest?</li>
					</ul>
					<p><a href="index.php#news">Return to news</a></p>
				</div>
				<div class="large-4 columns sidebar">

					<section class="row">

						<div class="large-12 columns">
							<h2>More News</h2>  
							<ul id="news-list" class="block-list small-block-grid-1 large-block-grid-2">
								<li>
									<article>
										
										<h3><a href="news.php">Are you sailing this weekend? Let us Know!</a></h3><span> Feb 21</span> 
										
									</article>
								</li>
								<li>
									<article> 
										<h3><a href="news.php">Needle Safety "Tip"s</a></h3><span> Feb 21</span>                
									</article>
								</li>
								<li>
									<article>
										<h3><a href="news.php">We are recruiting! Come sail with us!</a></h3><span> Feb 21</span>
									</article>
								</li>
								<li>
									<article>
										<h3><a href="news.php">Best Music to listen to while knitting (and sailing)</a></h3><span> Feb 21</span>
									</article>
								</li>              
							</ul>
							<p><a href="index.php#news">News Archive</a></p>
						</div>
					</section>
					<hr />
					<section class="row">

						<div class="large-12 columns">
							<h2>Events</h2>  
							 <ul class="small-block-grid-1 large-block-grid-2 block-list">
						      <li>
						        <a class="cover-image" href="event-page.php" style="background-image: url('images/colortest10.jpg')"></a>
						        <article> 
						            <h2><a href="event-page.php">Fair Day!!</a></h2><span>Feb 21 @ 9:30am <br /> Iowa Memorial Union</span>
						        </article>
						      </li>
						      <li>
						        <a class="cover-image" href="event-page.php" style="background-image: url('images/colortest9.jpg')"></a>
						        <article>
						        <h2><a href="event-page.php">River Rafting</a></h2><span>Feb 21 @ 12:00pm <br /> Iowa River</span>
						        </article>
						      </li>
						      <li>
						        <a class="cover-image" href="event-page.php" style="background-image: url('images/colortest8.jpg')"></a>
						        <article> 
						          <h2><a href="event-page.php">Lake Siesta</a></h2><span>March 3 @ 12:00pm <br /> Lake Macbride</span>   
						        </article>
						      </li>               
						    </ul>
							<p><a href="index.php#news">Event Archive</a></p>
						</div>
					</section>
				</div>
			</div>


		</div>

	</article>
</div>

<?php include('includes/bottom.php'); ?>
