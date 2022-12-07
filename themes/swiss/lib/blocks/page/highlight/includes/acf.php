<?php

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

return array(
          'key' => 'group_'.$blockName,
          'name' => $blockName,
          'label' => str_replace('-', ' ', ucfirst($blockName)),
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_'.$blockName.'_hide',
							'label' => 'Hide this block',
							'name' => 'hide',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '48',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_tab1',
							'label' => 'Content',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
						array(
							'key' => 'field_'.$blockName.'_image',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_text',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_'.$blockName.'_see_more',
							'label' => 'See More',
							'name' => 'see_more',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '48',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_see_more_text',
							'label' => 'See More Text',
							'name' => 'see_more_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_see_more_url',
							'label' => 'See More URL',
							'name' => 'see_more_url',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
                        array(
                            'key' => 'field_'.$blockName.'_icon',
                            'label' => 'Icon',
                            'name' => 'icon',
                            'type' => 'select',
                            'instructions' => 'Select the icon to display on this block',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'esteeton' => 'esteeton',
                                'kahvikuppi' => 'kahvikuppi',
                                'kova-aani' => 'kova-aani',
                                'lasi' => 'lasi',
                                'maapallo' => 'maapallo',
                                'paikkamerkki' => 'paikkamerkki',
                                'puu1' => 'puu1',
                                'sulje' => 'sulje',
                                'henkari' => 'henkari',
                                'kaksi-sydanta' => 'kaksi-sydanta',
                                'kyna' => 'kyna',
                                'lastenvaunut' => 'lastenvaunut',
                                'mies-ja-nainen' => 'mies-ja-nainen',
                                'pelikonsoli' => 'pelikonsoli',
                                'puu2' => 'puu2',
                                'surulliset-kasvot' => 'surulliset-kasvot',
                                'henkilo' => 'henkilo',
                                'kala' => 'kala',
                                'lahjapaketti' => 'lahjapaketti',
                                'lentokone' => 'lentokone',
                                'mies' => 'mies',
                                'polkupyora' => 'polkupyora',
                                'roskakori' => 'roskakori',
                                'suu' => 'suu',
                                'ilmapallo' => 'ilmapallo',
                                'kannu' => 'kannu',
                                'lainausmerkki' => 'lainausmerkki',
                                'linnut' => 'linnut',
                                'nainen' => 'nainen',
                                'porkkana' => 'porkkana',
                                'saapas' => 'saapas',
                                'suurennuslasi' => 'suurennuslasi',
                                'iloiset-kasvot' => 'iloiset-kasvot',
                                'kello' => 'kello',
                                'laiva' => 'laiva',
                                'lisaa' => 'lisaa',
                                'oikein' => 'oikein',
                                'puhekupla' => 'puhekupla',
                                'sateenvarjo' => 'sateenvarjo',
                                'sydan' => 'sydan',
                                'info' => 'info',
                                'kirja' => 'kirja',
                                'lamppu' => 'lamppu',
                                'lumihiutale' => 'lumihiutale',
                                'omena' => 'omena',
                                'pullonavaaja' => 'pullonavaaja',
                                'silmalasit' => 'silmalasit',
                                'talo' => 'talo',
                            ),
                            'default_value' => array(
                                0 => 'esteeton',
                            ),
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                        ),
                        array(
							'key' => 'field_'.$blockName.'_tab2',
							'label' => 'Settings',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'top',
							'endpoint' => 0,
						),
                        array(
                            'key' => 'field_'.$blockName.'_color',
                            'label' => 'Color',
                            'name' => 'color',
                            'type' => 'select',
                            'instructions' => 'Select the color scheme for this block',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'yellow' => 'Yellow',
                                'pink' => 'Pink',
                                'green' => 'Green',
                                'blue' => 'Blue',
                            ),
                            'default_value' => array(
                                0 => 'yellow',
                            ),
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
						),
						array(
							'key' => 'field_'.$blockName.'_read_more_aria_label',
							'label' => 'Read More Aria Label',
							'name' => 'read_more_aria_label',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				);