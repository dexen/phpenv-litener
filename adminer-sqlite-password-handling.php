<?php

function adminer_object() {
	require './plugins/plugin.php';
	require './plugins/login-password-less.php';
	require './plugins/list-sqlite-databases.php';

	return new AdminerPlugin([
		new AdminerLoginPasswordLess(require './auth/sqlite-password-hash.php'),
		new ListSqliteDatabases('.'),
	]);
}

require './adminer-sqlite-en.php';
