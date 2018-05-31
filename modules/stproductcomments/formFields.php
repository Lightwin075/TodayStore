<?php
$form_fields = array();
$form_fields['general'] = array(
    'moderate' => array(
		'type' => 'switch',
		'label' => $this->getTranslator()->trans('All reviews must be validated by an employee:', array(), 'Modules.StProductcomments.Admin'),
		'name' => 'moderate',
		'is_bool' => true,
        'default_value' => 1,
		'values' => array(
			array(
				'id' => 'moderate_on',
				'value' => 1,
				'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
			array(
				'id' => 'moderate_off',
				'value' => 0,
				'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
		),
        'validation' => 'isBool',
	), 
    /*'allow_guests' => array(
		'type' => 'switch',
		'label' => $this->getTranslator()->trans('Allow guest posting reviews:', array(), 'Modules.StProductcomments.Admin'),
		'name' => 'allow_guests',
		'is_bool' => true,
        'default_value' => 0,
		'values' => array(
			array(
				'id' => 'allow_guests_on',
				'value' => 1,
				'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
			array(
				'id' => 'allow_guests_off',
				'value' => 0,
				'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
		),
        'validation' => 'isBool',
	),*/
    'upload_image' => array(
		'type' => 'switch',
		'label' => $this->getTranslator()->trans('Allow upload images:', array(), 'Modules.StProductcomments.Admin'),
		'name' => 'upload_image',
		'is_bool' => true,
        'default_value' => 1,
		'values' => array(
			array(
				'id' => 'upload_image_on',
				'value' => 1,
				'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
			array(
				'id' => 'upload_image_off',
				'value' => 0,
				'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
		),
        'validation' => 'isBool',
	),
    /*'minimal_time' => array(
		'type' => 'text',
		'label' => $this->getTranslator()->trans('Seconds:', array(), 'Admin.Theme.Panda'),
		'name' => 'minimal_time',
        'default_value' => 30,
		'desc' => $this->getTranslator()->trans('Minimum time between 2 comments from the same user.', array(), 'Modules.StProductcomments.Admin'),
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
	),*/
    'max_comment' => array(
		'type' => 'text',
		'label' => $this->getTranslator()->trans('Max length of comments:', array(), 'Admin.Theme.Panda'),
		'name' => 'max_comment',
        'default_value' => 500,
		'desc' => $this->getTranslator()->trans('Maximum length of comment content, default is 500 characters.', array(), 'Modules.StProductcomments.Admin'),
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
	),
    'google_rich_snippets' => array(
		'type' => 'switch',
		'label' => $this->getTranslator()->trans('Enable Google rich snippets:', array(), 'Modules.StProductcomments.Admin'),
		'name' => 'google_rich_snippets',
		'is_bool' => true,
        'default_value' => 1,
		'values' => array(
			array(
				'id' => 'google_rich_snippets_on',
				'value' => 1,
				'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
			array(
				'id' => 'google_rich_snippets_off',
				'value' => 0,
				'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
		),
        'validation' => 'isBool',
        // 'desc' => $this->getTranslator()->trans('This would not work if the Google rich snippets option in the Theme editor is off.', array(), 'Modules.StProductcomments.Admin'),
	),
    'google_recaptcha' => array(
		'type' => 'switch',
		'label' => $this->getTranslator()->trans('Enable Google recaptcha:', array(), 'Modules.StProductcomments.Admin'),
		'name' => 'google_recaptcha',
		'is_bool' => true,
        'default_value' => 0,
		'values' => array(
			array(
				'id' => 'google_recaptcha_on',
				'value' => 1,
				'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
			array(
				'id' => 'google_recaptcha_off',
				'value' => 0,
				'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
		),
        'validation' => 'isBool',
	),
    'recaptcha_site_key' => array(
		'type' => 'text',
		'label' => $this->getTranslator()->trans('Google recaptcha site key:', array(), 'Modules.StProductcomments.Admin'),
		'name' => 'recaptcha_site_key',
        'validation' => 'isGenericName',
        'desc' => $this->getTranslator()->trans('How to get recaptcha site key and secret key: %s', array('https://www.google.com/recaptcha/admin'), 'Modules.StProductcomments.Admin')
	),
    'recaptcha_secret_key' => array(
		'type' => 'text',
		'label' => $this->getTranslator()->trans('Google recaptcha secret key:', array(), 'Modules.StProductcomments.Admin'),
		'name' => 'recaptcha_secret_key',
        'validation' => 'isGenericName',
        'desc' => $this->getTranslator()->trans('How to get recaptcha site key and secret key: %s', array('https://www.google.com/recaptcha/admin'), 'Modules.StProductcomments.Admin')
	),
    'helpful' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('How to display HELPFUL buttons ', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'helpful',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'helpful_3',
                'value' => 2,
                'label' => $this->getTranslatOr()->trans('Do not display them', array(), 'Modules.StProductcomments.Admin')
            ),
            array(
                'id' => 'helpful_1',
                'value' => 1,
                'label' => $this->getTranslatOr()->trans('YES buttons only', array(), 'Modules.StProductcomments.Admin')
            ),
            array(
                'id' => 'helpful_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('YES and NO buttons', array(), 'Modules.StProductcomments.Admin')
            ),
        ),
        'validation' => 'isUnsignedInt',
    ), 
    'sort_order' => array(
        'type' => 'select',
        'label' => $this->getTranslator()->trans('Sort order:', array(), 'Admin.Theme.Panda'),
        'name' => 'sort_order',
        'default_value' => 0,
        'options' => array(
            'query' => $this->sort_order,
            'id' => 'id',
            'name' => 'name',
        ),
        'validation' => 'isGenericName',
    ), 
    'display_rating' => array(
            'type' => 'radio',
            'label' => $this->getTranslator()->trans('Show ratings:', array(), 'Modules.StProductcomments.Admin'),
            'name' => 'display_rating',
            'default_value' => 3,
            'values' => array(
                array(
                    'id' => 'display_comment_rating_off',
                    'value' => 0,
                    'label' => $this->getTranslator()->trans('NO', array(), 'Admin.Theme.Panda')),
                array(
                    'id' => 'display_comment_rating_on',
                    'value' => 1,
                    'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
                array(
                    'id' => 'display_comment_rating_on',
                    'value' => 3,
                    'label' => $this->getTranslator()->trans('Yes and show the number of ratings', array(), 'Modules.StProductcomments.Admin')),
                array(
                    'id' => 'display_comment_rating_always',
                    'value' => 2,
                    'label' => $this->getTranslator()->trans('Show star even if no rating', array(), 'Modules.StProductcomments.Admin')),
                array(
                    'id' => 'display_comment_rating_always',
                    'value' => 4,
                    'label' => $this->getTranslator()->trans('Show star even if no rating and show the number of ratings', array(), 'Modules.StProductcomments.Admin')),
            ),
            'validation' => 'isUnsignedInt',
        ),

    'display_as_link' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Display ratings as links:', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'display_as_link',
        'default_value' => 1,
        'values' => array(
            array(
                'id' => 'display_as_link_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'display_as_link_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ),
    'pro_posi' => array(
        'label' => $this->getTranslator()->trans('Postion', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'pro_posi',
        'validation' => 'isUnsignedInt',
        'default_value' => 0,
        'type' => 'radio',
        'values' => array(
            array(
                'id' => 'pro_posi_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Display ratings right above product name', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'pro_posi_timeago',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Display ratings right under product price', array(), 'Admin.Theme.Panda')),
        ),
    ),
    'display_date' => array(
        'label' => $this->getTranslator()->trans('How to display date', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'display_date',
        'validation' => 'isUnsignedInt',
        'default_value' => 0,
        'type' => 'radio',
        'values' => array(
            array(
                'id' => 'display_date_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Default, like 04/12/2017', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'display_date_timeago',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Time Since Posted, like 2 days ago, 1 month ago', array(), 'Admin.Theme.Panda')),
        ),
    ),
    'star_icon' => array(
        'type' => 'fontello',
        'label' => $this->getTranslator()->trans('Star icon:', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'star_icon',
        'values' => $this->get_fontello(),
        'validation' => 'isAnything',
        'default_value' => '',
    ),
    'star_size' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Star size:', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'star_size',
        'prefix' => 'px',
        'class' => 'fixed-width-lg',
        'validation' => 'isUnsignedInt',
        'desc' => $this->getTranslator()->trans('Set it to 0 to use the default value.', array(), 'Admin.Theme.Panda'),
    ), 
    'star_highlight_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Highlight star color:', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'star_highlight_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
        'default_value' => '',
     ),
    'star_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Star color:', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'star_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
        'default_value' => '',
     ),
);
$form_fields['testimonial'] = array(
    'testm_per_page' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('How many reviews per page:', array(), 'Admin.Theme.Panda'),
        'name' => 'testm_per_page',
        'validation' => 'isUnsignedInt',
        'default_value' => 20,
        'class' => 'fixed-width-sm'
    ),
    'testimonial' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('How to display reviews', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'testimonial',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'show_comment_1',
                'value' => 1,
                'label' => $this->getTranslatOr()->trans('Display featured reviews only', array(), 'Modules.StProductcomments.Admin')
            ),
            array(
                'id' => 'show_comment_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Display all reviews', array(), 'Modules.StProductcomments.Admin')
            ),
        ),
        'validation' => 'isUnsignedInt',
    ), 
);
$form_fields['product'] = array(
    'pro_per_page' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('How many reviews per page:', array(), 'Admin.Theme.Panda'),
        'name' => 'pro_per_page',
        'validation' => 'isUnsignedInt',
        'default_value' => 10,
        'class' => 'fixed-width-sm'
    ),
    'pro_tag_nbr' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('How many words, which people use to describe products, to be display on the product page:', array(), 'Admin.Theme.Panda'),
        'name' => 'pro_tag_nbr',
        'validation' => 'isUnsignedInt',
        'default_value' => 12,
        'class' => 'fixed-width-sm',
    ),
    /*'pro_featured_first' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Display featured reviews at the beginning:', array(), 'Modules.StProductcomments.Admin'),
        'name' => 'pro_featured_first',
        'is_bool' => true,
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'pro_featured_first_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'pro_featured_first_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
    ),*/
);
$form_fields['setting'] = array(
    'direction_nav' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Display "next" and "prev" buttons:', array(), 'Admin.Theme.Panda'),
        'name' => 'direction_nav',
        'default_value' => 5,
        'values' => array(
            array(
                'id' => 'direction_nav_none',
                'value' => 0,
                'label' => $this->getTranslator()->trans('NO', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'direction_nav_top-right',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Top right-hand side', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'direction_nav_square',
                'value' => 4,
                'label' =>$this->getTranslator()->trans('Square', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'direction_nav_square_hover',
                'value' => 5,
                'label' =>$this->getTranslator()->trans('Square, show out when mouseover', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'direction_nav_circle',
                'value' => 6,
                'label' =>$this->getTranslator()->trans('Circle', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'direction_nav_circle_hover',
                'value' => 7,
                'label' =>$this->getTranslator()->trans('Circle, show out when mouseover', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'direction_nav_arrow',
                'value' => 8,
                'label' =>$this->getTranslator()->trans('Arrow', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'direction_nav_arrow_hover',
                'value' => 9,
                'label' =>$this->getTranslator()->trans('Arrow, show out when mouseover', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ),
    'hide_direction_nav_on_mob' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Hide "next" and "prev" buttons on small screen devices:', array(), 'Admin.Theme.Panda'),
        'name' => 'hide_direction_nav_on_mob',
        'default_value' => 1,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'hide_direction_nav_on_mob_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_direction_nav_on_mob_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'desc' => $this->gettranslator()->trans('Screen width < 992px.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isBool',
    ),
    'control_nav' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Show navigation:', array(), 'Admin.Theme.Panda'),
        'name' => 'control_nav',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'control_nav_1',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Bullets', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'control_nav_4',
                'value' => 4,
                'label' => $this->getTranslator()->trans('Round', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'control_nav_2',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Number', array(), 'Admin.Theme.Panda')),
            /*array(
                'id' => 'control_nav_3',
                'value' => 3,
                'label' => $this->getTranslator()->trans('Progress', array(), 'Admin.Theme.Panda')),*/
            array(
                'id' => 'control_nav_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ),
    'hide_control_nav_on_mob' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Hide navigation on small screen devices:', array(), 'Admin.Theme.Panda'),
        'name' => 'hide_control_nav_on_mob',
        'default_value' => 0,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'hide_control_nav_on_mob_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_control_nav_on_mob_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'desc' => $this->gettranslator()->trans('Screen width < 992px.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isBool',
    ),
    'direction_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Prev/next color:', array(), 'Admin.Theme.Panda'),
        'name' => 'direction_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'direction_color_hover' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Prev/next hover color:', array(), 'Admin.Theme.Panda'),
        'name' => 'direction_color_hover',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'direction_color_disabled' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Prev/next disabled color:', array(), 'Admin.Theme.Panda'),
        'name' => 'direction_color_disabled',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'direction_bg' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Prev/next background:', array(), 'Admin.Theme.Panda'),
        'name' => 'direction_bg',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'direction_hover_bg' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Prev/next hover background:', array(), 'Admin.Theme.Panda'),
        'name' => 'direction_hover_bg',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'direction_disabled_bg' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Prev/next disabled background:', array(), 'Admin.Theme.Panda'),
        'name' => 'direction_disabled_bg',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'pag_nav_bg' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Navigation color:', array(), 'Admin.Theme.Panda'),
        'name' => 'pag_nav_bg',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),  
     'pag_nav_bg_hover' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Navigation active color:', array(), 'Admin.Theme.Panda'),
        'name' => 'pag_nav_bg_hover',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
    'aw_display' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Always display this block:', array(), 'Admin.Theme.Panda'),
        'name' => 'aw_display',
        'default_value' => 1,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'aw_display_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'aw_display_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
    ),
    'title_align' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Block title:', array(), 'Admin.Theme.Panda'),
        'name' => 'title_align',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'left',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Left', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'center',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Center', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'right',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Right', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'none',
                'value' => 3,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ),
    'title_font_size' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Title size:', array(), 'Admin.Theme.Panda'),
        'name' => 'title_font_size',
        'prefix' => 'px',
        'class' => 'fixed-width-lg',
        'validation' => 'isUnsignedInt',
        'desc' => $this->getTranslator()->trans('Set it to 0 to use the default value.', array(), 'Admin.Theme.Panda'),
    ), 
    'title_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Heading color:', array(), 'Admin.Theme.Panda'),
        'name' => 'title_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'title_hover_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Heading hover color:', array(), 'Admin.Theme.Panda'),
        'name' => 'title_hover_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
    'title_bottom_border' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Title bottom border height:', array(), 'Admin.Theme.Panda'),
        'name' => 'title_bottom_border',
        'validation' => 'isNullOrUnsignedId',
        'prefix' => 'px',
        'class' => 'fixed-width-lg',
        'desc' => $this->getTranslator()->trans('Leave it empty to use the default value.', array(), 'Admin.Theme.Panda'),
    ),
    'title_bottom_border_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Title border color:', array(), 'Admin.Theme.Panda'),
        'name' => 'title_bottom_border_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
     'title_bottom_border_color_h' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Title border highlight color:', array(), 'Admin.Theme.Panda'),
        'name' => 'title_bottom_border_color_h',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
);
$form_fields['home_slider'] = array(
    'grid' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('How to display reviews:', array(), 'Admin.Theme.Panda'),
        'name' => 'grid',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'grid_0',
                'value' => 1,
                'label' => $this->getTranslator()->trans('List', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'grid_1',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Slider', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ),
    'nbr' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Define the number of comments to be displayed:', array(), 'Admin.Theme.Panda'),
        'name' => 'nbr',
        'default_value' => 4,
        // 'required' => true,
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
    ),
    'soby' => array(
        'type' => 'select',
        'label' => $this->getTranslator()->trans('Sort by:', array(), 'Admin.Theme.Panda'),
        'name' => 'soby',
        'options' => array(
            'query' => $this->sort_order,
            'id' => 'id',
            'name' => 'name',
        ),
        'validation' => 'isUnsignedInt',
    ), 
    'dropdownlistgroup' => array(
        'type' => 'dropdownlistgroup',
        'label' => $this->getTranslator()->trans('The number of columns:', array(), 'Admin.Theme.Panda'),
        'name' => 'pro_per',
        'values' => array(
                'maximum' => 12,
                'medias' => array('fw','xxl','xl','lg','md','sm','xs'),
            ),
        'desc' => $this->getTranslator()->trans('7, 9 and 11 can not be used in grid view, they will be automatically decreased to 6, 8 and 10. Set a value for the "Full width" drop down list to make this module fullwidth in the fullwidth* hooks, but the value of "Full width" drop down menu would not take effect in grid view.', array(), 'Admin.Theme.Panda'),
    ), 
    'spacing_between' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Spacing between items:', array(), 'Admin.Theme.Panda'),
        'name' => 'spacing_between',
        'validation' => 'isNullOrUnsignedId',
        'prefix' => 'px',
        'default_value' => 16,
        'class' => 'fixed-width-lg',
        'desc' => array(                            
                $this->getTranslator()->trans('Distance between items.', array(), 'Admin.Theme.Panda'),                          
            ),
    ),
    'slideshow' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Autoplay:', array(), 'Admin.Theme.Panda'),
        'name' => 'slideshow',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'slideshow_1',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'slideshow_2',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Once, has no effect in loop mode', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'slideshow_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ), 
    's_speed' => array(
		'type' => 'text',
		'label' => $this->getTranslator()->trans('Time:', array(), 'Admin.Theme.Panda'),
		'name' => 's_speed',
        'default_value' => 7000,
        'desc' => $this->getTranslator()->trans('The period, in milliseconds, between the end of a transition effect and the start of the next one.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
	),
    'a_speed' => array(
		'type' => 'text',
		'label' => $this->getTranslator()->trans('Transition period:', array(), 'Admin.Theme.Panda'),
		'name' => 'a_speed',
        'default_value' => 400,
        'desc' => $this->getTranslator()->trans('The period, in milliseconds, of the transition effect.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
	),
    'pause_on_hover' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Stop autoplay after interaction:', array(), 'Admin.Theme.Panda'),
        'name' => 'pause_on_hover',
        'default_value' => 0,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'pause_on_hover_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'pause_on_hover_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
        'desc' => $this->getTranslator()->trans('Autoplay will not be disabled after user interactions (swipes). Turn this option off, this slider will be restarted every time after interaction', array(), 'Admin.Theme.Panda'),
    ),
    'rewind_nav' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Loop:', array(), 'Admin.Theme.Panda'),
        'name' => 'rewind_nav',
        'default_value' => 0,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'rewind_nav_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'rewind_nav_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
    ),
    'move' => array(
		'type' => 'radio',
		'label' => $this->getTranslator()->trans('Scroll:', array(), 'Admin.Theme.Panda'),
		'name' => 'move',
        'default_value' => 1,
		'values' => array(
			array(
				'id' => 'move_on',
				'value' => 1,
				'label' => $this->getTranslator()->trans('Scroll per page', array(), 'Admin.Theme.Panda')),
			array(
				'id' => 'move_off',
				'value' => 0,
				'label' => $this->getTranslator()->trans('Scroll per item', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'move_free',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Free mode', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
	),
    'hide_mob' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Hide on small screen devices:', array(), 'Admin.Theme.Panda'),
        'name' => 'hide_mob',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'hide_mob_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Visible', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_mob_1',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Hide on mobile (screen width < 992px)', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_mob_2',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Hide on PC (screen width > 992px)', array(), 'Admin.Theme.Panda')),
        ),
        'desc' => $this->gettranslator()->trans('Screen width < 992px.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isUnsignedInt',
    ),
    'top_padding' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Top padding:', array(), 'Admin.Theme.Panda'),
        'name' => 'top_padding',
        'validation' => 'isNullOrUnsignedId',
        'prefix' => 'px',
        'class' => 'fixed-width-lg',
        'desc' => $this->getTranslator()->trans('Leave it empty to use the default value.', array(), 'Admin.Theme.Panda'),
    ),
    'bottom_padding' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Bottom padding:', array(), 'Admin.Theme.Panda'),
        'name' => 'bottom_padding',
        'validation' => 'isNullOrUnsignedId',
        'prefix' => 'px',
        'class' => 'fixed-width-lg',
        'desc' => $this->getTranslator()->trans('Leave it empty to use the default value.', array(), 'Admin.Theme.Panda'),
    ),
    'top_margin' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Top spacing:', array(), 'Admin.Theme.Panda'),
        'name' => 'top_margin',
        'validation' => 'isNullOrUnsignedId',
        'prefix' => 'px',
        'class' => 'fixed-width-lg',
        'desc' => $this->getTranslator()->trans('Leave it empty to use the default value.', array(), 'Admin.Theme.Panda'),
    ),
    'bottom_margin' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Bottom spacing:', array(), 'Admin.Theme.Panda'),
        'name' => 'bottom_margin',
        'validation' => 'isNullOrUnsignedId',
        'prefix' => 'px',
        'class' => 'fixed-width-lg',
        'desc' => $this->getTranslator()->trans('Leave it empty to use the default value.', array(), 'Admin.Theme.Panda'),
    ),
    'bg_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Background color:', array(), 'Admin.Theme.Panda'),
        'name' => 'bg_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
    'bg_pattern' => array(
        'type' => 'select',
        'label' => $this->getTranslator()->trans('Select a pattern number:', array(), 'Admin.Theme.Panda'),
        'name' => 'bg_pattern',
        'options' => array(
            'query' => $this->getPatternsArray(),
            'id' => 'id',
            'name' => 'name',
            'default' => array(
                'value' => 0,
                'label' => $this->getTranslator()->trans('None', array(), 'Admin.Theme.Panda'),
            ),
        ),
        'desc' => $this->getPatterns(),
        'validation' => 'isUnsignedInt',
    ),
    'bg_img' => array(
        'type' => 'file',
        'label' => $this->getTranslator()->trans('Upload your own pattern or background image:', array(), 'Admin.Theme.Panda'),
        'name' => 'bg_img',
        'desc' => '',
    ),
    'speed' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Parallax speed factor:', array(), 'Admin.Theme.Panda'),
        'name' => 'speed',
        'default_value' => 0.6,
        'desc' => array(
                $this->getTranslator()->trans('Speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling.', array(), 'Admin.Theme.Panda'),
                $this->getTranslator()->trans('Set it to 0 to disable the parallax effect.', array(), 'Admin.Theme.Panda'),
            ),
        'validation' => 'isFloat',
        'class' => 'fixed-width-sm',
    ),
    'bg_img_v_offset' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Background image vertical offset:', array(), 'Admin.Theme.Panda'),
        'name' => 'bg_img_v_offset',
        'default_value' => 0,
        'class' => 'fixed-width-sm',  
        'suffix' => 'px',
        'desc' => array(
                $this->getTranslator()->trans('For parallax effect.', array(), 'Admin.Theme.Panda'),
                $this->getTranslator()->trans('Unsigned int, like 0, 27, 100', array(), 'Admin.Theme.Panda'),
                $this->getTranslator()->trans('Move the background image down or up.', array(), 'Admin.Theme.Panda')
            ),
    ),
    'text_color' => array(
        'type' => 'color',
        'label' => $this->getTranslator()->trans('Text color:', array(), 'Admin.Theme.Panda'),
        'name' => 'text_color',
        'class' => 'color',
        'size' => 20,
        'validation' => 'isColor',
     ),
    'content_width' => array(
        'type' => 'select',
        'label' => $this->getTranslator()->trans('Content width:', array(), 'Admin.Theme.Panda'),
        'name' => 'content_width',
        'default_value' => 0,
        'options' => array(
            'query' => self::$text_width,
            'id' => 'id',
            'name' => 'name',
            'default' => array(
                'value' => '0',
                'label' => '100%',
            )
        ),
        'validation' => 'isUnsignedInt',
    ),
);
$form_fields['column'] = array(
    'display_pro_col' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('How to display reviews:', array(), 'Admin.Theme.Panda'),
        'name' => 'display_pro_col',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'display_pro_col_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('List', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'display_pro_col_1',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Slider', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ),
    'nbr_col' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Define the number of comments to be displayed:', array(), 'Admin.Theme.Panda'),
        'name' => 'nbr_col',
        'default_value' => 2,
        //'required' => true,
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
    ),
    'soby_col' => array(
		'type' => 'select',
		'label' => $this->getTranslator()->trans('Sort by:', array(), 'Admin.Theme.Panda'),
		'name' => 'soby_col',
        'options' => array(
			'query' => $this->sort_order,
			'id' => 'id',
			'name' => 'name',
		),
        'validation' => 'isUnsignedInt',
	), 
    'slideshow_col' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Autoplay:', array(), 'Admin.Theme.Panda'),
        'name' => 'slideshow_col',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'slideshow_col_1',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'slideshow_col_2',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Once, has no effect in loop mode', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'slideshow_col_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isUnsignedInt',
    ),
    'pause_on_hover_col' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Stop autoplay after interaction:', array(), 'Admin.Theme.Panda'),
        'name' => 'pause_on_hover_col',
        'default_value' => 0,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'pause_col_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'pause_col_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
        'desc' => $this->getTranslator()->trans('Autoplay will not be disabled after user interactions (swipes). Turn this option off, this slider will be restarted every time after interaction', array(), 'Admin.Theme.Panda'),
    ),
    'rewind_nav_col' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Loop:', array(), 'Admin.Theme.Panda'),
        'name' => 'rewind_nav_col',
        'default_value' => 0,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'rewind_nav_col_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'rewind_nav_col_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
    ),
    's_speed_col' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Time:', array(), 'Admin.Theme.Panda'),
        'name' => 's_speed_col',
        'default_value' => 7000,
        'desc' => $this->getTranslator()->trans('The period, in milliseconds, between the end of a transition effect and the start of the next one.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
    ),
    'a_speed_col' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Transition period:', array(), 'Admin.Theme.Panda'),
        'name' => 'a_speed_col',
        'default_value' => 400,
        'desc' => $this->getTranslator()->trans('The period, in milliseconds, of the transition effect.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
    ),
    'hide_mob_col' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Hide on small screen devices:', array(), 'Admin.Theme.Panda'),
        'name' => 'hide_mob_col',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'hide_mob_col_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Visible', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_mob_col_1',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Hide on mobile (screen width < 992px)', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_mob_col_2',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Hide on PC (screen width > 992px)', array(), 'Admin.Theme.Panda')),
        ),
        'desc' => $this->gettranslator()->trans('Screen width < 992px.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isUnsignedInt',
    ),
    'aw_display_col' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Always display this block:', array(), 'Admin.Theme.Panda'),
        'name' => 'aw_display_col',
        'default_value' => 1,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'aw_display_col_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'aw_display_col_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
    ),
);
$form_fields['footer'] = array(
    'nbr_fot' => array(
		'type' => 'text',
		'label' => $this->getTranslator()->trans('Define the number of comments to be displayed:', array(), 'Admin.Theme.Panda'),
		'name' => 'nbr_fot',
        'default_value' => 1,
        //'required' => true,
        'validation' => 'isUnsignedInt',
        'class' => 'fixed-width-sm'
	),
    'soby_fot' => array(
		'type' => 'select',
		'label' => $this->getTranslator()->trans('Sort by:', array(), 'Admin.Theme.Panda'),
		'name' => 'soby_fot',
        'options' => array(
			'query' => $this->sort_order,
			'id' => 'id',
			'name' => 'name',
		),
        'validation' => 'isUnsignedInt',
	), 
    'aw_display_fot' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Always display this block:', array(), 'Admin.Theme.Panda'),
        'name' => 'aw_display_fot',
        'default_value' => 1,
        'is_bool' => true,
        'values' => array(
            array(
                'id' => 'aw_display_fot_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'aw_display_fot_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')),
        ),
        'validation' => 'isBool',
    ),
    'footer_wide' => array(
        'type' => 'select',
        'label' => $this->getTranslator()->trans('Wide on footer:', array(), 'Admin.Theme.Panda'),
        'name' => 'footer_wide',
        'default_value' => 3,
        'options' => array(
            'query' => self::$wide_map,
            'id' => 'id',
            'name' => 'name',
        ),
        'validation' => 'isGenericName',
    ),  
    'hide_mob_fot' => array(
        'type' => 'radio',
        'label' => $this->getTranslator()->trans('Hide on small screen devices:', array(), 'Admin.Theme.Panda'),
        'name' => 'hide_mob_fot',
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'hide_mob_fot_0',
                'value' => 0,
                'label' => $this->getTranslator()->trans('Visible', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_mob_fot_1',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Hide on mobile (screen width < 992px)', array(), 'Admin.Theme.Panda')),
            array(
                'id' => 'hide_mob_fot_2',
                'value' => 2,
                'label' => $this->getTranslator()->trans('Hide on PC (screen width > 992px)', array(), 'Admin.Theme.Panda')),
        ),
        'desc' => $this->gettranslator()->trans('Screen width < 992px.', array(), 'Admin.Theme.Panda'),
        'validation' => 'isUnsignedInt',
    ),
);
$form_fields['video'] = array(
    'video_poster' => array(
        'type' => 'file',
        'label' => $this->getTranslator()->trans('Video thumbnail image(Required):', array(), 'Admin.Theme.Panda'),
        'name' => 'video_poster',
        'desc' => array(
                $this->getTranslator()->trans('Upload a image here, it will be displayed on mobile devices, because of the video background feature can not work on mobile devices, otherwise a transparent background will be apply to this block on mobile devices.', array(), 'Admin.Theme.Panda'),
            ),
    ),
    'video_mpfour' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('MP4 format(Required):', array(), 'Admin.Theme.Panda'),
        'name' => 'video_mpfour',
        'size' => 64,
        'desc' => array(
            $this->getTranslator()->trans('Example: http://www.yourdomain.com/video.mp4', array(), 'Admin.Theme.Panda'),
            $this->getTranslator()->trans('MP4 is supported by major browsers like Firefox, Opera, Chrome, Safari and Internet Explorer 9+. So you do not have to prepare .webm and .ogv, it is okay to leave the follow to fields empty.', array(), 'Admin.Theme.Panda'),
            $this->getTranslator()->trans('You can convert your videos online or using tools like "Miro Video Converter" to convert them into different formats.', array(), 'Admin.Theme.Panda'),
            ),
        'validation' => 'isUrlOrEmpty',
    ),
    'video_webm' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('WebM format(Optional):', array(), 'Admin.Theme.Panda'),
        'name' => 'video_webm',
        'size' => 64,
        'desc' => array(
                $this->getTranslator()->trans('Example: http://www.yourdomain.com/video.webm, Firefox, Chrome and Opera prefer WebM / Ogg formats', array(), 'Admin.Theme.Panda'),
            ),
        'validation' => 'isUrlOrEmpty',
    ),
    'video_ogg' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Ogv or ogg format(Optional):', array(), 'Admin.Theme.Panda'),
        'name' => 'video_ogg',
        'size' => 64,
        'desc' => array(
            $this->getTranslator()->trans('Example: http://www.yourdomain.com/video.ogv, Firefox, Chrome and Opera prefer WebM / Ogv formats', array(), 'Admin.Theme.Panda'),
            ),
        'validation' => 'isUrlOrEmpty',
    ),
    'video_loop' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Loop:', array(), 'Admin.Theme.Panda'),
        'name' => 'video_loop',
        'is_bool' => true,
        'default_value' => 1,
        'values' => array(
            array(
                'id' => 'loop_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')
            ),
            array(
                'id' => 'loop_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')
            )
        ),
        'validation' => 'isUnsignedInt',
    ),
    'video_muted' => array(
        'type' => 'switch',
        'label' => $this->getTranslator()->trans('Muted:', array(), 'Admin.Theme.Panda'),
        'name' => 'video_muted',
        'is_bool' => true,
        'default_value' => 0,
        'values' => array(
            array(
                'id' => 'muted_on',
                'value' => 1,
                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Theme.Panda')
            ),
            array(
                'id' => 'muted_off',
                'value' => 0,
                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Theme.Panda')
            )
        ),
        'validation' => 'isUnsignedInt',
    ),
    'video_v_offset' => array(
        'type' => 'text',
        'label' => $this->getTranslator()->trans('Video vertical offset:', array(), 'Admin.Theme.Panda'),
        'name' => 'video_v_offset',
        'default_value' => 0,
        'class' => 'fixed-width-sm',  
        'suffix' => '%',
        'desc' => array(
                $this->getTranslator()->trans('From 0 to 100', array(), 'Admin.Theme.Panda'),
                $this->getTranslator()->trans('This field is used to move the video up.', array(), 'Admin.Theme.Panda')
            ),
        'validation' => 'isUnsignedInt',
    ),
);

$form_fields['hook'] = array();
foreach($this->_hooks AS $key => $values)
{
    if (!is_array($values) || !count($values))
        continue;
    $form_fields['hook'][] = array(
			'type' => 'checkbox',
			'label' => $key,
			'name' => $key,
			'lang' => true,
			'values' => array(
				'query' => $values,
				'id' => 'id',
				'name' => 'name'
			)
		);
}

return $form_fields; 