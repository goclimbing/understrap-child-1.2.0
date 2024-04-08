<?php
add_action('acf/init', 'rv_acf_init');
function rv_acf_init()
{
    if (function_exists('acf_register_block')) {
        $themeKeywords = array('c1', 'ln');
        $customBlocks = array(
            array('two-block-display', 'Two Block Display', 'Two Block Display on Wide Screen', 'shield', array('logo', 'grid')),
            array('sketchfab', 'Sketchfab IDs', 'Sketchfab ID list', 'shield', array('logo', 'grid')),
            array('iframe', 'iFrame Block', 'Uses FULL URL as source', 'shield', array('logo', 'grid')),
            array('features', 'Features Block', 'Custom Features Area', 'shield', array('logo', 'grid')),

            array('fish', 'Fish Top-10', 'Top 10 good/bad sushi fish', '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M19 13H5v-2h14v2z" /></svg>', array('logo', 'grid')),
        );
        foreach ($customBlocks as $block) {
            acf_register_block(
                [
                    'name' =>  $block[0],
                    'title' => __($block[1]),
                    'description' => __($block[2]),
                    'render_callback' => 'acf_block_render_callback',
                    'category' => 'layout',
                    'icon' => $block[3],
                    'mode' => 'preview',
                    'supports' => [
                        'align' => false,
                        'mode' => false,
                    ],
                    'keywords' => array_merge($themeKeywords, $block[4]),
                ]
            );
        }
    }
}

//load in the appropriate blocks
function acf_block_render_callback($block)
{
    // convert name ("acf/sw-floating-block") into path friendly slug ("sw-floating-block")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_stylesheet_directory() . "/templates/blocks/{$slug}.php")) {
        include(get_stylesheet_directory() . "/templates/blocks/{$slug}.php");
    }
}
