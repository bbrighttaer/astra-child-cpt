<?php

/**
 * Template for Single post
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<div <?php astra_blog_layout_class('single-layout-1 publication'); ?>>

    <div class="row">
        <div class="col s12 m7">
            <div class="card">
                <div class="card-image">
                    <?php the_post_thumbnail(); ?>
                    <span class="card-title"><?php the_title('<span>', '</span>'); ?></span>
                </div>
                <div class="card-content">
                    <?php the_content(); ?>
                    <!-- <?php esc_html_e($post->abstract, 'astra') ?> -->
                    <p><?php esc_html_e(the_field('abstract'), 'astra') ?></p>
                    <p>
                        <span class="authors"><?php esc_html_e($post->authors, 'astra'); ?></span>
                    </p>

                </div>
                <div class="card-action">
                    <p>
                        <a href="<?php esc_attr_e($post->url, 'astra'); ?>" target="_blank">
                            <?php esc_html_e($post->publisher, 'astra'); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>