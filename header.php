<!DOCTYPE html>
<html lang="<? bloginfo( 'language' ) ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? if ( is_single() || is_page() ) {
			the_title();
		} else {
			single_cat_title();
		} ?></title>
    <link href="<? path() ?>css/style.css" rel="stylesheet">
	<? wp_head() ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?
$bodyClass = "";
if ( is_front_page() ) {
	$bodyClass = "main-page";
}
if ( get_page_template_slug() == "contacts.php" ) {
	$bodyClass = "contacts-page";
}
if ( get_page_template_slug() == "services.php" ) {
	$bodyClass = "services-page";
}
if ( get_page_template_slug() == "tariff.php" ) {
	$bodyClass = "tariffs-page";
}
if(is_404()){
	$bodyClass = "page-404";
}
?>
<body class="<? echo $bodyClass ?>">
<header class="header" id="start">
    <div class="mobile">
        <div class="phone">
            <img <? the_image( 'phone-icon', 'option' ) ?>>
            <a href="tel:<? echo preg_replace( '/[^0-9]/', '', get_field( 'phone', 'option' ) ); ?>"><? the_field( 'phone', 'option' ) ?></a>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="col-md-3 logo">
            <a href="<? if ( ! is_front_page() )
				echo bloginfo( 'url' ) ?>"><img <? the_image( 'logo', 'option' ) ?>></a>
        </div>
        <div class="col-md-9">
            <div class="flex">
                <div class="mail">
                    <img <? the_image( 'email-icon', 'option' ) ?>>
                    <a href="mailto:<? the_field( 'email', 'option' ) ?>"><? the_field( 'email', 'option' ) ?></a>
                </div>
                <div class="phone">
                    <img <? the_image( 'phone-icon', 'option' ) ?>>
                    <a href="tel:<? echo preg_replace( '/[^0-9]/', '', get_field( 'phone', 'option' ) ); ?>"><? the_field( 'phone', 'option' ) ?></a>
                </div>
                <a href="#call-back" data-toggle="modal" class="callback"><? the_field( 'callback', 'option' ) ?></a>
                <a href="<? the_field( 'gift-link', 'option' ) ?>" class="gift-icon button"></a>
                <button type="button" class="toggle-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <hr>
            <nav>
				<?
				$menu       = wp_get_nav_menu_object( 2 );
				$menu_items = wp_get_nav_menu_items( $menu );
				echo '<ul>';
				foreach ( $menu_items as $item ) {
					if ( $item->menu_item_parent == 0 ) {
						echo '<li><a href="' . $item->url . '"  class="drop-open">';
						echo $item->title;
						echo '</a>';
						$sub_items = [];
						foreach ( $menu_items as $i ) {
							if ( $i->menu_item_parent == $item->ID ) {
								array_push( $sub_items, $i );
							}
						}
						if ( ! empty( $sub_items ) ) {
							$pieces = array_chunk( $sub_items, ceil( count( $sub_items ) / 2 ) + 2 );

							$left  = $pieces[0];
							$right = $pieces[1];
							echo '<div class="dropdown-menu"><div class="wrap"><ul>';
							if(!empty($left)) {
								foreach ( $left as $sub_item ) {
									echo '<li><a href="' . $sub_item->url . '">' . $sub_item->title . '</a>';
									$sub_sub_items = [];
									foreach ( $menu_items as $i_sub ) {
										if ( $i_sub->menu_item_parent == $sub_item->ID ) {
											array_push( $sub_sub_items, $i_sub );
										}
									}
									echo '<ul>';
									foreach ( $sub_sub_items as $sub_sub_item ) {
										echo '<li><a href="' . $sub_sub_item->url . '">' . $sub_sub_item->title . '</a></li>';
									}
									echo '</ul>';
									echo '</li>';
								}
							}
							echo '</ul><ul>';
							if(!empty($right)) {
								foreach ( $right as $sub_item ) {
									echo '<li><a href="' . $sub_item->url . '">' . $sub_item->title . '</a>';
									$sub_sub_items = [];
									foreach ( $menu_items as $i_sub ) {
										if ( $i_sub->menu_item_parent == $sub_item->ID ) {
											array_push( $sub_sub_items, $i_sub );
										}
									}
									echo '<ul>';
									foreach ( $sub_sub_items as $sub_sub_item ) {
										echo '<li><a href="' . $sub_sub_item->url . '">' . $sub_sub_item->title . '</a></li>';
									}
									echo '</ul>';
									echo '</li>';
								}
							}
							echo '</ul></div></div>';
						}
						echo '</li>';
					}
				}
				echo '</ul>';
				//pre($menu_items) ?>
            </nav>
        </div>
    </div>
</header>
<aside class="sidebar">
    <a href="" class="close-menu"></a>
    <div class="mobile">
        <div class="phone">
            <img <? the_image( 'phone-icon', 'option' ) ?>>
            <a href="tel:<? echo preg_replace( '/[^0-9]/', '', get_field( 'phone', 'option' ) ); ?>"><? the_field( 'phone', 'option' ) ?></a>
        </div>
        <div class="mail">
            <img <? the_image( 'email-icon', 'option' ) ?>>
            <a href="mailto:<? the_field( 'email', 'option' ) ?>"><? the_field( 'email', 'option' ) ?></a>
        </div>
        <a href="#call-back" data-toggle="modal" class="callback"><? the_field( 'callback', 'option' ) ?></a>
		<?
		$menu       = wp_get_nav_menu_object( 2 );
		$menu_items = wp_get_nav_menu_items( $menu );
		echo '<ul class="menu">';
		foreach ( $menu_items as $item ) {
			if ( $item->menu_item_parent == 0 ) {
				echo '<li><a href="' . $item->url . '" data-toggle="dropdown">';
				echo $item->title;
				echo '</a>';
				$sub_items = [];
				foreach ( $menu_items as $i ) {
					if ( $i->menu_item_parent == $item->ID ) {
						array_push( $sub_items, $i );
					}
				}
				if ( ! empty( $sub_items ) ) {
					$pieces = array_chunk( $sub_items, ceil( count( $sub_items ) / 2 ) + 2 );

					$left  = $pieces[0];
					$right = $pieces[1];
					echo '<div class="dropdown-menu"><div class="wrap"><ul>';
					if(!empty($left)) {
						foreach ( $left as $sub_item ) {
							echo '<li><a href="' . $sub_item->url . '">' . $sub_item->title . '</a>';
							$sub_sub_items = [];
							foreach ( $menu_items as $i_sub ) {
								if ( $i_sub->menu_item_parent == $sub_item->ID ) {
									array_push( $sub_sub_items, $i_sub );
								}
							}
							echo '<ul>';
							foreach ( $sub_sub_items as $sub_sub_item ) {
								echo '<li><a href="' . $sub_sub_item->url . '">' . $sub_sub_item->title . '</a></li>';
							}
							echo '</ul>';
							echo '</li>';
						}
					}
					echo '</ul><ul>';
					if(!empty($right)) {
						foreach ( $right as $sub_item ) {
							echo '<li><a href="' . $sub_item->url . '">' . $sub_item->title . '</a>';
							$sub_sub_items = [];
							foreach ( $menu_items as $i_sub ) {
								if ( $i_sub->menu_item_parent == $sub_item->ID ) {
									array_push( $sub_sub_items, $i_sub );
								}
							}
							echo '<ul>';
							foreach ( $sub_sub_items as $sub_sub_item ) {
								echo '<li><a href="' . $sub_sub_item->url . '">' . $sub_sub_item->title . '</a></li>';
							}
							echo '</ul>';
							echo '</li>';
						}
					}
					echo '</ul></div></div>';
				}
				echo '</li>';
			}
		}
		echo '</ul>';
		//pre($menu_items) ?>
        <hr>
    </div>
	<?
	wp_nav_menu( [
		'menu'       => 'Cайдбар',
		'container'  => '',
		'menu_class' => 'desktop',
		'menu_id'    => '',
	] )
	?>
</aside>