<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-white">
            <div class="container-fluid">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/japan-logo.png" alt="Logo" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-evenly" id="navbarNav">
                    <?php $menuItems = wp_get_nav_menu_items('main'); ?>
                    <ul class="navbar-nav fs-5 fw-bold">
                        <?php
                        foreach ($menuItems as $menuItem) { ?>
                            <li class="nav-item ms-5">
                                <a class="nav-link" aria-current="page" href="<?= $menuItem->url ?>"><?= $menuItem->title ?></a>
                            </li>
                        <?php  }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="mainTitle text-uppercase py-5">Japan Travel</h1>

    </header>

    <?php wp_body_open(); ?>