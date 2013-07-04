<?php /*?>

	//single layout for Link Page

<?php */?>
	
    
    <h1 class="by_tax"><?php the_title(); ?></h1>
    
    <a href="<?php the_field('link_url');?>" title="<?php the_field('link_title');?>"><?php the_field('link_title');?></a>
    
    <figure><?php the_field('image');?></figure>
    <div class="user_generated"><?php the_content(); ?></div>
    
    <blockquote>
        <?php the_field('adam_says');?>
        <cite>says Adam</cite>
    </blockquote>
    <blockquote>
        <?php the_field('stugoo_says');?>
        <cite>says Stugoo</cite>
    </blockquote>
       