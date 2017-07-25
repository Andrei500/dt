<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <title>Заказать автобус | Аренда автобуса для групповых поездок «Донбасс-Тур»</title>
        <meta name="description" content="«Донбасс-Тур» предоставляет возможность заказать/арендовать автобус для групповых поездок по России, ДНР и Крыму.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
        <div id="top" class="wrapper">

            <h1 style="display: block; position: absolute; top: -100%;">Заказать или арендовать автобус для групповых поездок.</h1>


            <header style="min-height:650px" id="hero_news">
                <div style="min-height:650px" class="blueBg">

                    <?php
                include 'nav.php';
                    ?>

                    <div class="frame">
                        <div class="wrapHero">
                            <span class="h2">заказ автобуса</span>
                            <span class="lineStar"></span>
                            
                          <div class="wrapCalc">
                              <form id="calcOrder" action="" method="post">
                                     
                                  <div>
                                      <span>Направление</span>
                                      <select id="where" onchange="calcOrder(
                                                                         $(this).val(), 
                                                                         $('#bus').val(), 
                                                                         $('#days').val(),
                                                                         $('#distance').val(), $('#countOfPass')
                                                                             )">
                                          <option selected value="В Россию">В Россию</option>
                                          <option value="По ДНР">По ДНР</option>
                                          <option value="В ЛНР">В ЛНР</option>
                                          <option value="В Крым">В Крым</option>
                                      </select>
                                  </div> 
                                    
                                    
                                  <div>
                                      <span>Автобус</span>
                                      <select id="bus" onchange="calcOrder(
                                                                       $('#where').val(),
                                                                       $(this).val(), 
                                                                       $('#days').val(),
                                                                       $('#distance').val(), $('#countOfPass')
                                                                           )">
                                          <option selected value="19мест">19 мест</option>
                                          <option value="55мест">55 мест</option>
                                      </select>
                                  </div> 
                                     
                                     
                                    <div>
                                        <span>Кол-во дней</span>
                                        
                                        <input oninput="calcOrder(
                                                        $('#where').val(),
                                                        $('#bus').val(),
                                                        $(this).val(), 
                                                        $('#distance').val(), 
                                                        $('#countOfPass')
                                                                )" 
                                               value="0" 
                                               type="number" 
                                               id="days"
                                        >
                                    </div>
                                    
                                    
                                   <div> <span>Расстояние, км</span>
                                        
                                       <input oninput="calcOrder(
                                                       $('#where').val(),
                                                       $('#bus').val(),
                                                       $('#days').val(),
                                                       $(this).val(), 
                                                       $('#countOfPass')
                                                                 )" 
                                               value="0" 
                                               type="number" 
                                               id="distance">
                                        </div>
                                    
                                   <div>
                                         <span>Кол-во пассажиров</span>
                                        
                                       <input oninput="calcOrder(
                                                       $('#where').val(),
                                                       $('#bus').val(),
                                                       $('#days').val(),
                                                       $('#distance').val(),
                                                       $(this)
                                                       )" 
                                              value="5" 
                                              type="number" 
                                            id="countOfPass">
                                    </div>
                                  <div id="result">Итого: 
                                      <b id="value">0</b> р (<b id="valueone">0 р / чел</b>
                                       )
                                  </div>
                                  <a href="#order" id="orderBtn" class="btnOrange">ЗАКАЗАТЬ</a>
                                </form>
                               
                          </div>
                            
                            <style>
                                .wrapCalc {
                                    display: -webkit-flex;
                                    display: -moz-flex;
                                    display: -ms-flex;
                                    display: -o-flex;
                                    display: flex;
                                    -webkit-flex-wrap: wrap;
                                    -moz-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    -o-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                    justify-content: space-around;
                                }
                                #calcOrder>div>input,
                                #calcOrder>div>select {
                                    font: 16px OpenSansLight;
                                    padding: 10px;
                                    text-indent: 10px;
                                    letter-spacing: .01em;
                                    border-radius: 3px;
                                    border: none;
                                    width: 180px;
                                    box-sizing: border-box;
                                    margin-top: 5px;
                                }
                                #calcOrder>div>input:focus,
                                #calcOrder>div>select:focus {
                                    box-shadow: 0 0 10px 0 #181818;
                                    -webkit-transition: all .3s ease;
                                    transition: all .3s ease;
                                    outline: 0!important;
                                }
                                
                                #calcOrder>div {
                                   margin: 10px;
                                    
                                }
                                #calcOrder>div>span {
                                    color: #fff;
                                    display: block;
                                }
                                #calcOrder>div>label {
                                    color: #fff;
                                    text-indent: 30px;
                                }
                                #result {
                                    color: #fff;
                                    font-size: 275%;
                                    padding: 30px 0;
                                    text-align: left;
                                    display: block;
                                    text-align: center;
                                    -webkit-box-sizing: border-box;
                                    -moz-box-sizing: border-box;
                                    box-sizing: border-box;
                                    width: 100% !important;
                                    margin: 15px auto 30px;
                                    line-height: 1.3;
                                }
                                #calcOrder {
                                    display: -webkit-flex;
                                    display: -moz-flex;
                                    display: -ms-flex;
                                    display: -o-flex;
                                    display: flex;
                                    align-items: baseline;
                                    background: rgba(14, 50, 144, .35);
                                    border-radius: 10px;
                                    -webkit-flex-wrap: wrap;
                                    -moz-flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    -o-flex-wrap: wrap;
                                    flex-wrap: wrap;
                                    padding: 25px 15px;
                                    justify-content: space-around;
                                }
                            </style>
                            
                        </div>
                    </div>
                </div>
            </header>
        
            <div style="width: 320px;padding: 50px 20px;box-sizing: border-box;background: #0e3290;border-radius: 5px;" class="remodal" data-remodal-id="order">
                <button data-remodal-action="close" class="remodal-close"></button>

                <form method="post" id="bookingStForm">
                    <input style="margin-bottom:10px" autofocus type="text" name="bookingOrderName" placeholder="Ваше имя" id="bookingStName">
                    <input style="margin-bottom:10px" placeholder="Номер телефона" type="tel" name="bookingOrderPhone" id="bookingStPhone">
                    <input style="margin-bottom:10px" type="text" name="bookingOrderCity" placeholder="Город назначения" id="bookingStCity">
                    <input style="margin-bottom:10px" type="text" name="bookingOrderTarget" placeholder="Цель поездки" id="bookingStTarget">
                    <input type="text" name="bookingOrderCount" placeholder="Кол-во пассажиров" id="bookingStCount">
                    
                    <div>
                        <a onclick="sendFormOrder()" style="margin: 20px 0 0;" id="bookingStBtn" href="" class="btnOrange">заказать</a>
                    </div>
                </form>

            </div>
        
      
        
        
        
        
        <?php
        include 'callback.php';
        ?>


        <?php
        include 'footer.php';
        ?>
        
            <link rel="stylesheet" href="/js/plugins/remodal/theme_news.css">
            <script>

                function calcOrder (where, bus, days, distance, countOfPass) {

                    if (countOfPass.val() < 0) countOfPass.val(0);
                    if (countOfPass.val() > 55) countOfPass.val(55);
                    
                    var дни = days,                        
                        расстояние = distance,                
                        колвоПасс = countOfPass.val(),          
                        расход = 15,    
                        топливо = 46,
                        коэфЗаправки = 1,  // 1 - в одну сторону, 2 - в две стороны
                        границаДНР = 0,
                        границаРФ = 0,
                        самбек = 0,
                        гаи = расстояние * 0.5,
                        ртн = 0,
                        паром = 0,
                        проживание = дни * 500,
                        питание = дни * 300,
                        стоянка = 0,
                        водители = (расстояние * 2) + (колвоПасс * 10),
                        комДисп = колвоПасс * 30,
                        оплатаЗаказчика = колвоПасс * 15,
                        оплатаМеханика = колвоПасс * 15,
                        оплатаКассира = колвоПасс * 10,
                        оплатаУправления = колвоПасс * 20,
                        оплата2механика = колвоПасс * 10,
                        кредит = расстояние * 2.5,
                        разрешение = 0,
                        ремфонд = расстояние * 2.5,
                        процентДохода = 0.2,
                        процентНалога = 0.064;
                    

                    if ((where == 'По ДНР') && (bus == '55мест')) {
                        расход = 30,    
                        гаи = расстояние * 1,
                        водители = (расстояние * 4) + (колвоПасс * 10),    
                        кредит = расстояние * 5,  
                        ремфонд = расстояние * 5,
                        процентДохода = 0.25;
                    }

                    if (where == 'В ЛНР') {
                        коэфЗаправки = 2,
                        гаи = расстояние * 1,
                        стоянка = 100,
                        водители = расстояние * 5,
                        комДисп = колвоПасс * 50,
                        кредит = расстояние * 5,  
                        ремфонд = расстояние * 5,
                        разрешение = 600,
                        процентДохода = 0.15;
                        
                        if (bus == '55мест') {
                            расход = 30,
                            гаи = расстояние * 2,
                            проживание = дни * 500 * 2,
                            питание = дни * 300 * 2,
                            водители = расстояние * 8,
                            кредит = расстояние * 10,  
                            ремфонд = расстояние * 10,
                            процентДохода = 0.2;
                        }
                    }
                    
                    if ((where == 'В Россию') || (where == 'В Крым')) {
                        
                        топливо = 35.5,
                        коэфЗаправки = 2,
                        границаДНР = 500 * 2,
                        границаРФ = колвоПасс * 100 * 2,
                        самбек = 1100,
                        гаи = расстояние * 1,
                        ртн = расстояние * 0.5,
                        проживание = дни * 2 * 500,
                        питание = 1000 + дни * 1000,
                        стоянка = дни * 100,
                        водители = расстояние * 6,
                        комДисп = колвоПасс * 100,
                        оплатаЗаказчика = колвоПасс * 30,
                        оплатаМеханика = колвоПасс * 30,
                        оплатаКассира = колвоПасс * 15,
                        оплатаУправления = колвоПасс * 30,
                        оплата2механика = колвоПасс * 15,
                        кредит = расстояние * 6,
                        разрешение = 600,
                        ремфонд = расстояние * 6,
                        процентДохода = 0.1;
                    
                        if (bus == '55мест') {
                            расход = 30,
                            самбек = 1500,
                            гаи = расстояние * 2,
                            ртн = расстояние * 1,
                            водители = расстояние * 9,
                            оплатаЗаказчика = колвоПасс * 15,
                            оплатаМеханика = колвоПасс * 15,
                            оплатаКассира = колвоПасс * 10,
                            оплатаУправления = колвоПасс * 15,
                            оплата2механика = колвоПасс * 10,
                            кредит = расстояние * 12,
                            ремфонд = расстояние * 12,
                            процентДохода = 0.15;
                        }
                        
                        if (where == 'В Крым') {
                            топливо = 36,
                            паром = 6000 + колвоПасс * 300;
                            
                            if (bus == '55мест') {
                                паром = 10000 + колвоПасс * 300;
                            }
                        }
                        
                        
                    }

                    
                    var заправка = (топливо * расход * расстояние / 100) * коэфЗаправки;
                    
                    var итого = заправка +
                                границаДНР +
                                границаРФ +
                                самбек +
                                гаи +
                                ртн +
                                паром +
                                проживание +
                                питание +
                                стоянка +
                                водители +
                                комДисп +
                                оплатаЗаказчика +
                                оплатаМеханика +
                                оплатаКассира +
                                оплатаУправления +
                                оплата2механика +
                                кредит +
                                разрешение +
                                ремфонд;
                    
                    var доход = Math.round(итого * процентДохода);
                    
                    var налог = Math.round((итого + доход) * процентНалога);
                    
                    var приход = Math.round(итого + доход + налог);
                    
                    var одинПасс = Math.round(приход / колвоПасс);
                        if (одинПасс === Infinity) {
                            одинПасс = 0;
                        }
                   
                    
                    if (where == 'По ДНР') {


                    }
                    
                    $('#bookingStCount').val(countOfPass.val() + ' пассажиров');
                    $('#value').html(приход);
                    $('#valueone').html(одинПасс + ' р / чел');
                }

                function sendFormOrder() {

                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "http://" + window.location.hostname + "/php/bookingOrder.php",
                        data: $("#bookingStForm").serialize(),
                        dataType: "html",
                        success: function (data) {
                            alert('Ожидайте звонка диспетчера для уточнения деталей!');
                        }
                    });
                    return;
                }
                
            </script>
        
        
        
        
        </div>
    </body>
</html>
 
