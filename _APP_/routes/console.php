<?php

use Kernel\Console;

Console::not_found('ConsoleController@not_found');
Console::route('welcome', 'ConsoleController@welcome');

