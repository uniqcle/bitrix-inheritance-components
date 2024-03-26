<?php
CBitrixComponent::includeComponentClass("uniqcle:class");

class ClassExtendsCompoentn extends classComponent{
	function var2()
	{
		$arResult['var2']='Отработал метод var2 компонента class.extends';

		return $arResult;
	}

	public function executeComponent()
	{
		$this->arResult = array_merge($this->arResult,$this->var2());

		parent::executeComponent();
	}
}