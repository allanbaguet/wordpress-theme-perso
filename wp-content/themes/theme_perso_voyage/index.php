<!-- page d'accueil -->


<?php get_header(); ?>

<div class="container py-5">
    <div class="row py-5">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile;
    endif; ?>

    </div>
</div>




<!-- <main>
    <div class="container-fluid py-5">
        <div class="row py-5">
            <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/img/image_accueil_one.jpg" class="card-img-top img-fluid imgAccueil" alt="img article"></div>
            <div class="col-6 text-center py-5">
                <h2 class="text-uppercase text-secondary">Decouvrez</h2>
                <h4 class="text-uppercase fw-bold">Nos plus belles destinations</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="69" height="8" viewBox="0 0 69 8" fill="none">
                    <path d="M1.43701 0.710938C1.43701 0.710938 6.037 6.08887 12.203 6.08887C18.369 6.08887 19.215 2.05591 24.503 2.05591C29.495 2.05591 29.695 6.08887 35.269 6.08887C40.843 6.08887 40.639 2.05591 46.035 2.05591C51.431 2.05591 53.86 6.08887 58.335 6.08887C63.813 6.08887 67.563 0.710938 67.563 0.710938" stroke="#08AEEA" stroke-width="2" />
                </svg>
                <p class="text-center fs-5 text-secondary fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor explicabo quasi reiciendis necessitatibus nulla officia ut nemo eligendi voluptate saepe possimus, at ducimus quo aspernatur magnam beatae id cupiditate animi!</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-6 text-center py-5">
                <h2 class="text-uppercase text-secondary">Decouvrez</h2>
                <h4 class="text-uppercase fw-bold">Nos plus belles destinations</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="69" height="8" viewBox="0 0 69 8" fill="none">
                    <path d="M1.43701 0.710938C1.43701 0.710938 6.037 6.08887 12.203 6.08887C18.369 6.08887 19.215 2.05591 24.503 2.05591C29.495 2.05591 29.695 6.08887 35.269 6.08887C40.843 6.08887 40.639 2.05591 46.035 2.05591C51.431 2.05591 53.86 6.08887 58.335 6.08887C63.813 6.08887 67.563 0.710938 67.563 0.710938" stroke="#08AEEA" stroke-width="2" />
                </svg>
                <p class="text-center fs-5 text-secondary fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor explicabo quasi reiciendis necessitatibus nulla officia ut nemo eligendi voluptate saepe possimus, at ducimus quo aspernatur magnam beatae id cupiditate animi!</p>
            </div>
            <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/img/image_accueil_two.jpg" class="card-img-top img-fluid imgAccueil" alt="img article"></div>
        </div>
        <div class="row py-5">
            <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/img/image_accueil_three.jpg" class="card-img-top img-fluid imgAccueil" alt="img article"></div>
            <div class="col-6 text-center py-5">
                <h2 class="text-uppercase text-secondary">Decouvrez</h2>
                <h4 class="text-uppercase fw-bold">Nos plus belles destinations</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="69" height="8" viewBox="0 0 69 8" fill="none">
                    <path d="M1.43701 0.710938C1.43701 0.710938 6.037 6.08887 12.203 6.08887C18.369 6.08887 19.215 2.05591 24.503 2.05591C29.495 2.05591 29.695 6.08887 35.269 6.08887C40.843 6.08887 40.639 2.05591 46.035 2.05591C51.431 2.05591 53.86 6.08887 58.335 6.08887C63.813 6.08887 67.563 0.710938 67.563 0.710938" stroke="#08AEEA" stroke-width="2" />
                </svg>
                <p class="text-center fs-5 text-secondary fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor explicabo quasi reiciendis necessitatibus nulla officia ut nemo eligendi voluptate saepe possimus, at ducimus quo aspernatur magnam beatae id cupiditate animi!</p>
            </div>
        </div>
    </div>
</main> -->

<?php get_footer(); ?>