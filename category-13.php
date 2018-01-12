<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); ?>
    <style>
        .footer{
            margin-top: 25px;
        }
        h1{
            padding-top: 10px;
        }
        /* Category articles */
        .article-block h1:after, .article-block h2:after {
            display: none
        }

        .category-11 h1 {
            font-size: 22px;
            text-align: center;
            font-weight: 500;
            line-height: 26px;
            color: #51616b;
            margin-bottom: 20px;
        }

        .cat-desc {
            margin-bottom: 30px;
        }

        .article-block {
            background: url(img/bottom-line-wide.png) no-repeat center bottom;
            padding-bottom: 30px;
            margin-bottom: 30px;
        }

        .article-block .image img {
            max-width: 100%;
            display: block;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
            margin-bottom: 10px;
        }

        .article-block .article-info {
            color: #51616b;
            min-height: 133px;
        }

        .article-block .article-info h2 {
            font-weight: 500;
            font-size: 28px;
            line-height: 28px;
            text-align: left;
            text-transform: none;
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 15px;
        }

        /*.article-block .article-info p {    color: #888490;    font-size: 16px;    line-height: 24px;margin-bottom: 24px;}*/
        .article-block .article-info p {
            color: #000;
            line-height: 24px;
        }

        .article-block .article-footer {
            display: table;
            width: 100%;
        }

        .article-block .article-footer .date {
            font-size: 17px;
            line-height: 41px;
            padding-top: 2px;
            color: #b4b4b4;
            font-style: italic;
            font-weight: 600;
            padding-left: 25px;
            background: url(img/clock-light.png) no-repeat left center;
        }

        .article-block .btn {
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
            font-weight: 600;
            background: #008e68;
            padding: 0 25px;
            min-height: 43px;
            line-height: 43px;
            text-align: center;
            transition: all 0.3s;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
        }

        .article-block .btn:hover {
           /* background: #196bbc;*/
            color: #fff;
            text-decoration: none;
        }

        @media all and (max-width: 991px) {
            .article-block .image img {
                margin: 0 auto 10px
            }

            .article-block .article-info h2 {
                text-align: center;
                margin-top: 15px;
            }
        }

        @media all and (max-width: 350px) {
            .article-block .article-footer .date {
                width: 100%;
            }

            .article-block .btn {
                float: none !important;
                margin-top: 15px;
            }
        }

        .categories-nav {
            width: 100%;
            display: table;
            list-style: none;
            text-align: center;
            margin: 3.7em 0 3.7em;
        }

        .categories-nav li {
            display: table;
            float: left;
            width: calc(25% - 20px);
            min-height: 64px;
            margin: 0 10px 15px 10px;
            padding: 7px 15px;
            vertical-align: middle;
            background: #ececec;
            border-radius: 3px;
            position: relative;
            text-align: right;
            transition: all 0.3s;
            background-position: 120% center;
        }

        .categories-nav li a {
            display: table-cell;
            font-size: 18px;
            color: #51616b;
            font-weight: 500;
            transition: all 0.3s;
            text-align: center;
            vertical-align: middle
        }

        .categories-nav li:hover {
            opacity: 0.8;
        }

        @media all and (max-width: 991px) {
            #sp-menu .sp-megamenu-wrapper ul {
                display: none
            }

            .categories-nav li {
                width: calc(50% - 20px);
            }
        }

        @media all and (max-width: 640px) {
            .categories-nav li {
                width: calc(100% - 20px);
            }
        }
        .pagination a{
            color:#008e68!important;
        }
        .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
            background: #008e68;
            border-color: #008e68;
        }
    </style>
    <div class="breadcrumb">
        <div class="container">
            <a href="/">Главная</a>
            /
            <a href="" class="disabled"><?php single_cat_title(); ?></a>
        </div>
    </div>
    <section>
        <div class="container">
            <!--div class="row"-->
            <div class="section">
                <h1><?php single_cat_title(); ?></h1>

                <div class="cat-desc"><?php echo category_description(); ?></div>

				<?php if ( is_category( '13' ) ) { ?>
                    <ul class="categories-nav">
						<?php $category_id = 13;
						$cats              = array(
							'type'         => 'post',
							'child_of'     => $category_id,
							'orderby'      => 'name',
							'order'        => 'ASC',
							'hide_empty'   => false,
							'hierarchical' => 1,
							'taxonomy'     => 'category',
						);
						$child_categories  = get_categories( $cats );
						foreach ( $child_categories As $Category ) {
							$strLink = esc_url( get_category_link( $Category->term_id ) ); ?>
                            <li><a href="<?php echo $strLink ?>"><?php echo $Category->name ?></a></li>
						<?php } ?>
                    </ul>
				<?php } ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="article-block">
                        <div class="row">
                            <div class="col-md-5 col-xs-12">
                                <div class="image">
									<?php the_post_thumbnail( 'article-thumb' ); ?>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <div class="article-info">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="article-footer">
                                    <div class="date pull-left"><?php the_date( 'd.m.Y' ); ?> г.</div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-default btn-rounded pull-right">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endwhile;
				else: echo '<p>Нет записей.</p>'; endif; ?>
				<?php pagination(); ?>
            </div>
            <!--/div-->
        </div>
    </section>
<?php get_footer(); ?>