<?php

namespace app\components;

use yii\base\Widget;



/**
*  TestWidget from this site like exampel
*/
class TestWidget extends Widget
{
	public $a;
	public $b;
	
	public function init()
	{
		parent::init();

		if($this->a === null)
		{
			$this->a = 0;
		}
		if($this->b === null)
		{
			$this->b = 0;
		}
	}

	public function run()
	{
		$c = $this->a + $this->b;


		return $this->render('test',['c' => $c]);
	}
}



?>