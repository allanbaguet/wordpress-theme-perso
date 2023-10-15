<!-- page d'article -->
<?php
$thumbnail_id = get_post_thumbnail_id();
$thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

$category = get_the_category(); // Cette fonction récupère les catégories auxquelles appartient l'article en cours
$args = array(
    'posts_per_page' => 3,
    'category_name' => $category[0]->cat_name,
    'post__not_in' => array(get_the_ID()), // Exclure l'article en cours, sinon 3 articles s'affichent dans la partie gauche ET dans la partie droite
);
$wp_query_related = new WP_Query($args);
?>

<?php get_header(); ?>
<section>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-3">
                <h5>Sur le même sujet</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="69" height="8" viewBox="0 0 69 8" fill="none">
                    <path d="M1.43701 0.710938C1.43701 0.710938 6.037 6.08887 12.203 6.08887C18.369 6.08887 19.215 2.05591 24.503 2.05591C29.495 2.05591 29.695 6.08887 35.269 6.08887C40.843 6.08887 40.639 2.05591 46.035 2.05591C51.431 2.05591 53.86 6.08887 58.335 6.08887C63.813 6.08887 67.563 0.710938 67.563 0.710938" stroke="#08AEEA" stroke-width="2" />
                </svg>
                <?php if ($wp_query_related->have_posts()) : while ($wp_query_related->have_posts()) : $wp_query_related->the_post(); ?>
                    <div>
                        <a href="<?= the_permalink(); ?>">
                            <img class="img-fluid imgArticleLeft" src="<?= get_the_post_thumbnail_url($post) ?>" alt="<?= $thumbnail_alt ?>">
                        </a>
                        <h6 class="py-2 text-primary text-uppercase"><a class="link-offset-2 link-underline link-underline-opacity-0" href="<?= the_permalink(); ?>"><?= $post->post_title ?></a></h6>
                    </div>
                <?php endwhile;
                endif; ?>
            </div>

            <div class="col-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2 class="text-primary text-uppercase"><?php the_title(); ?></h2>
                    <p><?php the_author(); ?> - <?php the_time(get_option('date_format')); ?></p>
                    <div class="py-4"> <?php the_excerpt(); ?> </div>
                    <img class="img-fluid" id="imgArticle" src="<?= get_the_post_thumbnail_url($post) ?>" alt="<?= $thumbnail_alt ?>">
                    <div class="py-4"><?php the_content(); ?></div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
</body>

</html>