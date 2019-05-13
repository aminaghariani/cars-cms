<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="<?php echo get_bloginfo( 'description' ); ?>" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
	<title>Blogger</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link href="<?php bloginfo('template_directory'); ?>/css/linearicons.css"
rel="stylesheet">
						<link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css"
rel="stylesheet">
					<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css"
rel="stylesheet">

							<link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css"
rel="stylesheet">
									<link href="<?php bloginfo('template_directory'); ?>/css/main.css"
rel="stylesheet">
			
		</head>
		 <body>

            <!-- Start Header Area -->
            <header class="default-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                          <a class="navbar-brand" href="index.html">
                            <img src="img/logo.png" alt="">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav scrollable-menu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#news">News</a></li>
                                <li><a href="#travel">Travel</a></li>
                                <li><a href="#fashion">fashion</a></li>
                                <li><a href="#team">team</a></li>
                                <!-- Dropdown -->
                                <li class="dropdown">
                                  <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Pages
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="single.html">Single</a>
                                    <a class="dropdown-item" href="category.html">Category</a>
                                    <a class="dropdown-item" href="search.html">Search</a>
                                    <a class="dropdown-item" href="archive.html">Archive</a>
                                    <a class="dropdown-item" href="generic.html">Generic</a>
                                    <a class="dropdown-item" href="elements.html">Elements</a>
                                  </div>
                                </li>                               
                            </ul>
                          </div>                        
                    </div>
                </nav>
                <?php wp_head();?>
            </header>
            <!-- End Header Area -->
              <!-- Start top-section Area -->
            <section class="top-section-area section-gap">
                <div class="container">
                    <div class="row justify-content-between align-items-center d-flex">
                        <div class="col-lg-8 top-left">
                           <div class="blog-header">
 <h1 class="blog-title">
 <a href="<?php bloginfo( 'wpurl' );?>"><?php echo
get_bloginfo( 'name' ); ?></a></h1>
 <p class="lead blog-description"><?php echo get_bloginfo(
'description' ); ?></p>
</div> 
                        </div>
                    </div>
                </div>  
                
            </section>
            <!-- End top-section Area -->