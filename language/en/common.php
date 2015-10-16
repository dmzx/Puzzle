<?php
/**
*
* @package phpBB Extension - Puzzle
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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
	'COPYRIGHT_OWN'					=> '<strong>Powered by DM Puzzle</strong><br />&copy; 2010, 2011 by femu at <a href="http://die-muellers.org" onclick="window.open(this.href); return false">Die Muellers Dot Org</a>',
	'OWN_COPYRIGHT'	=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx-web.net</a>',
	'PLAYING_PUZZLE'				=> 'Is currently playing DM Puzzle',
	'PUZZLE_BACKLINK'				=> '%sGo on to the next puzzle%s',
	'PUZZLE_DESCRIPTION'			=> 'Description',
	'PUZZLE_FALSE'					=> 'false', // Never change this language string!!!
	'PUZZLE_FLIP_X'					=> 'Flip horizontally',
	'PUZZLE_FLIP_X_EXP'				=> 'Hold [ALT] and double-click',
	'PUZZLE_FLIP_Y'					=> 'Flip vertically',
	'PUZZLE_FLIP_Y_EXP'				=> 'Hold [SHIFT] and double-click',
	'PUZZLE_IMAGE_MISSING'			=> 'The puzzle image does not exist. Please inform the administrator and tell him following image name:<br /><br /><strong>%1$s</strong><br />',
	'PUZZLE_LEVEL'					=> 'Difficulty',
	'PUZZLE_LEVEL_1'				=> 'Very easy',
	'PUZZLE_LEVEL_2'				=> 'Easy',
	'PUZZLE_LEVEL_3'				=> 'Still easy',
	'PUZZLE_LEVEL_4'				=> 'A little more difficult',
	'PUZZLE_LEVEL_5'				=> 'Difficult',
	'PUZZLE_LEVEL_6'				=> 'Very difficult',
	'PUZZLE_LEVEL_7'				=> 'Extreme difficult',
	'PUZZLE_MIX'					=> 'Mix',
	'PUZZLE_MOVE'					=> 'Move',
	'PUZZLE_MOVE_EXP'				=> 'Click and move',
	'PUZZLE_NAVIGATION'				=> 'Puzzles',
	'PUZZLE_NO_PUZZLES'				=> 'There are currently no puzzles available. Please ask the administrator to upload some.',
	'PUZZLE_PREVIEW'				=> 'Preview',
	'PUZZLE_ROTATE'					=> 'Rotate',
	'PUZZLE_ROTATE_EXP'				=> 'Double-click',
	'PUZZLE_SOLVE'					=> 'Solve',
	'PUZZLE_SOLVED'					=> 'Congratulations! You solved the puzzle!',
	'PUZZLE_TITLE'					=> 'DM Puzzle',
	'PUZZLE_TITLE_DEFAULT_EXPLAIN'	=> 'There will be selected a random puzzle, which you the can try to solve.<br />You will have different settings, depending on what the administrator enabled/disabled.<br /><br />To start the puzzle, click the button <strong>Mix</strong>.<br /><br /><strong>Hint: </strong>Please keep in mind, that the puzzle pieces can be flipped horizontally and vertically!<br /><br /><strong>Have fun with our puzzles!</strong><br /><br />',
	'PUZZLE_TITLE_EXPLAIN'			=> 'There will be selected a random puzzle, which you the can try to solve.<br />You can set the difficulty by yourself.<br /><br />To start the puzzle, click the button <strong>Mix</strong>.<br /><br /><strong>Hint: </strong>Please keep in mind, that the puzzle pieces can be flipped horizontally and vertically!<br /><br /><strong>Have fun with our puzzles!</strong><br /><br />',
	'PUZZLE_TRUE'					=> 'true', // Never change this language string!!!
));
