<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <title>Новости, акции и скидки на пассажирские перевозки в Крым</title>
        <meta name="description" content="«Донбасс-Тур» всегда стремится на встречу клиенту, поэтому у нас Вы найдёте множество акционных предложений и скидок.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
        <div id="top" class="wrapper remodal-bg">
            <h1 style="display: block; position: absolute; top: -100%;">Скидки, купоны, цены и стомость билетов в Крым, Севастополь, Симферополь, Ялту, Евпаторию.</h1>
            <!---------- Hero News ---------->
            <header id="hero_news">
                <div class="blueBg">

                    <?php
                    include 'nav.php';
                    ?>

                    <div class="frame">
                        <div class="wrapHero">
                            <span class="h2">НОВОСТИ И АКЦИИ</span>
                            <span style="margin: 0 auto 15px auto;" class="lineStar"></span>

                            <div class="wrapNews">

                                <div class="news">
                                    <div class="newsPhoto">
                                        <a href="#" data-remodal-target="news8"><img src="https://pp.userapi.com/c836731/v836731421/45d8b/u3c41rWi1j0.jpg" alt=""></a>
                                        <span>14.07.2017</span>
                                    </div>
                                    <div class="newsDescr">
                                        <div class="newsTitle">АКЦИЯ "Лето из Крыма"</div>
                                        <p class="newsPrev">
                                            Каждое ВОСКРЕСЕНЬЕ поездки из Крыма по единой цене...
                                        </p>
                                        <a data-remodal-target="news8" href="#" class="btnOpenNews">
                                            открыть
                                        </a>
                                    </div>
                                </div>


                                <div class="news">
                                    <div class="newsPhoto">
                                        <a href="#" data-remodal-target="news2"><img src="/images/news/news2.jpg" alt=""></a>
                                        <span>13.10.2016</span>
                                    </div>
                                    <div class="newsDescr">
                                        <div class="newsTitle">скидка на последний ряд</div>
                                        <p class="newsPrev">
                                            При покупке мест на задние сиденья предоставляется скидка 100 Р! <br>
                                        </p>
                                        <a data-remodal-target="news2" href="#" class="btnOpenNews">
                                            открыть
                                        </a>
                                    </div>
                                </div>


                                <div class="news">
                                    <div class="newsPhoto">
                                        <a href="#" data-remodal-target="news3"><img src="/images/news/news3.jpg" alt=""></a>
                                        <span>13.10.2016</span>
                                    </div>
                                    <div class="newsDescr">
                                        <div class="newsTitle">талон постоянного клиента</div>
                                        <p class="newsPrev">
                                            После первой поездки пассажиру вручается специальный талон, который...
                                        </p>
                                        <a data-remodal-target="news3" href="#" class="btnOpenNews">
                                            открыть
                                        </a>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <!---------- Hero News End ---------->


            <!---------- Subscribe ---------->
            <section id="subscribe">
                <div class="blueBg">
                    <div class="wrapSubs">
                        <span class="h2">БУДЬТЕ В КУРСЕ ВСЕХ НОВОСТЕЙ</span>
                        <span style="margin: 0 auto 15px auto;" class="lineStar"></span>
                        <script type="text/javascript" src="//vk.com/js/api/openapi.js?132"></script>

                        <div class="wrapVidgets">

                            <div class="vidgetVK">
                                <div id="vk_groups"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Group("vk_groups", {mode: 0, width: "320", height: "300", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 114104140);
                                </script>
                                <script type="text/javascript">
                                    VK.Widgets.Group("vk_groups", {mode: 0, width: "320", height: "300", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 102529610);
                                </script>
                            </div>

                            <div class="vidgetOK">
                                <div id="ok_group_widget"></div>
                                <script>
                                    !function (d, id, did, st) {
                                        var js = d.createElement("script");
                                        js.src = "https://connect.ok.ru/connect.js";
                                        js.onload = js.onreadystatechange = function () {
                                            if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                                                if (!this.executed) {
                                                    this.executed = true;
                                                    setTimeout(function () {
                                                        OK.CONNECT.insertGroupWidget(id,did,st);
                                                    }, 0);
                                                }
                                            }}
                                        d.documentElement.appendChild(js);
                                    }(document,"ok_group_widget","53792135381246",'{"width":320,"height":300}');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---------- Subscribe End ---------->


            <div class="remodal" data-remodal-id="news2">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div class="newsOpened">
                    <img src="/images/news/news2.jpg" alt="">
                    <p class="newsOpenedTitle">скидки на последний ряд</p>
                    <div class="newsOpenedText">
                        <p>
                            При покупке мест на задние сиденья предоставляется скидка 100 Р! <br>
                        </p>

                        <div class="btnWrapCenter">
                            <a href="trips.php" class="btnOrangeLine">Выбрать рейс <b style="margin-left: 10px;">></b></a>
                            <a href="contacts.php" class="btnBlueLine">Связаться с нами <b style="margin-left: 10px;">></b></a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="remodal" data-remodal-id="news3">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div class="newsOpened">
                    <img src="/images/news/news3.jpg" alt="">
                    <p class="newsOpenedTitle">талон постоянного клиента</p>
                    <div class="newsOpenedText">
                        <p>
                            После первой поездки пассажиру вручается специальный талон, который даёт Вам ряд преимуществ:
                        </p>

                        <p  style="text-indent: 0; padding-left: 30px;">
                            1. Постоянная скидка <b>100 р</b> на все рейсы. <br>
                            2. <b>Бесплатный</b> билет после 10 поездок. <br>
                            3. Возможность участия в различных акциях.
                        </p>

                        <i style="font-size: 14px; line-height: 1">
                            В связи с подготовкой средств к летнему периоду, до 01.06.2017 скидка 100р по купону не применяется. <br>
                            При оплате проезда предоставляйте купон постоянного клиента для учета количества поездок
                        </i>

                        <div class="btnWrapCenter">
                            <a href="trips.php" class="btnOrangeLine">Выбрать рейс <b style="margin-left: 10px;">></b></a>
                            <a href="contacts.php" class="btnBlueLine">Связаться с нами <b style="margin-left: 10px;">></b></a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="news8">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div class="newsOpened">
                    <img src="https://pp.userapi.com/c836731/v836731421/45d8b/u3c41rWi1j0.jpg" alt="">
                    <p class="newsOpenedTitle">АКЦИЯ "Лето из Крыма"</p>
                    <div class="newsOpenedText">
                        <p>
                          Каждое ВОСКРЕСЕНЬЕ поездки из Крыма на комфортабельном автобусе Mersedes по единой цене: <strong>2000р</strong> по всем направлениям.
                        </p>

                        <p  style="text-indent: 0; padding-left: 30px;">
                            ДЕТЯМ СКИДКИ
                        </p>

                        <div class="btnWrapCenter">
                            <a href="trips.php" class="btnOrangeLine">Выбрать рейс <b style="margin-left: 10px;">></b></a>
                            <a href="contacts.php" class="btnBlueLine">Связаться с нами <b style="margin-left: 10px;">></b></a>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            include 'footer.php';
            ?>
            <link rel="stylesheet" href="/js/plugins/remodal/theme_news.css">
            <script src="//vk.com/js/api/openapi.js?132"></script>
            </body>
        </html>
