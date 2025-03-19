<?php
/**
 * Template Name: Committee Listing Gutenberg
 *
 * This template displays Committee posts using Gutenberg’s Query Loop block markup.
 */
get_header(); ?>

<!-- Gutenberg Query Loop Block Markup -->
<!-- wp:query {"queryId":1,"query":{"perPage":10,"postType":"committee","order":"desc","orderBy":"date"}} -->
<div class="wp-block-query va-committee">
    <!-- wp:post-template -->
        <!-- wp:post-featured-image /-->
        <!-- wp:post-title /-->
        <!-- wp:post-content /-->
    <!-- /wp:post-template -->
    <!-- wp:query-pagination /-->
</div>
<!-- /wp:query -->

<?php get_footer(); ?>
