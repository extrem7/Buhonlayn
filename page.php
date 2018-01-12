<?
get_header() ?>
<style>
    h1{
        padding-top: 0;
    }
</style>
<?get_template_part( 'breadcrumb' ) ?>
<main>
    <div class="container">
		<? echo apply_filters( 'the_content', get_post_field( 'post_content', $id ) ); ?>
    </div>
</main>
<? get_footer() ?>
