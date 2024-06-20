<?php
// Template Name: Contact
get_header();
$footer = get_field('footer');
$footer2 = get_field('footer_2');
?>

<section class="contactPage">
    <div class="contactBox container">
        <div class="contact-page-form">
            <?php echo do_shortcode('[contact-form-7 id="1e2fff2" title="Contact form 1" html_class="portfolio-contact-form"]')?>
        </div>

    </div>
</section>


<?php
get_footer();