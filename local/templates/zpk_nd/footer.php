<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

</main>
<!-- Footer -->
<footer class="footer">
	<div class="container footer__container">

	</div>
</footer>

<?/* JQuery */ ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?/* Slider click */ ?>
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/slick.min.js"></script>
<?/* lazyload */ ?>
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/lazyload.min.js"></script>
<!-- Modal Win -->
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/modal_win.js"></script>
<!-- JS -->
<script src="<?= SITE_TEMPLATE_PATH; ?>/script/new_scripts.min.js"></script>
<!-- Mask and validation form -->

<?
if (strpos($APPLICATION->getCurPage(), 'domens-admin') != 0) {
?>
	<script type="text/javascript" src="/domens-admin/domens-admin.js"></script>
<?
}
?>

<?
if ($APPLICATION->GetPageProperty('PageSettings')['UF_TITLE']) {
    $title = city_replace($APPLICATION->GetPageProperty('PageSettings')['UF_TITLE']);
}

if ($APPLICATION->GetPageProperty('PageSettings')['UF_KEYWORDS']) {
    $keywords = city_replace($APPLICATION->GetPageProperty('PageSettings')['UF_KEYWORDS']);
}

if ($APPLICATION->GetPageProperty('PageSettings')['UF_DESCRIPTION']) {
    $description = city_replace($APPLICATION->GetPageProperty('PageSettings')['UF_DESCRIPTION']);
}

$APPLICATION->SetPageProperty('title', $title);
$APPLICATION->SetPageProperty('keywords', $keywords);
$APPLICATION->SetPageProperty('description', $description);

?>

</body>
</html>