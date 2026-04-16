<?php
/**
 * Template Name: About the Game
 * @package liminal-liftoff
 */
get_header();
?>
<main id="primary" class="site-main">

    <!-- Making of the Game -->
    <section class="about-row">
        <div class="about-text making-game">
            <h2 class="about-title">Making of Liminal Liftoff</h2>
            <h3 class="about-subheading">Behind the Scenes</h3>
            <p class="about-p">Watch the documentary behind the making of Liminal Liftoff. The ideas, struggles, and moments that ultimately shaped the game. See how a small team of students came together to make something.</p>
        </div>
        <div class="about-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/development.png" alt="Game developers working at Butler Community College" />
        </div>
    </section>

    <!-- Features 1 -->
    <section class="about-row about-row--feature">
        <div class="about-feature-title feature-left">
            <h2 class="about-title">Inside the Process</h2>
        </div>
        <div class="about-text">
            <h3 class="about-subheading">The work behind the world</h3>
            <p class="about-p feat1-p">From early concepts to late-night fixes, this is a look at the effort it takes to bring a game to life. This documentary captures the real process behind Liminal Liftoff. The brainstorming sessions, the design pivots, and the moments where everything finally started to click.</p>
        </div>
    </section>

    <!-- Features 2 -->
    <section class="about-row about-row--feature about-row--reverse">
        <div class="about-text about-text-right">
            <h3 class="about-subheading">How it all started</h3>
            <p class="feat2-p">Every game starts with a “what if.” This documentary shows how that question turned into a playable experience through design, collaboration, and iteration. See how rough ideas, notes, and prototypes transformed into the world of Liminal Liftoff, piece by piece.</p>
        </div>
        <div class="about-feature-title feature-right">
            <h2 class="about-title">From Idea to Game</h2>
        </div>
    </section>

    <!-- Reflection / Image / Documentary -->
    <section class="about-row about-row--three">
        <div class="about-text reflection">
            <h2 class="about-title">Reflection</h2>
            <h3 class="about-subheading">Looking back on the journey</h3>
            <p class="about-p">After the work is done, what stays with you? The team reflects on what they learned making a game at this scale. More than just a project, Liminal Liftoff became an experience for everyone involved.</p>
        </div>
        <div class="about-image">
            <iframe class="embed" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=7kC7QXPFcSMl2YSc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="about-text">
            <h2 class="about-title">View the Documentary</h2>
            <h3 class="about-subheading">Start watching</h3>
            <p class="about-p">Watch the complete documentary and experience the journey behind Liminal Liftoff from the first idea to the final result. Explore the making of Liminal Liftoff and see the story behind the game for yourself.</p>
        </div>
    </section>

</main>
<?php get_footer(); ?>