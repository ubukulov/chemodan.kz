<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => 'ГОРЯЩИЕ ТУРЫ В ТУРЦИЮ | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Туры в Турцию | Путевки в Турцию из Алматы - лучший отдых | Chemodan.kz';
?>

<?php $detect = new Mobile_Detect; ?>

<link rel="stylesheet" href="/css/turkish/css/my.css">
<link rel="stylesheet" href="/css/turkish/css/media.css">
<link rel="stylesheet" type="text/css" href="/css/slick.min.css">
<link rel="stylesheet" type="text/css" href="/css/slick-theme.min.css">
<script type="text/javascript" src="/js/slick.min.js"></script>

<?php if($detect->isMobile()) :?>
<script type="text/javascript">
    $(document).ready(function(){
    	$('.slider_other').slick({
	      autoplay: false,
	      arrows : true,
	      dots : false,
	    }); 
    }); 
</script>
<?php else: ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slider_other').slick({
          autoplay: false,
          arrows : true,
          dots : false,
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 4
    	});
	}); 
</script>
<?php endif; ?>

<script type="text/javascript">
    $(document).ready(function(){
      $('.slider_com').slick({
        autoplay: false,
        arrows : true,
        dots : false,
      });
    });
</script>


<div class="turkish_div">
	<section class="header_tr">
    <div class="header-content text-center">
        <div class="container">
            <div class="header-title">
                <h1>ГОРЯЩИЕ ТУРЫ В <span style="color: yellow;">ТУРЦИЮ</span></h1>
                <h4>УСПЕЙ ПРИОБРЕСТИ ДЛЯ СЕБЯ И СВОИХ БЛИЗКИХ НЕЗАБЫВАЕМОЕ ПУТЕШЕСТВИЕ В ТУРЦИЮ ПО ГОРЯЧИМ ЦЕНАМ СЕГОДНЯ!</h4>
            </div>
        </div>
    </div>
</section>

<section class="why-select">
    <div class="why-content text-center">
        <div class="container">
            <div class="why-title">
            <h4>ПОЧЕМУ БОЛЕЕ 4000 ЛЮДЕЙ КАЖДЫЙ ГОД ВЫБИРАЮТ НАС?</h4>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">
                <img src="/img/turkish/img/i3.png" height="80" alt="Дарим подарки каждому туристу">
                <div class="why-content-title">Дарим подарки каждому туристу</div>
            </div>

            <div class="col-md-3">
                <img src="/img/turkish/img/i4.png" height="80" alt="Работаем в праздники">
                <div class="why-content-title">Работаем в праздники</div>
            </div>

            <div class="col-md-3">
                <img src="/img/turkish/img/i4.png" height="80" alt="На связи 24/7">
                <div class="why-content-title">На связи 24/7</div>
            </div>

            <div class="col-md-3">
                <img src="/img/turkish/img/i5.png" height="80" alt="Тур в рассрочку">
                <div class="why-content-title">Тур в рассрочку</div>
            </div>

            <div class="col-md-3">
                <img src="/img/turkish/img/i7.png" height="80" alt="Официальное оформление">
                <div class="why-content-title">Официальное оформление</div>
            </div>

            <div class="col-md-3">
                <img src="/img/turkish/img/i8.png" height="80" alt="Полное сопровождение клиента">
                <div class="why-content-title">Полное сопровождение клиента</div>
            </div>

            <div class="col-md-3">
                <img src="/img/turkish/img/KZ.png" height="80" alt="Сделано в Казахстане">
                <div class="why-content-title">Сделано в Казахстане</div>
            </div>

            <div class="col-md-3">
                <img src="/img/turkish/img/i2.png" height="80" alt="Бонусная программа">
                <div class="why-content-title">Бонусная программа</div>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>

<section class="where-go">
    <div class="where-content text-center">
        <div class="container">
            <div class="where-title">
            <h4>Куда же отправиться?</h4>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="antalya">

                    </div>

                    <div class="where-block-title">
                        <h5>Анталья</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Разные эпохи сплелись в сводах городских крыш и утоптались в дорогу этого древнего города. Прекрасная удобная инфраструктура, современные развлечения и много моря.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="belek">

                    </div>

                    <div class="where-block-title">
                        <h5>Белек</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Это место считается самым туристическим во всей стране. Город строился специально для туристов.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="alanya">

                    </div>

                    <div class="where-block-title">
                        <h5>Аланья</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Более бюджетный вариант для отдыха, молодежь обычно ездит в этот город.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="bodrum">

                    </div>

                    <div class="where-block-title">
                        <h5>Бодрум</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Маленький город для любителей спокойного отдыха.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="kemer">

                    </div>

                    <div class="where-block-title">
                        <h5>Кемер</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Молодежное место, объединяет в себе исторические места и прекрасные пляжи.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="kurdashasi">

                    </div>

                    <div class="where-block-title">
                        <h5>Курдашасы</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Много достопримечательностей и очень красивая природа.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="marmaris">

                    </div>

                    <div class="where-block-title">
                        <h5>Мармарис</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Уют комфортная температура для отдыха даже летом, есть все необходимые удобства.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="where-block">
                    <div class="where-pic" id="side">

                    </div>

                    <div class="where-block-title">
                        <h5>Сиде</h5>
                    </div>

                    <div class="where-block-text">
                        <p>Этот город подойдет для любителей экскурсий. Очень интересные программы и есть на что посмотреть.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="early_booking">
    <div class="early_booking_content text-center">
        <div class="container">
            <div class="early_booking_title">Раннее бронирование на 2020 г. <br> <span style="font-size: 25px;
    font-family: cursive;
    text-transform: uppercase;">со скидкой до 45%</span></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="new_year">
                        <h4>Очевидные выгоды раннего бронирования туров!</h4>
                        <p>
                            Во всем мире давно по достоинству оценили все преимущества заблаговременной организации предстоящего отдыха. 
А выгодно ли раннее бронирование туров для Казахстанцев?
<br><br>
Конечно же да!
                        </p>
                        <h4>В чем плюсы раннего бронирования?</h4>
                        <p>
                            Прежде всего, это, конечно же, экономия на стоимости путевки. При заблаговременной покупке тур оператор обычно предоставляет скидку от десяти до сорока пяти процентов от полной цены тура. 
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center"><img style="max-width: 100%;" src="/img/turkish/img/new_year.jpg"></div>
                                <div>
                                    <p>
                                        По мере приближения Новогодних туров или следующего летнего сезона, стоимость путевок в популярные отели неумолимо ползет вверх, расет и стоимость билетов на самолет. А вы свою цену уже зафиксировали, и теперь вам, как счастливому обладателю купленной уже сегодня путевки, остается лишь подсчитывать сэкономленные средства и ловить на себе завистливые взгляды не столь дальновидных друзей и коллег…
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="text-center"><img style="max-width: 100%;" src="/img/turkish/img/turkey-54.jpg"></div>
                                <div>
                                    <p>
                                        Следующий плюс раннего бронирования заключается в возможности выбора отеля, который подходит вам по всем параметрам. Когда вы планируете свой отдых? Вы собираетесь встретить экзотический  Новый Год в какой-нибудь в жаркой стране или просто, запланировали зимние каникулы, а может в ваших планах следующее лето 2020-го?  В любом случае, при бронирования отеля за несколько месяцев, а то и за пол года вперед, почти любой отель еще доступен для резерва. При покупке же путевок ближе к дате выезда, в большинстве случаев, к сожалению, приходится «брать, что есть»!
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="early_content" style="margin-top: 40px; display: none;">
                        <div class="form-group">
                            <input type="text" id="early_name" class="form-control" placeholder="Ваше имя">
                        </div>

                        <div class="form-group">
                            <input type="text" id="early_phone" class="form-control" placeholder="Ваш телефон">
                        </div>

                        <div class="form-group">
                            <button style="width: 100%;
    padding: 10px 0px;" type="button" id="early_btn" data-id="2020" onclick="return page.GetConsultationByEarlyBooking(this);" class="btn btn-danger">Отправить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="group_tour">
    <div class="group-content text-center">
      <div class="container">
        <div class="group-title">
          Специальное предложение!!!
        </div>

        <div class="group-title-sub">
          ГРУППОВЫЕ ТУРЫ
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="group-im">
              <div class="group-bg">
                <div class="group-txt1">
                  ИЗ АЛМАТЫ
                </div>

                <div class="group-txt2">
                  ПРОГРАММА 1:
                </div>

                <div class="group-txt3">
                  ВСЯ КРАСОТА ТУРЦИИ <br> <span>(АНТАЛИЯ + ПАМУККАЛЕ + КАППАДОКИЯ + СТАМБУЛ)</span>
                </div>

                <div class="group-price">
                  479 USD на человека
                </div>

                <div class="group-btn">
                  <a href="https://turkish.kz/group-tour1.html" target="_blank" class="btn btn-primary btn_more">Подробнее</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="group-im">
              <div class="group-bg">
                <div class="group-txt1">
                  ИЗ АЛМАТЫ
                </div>

                <div class="group-txt2">
                  ПРОГРАММА 2:
                </div>

                <div class="group-txt3">
                  ВСЯ КРАСОТА ТУРЦИИ <br> <span>(АНТАЛИЯ + ПАМУККАЛЕ + ЭФЕС + СТАМБУЛ)</span>
                </div>

                <div class="group-price">
                  479 USD на человека
                </div>

                <div class="group-btn">
                  <a href="https://turkish.kz/group-tour2.html" target="_blank" class="btn btn-primary btn_more">Подробнее</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="group-im">
              <div class="group-bg">
                <div class="group-txt1">
                  ИЗ НУР-СУЛТАН
                </div>
                <div class="group-txt2">
                  ПРОГРАММА 1:
                </div>
                <div class="group-txt3">
                  ВСЯ КРАСОТА ТУРЦИИ <br> <span>(АНТАЛИЯ + ПАМУККАЛЕ + КАППАДОКИЯ + СТАМБУЛ)</span>
                </div>

                <div class="group-price">
                  479 USD на человека
                </div>

                <div class="group-btn">
                  <a href="https://turkish.kz/group-tour3.html" target="_blank" class="btn btn-primary btn_more">Подробнее</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="group-im">
              <div class="group-bg">
                <div class="group-txt1">
                  ИЗ НУР-СУЛТАН
                </div>
                <div class="group-txt2">
                  ПРОГРАММА 2:
                </div>
                <div class="group-txt3">
                  ВСЯ КРАСОТА ТУРЦИИ <br> <span>(АНТАЛИЯ + ПАМУККАЛЕ + ЭФЕС + СТАМБУЛ)</span>
                </div>

                <div class="group-price">
                  479 USD на человека
                </div>

                <div class="group-btn">
                  <a href="https://turkish.kz/group-tour4.html" target="_blank" class="btn btn-primary btn_more">Подробнее</a>
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
      <div class="title text-center review-title">
        <h4>Отзывы наших клиентов</h4>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="slider_com">

            <div class="slider_com_content">
                <iframe class="comments" src="https://www.youtube.com/embed/0ymtfIT2SHo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="slider_com_content">
                <iframe class="comments" src="https://www.youtube.com/embed/RaEOoZ3vh3I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="slider_com_content">
                <iframe class="comments" src="https://www.youtube.com/embed/AAcDMWi8Yw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="slider_com_content">
              <iframe class="comments" src="https://www.youtube.com/embed/mWKFd6B0ka0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

<section class="sec7" style="padding: 40px 0px;">
        <div class="sec7_content">
            <div class="main-title text-center">
                <h4>Другие направления</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_other">
                        <div class="other">
                            <div class="other_im im1">
                                <div class="other_div">
                                    <div class="other_title">Индия</div>
                                    <div class="other_sub_title">ГОА</div>
                                <div class="other_btn">
                                    <a href="https://goa-india.kz/?utm_source=google_Ref_slider_Chemodan_&utm_medium=сpc" class="btn btn-danger" target="_blank">Перейти</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="other">
                            <div class="other_im im2">
                                <div class="other_div">
                                    <div class="other_title">Китай</div>
                                    <div class="other_sub_title">о.Хайнань</div>
                                <div class="other_btn">
                                    <a href="https://hainan.kz/?utm_source=google_Ref_slider_Chemodan_&utm_medium=сpc" class="btn btn-danger" target="_blank">Перейти</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="other">
                            <div class="other_im im3">
                                <div class="other_div">
                                    <div class="other_title">Тайланд</div>
                                    <div class="other_sub_title"></div>
                                <div class="other_btn">
                                    <a href="https://tailand.kz/?utm_source=google_Ref_slider_Chemodan_&utm_medium=сpc" class="btn btn-danger" target="_blank">Перейти</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="other">
                            <div class="other_im im4">
                                <div class="other_div">
                                    <div class="other_title">Египет</div>
                                    <div class="other_sub_title"></div>
                                <div class="other_btn">
                                    <a href="https://egipt.kz/?utm_source=google_Ref_slider_Chemodan_&utm_medium=сpc" class="btn btn-danger" target="_blank">Перейти</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="other">
                            <div class="other_im im5">
                                <div class="other_div">
                                    <div class="other_title">ОАЭ</div>
                                    <div class="other_sub_title"></div>
                                <div class="other_btn">
                                    <a href="https://emirat.kz/?utm_source=google_Ref_slider_Chemodan_&utm_medium=сpc" class="btn btn-danger" target="_blank">Перейти</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="main-text">
    <div class="main-content">
        <div class="container">
            <div class="main-title text-center">
                <h4>ВАШ ОТДЫХ НАЧИНАЕТСЯ С ВИЗИТА К НАМ</h4>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p style="font-family: Verdana;"><img src="/img/turkish/img/im19.jpg" width="480" align="left" style="margin: 0px 20px 20px 0px; max-width: 100%;">Наша компания открылась в 2012 году.<br><br>
                        За годы работы, Чемодан завоевал сердца потребителей, что становится очевидным, когда понимаешь, что более двадцати тысяч человек отдали свои предпочтения и выбрали отдых с Чемоданом.<br><br>
                        
                        Наш девиз: Будь счастлив с Чемоданом!<br><br>
                        Миссия Компании: Мы работаем для счастья других людей и каждый сотрудник работает так, чтобы максимально приблизиться к этому. Каждый менеджер знает и помнит: Мы не продаем туры и не оказываем услуги, мы делаем все, чтобы с нами человек стал счастливым.
                        Наш коллектив объединён целью помогать другим людям, нести в общество добро, желанием развиваться и заниматься самообразованием как в профессиональной, так и в духовной области.<br><br>
                        Наша компания на постоянной основе оказывает благотворительную помощь нуждающимся самостоятельно и посредством общественных организаций, занимающимся поддержкой малообеспеченных слоёв населения нашей страны. Планируя свой отдых с Чемоданом, Вы участвуете в помощи этим людям.<br><br>
                        Весь наш коллектив, всем сердцем, желает каждому нашему клиенту прекрасного, счастливого отдыха. Именно поэтому, мы решаем все вопросы, связанные с Вашими поездками круглосуточно и без выходных. Основной принцип нашей деятельности – полное сопровождение клиента специалистами нашей компании на протяжении всего путешествия, а также и после него.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>




<div class="a-86a a-86b"><h1 class="a-94">ТУРЦИЯ</h1>
<div class="a-290"><?php use app\components\sletat; echo sletat::widget([]);?></div>
<div class="a-96"><p>Если вы слышите о Турции и презрительно морщите нос, мы поможем вам избавиться от стереотипов! Конечно, это наиболее популярное направление для отдыха. Забудьте о том, что здесь можно только лежать тюленем на пляже! Нет, нет и еще раз нет. Мы вам это докажем!</p></div>
<?php
use app\components\FormWidget;
echo FormWidget::widget();
?>
<div class="a-96a"><span>КАК И ГДЕ ТУТ ОТДЫХАТЬ?</span></div>
<div class="a-96"><p>С «Чемодан» вы сможете открыть для себя заново эту удивительную и великую страну. Турция многогранна как стакан и обещает подарить множество воспоминаний уже при первом посещении. Наследство из различных эпох и цивилизаций придают особый антураж и атмосферность этой стране.</p></div>
<div class="a-96"><p>Скучать здесь точно никому не придется. Если вы молоды и полны сил, вас ждут ночные развлечения, которые здесь в изобилии. Вы уставшие от домашних забот родители, которые мечтают кому-то надежному хотя бы на часок оставить детей? Милости просим! Для влюбленных здесь также найдутся романтические развлечения и уединенные уголки. Путешественники с жаждой к новым открытиям смогут отправиться на изучении культурного наследия.</p></div>
<div class="a-96a"><span>С НАМИ ВЕСЕЛЕЕ</span></div>
<div class="a-96"><p>Наша компания готова предложить вам и различные зимние туры. Вы сможете на пару дней сбежать из суровой зимы в мягкое лето. Мы разработали несколько вариантов туров на все вкусы. Турция так богата развлечениями, что описать их все просто невозможно. Поэтому за более детальной информацией обращайтесь к нашему представителю.</p></div>

<div class="a-96a"><span>Отдых в Турции из Алматы - недорогие туры в Турцию</span></div>
<div class="a-96"><p>Туры в Турцию из Алматы это прекрасный шанс провести свое свадебное путешествие и медовый месяц в раю. Интересные места, древний город, новая кухня и теплые ночи только для вас двоих! Такой отпуск можно повторить, особенно через несколько лет приехать в тот же город. Вам будет казаться, что вы тут уже все знаете. Прекрасное время для того, чтобы быть романтичными и влюбленными, хотя, когда для этого не время? Стоимость путевки в Турцию будет для вас приятным дополнением ко всем приключениям, потому что тут действительно дешево. В зависимости от ваших возможностей варианты отдыха могут быть самые разные. Туры в Турцию из Алматы предусматривают возможно разнопланового времяпровождения. Мы сможем подобрать для вас дешевые билеты и отель, если вы ограничены по средствам. Или создать полностью уникальную экскурсионную программу, расписанную на две недели. Недорогой отдых в Турции предоставит вам возможность вырваться из обычного круговорота жизни, испытать новые эмоции, окунуться в другой мир.</p></div>

<div class="a-96a"><span>Преимущества отдыха в Турции из Алматы</span></div>
<div class="a-96"><p>Когда стоит вопрос о том, чтобы отправиться в отпуск, конечно хочется выбрать самое интересное место. Даже если вы ограничены по средствам, мы подберем самый бюджетный вариант, и даже не один! Отдых в Турции из Алматы доступен для каждого романтика и экстремала. Непосредственно цены на туры в Турцию зависят от насыщенности программы. Так почему же стоит выбрать именно отдых в Турции из Алматы?</p></div>

<div class="a-96">
<div class="a-98">
	<div class="a-239"><div class="a-138"></div><p>Отдых в Турции - возможности для всех. Не зависимо от того какой тип отдыха вы предпочитаете для вас найдется развлечение. В Турции можно недорого покушать, посетить исторические места, погулять по мегаполису, заняться шопингом, отдохнуть на пляже, потанцевать в клубе. Для каждого клиента мы индивидуально подбираем программу. Заказать путевки в Турцию недорого – вот главное преимущество.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Комфортный и мягкий климат. Туры в Турцию из Алматы осуществляются на протяжении всего календарного года. Для тех, кто хочет подышать зимним воздухом и покататься на лыжах – одни места. Для любителей загорать – другие. К каждому Турция находит свой подход. Поэтому отдых в Турции из Алматы пользуется такой популярностью.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Каталог отелей. Так как эта страна в принципе считается туристической, вы понимаете, что количество отелей тут как грибов после дождя. Именно поэтому недорогой отдых в Турции – это не миф. Вы сможете выбрать любой вариант из предложенных.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Стоимость путевки в Турцию. Как и отдых в этой стране – очень низкие. Тут действительно дешево и интересно.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Система «Все включено». Цены на туры в Турцию включают в себя все – перелет, проживание и питание. Часто так же входят в программу экскурсии по ближайшим городам, ведь просто валяться на пляже, попивая смузи достаточно скучно. Поэтому вы сможете ознакомиться с культурой с гидом.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Быстрый перелет без пересадок. Например, до Антальи вы будете лететь 5 часов. На оформление документов уйдет примерно столько же времени! Заказывая путевки в Турцию недорого у нас, вы сможете улететь в отпуск незамедлительно!</p></div>
	<div class="a-239"><div class="a-138"></div><p>Лучшая страна для семейного отдыха. С ребенком недорогой отдых в Турции становится реальным. Покажите ему новый мир и сами насладитесь отдыхом. Кстати, стоимость путевки в Турцию с ребенком вас приятно удивит.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Дешевый шопинг. Во время отдыха в Турции вы можете насладиться прогулкой по торговым центрам, купить что-то новое из одежды или аксессуаров, или посетить настоящий турецкий базар в поисках традиционных сувениров.</p></div>
</div>
</div>

<div class="a-96"><p>Это только видимые и самые явные преимущества поездки за границу, а непосредственно в Турцию. Больше вы получите, когда на своем опыте прочувствуете всю красоту этой страны. Заказать путевки в Турцию недорого можно по телефону, который указан на сайте.</p></div>

<div class="a-96a"><span>Разнообразие городов - туры в Турцию из Алматы</span></div>

<div class="a-96"><p>Цены на туры в Турцию подбираем для каждого отдельно. Мы готовы отправить вас отдохнуть и насладиться отпуском в такие направления:</p></div>

<div class="a-96">
<div class="a-98">
	<div class="a-239"><div class="a-138"></div><p>Анталья. Разные эпохи сплелись в сводах городских крыш и утоптались в дорогу этого древнего города. Прекрасная удобная инфраструктура, современные развлечения и много моря.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Аланья. Более бюджетный вариант для отдыха, молодежь обычно ездит в этот город.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Белек. Это место считается самым туристическим во всей стране. Город строился специально для туристов.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Бодрум. Маленький город для любителей спокойного отдыха.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Кемер. Молодежное место, объединяет в себе исторические места и прекрасные пляжи.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Курдашасы. Много достопримечательностей и очень красивая природа.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Мармарис. Тут комфортная температура для отдыха даже летом, есть все необходимые удобства.</p></div>
	<div class="a-239"><div class="a-138"></div><p>Сиде. Этот город подойдет для любителей экскурсий. Очень интересные программы и есть на что посмотреть.</p></div>
</div>
</div>

<div class="a-96a"><span>Отдых в Турции - отличный выбор!</span></div>

<div class="a-96"><p>Каждый из этих городов обладает своей изюминкой, куда именно ехать выбирать вам. Туры в Турцию из Алматы – это возможность окунуться в многовековую историю. Чего только стоит турецкая кухня, которая вместила в себя всю память разнообразных кочевых племен, которые населяли эту территорию много лет назад. Тут смешивается все – овощи, мясо, хлеб, а получается невероятно вкусный салют. Туры в Турцию из Алматы откроют заново ваши вкусовые рецепторы. Цены на туры в Турцию могут быть диаметрально противоположными, все зависит от ваших запросов и пожеланий.</p></div>

<div class="a-96"><p>Так же предлагаем обратить внимание на путевки в <a href="/countries/bulgaria">Болгарию</a> и туры в <a href="/countries/thailand">Таиланд</a>.</p></div>

</div>