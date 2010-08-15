<?php
/**
 * Ajustes das inflections para portugu�s
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @author        Juan Basso <jrbasso@gmail.com>
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

// Altera��o do inflector
$_uninflected = array('atlas', 'lapis', 'onibus', 'pires', 'virus', '.*x');
$_pluralIrregular = array(
	'abdomens' => 'abdomen',
	'alemao' => 'alemaes',
	'artesa' => 'artesaos',
	'as' => 'ases',
	'bencao' => 'bencaos',
	'cao' => 'caes',
	'capelao' => 'capelaes',
	'capitao' => 'capitaes',
	'chao' => 'chaos',
	'charlatao' => 'charlataes',
	'cidadao' => 'cidadaos',
	'consul' => 'consules',
	'cristao' => 'cristaos',
	'dificil' => 'dificeis',
	'email' => 'emails',
	'escrivao' => 'escrivaes',
	'fossel' => 'fosseis',
	'germens' => 'germen',
	'grao' => 'graos',
	'hifens' => 'hifen',
	'irmao' => 'irmaos',
	'liquens' => 'liquen',
	'mal' => 'males',
	'mao' => 'maos',
	'orfao' => 'orfaos',
	'pais' => 'paises',
	'pai' => 'pais',
	'pao' => 'paes',
	'perfil' => 'perfis',
	'projetil' => 'projeteis',
	'reptil' => 'repteis',
	'sacristao' => 'sacristaes',
	'sotao' => 'sotaos',
	'tabeliao' => 'tabeliaes'
);

Inflector::rules('singular', array(
	'rules' => array(
		'/^(.*)(oes|aes|aos)$/i' => '\1ao',
		'/^(.*)(a|e|o|u)is$/i' => '\1\2l',
		'/^(.*)e?is$/i' => '\1il',
		'/^(.*)(r|s|z)es$/i' => '\1\2',
		'/^(.*)ns$/i' => '\1m',
		'/^(.*)s$/i' => '\1',
	),
	'uninflected' => $_uninflected,
	'irregular' => array_flip($_pluralIrregular)
), true);

Inflector::rules('plural', array(
	'rules' => array(
		'/^(.*)ao$/i' => '\1oes',
		'/^(.*)(r|s|z)$/i' => '\1\2es',
		'/^(.*)(a|e|o|u)l$/i' => '\1\2is',
		'/^(.*)il$/i' => '\1is',
		'/^(.*)(m|n)$/i' => '\1ns',
		'/^(.*)$/i' => '\1s'
	),
	'uninflected' => $_uninflected,
	'irregular' => $_pluralIrregular
), true);

Inflector::rules('transliteration', array(
	'/�|�|�|�|�|�|?|A|A|A|A/' => 'A',
	'/�|�|�|�|E|E|E|E|E/' => 'E',
	'/�|�|�|�|I|I|I|I|I|I/' => 'I',
	'/�|�|�|�|�|O|O|O|O|O|�|?/' => 'O',
	'/�|�|�|�|U|U|U|U|U|U|U|U|U|U|U|U/' => 'U',
	'/�|C|C|C|C/' => 'C',
	'/�|D|�/' => 'D',
	'/G|G|G|G/' => 'G',
	'/H|H/' => 'H',
	'/J/' => 'J',
	'/K/' => 'K',
	'/L|L|L|?|L/' => 'L',
	'/�|N|N|N/' => 'N',
	'/R|R|R/' => 'R',
	'/S|S|S|�/' => 'S',
	'/T|T|T/' => 'T',
	'/�|�|Y/' => 'Y',
	'/Z|Z|�/' => 'Z',
	'/W/' => 'W',
	'/�|?/' => 'AE',
	'/�/'=> 'ss',
	'/?/' => 'IJ',
	'/�/' => 'OE',
	'/�|�|�|�|�|�|?|a|a|a|a|�/' => 'a',
	'/�|�|�|�|e|e|e|e|e|&/' => 'e',
	'/�|�|�|�|i|i|i|i|i|i/' => 'i',
	'/�|�|�|�|�|o|o|o|o|o|�|?|�/' => 'o',
	'/�|�|�|�|u|u|u|u|u|u|u|u|u|u|u|u/' => 'u',
	'/�|c|c|c|c/' => 'c',
	'/�|d|d/' => 'd',
	'/g|g|g|g/' => 'g',
	'/h|h/' => 'h',
	'/j/' => 'j',
	'/k/' => 'k',
	'/l|l|l|?|l/' => 'l',
	'/�|n|n|n|?/' => 'n',
	'/r|r|r/' => 'r',
	'/s|s|s|�|?/' => 's',
	'/t|t|t/' => 't',
	'/�|�|y/' => 'y',
	'/w/' => 'w',
	'/z|z|�/' => 'z',
	'/�|?/' => 'ae',
	'/?/' => 'ij',
	'/�/' => 'oe',
	'/�/' => 'f'
));

unset($_uninflected, $_pluralIrregular);
