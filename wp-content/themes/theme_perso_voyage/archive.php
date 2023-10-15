<!-- partie catégorie -->
<?php get_header(); ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center my-5">
                <h2><?= get_the_archive_title() ?></h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="69" height="8" viewBox="0 0 69 8" fill="none">
                    <path d="M1.43701 0.710938C1.43701 0.710938 6.037 6.08887 12.203 6.08887C18.369 6.08887 19.215 2.05591 24.503 2.05591C29.495 2.05591 29.695 6.08887 35.269 6.08887C40.843 6.08887 40.639 2.05591 46.035 2.05591C51.431 2.05591 53.86 6.08887 58.335 6.08887C63.813 6.08887 67.563 0.710938 67.563 0.710938" stroke="#08AEEA" stroke-width="2" />
                </svg>
                <p><?= get_the_excerpt() ?></p>
                <?php if (have_posts()) : ?>
                <div class="row justify-content-center text-center">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 d-flex py-3">
                        <div class="card">
                            <a href="<?= the_permalink(); ?>">
                                <img src="<?= get_the_post_thumbnail_url($post) ?>" class="card-img-top img-fluid h-75" alt="img article">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase"><a class="link-offset-2 link-underline link-underline-opacity-0" href="<?= the_permalink(); ?>"><?= $post->post_title ?></a></h5>
                                <p class="card-text"><?= $post->post_excerpt ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();
?>
</body>

</html>