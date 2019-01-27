<?php
/*
Official URL: https://github.com/hikarine3/py2php
Author: Hajime Kurita
*/
namespace Hikarine3;

class Py2php
{
	public function __construct($op = null) 
	{
	}

	public function lower($str) {
		return strtolower($str);
	}
}

if (empty(debug_backtrace())) {
    $py2php = new Py2php();
}
