<?php
/**
 * @package WordPress Start
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<?php
		$terms = get_the_terms( get_the_ID(), 'type');
		if( !empty($terms) ) {
			$term = array_pop($terms);
			$image = get_field('type_icon', $term );
		}
	?>
	<a href = "<?php the_permalink(); ?>">
		<?php if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
		<?php
			$title = get_sub_field('content_title');
			$post_type = get_post_type();

			if($title) {
				echo '<h3>' . $title . '</h3>';
			} else {
				echo '<h3>' . $post_type . '</h3>';
			}

		?>
	</a>
</div><!-- #post-## -->
