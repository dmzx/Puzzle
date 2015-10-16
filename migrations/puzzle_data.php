<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\puzzle\migrations;

class puzzle_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
		 // Add configs
		 array('config.add', array('puzzle_fixed', '0')),
		 array('config.add', array('puzzle_fixed_level', '0')),
		 array('config.add', array('puzzle_mixed', '0')),
		 array('config.add', array('puzzle_simple', '0')),
		 array('config.add', array('puzzle_polygon', '1')),
		 array('config.add', array('puzzle_areaimage', '0')),
		 array('config.add', array('puzzle_areaborder', '0')),
		 array('config.add', array('puzzle_solve_button', '1')),
		 array('config.add', array('puzzle_default', '1')),
		 array('config.add', array('puzzle_acp_page', '20')),
		 // Add permissions
		 array('permission.add', array('a_dm_puzzle')),
		 // Set permissions
		 array('permission.permission_set', array('ADMINISTRATORS', 'a_dm_puzzle', 'group')),
		);
	}
}