<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<style type="text/css">
    .page-title-block .main-title {
        color: #fff;
    }
</style>

<?php

    $whichPage = rand(0, 2);

    switch ($whichPage) {
        case 0: ?>
        <section class="page-title-block photo foxy">
            <div class="photo-overlay">
            </div>
            <div class="container">
                <div class="error">
                    <h1>404</h1>
                    <p>A total clustercuss for everybody</p>
                </div>
            </div>

        </section>
          <?php
            break;
        case 1: ?>
        <section class="page-title-block photo zissou">
            <div class="photo-overlay">
            </div>
            <div class="container">
                <div class="error">
                    <h1>404</h1>
                    <p>Son of a bitch, i'm sick of these dolphins</p>
                </div>
            </div>

        </section>
            <?php
            break;
        case 2: ?>
        <section class="page-title-block photo royal">
            <div class="photo-overlay">
            </div>
            <div class="container">
                <div class="error">
                    <h1>404</h1>
                    <p>Hell of a damn grave. Wish it were mine.</p>
                </div>
            </div>

        </section>
        <?php
            break;
    }
    ?>








<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>