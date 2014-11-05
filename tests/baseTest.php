<?php
use ddliu\normurl\Url;

class Test extends PHPUnit_Framework_TestCase {
    protected $tests = [
        // array('output', 'url', 'base', 'description'),
        ['http://example.com', 'http://example.com', null, ''],
        ['http://example.com/a/b', 'a/b', 'http://example.com', 'relative path'],
        ['http://example.com/a/b', '/a/b', 'http://example.com/c/d', 'abs path'],
        ['http://example.com/c/d/f/g', './f/g', 'http://example.com/c/d/e', 'dot'],
        ['http://example.com/c/f/g', '../f/g', 'http://example.com/c/d/e', 'dot dot'],
        ['http://example.com/a/b', 'http://example.com/a/b', 'http://google.com/', 'should not follow a different domain'],
    ];
    public function testAll() {
        foreach ($this->tests as $test) {
            $this->assertEquals($test[0], Url::normalize($test[1], $test[2]), $test[3]);
        }
    }
}