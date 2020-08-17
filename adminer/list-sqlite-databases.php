<?php

function td(...$a){foreach ($a as $v)var_dump($v);die('td()');}

class ListSqliteDatabases
{
	protected $theDir;

	function __construct(string $theDir)
	{
		$this->theDir = $theDir;
	}

	function databases()
	{
		$a = glob($this->theDir .'/*.sqlite');
		$ret = [];
		foreach ($a as $pn)
			$ret[$pn] = basename($pn);
		return $ret;
	}
}
