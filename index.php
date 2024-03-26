<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>


<?$APPLICATION->IncludeComponent(
	"uniqcle:class",
	"",
Array()
);?>

<?$APPLICATION->IncludeComponent(
	"uniqcle:class.extends",
	"",
	Array()
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>