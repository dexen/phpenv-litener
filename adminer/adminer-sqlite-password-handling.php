<?php

function adminer_object() {
	require './adminer/plugin.php';
	require './adminer/login-password-less.php';
	require './adminer/list-sqlite-databases.php';

	return new AdminerPlugin([
		new AdminerLoginPasswordLess(require './adminer/sqlite-password-hash.php'),
		new ListSqliteDatabases('.'),
	]);
}

require './adminer/adminer-sqlite-en.php';
