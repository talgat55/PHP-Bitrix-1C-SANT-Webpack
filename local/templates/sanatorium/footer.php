<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}


?>



</div>
</main>

<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/css/fontawesome-all.min.css">

<?$APPLICATION->ShowProperty('FooterJS');?>
<?$APPLICATION->ShowProperty('BeforeBodyClose');?>
</body>
</html>