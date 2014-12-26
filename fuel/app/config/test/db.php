<?php
/**
 * The test database settings. These get merged with the global settings.
 *
 * This environment is primarily used by unit tests, to run on a controlled environment.
 */

return array(
  'default' => array(
    'type'  => Config::get('DB.TYPE'),
    'connection' => array(
      'host'     => Config::get('DB.HOST'),
      'database' => Config::get('DB.NAME'),
      'username' => Config::get('DB.USERNAME'),
      'password' => Config::get('DB.PASSWORD'),
    ),
  ),
);
