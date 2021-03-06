<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;row banners banners-with-padding-0-2&quot;&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;

&lt;a href=&quot;#&quot; class=&quot;check-all-specialties&quot;&gt;Check all specialties&lt;/a&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-0-2&quot;&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/medic/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;

&lt;a href=&quot;#&quot; class=&quot;check-all-specialties&quot;&gt;Check all specialties&lt;/a&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div style=&quot;background: #eeeeee&quot;&gt;
     &lt;div class=&quot;standard-body&quot;&gt;
          &lt;div class=&quot;full-width&quot;&gt;
               &lt;div class=&quot;container&quot;&gt;
                    &lt;div class=&quot;medic-top-bar row&quot;&gt;
                         &lt;div class=&quot;col-sm-4&quot;&gt;
                              &lt;div class=&quot;background&quot;&gt;
                                   &lt;img src=&quot;image/catalog/medic/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
                                   &lt;p&gt;Free shipping &amp; Return&lt;/p&gt;
                              &lt;/div&gt;
                         &lt;/div&gt;
                         
                         &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
                              &lt;div class=&quot;background&quot;&gt;
                                   &lt;img src=&quot;image/catalog/medic/icon-money.png&quot; alt=&quot;Money back&quot;&gt;
                                   &lt;p&gt;Money back guarantee&lt;/p&gt;
                              &lt;/div&gt;
                         &lt;/div&gt;
                         
                         &lt;div class=&quot;col-sm-4 text-right&quot;&gt;
                              &lt;div class=&quot;background&quot;&gt;
                                   &lt;img src=&quot;image/catalog/medic/icon-support.png&quot; alt=&quot;Support&quot;&gt;
                                   &lt;p&gt;Support 24/7&lt;/p&gt;
                              &lt;/div&gt;
                         &lt;/div&gt;
                    &lt;/div&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div style=&quot;background: #eeeeee&quot;&gt;
     &lt;div class=&quot;standard-body&quot;&gt;
          &lt;div class=&quot;full-width&quot;&gt;
               &lt;div class=&quot;container&quot;&gt;
                    &lt;div class=&quot;medic-top-bar row&quot;&gt;
                         &lt;div class=&quot;col-sm-4&quot;&gt;
                              &lt;div class=&quot;background&quot;&gt;
                                   &lt;img src=&quot;image/catalog/medic/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
                                   &lt;p&gt;Free shipping &amp; Return&lt;/p&gt;
                              &lt;/div&gt;
                         &lt;/div&gt;
                         
                         &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
                              &lt;div class=&quot;background&quot;&gt;
                                   &lt;img src=&quot;image/catalog/medic/icon-money.png&quot; alt=&quot;Money back&quot;&gt;
                                   &lt;p&gt;Money back guarantee&lt;/p&gt;
                              &lt;/div&gt;
                         &lt;/div&gt;
                         
                         &lt;div class=&quot;col-sm-4 text-right&quot;&gt;
                              &lt;div class=&quot;background&quot;&gt;
                                   &lt;img src=&quot;image/catalog/medic/icon-support.png&quot; alt=&quot;Support&quot;&gt;
                                   &lt;p&gt;Support 24/7&lt;/p&gt;
                              &lt;/div&gt;
                         &lt;/div&gt;
                    &lt;/div&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;medic-phone hidden-md hidden-sm&quot;&gt;
     &lt;img src=&quot;image/catalog/medic/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Do you have&lt;br&gt;a question?&lt;/div&gt;
     &lt;p&gt;500-130-120&lt;/p&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;medic-phone hidden-md hidden-sm&quot;&gt;
     &lt;img src=&quot;image/catalog/medic/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Do you have&lt;br&gt;a question?&lt;/div&gt;
     &lt;p&gt;500-130-120&lt;/p&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div style=&quot;height: 10px&quot; class=&quot;hidden-xs&quot;&gt;&lt;/div&gt;',
      $language_id => '&lt;div style=&quot;height: 10px&quot; class=&quot;hidden-xs&quot;&gt;&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '15',
  ),
); 

$output2 = array();
$output2["custom_module_module"] = $this->config->get('custom_module_module');

if(!is_array($output["custom_module_module"])) $output["custom_module_module"] = array();
if(!is_array($output2["custom_module_module"])) $output2["custom_module_module"] = array();
$output3 = array();
$output3["custom_module_module"] = array_merge($output["custom_module_module"], $output2["custom_module_module"]);

$this->model_setting_setting->editSetting( "custom_module", $output3 );	

?>