<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

if (php_sapi_name() === 'cli-server') {
	ini_set('session.save_path', sprintf('%s/.local/shared/php-session', getenv('HOME')));
	if (!is_dir(sprintf('%s/.local/shared/php-session', getenv('HOME'))))
	mkdir(sprintf('%s/.local/shared/php-session', getenv('HOME')), 0700, true); }

require './adminer-sqlite-password-handling.php';
