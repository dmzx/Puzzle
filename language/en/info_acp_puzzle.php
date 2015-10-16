<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'LOG_PLAYED_PUZZLE'					=> '<strong>DM Puzzle</strong><br />» %s played DM Puzzle',
	'LOG_PUZZLE_SETTINGS'				=> 'Changed the DM Puzzle configuration',
	'PUZZLE_ADDED'						=> 'The puzzle was successfully added.',
	'PUZZLE_ALL_PUZZLES'				=> 'All Puzzles',
	'PUZZLE_CONFIG'						=> 'Puzzle Configuration',
	'PUZZLE_CONFIG_AREABORDER'			=> 'Frame',
	'PUZZLE_CONFIG_AREABORDER_EXP'		=> 'If this option is enabled, the player will see a frame around the solution field',
	'PUZZLE_CONFIG_AREAIMAGE'			=> 'Image as background',
	'PUZZLE_CONFIG_AREAIMAGE_EXP'		=> 'If this option is enabled, the image will be displayed reduced as background',
	'PUZZLE_CONFIG_DEFAULT'				=> 'Default settings',
	'PUZZLE_CONFIG_DEFAULT_EXP'			=> 'If this option is enabled, the puzzles will be displayed with default settings',
	'PUZZLE_CONFIG_EXP'					=> 'Here you can set some basic settings for the display of your puzzles',
	'PUZZLE_CONFIG_FIXED'				=> 'Level',
	'PUZZLE_CONFIG_FIXED_EXP'			=> 'If this option is enabled, below selected level is fixed and the players can\'t select one by their own',
	'PUZZLE_CONFIG_FIXED_LEVEL'			=> 'Fixed Level',
	'PUZZLE_CONFIG_FIXED_LEVEL_EXP'		=> 'This level will be used as default, if you enabled above option. Valid values are from 0 (easy) up to 6 (extreme difficult)',
	'PUZZLE_CONFIG_MIXED'				=> 'Mix at once',
	'PUZZLE_CONFIG_MIXED_EXP'			=> 'If you enable this option, the puzzle will be mixed at once. This way the players won\'t see the image before it\'s mixed up',
	'PUZZLE_CONFIG_PAGE'				=> 'Number of puzzles per page',
	'PUZZLE_CONFIG_PAGE_EXP'			=> 'Here you can set, how much puzzle entries you like to see per page in the ACP',
	'PUZZLE_CONFIG_POLYGON'				=> 'Polygon puzzle pieces',
	'PUZZLE_CONFIG_POLYGON_EXP'			=> 'If this option is enabled, the puzzle pieces will be displayed	polygon. Otherwise they will be displayed rectangular.',
	'PUZZLE_CONFIG_SIMPLE'				=> 'Simple mix',
	'PUZZLE_CONFIG_SIMPLE_EXP'			=> 'If this option is enabled, the puzzle pieces will be simply mixed, but not flipped.',
	'PUZZLE_CONFIG_SOLVE_BUTTON'		=> 'Show solve button',
	'PUZZLE_CONFIG_SOLVE_BUTTON_EXP'	=> 'If this option is enabled, the players will see a solving button',
	'PUZZLE_CONFIG_UPDATED'				=> 'The puzzle configuration was successfully updated',
	'PUZZLE_CONFIRM_OPERATION'			=> 'Are you sure you want to run this operation?',
	'PUZZLE_DESCRIPTION'				=> 'Description',
	'PUZZLE_EDIT'						=> 'Puzzle Management',
	'PUZZLE_EDIT_DESCRIPTION'			=> 'Description',
	'PUZZLE_EDIT_DESCRIPTION_EXP'		=> 'Here you can describe your puzzle',
	'PUZZLE_EDIT_EXPLAIN'				=> 'Here you can add new puzzles or edit the selected.',
	'PUZZLE_EDIT_IMAGE_NAME'			=> 'Image name',
	'PUZZLE_EDIT_IMAGE_NAME_EXP'		=> 'Enter here the name of the image including the extension (ie. picture.jpg). The path to the image will be added automatically. All pictures have to be in the folder ext/dmzx/puzzle/puzzles',
	'PUZZLE_EDIT_NAME'					=> 'Name of the Puzzle',
	'PUZZLE_EDIT_NAME_EXP'				=> 'Enter here a name for your puzzle',
	'PUZZLE_EDIT_PUZZLE'				=> 'Edit puzzle',
	'PUZZLE_ENTER_PUZZLE'				=> 'You have to enter some code!',
	'PUZZLE_FORM_INVALID'				=> 'The submitted code was invalid. Please try again.',
	'PUZZLE_HEADER'						=> 'DM Puzzle',
	'PUZZLE_IMAGE_NAME'					=> 'Image name',
	'PUZZLE_MULTI'						=> '%d Puzzles',
	'PUZZLE_NAME'						=> 'Name of the puzzle',
	'PUZZLE_NEW_PUZZLE'					=> 'Add a new puzzle',
	'PUZZLE_NO_ITEMS'					=> 'No puzzles available',
	'PUZZLE_NO_PUZZLE'					=> 'No code entered to edit.',
	'PUZZLE_PUZZLE'						=> 'Code',
	'PUZZLE_PUZZLE_EDIT'				=> 'Edit or change code over here',
	'PUZZLE_REMOVED'					=> 'The puzzle was deleted successfully.',
	'PUZZLE_SINGLE'						=> '1 Puzzle',
	'PUZZLE_SORT_DESCRIPTION'			=> 'Description',
	'PUZZLE_SORT_IMAGE_NAME'			=> 'Image name',
	'PUZZLE_SORT_NAME'					=> 'Name',
	'PUZZLE_TITLE'						=> 'DM Puzzle Administration',
	'PUZZLE_TITLE_EXPLAIN'				=> 'Here you can add new puzzles and edit or delete existing puzzles.',
	'PUZZLE_UPDATED'					=> 'The puzzle was successfully updated',
));