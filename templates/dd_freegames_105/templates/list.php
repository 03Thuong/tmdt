<?php
$constructors['blogTemplate'] = array('constructor' => 'BlogTemplate', 'canDuplicate' => true);
$resultTemplatesList['blogTemplate'] = array('helpLink' => '?blog', 'virtuemart' => 'no');
$templatesInfo['blogTemplate'] = array('label' => 'TPL_BLOG_TEMPLATE', 'kind' => 'blog', 'fileName' => 'blog_5',
    'defaultTemplateCaption' => 'Blog', 'caption' => '', 'isCustom' => 'false',
    'action' => 'com_content@category@blog|com_content@featured', 'buildDefaultFunc' => 'buildBlogLink');
?>
<?php
$constructors['default'] = array('constructor' => 'DefaultTemplate', 'canDuplicate' => true);
$resultTemplatesList['default'] = array('helpLink' => '?default', 'virtuemart' => 'no');
$templatesInfo['default'] = array('label' => 'TPL_DEFAULT_TEMPLATE', 'kind' => 'default', 'fileName' => 'default_2',
    'defaultTemplateCaption' => 'Default', 'caption' => '', 'isCustom' => 'false', 'action' => '');
?>
<?php
$constructors['home'] = array('constructor' => 'HomeTemplate', 'canDuplicate' => true);
$resultTemplatesList['home'] = array('helpLink' => '', 'virtuemart' => 'no');
$templatesInfo['home'] = array('label' => 'TPL_HOME_TEMPLATE', 'kind' => 'home', 'fileName' => 'home_1',
    'defaultTemplateCaption' => 'Home', 'caption' => '', 'isCustom' => 'false', 'action' => '#');
?>
<?php
$constructors['pageTemplate'] = array('constructor' => 'PageTemplate', 'canDuplicate' => true);
$resultTemplatesList['pageTemplate'] = array('helpLink' => '?page', 'virtuemart' => 'no');
$templatesInfo['pageTemplate'] = array('label' => 'TPL_PAGE_TEMPLATE', 'kind' => 'page', 'fileName' => 'page_7',
    'defaultTemplateCaption' => 'Page', 'caption' => '', 'isCustom' => 'false',
    'action' => 'com_content@article@is_page', 'buildDefaultFunc' => 'buildPostLink');
?>
<?php
$constructors['productOverview'] = array('constructor' => 'ProductOverviewTemplate', 'canDuplicate' => true);
$resultTemplatesList['productOverview'] = array('helpLink' => '?productoverview', 'virtuemart' => 'yes');
$templatesInfo['productOverview'] = array('label' => 'TPL_PRODUCTOVERVIEW_TEMPLATE', 'kind' => 'productoverview',
    'fileName' => 'productoverview_4', 'defaultTemplateCaption' => 'ProductOverview', 'caption' => '',
    'isCustom' => 'false', 'action' => 'com_virtuemart@productdetails', 'buildDefaultFunc' => 'buildProductOverviewLink');
?>
<?php
$constructors['products'] = array('constructor' => 'ProductsTemplate', 'canDuplicate' => true);
$resultTemplatesList['products'] = array('helpLink' => '?products',
    'commonHelpLink' => '?vm', 'virtuemart' => 'yes');
$templatesInfo['products'] = array('label' => 'TPL_PRODUCTS_TEMPLATE', 'kind' => 'products',
    'fileName' => 'products_3', 'defaultTemplateCaption' => 'Products', 'caption' => '',
    'isCustom' => 'false', 'action' => 'com_virtuemart@category@products', 'buildDefaultFunc' => 'buildProductsLink');
?>
<?php
$constructors['shoppingCartTemplate'] = array('constructor' => 'ShoppingCartTemplate', 'canDuplicate' => true);
$resultTemplatesList['shoppingCartTemplate'] = array('helpLink' => '?shoppingcart', 'virtuemart' => 'yes');
$templatesInfo['shoppingCartTemplate'] = array('label' => 'TPL_SHOPPINGCART_TEMPLATE', 'kind' => 'shoppingcart',
    'fileName' => 'shoppingcart_8', 'defaultTemplateCaption' => 'ShoppingCart', 'caption' => '',
    'isCustom' => 'false', 'action' => 'com_virtuemart@cart', 'buildDefaultFunc' => 'buildShoppingCartLink');
?>
<?php
$constructors['singlePostTemplate'] = array('constructor' => 'SinglePostTemplate', 'canDuplicate' => true);
$resultTemplatesList['singlePostTemplate'] = array('helpLink' => '?post', 'virtuemart' => 'no');
$templatesInfo['singlePostTemplate'] = array('label' => 'TPL_POST_TEMPLATE', 'kind' => 'post', 'fileName' => 'post_6',
    'defaultTemplateCaption' => 'Post', 'caption' => '', 'isCustom' => 'false',
    'action' => 'com_content@article', 'buildDefaultFunc' => 'buildPostLink');
?>
<?php
$constructors['template404'] = array('constructor' => 'Template404', 'canDuplicate' => true);
$resultTemplatesList['template404'] = array('helpLink' => '', 'virtuemart' => 'no');
$templatesInfo['template404'] = array('label' => 'TPL_TEMPLATE404_TEMPLATE', 'kind' => 'error404',
    'fileName' => 'error404_9', 'defaultTemplateCaption' => '404', 'caption' => '',
    'isCustom' => 'false', 'action' => '');
?>