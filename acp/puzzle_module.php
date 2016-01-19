<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\puzzle\acp;

class puzzle_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $request, $user;

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('dmzx.puzzle.admin.controller');

		// Requests
		$action = $request->variable('action', '');

		if ($request->is_set_post('add'))
		{
			$action = 'add';
		}

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		// Load the "config" or "edit" module modes
		switch ($mode)
		{
			case 'config':
				$this->tpl_name = 'acp_dm_puzzle_config';
				$this->page_title = $user->lang['PUZZLE_CONFIG'];

				$admin_controller->display_config();
			break;

			case 'edit':
				$this->tpl_name = 'acp_dm_puzzle';
				$this->page_title = $user->lang['PUZZLE_EDIT'];

				$admin_controller->display_edit();
			break;
		}
	}
}
