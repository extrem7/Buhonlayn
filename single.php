<?
get_header() ?>
<style>
    .footer {
        margin-top: 50px;
    }

    h1 {
        padding-top: 10px;
    }
</style>
<div class="breadcrumb">
    <div class="container">
        <a href="/">Главная</a>
        /

		<?
		$parent = null;
		$parent = get_the_category()[0]->cat_ID;
		if($parent) {
			$parent = explode( '|', get_category_parents( $parent, true, '|' ) )[0];
		}
		$dom = new DOMDocument;
		if(get_the_category()[0]->cat_ID==7) {
			$dom->loadHTML( mb_convert_encoding( $parent, 'HTML-ENTITIES', 'UTF-8' ) );
			$xpath = new DOMXPath( $dom );
			$nodes = $xpath->query( "//a" );
			foreach ( $nodes as $node ) {
				$href = $node->getAttribute( 'href' ) . '.html';
				$node->setAttribute( 'href', $href );
			}
			if($parent) {
				echo $dom->saveHTML();
			}
		}  else if($parent) {
		    echo $parent;
        }
		if ( $parent ): ?>
			<?
            if(is_category(7))
            echo $dom->saveHTML(); ?>
            /
		<? endif; ?>
        <a href="" class="disabled"><?php the_title() ?></a>
    </div>
</div>
<main>
    <div class="container">
		<? echo apply_filters( 'the_content', get_post_field( 'post_content', $id ) ); ?>
    </div>
</main>
<? get_footer() ?>
