<?php

/**
 * Created by PhpStorm.
 * User: sbaumann
 * Date: 15.06.14
 * Time: 15:06
 */


class DCAStandard extends Backend
{
	/**
	 * set standard to the core
	 *
	 * @param $strName
	 */
	public function setStandard($strName)
	{
		if (isset($GLOBALS['TL_DCA'][$strName]['list']['label']['format']))
		{
			$GLOBALS['TL_DCA'][$strName]['list']['label']['fields'][] = 'id';
			$GLOBALS['TL_DCA'][$strName]['list']['label']['format'] .= '<span style="color: #77ac45;padding-left: 10px;font-weight: bold;">[%s]</span>';
		}

		if (isset($GLOBALS['TL_DCA'][$strName]['list']['sorting']['child_record_callback']))
		{
			$GLOBALS['TL_DCA'][$strName]['list']['sorting']['child_record_callback'] = array(
					'DCAStandard',
					'addIdToLabel',
					$GLOBALS['TL_DCA'][$strName]['list']['sorting']['child_record_callback'][1]
			);
		}
	}


	/**
	 * Add ID to each record
	 *
	 * @param array
	 *
	 * @return string
	 */
	public function addIdToLabel($row)
	{
		$strName = Input::get('table');

		$strFunction = $GLOBALS['TL_DCA'][$strName]['list']['sorting']['child_record_callback'][2];

		$this->import($strName);

		$return = '';

		$return = $this->$strName->$strFunction($row);

		$strAdd = '</span><span style="color: #77ac45;padding-left: 10px;font-weight: bold;">[' . $row['id'] . ']</span></div>';
		$return = str_replace('</span></div>', $strAdd, $return);

		return $return;
	}
} 