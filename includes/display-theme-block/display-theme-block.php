<?php
class ContentBlock {

    private static $theme_blocks_locations = array(
		'block_two_columns'			=> 'parts/blocks/block-two-columns',
		'block_our_brands'			=> 'parts/blocks/block-our-brands',
		'block_latest_news'			=> 'parts/blocks/block-latest-posts',
		'block_contact_map'		    => 'parts/blocks/block-map',
        'block_our_values'		    => 'parts/blocks/block-our-values',
        'block_our_founders'        => 'parts/blocks/block-our-founders',
        'block_career_job'          => 'parts/blocks/block-career',
        'block_informations'        => 'parts/blocks/block-informations',
        'block_competition_details' => 'parts/blocks/block-competition-details',
        'block_contest'             => 'parts/blocks/block-contest',
        'block_contact'             => 'parts/blocks/block-contact-form'

    );

    private function __construct(){}

    public static function display_theme_blocks($field_name = 'page_blocks', $sec_param = null, $nav = false){
        if($sec_param == null)
            $sec_param = get_the_ID();

        $counters = array();
        while(have_rows($field_name, $sec_param)){ the_row();
            $block_layout = get_row_layout();

            if( !isset( $counters[ $block_layout ] ) )
            {
                $counters[ $block_layout ] = 1;
            }
            else
            {
                $counters[ $block_layout ]++;
            }

            if(isset(self::$theme_blocks_locations[$block_layout])){
                get_theme_part(self::$theme_blocks_locations[$block_layout], ['layout_counter' => $counters[ $block_layout ]]);
            }
        }
    }
    public static function the_block_title(){
        $block_title = get_sub_field('section_title');
        if(!empty($block_title)):
            ?><?php echo $block_title; ?><?php
        endif;
    }
}
