<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\puzzle\controller;

class puzzle
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\path_helper */
	protected $path_helper;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\log\log */
	protected $log;

	/** @var string database table */
	protected $puzzle_table;

	/** @var string */
	protected $phpbb_root_path;

	/**
	* Constructor
	*
	* @param \phpbb\template\template		 	$template
	* @param \phpbb\path_helper					$path_helper
	* @param \phpbb\user						$user
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\config\config				$config
	* @param \phpbb\controller\helper		 	$helper
	* @param \phpbb\log\log						$log
	* @param									$puzzle_table
	* @param									$phpbb_root_path
	*
	*/
	public function __construct(\phpbb\template\template $template, \phpbb\path_helper $path_helper, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, \phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\log\log $log, $puzzle_table, $phpbb_root_path)
	{
		$this->template 			= $template;
		$this->path_helper 			= $path_helper;
		$this->user 				= $user;
		$this->db 					= $db;
		$this->config 				= $config;
		$this->helper 				= $helper;
		$this->log					= $log;
		$this->puzzle_table 		= $puzzle_table;
		$this->phpbb_root_path 		= $phpbb_root_path;

		$this->ext_root_path = 'ext/dmzx/puzzle';
	}

	public function handle_puzzle()
	{
		$image_path = $this->path_helper->get_web_root_path() . $this->ext_root_path . '/puzzles/';

		// template variables for the navigation
		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME'	=> $this->user->lang['PUZZLE_TITLE'],
			'U_VIEW_FORUM'	=> $this->helper->route('dmzx_puzzle_controller'),
		));

		$sql_array = array(
			'SELECT'	=> '*',
			'FROM'		=> array(
				$this->puzzle_table => 'p',
		),
			'ORDER_BY'	=> 'RAND()',
		);
		$sql = $this->db->sql_build_query('SELECT', $sql_array);
		$result = $this->db->sql_query_limit($sql, 1);
		$puzzle = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		$image_name = $image_path . $puzzle['image_name'];

		if ($puzzle)
		{
			if (file_exists($image_name))
			{
				// Get the image dimensions
				list($width, $height, $type, $attr) = getimagesize($image_name);

				$this->template->assign_vars(array(
					'WIDTH'				=> $width,
					'HEIGHT'			=> $height,
				));
			}
		}
		else
		{
			$this->template->assign_vars(array(
				'S_NO_PUZZLES'		=> true,
			));
		}

		// Check, if the image exists
		if (!file_exists($image_name))
		{
			$redirect_url = $this->helper->route('dmzx_puzzle_controller');
			trigger_error(sprintf($this->user->lang['PUZZLE_IMAGE_MISSING'], $puzzle['image_name']) . sprintf('<br /><br />' . $this->user->lang['PUZZLE_BACKLINK'],'<a href="' . $redirect_url . '">', '</a>'));
		}

		// send variables to the template
		$this->template->assign_vars(array(
			'TITLE'				=> $this->user->lang['PUZZLE_TITLE'],
			'TITLE_EXPLAIN'		=> ($this->config['puzzle_default']) ? $this->user->lang['PUZZLE_TITLE_EXPLAIN'] : $this->user->lang['PUZZLE_TITLE_DEFAULT_EXPLAIN'],
			'COPY_OWN'			=> $this->user->lang['COPYRIGHT_OWN'],
			'OWN_COPY'			=> $this->user->lang['OWN_COPYRIGHT'],
			'NAME'				=> $puzzle['name'],
			'DESCRIPTION'		=> $puzzle['description'],
			'IMAGE_NAME'		=> $image_name,
			'PUZZLE_SOLVED'		=> $this->user->lang['PUZZLE_SOLVED'],
			'S_SOLVE_BUTTON'	=> ($this->config['puzzle_solve_button']) ? true : false,
			'POLYGON'			=> ($this->config['puzzle_polygon']) ? $this->user->lang['PUZZLE_TRUE'] : $this->user->lang['PUZZLE_FALSE'],
			'AREAIMAGE'			=> ($this->config['puzzle_areaimage']) ? $this->user->lang['PUZZLE_TRUE'] : $this->user->lang['PUZZLE_FALSE'],
			'AREABORDER'		=> ($this->config['puzzle_areaborder']) ? $this->user->lang['PUZZLE_TRUE'] : $this->user->lang['PUZZLE_FALSE'],
			'SIMPLE'			=> ($this->config['puzzle_simple']) ? $this->user->lang['PUZZLE_TRUE'] : $this->user->lang['PUZZLE_FALSE'],
			'MIXED'				=> ($this->config['puzzle_mixed']) ? $this->user->lang['PUZZLE_TRUE'] : $this->user->lang['PUZZLE_FALSE'],
			'S_PUZZLE_DEFAULT'	=> ($this->config['puzzle_default']) ? true : false,
		));

		// log that user played DM Puzzle
		$this->log->add('user', $this->user->data['user_id'], $this->user->ip, 'LOG_PLAYED_PUZZLE', time(), array('reportee_id' => $this->user->data['user_id'], $this->user->data['username']));

		return $this->helper->render('dm_puzzle_body.html', $this->user->lang('PUZZLE_TITLE'));
	}
}
