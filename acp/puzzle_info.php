<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\puzzle\acp;

class puzzle_info
{
	function module()
	{
		return array(
			'filename'	=> '\dmzx\puzzle\acp\puzzle_module',
			'title'		=> 'PUZZLE_TITLE',
			'modes'		=> array(
				'config' => array('title' => 'PUZZLE_CONFIG', 'auth' => 'ext_dmzx/puzzle && acl_a_dm_puzzle', 'cat' => array('PUZZLE_TITLE')),
				'edit' => array('title'	=> 'PUZZLE_EDIT', 'auth'	=> 'ext_dmzx/puzzle && acl_a_dm_puzzle', 'cat'	=> array('PUZZLE_TITLE')),
			),
		);
	}
}
