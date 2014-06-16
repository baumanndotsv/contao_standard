<?php
/**
 * Created by PhpStorm.
 * User: sbaumann
 * Date: 15.06.14
 * Time: 10:42
 */

class Tiny
{
	public function setDefaultTiny($strName)
	{
		global $objMain;

		if ($objMain->User->tinyWithOutMenu)
		{
			foreach ($GLOBALS['TL_DCA'][$strName]['fields'] as $k => $v)
			{
				if (isset($v['eval']['rte']))
				{
					switch ($v['eval']['rte'])
					{
						case 'tinyMCE':
							$GLOBALS['TL_DCA'][$strName]['fields'][$k]['eval']['rte'] = 'tinyMCEWithOutMenu';
							break;
						default:
							break;
					}
				}
			}
		}
	}
} 