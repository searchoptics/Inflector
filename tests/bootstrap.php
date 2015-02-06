<?php

namespace Medio;

use Tester;
use Tester\CodeCoverage\Collector;

require __DIR__ . '/../vendor/autoload.php';

if (extension_loaded('xdebug')) {
	Collector::start(__DIR__ . '/coverage.dat');
}

function test(\Closure $function)
{
	$function();
}

Tester\Environment::setup();

