<?php /* Template Name: Projects Page */ 

get_header(); 
$options = get_option( 'sample_theme_options' ); ?>


<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
?>

<div class="all-projects">
	<div class="container-fluid">
		<?php  		
			$i = 1;
			$count = 1;
			$args = array('post_type' => 'post', 'posts_per_page' => '4' ); 
			$loop = new WP_Query( $args );
			while( $loop->have_posts()): $loop->the_post(); 
			$url=wp_get_attachment_url( get_post_thumbnail_id(get_the_id()),'thumbnail');
			if($count == 1){  $class = 'left'; ?>
				<div class="row <?php echo $class;?>">
					<div class="col-md-8">
						<div class="project-thumb">
							<figure><a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>"></a></figure>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="project-conts anim-right">
							<h2><a href="<?php the_permalink(); ?>">Project <?php echo $i; ?></a></h2>
							<div class="cont-descriptions">
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo wp_trim_words( get_the_excerpt(), 45, '...' ); ?></p>
							</div>				
						</div>
					</div>
				</div>
			<?php }else if($count == 2){ $class = 'middle'; ?>
				<div class="row <?php echo $class;?>">					
					<div class="col-md-4">
						<div class="project-conts anim-left">
							<h2><a href="<?php the_permalink(); ?>">Project <?php echo $i; ?></a></h2>
							<div class="cont-descriptions">
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo wp_trim_words( get_the_excerpt(), 45, '...' ); ?></p>
							</div>				
						</div>
					</div>
					<div class="col-md-8">
						<div class="project-thumb">
							<figure><a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>"></a></figure>
						</div>
					</div>
				</div>
			<?php }else if($count == 3){ $class = 'right'; ?>
				<div class="row <?php echo $class;?>">
					<div class="col-md-7">
						<div class="project-thumb">
							<figure><a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>"></a></figure>
						</div>
					</div>
					<div class="col-md-3">
						<div class="project-conts anim-center">							
							<div class="cont-descriptions">
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo wp_trim_words( get_the_excerpt(), 45, '...' ); ?></p>
							</div>				
						</div>
					</div>
					<div class="col-md-2">
						<div class="side-img">					
							<figure><a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta(get_the_ID(), 'Right Image', TRUE); ?>"></a></figure>
							<div class="pr-title"><h2><a href="<?php the_permalink(); ?>">Project <?php echo $i; ?></a></h2></div>												
						</div>
					</div>
					
				</div>
			<?php }else if($count == 4){ $class = 'designfour'; ?>
				<div class="row <?php echo $class;?>">					
					<div class="col-md-6    anim-left">
						<div class="project-conts">							
							<div class="cont-descriptions">
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo wp_trim_words( get_the_excerpt(), 45, '...' ); ?></p>
							</div>
							
							<h2><a href="<?php the_permalink(); ?>">Project <?php echo $i; ?></a></h2>			
				
						</div>
						

					</div>					
					<div class="col-md-6">
						<div class="project-thumb">
							<figure><a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>"></a></figure>
						</div>
					</div>
					
				</div>
			<?php $count = 0; } $i++; $count++; endwhile; ?>
	</div>
</div>

<!--<div class="all-projects">
	<div class="container-fluid">
		<?php  		
			$args = array('post_type' => 'post' ); 
			$loop = new WP_Query( $args );
			while( $loop->have_posts()): $loop->the_post(); 
			$url=wp_get_attachment_url( get_post_thumbnail_id(get_the_id()),'thumbnail');
		?>
		
		<div class="row">
			<div class="col-md-8">
				<div class="project-thumb">
					<figure><a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>"></a></figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project-conts">
					<h2><a href="<?php the_permalink(); ?>">Project 01</a></h2>
					<div class="cont-descriptions">
						<h4><?php echo get_the_title(); ?></h4>
						<p><?php echo wp_trim_words( get_the_excerpt(), 45, '...' ); ?></p>
					</div>				
				</div>
			</div>
		</div>
		
		<?php endwhile; ?>
		
		
			<div class="row">
				<div class="col-md-8">
					<div class="project-thumb">
						<figure><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-thumbnail.png"></a></figure>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-conts">
						<h2><a href="#">Project 01</a></h2>
						<div class="cont-descriptions">
							<h4>AVE NW CONCORD, NC 28025</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</p>
						</div>				
					</div>
				</div>
			</div>
		
		<div class="row odd">
			<div class="col-md-8">
				<div class="project-thumb">
					<figure><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-thumbnail2.png"></a></figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project-conts">
					<h2><a href="#">Project 01</a></h2>
					<div class="cont-descriptions">
						<h4>AVE NW CONCORD, NC 28025</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</p>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>-->






<?php get_footer(); ?>