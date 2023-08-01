<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_title(); ?>

    <?php
    wp_head();
    ?>
    <!-- <link rel="stylesheet" href="./css/all.css" /> -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/dist/css/output.css" />
    <script defer>
        function toggleDark() {
            let html = document.querySelector("html");
            html.classList.toggle("dark");
        }
    </script>
</head>
<?php
$classes = get_body_class();
$classlist = implode(' ', $classes);
?>

<body class="dark:bg-[#081C24] dark:text-white <?= $classlist ?>">
    <header class="bg-cyan-800 dark:bg-[#081C24]">
        <!-- Nav Area Fixed -->
        <div class="md:fixed md:z-10 dark:md:bg-[#081C24] md:bg-[#155E75] w-full">
            <nav class="container md:flex md:space-x-12 md:justify-end py-5 text-center md:items-center">
                <?= wp_nav_menu(array(
                    "theme_location" => "primary",
                    "menu_class" => "flex text-white md:space-x-5 justify-center md:flex-row flex-col text-center",
                    "menu_id" => "main_menu",
                )) ?>
                <!-- <ul class="flex text-white md:space-x-5 justify-center md:flex-row flex-col text-center">
          <button class="dark:hidden" onclick="toggleDark()"><i class="fa-regular fa-moon"></i></button>
          <button class="dark:block hidden" onclick="toggleDark()"><i class="fa-solid fa-sun"></i></button>
          <li class="hover:text-orange-500 mt-4 md:mt-0"><a href="#">Home</a></li>
          <li class="hover:text-orange-500"><a href="#featured_bikes">Featured</a></li>
          <li class="hover:text-orange-500"><a href="#latest_news">Latest News</a></li>
          <li class="hover:text-orange-500"><a href="#latest_news">Clients</a></li>
          <li class="hover:text-orange-500"><a href="#latest_news">Pricing</a></li>
          <li class="hover:text-orange-500"><a href="#latest_news">Our Team</a></li>
          <li class="hover:text-orange-500"><a href="#latest_news">FAQ</a></li>
          <li class="hover:text-orange-500"><a href="#">Contact</a></li>
        </ul> -->
                <a href="<?= get_site_url() ?>/wp-admin"><button class="Btn btn-orange mt-4 md:mt-0">Login</button></a>
            </nav>
        </div>