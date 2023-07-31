<footer class="mt-12 bg-black text-white py-10 font-light">
    <?php
    wp_footer();
    ?>
    <div class="container flex md:flex-row flex-col text-center md:text-left justify-between">
        <div>
            <div class="md:space-x-3 text-sm flex md:flex-row flex-col">
                <a href="#">Download Now</a>
                <a href="#">Licence</a>
            </div>
            <div class="md:space-x-8 mt-3 flex md:flex-row flex-col">
                <a href="">About</a>
                <a href="">Features</a>
                <a href="">Pricing</a>
                <a href="">Careers</a>
                <a href="">Help</a>
                <a href="">Privacy Policy</a>
            </div>
            <p class="text-sm mt-8">© 2023 bike. All rights reserved</p>
        </div>
        <div class="space-y-2 flex flex-col items-center mt-8 md:mt-0">
            <h5 class="">Get the App</h5>
            <img class="w-fit" src="<?= get_template_directory_uri() ?>/dist/img/App Store Badge.png" alt="" />
            <img class="w-fit" src="<?= get_template_directory_uri() ?>/dist/img/Google Play Badge.png" alt="" />
        </div>
    </div>
</footer>
</body>

</html>