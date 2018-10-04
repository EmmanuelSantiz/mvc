<?php
if (!function_exists('isAjax')) {
	function isAjax() {
		return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}
}

if (!function_exists('retornoJson')) {
	function retornoJson($data) {
		return json_encode($data);
	}
}
?>