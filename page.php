
	<?php get_header(); ?>

	<header class="header">
		<div class="container">

			<div class="header__container">
	
				<a href="/" class="header__logo">
					<img src="<?php the_field('logo', 'option'); ?>" alt="logo" width="115" height="67">
					<span><?php the_field('logo-text', 'option'); ?></span>
				</a>

				<div class="header__info">
					<div class="header__email">
						<img src="<?php the_field('mail-img', 'option'); ?>" alt="email">
						<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
					</div>

					<div class="header__phone">
						<div class="header__phone_img">
							<img src="<?php the_field('phone-img', 'option'); ?>" alt="phone">
						</div>
						<a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
						<span><?php the_field('time', 'option'); ?></span>
					</div>
				</div>

			</div>

		</div>
	</header>

	<main class="main">

		<section class="eurocara" style="background-image: url(<?php the_field('background', 'option'); ?>)">
			<div class="container eurocara__container">

				<img class="eurocara__image" src="<?php the_field('cara', 'option'); ?>" alt="cara">

				<div class="row">

					<div class="col-xl-7">
						<h1><?php the_field('title', 'option'); ?></h1>
					</div>

				</div>

				<div class="row">
					
					<div class="eurocara__content col-md-7">

						<div class="eurocara__list">

							<?php if(get_field('list', 'option')): ?>
								<?php while(has_sub_field('list', 'option')): ?>

									<div class="eurocara__item">
										<h3><?php the_sub_field('title'); ?></h3>
										<p><?php the_sub_field('text'); ?></p>
									</div>

								<?php endwhile; ?>
							<?php endif; ?>

						</div>

						<div class="eurocara__btn">
							<img src="<?php the_field('button-img', 'option'); ?>" alt="pdf" class="eurocara__pdf">
							<a href="#" class="eurocara__button btn order_open"><?php the_field('button-text', 'option'); ?></a>
						</div>

					</div>

				</div>


			</div>
		</section>

		<footer class="footer">

			<div class="container">
				<h2><?php the_field('footer-title', 'option'); ?></h2>
				
				<div class="footer__container">
					<div class="footer__col">
						<?php the_field('copy', 'option'); ?>
					</div>

					<div class="footer__col">
						<a href="<?php the_field('policy-file', 'option'); ?>" download=""><?php the_field('policy-text', 'option'); ?></a>
					</div>

					<div class="footer__col">
						<?php the_field('position', 'option'); ?>
					</div>
				</div>

			</div>
		</footer>

	</main>

	<?php get_footer(); ?>