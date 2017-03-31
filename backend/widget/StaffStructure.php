<?php
namespace backend\widget;
use yii;
use yii\base\InvalidCallException;
use yii\base\Widget;

class StaffStructure extends Widget
{
	public $targetId = '';

	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$view  = $this->getView();
		$model = new \backend\models\PzCompany();
		$data  = $model->getStructure();
		

	}

	protected function htmlTemplate($data)
	{

	}
}
?>