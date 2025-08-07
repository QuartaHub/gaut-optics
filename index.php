<?
require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle("Магазин качественной оптики и аксессуаров GAUT");

//$APPLICATION->IncludeFile('/_includes/main_page.php', false, array('SHOW_BORDER'=>true));

$assets = \Bitrix\Main\Page\Asset::getInstance();
$assets->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
?>
<div class="main">
 <section class="hero">
	<?php
		$APPLICATION->IncludeComponent(
			'gaut:main.slider',
			'.default',
			[
				'CACHE_TIME' => '3600',
				'CACHE_TYPE' => 'A'
			]
		);
	?>	
 </section>
 <section class="section section-slider">
	<div class="container">
		<div class="section__wrapper">
			<div class="section__content">
				<div class="section__title">
					 Cерия оптических<br>
					 прицелов<br>
					 GAUT Obsidian
				</div>
				<div class="section__description">
					<p>
						 Премиальная серия прицелов с 8-кратным диапазоном увеличения от минимального к максимальному, обеспечивающая яркое и чёткое изображение.
					</p>
				</div>
				<div class="section__all">
 <a href="#">Все модели</a>
				</div>
				<div class="section__slider-navigation">
 <button class="swiper-button-prev "> </button> <button class="swiper-button-next "> </button>
				</div>
			</div>
			<div class="section__slider">
				<div class="swiper">
					<div class="swiper-wrapper">
						 <? for($i=0; $i < 3; $i++){?>
						<div class="swiper-slide section__slide">
							<div class="section__slide-background">
							</div>
							<div class="section__slide-content">
								<div class="section__slide-logo">
 <img src="/local/templates/gaut-optics/images/gaut_obsidian.svg" alt="">
								</div>
								<div class="section__slide-title">
									 STALKER
								</div>
								<div class="section__slide-description">
									 Премиальные газобаллонные пневматические пистолеты калибра 4.5 мм. Источник энергии — баллоны CO2 12г.
								</div>
								<div class="section__slide-img">
 <img src="/local/templates/gaut-optics/img/section__slide-img.jpg" alt="">
								</div>
								<div class="section__slide-link">
 <a href="#">Подробнее</a>
								</div>
							</div>
						</div>
						 <? } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section> <section class="section section-slider">
	<div class="container">
		<div class="section__wrapper">
			<div class="section__content">
				<div class="section__title">
					 Cерия оптических<br>
					 прицелов<br>
					 GAUT Nephrite
				</div>
				<div class="section__description">
					<p>
						 Серия Nephrite включает в себя прицелы с 3-х и 4-х кратным диапазоном увеличения и имеет самый широкий модельный ряд, в котором и охотники, и стрелки смогут подобрать подходящий прибор.
					</p>
				</div>
				<div class="section__slider-navigation">
 <button class="swiper-button-prev "> </button> <button class="swiper-button-next "> </button>
				</div>
			</div>
			<div class="section__slider">
				<div class="swiper">
					<div class="swiper-wrapper">
						 <? for($i=0; $i < 3; $i++){?>
						<div class="swiper-slide section__slide">
							<div class="section__slide-background">
							</div>
							<div class="section__slide-content">
								<div class="section__slide-logo">
 <img src="/local/templates/gaut-optics/images/gaut_nephrite.svg" alt="">
								</div>
								<div class="section__slide-title">
									 STALKER
								</div>
								<div class="section__slide-description">
									 Премиальные газобаллонные пневматические пистолеты калибра 4.5 мм. Источник энергии — баллоны CO2 12г.
								</div>
								<div class="section__slide-img">
 <img src="/local/templates/gaut-optics/img/section__slide-img.jpg" alt="">
								</div>
								<div class="section__slide-link">
 <a href="#">Подробнее</a>
								</div>
							</div>
						</div>
						 <? } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section> <section class="section section-slider">
	<div class="container">
		<div class="section__wrapper">
			<div class="section__content">
				<div class="section__title">
					 Cерия оптических<br>
					 прицелов<br>
					 GAUT Amber
				</div>
				<div class="section__description">
					<p>
						 В серию Amber входят компактные прицелы с постоянным и переменным 4-х кратным диапазоном увеличения.
					</p>
				</div>
				<div class="section__slider-navigation">
 <button class="swiper-button-prev "> </button> <button class="swiper-button-next "> </button>
				</div>
			</div>
			<div class="section__slider">
				<div class="swiper">
					<div class="swiper-wrapper">
						 <? for($i=0; $i < 3; $i++){?>
						<div class="swiper-slide section__slide">
							<div class="section__slide-background">
							</div>
							<div class="section__slide-content">
								<div class="section__slide-logo">
 <img src="/local/templates/gaut-optics/images/gaut_amber.svg" alt="">
								</div>
								<div class="section__slide-title">
									 STALKER
								</div>
								<div class="section__slide-description">
									 Премиальные газобаллонные пневматические пистолеты калибра 4.5 мм. Источник энергии — баллоны CO2 12г.
								</div>
								<div class="section__slide-img">
 <img src="/local/templates/gaut-optics/img/section__slide-img.jpg" alt="">
								</div>
								<div class="section__slide-link">
 <a href="#">Подробнее</a>
								</div>
							</div>
						</div>
						 <? } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section> <section class="section section-slider">
	<div class="container">
		<div class="section__wrapper">
			<div class="section__content">
				<div class="section__title">
					 Cерия оптических<br>
					 прицелов<br>
					 GAUT Quartz
				</div>
				<div class="section__description">
					<p>
						 Самые лёгкие прицелы, которые практически не утяжелят ваше оружие, входят в серию Quartz.
					</p>
				</div>
				<div class="section__slider-navigation">
 <button class="swiper-button-prev "> </button> <button class="swiper-button-next "> </button>
				</div>
			</div>
			<div class="section__slider">
				<div class="swiper">
					<div class="swiper-wrapper">
						 <? for($i=0; $i < 3; $i++){?>
						<div class="swiper-slide section__slide">
							<div class="section__slide-background">
							</div>
							<div class="section__slide-content">
								<div class="section__slide-logo">
 <img src="/local/templates/gaut-optics/images/gaut_quartz.svg" alt="">
								</div>
								<div class="section__slide-title">
									 STALKER
								</div>
								<div class="section__slide-description">
									 Премиальные газобаллонные пневматические пистолеты калибра 4.5 мм. Источник энергии — баллоны CO2 12г.
								</div>
								<div class="section__slide-img">
 <img src="/local/templates/gaut-optics/img/section__slide-img.jpg" alt="">
								</div>
								<div class="section__slide-link">
 <a href="#">Подробнее</a>
								</div>
							</div>
						</div>
						 <? } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section>
 <section class="section section-about">
    <?php
		$APPLICATION->IncludeComponent(
			'gaut:kreo',
			'.default',
			[
				'CACHE_TIME' => '3600',
				'CACHE_TYPE' => 'A'
			]
		);
	?>
 </section>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"smart_tizers",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "smart_media_1",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => [0=>"",1=>"",],
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => IBLOCKS['ib-tizers'],
		"IBLOCK_TYPE" => SITE_ID,
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => [0=>"",1=>"",],
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
 <br><? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ); ?>