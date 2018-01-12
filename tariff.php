<? /* Template Name: Тарифы */
$front = get_option( 'page_on_front' );
get_header() ?>
<? get_template_part( 'breadcrumb' ) ?>
<section class="content tariff">
    <h1><? the_title() ?></h1>
    <div class="container">
        <p class="text"><? echo apply_filters( 'the_content', get_post_field( 'post_content', $id ) ); ?></p>
        <ul class="navigation">
            <li class="active"><a href="#legal" class="button"
                                  data-toggle="tab"><? the_field( 'tariff-btn-1', $front ) ?></a>
            </li>
            <li><a href="#ip" class="button" data-toggle="tab"><? the_field( 'tariff-btn-2', $front ) ?></a></li>
        </ul>
        <div class="tab-content">
            <table id="legal" class="tab-pane fade in active">
				<? while ( have_rows( 'table-1', $front ) ) : the_row() ?>
                    <tr>
                        <td><? the_sub_field( 'column-1' ) ?></td>
                        <td><? the_sub_field( 'column-2' ) ?></td>
                        <td><? the_sub_field( 'column-3' ) ?></td>
                    </tr>
				<? endwhile; ?>
            </table>
            <a href="#ip" class="button active"><? the_field( 'tariff-btn-2', $front ) ?></a>
            <table id="ip" class="tab-pane fade">
				<? while ( have_rows( 'table-2', $front ) ) : the_row() ?>
                    <tr>
                        <td><? the_sub_field( 'column-1' ) ?></td>
                        <td><? the_sub_field( 'column-2' ) ?></td>
                        <td><? the_sub_field( 'column-3' ) ?></td>
                    </tr>
				<? endwhile; ?>
            </table>
        </div>
    </div>
</section>
<section class="also book-service">
    <div class="container">
        <h2><? the_field('also-title') ?></h2>
        <ul>
		    <? while (have_rows('also-list')) : the_row() ?>
                <li><? the_sub_field('list-item') ?></li>
		    <? endwhile; ?>
        </ul>
    </div>
</section>
<section class="tariff table-second">
    <div class="container">
        <div class="tab-content">
            <table class="tab-pane">
                <tr>
                    <td><? the_field('table-2-title') ?></td>
                </tr>
	            <? while (have_rows('table-2')) : the_row() ?>
                <tr>
                    <td><? the_sub_field('column-1') ?></td>
                    <td><? the_sub_field('column-2') ?></td>
                </tr>
	            <? endwhile; ?>
            </table>
        </div>
    </div>
</section>
<section class="tariff table-second cadr">
    <div class="container">
        <h2><? the_field('table-3-pre-title') ?></h2>
        <div class="tab-content">
            <table class="tab-pane">
                <tr>
                    <td><? the_field('table-3-title') ?></td>
                </tr>
	            <? while (have_rows('table-3')) : the_row() ?>
                    <tr>
                        <td><? the_sub_field('column-1') ?></td>
                        <td><? the_sub_field('column-2') ?></td>
                    </tr>
	            <? endwhile; ?>
            </table>
        </div>
    </div>
</section>
<section class="also book-service abonent-service">
    <div class="container">
        <h4><? the_field('abonent-title') ?></h4>
        <div class="col-md-6">
            <ul>
	            <? while (have_rows('abonent-list-left')) : the_row() ?>
                    <li><? the_sub_field('list-item') ?></li>
	            <? endwhile; ?>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
	            <? while (have_rows('abonent-list-right')) : the_row() ?>
                    <li><? the_sub_field('list-item') ?></li>
	            <? endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<section class="tariff table-third">
    <div class="container">
        <ul class="navigation">
            <li class="active"><a href="#once-service" class="button" data-toggle="tab"><? the_field('btn-1') ?></a></li>
            <li><a href="#preparing" class="button" data-toggle="tab"><? the_field('btn-2') ?></a></li>
            <li><a href="#local-act" class="button" data-toggle="tab"><? the_field('btn-3') ?></a></li>
        </ul>
        <div class="tab-content">
            <table id="once-service" class="tab-pane fade in active">
                <tr>
                    <td><? the_field('table-4-title') ?></td>
                </tr>
	            <? while (have_rows('table-4')) : the_row() ?>
                    <tr>
                        <td><? the_sub_field('column-1') ?></td>
                        <td><? the_sub_field('column-2') ?></td>
                    </tr>
	            <? endwhile; ?>
            </table>
            <a href="#preparing" class="button active"><? the_field('btn-2') ?></a>
            <table id="preparing" class="tab-pane fade">
                <tr>
                    <td><? the_field('table-5-title') ?></td>
                </tr>
	            <? while (have_rows('table-5')) : the_row() ?>
                    <tr>
                        <td><? the_sub_field('column-1') ?></td>
                        <td><? the_sub_field('column-2') ?></td>
                    </tr>
	            <? endwhile; ?>
            </table>
            <a href="#local-act" class="button active"><? the_field('btn-3') ?></a>
            <table id="local-act" class="tab-pane fade">
                <tr>
                    <td><? the_field('table-6-title') ?></td>
                </tr>
	            <? while (have_rows('table-6')) : the_row() ?>
                    <tr>
                        <td><? the_sub_field('column-1') ?></td>
                        <td><? the_sub_field('column-2') ?></td>
                    </tr>
	            <? endwhile; ?>
            </table>
        </div>
        <p><? the_field('sale-text') ?></p>
    </div>
</section>
<section class="tariff table-four">
    <div class="container">
        <ul class="navigation">
            <li class="active"><a href="#tariif-document" class="button" data-toggle="tab"><? the_field('btn-4') ?></a></li>
            <li><a href="#additional-services" class="button" data-toggle="tab"><? the_field('btn-5') ?></a></li>
        </ul>
        <p><? the_field('info-text') ?></p>
        <div class="tab-content">
            <table id="tariif-document" class="tab-pane fade in active">
	            <? while ( have_rows( 'table-7') ) : the_row() ?>
                    <tr>
                        <td><? the_sub_field( 'column-1' ) ?></td>
                        <td><? the_sub_field( 'column-2' ) ?></td>
                        <td><? the_sub_field( 'column-3' ) ?></td>
                    </tr>
	            <? endwhile; ?>
            </table>
            <a href="#additional-services" class="button active"><? the_field('btn-5') ?></a>
            <table id="additional-services" class="tab-pane fade">
	            <? while ( have_rows( 'table-8') ) : the_row() ?>
                    <tr>
                        <td><? the_sub_field( 'column-1' ) ?></td>
                        <td><? the_sub_field( 'column-2' ) ?></td>
                        <td><? the_sub_field( 'column-3' ) ?></td>
                    </tr>
	            <? endwhile; ?>
            </table>
        </div>
    </div>
</section>
<section class="book-advantages">
    <div class="container">
        <h2><? the_field('outsource-title') ?></h2>
	    <? the_field('outsource-text') ?>
    </div>
</section>
<? get_footer() ?>
