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
  
  
  if ($element['#theme']=='menu_link__menu_top_small')
  {
    return l($element['#title'], $element['#href'], $element['#localized_options']);
  }
   
  else
  {
  
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
  $css_path = base_path() . drupal_get_path('theme', 'Coeus') . '/';
  drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array('group' => CSS_THEME, 'type' => 'external'));
   drupal_add_css('http://fonts.googleapis.com/css?family=Lato:400,400italic,700', array('group' => CSS_THEME, 'type' => 'external'));
   drupal_add_css($css_path.'css/font-awesome.min.css', array('group' => CSS_THEME, 'type' => 'external'));
  drupal_add_css($css_path.'css/style.css', array('group' => CSS_THEME, 'type' => 'external'));
  

  drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', 'external');
  drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', 'external');
}
function Coeus_preprocess_views_view(&$vars) {
  // Do view-specific preprocessing in here because of http://drupal.org/node/939462
  
}


// function coeus_preprocess_webform_form(&$vars) {
//   drupal_add_css(drupal_get_path('module', 'webform') . '/css/webform.css');
//   drupal_add_js(drupal_get_path('module', 'webform') . '/js/webform.js');
  
//   $vars['form']['submitted']['name']['#prefix'] = '<div class ="col-md-6 mt-20"><div class ="mt10"><div class = "form-group">';
//   $vars['form']['submitted']['name']['#suffix'] = '</div>';
//   $vars['form']['submitted']['email']['#prefix'] = '<div class= "form-group">';
//   $vars['form']['submitted']['email']['#suffix'] = '</div>';
//   $vars['form']['submitted']['message']['#prefix'] = '<div class="form-group">';
//   $vars['form']['submitted']['message']['#suffix'] = '</div></div></div>';

//   if (isset(
// $vars['form']['details']['nid']['#value'])) {
//     $vars['nid'] = $vars['form']['details']['nid']['#value'];
//   }
//   elseif (isset($vars['form']['submission']['#value'])) {
//     $vars['nid'] = $vars['form']['submission']['#value']->nid;
//   }
// }
function coeus_webform_element($variables) {
  $variables['element'] += array(
    '#title_display' => 'before',
  );
  $element = $variables['element'];
  if (isset($element['#format']) && $element['#format'] == 'html') {
    $type = 'display';
  }
  else {
    $type = (isset($element['#type']) && !in_array($element['#type'], array('markup', 'textfield', 'webform_email', 'webform_number'))) ? $element['#type'] : $element['#webform_component']['type'];
  }
  $nested_level = $element['#parents'][0] == 'submitted' ? 1 : 0;
  $parents = str_replace('_', '-', implode('--', array_slice($element['#parents'], $nested_level)));
  $wrapper_classes = array(
   'form-item',
   'webform-component',
   'webform-component-' . $type,
  );
  if (isset($element['#container_class'])) {
    $wrapper_classes[] = $element['#container_class'];
  }

  if (isset($element['#title_display']) && strcmp($element['#title_display'], 'inline') === 0) {
    $wrapper_classes[] = 'webform-container-inline';
  }
  
  $output = '<div class="form-group">' . "\n";
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . _webform_filter_xss($element['#field_prefix']) . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . _webform_filter_xss($element['#field_suffix']) . '</span>' : '';
  switch ($element['#title_display']) {
    case 'inline':
    case 'before':
    case 'invisible':
     // $output .= ' ' . theme('form_element_label', $variables);
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
    case 'after':
      $output .= ' ' . $prefix . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $variables) . "\n";
      break;
    case 'none':
    case 'attribute':
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }
  if (!empty($element['#description'])) {
    $output .= ' <div class="description">' . $element['#description'] . "</div>\n";
  }
  $output .= "</div>\n";
  return $output;
}
// function coeus_preprocess_page(&$vars) {
//   // Get the links in your menu.
//   $vars['menu-top-small'] = menu_navigation_links('menu-top-small');
//   var_dump($vars['menu-top-small']);
// }

function Coeus_menu_tree__menu_top_small($variables) {
  return $variables['tree'] ;
}

// function Coeus_language_switch_links_alter(array &$links, $type, $path) {
//   $language_type = variable_get('translation_language_type', LANGUAGE_TYPE_INTERFACE);
 
//   if ($type == $language_type && preg_match("!^node/(\d+)(/.+|)!", $path, $matches)) {
//     $node = node_load((int) $matches[1]);

//     if (empty($node->tnid)) {
//       // If the node cannot be found nothing needs to be done. If it does not
//       // have translations it might be a language neutral node, in which case we
//       // must leave the language switch links unaltered. This is true also for
//       // nodes not having translation support enabled.
//       if (empty($node) || entity_language('node', $node) == LANGUAGE_NONE || !translation_supported_type($node->type)) {
//         return;
//       }
//       $langcode = entity_language('node', $node);
//       $translations = array($langcode => $node);
//     }
//     else {
//       $translations = translation_node_get_translations($node->tnid);
//     }

//     foreach ($links as $langcode => $link) {
//       if (isset($translations[$langcode]) && $translations[$langcode]->status) {
//         // Translation in a different node.
//         $links[$langcode]['href'] = 'node/' . $translations[$langcode]->nid . $matches[2];
//       }
//       else {
//         // No translation in this language, or no permission to view.
//         $links[$langcode]['href'] = '<front>';
//       }
//     }
//   }
// }
 function Coeus_links__locale_block($variables) {
  
  
  foreach($variables['links'] as $key => $lang) {

   
 
$output .= l($variables['links']);
 
 // return theme_links($variables);

}
//echo '<pre>';
 //var_dump(array_keys($variables['links']));
  return theme_links($variables);
}