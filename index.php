<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин аренды аккаунтов для игр \"Generation Gaming\"");
global $USER;
$USER->Authorize(1);
?><?
    use Bitrix\Main\Page\Asset; 
    $APPLICATION->ShowHead(); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Styles/background.css');  
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Styles/font.css');  
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Styles/headerFooter.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/Styles/index.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/sim-slider.js');
?> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div id="wrapper">
	<div class="sim-slider">
		<div class="sim-slider-arrow-left">
		</div>
		<div class="sim-slider-arrow-right">
		</div>
		<div class="sim-slider-dots">
		</div>
	</div>
	<div class="hltv">
		<h1>Следи за киберспортом с HLTV</h1>
	</div>
	<div class="element">
		 <iframe id="HLTV"
              src="https://www.hltv.org/ranking/teams/2024/november/4/#ranking"
              name="targetframe"
              allowTransparency="true"
              scrolling="auto"
              frameborder="0"
              height="600px"
            ></iframe>
	</div>
</div>
<div id="footer">
</div>
 <script src="js/sim-slider.js"></script> <!-- вызов слайдера --> <script>new Sim()</script><br>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>