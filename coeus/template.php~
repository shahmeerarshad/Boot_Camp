<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function coeus_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  coeus_preprocess_html($variables, $hook);
  coeus_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function coeus_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function coeus_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function coeus_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // coeus_preprocess_node_page() or coeus_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function coeus_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function coeus_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function coeus_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */



// function Coeus_links__system_main_menu($variables) {
// $html = " <ul class='main-menu'>";
// foreach ($variables['links'] as $k => $link) {
// $html .= "<li>".l($link['title'], $link['href'], array('attributes' => array('class' => 'reflect '.$k.'')))."</li>";
// }
// $html .= " </ul>";
// return $html;
// }
//  function Coeus_preprocess_page(&$variables){
//  //   Primary nav.
//    $variables['primary_nav'] = FALSE;
//    if ($variables['main_menu']) {
//    //     Build links.
//        $variables['primary_nav'] = theme('links__system_main_menu', array('links' => $variables['main_menu']));
//    }
//     $variables['secondary_nav'] = FALSE;
//    if ($variables['navigation_menu']) {
//      //   Build links.
//        $variables['secondary_nav'] = theme('links__system_navigation_menu', array('links' => $variables['navigation_menu']));
//    }
// }
// function Coeus_links__system_main_menu($variables) {
// $html = " <ul class='main-menu'>twatt";
// foreach ($variables['links'] as $k => $link) {
// $html .= "<li>sdfds".l($link['title'], $link['href'], array('attributes' => array('class' => 'reflect '.$k.'')))."</li>";
// }
// $html .= " </ul>";
// return $html;
// }
// function Coeus_links__system_main_menu(&$variables) {
//   $links ='<div class="nav">';
//   $links = '<ul id = "iqbal">';
//   foreach ($variables['links'] as $link) {
//     $links .= "<li>".l($link['title'], $link['href'], $link)."</li><li class= 'sep' ></li>";

//   }
//  $links .= '</ul>';
//  $links.='</div>';  
//  return $links;
// }
// function Coeus_links__system_navigation_menu(&$variables) {
//   $links ='<div class="nav">';
//   $links = '<ul id = "iqbal">';
//   foreach ($variables['links'] as $link) {
//     $links .= "<li>".l($link['title'], $link['href'], $link)."</li><li class= 'sep' ></li>";

//   }
//  $links .= '</ul>';
//  $links.='</div>';  
//  return $links;
// }
// function Coeus_menu_link(array $variables) {
//   $element = $variables['element'];
//   $sub_menu = '';
//   $element['#localized_options']['html'] = TRUE;


//   if ($element['#below']) {
//     $sub_menu = drupal_render($element['#below']);
//   }

//   if ($element['#original_link']['menu_name'] == "main-menu" && isset($element['#localized_options']['attributes']['title'])){
//     $element['#title'] .= '<span class="description">' . $element['#localized_options']['attributes']['title'] . '</span>';
//   }

//   $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//   return '<li ' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
//   //print_r($output);
// }
// function Coeus_menu_tree__main_menu($variables) {
//   return '<ul class="menu myclass">' . $variables['tree'] . '</ul>';
// }
function Coeus_menu_link(array $variables) {
  $element = $variables['element'];
         $sub_menu = '';
        $dropdown = '';
        if ($element['#below']) {
            $sub_menu = drupal_render($element['#below']);
            $sub_menu = str_replace('nav navbar-nav', 'dropdown-menu', $sub_menu);
            $dropdown = 'class="dropdown"';
            $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
            $element['#localized_options']['attributes']['aria-expanded'][] = 'true';
            $element['#localized_options']['attributes']['aria-hashopopup'][] = 'true';
            $element['#localized_options']['attributes']['role'][] = 'button';
            $element['#localized_options']['attributes']['href'][] = '#';
            $element['#localized_options']['attributes']['data-toggle'][] = 'dropdown';
           
         }
         
if ($element['#below']) {
            $element['#localized_options']['html'] = TRUE; 
           $list= $element['#title'] .'<span class="caret"> </span>';
            $output = l($list, $element['#href'], $element['#localized_options']);
}
else{
       
        $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    }
         
         return '<li ' .$dropdown. ' >' . $output . $sub_menu . "</li>\n";

}
function Coeus_menu_tree__main_menu(&$variables) {
 return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
}

// function Coeus_menu_tree($variables) {
//  return '<li  >' . $output  .'<ul  >'. $sub_menu . '</ul>'. "</li>\n";
//   return '<ul class="nav navbar-nav ">' . $variables ['tree'] . '</ul>';
// }
// function Coeus_menu_link($variables) {
//   
//   $sub_menu = '';
// print_r($variables['tree']);  

//   if (
// $element['#below']) {
//     $sub_menu = '<ul>'.drupal_render($element['#below']).'</ul>';
//   }
//   static $item_id = 0;
//   $output = l($element['#title'], $element['#href'], $element['#localized_options']);  
//   return '<li id="custom-menu-item-id-' . (++$item_id) . '"' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
// }
// function Coeus_menu_link(array $variables) {
//   //unset all the classes
//   unset($variables['element']['#attributes']['class']);

//   $element = $variables['element'];

//   if($variables['element']['#attributes'])

//   $sub_menu = '';


//   if ($element['#below']) {
//     $sub_menu = drupal_render($element['#below']);
//   }
//   $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//   return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
// }

function Coeus_preprocess_html(&$vars) {
  drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array('group' => CSS_THEME, 'type' => 'external'));
   drupal_add_css('http://fonts.googleapis.com/css?family=Lato:400,400italic,700', array('group' => CSS_THEME, 'type' => 'external'));
   drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', 'external');
   drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', 'external');
}
