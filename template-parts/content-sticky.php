<?php

// get sticky posts from DB
$sticky = get_option('sticky_posts');

// check if there are any
if (!empty($sticky)):
    // optional: sort the newest IDs first
    rsort($sticky);

    // override the query
	$sticky_post = get_post($sticky[0]);      
    ?>  


<div class="container mt-16">
	<div class="flex flex-col lg:flex-row gap-[24px]">
		<div class="w-full lg:w-1/2">
			<div class="flex gap-4 align-middle mb-8">
				<?php 
				$categories = get_the_category();

				if ( ! empty( $categories ) ) {
					echo '<span class="py-3 px-5 bg-[#FFCDA3] rounded-[10px]">'.esc_html( $categories[0]->name ).'</span>';	
				}
				?>
				
				<span class="flex flex-wrap content-center">		
					<?php  beautytemple_posted_on(); ?>
				</span>
			</div>
			<div class="flex flex-col gap-6">
				<h3><a class="text-[#000] text-[48px] leading-[64px] font-bold border-0" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<p class="text-[#484848] text-[18px]"><?php the_excerpt(); ?></p>
				<div class="flex gap-6">
					<?php 
						beautytemple_posted_by();
						beautytemple_mins_to_read(); 
					?>
				</div>
			</div>
		</div>
		<div class="w-full lg:w-1/2 rounded-[10px] overflow-hidden">
			<?php 
				beautytemple_post_thumbnail(); 
			?>
		</div>
	</div>
</div>
<?php endif; ?>

