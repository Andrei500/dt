<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="UTF-8">
		<title>Рейсы | Расписание, стоимость билетов из Донецка, Донбасса, ДНР в Крым, Севастополь, Симферополь, Ялту, Евпаторию</title>
		<meta name="description" content="«Донбасс-Тур». Пассажирские экспресс-перевозки по наилучшей цене в регионе.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/favicon.png">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div id="top" class="wrapper remodal-bg">
			<h1 style="display: block; position: absolute; top: -100%;">Автобусные перевозки, рейсы из Макеевки, Харцызска, Шахтерска. Расписание автовокзалов.</h1>

			<header id="hero_trips">
				<div class="blueBg">

					<?php include 'nav.php'; ?>

					<div class="frame">
						<div class="wrapHero">
							<span class="h2">ВЫБЕРИТЕ ВАШ РЕЙС</span>
							<span style="margin: 0 auto 15px auto;" class="lineStar"></span>

							<div class="wrapTrips">


							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="for_allInfo"></div>

			<?php  include 'callback.php';  ?>
			<?php include 'footer.php'; ?>

			<link rel="stylesheet" href="/js/plugins/remodal/theme_trips.css">
			<script src="js/plugins/touch/jquery.touchSwipe.min.js"></script>
			<script src="/js/plugins/mask/jquery.maskedinput.min.js"></script>

			<script>
				var рейсы = [
					{
						"город": "МОСКВА",
						"транслит": "moskva",
						"ценаТуда": "1600",
						"ценаОбратно": "2300",
						"времяВПути": "21,5",
						"дниПоездок": "Пн, Пт",
						"дниПоездокОбр": "Пн, Пт",
						"местоПрибытия": "а/с Новоясеневская",
						"ссылкаМестаПрибытия": "https://yandex.ua/maps/-/CZspIL1k",
						"ценаДетям": "50 %",
						"шаблон": "2"
					},
					{
						"город": "ВОРОНЕЖ",
						"транслит": "voronezh",
						"ценаТуда": "1200",
						"ценаОбратно": "1500",
						"времяВПути": "14",
						"дниПоездок": "Вт, Сб",
						"дниПоездокОбр": "Вт, Сб",
						"местоПрибытия": "а/с Воронеж",
						"ссылкаМестаПрибытия": "https://yandex.ua/maps/-/CZspMQNV",
						"ценаДетям": "550 р",
						"шаблон": "2"
					},
					{
						"город": "КЕРЧЬ",
						"транслит": "kerch",
						"ценаТуда": "2100",
						"ценаОбратно": "2100",
						"времяВПути": "15",
						"дниПоездок": "Ежедневно",
						"дниПоездокОбр": "Ежедневно",
						"местоПрибытия": "Автовокзал",
						"ссылкаМестаПрибытия": "https://yandex.ru/maps/-/CZgqNYi~",
						"ценаДетям": "1600", "ценаЖивотным": "1800",
						"шаблон": "1",
						"задниеМеста": "2000"
					},
					{
						"город": "ФЕОДОСИЯ",
						"транслит": "feodosiya",
						"ценаТуда": "2100",
						"ценаОбратно": "2100",
						"времяВПути": "15,5",
						"дниПоездок": "Ежедневно",
						"дниПоездокОбр": "Ежедневно",
						"местоПрибытия": "Нефтебаза",
						"ссылкаМестаПрибытия": "https://yandex.ru/maps/-/CZgqNFp6",
						"ценаДетям": "1600", "ценаЖивотным": "1800",
						"шаблон": "1",
						"задниеМеста": "2000"
					},
					{
						"город": "СИМФЕРОПОЛЬ",
						"транслит": "simferopol",
						"ценаТуда": "2200",
						"ценаОбратно": "2200",
						"времяВПути": "17",
						"дниПоездок": "Ежедневно",
						"дниПоездокОбр": "Ежедневно",
						"местоПрибытия": "бул. Ленина, 14",
						"ссылкаМестаПрибытия": "https://yandex.ru/maps/-/CZgqJX2K",
						"ценаДетям": "1600", "ценаЖивотным": "1800",
						"шаблон": "1",
						"задниеМеста": "2000"
					},
					{
						"город": "ЯЛТА",
						"транслит": "yalta",
						"ценаТуда": "2300",
						"ценаОбратно": "2300",
						"времяВПути": "19",
						"дниПоездок": "Ежедневно",
						"дниПоездокОбр": "Ежедневно",
						"местоПрибытия": "Автовокзал Ялта",
						"ссылкаМестаПрибытия": "https://yandex.ru/maps/-/CZgqJPmC",
						"ценаДетям": "1600", "ценаЖивотным": "1800",
						"шаблон": "1",
						"задниеМеста": "2000"
					},
					{
						"город": "СЕВАСТОПОЛЬ",
						"транслит": "sevastopol",
						"ценаТуда": "2300",
						"ценаОбратно": "2300",
						"времяВПути": "19",
						"дниПоездок": "Ежедневно",
						"дниПоездокОбр": "Ежедневно",
						"местоПрибытия": "5й км, автостоянка, 11 павильон",
						"ссылкаМестаПрибытия": "https://yandex.ru/maps/-/CZgqJSZq",
						"ценаДетям": "1600", "ценаЖивотным": "1800",
						"шаблон": "1",
						"задниеМеста": "2000"
					},
					{
						"город": "ЕВПАТОРИЯ",
						"транслит": "evpatoriya",
						"ценаТуда": "2300",
						"ценаОбратно": "2300",
						"времяВПути": "18,5",
						"дниПоездок": "Вт, Чт, Сб",
						"дниПоездокОбр": "Ср, Пт, Сб",
						"местоПрибытия": "пр-т Победы, 63/2",
						"ссылкаМестаПрибытия": "https://yandex.ru/maps/?z=17&ll=33.34505721726599..",
						"ценаДетям": "1600", "ценаЖивотным": "1800",
						"шаблон": "1",
						"задниеМеста": "2000"
					}
				];

				$.each(рейсы, function (key, data) {
					var firstTemplate = '<div class="' + data['транслит'] + '"><a href="#' + data['транслит'] + '" class="overTrip"></a><a href="#' + data['транслит'] + '" class="arrow_next"><img src="/images/trips/arrow_next.png" alt="">Подробнее</a><span class="priceTrip">' + data['ценаТуда'] + ' P</span><span class="nameTrip">' + data['город'] + '</span><span class="timeTrip"><span class="iconTime"></span><i>' + data['времяВПути'] + ' ч</i> в пути</span></div>';
					$('.wrapTrips').append(firstTemplate);
				});

				$.each(рейсы, function (key, data) {

					if (data['шаблон'] == "1") {
						var template = 	'<div class="remodal" data-remodal-id="' + data['транслит'] + '"><div class="newsOpened"><div class="frame"><div class="wrapHero"><span class="h2">' +data['город'] + '</span><span style="margin: 0 auto 15px auto;" class="lineStar"></span><button data-remodal-action="close" class="remodal-close"></button><hr style="margin-top: 35px;"><div class="wrapTrip"><div class="infoTrip"><div class="directionAndPrice"><i>донецк<span class="directionArrow"></span><br>' +data['город']+ '</i><span class="infoTripPrice">' +data['ценаТуда']+ ' Р</span><a href="news.php#news2" target="_blank" style="margin-top: 15px" class="btnOrangeLine">Акция ></a><span>Задние места -' +data['задниеМеста']+ ' р</span></div><p><b>Время в пути:</b><i>' +data['времяВПути']+ 'ч, с учётом таможни и парома</i></p><p><b>Дни поездок:</b><i>' 
						+data['дниПоездок']+ '</i></p><p><b>Отправление: <br><select onchange="get_city($(this).val(), $(this))" id="cityTrip" class="cityTrip"><option value="1">Макеевка</option><option selected value="2">Донецк</option><option value="3">Харцызск</option></select></b><i id="forAdres">9 <sup>00</sup><br><a href="https://yandex.ua/maps/-/CZgqFR2g" target="_blank">пл. Коммунаров, 1</a></i></p><p><b>Прибытие:</b><i><a href="' +data['ссылкаМестаПрибытия']+ '" target="_blank">' +data['местоПрибытия']+ '</a></i></p><p><b>Спец. цена:</b><i>дети до 10 лет - <b>' + data['ценаДетям'] + ' р</b><br> дом. животные (до 20 кг) - <b>' + data['ценаЖивотным'] + ' р</b> </i></p><p><b></b><i>При предъявлении <a href="http://donbass-tour.ru/news.php#news3" target="_blank">талона</a> скидка <b>100</b> р</i></p></div><hr class="hr_trip"><div class="infoTrip"><div class="directionAndPrice"><i>' +data['город']+ '<span class="directionArrow"></span><br>донецк</i><span class="infoTripPrice">' +data['ценаОбратно']+ ' Р</span><a href="news.php" target="_blank" style="margin-top: 15px" class="btnOrangeLine">Акции ></a></div><p><b>Время в пути:</b><i>' +data['времяВПути']+ ' ч, с учётом таможни и парома</i></p><p><b>Дни поездок:</b><i>' 
						+data['дниПоездокОбр']+ '</i></p><p><b>Отправление:</b><i><a href="' +data['ссылкаМестаПрибытия']+ '" target="_blank">' +data['местоПрибытия']+ '</a></i></p><p><b>Прибытие: <br><select onchange="get_city($(this).val(), $(this))" id="cityTrip" class="cityTrip"><option value="1">Макеевка</option><option selected value="2">Донецк</option><option value="3">Харцызск</option></select></b><i id="forAdres">9 <sup>00</sup><br><a href="https://yandex.ua/maps/-/CZgqFR2g" target="_blank">пл. Коммунаров, 1</a></i></p><p><b>Спец. цена:</b><i>дети до 10 лет - <b>' + data['ценаДетям'] + ' р</b><br> дом. животные (до 20 кг) - <b>' + data['ценаЖивотным'] + ' р</b> </i></p><p><b></b><i>При предъявлении <a href="http://donbass-tour.ru/news.php#news3" target="_blank">талона</a> скидка <b>100</b> р</i></p></div></div><hr style="margin-bottom: 35px;"><a href="#bookingForm" onclick="addFormBooking($(this))" class="btnOrange">Бронировать</a><a target="_blank" href="news.php" class="sales">Узнать о скидках <b style="margin-left: 5px;"> ></b></a></div></div></div></div> ';
					}
					else {
						var template = 	'<div class="remodal" data-remodal-id="' + data['транслит'] + '"><div class="newsOpened"><div class="frame"><div class="wrapHero"><span class="h2">' +data['город'] + '</span><span style="margin: 0 auto 15px auto;" class="lineStar"></span><button data-remodal-action="close" class="remodal-close"></button><hr style="margin-top: 35px;"><div class="wrapTrip"><div class="infoTrip"><div class="directionAndPrice"><i>донецк<span class="directionArrow"></span><br>' +data['город']+ '</i><span class="infoTripPrice">' +data['ценаТуда']+ ' Р</span></div><p><b>Время в пути:</b><i>' +data['времяВПути']+ 'ч, с учётом таможни</i></p><p><b>Дни поездок:</b><i>' 
						+data['дниПоездок']+ '</i></p><p><b>Отправление:</b>  <i>13 <sup>00</sup><br><a href="https://yandex.ua/maps/-/CZspIV8Y" target="_blank">Донецк, Южный АВ</a></i></p><p><b>Прибытие:</b><i><a href="' +data['ссылкаМестаПрибытия']+ '" target="_blank">' +data['местоПрибытия']+ '</a></i></p><p><b>Спец. цена:</b><i>дети до 12 лет - <b>' + data['ценаДетям'] + '</b></i></p></div><hr class="hr_trip" style="height:335px"><div class="infoTrip"><div class="directionAndPrice"><i>' +data['город']+ '<span class="directionArrow"></span><br>донецк</i><span class="infoTripPrice">' +data['ценаОбратно']+ ' Р</span></div><p><b>Время в пути:</b><i>' +data['времяВПути']+ ' ч, с учётом таможни</i></p><p><b>Дни поездок:</b><i>' 
						+data['дниПоездокОбр']+ '</i></p><p><b>Отправление:</b><i><a href="' +data['ссылкаМестаПрибытия']+ '" target="_blank">' +data['местоПрибытия']+ '</a></i></p><p><b>Прибытие:</b><i>13 <sup>00</sup><br><a href="https://yandex.ua/maps/-/CZspIV8Y" target="_blank">Донецк, Южный АВ</a></i></p><p><b>Спец. цена:</b><i>дети до 12 лет - <b>' + data['ценаДетям'] + '</b></i></p></div></div><hr style="margin-bottom: 35px;"><a href="#bookingForm" onclick="addFormBooking($(this))" class="btnOrange">Бронировать</a></div></div></div></div> ';

					}

					$('#for_allInfo').append(template);
				});

				function openLgota(lgota) {
					lgota.children().show();
					lgota.css('text-decoration', 'none');
				};

				$(".remodal").swipe({
					swipeLeft: leftSwipe,
					threshold: 100,
					excludedElements: 'input, select, p'
				});

				var evpatoriyaClose = $('[data-remodal-id="evpatoriya"]').remodal();
				var sevastopolClose = $('[data-remodal-id="sevastopol"]').remodal();
				var yaltaClose = $('[data-remodal-id="yalta"]').remodal();
				var simferopolClose = $('[data-remodal-id="simferopol"]').remodal();
				var kerchClose = $('[data-remodal-id="kerch"]').remodal();
				var feodosiyaClose = $('[data-remodal-id="feodosiya"]').remodal();
				var moskvaClose =
				    $('[data-remodal-id="moskva"]').remodal();
				var voronezhClose = $('[data-remodal-id="voronezh"]').remodal();

				function leftSwipe(event) {
					evpatoriyaClose.close();
					sevastopolClose.close();
					yaltaClose.close();
					simferopolClose.close();
					kerchClose.close();
					feodosiyaClose.close();
					moskvaClose.close();
					voronezhClose.close();
				}

				// Get city to adres
				var mak = '10 <sup>00</sup><br><a href="https://yandex.ua/maps/-/CZgqFFLN" target="_blank">ул. Московская, 29/48</a>',
				    don = '9 <sup>00</sup><br><a href="https://yandex.ua/maps/-/CZgqFR2g" target="_blank">пл. Коммунаров, 1</a>',
				    har = '11 <sup>00</sup><br><a href="https://yandex.ua/maps/-/CZgqFWKk" target="_blank">Автовокзал</a> | <a href="https://yandex.ua/maps/-/CZgqF8JT" target="_blank">Родничек</a>',
				    yalt = '<a href="https://yandex.ru/maps/-/CZgqJPmC" target="_blank">Автовокзал Ялта</a>',
				    alu = '<a href="https://yandex.ru/maps/-/CZgqNA1t" target="_blank">Автовокзал Алушта</a>',
				    sak = '<a href="https://yandex.ru/maps/-/CZgqNZMx" target="_blank">Бывш. пост ГАИ</a>',
				    evp = '<a href="https://yandex.ru/maps/?z=17&ll=33.34505721726599.." target="_blank">пр-т Победы, 63/2</a>';

				function get_city(val, id) {

					if (val == 1) {
						$(id).parent().next().html(mak);
						return;
					}
					if (val == 2) {
						$(id).parent().next().html(don);
						return;
					}
					if (val == 3) {
						$(id).parent().next().html(har);
						return;
					}
					if (val == 4) {
						$(id).parent().next().html(evp);
						return;
					}
					if (val == 5) {
						$(id).parent().next().html(sak);
						return;
					}
					if (val == 6) {
						$(id).parent().next().html(yalt);
						return;
					}
					if (val == 7) {
						$(id).parent().next().html(alu);
						return;
					}
				};


				// Form Booking
				function addFormBooking(btn) {
					var page = btn.parent().children().first().html();
					var fromto = 0;
					var target = "yaCounter35605765.reachGoal('booking'); return true;";

					if (page == 'ЕВПАТОРИЯ') fromto = '<option value="">Направление поездки</option><option value="Из Евпатории">Из Евпатории</option><option value="В Евпаторию">В Евпаторию</option><option value="В Саки">В Саки</option><option value="Из Сак">Из Сак</option>';
					if (page == 'СЕВАСТОПОЛЬ') fromto = '<option value="">Направление поездки</option><option value="Из Севастополя">Из Севастополя</option><option value="В Севастополь">В Севастополь</option>';
					if (page == 'ЯЛТА') fromto = '<option value="">Направление поездки</option><option value="Из Ялты">Из Ялты</option><option value="В Ялту">В Ялту</option><option value="Из Алушты">Из Алушты</option><option value="В Алушту">В Алушту</option>';
					if (page == 'СИМФЕРОПОЛЬ') fromto = '<option value="">Направление поездки</option><option value="Из Симферополя">Из Симферополя</option><option value="В Симферополь">В Симферополь</option>';
					if (page == 'КЕРЧЬ') fromto = '<option value="">Направление поездки</option><option value="Из Керчи">Из Керчи</option><option value="В Керчь">В Керчь</option>';
					if (page == 'ФЕОДОСИЯ') fromto = '<option value="">Направление поездки</option><option value="Из Феодосии">Из Феодосии</option><option value="В Феодосию">В Феодосию</option>';
					if (page == 'МОСКВА') fromto = '<option value="">Направление поездки</option><option value="Из Москвы">Из Москвы</option><option value="В Москву">В Москву</option>';
					if (page == 'ВОРОНЕЖ') fromto = '<option value="">Направление поездки</option><option value="Из Воронежа">Из Воронежа</option><option value="В Воронеж">В Воронеж</option>';

					$(btn).parent().append('<span style="margin-top: 30px;" id="bookingForm" class="h2">БРОНИРОВАНИЕ БИЛЕТА</span><form action="" id="booking" method="post"><input autofocus placeholder="Фамилия" type="text" name="bookingSurName" id="bookingSurName"><input placeholder="Имя" type="text" name="bookingName" id="bookingName"><input placeholder="Контактный номер" type="text" name="bookingPhone" id="bookingPhone"><select name = "bookingDir" id = "bookingDir" > ' + fromto + ' < /select><input type="text" id="bookingDate" name="bookingDate" placeholder="Дата поездки"><input type="number" id="bookingNum" name="bookingNum" placeholder="Кол-во мест"><a id="bookingBtn" onclick="' + target + '" style="margin-top: 20px;" class="btnOrange">готово</a></form>').slideDown();

					$(btn).hide();
					$("#bookingDate").mask("99.99.9999", {
						placeholder: "дд.мм.гггг"
					});

					$('#bookingBtn').click(function(e) {

						var allInputs = [bookingSurName, bookingName, bookingPhone, bookingDate, bookingNum];
						var name = bookingName.value;

						for (var i = 0; i < allInputs.length; i++) {
							if (allInputs[i].value.length == 0) {
								allInputs[i].style.border = '2px solid red';
								allInputs[i].focus();
								return;
							}
						}

						$.ajax({
							type: "POST",
							async: false,
							url: "http://" + window.location.hostname + "/php/booking.php",
							data: $("#booking").serialize(),
							dataType: "html",
							success: function (data) {
								alert(name + ', ожидайте звонка диспетчера для подтверждения брони!');
							},
							error(r) {
								console.log(r);
							}
						});
						return;
					});
				}
			</script>
			</body>

		</html>
