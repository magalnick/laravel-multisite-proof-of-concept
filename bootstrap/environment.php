<?php

/*
  |--------------------------------------------------------------------------
  | Detect The Application Environment
  |--------------------------------------------------------------------------
  |
  | Laravel takes a dead simple approach to your application environments
  | so you can just specify a machine name for the host that matches a
  | given environment, then we will automatically detect it for you.
 */

$env = $app->detectEnvironment(function () {
    $env = 'dev';
    $path_to_env = realpath(__DIR__ . '/../');

    if (file_exists($path_to_env . "/.env")) {
        $env = trim(file_get_contents($path_to_env . "/.env"));
    }

    putenv('APP_ENV=' . $env);

    if (file_exists($path_to_env . "/.env." . $env)) {
        $dotenv = new Dotenv\Dotenv($path_to_env, '/.env.' . $env);
        $dotenv->overload(); //this is important
    }

    // Look for an apply a override file
    if (file_exists($path_to_env . "/.env.override")) {
        $dotenv = new Dotenv\Dotenv($path_to_env, '/.env.override');
        $dotenv->overload(); //this is important
    }

});
