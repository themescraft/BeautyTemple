<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col mb-[32px] shadow-2xl shadow-slate-50 rounded-md overflow-hidden'); ?>>

	<?php beautytemple_post_thumbnail(); ?>
	<div class="flex flex-col p-[30px] gap-2">
		<?php beautytemple_posted_on(); ?>
		<h5><a class="text-[24px] leading-normal font-semibold text-[#101010] border-0" href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
		<div class="flex gap-5">
			<?php beautytemple_posted_by(); ?>
			<?php beautytemple_mins_to_read(); ?>
		</div>
	</div>
</article>