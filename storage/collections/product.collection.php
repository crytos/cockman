<?php
 return array (
  'name' => 'product',
  'label' => 'Products',
  '_id' => 'product5c44a651d0170',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'name',
      'label' => 'Product Name',
      'type' => 'text',
      'default' => '',
      'info' => 'This should be unique for every product',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'slug' => true,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    1 => 
    array (
      'name' => 'description',
      'label' => 'Product Description',
      'type' => 'textarea',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    2 => 
    array (
      'name' => 'price',
      'label' => 'Product Price',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    3 => 
    array (
      'name' => 'image',
      'label' => 'Product Image',
      'type' => 'asset',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    4 => 
    array (
      'name' => 'cartegory',
      'label' => 'cartegory',
      'type' => 'select',
      'default' => '',
      'info' => 'Product Cartegory',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'cls' => '',
        'options' => 'classic, office, casual, open, designer',
        'default' => 'classic',
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    5 => 
    array (
      'name' => 'published',
      'label' => 'Published',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'default' => false,
        'label' => false,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    6 => 
    array (
      'name' => 'tag',
      'label' => 'Product Tag',
      'type' => 'multipleselect',
      'default' => '',
      'info' => 'this can be changed according to the season',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'options' => 'new, trending, featured, choice, discount',
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    7 => 
    array (
      'name' => 'quantity_available',
      'label' => 'Available In Stock',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'deafault' => 1,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1548002897,
  '_modified' => 1553864387,
  'color' => '#AC92EC',
  'acl' => 
  array (
    'author' => 
    array (
      'collection_edit' => false,
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
    ),
    'public' => 
    array (
      'entries_view' => true,
    ),
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'cart.svg',
  'description' => 'Products in the shop',
);