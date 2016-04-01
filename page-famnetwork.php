<?php
/**
 * Template name: Fam Network
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header('home'); ?>
	<div class="main-content">
		<div class="get-connected">
			<h1><?php the_field('section_header'); ?></h1>
			<ul class="three-list group">
				<li class="group">
					<h3><?php the_field('step_1_header'); ?></h3>
					<p><?php the_field('step_1_description'); ?></p>
					<span class="purple-btn btn register-trigger"><?php the_field('step_1_button_left'); ?></span>
					<span class="clear-btn btn register-trigger"><?php the_field('step_1_button_right'); ?></span>
				</li>
				<li class="group">
					<h3><?php the_field('step_2_header'); ?></h3>
					<p><?php the_field('step_2_description'); ?></p>

					<?php include('svg/icon-newsletter.php'); ?>

				</li>
				<li class="group">
					<h3><?php the_field('step_3_header'); ?></h3>
					<p><?php the_field('step_3_description'); ?></p>
					<span class="purple-btn btn view-resources"><?php the_field('step_3_button_text'); ?></span>
				</li>
			</ul>
			<img src="<?php bloginfo('template_directory'); ?>/_i/connected-purple.png" class="upgrade-icon" />
		</div>
		<div class="join-free group">
			<div class="half full-box group" style="background: url(<?php the_field('left_section_background'); ?>) center center no-repeat; background-size: cover;">
				<div class="full-box-bg">
					<h1><?php the_field('left_section_header'); ?></h1>
					<hr />
					<h4><?php the_field('left_section_sub_header'); ?></h4>

					<?php if( have_rows('left_section_list') ): ?>

						<ul>

						<?php while( have_rows('left_section_list') ): the_row(); 

							// vars
							$list_item = get_sub_field('list_item');

							?>

							<li>
							   <?php echo $list_item; ?>

							</li>

						<?php endwhile; ?>

						</ul>

					<?php endif; ?>

					<span class="orange-btn btn register-trigger"><?php the_field('left_section_button_left'); ?></span>
					<span class="clear-btn btn register-trigger"><?php the_field('left_section_button_right'); ?></span>
				</div>
			</div>
			<div class="half side-box group" style="background: url(<?php the_field('right_section_background'); ?>) center center no-repeat; background-size: cover;">
				<div class="half mini-box info-card flip-container">
					<div class="flipper">
						<div class="front">
							<a href="#" class="turn-btn">
								<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
							</a>
							<h2><?php the_field('top_left_box_header'); ?></h2>
							<hr />
							<?php include('svg/icon-newsletter.php'); ?>
						</div>
						<div class="back">
							<a href="#" class="turn-btn">
								<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
							</a>
							<h2><?php the_field('top_left_box_header'); ?></h2>
							<hr />
							<p><?php the_field('top_left_box_description'); ?></p>
						</div>
					</div>
				</div>
				<div class="half mini-box info-card flip-container">
					<div class="flipper">
						<div class="front">
							<a href="#" class="turn-btn">
								<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
							</a>
							<h2><?php the_field('top_right_box_header'); ?></h2>
							<hr />
							<?php include('svg/icon-podcast.php'); ?>
						</div>
						<div class="back">
							<a href="#" class="turn-btn">
								<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
							</a>
							<h2><?php the_field('top_right_box_header'); ?></h2>
							<hr />
							<p><?php the_field('top_right_box_description'); ?></p>
						</div>
					</div>
				</div>
				<div class="mini-box full info-card flip-container">
					<div class="flipper">
						<div class="front">
							<a href="#" class="turn-btn">
								<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
							</a>
							<h2><?php the_field('bottom_box_header'); ?></h2>
							<hr />
								<?php include('svg/icon-forum.php'); ?>
						</div>
						<div class="back">
							<a href="#" class="turn-btn">
								<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
							</a>
							<h2><?php the_field('bottom_box_header'); ?></h2>
							<hr />
							<p><?php the_field('bottom_box_description'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="what-we-believe">
			<h1><?php the_field('believe_section_header'); ?></h1>
			<h4><?php the_field('believe_section_sub_header'); ?></h4>
			<ul class="four-list group">
				<li class="strong-marriage">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front" style="background: url(<?php the_field('first_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3><?php the_field('first_box_header'); ?></h3>
									<hr>
								</div>
							</div>
							<div class="back" style="background: url(<?php the_field('first_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3><?php the_field('first_box_header'); ?></h3>
									<hr>
									<p><?php the_field('first_box_description'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="empowered-kids">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front" style="background: url(<?php the_field('second_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3><?php the_field('first_box_header'); ?></h3>
									<hr>
								</div>
							</div>
							<div class="back" style="background: url(<?php the_field('second_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3><?php the_field('second_box_header'); ?></h3>
									<hr>
									<p><?php the_field('second_box_description'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="confident-parents">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front" style="background: url(<?php the_field('third_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3><?php the_field('third_box_header'); ?></h3>
									<hr>
								</div>
							</div>
							<div class="back" style="background: url(<?php the_field('third_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3><?php the_field('third_box_header'); ?></h3>
									<hr>
									<p><?php the_field('third_box_description'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="healthy-leaders">
					<div class="info-card flip-container">
						<div class="flipper">
							<div class="front" style="background: url(<?php the_field('fourth_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h3><?php the_field('fourth_box_header'); ?></h3>
									<hr />
								</div>
							</div>
							<div class="back" style="background: url(<?php the_field('fourth_box_background_image'); ?>) center center no-repeat; background-size: cover;">
								<div class="boxed-info">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<h3><?php the_field('fourth_box_header'); ?></h3>
									<hr>
									<p><?php the_field('fourth_box_description'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="upgrade-premium group">
			<div class="upgrade-top">
				<img src="<?php bloginfo('template_directory'); ?>/_i/upgrade-icon.png" class="upgrade-icon" />
				<ul class="three-list group">
					<li>
						<h1>Upgrade to Premium</h1>
						<hr />
						<h4>Secondary Heading</h4>
						<span class="orange-btn btn top register-trigger">Upgrade Now ($8.99/month)</span>
						<span class="clear-btn btn top register-trigger">Join for Free</span>
					</li>
					<li>
						<p>
							<?php include('svg/icon-check.php'); ?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php include('svg/icon-check.php'); ?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php include('svg/icon-check.php'); ?>
							Lorem Ipsum dolor sit amet
						</p>
					</li>
					<li>
						<p>
							<?php include('svg/icon-check.php'); ?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php include('svg/icon-check.php'); ?>
							Lorem Ipsum dolor sit amet
						</p>
						<p>
							<?php include('svg/icon-check.php'); ?>
							Lorem Ipsum dolor sit amet
						</p>
					</li>
				</ul>
				<a href="#" class="orange-btn btn bottom">Upgrade Now ($8.99/month)</a>
				<a href="#" class="clear-btn btn bottom">Join for Free</a>
			</div>
			<div class="upgrade-bottom">
				<!-- <img src="<?php // bloginfo('template_directory'); ?>/_i/premium-bg.jpg" /> -->
				<ul class="four-list upgrade-boxes group">
					<li class="monthly-downloads">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Monthly Downloads</h2>
									<hr />
									<?php	include('svg/icon-cloud.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Healthy Leaders</h3>
										<hr />
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>	
					</li>
					<li class="online-training">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Online Training</h2>
									<hr />
									<?php	include('svg/icon-lightbulb.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Online Training</h3>
										<hr />
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="resource-discounts">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Resource Discounts</h2>
									<hr />
									<?php	include('svg/icon-discount.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Resource Discounts</h3>
										<hr />
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="premarital-app">
						<div class="info-card flip-container">
							<div class="flipper">
								<div class="front">
									<a href="#" class="turn-btn">
										<svg class="icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
									</a>
									<h2>Premarital App</h2>
									<hr />
									<?php	include('svg/icon-app.php'); ?>
								</div>
								<div class="back">
									<a href="#" class="turn-btn">
										<svg class="icon icon-minus"><use xlink:href="#icon-minus"></use></svg>
									</a>
									<div class="boxed-info">
										<h3>Resource Discounts</h3>
										<hr />
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
			<div class="exclusive-pricing">
				<h1>Premium Member's Exclusive Pricing</h1>
				<h4>browse our extensive library of discounted family ministry resources</h4>
				<hr />
			</div>
		</div>
		<div class="resources group">
			
		  	<!-- Nav tabs -->
			<ul class="nav nav-tabs group" role="tablist">
				<li role="presentation" class="active">
					<a href="#home" aria-controls="home" role="tab" data-toggle="tab">
						<?php include('svg/icon-marriage.php'); ?>
						<h3><?php the_field('first_tab_header'); ?></h3>
					</a>
				</li>
				<li role="presentation">
					<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
						<?php include('svg/icon-kids.php'); ?>
						<h3>Empowered Kids</h3>
					</a>
				</li>
				<li role="presentation">
					<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
						<?php include('svg/icon-confident.php'); ?>
						<h3>Confident Parents</h3>
					</a>
				</li>
				<li role="presentation">
					<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
						<?php include('svg/icon-leaders.php'); ?>
						<h3>Healthy Leaders</h3>
					</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content group">
				<div role="tabpanel" class="tab-pane group active" id="home" style="background: url(<?php the_field('first_tab_background_image'); ?>) center center no-repeat; background-size: cover;">
					<div class="resource-forty">
						<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
							<?php include('svg/icon-marriage.php'); ?>
							<h3><?php the_field('first_tab_header'); ?></h3>
						</a>
					</div>
					<div class="resource-sixty group">

						<?php if( have_rows('first_tab_list') ): ?>

							<ul class="half">

							<?php while( have_rows('first_tab_list') ): the_row(); 

								// vars
								$list_item = get_sub_field('list_item');

								?>

								<li>
									<?php	include('svg/icon-check.php'); ?>
									<?php echo $list_item; ?>
								</li>

							<?php endwhile; ?>

							</ul>

						<?php endif; ?>

						<div class="half">
							<a href="#" class="white-btn btn"><?php the_field('first_tab_button'); ?></a>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane group" id="profile" style="background: url(<?php the_field('second_tab_background_image'); ?>) center center no-repeat; background-size: cover;">
					<div class="resource-forty">
						<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
							<?php include('svg/icon-kids.php'); ?>
							<h3><?php the_field('second_tab_header'); ?></h3>
						</a>
					</div>
					<div class="resource-sixty group">

						<?php if( have_rows('second_tab_list') ): ?>

							<ul class="half">

							<?php while( have_rows('second_tab_list') ): the_row(); 

								// vars
								$list_item = get_sub_field('list_item');

								?>

								<li>
									<?php	include('svg/icon-check.php'); ?>
									<?php echo $list_item; ?>
								</li>

							<?php endwhile; ?>

							</ul>

						<?php endif; ?>

						<div class="half">
							<a href="#" class="white-btn btn"><?php the_field('second_tab_button'); ?></a>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane group" id="messages" style="background: url(<?php the_field('third_tab_background_image'); ?>) center center no-repeat; background-size: cover;">
					<div class="resource-forty">
						<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
							<?php include('svg/icon-confident.php'); ?>
							<h3><?php the_field('third_tab_header'); ?></h3>
						</a>
					</div>
					<div class="resource-sixty group">
						
						<?php if( have_rows('third_tab_list') ): ?>

							<ul class="half">

							<?php while( have_rows('third_tab_list') ): the_row(); 

								// vars
								$list_item = get_sub_field('list_item');

								?>

								<li>
									<?php	include('svg/icon-check.php'); ?>
									<?php echo $list_item; ?>
								</li>

							<?php endwhile; ?>

							</ul>

						<?php endif; ?>

						<div class="half">
							<a href="#" class="white-btn btn"><?php the_field('third_tab_button'); ?></a>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane group" id="settings" style="background: url(<?php the_field('third_tab_background_image'); ?>) center center no-repeat; background-size: cover;">
					<div class="testing">
						<div class="resource-forty">
							<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
								<?php include('svg/icon-leaders.php'); ?>
								<h3><?php the_field('fourth_tab_header'); ?></h3>
							</a>
						</div>
						<div class="resource-sixty group">
							
							<?php if( have_rows('fourth_tab_list') ): ?>

								<ul class="half">

								<?php while( have_rows('fourth_tab_list') ): the_row(); 

									// vars
									$list_item = get_sub_field('list_item');

									?>

									<li>
										<?php	include('svg/icon-check.php'); ?>
										<?php echo $list_item; ?>
									</li>

								<?php endwhile; ?>

								</ul>

							<?php endif; ?>

							<div class="half">
								<a href="#" class="white-btn btn"><?php the_field('fourth_tab_button'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- end tabs -->

		</div>
	</div><!-- #main-content -->

<?php get_footer(); ?>
