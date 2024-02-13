<?php


?>

<section class="banner pt-52 pb-40 relative bg-cover bg-center bg-no-repeat h-full bg-primary-900"
    style="background-image: url('<?= cutme_load_image('breadcrumb-banner.svg'); ?>')">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col w-full lg:w-5/12 mx-auto">
            <h1 class="block text-center literata font-medium text-white text-3xl lg:text-[55px] lg:leading-[65px] mb-6">
                <?= get_the_title(); ?>
            </h1>
            <p class="text-lg text-white text-center">
                <?= get_the_content(); ?>
            </p>
        </div>
    </div>
</section>