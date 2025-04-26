<?php
/**
 * Template Name: Blog
 * The template for displaying the blog page
 */

get_header();
?>

<main class="min-h-screen">
    <div class="container mx-auto px-4 py-16">
        <!-- Blog Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Blog</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Stay updated with the latest news, tips, and insights about trademarks, copyrights, and intellectual property protection.</p>
        </div>

        <!-- Blog Categories -->
        <div class="flex justify-center space-x-4 mb-12">
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors">All</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition-colors">Copyrights</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition-colors">Guides</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition-colors">Trademarks</a>
        </div>

        <!-- Search Bar -->
        <div class="max-w-md mx-auto mb-12">
            <div class="relative">
                <input type="text" placeholder="Search the blog" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 9,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="aspect-w-16 aspect-h-9">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-6">
                        <div class="flex items-center space-x-2 text-sm text-gray-500 mb-2">
                            <span><?php echo get_the_category()[0]->name; ?></span>
                            <span>•</span>
                            <span><?php echo get_the_date(); ?></span>
                        </div>
                        
                        <h2 class="text-xl font-semibold text-gray-900 mb-3">
                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <p class="text-gray-600 mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </p>
                        
                        <a href="<?php the_permalink(); ?>" class="text-blue-600 font-medium hover:text-blue-700 transition-colors">
                            Read more
                        </a>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <?php
            echo paginate_links(array(
                'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>',
                'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>',
                'class' => 'flex items-center space-x-2'
            ));
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?> 