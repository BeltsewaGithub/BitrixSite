<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

		<div id="footer">
			<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
			<div class="col mb-3">
			<div class="logo-footer">
				<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/logo.php"),
							false
				);?>
			</div>
			</div>
					
			<div class="col mb-3">
			<h5>Аккаунты для игр</h5>
				<ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">CS2</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">DOTA2</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Dead By Daylight</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Assasin's Creed</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">GTA</a></li>
				</ul>
			</div>
					
			<div class="col mb-3">
			<h5>Контакты</h5>
				<ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Telegram</a></li>
			</ul>
			</div>
			</footer>
			<p class="text-center text-body-secondary">© 2024 Generation Gaming. Все права защищены</p>
		</div>
	</body>
</html>