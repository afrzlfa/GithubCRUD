<?php

require 'vendor/autoload.php';

use GithubCRUD\GithubCRUD;

$config = [
    'token' => 'YOUR_GITHUB_TOKEN',
    'username' => 'YOUR_USERNAME',
    'repository' => 'YOUR_REPOSITORY',
    'branch' => 'main'
];

$github = new GithubCRUD($config);

// Create a file
$github->createFile('example.txt', 'Hello, World!');
