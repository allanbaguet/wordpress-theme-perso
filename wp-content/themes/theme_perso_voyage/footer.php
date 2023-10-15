<div class="imgFooter"></div>

<section id="sectionColor">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center text-white my-5">
                <h2 class="text-uppercase">Découvrez</h2>
                <h4>Articles les plus populaires</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="69" height="8" viewBox="0 0 69 8" fill="none">
                    <path d="M1.43701 0.710938C1.43701 0.710938 6.037 6.08887 12.203 6.08887C18.369 6.08887 19.215 2.05591 24.503 2.05591C29.495 2.05591 29.695 6.08887 35.269 6.08887C40.843 6.08887 40.639 2.05591 46.035 2.05591C51.431 2.05591 53.86 6.08887 58.335 6.08887C63.813 6.08887 67.563 0.710938 67.563 0.710938" stroke="#08AEEA" stroke-width="2" />
                </svg>

                <?php $popularPosts = get_posts(array(
                    'numberposts' => 3,
                )); ?>
                <div class="row">
                    <?php foreach ($popularPosts as $popularPost) { ?>
                        <?php $popularPostId = $popularPost->ID; ?>
                        <div class="col-lg-4 py-3">
                            <div class="card">
                                <a class="link-offset-2 link-underline link-underline-opacity-0" href="<?= get_permalink($popularPostId); ?>">
                                    <img src="<?= get_the_post_thumbnail_url($popularPostId) ?>" class="card-img-top img-fluid" alt="Image de l'article">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase"><?= $popularPost->post_title ?></h5>
                                        <p class="card-text"><?= $popularPost->post_excerpt ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</section>

<footer id="colorFooter">
    <div class="container-fluid">
        <div class="row text-center text-white">
            <nav class="col-4">
                <h5 class="fw-bold">Accès rapide</h5>
                <?php $menuItems = wp_get_nav_menu_items('footer'); ?>
                <ul class="navbar-nav fw-semibold">
                    <?php
                    foreach ($menuItems as $menuItem) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= $menuItem->url ?>"><?= $menuItem->title ?></a>
                        </li>
                    <?php  }
                    ?>
                </ul>
            </nav>
            <div class="col-4">
                <h5 class="fw-bold">Contactez-nous</h5>
                <p>70 rue des jacobins</p>
                <p>80000 Amiens</p>
                <p>contactus@lamanu.fr</p>
            </div>
            <div class="col-4">
                <p>Inscrivez-vous à notre newsletter</p>
                <form>
                    <div class="d-flex w-75 ms-5">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre email" aria-describedby="emailHelp">
                        <button type="submit" class="btn" id="btnNewsletter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>


</html>