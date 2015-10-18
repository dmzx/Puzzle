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
	'PLAYING_PUZZLE'				=> 'No momento está jogando Quebra-cabeça',
	'PUZZLE_BACKLINK'				=> '%sVai para o próximo Quebra-cabeça%s',
	'PUZZLE_DESCRIPTION'			=> 'Descrição',
	'PUZZLE_FALSE'					=> 'false', // Never change this language string!!!
	'PUZZLE_FLIP_X'					=> 'Inverter horizontalmente',
	'PUZZLE_FLIP_X_EXP'				=> '[ALT] e duplo-clique',
	'PUZZLE_FLIP_Y'					=> 'Inverter verticalmente',
	'PUZZLE_FLIP_Y_EXP'				=> '[SHIFT] e duplo-clique',
	'PUZZLE_IMAGE_MISSING'			=> 'A imagem não existe. Chame o administrador e informe este nome da imagem:<br /><br /><strong>%1$s</strong><br />',
	'PUZZLE_LEVEL'					=> 'Dificuldade',
	'PUZZLE_LEVEL_1'				=> 'Muito fácil',
	'PUZZLE_LEVEL_2'				=> 'Fácil',
	'PUZZLE_LEVEL_3'				=> 'Ainda fácil',
	'PUZZLE_LEVEL_4'				=> 'Um pouco difícil',
	'PUZZLE_LEVEL_5'				=> 'Difícil',
	'PUZZLE_LEVEL_6'				=> 'Muito difícil',
	'PUZZLE_LEVEL_7'				=> 'Dificílimo',
	'PUZZLE_MIX'					=> 'Misturar',
	'PUZZLE_MOVE'					=> 'Mover',
	'PUZZLE_MOVE_EXP'				=> 'Clique e mova',
	'PUZZLE_NAVIGATION'				=> 'Quebra-cabeça',
	'PUZZLE_NO_PUZZLES'				=> 'Não há imagens disponíveis. Peça ao administrador para colocar algumas.',
	'PUZZLE_PREVIEW'				=> 'Prévia',
	'PUZZLE_ROTATE'					=> 'Rotacionar',
	'PUZZLE_ROTATE_EXP'				=> 'Duplo-clique',
	'PUZZLE_SOLVE'					=> 'Resolver',
	'PUZZLE_SOLVED'					=> 'Parabéns! Você conseguiu!',
	'PUZZLE_TITLE'					=> 'Quebra-cabeça',
	'PUZZLE_TITLE_DEFAULT_EXPLAIN'	=> 'Será escolhido um quebra-cabeça aleatoriamente que você deverá tentar resolver.<br />O nível de dificuldade foi configurado pelo administrador.<br /><br />Para iniciar, clique no botão <strong>Misturar</strong>.<br /><br /><strong>Dica: </strong>Tenha em mente que as peças podem ser invertidas horizontal e verticalmente!<br /><br /><strong>Divirta-se!</strong><br /><br />',
	'PUZZLE_TITLE_EXPLAIN'			=> 'Será escolhido um quebra-cabeça aleatoriamente que você deverá tentar resolver.<br />Você pode escolher entre diversos níveis de dificuldade.<br /><br />Para iniciar, clique no botão <strong>Misturar</strong>.<br /><br /><strong>Dica: </strong>Tenha em mente que as peças podem ser invertidas horizontal e verticalmente!<br /><br /><strong>Divirta-se!</strong><br /><br />',
	'PUZZLE_TRUE'					=> 'true', // Never change this language string!!!
));
