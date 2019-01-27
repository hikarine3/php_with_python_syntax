<?php
require_once( __DIR__ . '/../../src/py2php.php' );
use PHPUnit\Framework\TestCase;
use Hikarine3\Py2php;

class Py2phpTest extends TestCase
{
    private $py2php;

    public function testConstruct() {
        $this->py2php = new Py2php;
        $this->assertInstanceOf(
            "Hikarine3\Py2php",
            $this->py2php
        );
    }

    public function testFunc() {
        $this->py2php = new Py2php;
        $this->assertEquals( $this->py2php->lower("ABC") , "abc");
    }
}

