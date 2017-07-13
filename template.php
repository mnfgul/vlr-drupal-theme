<?php

//custom template for each node
function phptemplate_preprocess_node(&$vars) {
    $vars['template_files'][] = 'node-' . $vars['nid'];
}

//menu custom layout
function phptemplate_menu_tree($tree) {
  return '<ul class="menu nolist">'. $tree .'</ul>';
}

function vlr_theme()
{
	return array(
    'user_register' => array(
      'arguments' => array('form' => NULL),
      //'template' => 'user-register',
    ),
  );
}


function vlr_user_register($form) {
  /*
  // Adding the fieldset
  $form['terms_of_use'] = array(
    '#type' => 'checkbox',
	'#value' => '',
    '#title' => t('I agree with these terms'),
    '#required' => '1',
	'#validate' => array('vlr_element_validate'),
	'#pre_render' => array('vlr_pre_render_checkbox')
  );
 */
  // returning the themed form
  return drupal_render($form);  
}


//checkout page customization
function vlr_uc_cart_checkout_form($form) {
  drupal_add_css(drupal_get_path('module', 'uc_cart') . '/uc_cart.css');
 
  $output = '<div id="checkout-instructions">' . check_markup(variable_get('uc_checkout_instructions', ''), variable_get('uc_checkout_instructions_format', FILTER_FORMAT_DEFAULT), FALSE) . '</div>';
 
  foreach (element_children($form['panes']) as $pane_id) {
    if (function_exists(($func = _checkout_pane_data($pane_id, 'callback')))) {
      $result = $func('theme', $form['panes'][$pane_id], NULL);
      if (!empty($result)) {
        $output .= $result;
        $form['panes'][$pane_id] = array();
      }
      else {
        $output .= drupal_render($form['panes'][$pane_id]);
      }
    }
    else {
      $output .= drupal_render($form['panes'][$pane_id]);
    }
  }
  
  $output .= '<div id="checkout-custom-msg" class="messages status">
  <p style="font-size: 16px;">Acceptable Use Policy</p>
  <p>Acceptable use of downloaded images and logos includes in store advertising, product catalogs, sale sheets, presentations and email.</p>
  <p>Unacceptable use of downloaded images and logos includes production of premiums, POS, banners, digital or video media.</p>
  <p>Use of images for anything other than acceptable use guidelines provided above must be requested and approved through vlr Marketing Department.</p>
  </div>';
  $output .= '<div id="checkout-form-bottom">' . drupal_render($form) . '</div>';
 
  return $output;
}



/*
function vlr_uc_product_add_to_cart($node){
	//var_dump($node);
}
*/
?>