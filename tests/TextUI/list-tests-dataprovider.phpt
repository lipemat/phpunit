--TEST--
phpunit --list-tests-raw DataProviderTest ../_files/DataProviderTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--list-tests-raw';
$_SERVER['argv'][3] = 'DataProviderTest';
$_SERVER['argv'][4] = __DIR__ . '/../_files/DataProviderTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
testAdd#0
testAdd#1
testAdd#2
testAdd#3
