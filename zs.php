<?php
// doc

/* doc */

/**
 * doc
 */

$str = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD;

$foo = 'foo';

define('TEST', "");

echo $GLOBALS['test'];
echo $_SERVER['HEADER_REFERRER'];

function test($test) {
    return false;
}

trait A {
    public $foo;

    public function getbar()
    {
        return $this->bar;
    }

    public function setBar($bar)
    {
        $this->bar = $bar;
    }
}

class FooBar extends Base implements FooBarInterface
{
    const E_ERROR = 45;
    public $fooBar;;
    public static $test;

    public function __construct($fooBar)
    {
        $this->fooBar = $fooBar;
    }

    public static function bar($foo)
    {
        return false;
    }
}
