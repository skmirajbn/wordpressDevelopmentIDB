<?php
get_header();
?>
<!-- Banner Area -->
<div class="container md:px-0 px-4 md:pt-16">
  <div id="banner" class="flex md:flex-row flex-col gap-14 py-12 text-white">
    <div class="md:w-1/2 w-full md:space-y-4 md:mt-6 text-center md:text-left">
      <p class="text-sm font-light md:text-lg">
        <?= get_theme_mod('banner_top_text') ?>
      </p>
      <h2 class="text-3xl font-bold pb-5 md:text-6xl">
        <?= get_theme_mod('banner_text') ?>
      </h2>
      <p class="text-sm font-light pb-5 md:text-lg">
        <?= get_theme_mod('banner_des_text') ?>
      </p>
      <button class="Btn btn-orange">Purchase</button>
    </div>
    <div class="md:w-1/2 w-full relative z-0">
      <img src="<?= get_theme_mod('banner_settings') ?>" alt="" />
      <img class="absolute right-0 top-0 w-20 -z-10 lg:right-20 lg:top-10"
        src="<?= get_template_directory_uri() ?>/dist/img/dots.svg" alt="" />
    </div>
  </div>
</div>
</header>
<!-- Featured Bikes In This Year -->
<section id="featured_bikes" class="py-12 px-4 md:p-0 md:mt-24 scroll-mt-32">
  <div class="container">
    <div id="featured_bikes_text">
      <h2 class="text-3xl text-center font-bold">Featured Bikes in This Year</h2>
      <p class="text-center text-orange-500 font-semibold text-sm">Best bike Collection</p>
      <div class="h-px w-16 bg-orange-500 mx-auto"></div>
    </div>
    <div id="featured_bikes_images" class="flex md:flex-row flex-col mt-12">
      <img class="md:w-1/3 w-full px-12 object-contain"
        src="<?= get_template_directory_uri() ?>/dist/img/Honda-cbr-featured.jpg" alt="" />
      <img class="md:w-1/3 w-full md:mt-0 mt-8 px-12 object-contain filter grayscale"
        src="<?= get_template_directory_uri() ?>/dist/img/Honda-cbr-featured.jpg" alt="" />
      <img class="md:w-1/3 w-full md:mt-0 mt-8 px-12 object-contain"
        src="<?= get_template_directory_uri() ?>/dist/img/Honda-cbr-featured.jpg" alt="" />
    </div>
  </div>
</section>
<!-- Latest News Section -->
<section id="latest_news" class="dark:text-white pb-12 md:mt-24 scroll-mt-32">
  <div class="container">
    <h2 class="text-3xl text-center font-bold">Latest News</h2>
    <!-- News Card Container -->
    <div id="news_cards" class="flex md:flex-row flex-col text-center md:text-left gap-8 md:px-8 p-4 mt-12">
      <!-- News Card -->
      <div class="md:w-1/3 w-full">
        <img class="w-full h-56 object-cover rounded-lg"
          src="<?= get_template_directory_uri() ?>/dist/img/latest-news-1.png" alt="" />
        <h3 class="text-2xl font-bold mt-5">Ducati XDIAVEL S-73</h3>
        <p class="text-sm text-gray-500 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iste
          vitae harum ad accusantium sequi deserunt quae doloribus ducimus nulla. Exercitationem perspiciatis quaerat
          est nihil!</p>
        <button class="text-white bg-orange-500 px-4 py-1 rounded-sm mt-5">Read More</button>
      </div>
      <!-- News Card -->
      <div class="md:w-1/3 w-full">
        <img class="w-full h-56 object-cover rounded-lg"
          src="<?= get_template_directory_uri() ?>/dist/img/latest-news-2.png" alt="" />
        <h3 class="text-2xl font-bold mt-5">Ducati XDIAVEL S-73</h3>
        <p class="text-sm text-gray-500 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iste
          vitae harum ad accusantium sequi deserunt quae doloribus ducimus nulla. Exercitationem perspiciatis quaerat
          est nihil!</p>
        <button class="text-white bg-orange-500 px-4 py-1 rounded-sm mt-5">Read More</button>
      </div>
      <!-- News Card -->
      <div class="md:w-1/3 w-full">
        <img class="w-full h-56 object-cover rounded-lg"
          src="<?= get_template_directory_uri() ?>/dist/img/latest-news-3.png" alt="" />
        <h3 class="text-2xl font-bold mt-5">Ducati XDIAVEL S-73</h3>
        <p class="text-sm text-gray-500 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iste
          vitae harum ad accusantium sequi deserunt quae doloribus ducimus nulla. Exercitationem perspiciatis quaerat
          est nihil!</p>
        <button class="text-white bg-orange-500 px-4 py-1 rounded-sm mt-5">Read More</button>
      </div>
    </div>
  </div>
</section>
<!-- Happy Clients Section -->
<section id="happy_clients" class="mt-12 scroll-mt-32">
  <div class="container">
    <h2 class="text-3xl text-center font-bold">Happy <span class="text-orange-500">Clients says</span></h2>
    <!-- Clients Cards Container -->
    <div id="clients_cards" class="flex md:flex-row flex-col mt-12 gap-12 px-5">
      <!-- Client Card -->
      <div class="md:w-1/3 w-full rounded-md ring-gray-300 ring-1 p-5">
        <div class="w-5/12 mx-auto rounded-full overflow-hidden" style="aspect-ratio: 1;">
          <img class="h-full w-full object-cover" src="<?= get_theme_mod('client_image_1') ?>" alt="" />
        </div>
        <p class="text-sm text-center text-gray-500 w-2/3 mx-auto mt-5">
          <?= get_theme_mod('client_1_reviewtext') ?>
        </p>
        <!-- Ratings -->
        <div class="text-center mt-2 text-orange-500">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <!-- client Name -->
        <h5 class="text-center text-sky-500 font-bold text-sm mt-2">
          <?= get_theme_mod('client_1_name') ?>
        </h5>
        <!-- Client Designation -->
        <h5 class="text-center font-bold text-sm mt-2">
          <?= get_theme_mod('client_1_designation') ?>
        </h5>
      </div>
      <!-- Client Card -->
      <div class="md:w-1/3 w-full rounded-md ring-gray-300 ring-1 p-5">
        <div class="w-5/12 mx-auto rounded-full overflow-hidden" style="aspect-ratio: 1;">
          <img class="h-full w-full object-cover" src="<?= get_theme_mod('client_image_2'); ?>" alt="" />
        </div>
        <p class="text-sm text-center text-gray-500 w-2/3 mx-auto mt-5">
          <?= get_theme_mod('client_2_reviewtext') ?>
        </p>
        <!-- Ratings -->
        <div class="text-center mt-2 text-orange-500">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <!-- client Name -->
        <h5 class="text-center text-sky-500 font-bold text-sm mt-2">
          <?= get_theme_mod('client_2_name') ?>
        </h5>
        <!-- Client Designation -->
        <h5 class="text-center font-bold text-sm mt-2">
          <?= get_theme_mod('client_2_designation') ?>
        </h5>
      </div>
      <!-- Client Card -->
      <div class="md:w-1/3 w-full rounded-md ring-gray-300 ring-1 p-5">
        <div class="w-5/12 mx-auto rounded-full overflow-hidden" style="aspect-ratio: 1;">
          <img class="h-full w-full object-cover" src="<?= get_theme_mod('client_image_3'); ?>" alt="" />
        </div>
        <p class="text-sm text-center text-gray-500 w-2/3 mx-auto mt-5">
          <?= get_theme_mod('client_3_reviewtext') ?>
        </p>
        <!-- Ratings -->
        <div class="text-center mt-2 text-orange-500">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <!-- client Name -->
        <h5 class="text-center text-sky-500 font-bold text-sm mt-2">
          <?= get_theme_mod('client_3_name') ?>
        </h5>
        <!-- Client Designation -->
        <h5 class="text-center font-bold text-sm mt-2">
          <?= get_theme_mod('client_3_designation') ?>
        </h5>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Sectoin -->
<section id="pricing" class="mt-20 scroll-mt-32">
  <div class="container">
    <!-- component -->
    <div class="w-full flex flex-col items-center">
      <div class="text-center font-semibold">
        <h1 class="text-3xl text-center font-bold">
          <span class="text-orange-500 tracking-wide">Flexible </span>
          <span>Plans</span>
        </h1>
        <p class="pt-6 text-xl text-gray-400 font-normal w-full px-8 md:w-full">
          Choose a plan that works best for you and<br />
          your team.
        </p>
      </div>
      <div class="md:pt-24 flex flex-col md:flex-row w-full justify-center px-4 md:px-0">
        <!-- Basic Card -->
        <div
          class="md:w-96 w-full p-8 mt-8 md:mt-0 bg-gray-50 dark:bg-inherit md:bg-inherit text-center rounded-3xl md:pr-16 shadow-xl dark:border-4 dark:text-white">
          <h1 class="text-black font-semibold text-2xl dark:text-white">Basic</h1>
          <p class="pt-2 tracking-wide">
            <span class="text-gray-400 align-top">$ </span>
            <span class="text-3xl font-semibold">10</span>
            <span class="text-gray-400 font-medium">/ user</span>
          </p>
          <hr class="mt-4 border-1" />
          <div class="pt-8">
            <p class="font-semibold text-gray-400 text-left">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> Get started with <span class="text-black">messaging</span> </span>
            </p>
            <p class="font-semibold text-gray-400 text-left pt-5">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> Flexible <span class="text-black">team meetings</span> </span>
            </p>
            <p class="font-semibold text-gray-400 text-left pt-5">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> <span class="text-black">5 TB</span> cloud storage </span>
            </p>

            <a href="#" class="">
              <p class="md:w-full px-8 md:px-0 mx-auto py-4 bg-orange-500 mt-8 rounded-xl text-white">
                <span class="font-medium"> Choose Plan </span>
                <span class="pl-2 material-icons align-middle text-sm"> east </span>
              </p>
            </a>
          </div>
        </div>
        <!-- StartUp Card -->
        <div
          class="md:w-80 w-full p-8 mt-8 md:mt-0 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white transform md:scale-125 dark:border-4 dark:text-white">
          <h1 class="text-white font-semibold text-2xl">Startup</h1>
          <p class="pt-2 tracking-wide">
            <span class="text-gray-400 align-top">$ </span>
            <span class="text-3xl font-semibold">24</span>
            <span class="text-gray-400 font-medium">/ user</span>
          </p>
          <hr class="mt-4 border-1 border-gray-600" />
          <div class="pt-8">
            <p class="font-semibold text-gray-400 text-left">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> All features in <span class="text-white">Basic</span> </span>
            </p>
            <p class="font-semibold text-gray-400 text-left pt-5">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> Flexible <span class="text-white">call scheduling</span> </span>
            </p>
            <p class="font-semibold text-gray-400 text-left pt-5">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> <span class="text-white">15 TB</span> cloud storage </span>
            </p>

            <a href="#" class="">
              <p class="md:w-full md:px-0 mx-auto py-4 bg-orange-500 mt-8 rounded-xl text-white">
                <span class="font-medium"> Choose Plan </span>
                <span class="pl-2 material-icons align-middle text-sm"> east </span>
              </p>
            </a>
          </div>
          <div class="absolute top-4 right-4">
            <p class="bg-orange-500 font-semibold px-4 py-1 rounded-full uppercase text-xs">Popular</p>
          </div>
        </div>
        <!-- Enterprise Card -->
        <div
          class="md:w-96 w-full p-8 mt-8 md:mt-0 bg-gray-50 dark:bg-inherit md:bg-inherit text-center rounded-3xl md:pl-16 shadow-xl dark:border-4 dark:text-white">
          <h1 class="font-semibold text-2xl">Enterprise</h1>
          <p class="pt-2 tracking-wide">
            <span class="text-gray-400 align-top">$ </span>
            <span class="text-3xl font-semibold">35</span>
            <span class="text-gray-400 font-medium">/ user</span>
          </p>
          <hr class="mt-4 border-1" />
          <div class="pt-8">
            <p class="font-semibold text-gray-400 text-left">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> All features in <span class="text-black">Startup</span> </span>
            </p>
            <p class="font-semibold text-gray-400 text-left pt-5">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> Growth <span class="text-black">oriented</span> </span>
            </p>
            <p class="font-semibold text-gray-400 text-left pt-5">
              <span class="material-icons align-middle"> done </span>
              <span class="pl-2"> <span class="text-black">Unlimited</span> cloud storage </span>
            </p>

            <a href="#" class="">
              <p class="md:w-full md:px-0 mx-auto py-4 bg-orange-500 mt-8 rounded-xl text-white">
                <span class="font-medium"> Choose Plan </span>
                <span class="pl-2 material-icons align-middle text-sm"> east </span>
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Team Section -->
<section id="team" class="mt-28 scroll-mt-24">
  <div class="container px-6 py-10 mx-auto">
    <h1 class="text-3xl text-center font-bold">Our
      <span class="text-orange-500">Executive Team</span>
    </h1>

    <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit amet
      consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at
      omnis eligendi optio eos harum.</p>

    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
      <div
        class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-orange-500 dark:border-gray-700 dark:hover:border-transparent">
        <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
          src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
          alt="" />

        <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">arthur
          melo</h1>

        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">design director</p>

        <div class="flex mt-3 -mx-2">
          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Reddit">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Facebook">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Github">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
              </path>
            </svg>
          </a>
        </div>
      </div>

      <div
        class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-orange-500 dark:border-gray-700 dark:hover:border-transparent">
        <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
          src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
          alt="" />

        <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">
          Amelia. Anderson</h1>

        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lead Developer</p>

        <div class="flex mt-3 -mx-2">
          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Reddit">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Facebook">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Github">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
              </path>
            </svg>
          </a>
        </div>
      </div>

      <div
        class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-orange-500 dark:border-gray-700 dark:hover:border-transparent">
        <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
          src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
          alt="" />

        <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Olivia
          Wathan</h1>

        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lead designer</p>

        <div class="flex mt-3 -mx-2">
          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Reddit">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Facebook">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Github">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
              </path>
            </svg>
          </a>
        </div>
      </div>

      <div
        class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-orange-500 dark:border-gray-700 dark:hover:border-transparent">
        <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
          src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
          alt="" />

        <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">John
          Doe</h1>

        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Full stack developer</p>

        <div class="flex mt-3 -mx-2">
          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Reddit">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Facebook">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
              </path>
            </svg>
          </a>

          <a href="#"
            class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
            aria-label="Github">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
              </path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ section -->
<section id="faq_section" class="mt-36">
  <div class="container px-4 md:px-0">
    <h2 class="text-3xl text-center font-bold">Frequenty Asked <span class="text-orange-500">Questions</span></h2>
    <!-- FAQ Container -->
    <div class="flex md:flex-row flex-col gap-16 mt-12">
      <!-- FAQ Featured image -->
      <div class="md:w-1/2 w-full"><img class="w-full h-full"
          src="<?= get_template_directory_uri() ?>/dist/img/faq_img.png" alt="" /></div>
      <!-- FAQ Texts -->
      <div class="md:w-1/2 w-full">
        <!-- Accordian item  -->
        <div class="collapse collapse-arrow">
          <input type="radio" name="my-accordion-2 " checked="checked" />
          <div class="collapse-title text-lg font-medium">What are the most important things I should know about
            riding a bike?</div>
          <div class="collapse-content">
            <p class="text-gray-500">Safety First! Always obey the rules of the road. Obey all traffic signals, signs,
              and laws. Get in the mindset of “driving” your bike—not just “riding” your bike. This will help you be a
              more focused and legally compliant bike rider.</p>
          </div>
        </div>
        <!-- Accordian item  -->
        <div class="collapse collapse-arrow">
          <input type="radio" name="my-accordion-2" checked="checked" />
          <div class="collapse-title text-lg font-medium">What are the most important things I should know about
            riding a bike?</div>
          <div class="collapse-content">
            <p class="text-gray-500">Safety First! Always obey the rules of the road. Obey all traffic signals, signs,
              and laws. Get in the mindset of “driving” your bike—not just “riding” your bike. This will help you be a
              more focused and legally compliant bike rider.</p>
          </div>
        </div>
        <!-- Accordian item  -->
        <div class="collapse collapse-arrow">
          <input type="radio" name="my-accordion-2" checked="checked" />
          <div class="collapse-title text-lg font-medium">What are the most important things I should know about
            riding a bike?</div>
          <div class="collapse-content">
            <p class="text-gray-500">Safety First! Always obey the rules of the road. Obey all traffic signals, signs,
              and laws. Get in the mindset of “driving” your bike—not just “riding” your bike. This will help you be a
              more focused and legally compliant bike rider.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>