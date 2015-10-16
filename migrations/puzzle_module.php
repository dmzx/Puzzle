<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\puzzle\migrations;

class puzzle_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'PUZZLE_HEADER')),
			array('module.add', array(
			'acp', 'PUZZLE_HEADER', array(
					'module_basename'	=> '\dmzx\puzzle\acp\puzzle_module', 'modes' => array('config', 'edit'),
				),
			)),
		);
	}
}