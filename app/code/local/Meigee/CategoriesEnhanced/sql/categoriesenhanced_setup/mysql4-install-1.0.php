<?php
$installer = $this;
$installer->startSetup();
// Layout
$installer->addAttribute('catalog_category', 'meigee_grid_layout', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => 'Number of columns in grid view',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_grid',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
// Mega Menu
$installer->addAttribute('catalog_category', 'meigee_cat_max_quantity', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Max. Quantity of categories in 1 row:',
    'note'              => "Set maximum quantity of categories which will be shown in 1 row. If the field will be empty than default value (System -> Configuration -> Categories Enhanced) will be used.",
    'type'              => 'text',
    'input'             => 'text',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => true,
    'is_html_allowed_on_front'  => true,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'sort_order' => 0,
));
$installer->addAttribute('catalog_category', 'meigee_cat_menutype', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Top Level Dropdown Menu Type',
    'note'              => "",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_menutype',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'sort_order' => 0,
));
$installer->addAttribute('catalog_category', 'meigee_cat_block_bottom', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Bottom Content',
    'note'              => "This content will be shown under submenu.",
    'type'              => 'text',
    'input'             => 'textarea',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => true,
    'is_html_allowed_on_front'  => true,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'meigee_cat_ratio', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Ratio',
    'note'              => "<strong style='color:red'>May be used for top-level categories only.</strong><br />Ratio of categories block width to custom content one",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_ratio',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'meigee_cat_block_right', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Right Content',
    'note'              => "<strong style='color:red'>May be used for top-level categories only.</strong><br />This content will be shown right after submenu.",
    'type'              => 'text',
    'input'             => 'textarea',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => true,
    'is_html_allowed_on_front'  => true,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'meigee_cat_block_top', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Top Content',
    'note'              => "This content will be shown above submenu.",
    'type'              => 'text',
    'input'             => 'textarea',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => true,
    'is_html_allowed_on_front'  => true,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'meigee_cat_subcontent', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Custom Drop Down Content',
    'note'              => "This content will replace any subcategories. At least one subcategory must be created anyway",
    'type'              => 'text',
    'input'             => 'textarea',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => true,
    'is_html_allowed_on_front'  => true,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'meigee_cat_customlink', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Custom Link',
    'note'              => "1. Use 'http://' to create external link <br /> 2. Use '/' to create link to the home page<br /> 3. Use '#' to disable the link",
    'type'              => 'text',
    'input'             => 'text',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => true,
    'is_html_allowed_on_front'  => true,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'meigee_cat_customlabel', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Category Label',
    'note'              => "",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_labels',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$installer->addAttribute('catalog_category', 'meigee_cat_labeltext', array(
    'group'             => 'Meigee/Enhanced Categories',
    'label'             => 'Label Text',
    'note'              => "",
    'type'              => 'text',
    'input'             => 'text',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => true,
    'is_html_allowed_on_front'  => true,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'productname', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => 'Product Name',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'productprice', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => 'Product Price',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'addtocart', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => '"Add to Cart" Button',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'compareproducts', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => '"Compare Products" Button',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'wishlist', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => '"Wishlist" Button',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'rating_stars', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => 'Rating Stars',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'rating_cust_link', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => 'Rating Customer Link',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->addAttribute('catalog_category', 'rating_add_review_link', array(
    'group'             => 'Meigee/Product Listing',
    'label'             => '"Add your review" link',
    'note'              => "You can set this option for all categories in 'Miegee/ThemeOptions' config tab",
    'type'              => 'varchar',
    'input'             => 'select',
    'source'            => 'Meigee_CategoriesEnhanced/category_attribute_source_block_enabledisable',
    'visible'           => true,
    'required'          => false,
    'backend'           => '',
    'frontend'          => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'user_defined'      => true,
    'visible_on_front'  => true,
    'wysiwyg_enabled'   => false,
    'is_html_allowed_on_front'  => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));
$installer->endSetup();