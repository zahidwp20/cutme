<?php
// Get the current post/page ID
$current_page_id = get_queried_object_id();

// Initialize an empty array to store breadcrumb items
$breadcrumbs = array();

// Add Home breadcrumb
$breadcrumbs[] = '<a href="' . esc_url(home_url('/')) . '">Home</a>';
$is_single = '<h1
class="block text-center literata font-medium text-white text-3xl lg:text-[55px] lg:leading-[65px] mb-6">Blog Details</h1>';

// Check if the current page is a single post
// if (is_single()) {
//     // Get the category of the post
//     $categories = get_the_category($current_page_id);
//     if (!empty($categories)) {
//         $category = $categories[0];
//         // Add the category breadcrumb
//         $breadcrumbs[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
//     }
//     // Add the post title as the last breadcrumb
//     $breadcrumbs[] = get_the_title();
// } elseif (is_page()) {
//     // If the current page is a static page, add its title as the last breadcrumb
//     $breadcrumbs[] = get_the_title();
// }

// Output the breadcrumbs

?>

<section class="banner pt-52 pb-40 relative bg-cover bg-center bg-no-repeat h-full bg-primary-900"
    style="background-image: url('<?= cutme_load_image('breadcrumb-banner.svg'); ?>')">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col w-full lg:w-5/12 mx-auto">
            <h1
                class="block text-center literata font-medium text-white text-3xl lg:text-[55px] lg:leading-[65px] mb-6">
                <?php
                if (is_single()) {
                    echo $is_single;
                    // Get the category of the post
                    $categories = get_the_category($current_page_id);
                    if (!empty($categories)) {
                        $category = $categories[0];
                        // Add the category breadcrumb
                        $breadcrumbs[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                    }
                    // Add the post title as the last breadcrumb
                    $breadcrumbs[] = get_the_title();
                } elseif (is_page()) {
                    // If the current page is a static page, add its title as the last breadcrumb
                    $breadcrumbs[] = get_the_title();
                }
                if (!empty($breadcrumbs)) {
                    echo '<div class="breadcrumbs text-white text-center">';
                    echo implode(' <span class="separator">/</span> ', $breadcrumbs);
                    echo '</div>';
                }
                ?>
            </h1>
            <!-- <p class="text-lg text-white text-center">
                <?= get_the_content(); ?>
            </p> -->
        </div>
    </div>
    <?php ?>
</section>