<?
require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle("Магазин качественной оптики и аксессуаров GAUT");

//$APPLICATION->IncludeFile('/_includes/main_page.php', false, array('SHOW_BORDER'=>true));

$assets = \Bitrix\Main\Page\Asset::getInstance();
$assets->addCss(SITE_TEMPLATE_PATH . '/css/main.css');






?><div class="main">
 <section class="hero">
	<div class="container">
		<div class="swiper hero__slider">
			<div class="swiper-wrapper" style="height: auto !important;">
				<div class="swiper-slide hero__slide">
					<div class="hero__slide-background">
 <img src="null" class="lazy" data-src="/local/templates/gaut-optics/img/bnr_01.webp" alt="">
					</div>
					<div class="hero__slide-content">
						<div class="hero__slide-title">
						</div>
						<div class="hero__slide-subtitle">
						</div>
						<div class="hero__slide-characteristic">
						</div>
 <a href="#" class="hero__slide-more"> Подробнее </a>
					</div>
 <a href="/catalog/pnevmaticheskie_pistolety_stalker/pnevmaticheskie_pistolety_stalker_ultimatum_4_5mm_co2/" class="hero__slide-link"> <span class="ui-underline ui-underline--full"> Подробнее </span> </a>
				</div>
				<div class="swiper-slide hero__slide">
					<div class="hero__slide-background">
 <img src="null" class="lazy" data-src="/upload/iblock/512/q2c9fyuq9tmaaiddbdtnf9w2oc4xiwr9/airsoft.webp" alt="">
					</div>
					<div class="hero__slide-content">
						<div class="hero__slide-title">
						</div>
						<div class="hero__slide-subtitle">
						</div>
						<div class="hero__slide-characteristic">
						</div>
 <a href="/catalog/pnevmaticheskie_pistolety_stalker/pnevmaticheskie_pistolety_stalker_prime_4_5mm_co2/" class="ui-button ui-button--red" style="min-width: 217px"> Смотреть </a>
					</div>
 <a href="/catalog/pnevmaticheskie_pistolety_stalker/pnevmaticheskie_pistolety_stalker_prime_4_5mm_co2/" class="hero__slide-link"> <span class="ui-underline ui-underline--full"> Смотреть </span> </a>
				</div>
				<div class="swiper-slide hero__slide">
					<div class="hero__slide-background">
 <img src="null" class="lazy" data-src="/upload/iblock/426/g8shczpj9o87x5y4a4ilg8tkh3n4szek/prime.webp" alt="">
					</div>
					<div class="hero__slide-content">
						<div class="hero__slide-title">
						</div>
						<div class="hero__slide-subtitle">
						</div>
						<div class="hero__slide-characteristic">
						</div>
 <a href="/catalog/pnevmaticheskie_pistolety_stalker/pnevmaticheskie_pistolety_stalker_airsoft_6mm_co2/" class="ui-button ui-button--red" style="min-width: 217px"> Смотреть </a>
					</div>
 <a href="/catalog/pnevmaticheskie_pistolety_stalker/pnevmaticheskie_pistolety_stalker_airsoft_6mm_co2/" class="hero__slide-link"> <span class="ui-underline ui-underline--full"> Подробнее </span> </a>
				</div>
			</div>
			<div class="swiper-pagination">
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
 </section> <section class="section section-about">
	<div class="container">
		<div class="section-about__block">
			<div class="section-about__background">
 <span> <img alt="Пневматика Сталкер" src="/local/templates/gaut-optics/img/aboutbg.jpg" class="lazy entered loaded" data-src="/local/templates/stalker/img/aboutbg.webp" title="Пневматика Сталкер" data-ll-status="loaded"> </span>
			</div>
			<div class="section-about__content">
				<h2 class="section__title"> О компании </h2>
				<div class="section__text">
					<p>
						 Бренд GAUT был создан при участии компании QUARTA. За прошедшее время, благодаря качеству товаров и низким ценам, он завоевал уважение и признание российских охотников, стрелков и туристов.
					</p>
				</div>
				<ul class="section-about__list">
					<li class="section-about__list-item"> <a href="/about/" class="section-about__list-link">Подробнее о компании </a> </li>
					<li class="section-about__list-item"> <a href="/about/guaranty/" class="section-about__list-link">Гарантия и возврат </a> </li>
					<li class="section-about__list-item"> <a href="/about/delivery/" class="section-about__list-link">Доставка и оплата </a> </li>
				</ul>
				<div class="section-about__social">
					<div class="about__social">
						<div class="about__social-title">
							 Мы в соцсетях
						</div>
						<div class="soc">
							<div class="item">
 <a href="https://vk.com/#" target="_blank" class="vk"></a>
							</div>
							<div class="item">
 <a href="https://t.me/#" target="_blank" class="tg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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