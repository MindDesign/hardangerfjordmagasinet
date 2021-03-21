<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HardangerFjordMagasinet
 * @since HardangerFjordMagasinet 1.0
 */

get_header(); ?>


    <section class="max-w-5xl" id="frontpage-featured">
        <div class="relative">
            <img src="/wp-content/uploads/2021/03/forsidebilde.jpg" class="w-full h-auto" alt="">
            <div class="max-w-xl absolute left-5 bottom-5">
                <h1 class="mb-3 text-shadow text-4xl text-white">Overskrift på artikkel</h1>
                <p class="text-white text-xl">Ingress på artikkel kommer her. Ingress på artikkel kommer her. Ingress på artikkel kommer her. Ingress på artikkel kommer her.</p>
            </div>
        </div>
        <div class="my-4" style="height: 40px; width: 100%; background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/featured-border.png' ?>); background-repeat: repeat-x"></div>
    </section>

    <section class="max-w-5xl">
        <ul class="grid grid-cols-3 gap-8" id="frontpage-article-list">
           <li class="col">
               <img src="/wp-content/uploads/2021/03/forsidebilde.jpg" class="w-full h-auto" alt="">
               <div class="">
                   <h2 class="mt-2 mb-3 text-xl">Tittel til artikkel</h2>
                   <p>Hucermai ortiondacem vis imissin atiqui facena, comnicaucit, confecris poricat vervidepublia musqui pernia restesc esilibut vivis, diis</p>
               </div>
           </li>

            <li class="">
                <img src="/wp-content/uploads/2021/03/forsidebilde.jpg" class="w-full h-auto" alt="">
                <div class="">
                    <h2 class="mt-2 mb-3 text-xl">Tittel til artikkel</h2>
                    <p>Hucermai ortiondacem vis imissin atiqui facena, comnicaucit, confecris poricat vervidepublia musqui pernia restesc esilibut vivis, diis</p>
                </div>
            </li>

            <li class="">
                <img src="/wp-content/uploads/2021/03/forsidebilde.jpg" class="w-full h-auto" alt="">
                <div class="">
                    <h2 class="mt-2 mb-3 text-xl">Tittel til artikkel</h2>
                    <p>Hucermai ortiondacem vis imissin atiqui facena, comnicaucit, confecris poricat vervidepublia musqui pernia restesc esilibut vivis, diis</p>
                </div>
            </li>
        </ul>
    </section>

    <section class="my-20 max-w-5xl">
        <h2 class="my-4 text-2xl font-bold text-center">Kommuner</h2>

        <div class="logo-wrapper overflow-hidden">
            <ul class="flex">
                <li class="">
                    <a href="#" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                        </svg>
                    </a>
                </li>
                <li class="mx-12">
                    <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
                </li>
                <li class="mx-12">
                    <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
                </li>
                <li class="mx-12">
                    <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
                </li>
                <li class="mx-12">
                    <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
                </li>
                <li class="mx-12">
                    <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
                </li>
                <li class="mx-12">
                    <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
                </li>
                <li class="mx-12">
                    <a href="#"><img src="https://via.placeholder.com/157x59.png/000000/ffffff" class="" alt=""></a>
                </li>
                <li class="">
                    <a href="#" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </section>

<?php
if ( have_posts() ) {

    // Load posts loop.
    while ( have_posts() ) {
        the_post();

        get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
    }

    // Previous/next page navigation.
    //hardangerfjordmagasinet_the_posts_navigation();

} else {

    // If no content, include the "No posts found" template.
    get_template_part( 'template-parts/content/content-none' );

}

get_footer();
