<footer class="footer">
    <div class="container">
        <?
        wp_nav_menu([
            'menu' => 'Футер',
            'container' => '',
            'menu_class' => 'menu',
            'menu_id' => '',
        ])
        ?>
        <div class="col-lg-3 col-md-4">
            <div class="phone">
                <img <? the_image('footer-phone-icon', 'option') ?>>
                <a href="tel:<? echo preg_replace('/[^0-9]/', '', get_field('phone', 'option')); ?>"><? the_field('phone', 'option') ?></a>
            </div>
            <div class="mail">
                <img <? the_image('footer-email-icon', 'option') ?>>
                <a href="mailto:<? the_field('email', 'option') ?>"><? the_field('email', 'option') ?></a>
            </div>
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="map">
                <img <? the_image('footer-location-icon', 'option') ?>>
                <p><? the_field('location', 'option') ?></p>
            </div>
            <div class="time">
                <img <? the_image('footer-time-icon', 'option') ?>>
                <p><? the_field('time', 'option') ?></p>
            </div>
        </div>
    </div>
    <div class="copyright"><? the_field('copyright', 'option') ?></div>
</footer>
<div id="call-back" class="modal fade call-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"></button>
                <p class="section-title"><? the_field('title', 'option') ?></p>
                <? get_template_part('form') ?>
            </div>
        </div>
    </div>
</div>
<div id="thanks" class="modal fade thanks-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"></button>
                <p class="section-title"><? the_field('title', 'option') ?></p>
                <p><? the_field('thanks-text', 'option') ?></p>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<? path() ?>ES6/main.js"></script>
<? wp_footer() ?>
</body>
</html>