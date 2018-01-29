<?php


class Util{

	
	
	public static function formataMoedaFloat($valor) {
			$valor  = str_replace(".","",$valor);
			$valor  = str_replace(",",".",$valor);
			return number_format((float)$valor,2,'.','');
		}
	public static function formataFloatMoeda($valor) {
			return number_format($valor,2,',','.');
		}
}
?>