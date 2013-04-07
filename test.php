<?php
class Test {
	function __construct()
	{
		$this->test2 = "test3";
	}
	function test4()
	{
		return "test5";
	}
	function test6()
	{
		return "test7";
	}
}
class TestExtended extends Test {
	function test8()
	{
		return "test9";
	}
	function test6()
	{
		return "test10";
	}
}

$test11 = new Test();
echo $test11->test2.'<br />';
echo $test11->test4().'<br />';
echo $test11->test6().'<br />';
echo $test11->test8().'<br />';