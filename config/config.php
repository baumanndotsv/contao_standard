<?php
/**
 * Created by PhpStorm.
 * User: sbaumann
 * Date: 15.06.14
 * Time: 10:38
 */

// add TinyBlueforest
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Tiny', 'setDefaultTiny');

/**
 * set Standard
 *
 * add ID to Row in ListView
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('DCAStandard', 'setStandard');
