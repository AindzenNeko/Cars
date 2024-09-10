<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title>Car HTML Template</title>

		<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon">

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<!-- <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">  -->

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php global $geniuscourses_options; ?>
		<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
			<div class="row">
				<div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
					<div class="d-inline-flex align-items-center">
						<?php if($geniuscourses_options['contact-phone']){ ?> 
							<a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i><?php echo $geniuscourses_options['contact-phone'] ?></a>
							<span class="text-body">|</span>
						<?php } ?> 
						<?php if($geniuscourses_options['contact-email']){ ?> 
							<a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i><?php echo $geniuscourses_options['contact-email'] ?></a>
						<?php } ?> 
					</div>
				</div>
				<div class="col-md-6 text-center text-lg-right">
					<div class="d-inline-flex align-items-center">
						<?php if($geniuscourses_options['social-fb']){ ?> 
							<a class="text-body px-3" href="<?php echo $geniuscourses_options['social-fb'] ?>">
								<i class="fab fa-facebook-f"></i>
							</a>
						<?php } ?> 
						<?php if($geniuscourses_options['social-tw']){ ?> 
							<a class="text-body px-3" href="<?php echo $geniuscourses_options['social-tw'] ?>">
								<i class="fab fa-twitter"></i>
							</a>
						<?php } ?> 
						<?php if($geniuscourses_options['social-in']){ ?> 
							<a class="text-body px-3" href="<?php echo $geniuscourses_options['social-in'] ?>">
								<i class="fab fa-linkedin-in"></i>
							</a>
						<?php } ?> 
						<?php if($geniuscourses_options['social-ins']){ ?> 
							<a class="text-body px-3" href="<?php echo $geniuscourses_options['social-ins'] ?>">
								<i class="fab fa-instagram"></i>
							</a>
						<?php } ?> 
						<?php if($geniuscourses_options['social-yt']){ ?> 
							<a class="text-body pl-3" href="<?php echo $geniuscourses_options['social-yt'] ?>">
								<i class="fab fa-youtube"></i>
							</a>
						<?php } ?> 
					</div>
				</div>
			</div>
		</div>


    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
				<?php if($geniuscourses_options['logo-text']){ ?> 
					<a href="" class="navbar-brand">
						<h1 class="text-uppercase text-primary mb-1"><?php echo $geniuscourses_options['logo-text'] ?></h1>
					</a>
				<?php } ?> 
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
					<?php 
						echo (has_nav_menu('header-menu'))
						? wp_nav_menu(
							array(
								'theme_location' => 'header-menu',
								'menu_id'        => 'header-menu',
								'container'      => false,
								'depth'          => 0,
								'menu_class'	=> 'navbar-nav ml-auto py-0',
								'item_styles' 	 => 'nav-item nav-link',
							)
						)
						:
						'<ul class="navbar-nav ml-auto py-0">
							<li class="nav-item nav-link active"><a href="index.html">Home</a></li>
							<li class="nav-item nav-link "><a href="about.html">About</a></li>
							<li class="nav-item nav-link "><a href="service.html">Service</a></li>
							<li class="nav-item nav-link "><a href="car.html">Cars</a></li>
						</ul>'
					?>
                </div>
            </nav>
        </div>
    </div>

	<?php if(!is_front_page()) { 
		$bg_image = '';
		if($geniuscourses_options['header-banner']['url']) {
			$bg_image = 'style = "background-image: linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url('.$geniuscourses_options['header-banner']['url'].');"';
		}
	?>
		<div class="container-fluid page-header" <?php echo $bg_image ?>>
			<h1 class="display-3 text-uppercase text-white mb-3"><?php echo wp_title('') ?></h1>
		</div>
	<?php } else { if($geniuscourses_options['header-slider']) { ?>
		<div class="container-fluid p-0" style="margin-bottom: 90px;">
			<div id="header-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php for($i = 0; $i < count($geniuscourses_options['header-slider-title']); $i++){ ?>
						<div class="carousel-item <?php if($i == 0) { echo 'active';} ?>">
							<img class="w-100" src="<?php echo $geniuscourses_options['header-slider-image'][$i]['url'] ?>" alt="Image">
							<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
								<div class="p-3" style="max-width: 900px;">
									<h4 class="text-white text-uppercase mb-md-3"><?php echo $geniuscourses_options['header-slider-subtitle'] ?></h4>
									<h1 class="display-1 text-white mb-md-4"><?php echo $geniuscourses_options['header-slider-title'][$i] ?></h1>
									<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2"><?php echo $geniuscourses_options['header-slider-button'] ?></a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
					<div class="btn btn-dark" style="width: 45px; height: 45px;">
						<span class="carousel-control-prev-icon mb-n2"></span>
					</div>
				</a>
				<a class="carousel-control-next" href="#header-carousel" data-slide="next">
					<div class="btn btn-dark" style="width: 45px; height: 45px;">
						<span class="carousel-control-next-icon mb-n2"></span>
					</div>
				</a>
			</div>
		</div>
	<?php } }?>