<?php
// This file is generated. Do not modify it manually.
return array(
	'my-contact' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'tanvir-blocks/my-contact',
		'version' => '0.1.0',
		'title' => 'My Contact',
		'category' => 'tanvirblocks',
		'description' => 'My Contact is Contact block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => true,
			'align' => true,
			'color' => array(
				'gradients' => true,
				'link' => true,
				'custom' => true,
				'text' => true,
				'background' => true
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'letterSpacing' => true,
				'fontFamily' => true,
				'textTransform' => true,
				'fontStyle' => true,
				'fontWeight' => true
			),
			'customClassName' => true,
			'className' => true,
			'anchor' => true
		),
		'textdomain' => 'tanvir-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'titletext' => array(
				'type' => 'string',
				'selector' => 'h2',
				'default' => 'Join Our Newsletter',
				'source' => 'text'
			),
			'descriptiontext' => array(
				'type' => 'string',
				'selector' => 'p',
				'default' => 'Subscribe to our Newsletter',
				'source' => 'html'
			),
			'btntext' => array(
				'type' => 'string',
				'selector' => 'button',
				'default' => 'Contact Us',
				'source' => 'text'
			),
			'list_id' => array(
				'type' => 'string',
				'default' => '123456'
			),
			'doubleoption' => array(
				'type' => 'boolean',
				'default' => false
			),
			'switch_option' => array(
				'type' => 'boolean',
				'default' => false
			),
			'bg_image' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0
				)
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0
				)
			)
		)
	),
	'my-cta' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'tanvir-blocks/my-cta',
		'version' => '0.1.0',
		'title' => 'My CTA',
		'category' => 'tanvirblocks',
		'icon' => 'superhero',
		'description' => 'My CTA is Call To Action block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => true,
			'align' => true,
			'color' => array(
				'gradients' => true,
				'link' => true,
				'custom' => true,
				'text' => true,
				'background' => true
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'letterSpacing' => true,
				'fontFamily' => true,
				'textTransform' => true,
				'fontStyle' => true,
				'fontWeight' => true
			),
			'customClassName' => true,
			'className' => true,
			'anchor' => true
		),
		'textdomain' => 'tanvir-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'titletext' => array(
				'type' => 'string',
				'selector' => 'h2',
				'default' => 'Ready to Power Your Business Growth?',
				'source' => 'text'
			),
			'descriptiontext' => array(
				'type' => 'string',
				'selector' => 'p',
				'default' => 'Discover how our unified ecosystem can provide the specialized expertise you need and the seamless integration you’ve always wanted. Let’s build the future together.',
				'source' => 'html'
			),
			'btntext' => array(
				'type' => 'string',
				'selector' => 'span',
				'default' => 'Partner With Us',
				'source' => 'text'
			),
			'list_id' => array(
				'type' => 'string',
				'default' => '123456'
			),
			'doubleoption' => array(
				'type' => 'boolean',
				'default' => false
			),
			'switch_option' => array(
				'type' => 'boolean',
				'default' => false
			),
			'bg_image' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0
				)
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0
				)
			)
		)
	),
	'my-icon-img' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'tanvir-blocks/my-icon-img',
		'version' => '0.1.0',
		'title' => 'My Icon/Image',
		'category' => 'tanvirblocks',
		'description' => 'Insert an SVG icon or graphic or image.',
		'example' => array(
			
		),
		'keywords' => array(
			'icon',
			'svg'
		),
		'attributes' => array(
			'icon' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => '.icon-container',
				'default' => '',
				'__experimentalRole' => 'content'
			),
			'iconName' => array(
				'type' => 'string',
				'__experimentalRole' => 'content'
			),
			'itemsJustification' => array(
				'type' => 'string'
			),
			'iconBackgroundColor' => array(
				'type' => 'string'
			),
			'customIconBackgroundColor' => array(
				'type' => 'string'
			),
			'iconBackgroundColorValue' => array(
				'type' => 'string'
			),
			'iconColor' => array(
				'type' => 'string'
			),
			'customIconColor' => array(
				'type' => 'string'
			),
			'iconColorValue' => array(
				'type' => 'string'
			),
			'gradient' => array(
				'type' => 'string'
			),
			'customGradient' => array(
				'type' => 'string'
			),
			'hasNoIconFill' => array(
				'type' => 'boolean'
			),
			'label' => array(
				'type' => 'string'
			),
			'title' => array(
				'type' => 'string'
			),
			'linkUrl' => array(
				'type' => 'string'
			),
			'linkRel' => array(
				'type' => 'string'
			),
			'linkTarget' => array(
				'type' => 'string'
			),
			'rotate' => array(
				'type' => 'number'
			),
			'flipHorizontal' => array(
				'type' => 'boolean'
			),
			'flipVertical' => array(
				'type' => 'boolean'
			),
			'width' => array(
				'type' => array(
					'string',
					'number'
				)
			),
			'height' => array(
				'type' => 'string'
			),
			'percentWidth' => array(
				'type' => 'number'
			),
			'switch_option' => array(
				'type' => 'boolean',
				'default' => false
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'id' => 0
				)
			),
			'switch_text' => array(
				'type' => 'boolean',
				'default' => false
			),
			'alignment_v' => array(
				'type' => 'string',
				'default' => 'top'
			),
			'alignment_h' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'direction_flex' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 14
			),
			'descriptiontext' => array(
				'type' => 'string',
				'selector' => 'span',
				'default' => 'Enter your description here',
				'source' => 'html'
			)
		),
		'supports' => array(
			'anchor' => true,
			'align' => true,
			'html' => true,
			'interactivity' => array(
				'clientNavigation' => true
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalSelector' => '.icon-container',
				'__experimentalSkipSerialization' => true,
				'__experimentalDefaultControls' => array(
					'color' => false,
					'radius' => false,
					'style' => false,
					'width' => false
				)
			),
			'spacing' => array(
				'padding' => true,
				'margin' => true,
				'__experimentalDefaultControls' => array(
					'margin' => false,
					'padding' => false
				)
			)
		),
		'textdomain' => 'tanvir-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
