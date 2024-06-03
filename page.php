<?phpget_header();
while(have_posts()){
    the_post();?>
    <p>this content is page.php</p>
    <h2><?php the_title();?></h2>
    <?php the_content();?>
    <hr>
    <?php
}
get_footer();
?>