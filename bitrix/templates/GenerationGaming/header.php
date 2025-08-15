<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>

	<head xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?$APPLICATION->ShowHead();
		use Bitrix\Main\UI\Extension;
		Extension::load('ui.bootstrap4');?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<? 
		use Bitrix\Main\Page\Asset; 
		$APPLICATION->ShowHead(); 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Styles/headerFooter.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Styles/background.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Styles/font.css');
		?>
		<script type="importmap">
        {
          "imports": {
            "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
          }
        }
      </script>
	</head>
	<body>
		<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
		<div id=header>
			<div id="logo">
				<a href=".">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_DIR."include/logo.php"),
						false
					);?>
				</a>
			</div>
				
			<div class="search-field">
				<form action="" target="">
					<input type="search" name="search" placeholder="Аккаунт...">
					<button class="searchButton">Поиск</button>
				</form>
			</div>
						
			<div class="header-right-container">
			
				<nav>
					<ul class="references">
						<li><a class="ref" href="catalog.php">Каталог</a></li>
						<li><a class="ref" href="#">Чат-бот</a></li>
						<li>
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/telegram.php"),
								false
							);?>
						</li>
					</ul>
				</nav>
						
				<div class="sign-in">
					<form action="#" target="_blank">
						<button class="button" class="sign-in-button">Войти</button>
					</form>
				</div>		
			</div>
		</div>

