<?php
class change_GeshiHighlighter
{
	private $params;

	function __construct($params)
	{
		$this->params = $params;
	}

	function highlight($code)
	{
		$geshi = new GeSHi($code, $this->params["lang"]);
		$geshi->set_overall_class('code');
		return $geshi->parse_code();
	}
}
