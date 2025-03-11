<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle("Задайте вопрос");
$APPLICATION->SetTitle( "Задайте вопрос" );
?><div class="main with_bread">
 <section class="contacts">
	<div class="container">
		<div class="section__title">
			 Контакты
		</div>
		<div class="contacts-block">
			<div class="contacts-element">
			
			
				<div class="contacts-row">
					<div class="contacts-item">
					
						<div class="contacts-info">
							<div class="contacts-info__title">
								Магазин и пункт самовывоза
							</div>
							<div class="contacts-info__text">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/address.php', false, ['MODE'=> 'text']);?>
                            </div>
						</div>
						<div class="contacts-info">
							<div class="contacts-info__title">
								График работы
							</div>
							<div class="contacts-info__text contacts-info__work_time">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/work_time.php', false, ['MODE'=> 'text']);?>
                            </div>
							 
						</div>
						<div class="contacts-info">
							<div class="contacts-info__title">
								Контакты
							</div>
							<div class="contacts-info__text">
                                <div class="contacts-info__line">
									<div class="contacts-info__cont">
										<div><?$APPLICATION->IncludeFile('/_includes/contacts/phones.php', false, ['MODE'=> 'text']);?></div>
										<div><?$APPLICATION->IncludeFile('/_includes/contacts/email.php', false, ['MODE'=> 'text']);?></div>
									</div>
									<div class="contacts-info__soc">
										<?$APPLICATION->IncludeFile('/_includes/contacts/social.php', false, ['MODE'=> 'text']);?>
									</div>
								</div>
                            </div>						
						</div>	

						<button class="ui-button ui-button--border contacts-button" type="button" onclick="$('.b24-widget-button-social-tooltip:last').click()" >Связаться с нами</button>
						
					</div>
	
	
	
					<div class="contacts-item">
					
						<div class="contacts-info">
							<div class="contacts-info__title">
								Магазин и пункт самовывоза
							</div>
							<div class="contacts-info__text">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/address2.php', false, ['MODE'=> 'text']);?>
                            </div>
						</div>
						<div class="contacts-info">
							<div class="contacts-info__title">
								График работы
							</div>
							<div class="contacts-info__text contacts-info__work_time">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/work_time2.php', false, ['MODE'=> 'text']);?>
                            </div>
							 
						</div>
						<div class="contacts-info">
							<div class="contacts-info__title">
								Контакты
							</div>
							<div class="contacts-info__text">
                                <div class="contacts-info__line">
									<div class="contacts-info__cont">
										<div><?$APPLICATION->IncludeFile('/_includes/contacts/phones2.php', false, ['MODE'=> 'text']);?></div>
										<div><?$APPLICATION->IncludeFile('/_includes/contacts/email2.php', false, ['MODE'=> 'text']);?></div>
									</div>
									<div class="contacts-info__soc">
										<?$APPLICATION->IncludeFile('/_includes/contacts/social2.php', false, ['MODE'=> 'text']);?>
									</div>
								</div>
                            </div>						
						</div>	

						<button class="ui-button ui-button--border contacts-button" type="button" onclick="$('.b24-widget-button-social-tooltip:last').click()" >Связаться с нами</button>
						
					</div>
				</div>
				
				
				
			
				
				


 
			</div>
			<div class="contacts-map">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:59.84531492491802;s:10:\"yandex_lon\";d:30.322703432056013;s:12:\"yandex_scale\";i:11;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:3:\"LON\";d:30.322703432056;s:3:\"LAT\";d:59.845314924945;s:4:\"TEXT\";s:40:\"Quarta Оружейный Квартал\";}i:1;a:3:{s:3:\"LON\";d:30.33449342713;s:3:\"LAT\";d:59.95901937214;s:4:\"TEXT\";s:71:\"Санкт-Петербург, Петроградская наб, 18А \";}}}",
		"MAP_HEIGHT" => "856",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
);?>
			</div>
		</div>
	</div>
 </section>
</div><? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ) ?>