<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'Description', 'content' => 'Хотите запустить супер прибыльный бизнес по туризму под ключ и всего за пару месяцев
	выйти на 100%-ный доход?! | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Открыть агенство - турфирма Chemodan в Казахстане';
?>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="/css/my.css">
<style type="text/css">
.fa-inverse {
	color: black !important;
}
.fa-stack {
	color: cadetblue;
	float: left;
}
.wdiv li {
	list-style-type: square;
	color: #FFCF1E;
	font-size: 18px;
}
.wdiv span {
	color: black;
	font-size: 16px;
    font-weight: 600;
}
.wdiv-title {
	color: #424242;
	font-weight: bold;
	font-size: 16px;
    margin-bottom: 10px;
}
.sec-circle {
	font-size: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -20px 0 0 -24px;
    width: 48px;
    height: 48px;
    display: block;
    fill: #fff;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}
.wdiv-im {
	width: 100px;
    height: 100px;
    border: 2px solid #FFCF1E;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    position: relative;
    margin-bottom: .9375rem;
    margin: 0px auto 10px auto;
}
.fran-p {
	color: white;
	font-size: 16px;
}
.info-txt1 h1 {
	font-family: Bravo;
	font-size: 30px;
	color: #FFE11B;
	text-transform: uppercase;
	word-spacing: 2px;
	letter-spacing: 4px;
	font-weight: bold;
	margin-top: 30px;
}
.info-txt2 h2 {
	font-size: 20px;
}
.info-content {
    padding: 3% 2%;
    background: rgba(0,0,0,0.8);
}
.at-txt1 {
	font-size: 30px;
    font-weight: bold;
    margin-bottom: 5%;
    line-height: 30px;
    margin-top: 20px;
}
.at-txt2 {
	color: #cc0000;
    font-weight: bold;
    font-size: 25px; 
    margin-bottom: 5%;
    line-height: 25px;
}
.fr {
	margin-top: 125px;
}
.sec3_d {
	width: 70%;
	max-width: 100%;
	margin: 10px auto;
}
@media(min-width: 320px) and (max-width: 767px) {
	.fr {
		margin-top: 60px;
	}
}
</style>
<div class="fr">

	<section class="info">
		<div class="info-content text-center">
			<div class="info-txt1">
				<h1>Хотите запустить супер прибыльный бизнес по туризму <br> под ключ и всего за пару месяцев <br>
	выйти на 100%-ный доход?! </h1>
			</div>

			<div class="info-txt2">
				<h2>Есть решение! <br>
	Мы, шаг за шагом, буквально за руки приведем вас, к <br> вашему успеху!</h2>
			</div>
		</div>
	</section>

	<section class="attension">
		<div class="at-content text-center" style="padding: 3%;">
			<div class="at-txt1">
				<span style="text-transform: uppercase; color: #cc0000;">Внимание!</span> <br> 
				<span style="color: #853239;">
					Только в этот месяц, стоимость нашей уникальной франшизы, всего 1.590.000 тенге!!!
				</span>
			</div>

			<div class="at-txt2">
				Оставляйте заявку на получение до 40%-ной скидки в следующей форме:
			</div>

			<div class="at-lead">
				<?php
use app\components\FormFranchiseWidget;
echo FormFranchiseWidget::widget(['title'=>'ПОЛУЧИТЬ СКИДКУ','cities'=>'ГОРОД ОТКРЫТИЯ', 'id' => 'fr_chem_btn1']);
?>
			</div>
		</div>
	</section>

	<section class="sec-3" style="background: url(../img/sec-3-bg.jpg) center center no-repeat; background-size: cover;">
		<div class="sec-3-content text-center" style="padding: 3%; color: white; background: rgba(0,0,0,0.5);">
			<div class="sec-3-title" style="font-size: 30px;
    color: white;
    font-weight: bold; margin-bottom: 30px; text-transform: uppercase;">
				Что Вы получаете?
			</div>

			<div class="sec-3-info">
				<div class="row">
					<div class="col-md-6">
						<div class="sec3_d">
							<div class="text-center">
								<img width="50" src="/img/kubok.png">
							</div>

							<div class="sec-3-txt">
						    	Полностью отлаженную схему бизнес-процессов, эффективные, проверенные схемы привлечения клиентов, которая доказала свою эффективность на практике, все продумано и отработано до мелочей!
						    </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="sec3_d">
							<div class="text-center">
								<img width="50" src="/img/kubok.png">
							</div>

							<div class="sec-3-txt">
						    	Раскрученный и прибыльный бренд! Вы только начали, но вас уже все знают, разве это уже не 90% успеха?
						    </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="sec3_d">
							<div class="text-center">
								<img width="50" src="/img/kubok.png">
							</div>

							<div class="sec-3-txt">
						    	Бизнес с небольшим стартовым капиталом, отличный вариант для начинающих!
						    </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="sec3_d">
							<div class="text-center">
								<img width="50" src="/img/kubok.png">
							</div>

							<div class="sec-3-txt">
						    	Собственный бизнес. Ваш бизнес целиком принадлежит вам. Вы капитан своего корабля!
						    </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="sec3_d">
							<div class="text-center">
								<img width="50" src="/img/kubok.png">
							</div>

							<div class="sec-3-txt">
						    	Благодаря нашей поддержке Вы избежите большинства ошибок на начальном этапе ведения бизнеса!
						    </div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="sec3_d">
							<div class="text-center">
								<img width="50" src="/img/kubok.png">
							</div>

							<div class="sec-3-txt">
						    	Уникальные знания для успешного ведения туристического бизнеса. Вы получите необходимые консультации по ведению бизнеса, оперативные ответы на все вопросы! Мы научим вас подбирать и обучать персонал, чтобы у вас была самая эффективная команда!
						    </div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="sec3_d">
							<div class="text-center">
								<img width="50" src="/img/kubok.png">
							</div>

							<div class="sec-3-txt">
						    	Эффективное туристическое агентство в кратчайшие сроки!
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="why-select" style="padding: 3%;">
		<div class="why-select-content">
			<div class="container">
				<div class="why-select-title  text-center" style="margin-bottom: 30px;">
					<h2 style="color: #3E3B3A;font-weight: 600; text-transform: uppercase;">ПОЧЕМУ НУЖНО ВЫБРАТЬ НАШУ ФРАНШИЗУ?</h2>
				</div>

				<div class="why-select-info">
					<div class="row">
						<div class="col-sm-3">
							<div class="wdiv-im text-center">
								<i class="fas fa-rocket sec-circle"></i>
							</div>
							<div class="wdiv-title text-center">ЛЁГКИЙ СТАРТ</div>
							<div class="wdiv">
								<ul>
									<li><span>Быстрый запуск <br> работы 1-2 месяца</span></li>
									<li><span>Офис от 18 м2</span></li>
									<li><span>Минимум 2 сотрудника и директор или продающий управляющий директор</span></li>
								</ul>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="wdiv-im text-center">
								<i class="fas fa-business-time sec-circle"></i>
							</div>
							<div class="wdiv-title text-center">ИНТЕРЕСНЫЙ БИЗНЕС</div>
							<div class="wdiv">
								<ul>
									<li><span>Возможность много путешествовать</span></li>
									<li><span>Изучение новых стран</span></li>
								</ul>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="wdiv-im text-center">
								<i class="fas fa-balance-scale sec-circle"></i>
							</div>
							<div class="wdiv-title text-center">МИНИМАЛЬНЫЕ РИСКИ</div>
							<div class="wdiv">
								<ul>
									<li><span>Главные вложения в оформление офиса, мебель и оргтехнику</span></li>
									<li><span>Изучение новых стран</span></li>
								</ul>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="wdiv-im text-center">
								<i class="fas fa-wallet sec-circle"></i>
							</div>
							<div class="wdiv-title text-center">МИНИМАЛЬНЫЕ ВЛОЖЕНИЕ</div>
							<div class="wdiv">
								<ul>
									<li><span>Отличный вариант для начинающих бизнесменов</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="at-lead">
		<?php
			use app\components\LeadWidget;
			echo LeadWidget::widget(['title'=>'ОСТАЛИСЬ ВОПРОСЫ? <br><span style="font-size: 14px;">Задайте их нашему менеджеру</span>','cities'=>'ГОРОД ОТКРЫТИЯ']);
		?>
	</div>

	<section class="who" style="background: url(../img/who-bg.jpg) center center no-repeat; background-size: cover;">
		<div class="who-content" style="padding: 3%; background: rgba(0,0,0,0.8);">
			<div class="container">
				<div class="who-title text-center" style="font-size: 30px;
    color: orange;
    font-weight: bold;
    margin-bottom: 30px; text-transform: uppercase;">Кто мы!</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="who-p" style="color: #fff; font-weight: 600; font-size: 16px; width: 80%; margin: 0px auto; text-align: center;">
							<p>
							Мы успешно работаем на рынке туризма с 2012 года. За годы работы, Сеть Туристических Агентств Чемодан завоевал сердца потребителей, 81% наших туристов становятся нашими постоянными клиентами. Ежегодно тысячи туристов путешествуют  с нами! <br>
							<p>
За это Время сеть выросла с 1-го офиса до 6 офисов в 5 городах Казахстана. </p>

<p>Мы всегда помним: «Мы не продаем туры, мы продаем счастье!</p>
<p>Наш девиз:  «Будь счастлив с Чемоданом!» </p>
<p>Разве дарить людям счастье, не самый радостный бизнес?</p>

						</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="display: none;">
		<div class="" style="padding: 3%;">
			<div class="container">
				<div class="text-center">
					<h2 style="color: black;
    font-size: 24px;
    margin-bottom: 30px;
    font-weight: bold;">Приобретая франшизу, предприниматель получает уже проверенную и рабочую схему ведения бизнеса, которая доказала свою эффективность на практике.
					</h2>
				</div>

				<div class="row">
					<div class="col-sm-4">
						<div class="a-123 a-122a"></div>
			<div class="a-124" style="margin: 0px;"><p style="text-align: justify; color: #000; font-weight: 400;">Мы успешно работаем на рынке туризма с 2012 года. За годы работы, Чемодан завоевал схемурдца потребителей, 81% наших туристов становятся нашими постоянными клиентами.</p></div>
					</div>

					<div class="col-sm-4">
						<div class="a-123 a-122b"></div>
			<div class="a-124" style="margin: 0px;"><p style="text-align: justify; color: #000; font-weight: 400;">Миссия Компании: Мы работаем для счастья других людей и каждый сотрудник работает так, чтобы максимально приблизиться к этому. Каждый менеджер знает и помнит: Мы не продаем туры и не оказываем услуги, мы делаем все, чтобы с нами человек стал счастливым.</p></div>
					</div>	

					<div class="col-sm-4">
						<div class="a-123 a-122c"></div>
			<div class="a-124" style="margin: 0px;"><p style="text-align: justify; color: #000; font-weight: 400;">Ежегодно тысячи туристов путешествуют с нами.</p></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="background: url(../img/upper.jpg) center center no-repeat; background-size: cover;">
		<div style="padding: 3%; background: rgba(0,0,0,0.6); margin-bottom: 30px;">
			<div class="container">
				<div class="text-center" style="font-size: 25px; line-height: 25px;
    color: tomato;
    margin-bottom: 30px;
    font-weight: bold; text-transform: uppercase;">
					Кто, особенно, оценит нашу франшиза?
				</div>

				<div class="fran-p" style="color: #fff; font-weight: 600; font-size: 16px; width: 80%; margin: 0px auto; text-align: center;">
					<p>
						Вы желаете заняться бизнесом, но опыта не хватает. Вас привлекают путешествия и Вы хотите заняться своим делом, но Вам нужна поддержка. Именно для этих целей и существует франчайзинг.
					</p>

					<p>
						Франчайзинг – это модель успешного бизнеса, которая передается Вам для использования. Вы получаете набор конкретных инструментов для быстрого старта. Вы успешно реализовываетесь, шаг за шагом, в своем деле.
					</p>

					<p>
						В любом деле, самым сложным этапом является, стартовый! и этот отрезок мы пройдем с вами!
					</p>	
				</div>
			</div>
		</div>
	</section>
	
	
<div class="a-129">
	<div class="a-130"></div>
	<div class="a-132">ДМИТРИЙ ТЕЛЮК</div>
	<div class="a-132a">Основатель компании</div>
	<div class="a-131">ПОЯВИЛИСЬ ВОПРОСЫ? МЫ С РАДОСТЬЮ НА НИХ ОТВЕТИМ:</div>
	<div class="a-133">+7701 225 20 55<br>dmitry@chemodan.kz</div>
	<div class="a-134"><button class="a-135" onclick="return page.franchise();">Оставить запрос</button></div>
</div>

<div class="a-39">
	<div class="a-40"><span>Наши офисы</span></div>
	<div class="a-428">
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/im9.bmp);"></div>
			<div class="a-431">АЛМАТЫ, ОФИС 1</div>
			<div class="a-432">г. Алматы, ул. Желтоксан 159 <a href="tel:+7 (727) 346 82 20">+7 (727) 346 82 20</a></div>
		</div>
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/im10.jpg);"></div>
			<div class="a-431">АЛМАТЫ, ОФИС 2</div>
			<div class="a-432">г. Алматы, ул. Жандосова 20 <a href="tel:+7 (727) 346 82 20">+7 (727) 346 82 20</a></div>
		</div>
		<div class="a-429" style="display: none">
			<div class="a-430" style="background-image: url(/web/img/city-3.jpg)"></div>
			<div class="a-431">ТАРАЗ</div>
			<div class="a-432">9 мкрн дом 67 <a href="tel:+7 (771) 158 11 33">+7 (771) 158 11 33</a></div>
		</div>
		<div class="a-429" style="display: none;">
			<div class="a-430" style="background-image: url(/web/img/city-1.jpg)"></div>
			<div class="a-431">ТАЛДЫКОРГАН</div>
			<div class="a-432">Ул. Шевченко 130, оф. 16 <a href="tel:+7 (778) 106 89 90">+7 (778) 106 89 90</a>
			<br><br>
			<p class="fr_dp5" style="display: none;"><a href="/web/files/Справка_о_госрегистрации_талдыкорган.pdf" target="_blank">Свидетельство о регистрации СТА Чемодан</a></p>

			<p class="fr_dp5" style="display: none;"><a href="/web/files/KZ74UWG00001996_ru.pdf" target="_blank">Гос реестр туризма СТА Чемодан</a></p>

			<button type="button" onclick="javascript:showDocs(5);" id="fr_doc5" class="btn btn-success">Документы компании</button>	
			</div>
		</div>
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/city-2.jpg)"></div>
			<div class="a-431">Актобе</div>
			<div class="a-432">ул. Есет Батыра 116г <a href="tel:+7 (771) 310 77 47">+7 (771) 310 77 47</a>, <a href="tel:+7 (771) 310 74 70">+7 (771) 310 74 70</a>, <a href="tel:+7 (771) 310 74 64">+7 (771) 310 74 64</a>
			<br><br>
			<p class="fr_dp6" style="display: none;"><a href="/web/files/shepDownloadPdf_актобе.pdf" target="_blank">Свидетельство о регистрации СТА Чемодан</a></p>

			<p class="fr_dp6" style="display: none;"><a href="/web/files/fe974bbe-ed8d-40b3-91a5-54570bff6f6a_актобе.jpg" target="_blank">Гос реестр туризма СТА Чемодан</a></p>

			<button type="button" onclick="javascript:showDocs(6);" id="fr_doc6" class="btn btn-success">Документы компании</button>	
			</div>
		</div>
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/city-4.jpg)"></div>
			<div class="a-431">Актау</div>
			<div class="a-432">14 мкр, Здание 58/1 БЦ Форум, Вход с торца здания <br> <a href="tel:+7 702 191 7055">+7 702 191 7055</a></div>
		</div>
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/city-6.jpeg)"></div>
			<div class="a-431">Нур-Султан №7</div>
			<div class="a-432">Ул.23-15, дом 11/3, ЖК Millennium Park, офис Чемодан &nbsp;&nbsp;<br><a href="tel:+7 (747) 094 71 75">+7 (747) 094 71 75</a>
			<br><br>
			<p class="fr_dp7" style="display: none;"><a href="/web/files/P34.01-ru-10100330334393_7.pdf" target="_blank">Свидетельство о регистрации СТА Чемодан №7</a></p>

			<p class="fr_dp7" style="display: none;"><a href="/web/files/талон_уведомление_7.pdf" target="_blank">Гос реестр туризма СТА Чемодан №7</a></p>

			<button type="button" onclick="javascript:showDocs(7);" id="fr_doc7" class="btn btn-success">Документы компании</button>	
			</div>
		</div>
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/city-7.jpeg)"></div>
			<div class="a-431">Нур-Султан №8</div>
			<div class="a-432">БЦ Болашак, Сарыарка 3/1, офис 301/1 <a href="tel:+7 (747) 094 45 02">+7 (747) 094 45 02</a>, <a href="tel:+7 (747) 094 45 03">+7 (747) 094 45 03</a>, <a href="tel:+7 (747) 094 45 04">+7 (747) 094 45 04</a>
			<br><br>
			<p class="fr_dp8" style="display: none;"><a href="/web/files/f00dcfc0-68d9-4cfc-8914-ac8250ed7111.jpg" target="_blank">Свидетельство о регистрации СТА Чемодан №8</a></p>

			<p class="fr_dp8" style="display: none;"><a href="/web/files/KZ85UWG00001410_ru.pdf" target="_blank">Гос реестр туризма СТА Чемодан №8</a></p>

			<button type="button" onclick="javascript:showDocs(8);" id="fr_doc8" class="btn btn-success">Документы компании</button>	
			</div>
		</div>
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/chem-11.jpeg)"></div>
			<div class="a-431">Шымкент №11</div>
			<div class="a-432">г. Шымкент, проспект Тауке хана 60 <a href="tel:+77018000951">+7 (701) 800 09 51</a>, <a href="tel:+7 747 288 9498">+7 (747) 288 94 98</a></div>
		</div>
		<div class="a-429">
			<div class="a-430" style="background-image: url(/web/img/office-12.jpeg)"></div>
			<div class="a-431">Атырау №12</div>
			<div class="a-432">г. Атырау, ул. Абая Кунанбаева, дом 19Б, офис №3 <a href="tel:+77078778855">+7 (707) 877 88 55</a>, <a href="tel:+77020666617">+7 (702) 066 66 17</a>, <a href="tel:+77780666617">+7 (778) 066 66 17</a></div>
		</div>
		<script type="text/javascript">
			function showDocs(id){
				$('.fr_dp'+id).toggle();
				$('#fr_doc'+id).text($('#fr_doc'+id).text() == 'Документы компании' ? 'Скрыть документы' : 'Документы компании');
			}
		</script>
	</div>
</div>

<div class="a-108">Наши награды</div>
	<div class="a-232" style="grid-template-columns: 1fr 1fr 1fr 1fr;margin: 50px 0 50px 0;">
		<div class="a-233" style="background-image: url(/web/img/awards/tez_tour2019.jpeg);"></div>
		<div class="a-233" style="background-image: url(/web/img/awards/2.jpeg);"></div>
		<div class="a-233" style="background-image: url(/web/img/awards/3.jpeg);"></div>
		<div class="a-233" style="background-image: url(/web/img/awards/4.jpeg);"></div>
	</div>

	<div class="a-232" style="grid-template-columns: 1fr 1fr 1fr 1fr;margin: 50px 0 50px 0;">
		<div class="a-233" style="background-image: url(/web/img/awards/5.jpeg);"></div>
		<div class="a-233" style="background-image: url(/web/img/awards/6.jpeg);"></div>
		<div class="a-233" style="background-image: url(/web/img/awards/7.jpeg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-1.jpg);"></div>
	</div>

	<div class="a-232" style="grid-template-columns: 1fr 1fr 1fr 1fr;margin: 50px 0 50px 0;">
		<div class="a-233" style="background-image: url(/web/img/sert-2.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-3.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-4.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-5.jpg);"></div>
	</div>
	<div class="a-232" style="grid-template-columns: 1fr 1fr 1fr 1fr;margin: 50px 0 50px 0;">
		<div class="a-233" style="background-image: url(/web/img/sert-6.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-7.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-8.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-9.jpg);"></div>
	</div>
	<div class="a-232" style="grid-template-columns: 1fr 1fr 1fr 1fr;margin: 50px 0 50px 0;">
		<div class="a-233" style="background-image: url(/web/img/sert-10.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-11.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-12.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-13.jpg);"></div>
	</div>
	<div class="a-232" style="grid-template-columns: 1fr 1fr 1fr 1fr;margin: 50px 0 50px 0;">
		<div class="a-233" style="background-image: url(/web/img/sert-14.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-15.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/sert-16.jpg);"></div>
		<div class="a-233" style="background-image: url(/web/img/awards/1.jpeg);"></div>
	</div>
</div>

<div class="at-lead">
	<?php
		use app\components\LeadWidget2;
		echo LeadWidget2::widget(['title'=>'Получить консультации','cities'=>'ГОРОД ОТКРЫТИЯ']);
	?>
</div>