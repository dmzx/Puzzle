<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\puzzle\controller;

/**
* Admin controller
*/
class admin_controller
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\pagination */
	protected $pagination;

	/** @var \phpbb\log\log */
	protected $log;

	protected $puzzle_table;

	/**
	* Constructor
	*
	* @param \phpbb\config\config				$config
	* @param \phpbb\template\template		 	$template
	* @param \phpbb\user						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\request\request				$request
	* @param \phpbb\pagination					$pagination
	* @param \phpbb\log\log						$log
	* @param									$puzzle_table
	*
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, \phpbb\request\request $request, \phpbb\pagination $pagination, \phpbb\log\log $log, $puzzle_table)
	{
		$this->config 			= $config;
		$this->template 		= $template;
		$this->user 			= $user;
		$this->db 				= $db;
		$this->request 			= $request;
		$this->pagination 		= $pagination;
		$this->log				= $log;
		$this->puzzle_table 	= $puzzle_table;
	}

	/**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function display_config()
	{
		add_form_key('acp_puzzle_config');

		// Set up general vars
		$action = $this->request->variable('action', '');
		$action = (isset($_POST['add'])) ? 'add' : ((isset($_POST['save'])) ? 'save' : $action);
		$form_action = $this->u_action. '&amp;action=config';

		$this->template->assign_vars(array(
			'BASE'		=> $this->u_action,
		));

		$start	= $this->request->variable('start', 0);
		$number	= $this->config['puzzle_acp_page'];

		$s_hidden_fields = '';
		$puzzle_edit = array();

		$submit = (isset($_POST['acp_puzzle_config'])) ? true: false;

		if ($submit)
		{
			if (!check_form_key('acp_puzzle_config'))
			{
				trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Read the given values from the form
			$acp_page				= $this->request->variable('puzzle_acp_page', 0);
			$puzzle_default			= $this->request->variable('puzzle_default', 0);
			$puzzle_fixed			= $this->request->variable('puzzle_fixed', 0);
			$puzzle_fixed_level		= $this->request->variable('puzzle_fixed_level', 0);
			$puzzle_mixed			= $this->request->variable('puzzle_mixed', 0);
			$puzzle_simple			= $this->request->variable('puzzle_simple', 0);
			$puzzle_polygon			= $this->request->variable('puzzle_polygon', 0);
			$puzzle_areaimage		= $this->request->variable('puzzle_areaimage', 0);
			$puzzle_areaborder		= $this->request->variable('puzzle_areaborder', 0);
			$puzzle_solve_button	= $this->request->variable('puzzle_solve_button', 0);

			// Update values in phpbb_config
			if ($acp_page != $this->config['puzzle_acp_page'])
			{
				$this->config->set('puzzle_acp_page', $acp_page);
			}

			if ($puzzle_default != $this->config['puzzle_default'])
			{
				$this->config->set('puzzle_default', $puzzle_default);
			}

			if ($puzzle_fixed != $this->config['puzzle_fixed'])
			{
				$this->config->set('puzzle_fixed', $puzzle_fixed);
			}

			if ($puzzle_fixed_level != $this->config['puzzle_fixed_level'])
			{
				$this->config->set('puzzle_fixed_level', $puzzle_fixed_level);
			}

			if ($puzzle_mixed != $this->config['puzzle_mixed'])
			{
				$this->config->set('puzzle_mixed', $puzzle_mixed);
			}

			if ($puzzle_simple != $this->config['puzzle_simple'])
			{
				$this->config->set('puzzle_simple', $puzzle_simple);
			}

			if ($puzzle_polygon != $this->config['puzzle_polygon'])
			{
				$this->config->set('puzzle_polygon', $puzzle_polygon);
			}

			if ($puzzle_areaimage != $this->config['puzzle_areaimage'])
			{
				$this->config->set('puzzle_areaimage', $puzzle_areaimage);
			}

			if ($puzzle_areaborder != $this->config['puzzle_areaborder'])
			{
				$this->config->set('puzzle_areaborder', $puzzle_areaborder);
			}

			if ($puzzle_solve_button != $this->config['puzzle_solve_button'])
			{
				$this->config->set('puzzle_solve_button', $puzzle_solve_button);
			}

			// Add logs
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_PUZZLE_SETTINGS');
			trigger_error($this->user->lang['PUZZLE_CONFIG_UPDATED'] . adm_back_link($this->u_action));

			// Clear the cache
			$cache->destroy('config');
		}
		else
		{
			$this->template->assign_vars(array(
				'S_CONFIG'		=> true,
				'ACP_PAGE'		=> $this->config['puzzle_acp_page'],
				'DEFAULT'		=> $this->config['puzzle_default'],
				'FIXED'			=> $this->config['puzzle_fixed'],
				'FIXED_LEVEL'	=> $this->config['puzzle_fixed_level'],
				'MIXED'			=> $this->config['puzzle_mixed'],
				'SIMPLE'		=> $this->config['puzzle_simple'],
				'POLYGON'		=> $this->config['puzzle_polygon'],
				'AREAIMAGE'		=> $this->config['puzzle_areaimage'],
				'AREABORDER'	=> $this->config['puzzle_areaborder'],
				'SOLVE_BUTTON'	=> $this->config['puzzle_solve_button'],
				'U_ACTION'		=> $form_action,
			));
		}
	}

	public function display_edit()
	{
		add_form_key('acp_puzzle');
		$form_name = 'acp_puzzle';

		// Set up general vars
		$action = $this->request->variable('action', '');
		$action = (isset($_POST['add'])) ? 'add' : ((isset($_POST['save'])) ? 'save' : $action);
		$form_action = $this->u_action. '&amp;action=config';

		$this->template->assign_vars(array(
			'BASE'		=> $this->u_action,
		));

		$start	= $this->request->variable('start', 0);
		$number	= $this->config['puzzle_acp_page'];

		$s_hidden_fields = '';
		$puzzle_edit = array();

		$submit = (isset($_POST['acp_puzzle_config'])) ? true: false;

		switch ($action)
		{
			case 'edit':
				$puzzle_id = $this->request->variable('id', 0);

				if (!$puzzle_id)
				{
					trigger_error($this->user->lang['PUZZLE_NO_PUZZLE'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				$sql = 'SELECT *
					FROM ' . $this->puzzle_table . "
					WHERE id = $puzzle_id";
				$result = $this->db->sql_query_limit($sql, 1);
				$puzzle_edit = $this->db->sql_fetchrow($result);
				$this->db->sql_freeresult($result);

				$s_hidden_fields .= '<input type="hidden" name="id" value="' . $puzzle_id . '" />';

				decode_message($puzzle_edit['description'], $puzzle_edit['bbcode_uid']);

				case 'add':
					$this->template->assign_vars(array(
						'S_EDIT_PUZZLE'		=> true,
						'U_ACTION'			=> $this->u_action,
						'U_BACK'			=> $this->u_action,
						'DESCRIPTION'		=> (isset($puzzle_edit['description'])) ? $puzzle_edit['description'] : '',
						'NAME'				=> (isset($puzzle_edit['name'])) ? $puzzle_edit['name'] : '',
						'IMAGE_NAME'		=> (isset($puzzle_edit['image_name'])) ? $puzzle_edit['image_name'] : '',
						'S_HIDDEN_FIELDS'	=> $s_hidden_fields)
					);

					return;
				break;

				case 'save':
					if (!check_form_key($form_name))
					{
						trigger_error($this->user->lang['PUZZLE_FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}
					$puzzle_id		= $this->request->variable('id', 0);
					$name			= $this->request->variable('name', '', true);
					$description	= $this->request->variable('description', '', true);
					$image_name		= $this->request->variable('image_name', '', true);
					$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
					$allow_bbcode = $allow_urls = $allow_smilies = true;
					generate_text_for_storage($description, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);

					$sql_ary = array(
						'name'				=> $name,
						'description'		=> $description,
						'image_name'		=> $image_name,
						'bbcode_uid'		=> $uid,
						'bbcode_bitfield'	=> $bitfield,
						'bbcode_options'	=> $options,
					);

					if ($puzzle_id)
					{
						$this->db->sql_query('UPDATE ' . $this->puzzle_table . ' SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . ' WHERE id = ' . $puzzle_id);
					}
					else
					{
						$this->db->sql_query('INSERT INTO ' . $this->puzzle_table . ' ' . $this->db->sql_build_array('INSERT', $sql_ary));
					}

					$message = ($puzzle_id) ? $this->user->lang['PUZZLE_UPDATED'] : $this->user->lang['PUZZLE_ADDED'];
					trigger_error($message . adm_back_link($this->u_action));

				break;

				case 'delete':

					$puzzle_id = $this->request->variable('id', 0);

					if (!$puzzle_id)
					{
						trigger_error($this->user->lang['PUZZLE_NO_PUZZLE'] . adm_back_link($this->u_action), E_USER_WARNING);
					}

					if (confirm_box(true))
					{
						$sql = 'SELECT image_name
							FROM ' . $this->puzzle_table . "
							WHERE id = $puzzle_id";
						$result = $this->db->sql_query($sql);
						$deleted_puzzle = $this->db->sql_fetchfield('image_name');
						$this->db->sql_freeresult($result);

						$sql = 'DELETE FROM ' . $this->puzzle_table . "
							WHERE id = $puzzle_id";
						$this->db->sql_query($sql);

						trigger_error($this->user->lang['PUZZLE_REMOVED'] . adm_back_link($this->u_action));
					}
					else
					{
						confirm_box(false, $this->user->lang['PUZZLE_CONFIRM_OPERATION'], build_hidden_fields(array(
							'id'		=> $puzzle_id,
							'action'	=> 'delete',
						)));
					}

			break;
		}

		$this->template->assign_vars(array(
			'U_ACTION'			=> $this->u_action,
			'S_HIDDEN_FIELDS'	=> $s_hidden_fields)
		);

		// List all puzzles
		$sort_days	= $this->request->variable('st', 0);
		$sort_key	= $this->request->variable('sk', 'name');
		$sort_dir	= $this->request->variable('sd', 'ASC');
		$limit_days = array(0 => $this->user->lang['PUZZLE_ALL_PUZZLES'], 1 => $this->user->lang['1_DAY'], 7 => $this->user->lang['7_DAYS'], 14 => $this->user->lang['2_WEEKS'], 30 => $this->user->lang['1_MONTH'], 90 => $this->user->lang['3_MONTHS'], 180 => $this->user->lang['6_MONTHS'], 365 => $this->user->lang['1_YEAR']);

		$sort_by_text = array('t' => $this->user->lang['PUZZLE_SORT_NAME'], 'd' => $this->user->lang['PUZZLE_SORT_DESCRIPTION'], 'p' => $this->user->lang['PUZZLE_SORT_IMAGE_NAME']);
		$sort_by_sql = array('t' => 'name', 'd' => 'description', 'p' => 'image_NAME');

		$s_limit_days = $s_sort_key = $s_sort_dir = $u_sort_param = '';
		gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);
		$sql_sort_order = $sort_by_sql[$sort_key] . ' ' . (($sort_dir == 'd') ? 'DESC' : 'ASC');

		// Total number of downloads
		$sql = 'SELECT COUNT(id) AS total_puzzles
			FROM ' . $this->puzzle_table;
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$total_puzzles = $row['total_puzzles'];
		$this->db->sql_freeresult($result);

		$sql = 'SELECT *
			FROM ' . $this->puzzle_table . '
			ORDER BY '. $sql_sort_order;
		$result = $this->db->sql_query_limit($sql, $number, $start);

		while ($row = $this->db->sql_fetchrow($result))
		{
			$this->template->assign_block_vars('puzzle', array(
				'NAME'			=> $name = htmlspecialchars_decode(generate_text_for_display($row['name'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options'])),
				'DESCRIPTION'	=> $description = htmlspecialchars_decode(generate_text_for_display($row['description'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options'])),
				'IMAGE_NAME'	=> $image_name = htmlspecialchars_decode(generate_text_for_display($row['image_name'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options'])),
				'U_EDIT'		=> $this->u_action . '&amp;action=edit&amp;id=' . $row['id'],
				'U_DELETE'		=> $this->u_action . '&amp;action=delete&amp;id=' . $row['id'])
			);
		}
		$this->db->sql_freeresult($result);

		//Start pagination
		$this->pagination->generate_template_pagination($this->u_action, 'pagination', 'start',	$total_puzzles, $number, $start, true);

		$this->template->assign_vars(array(
			'S_PUZZLE_ACTION' 	=> $this->u_action,
			'S_SELECT_SORT_DIR'	=> $s_sort_dir,
			'S_SELECT_SORT_KEY'	=> $s_sort_key,
			'TOTAL_PUZZLES'		=> ($total_puzzles == 1) ? $this->user->lang['PUZZLE_SINGLE'] : sprintf($this->user->lang['PUZZLE_MULTI'], $total_puzzles),
		));
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
