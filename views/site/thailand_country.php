<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Туры в Таиланд из Алматы | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Путевки в Таиланд | Туры в Таиланд из Алматы по низким ценам | Chemodan.kz';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/tailand/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/tailand/css/media.css">
<link rel="stylesheet" href="/css/tailand/css/slick.css">
<link rel="stylesheet" href="/css/tailand/css/slick-theme.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php
    //$content = file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']);
    $content = false;
    if ($content) {
      $geoPlugin_array = unserialize($content);
      // Подключение и инициализация класса
      // require_once 'Mobile_Detect.php';
      // $detect = new Mobile_Detect;
      if($geoPlugin_array['geoplugin_city'] == "Almaty") {
        $title = 'Алматы';
      } else {
        $title = 'Нур-Султан';
      }
    } else {
      $title = "Алматы";
    }
?>
<div class="tailand_div">
  <div class="row">
    <div class="col-md-12">
      <section class="sec1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="header_title">
              Туры в Таиланд из <?php echo $title; ?>
            </div>
            <div class="header_p_title">
              Приобретайте огненные путевки в Таиланд! Проведите незабываемый отдых!
            </div>
            <div class="header_txt">
              <div class="row">
                <div class="col-md-12">
                  <div class="txt">
                    <ul>
                      <li>Тратите большие деньги и не получаете обещанного сервиса?</li>
                      <li>Хотите, чтобы цена путевки соответствовала качества сервиса, а впечатления превосходили ваши ожидания?</li>
                      <li>Раздражают толпы шумных туристов?</li>
                      <li>Надоели скучные маршруты увидеть все за 5 минут с бесцеремонным гидом?</li>
                      <li>Устали от хамского поведения персонала и некачественного обслуживания в отеле?</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec6">
      <div class="sec6_content text-center">
        <div class="container">
          <div class="title">Оставьте заявку у нас!</div>
          <div class="row">
            <div class="col-md-3">
              <div class="sec6_im">
                <i class="fas fa-percent"></i>
              </div>
              <div class="sec6_title">Скидка до 45%</div>
            </div>

            <div class="col-md-3">
              <div class="sec6_im">
                <i class="fas fa-credit-card"></i>
              </div>
              <div class="sec6_title">Кэшбэк <br> с каждого тура</div>
            </div>

            <div class="col-md-3">
              <div class="sec6_im">
                <i class="fas fa-donate"></i>
              </div>
              <div class="sec6_title">Возвожность рассрочки</div>
            </div>

            <div class="col-md-3">
              <div class="sec6_im">
                <i class="far fa-clock"></i>
              </div>
              <div class="sec6_title">Поддержка 24/7</div>
            </div>

            <div class="col-md-3">
              <div class="sec6_im">
                <i class="fas fa-clock"></i>
              </div>
              <div class="sec6_title">Быстрое оформление</div>
            </div>

            <div class="col-md-3">
              <div class="sec6_im">
                <i class="fas fa-users"></i>
              </div>
              <div class="sec6_title">Более 20 000 <br> довольных клиентов</div>
            </div>

            <div class="col-md-3">
              <div class="sec6_im">
                <i class="far fa-building"></i>
              </div>
              <div class="sec6_title">Подберем <br> лучшие отели</div>
            </div>

            <div class="col-md-3">
              <div class="sec6_im">
                <i class="fas fa-gift"></i>
              </div>
              <div class="sec6_title">Дарим подарки</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="sec2_content">
              
              <div class="title">
                Какие города можете увидеть во время тура?
              </div>
              
              <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Паттайя</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Остров Пхукет</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="samui-tab" data-toggle="tab" href="#samui" role="tab" aria-controls="samui" aria-selected="false">Остров Самуи</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Город Бангкок</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="chang-tab" data-toggle="tab" href="#chang" role="tab" aria-controls="chang" aria-selected="false">Остров Ко Чанг</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#pxi" role="tab" aria-controls="pxi" aria-selected="false">Острова Пхи Пхи</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <img src="/img/tailand/img/pattaya.jpg" align="left">
    <p>Все острова можно разделить на ближние и дальние, которые к Паттайе уже не относятся, но их таковыми все равно считают. Также есть маленькие острова возле Паттайи, на которые возят экскурсии, а самостоятельно на них поехать не получится.</p>

<p>Ближайшие острова к Паттайе — Ко Лан и Ко Сичанг. Их можно посетить самостоятельно. Изумрудный остров, остров Принцессы и прочие сказочные названия — это всё экскурсионные острова. Дальние острова — Ко Самет, Ко Чанг, Ко Мак и Ко Куд. Последние относятся к провинции Трат, но все равно их называют островами возле Паттайи (300 км это же рядом).</p>

<p>На всех островах в нашем обзоре можно остановиться, как на 1-3 дня, так и на весь отпуск. Начнем с ближайших и будем продвигаться по мере удаления от Паттайи.</p>
  </div>

  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
    <img src="/img/tailand/img/pxuket.jpg" align="left">
    <p>Пхукет удивительный. Несмотря на то, что он считается одним из самых респектабельных курортов Таиланда, куда спешат на отдых семьи с детьми, «игры в пинг-понг» от go-go девчонок здесь практикуются не реже, чем в «мекке разврата» Паттайе.</p> 

    <p>Главное на этом живописном острове — найти себе место, а иначе есть риск так никогда и не влюбиться в эту страну. К примеру, Патонг подойдет гулякам и кутилам, сюда приезжают не столько за купанием (пляжи — так себе), сколько за развлечениями, порой откровенно сексуального характера.</p> 

    <p>Совершенно другая картина на пляже Камала — исключительная идиллия природы и человека, где находят отдохновение и покой все уставшие от шума и суеты. Активно настроенным отдыхающим, да и вообще молодежи можно порекомендовать Карон-Бич: тут и тусовки на уровне, и серф можно освоить. Вообще, пляжей на Пхукете много, и каждый отличается свои характером, лучшие — на западном берегу. В идеале — надо брать скутер напрокат и лично побывать везде, чтобы составить собственное мнение. </p>
  </div>

  <div class="tab-pane fade" id="samui" role="tabpanel" aria-labelledby="samui-tab">
    <img src="/img/tailand/img/samui.jpg" align="left">
    <p>Остров потрясающей природной красоты и разнообразия — Самуи не мог остаться незамеченным в ходе туристического бума, обрушившегося на Таиланд в 20 веке. Это третий по величине остров страны и самый крупный в архипелаге Чампон, который состоит из более чем 80 островов (преимущественно необитаемых).</p>

<p>Благодаря тому, что вплоть до 20 века Самуи был изолирован и не имел частых контактов с материком, здешняя природа сохранилась в очень близком к первозданному виде. Что говорить: тут и дорог-то не было вплоть до 70-х гг. Как раз в это время сюда десантировались первые бэкпэкеры, а уже в начале 90-х полные лодки туристов прибывали на остров, сделав его вторым по популярности направлением в Таиланде (первое — это Пхукет). Белые пляжи, яркие кораллы, ласковые лагуны, живописные водопады, повсеместные кокосы и кристально чистые волны — достаточные тому причины.</p>
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <img src="/img/tailand/img/bangkok.jpg" align="left">
    <p>Огромный, вечно переполненный, красочный Бангкок — столица Таиланда, один из главных деловых, культурных и туристических центров королевства. Расположен он на побережье реки Чаупхрая, неподалеку от Сиамского залива. Небольшой портовый городок, именовавшийся когда-то Банг Кок — «место, где растут оливки», — со временем невероятно разросся, но все равно с трудом вмещает 8 млн жителей и многочисленных туристов, бесконечным потоком съезжающихся со всего мира.</p>

<p>Космополитичный Бангкок стирает границы между востоком и западом, между историей и современностью. В урбанизированном мегаполисе с сотнями небоскребов и бизнес-центров свято чтят наследие прошлого, и превосходно сохранившиеся архитектурные памятники — главное тому подтверждение. Величественные храмы, дворцы и музеи бережно хранят тайны многоликой восточной культуры. А по ночам Бангкок превращается в гигантский развлекательный центр — вряд ли где-либо еще вы проведете время так же весело, ярко и сумасбродно, как в вечно бьющемся сердце Таиланда.</p>
  </div>

  <div class="tab-pane fade" id="chang" role="tabpanel" aria-labelledby="chang-tab">
    <img src="/img/tailand/img/koh-chang.jpg" align="left">
    <p>Ко Чанг - остров в Сиамском заливе, находится в юго-восточной части Тайланда, недалеко от границы с Камбоджей. Расстояние от Бангкока до Ко Чанга составляет около 320 км. Размеры острова - 30х10 км (второй по величине после Пхукета), общая площадь - около 290 кв. км. Является частью провинции Трат. Название можно дословно перевести, как «Остров слона».</p>

<p>Туризм на Ко Чанге стал развиваться относительно недавно, поскольку остров находится вдали от популярных направлений. В недалеком прошлом здесь отдыхали только итальянцы, французы, немцы, испанцы и сами тайцы, приезжающие на выходные целыми семьями. Но в последнее десятилетие всё больше русских приезжает на остров, особенно много их на пляжах Клонг Прао, Кай Бае и Вайт Сенд.</p>

<p>Ко Чанг отлично подходит для уединённого отдыха, вдали от цивилизации. Здесь нет отелей-небоскрёбов, ночных клубов как на Пхукете, Go Go баров как в Паттайе, торговых центров, культурных и исторических памятников, аквапарков, аттракционов, кинотеатров и даже водных развлечений.</p>

<p>Но! Всё это с лихвой окупается чистейшим морем с прозрачной водой, малолюдными пляжами и удивительной по красоте природой, которой нет в Паттайе или на Пхукете.</p>
  </div>

  <div class="tab-pane fade" id="pxi" role="tabpanel" aria-labelledby="pxi-tab">
    <img src="/img/tailand/img/pxi.jpg" align="left">
    <p>Всем желающим посетить знаменитые острова туристическая компания предлагает совершить незабываемые экскурсии на Пхи-Пхи с Пхукета и представляет несколько видов программ.</p>

<p>Во время однодневного путешествия вы посетите Пхи-Пхи Лей. Главной достопримечательностью этого экзотического места является Бухта Майя. Эта красивая лагуна защищена с 3-х сторон отвесными скалами, недалеко от берега расположены коралловые рифы. на острове Пхи Пхи Дон пообедаете в ресторане. После обеда туристам предоставляется возможность прогуляться по песчаным пляжам. Здесь же можно сделать массу памятных фотографий.</p>

<p>Отдельной программой предусмотрено посещение острова Bamboo на Пхукете. Несмотря на название, бамбука вы здесь не найдете. Это место привлекает путешественников всего мира кристально чистой морской водой и райским пляжем. Территория Bamboo небольшая, его можно полностью обойти пешком. На этом тропическом острове нет пальм – здесь растут хвойные деревья и лиственницы, наполняющие воздух тонким ароматом хвои.</p>

<p>С Пхукета на Bamboo часто едут туристы, предпочитающие пляжный отдых в живописных местах, любители полюбоваться первозданной природой. Здесь нет лежаков и зонтиков, поскольку Бамбу входит в состав национального парка Таиланда. Зато вы сможете взять напрокат снаряжение для подводного плавания и понырять с маской рядом с коралловым рифом.</p>
  </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec3">
      <div class="sec3_content">
        <div class="container">
          <div class="title">
            Какие места сможете посетить?
          </div>
        <div class="row">
          <div class="col-md-3">
            <div class="div_im">
              <div class="im1 im">
                
              </div>

              <div class="im_title">Лучшие пляжи мира</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im2 im">
                
              </div>

              <div class="im_title">Кристальная вода</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im3 im">
                
              </div>

              <div class="im_title">Экзотические фрукты</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im4 im">
                
              </div>

              <div class="im_title">Дайвинг</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im5 im">
                
              </div>

              <div class="im_title">Головокружительная архитектура</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im6 im">
                
              </div>

              <div class="im_title">Вечный карнавал</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im7 im">
                
              </div>

              <div class="im_title">Тайский массаж</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im8 im">
                
              </div>

              <div class="im_title">Крокодиловая ферма</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im9 im">
                
              </div>

              <div class="im_title">Разнообразие ночных развлечений</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im10 im">
                
              </div>

              <div class="im_title">Рафтинг, водные аттракционы</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im11 im">
                
              </div>

              <div class="im_title">Романтика</div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="div_im">
              <div class="im12 im">
                
              </div>

              <div class="im_title">Морские круизы</div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="sec4">
      <div class="sec4_content">
        <div class="container">
          <div class="title">
            Самые популярные отели Тайланда
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="slider_t">
                <div class="slider1 slide">
                  <div class="slide_content">
                    <div class="slide_title">Отель Bontany Beach</div>
                    <div class="slide_btn">
                      <button type="button" data-toggle="modal" data-target="#modal_lead" onclick="return page.leaveLead(this);" style="display: none;" data-txt="Отель Bontany Beach" data-id="3" class="btn">Оставить заявку</button>
                    </div>
                  </div>
                </div>

                <div class="slider2 slide">
                  <div class="slide_content">
                    <div class="slide_title">Отель Green Park</div>
                    <div class="slide_btn">
                      <button type="button" data-toggle="modal" data-target="#modal_lead" onclick="return page.leaveLead(this);" data-txt="Отель Green Park" style="display: none;" data-id="3" class="btn">Оставить заявку</button>
                    </div>
                  </div>
                </div>

                <div class="slider3 slide">
                  <div class="slide_content">
                    <div class="slide_title">Отель Dor-Shada</div>
                    <div class="slide_btn">
                      <button type="button" data-toggle="modal" data-target="#modal_lead" onclick="return page.leaveLead(this);" data-txt="Отель Dor-Shada" style="display: none;" data-id="3" class="btn">Оставить заявку</button>
                    </div>
                  </div>
                </div>

                <div class="slider4 slide">
                  <div class="slide_content">
                    <div class="slide_title">Отель Bangkok Marriott Hotel The Surawongse</div>
                    <div class="slide_btn">
                      <button type="button" data-toggle="modal" data-target="#modal_lead" onclick="return page.leaveLead(this);" style="display: none;" data-txt="Отель Bangkok Marriott Hotel The Surawongse" data-id="3" class="btn">Оставить заявку</button>
                    </div>
                  </div>
                </div>

                <div class="slider5 slide">
                  <div class="slide_content">
                    <div class="slide_title">Отель Pathumwan Princess Hotel</div>
                    <div class="slide_btn">
                      <button type="button" data-toggle="modal" data-target="#modal_lead" onclick="return page.leaveLead(this);" style="display: none;" data-txt="Отель Pathumwan Princess Hotel" data-id="3" class="btn">Оставить заявку</button>
                    </div>
                  </div>
                </div>

                <div class="slider6 slide">
                  <div class="slide_content">
                    <div class="slide_title">Отель Phi Phi Island Village Beach Resort</div>
                    <div class="slide_btn">
                      <button type="button" data-toggle="modal" data-target="#modal_lead" onclick="return page.leaveLead(this);" style="display: none;" data-txt="Отель Phi Phi Island Village Beach Resort" data-id="3" class="btn">Оставить заявку</button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec5">
      <div class="sec5_content">
        <div class="container">
          <div class="title">
            Отзывы наших клиентов
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="slider_com">
                
                <div class="slider_com_content">
                  <iframe class="comments" src="https://www.youtube.com/embed/mWKFd6B0ka0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="slider_com_content">
                  <iframe class="comments" src="https://www.youtube.com/embed/liMCbT2m_1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="slider_com_content">
                  <iframe class="comments" src="https://www.youtube.com/embed/YuM64IznXLg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/tailand/js/slick.js"></script>
<script type="text/javascript" src="/js/tailand/js/my.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.slider_t').slick({
        autoplay: false,
        arrows : true,
        dots : false,
      });
      $('.slider_com').slick({
        autoplay: false,
        arrows : true,
        dots : false,
      });
    });
    </script>
<script type="text/javascript">
    $("#phone_number, #get_phone_number").mask("+7 999 999 9999");

    $("#phone_number, #get_phone_number").on("blur", function() {
        var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

        if( last.length == 3 ) {
            var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
            var lastfour = move + last;
            var first = $(this).val().substr( 0, 9 );

            $(this).val( first + '-' + lastfour );
        }
    });
    $("#customRadioInline1").change(function(){
      $(this).prop('checked', true);
      $('#customRadioInline2').prop('checked', false);
    });
    $("#customRadioInline2").change(function(){
        $(this).prop('checked', true);
        $('#customRadioInline1').prop('checked', false);
    });
</script>

<div class="a-290"><?php use app\components\sletat; echo sletat::widget(['country'=>113]);?></div>
<div class="a-96"><p>Хотите познакомиться с настоящей жемчужиной Юго-Восточной Азии? Тогда мы приглашаем вас в Таиланд! Самобытные традиции и невероятно разнообразная культура заставят ваше воображение взбудоражиться. В этой стране соединились воедино несовместимые на первый взгляд вещи – тропическая зелень с древней инфраструктурой и все достоинства западной цивилизации. Такое сочетание придает стране особый колорит, который заставит ваше сердце биться быстрее. Туры в солнечный и добродушный Таиланд становятся в приоритете у тех, кто уже однажды увидел эту страну.</p></div>
<?php
use app\components\FormWidget;
echo FormWidget::widget();
?>


</div>