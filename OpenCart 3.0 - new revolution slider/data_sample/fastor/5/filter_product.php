<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["filter_product_module"] = array (
  1 => 
  array (
    'tabs' => 
    array (
      1 => 
      array (
        'heading' => 
        array (
          1 => 'Laptops &amp; Notebooks',
          $language_id => 'Laptops &amp; Notebooks',
        ),
        'title' => 'category',
        'product' => '',
        'products' => '',
        'category' => 'p',
        'categories' => '17,33,25,18,30,24',
      ),
    ),
    'carousel' => '1',
    'width' => '250',
    'height' => '250',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
  ),
  2 => 
  array (
    'tabs' => 
    array (
      2 => 
      array (
        'heading' => 
        array (
          1 => 'MP3 Players',
          $language_id => 'MP3 Players',
        ),
        'title' => 'category',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '34,18',
      ),
    ),
    'carousel' => '1',
    'width' => '250',
    'height' => '250',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '2',
  ),
); 

$output2 = array();
$output2["filter_product_module"] = $this->config->get('filter_product_module');

if(!is_array($output["filter_product_module"])) $output["filter_product_module"] = array();
if(!is_array($output2["filter_product_module"])) $output2["filter_product_module"] = array();
$output3 = array();
$output3["filter_product_module"] = array_merge($output["filter_product_module"], $output2["filter_product_module"]);

$this->model_setting_setting->editSetting( "filter_product", $output3 );		

?>