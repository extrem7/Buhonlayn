<form action="" class="form" method="POST">
    <input class="hidden" name="to" value="<? echo get_field('email-form', 'option'); ?>">
    <input class="hidden" name="subject" value="<? echo get_field('subject', 'option'); ?>">
    <input class="hidden" name="from" value="<? echo get_field('from', 'option'); ?>">
    <input class="hidden" name="reply" value="<? echo get_field('reply-to', 'option'); ?>">
    <input type="text" name="name" placeholder="<? the_field('form-name', 'option') ?>" required>
    <input type="tel" name="phone" placeholder="<? the_field('form-phone', 'option') ?>" required>
    <input type="submit" name="submit" value="<? the_field('form-send', 'option') ?>">
</form>