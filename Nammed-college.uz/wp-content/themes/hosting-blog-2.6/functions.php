<?php
if ( function_exists('register_sidebar') )
	{
    register_sidebar(array('name'=>'Sidebar'));
	}
	
function wp_list_pages2($limit=NULL) {
	
	$defaults = array('depth' => 0, 'show_date' => '', 'date_format' => get_option('date_format'),
		'child_of' => 0, 'exclude' => '', 'title_li' =>'', 'echo' => 1, 'authors' => '', 'sort_column' => 'menu_order, post_title');
	$r = array_merge((array)$defaults, (array)$r);

	$output = '';
	$current_page = 0;

	$r['exclude'] = preg_replace('[^0-9,]', '', $r['exclude']);

	$r['exclude'] = implode(',', apply_filters('wp_list_pages_excludes', explode(',', $r['exclude'])));

	$pages = get_pages($r);

	if ( !empty($pages) ) {

		for($i=0;$i<count($pages);$i++)
		{
		$class1 = '';
		if (get_the_title($post->post_parent) == $pages[$i]->post_title) { $class1 = 'active';}
			$output .='<li><a href="'.get_page_link($pages[$i]->ID).'" class="'.$class1.'"><span>'.$pages[$i]->post_title.'</span></a></li>';
			if($limit!=NULL)
			{
				break;
			}
		}
	}

	$output = apply_filters('wp_list_pages', $output);

	echo $output;
}
//GsL98DGtpo0W
 