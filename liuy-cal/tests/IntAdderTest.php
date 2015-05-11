<?php

namespace liuy\cal;

class IntAdderTest extends \PHPUnit_Framework_TestCase {

    public function testAdd() {
        $_1 = 1;
        $_2 = 2;
        $exp = 3;
        $ret = IntAdder::add($_1, $_2);

        $this->assertEquals($exp, $ret);
    }

    public function testAdd2() {
        $_1 = 1;
        $_2 = 2;
        $exp = 3;
        $ret = int_add($_1, $_2);

        $this->assertEquals($exp, $ret);
    }

}

