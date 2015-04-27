<?php get_header(); ?>
	<div id="conteudo">
		<div id="artigos">

			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
			    Arquivo da Categoria "<?php echo single_cat_title(); ?>"
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			    Arquivo de <?php the_time('j \d\e F \d\e Y'); ?>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			    Arquivo de <?php the_time('F \d\e Y'); ?>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			    Arquivo de <?php the_time('Y'); ?>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			    Arquivo do Autor
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			    Arquivo do Blog
			<?php } ?>
			<div class="artigo">
				<?php if (have_posts()){
					the_post();
				}?>
				 <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    		<p><?php the_content(); ?></p>
			</div>

   			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	                	<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
		        <?php endwhile?>
                 		<p> Mais Notícias </p>
			<?php else: ?>
                 
            		<?php endif; ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
