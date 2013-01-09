<?php
require_once '/utilities.php';

class UtilitiesTest extends PHPUnit_Framework_TestCase
{
    public function testDoKeysExist()
    {
        $util = new Utilities();

        $needle     = array('test', 'test2', 'test3');
        $haystack   = array('test', 'test2', 'test3', 'test4');

        $true_result = $util->doKeysExist($needle, $haystack);
        $this->assertTrue($true_result);

        $bad_haystack   = array('test', 'test3', 'test4');
        $false_result = $util->doKeysExist($needle, $bad_haystack);
        $this->assertFalse($false_result);
    }
}
?>