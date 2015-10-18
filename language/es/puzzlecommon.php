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
	'COPYRIGHT_OWN'					=> '<strong>Desarrollado por DM Puzzle</strong><br />&copy; 2010, 2011 junto con femu para <a href="http://die-muellers.org" onclick="window.open(this.href); return false">Die Muellers Dot Org</a>',
	'OWN_COPYRIGHT'	=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx-web.net</a>',
	'PLAYING_PUZZLE'				=> 'Esta actualmente jugando rompecabeza',
	'PUZZLE_BACKLINK'				=> '%sIr al siguiente rompecabeza%s',
	'PUZZLE_DESCRIPTION'			=> 'Descricción',
	'PUZZLE_FALSE'					=> 'false', // Never change this language string!!!
	'PUZZLE_FLIP_X'					=> 'Dar vuelta horizontalmente',
	'PUZZLE_FLIP_X_EXP'				=> '[ALT] y doble clic',
	'PUZZLE_FLIP_Y'					=> 'Dar vuelta verticalmente',
	'PUZZLE_FLIP_Y_EXP'				=> '[SHIFT] y doble clic',
	'PUZZLE_IMAGE_MISSING'			=> 'La imagen del rompecabeza no existe. Por favor, informe al administrador e informele el nombre de la siguiente imagen:<br /><br /><strong>%1$s</strong><br />',
	'PUZZLE_LEVEL'					=> 'Dificultad',
	'PUZZLE_LEVEL_1'				=> 'Muy fácil',
	'PUZZLE_LEVEL_2'				=> 'Fácil',
	'PUZZLE_LEVEL_3'				=> 'Todavía fácil',
	'PUZZLE_LEVEL_4'				=> 'Con algo de dificultad',
	'PUZZLE_LEVEL_5'				=> 'Difícil',
	'PUZZLE_LEVEL_6'				=> 'Muy difícil',
	'PUZZLE_LEVEL_7'				=> 'Dificultadf extrema',
	'PUZZLE_MIX'					=> 'Mezclar',
	'PUZZLE_MOVE'					=> 'Mover',
	'PUZZLE_MOVE_EXP'				=> 'Clic y mover',
	'PUZZLE_NAVIGATION'				=> 'Rompecabeza',
	'PUZZLE_NO_PUZZLES'				=> 'Actualmente no hay ropecabeza disponibles. Por favor, consulte con el administrador para subir alguno.',
	'PUZZLE_PREVIEW'				=> 'Presentación preliminar',
	'PUZZLE_ROTATE'					=> 'Rotar',
	'PUZZLE_ROTATE_EXP'				=> 'Doble clic',
	'PUZZLE_SOLVE'					=> 'Resolvido',
	'PUZZLE_SOLVED'					=> '¡Felicidades! ¡Usted resolvió el rompecabeza',
	'PUZZLE_TITLE'					=> 'Rompecabeza',
	'PUZZLE_TITLE_DEFAULT_EXPLAIN'	=> 'Será seleccionado un rompecabeza al azar, la cual debe intentar resolver.<br />Tienes diferentes ajustes, dependiendo de cuales han sido habilitados/deshabilitados por el administrador.<br /><br />Para comenzar el rompecabeza, haga clic en el botón <strong>Mezclar</strong>.<br /><br /><strong>Consejo: </strong>¡Por favor, use la cabeza, que las piezas del rompecabeza pueden ser dados vuelta horizontalmente y verticalmente!<br /><br /><strong>¡Diviértase!</strong><br /><br />',
	'PUZZLE_TITLE_EXPLAIN'			=> 'Será seleccionado un rompecabeza al azar, la cual debe intentar resolver.<br />Puedes ajustar el nivel de dificultad por ti mismo.<br /><br />Para comenzar el rompecabeza, haga clic en el botón <strong>Mezclar</strong>.<br /><br /><strong>Consejo: </strong>¡Por favor, use la cabeza, que las piezas del rompecabeza pueden ser dados vuelta horizontalmente y verticalmente!<br /><br /><strong>¡Diviértase!</strong><br /><br />',
	'PUZZLE_TRUE'					=> 'true', // Never change this language string!!!
));
