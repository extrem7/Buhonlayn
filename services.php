<? /* Template Name: Услуги */
get_header() ?>
<? get_template_part( 'breadcrumb' ) ?>
<section class="content">
    <h1><? the_title() ?></h1>
    <div class="container">
        <p class="text"><? echo apply_filters( 'the_content', get_post_field( 'post_content', $id ) ); ?></p>
    </div>
    <hr>
</section>
<section class="our-services">
    <h2><? the_field( 'services-title' ) ?></h2>
    <div class="container">
		<? while ( have_rows( 'services-row' ) ) : the_row() ?>
            <a href="<? the_sub_field( 'link' ) ?>" class="item">
                <div class="icon">
                    <img <? repeater_image( 'image' ) ?>>
                </div>
                <p><? the_sub_field( 'title' ) ?></p>
            </a>
		<? endwhile; ?>
    </div>
</section>
<section class="also">
    <div class="container">
        <div class="col-md-7 col-md-offset-5">
            <h3><? the_field('also-title') ?></h3>
            <ul>
		        <? while (have_rows('also-list')) : the_row() ?>
                    <li><? the_sub_field('list-item') ?></li>
		        <? endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<section class="tariffs">
    <div class="container">
        <h3><? the_field( 'tariffs-title' ) ?></h3>
        <p class="text"><? the_field( 'tariffs-text' ) ?></p>
    </div>
</section>
<section class="advantages">
    <div class="container">
        <div class="col-md-6 col-md-offset-6">
            <h3><? the_field( 'outsource-title' ) ?></h3>
            <ul>
	            <? while (have_rows('outsource-list')) : the_row() ?>
                    <li><? the_sub_field('text') ?></li>
	            <? endwhile; ?>
            </ul>
            <p><? the_field( 'outsource-text' ) ?></p>
        </div>
    </div>
</section>
<? get_footer() ?>

