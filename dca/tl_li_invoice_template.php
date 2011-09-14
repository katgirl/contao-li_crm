<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * PHP version 5
 * @copyright  Liplex Webprogrammierung und -design Christian Kolb 2011
 * @author     Christian Kolb <info@liplex.de>
 * @license    MIT (see /LICENSE.txt for further information)
 */

/**
 * Table tl_li_invoice_category
 */
$GLOBALS['TL_DCA']['tl_li_invoice_template'] = array (

	// Config
	'config' => array (
		'dataContainer'               => 'Table',
		'enableVersioning'            => true
	),
	
	// List
	'list' => array (
		'sorting' => array (
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 11
		),
		'label' => array (
			'fields'                  => array('title'),
			'format'                  => '%s'
		),
		'global_operations' => array (
            'all' => array (
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array (
			'edit' => array (
				'label'               => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array (
				'label'               => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array (
				'label'               => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array (
				'label'               => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array (
		'__selector__'                => array(''),
		'default'                     => '{template_legend},title,html,invoice_template,logo;{generation_path_legend},basePath,periodFolder;'
	),

	// Subpalettes
	'subpalettes' => array (
		''                            => ''
	),

	// Fields
	'fields' => array (
        'title' => array (
			'label'                   => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['title'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>250, 'tl_class'=>'w50')
		),
		'invoice_template' => array (
			'label'                   => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['invoice_template'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('InvoiceTemplate', 'getInvoiceTemplates')
		),
		'logo' => array (
			'label'                   => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['logo'],
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr', 'files'=>true, 'filesOnly'=>true)
		),
		'basePath' => array (
			'label'                   => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['basePath'],
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr', 'files'=>false)
		),
		'periodFolder' => array (
			'label'                   => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['periodFolder'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('daily', 'weekly', 'monthly', 'yearly'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_li_invoice_template']['periods'],
			'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50')
		)
	)
);

?>