<? /* Template Name: Контакты */
get_header() ?>
<? get_template_part( 'breadcrumb' ) ?>
<section class="content">
    <h1><? the_title() ?></h1>
    <div class="container">
        <div class="col-md-6 blocks">
			<? while ( have_rows( 'contacts-row' ) ) : the_row() ?>
                <div class="item">
                    <img <? repeater_image( 'image' ) ?>>
                    <p>
                        <span><? the_sub_field( 'title' ) ?></span>
						<? the_sub_field( 'text' ) ?>
                    </p>
                </div>
			<? endwhile; ?>
        </div>
        <div class="col-md-6">
			<? //$map = get_field( 'map' ) ?>
			<? the_yandex_map( 'map' ) ?>
            <!--<script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9c279649021663cb7cb48fe88b6a7c5750ba4b6850c4b4670db8b930397a3ba4&amp;width=100%25&amp;height=505&amp;lang=ru_UA&amp;scroll=true"></script>
        --></div>
    </div>
    <hr>
</section>
<? get_template_part( 'call-us' ) ?>
<? get_footer() ?>

