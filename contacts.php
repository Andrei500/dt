<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Контакты | Адреса и телефоны «Донбасс-Тур»</title>
    <meta name="description" content="«Донбасс-Тур» осуществляет пассажирские перевозки с апреля  2014 г. За время работы мы добились максимального сокращения времени в пути, определив кратчайшие маршруты и отдав предпочтение 19-местным миниавтобусам, позволяющим в 2,5 раза быстрее проходить таможенный контроль и паромное оформление, в сравнении с большими автобусами.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="top" class="wrapper remodal-bg">

        <h1 style="display: block; position: absolute; top: -100%;">Автобусные перевозки из Донецка, ДНР, Донбасса в Крым.</h1>

        <!---------- Hero Contacts ---------->
        <header id="hero_contacts">
            <div class="blueBg">

                <?php
                    include 'nav.php';
                    ?>

                    <div class="frame">
                        <div class="wrapHero">
                            <span class="h2">КОНТАКТЫ</span>
                            <span class="lineStar"></span>

                            <div class="switch-wrap">
                                <div class="switch-tabs">
                                    <span class="switch-tab">донбасс</span>
                                    <span class="switch-tab">крым</span>
                                </div>
                            </div>

                            <div class="border">
                                <div class="switch-tab_content">
                                    <div class="switch">
                                        <div class="contacts">
                                            <div class="map">
                                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=3y8ko8X2defNxWLvqpZfvJDeMU8SD_nF&amp;width=100%&amp;height=435&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>
                                            </div>
                                            <div class="contact">
                                                <div>
                                                    <img src="/images/icon_location.png" alt="">
                                                    <p>
                                                        г. Макеевка, ул. Московская, 29/48
                                                        <br>
                                                        <span>(остановка Бывшая Вареничная)</span>
                                                    </p>
                                                </div>

                                                <hr width="100%">

                                                <div>
                                                    <img src="/images/icon_time.png" alt="">
                                                    <p>
                                                        <b>Пн-Пт:</b> 9:00-16:00
                                                        <br>
                                                        <b>Сб-Вс:</b> 9:00-13:00
                                                    </p>
                                                </div>

                                                <hr width="100%">

                                                <div>
                                                    <img src="/images/icon_phone.png" alt="">
                                                    <p>
                                                        +38 <b>(066)</b> 737-61-63
                                                        <br> +38 <b>(099)</b> 490-99-26
                                                        <br> +38 <b>(071)</b> 318-03-04
                                                        <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="switch">
                                        <div class="contacts">

                                            <div class="map" id="evp">
                                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=wzvAiRjOZ2irjA02tDWwKLb18ocKIK8K&amp;width=100%25&amp;height=435&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>
                                            </div>
                                            <div class="map" id="feo">
                                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=o-Q0wHlZAEKpbs1A3PEfAXO9CusRUvdS&amp;width=100%25&amp;height=435&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>
                                            </div>
                                            
                                            <div class="map" id="sim">
                                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=tOqKjpUWKMD_cS5oEtwBenZ-YN2g63M_&amp;width=100%&amp;height=435&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                                            </div>

                                            <div class="map" id="sev">
                                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=YsE6QOT9vWNS0xB925hq81wcKh5Efeki&amp;width=100%&amp;height=435&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                                            </div>



                                            <div class="contact">

                                                <div class="citys_crimea-wrap">
                                                    <div class="citys_crimea-tabs">
                                                        <span onclick="zoomEvp()" class="citys_crimea-tab">Евпатория</span>
                                                        <span onclick="zoomSev()" class="citys_crimea-tab">Севастополь</span>
                                                        <span onclick="zoomSim()" class="citys_crimea-tab">Симферополь</span>
                                                        <span onclick="zoomFeo()" class="citys_crimea-tab">Феодосия</span>
                                                    </div>
                                                </div>

                                                <style>
                                                    .citys_crimea-tab {
                                                        color: #ff7200;
                                                        text-decoration: underline;
                                                        cursor: pointer;
                                                        padding: 5px;
                                                    }
                                                    
                                                    .citys_crimea-tab:hover {
                                                        text-decoration: none;
                                                    }
                                                    
                                                    .citys_crimea-active {
                                                        text-decoration: none;
                                                    }
                                                    .citys_crimea-wrap {
                                                        position: absolute;
                                                        top: 30px;
                                                        right: 0;
                                                        left: 0;
                                                        text-align: center;
                                                    }
                                                    .citys_crimea {
                                                        display: -webkit-box;
                                                        display: -ms-flexbox;
                                                        display: flex;
                                                        -moz-flex-direction: column;
                                                        -ms-flex-direction: column;
                                                        -o-flex-direction: column;
                                                        -webkit-box-orient: vertical;
                                                        -webkit-box-direction: normal;
                                                        flex-direction: column;
                                                        -ms-flex-pack: distribute;
                                                        justify-content: space-around;
                                                        height: 70%;
                                                    }
                                                </style>

                                                <div class="citys_crimea">
                                                    <div>
                                                        <img src="/images/icon_location.png" alt="">
                                                        <p>
                                                            Новый Город, пр-т Победы, 63/2, офис 24А
                                                            <br>
                                                            <span>(вход через арку с правой стороны ресторана "Пассаж") </span>
                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_time.png" alt="">
                                                        <p>
                                                            <b>Вт-Пт:</b> 9:00-16:00
                                                            <br>
                                                            <b>Сб:</b> 9:00-13:00
                                                            <br>
                                                            <b>Пн</b> - выходной

                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_phone.png" alt="">
                                                        <p>
                                                        +7 <b>(978)</b> 229-77-80
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="citys_crimea">
                                                    <div>
                                                        <img src="/images/icon_location.png" alt="">
                                                        <p>
                                                            5-й километр, автостоянка
                                                            <br>
                                                            <span>(напротив вещевого рынка), 11 павильон</span>
                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_time.png" alt="">
                                                        <p>
                                                            <b>Пн-Пт:</b> 9:00-16:00
                                                            <br>
                                                            <b>Сб-Вс:</b> 9:00-13:00
                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_phone.png" alt="">
                                                        <p>
                                                            +7 <b>(978)</b> 050-41-99
                                                            <br> +7 <b>(978)</b> 107-75-98
                                                            <br>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="citys_crimea">
                                                    <div>
                                                        <img src="/images/icon_location.png" alt="">
                                                        <p>
                                                             бул. Ленина, 14 <br>
                                                            <span>(Ж/Д вокзал)</span>
                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_time.png" alt="">
                                                        <p>
                                                            <b>Пн-Пт:</b> 9:00-16:00
                                                            <br>
                                                            <b>Сб-Вс:</b> 9:00-13:00
                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_phone.png" alt="">
                                                        <p>
                                                            +7 <b>(978)</b> 050-41-99
                                                            <br> +7 <b>(978)</b> 107-75-98
                                                            <br>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="citys_crimea">
                                                    <div>
                                                        <img src="/images/icon_location.png" alt="">
                                                        <p>
                                                            Керченское шоссе, 30 <br>
                                                           <span>(ост. пр-т Украина, возле кафе "Калиба")</span>
                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_time.png" alt="">
                                                        <p>
                                                            <b>Ежедневно</b> <br> с 10:00-17:00
                                                        </p>
                                                    </div>

                                                    <hr width="100%">

                                                    <div>
                                                        <img src="/images/icon_phone.png" alt="">
                                                        <p>
                                                         +7 <b>(978)</b> 110-65-03
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </header>
        <!---------- Hero Contacts End ---------->


        <!---------- Send Us ---------->
        <section id="sendUs">
            <div class="blueBg">
                <div class="wrapSubs">
                    <span class="h2">НАПИШИТЕ НАМ</span>
                    <span style="margin-bottom: 10px;" class="lineStar"></span>

                    <form action="" method="post" class="formCB" id="formSendUs">
                        <input name="formSendUsName" id="formSendUsName" placeholder="Имя" type="text">
                        <input name="formSendUsPhone" id="formSendUsPhone" placeholder="E-mail или телефон" type="text">

                        <textarea placeholder="Сообщение..." name="formSendUsText" id="formSendUsText"></textarea>

                        <div>
                            <a id="formSendUsBtn" href="" class="btnOrange">ОТПРАВИТЬ</a>
                        </div>
                        <span class="forError"></span>
                    </form>

                </div>
            </div>
        </section>
        <!---------- Send Us End ---------->

        <?php
            include 'footer.php';
            ?>

            <script>
                $("#sim, #sev, #feo").hide();

                //  Tabs
                $(".switch").not(":first").hide();
                $(".switch-wrap .switch-tab").click(function () {
                    $(".switch-wrap .switch-tab").removeClass("switch-active").eq($(this).index()).addClass("switch-active");
                    $(".switch").hide().eq($(this).index()).fadeIn()
                }).eq(0).addClass("switch-active");

                $(".citys_crimea").not(":first").hide();
                $(".citys_crimea-wrap .citys_crimea-tab").click(function () {
                    $(".citys_crimea-wrap .citys_crimea-tab").removeClass("citys_crimea-active").eq($(this).index()).addClass("citys_crimea-active");
                    $(".citys_crimea").hide().eq($(this).index()).fadeIn()
                }).eq(0).addClass("citys_crimea-active");

                //  Crimea citys
                function zoomSev() {
                    $("#evp, #sim, #feo").hide();
                    $("#sev").show();
                }

                function zoomSim() {
                    $("#evp, #sev, #feo").hide();
                    $("#sim").show();
                }
                function zoomEvp() {
                    $("#sim, #sev, #feo").hide();
                    $("#evp").show();
                }
                function zoomFeo() {
                    $("#evp, #sev, #sim").hide();
                    $("#feo").show();
                }

                //  Form "Send Us"
                $("#formSendUsBtn").click(function (event) {

                    event.preventDefault();

                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "http://" + window.location.hostname + "/php/formSendUs.php",
                        data: $("#formSendUs").serialize(),
                        dataType: "html",
                        success: function (data) {
                            alert('Спасибо за обращение!');
                        }
                    });

                });
            </script>

</body>

</html>