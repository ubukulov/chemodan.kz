<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Оплатить онлайн | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Paybox - оплатить тур онлайн';
?>
<div class="a-86a">
	<h1 class="a-97">Оплатить онлайн</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="/payment/paybox">
					<input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken?>" />
					<div class="form-group">
						<label>Ваше имя</label>	
						<input type="text" name="first_name" class="form-control">
					</div>

					<div class="form-group">
						<label>Выберите офис</label>
						<select class="form-control" name="office_id">
							<option value="1">ул. Шевченко 146</option>
							<!--<option value="1">Жандосова 20</option>
							<option value="2">Желтоксан 159</option>-->
						</select>
					</div>

					<div class="form-group">
						<label>Сумма</label>
						<input type="text" required name="sum" class="form-control">
					</div>
					
					<div class="form-group">
						<p><a href="/uploads/Политика_конфиденциальности.docx" target="_blank">Политика конфиденциальности</a></p>
						<p><a href="/uploads/Договор_Публичной_оферты_на_предоставление_услуг.docx" target="_blank">Договор оферты</a></p>
					</div>	

					<div class="form-group">
						<button type="submit" class="btn btn-success" name="pay_btn">Оплатить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	