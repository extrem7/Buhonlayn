<div class="breadcrumb">
    <div class="container">
        <a href="/">Главная</a>
        /
		<?
		$parent = null;
		if ($post->post_parent)	{
			$ancestors=get_post_ancestors($post->ID);
			$root=count($ancestors)-1;
			$parent = $ancestors[$root];
		}
		if ( $parent ):?>
            <a href="<? the_permalink( $parent ) ?>"><? echo get_the_title( $parent ) ?></a>
            /
		<? endif; ?>
        <a href="" class="disabled"><? the_title() ?></a>
    </div>
</div>