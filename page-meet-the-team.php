<?php
/**
 * Template Name: Meet the Team
 * @package liminal-liftoff
 */
get_header();
?>
<main id="primary" class="site-main">

    <div class="team-page-header">
        <h1 class="team-page-title">Meet the Team</h1>
    </div>

    <!-- Project Leaders -->
    <section class="team-section team-section--cream">
        <h2 class="team-section-title">Project Leaders</h2>
        <div class="team-grid team-grid--3">
            <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="team-card">
                <div class="team-card-image">
                    <img src="https://placehold.co/300x250" alt="Team member" />
                </div>
                <div class="team-card-body">
                    <div class="team-card-info">
                        <div>
                            <p class="team-card-name">John Doe</p>
                            <p class="team-card-role">Lead Game Developer</p>
                        </div>
                        <div class="team-card-links">
                            <a href="#" class="team-link team-link--b">B</a>
                            <a href="#" class="team-link team-link--a">A</a>
                        </div>
                    </div>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Game Development Leaders -->
    <section class="team-section team-section--purple">
        <h2 class="team-section-title">Game Development Leaders</h2>
        <div class="team-grid team-grid--3">
            <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="team-card">
                <div class="team-card-image">
                    <img src="https://placehold.co/300x250" alt="Team member" />
                </div>
                <div class="team-card-body">
                    <div class="team-card-info">
                        <div>
                            <p class="team-card-name">John Doe</p>
                            <p class="team-card-role">Lead Game Developer</p>
                        </div>
                        <div class="team-card-links">
                            <a href="#" class="team-link team-link--b">B</a>
                            <a href="#" class="team-link team-link--a">A</a>
                        </div>
                    </div>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Digital Marketing Leaders -->
    <section class="team-section team-section--cream">
        <h2 class="team-section-title">Digital Marketing Leaders</h2>
        <div class="team-grid team-grid--3">
            <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="team-card">
                <div class="team-card-image">
                    <img src="https://placehold.co/300x250" alt="Team member" />
                </div>
                <div class="team-card-body">
                    <div class="team-card-info">
                        <div>
                            <p class="team-card-name">John Doe</p>
                            <p class="team-card-role">Lead Game Developer</p>
                        </div>
                        <div class="team-card-links">
                            <a href="#" class="team-link team-link--b">B</a>
                            <a href="#" class="team-link team-link--a">A</a>
                        </div>
                    </div>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Game Development Members -->
    <section class="team-section team-section--peach">
        <h2 class="team-section-title">Game Development Members</h2>
        <div class="team-grid team-grid--4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="team-card">
                <div class="team-card-image">
                    <img src="https://placehold.co/300x250" alt="Team member" />
                </div>
                <div class="team-card-body">
                    <div class="team-card-info">
                        <div>
                            <p class="team-card-name">John Doe</p>
                            <p class="team-card-role">Lead Game Developer</p>
                        </div>
                        <div class="team-card-links">
                            <a href="#" class="team-link team-link--b">B</a>
                            <a href="#" class="team-link team-link--a">A</a>
                        </div>
                    </div>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Digital Marketing Members -->
    <section class="team-section team-section--cream">
        <h2 class="team-section-title">Digital Marketing Members</h2>
        <div class="team-grid team-grid--4">
            <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="team-card">
                <div class="team-card-image">
                    <img src="https://placehold.co/300x250" alt="Team member" />
                </div>
                <div class="team-card-body">
                    <div class="team-card-info">
                        <div>
                            <p class="team-card-name">John Doe</p>
                            <p class="team-card-role">Lead Game Developer</p>
                        </div>
                        <div class="team-card-links">
                            <a href="#" class="team-link team-link--b">B</a>
                            <a href="#" class="team-link team-link--a">A</a>
                        </div>
                    </div>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

</main>
<?php get_footer(); ?>