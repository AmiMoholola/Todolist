<?php
namespace App;

class BaseStore {

	protected static function format_name($s) {
		return ucwords(strtolower($s));
	}
}