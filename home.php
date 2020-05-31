
<?php
   include './includes/common.php'
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Technical Wiki</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">



</head>



<body class="body-wrapper">
<?php

            $user_id = $_SESSION['id'];
			$email = $_SESSION['email'];
			
        ?>
  
<section>
   
	<div class="container">
	<div class="jumbotron">
                    <?php
                        echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
                </div> 
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.php">
						<img src="images/download.png" alt="logo" style="height:105px">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
                  <?php if(isset($_SESSION['email'])) { ?>  
                  <li class="nav-item">
								<a class="nav-link text-white add-button" href="./editor/add_your_post.php"><i class="fa fa-plus-circle"></i> Add your Content</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="logout.php"><i class="fa fa-plus-circle"></i> Logout</a>
                     </li>
                     <?php } else { ?>
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Know More <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
							<div class="dropdown-menu">
									<a class="dropdown-item" href="about-us.php">About Us</a>
									<a class="dropdown-item" href="contact-us.php">Contact Us</a>
									<!--<a class="dropdown-item" href="user-profile.html">User Profile</a>-->
								<!--<a class="dropdown-item" href="admin.php">Blog</a>-->

								</div>
							</li>
							
								<!-- Dropdown list -->
								
							
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<!--<li class="nav-item">
								<a class="nav-link login-button" href="./loginsystem/indexreg.php">Userregister</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link login-button" href="./loginsystem/indexreg.php">SignUp</a>
							</li>
							<li class="nav-item">
								<a class="nav-link login-button" href="./loginsystem/indexlog.php">Login</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section> 

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">



			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Technical Wiki! </h1>
					<p>Join the millions who share and earn info from each other <br> everyday in local communities around the world</p>
					<div class="short-popular-category-list text-center">
						
					</div>
					
				</div>
				<!-- Advance Search >
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form>
											<div class="form-row">
												<div class="form-group col-md-4">
													<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" style="margin-left:150px"  placeholder="What are you looking for">
												</div>
												<div class="form-group col-md-3" style="margin-left:150px">
													<select class="w-100 form-control mt-lg-1 mt-md-2">
														<option>Category</option>
														<option value="1">Machine </option>
														<option value="2">biology </option>
														<option value="4"> mathmatics</option>
														<option value="5">Geometry</option>
													</select>
												</div>
												
												<div class="form-group col-md-2 align-self-center">
													<button type="submit" class="btn btn-primary" >Search Now</button>
												</div>
											</div>
										</form>
									</div>
								</div>
					</div>
				</div-->
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Algorithms</h2>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#">Naive String Algorithm</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Details</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>26th December</a>
		    	</li>
		    </ul>
		    <p class="card-text">The Naive String Matching algorithm slides the pattern one by one.    After each slide, it one by one checks characters at the current shift and if all characters match then prints the match.
                 Like the Naive Algorithm, Rabin-Karp algorithm also slides the pattern one by one. But unlike the Naive algorithm, Rabin Karp algorithm matches the hash value of the pattern with the hash value of current substring of text, and if the hash values match then only it starts matching individual characters. So Rabin Karp algorithm needs to calculate hash values for following strings.

                1) Pattern itself.
                2) All the substrings of text of length m.!</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#">Kmeans Algorithm</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href=".html"><i class="fa fa-folder-open-o"></i>Details</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>12th December</a>
		    	</li>
		    </ul>
		    <p class="card-text"> K-means algorithm in data mining starts with a first group of randomly selected centroids, which are used as the beginning points for every cluster, and then performs iterative (repetitive) calculations to optimize the positions of the centroids

            It halts creating and optimizing clusters when either:

            The centroids have stabilized — there is no change in their values because the clustering has been successful.
            The defined number of iterations has been achieved.</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#">longest common subsequence Algo</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href=".html"><i class="fa fa-folder-open-o"></i>Details</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>26th December</a>
		    	</li>
		    </ul>
		    <p class="card-text">If a set of sequences are given, the longest common subsequence problem is to find a common subsequence of all the sequences that is of maximal length.

              The longest common subsequence problem is a classic computer science problem, the basis of data comparison programs such as the diff-utility, and has applications in bioinformatics. It is also widely used by revision control systems, such as SVN and Git, for reconciling multiple changes made to a revision-controlled collection of files.</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="#">Logistic Regression Algorithm</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="#.html"><i class="fa fa-folder-open-o"></i>Details</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>26th jan</a>
		    	</li>
		    </ul>
		    <p class="card-text">A logistic regression algorithm is an algorithm which measures the ways in which a set of data conforms to two particular variables.
		    The algorithm dictates the variables, the relationship, and the ways in which the variables interact. 
		    The most common form of a logistic regression algorithm is a binomial algorithm. This form of the algorithm has two particular outputs which can result from the function. The algorithm places the data set into one of these areas and then maps changes in the data set over time. This map represents a curve that displays the relationships inherent in the data set. 
		    There are also more complicated forms of logistic regression that display multiple variables.</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>
					<p>Algorithm!</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<a href="./tables/sorting.php"><h4>Searching and Sorting Algorithm</h4></a>
							</div>
							<ul class="category-list" >
								<li>Linear Search<span></span></li>
								<li>Binary Search<span></span></li>
								<li>Selection Sort<span></span></li>
								<li>Bubble Sort <span></span></li>
								<li>Insertion Sort <span></span></li>
								<li>Merge Sort <span></span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								
								<a href=""><h4>Geometric Algorithms</h4></a>
							</div>
							<ul class="category-list" >
								<li>Convex Hull | Set 1 (Jarvis’s Algorithm or Wrapping)<span></span></a></li>
								<li>Convex Hull | Set 2 (Graham Scan)<span></span></a></li>
								<li>How to check if given four points form a square<span></span></a></li>
								<li><span></span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								
								<a href="./tables/EA.php"><h4>EA Algorithms</h4></a>
							</div>
							<ul class="category-list" >
								<li>RRA Algorithm<span></span></li>
								<li>JAYA Algorithms <span></span></li>
								<li>Genetic Algorithm  <span></span></li>
								<li>Bee Inspired Algorithms<span></span></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								
								<a href=""><h4>Physics-based CI Algorithms</h4></a>
							</div>
							<ul class="category-list" >
								<li>Artificial Physics Optimization<span></span></li>
								<li>Big Bang-Big Crunch<span></span></li>
								<li>Cloud Model-based Algorithm<span></span></li>
								<li>Galaxy-based Search Algorithm<span></span></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								
								<a href=""><h4>Chemistry-based CI Algorithms</h4></a>
							</div>
							<ul class="category-list" >
								<li>Artificial Chemical Process<span></span></li>
								<li> Artificial Chemical Reaction Optimization Algorithm<span></span></li>
								<li>Chemical Reaction Algorithm<span></span></li>
								<li>Chemical-Reaction Optimization Algorithm<span></span></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								
								<a href=""><h4>Mathematics-based CI Algorithms</h4></a>
							</div>
							<ul class="category-list" >
								<li>Base Optimization Algorithm <span></span></li>
								<li>Emerging Mathematics-based CI Algorithms.<span></span></li>
								<li><span></span></li>
								<li><span></span></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					 <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								
								<a href=".html"><h4>Machine Learning Algorithm</h4></a>
							</div>
							<ul class="category-list" >
								<li>Logistics Algorithm<span></span></li>
								<li>Naive Bayes Algorithm<span></span></li>
								<li>Linear Regression Algorithm<span></span></li>
								<li>Neural Networks Algorithm<span></span></li>
								<li>K means Algorihtm<span></span></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							
							<div class="header">
								 
								<a href=".html"><h4>Graph Algorithms</h4></a>
							</div>
							<ul class="category-list" >
								<li>Floyd–Warshall algorithm<span></span></li>
								<li>Kruskal's Minimum Spanning Tree Algorithm<span></span></li>
								<li>Huffman Coding Algorihtm<span></span></li>
								<li>Dijkstra's Shortest Path Algorithm<span></span></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					
				
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--============================
=            Footer            =
=============================-->


            
           


<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary"  target="_blank">Tech Algo</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>


</html>