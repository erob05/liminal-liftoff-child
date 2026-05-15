<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>
<script src="https://unpkg.com/lottie-web@latest/build/player/lottie.min.js"></script>

<main id="primary" class="site-main">

    <section class="hero">
		<div class="hero-inner">
			<a href="https://chaszra.itch.io/liminal-liftoff" class="hero-btn">Download Now</a>
		</div>

		<div class="hero-bg" id="lottie-animation"></div>
    </section>

	<section class="desc-row">
		<div class="div-row">
			<!-- Image + Bars -->
			<div class="desc-image-frame">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bed.png" width="600px" height="450px" alt="Game screenshot" />
				<div class="frame-bars">
					<div class="bar-main"></div>
					<div class="bar-decorative">
						<span class="bar-small bar-small--green"></span>
						<span class="bar-small bar-small--dark"></span>
						<span class="bar-small bar-small--green2"></span>
						<span class="bar-small bar-small--dark2"></span>
					</div>
				</div>
			</div>

			<!-- Text -->
			<div class="desc-text desc-text-orange">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/follow-stickynote.png" class="desc-title-image" alt="Follow the notes, description 1 header">

				<div class="desc-block">
					<h3 class="desc-subheading">
						<img class="heading-star" src="<?php echo get_stylesheet_directory_uri(); ?>/img/starred.svg">
						Discover a layered narrative
					</h3>
					<p class="desc-text-right desc-p">Each message adds context, building a story through exploration rather than exposition. Pay attention. Everything matters. The deeper you go, the harder it is to ignore what those notes are really saying.</p>
				</div>

				<div class="desc-block">
					<h3 class="desc-subheading">
						<img class="heading-star" src="<?php echo get_stylesheet_directory_uri(); ?>/img/starblue.svg">
						A story left behind
					</h3>
					<p class="desc-text-right desc-p">Use notes, clues, and everyday objects to uncover hidden meanings and unlock new paths through the house!</p>
				</div>

				</div>
			</div>
		</section>

	<section class="desc-row desc-row--reverse">
		<div class="div-row">
			<!-- Text -->
			<div class="desc-text-left desc-text-purple">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mom-stickynote.png" class="desc-title-image" alt="Go get mom, description 2 header">

				<div class="desc-block">
					<h3 class="desc-subheading">
						<img class="heading-star" src="<?php echo get_stylesheet_directory_uri(); ?>/img/starred.svg">
						Build your way forward
					</h3>
					<p class="desc-p">Collect scattered parts and use your tools to construct a rocket capable of reaching your goal.</p>
				</div>

				<div class="desc-block">
					<h3 class="desc-subheading">
						<img class="heading-star" src="<?php echo get_stylesheet_directory_uri(); ?>/img/starblue.svg">
						She believes in you
					</h3>
					<p class="desc-p">Keep going even when your nightmares take hold. Do it for her. Because she's waiting for you.</p>
				</div>
			</div>
			<!-- Image + Bars -->
			<div class="desc-image-frame">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/living.png" alt="Game screenshot" width="600px" height="450px"/>
				<div class="frame-bars">
					<div class="bar-main"></div>
					<div class="bar-decorative">
						<span class="bar-small bar-small--green"></span>
						<span class="bar-small bar-small--dark"></span>
						<span class="bar-small bar-small--green2"></span>
						<span class="bar-small bar-small--dark2"></span>
					</div>
				</div>
			</div>
			
		</div>
	</section>
</main><!-- #main -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const anim = lottie.loadAnimation({
    container: document.getElementById('lottie-animation'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: '<?php echo get_stylesheet_directory_uri(); ?>/img/data.json',

	rendererSettings: {
    preserveAspectRatio: 'xMidYMid slice'
  }
  });

  anim.addEventListener('complete', function() {
    anim.goToAndStop(anim.totalFrames, true);
  });
});
</script>
<?php
get_footer();
