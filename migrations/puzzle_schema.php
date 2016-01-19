<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\puzzle\migrations;

class puzzle_schema extends \phpbb\db\migration\migration
{
	public function update_schema()
	{
		return 	array(
			'add_tables'	=> array(
				$this->table_prefix . 'dm_puzzle'	=> array(
					'COLUMNS' => array(
						'id'				=> array('UINT:11', null, 'auto_increment'),
						'name'				=> array('VCHAR', ''),
						'description'		=> array('MTEXT_UNI', ''),
						'image_name'		=> array('VCHAR', ''),
						'bbcode_bitfield'	=> array('VCHAR', ''),
						'bbcode_uid'		=> array('VCHAR:8', ''),
						'bbcode_options'	=> array('UINT:4', 0),
					),
					'PRIMARY_KEY'	=> 'id',
				),
			),
		);
	}

	public function revert_schema()
	{
		return 	array(
			'drop_tables' => array(
				$this->table_prefix . 'dm_puzzle',
			),
		);
	}
}
