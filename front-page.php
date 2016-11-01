<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tao_PR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section id="hero">
			<?php taopr_hero_image(); ?>

			<?php taopr_lead_image(); ?>
		</section>

		<section id="about" class="home-widget"> <!-- widget -->
			<h2>Market Scanning. Strategic Planning. <br>It's Just the Beginning.</h2>
			<p>Os melhores insights nascem de grandes estratégias. 
			Quando planejamento se junta com criatividade, os resultados 
			vão muito além das expectativas.</p>
			<a href="" class="btn btn-default">Saiba Mais</a>
		</section>
		
		<hr class="fancy" />

		<section id="tools" class="home-widget">
			<h2>Building Awareness and Driving Reputation <br>is our Full Time Job.</h2>
			<p>Os melhores insights nascem de grandes estratégias. 
			Quando planejamento se junta com criatividade, os resultados 
			vão muito além das expectativas.</p>
			<a href="" class="btn btn-default">Saiba Mais</a>
		</section>

		<?php if (function_exists( 'is_project' )) : ?>
		<section id="cases" class="home-section">
			<p>Cases</p>
			<h2>Fresh Ideas	on How to Make Your Brand Remarkable.</h2>
			<?php echo do_shortcode('[projects limit="3" columns="1"]'); ?>
		</section>
		<?php endif; ?>	

		<?php if (function_exists( 'woothemes_testimonials' )) : ?>
		<section id="testimonial" class="home-widget">
			<!-- <h2>"Não existe nada melhor do que trabalhar com quem realmente 
			entende do nosso mercado."</h2>
			<p>Caroline Freire, diretora de marketing na Ambev</p> -->
			<?php do_action( 'woothemes_testimonials', array( 'limit' => 1 )); ?>
		</section>
		<?php endif; ?>	

		<section class="social-widget bg-primary">
			<header>
				<h3><strong>Social</strong></h3>
			</header>
			<div class="social-items">
				<div class="hidden-xs col-md-2 bg-success hidden-sm">
					<h3>About <strong>Us.</strong></h3>
					<h3>About Our <strong>Clients.</strong></h3>
					<h3>About Our <strong>Partners.</strong></h3>
				</div>
				<div class="col-xs-12 col-md-10 bg-primary">
					<?php echo do_shortcode('[ff id="1"]'); ?>
				</div>
			</div>
		</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
