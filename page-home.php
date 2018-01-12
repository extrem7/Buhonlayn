<? /* Template Name: Главная */
get_header() ?>
<section id="services" class="carousel slide main"  data-interval="<? echo get_field( 'interval' )*1000 ?>" data-ride="carousel">
    <div class="carousel-inner">
		<?
		$active = true;
		while ( have_rows( 'main-slider' ) ) : the_row() ?>
            <div class="item <? if ( $active ) {
				echo ' active';
			}
			$active = false ?>">
                <img <? repeater_image( 'banner' ) ?>">
                <div class="container">
                    <div class="col-lg-7 col-md-8">
                        <p><? the_sub_field( 'text' ) ?></p>
                        <hr>
                        <h1 class="title"><? the_sub_field( 'title' ) ?></h1>
                        <a href="<? the_sub_field( 'link' ) ?>"
                           class="button"><? the_field( 'main-button', 10 ) ?></a>
                    </div>
                </div>
            </div>
		<? endwhile; ?>
    </div>
    <ol class="carousel-indicators">
		<?
		$i = 0;
		while ( have_rows( 'main-slider' ) ) : the_row() ?>
            <li data-target="#services" data-slide-to="<? echo $i ?>" class="<? if ( $i == 0 ) {
				echo 'active';
			}
			$active = false ?>"></li>
			<?
			$i ++;
		endwhile; ?>
    </ol>
</section>
<section class="services">
    <h1><? the_field( 'services-title' ) ?></h1>
    <div class="container">
        <p class="text"><? the_field( 'services-text' ) ?></p>
        <div class="list">
			<? while ( have_rows( 'services-row' ) ) : the_row() ?>
                <div class="item">
                    <img <? repeater_image( 'image' ) ?>>
                    <h3 class="title"><? the_sub_field( 'title' ); ?></h3>
                </div>
			<? endwhile; ?>
        </div>
    </div>
</section>
<section class="offer">
    <h2><? the_field( 'offer-title' ) ?></h2>
    <div class="container">
		<?
		$i = 0;
		while ( have_rows( 'offer-row' ) ) : the_row() ?>
            <div class="item col-sm-4 <? if ( $i > 2 )
				echo ' col-md-6' ?>">
                <img <? repeater_image( 'image' ) ?>>
                <p><? the_sub_field( 'title' ) ?></p>
            </div>
			<? if ( $i == 2 ): ?>
                <hr class="col-xs-12">
			<? endif; ?>
			<?
			$i ++;
		endwhile; ?>
    </div>
    <div id="offer-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
			<?
			$active = true;
			while ( have_rows( 'offer-row' ) ) : the_row() ?>
                <div class="item <? if ( $active ) {
					echo ' active';
				}
				$active = false ?>">
                    <img <? repeater_image( 'image' ) ?>>
                    <p><? the_sub_field( 'title' ) ?></p>
                </div>
				<?
				$i ++;
			endwhile; ?>
        </div>
        <div class="arrows">
            <a class="left carousel-control" href="#offer-slider" data-slide="prev">
            </a>
            <a class="right carousel-control" href="#offer-slider" data-slide="next">
            </a>
        </div>
    </div>
    <a href="<? the_field( 'mouse-link' ) ?>" class="mouse <? if ( get_field( 'mouse-link' ) )
		echo ' scroll-link' ?>"></a>
</section>
<section class="also" id="also">
    <div class="container">
        <div class="col-md-7 col-md-offset-5">
            <h3><? the_field( 'also-title' ) ?></h3>
            <ul>
				<? while ( have_rows( 'also-list' ) ) : the_row() ?>
                    <li><? the_sub_field( 'list-item' ) ?></li>
				<? endwhile; ?>
            </ul>
            <a href="#" class="button"><? the_field( 'also-button' ) ?></a>
        </div>
    </div>
</section>
<section class="tariff">
    <h2><? the_field( 'tariffs-title' ) ?></h2>
    <div class="container">
        <ul class="navigation">
            <li class="active"><a href="#legal" class="button" data-toggle="tab"><? the_field( 'tariff-btn-1' ) ?></a>
            </li>
            <li><a href="#ip" class="button" data-toggle="tab"><? the_field( 'tariff-btn-2' ) ?></a></li>
        </ul>
        <div class="tab-content">
            <table id="legal" class="tab-pane fade in active">
				<? while ( have_rows( 'table-1' ) ) : the_row() ?>
                    <tr>
                        <td><? the_sub_field( 'column-1' ) ?></td>
                        <td><? the_sub_field( 'column-2' ) ?></td>
                        <td><? the_sub_field( 'column-3' ) ?></td>
                    </tr>
				<? endwhile; ?>
            </table>
            <a href="#ip" class="button active"><? the_field( 'tariff-btn-2' ) ?></a>
            <table id="ip" class="tab-pane fade">
				<? while ( have_rows( 'table-2' ) ) : the_row() ?>
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
<section class="advantages">
    <h2><? the_field( 'advantages-title' ) ?></h2>
    <div class="container">
		<? while ( have_rows( 'advantages-row' ) ) : the_row() ?>
            <div class="col-sm-6">
                <div class="item">
                    <img <? repeater_image( 'image' ) ?>>
                    <p><span><? the_sub_field( 'title' ) ?></span>
						<? the_sub_field( 'text' ) ?></p>
                </div>
            </div>
		<? endwhile; ?>
    </div>
</section>
<section class="about">
    <h2><? the_field( 'about-title' ) ?></h2>
    <div class="container">
        <div class="col-sm-6">
            <p><? the_field( 'left-text' ) ?></p>
        </div>
        <div class="col-sm-6">
            <p><? the_field( 'right-text' ) ?></p>
        </div>
    </div>
</section>
<section class="work">
    <div class="container">
        <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-4">
            <h3><? the_field( 'work-title' ) ?></h3>
            <ul>
				<? while ( have_rows( 'work-list' ) ) : the_row() ?>
                    <li>
                        <div class="icon"><img <? repeater_image( 'image' ) ?>></div>
						<? the_sub_field( 'list-item' ) ?>
                    </li>
				<? endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<? get_template_part( 'call-us' ) ?>
<? get_footer() ?>
