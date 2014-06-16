<?php
/**
 * Created by PhpStorm.
 * User: sbaumann
 * Date: 16.06.14
 * Time: 07:08
 */


foreach ($GLOBALS['TL_DCA']['tl_user']['palettes'] as $k => $v)
{
	if ($k == '__selector__')
	{
		continue;
	}

	$GLOBALS['TL_DCA']['tl_user']['palettes'][$k] = str_replace($v, $v . ';{contao_easy_legend},showRowId,tinyWithOutMenu', $v);
}


array_insert($GLOBALS['TL_DCA']['tl_user']['fields'], 1, array
(
		'showRowId' => array
		(
				'label'     => &$GLOBALS['TL_LANG']['tl_user']['showRowId'],
				'exclude'   => true,
				'inputType' => 'checkbox',
				'filter'    => true,
				'eval'      => array('tl_class' => 'w50'),
				'sql'       => "char(1) NOT NULL default ''"
		),
		'tinyWithOutMenu' => array
		(
				'label'     => &$GLOBALS['TL_LANG']['tl_user']['tinyWithOutMenu'],
				'exclude'   => true,
				'inputType' => 'checkbox',
				'filter'    => true,
				'eval'      => array(),
				'sql'       => "char(1) NOT NULL default ''"
		),
));
