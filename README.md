# PHPUnit

This is a maintained fork of version 7 or the [official phpunit library](https://github.com/sebastianbergmann/phpunit).

### Purpose of this fork

WordPress core testing does not support PHPUnit 8 nor do they think it's a priority to move beyond PHPUnit 7. PHPUnit 7 does not work out of the box with PHP 8. To make WordPress tests work, they [hacked a bunch of src files](https://core.trac.wordpress.org/changeset/49037) directly into the repo. 

More info on the [core ticket](https://core.trac.wordpress.org/ticket/46149).

This fork maintains a base for generating a version 7 PHAR which supports PHP 8 and may be used like normal as a phar or a composer dependency.

#### If you see this error, this fork is for you:
```log
Parse error: syntax error, unexpected token "match", expecting identifier in phar://E:/scripts/phpunit/phpunit-7/phpunit-7.phar/phpunit/Framework/MockObject/Builder/Match.php on line 15
```

### Build Process

From the root directory run
```shell
bash ./ant/bin/ant phar
```

2 phars will be generated in the `build` directory. Rename the non "library" one and use like normal.

______________________________________________________________________________________

PHPUnit is a programmer-oriented testing framework for PHP. It is an instance of the xUnit architecture for unit testing frameworks.

[![Latest Stable Version](https://img.shields.io/packagist/v/phpunit/phpunit.svg?style=flat-square)](https://packagist.org/packages/phpunit/phpunit)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://php.net/)
[![CI Status](https://github.com/sebastianbergmann/phpunit/workflows/CI/badge.svg)](https://github.com/sebastianbergmann/phpunit/actions)

## Installation

We distribute a [PHP Archive (PHAR)](https://php.net/phar) that has all required (as well as some optional) dependencies of PHPUnit 7.5 bundled in a single file:

```bash
$ wget https://phar.phpunit.de/phpunit-7.5.phar

$ php phpunit-7.5.phar --version
```

Alternatively, you may use [Composer](https://getcomposer.org/) to download and install PHPUnit as well as its dependencies. Please refer to the "[Getting Started](https://phpunit.de/getting-started-with-phpunit.html)" guide for details on how to install PHPUnit.

## Contribute

Please refer to [CONTRIBUTING.md](https://github.com/sebastianbergmann/phpunit/blob/master/.github/CONTRIBUTING.md) for information on how to contribute to PHPUnit and its related projects.

## List of Contributors

Thanks to everyone who has contributed to PHPUnit! You can find a detailed list of contributors on every PHPUnit related package on GitHub. This list shows only the major components:

* [PHPUnit](https://github.com/sebastianbergmann/phpunit/graphs/contributors)
* [php-code-coverage](https://github.com/sebastianbergmann/php-code-coverage/graphs/contributors)

A very special thanks to everyone who has contributed to the documentation and helps maintain the translations:

* [English](https://github.com/sebastianbergmann/phpunit-documentation-english/graphs/contributors)
* [Spanish](https://github.com/sebastianbergmann/phpunit-documentation-spanish/graphs/contributors)
* [French](https://github.com/sebastianbergmann/phpunit-documentation-french/graphs/contributors)
* [Japanese](https://github.com/sebastianbergmann/phpunit-documentation-japanese/graphs/contributors)
* [Brazilian Portuguese](https://github.com/sebastianbergmann/phpunit-documentation-brazilian-portuguese/graphs/contributors)
* [Simplified Chinese](https://github.com/sebastianbergmann/phpunit-documentation-chinese/graphs/contributors)

