<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

$this->registerMetaTag(['name' => 'keywords', 'content' => 'Туры в рассрочку']);
$this->registerMetaTag(['name' => 'description', 'content' => 'h1 + | Лучшие  туры ✈ по самым низким ценам от туристического агентства в Алматы. ☀ Выбирайте подходящие туры, детали по телефону ☎ +7 (727) 346 84 78']);
$this->title = 'Туры в рассрочку';
?>
<div class="a-86a">
	<div class="container">
		<?php if(isset($detect) && $detect->isMobile()) :?>
			<div class="row">
				<div class="col-md-12">
					<div class="col" style="width: 70%; float: left;">
						<h4 style="font-weight: bold; font-size: 16px;">КУПИТЬ ТУР В КРЕДИТ</h4>
						<span style="font-size: 12px;">Примерная стоимость тура</span>
					</div>
					<div class="col" style="width: 30%; float: left;">
						<img width="90" src="/img/logo-home-credit-bank.png" alt="">
					</div>
				</div>
			</div>
		<?php else :?>
			<div class="row">
				<div class="col-md-6">
					<h2 style="font-weight: bold;">КУПИТЬ ТУР В КРЕДИТ</h2>
					<span>Примерная стоимость тура</span>
				</div>

				<div class="col-md-6 text-right">
					<img src="/img/logo-home-credit-bank.png" alt="">
				</div>
			</div>
		<?php endif; ?>

		<hr>

		<div id="hcb-credit">
			<div class="row" style="margin-bottom: 40px;">
				<div class="col-md-3">
					<div class="form-group">
						<label>Примерная стоимость тура</label>
						<input type="text" id="sum" @change="calc" value="1000000" class="form-control input-text">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label>ФИО</label>
						<input type="text" id="fio" v-model="fio" placeholder="ФИО" class="form-control input-text">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Ваш телефон</label>
						<input type="text" id="phone" v-model="phone" placeholder="Ваш телефон" class="form-control input-text">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>ИИН</label>
						<input type="text" id="iin" v-model="iin" placeholder="ИИН" class="form-control input-text">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<label>На какой срок?</label>
					<div class="form-group" style="height: 150px;">
						<div class="item">
							<input type="radio" @change="calc" id="term3" class="term-input" v-model="term" value="3" key="3">
							<label for="term3">3 мес</label>
						</div>
						<div class="item">
							<input type="radio" @change="calc" id="term6" class="term-input" v-model="term" value="6" key="6">
							<label for="term6">6 мес</label>
						</div>
						<div class="item">
							<input type="radio" @change="calc" id="term9" class="term-input" v-model="term" value="9" key="9">
							<label for="term9">9 мес</label>
						</div>
						<div class="item">
							<input type="radio" @change="calc" id="term12" class="term-input" v-model="term" value="12" key="12">
							<label for="term12">12 мес</label>
						</div>
						<div class="item">
							<input type="radio" @change="calc" id="term18" class="term-input" v-model="term" value="18" key="18">
							<label for="term18">18 мес</label>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<label>ПЛАТЁЖ СОСТАВИТ:</label>
					<div class="form-group">
						<strong class="info-payment credit"><span data-out="monthlyPayment">{{ beatifulSum(sum_for_month) }}</span><span class="auxiliary"> ₸/мес</span></strong>
						<small class="text-minor">× <span data-out="term">{{ term }}</span> мес</small>
					</div>
				</div>

				<div class="col-md-3">
					<label><strong>ИТОГОВАЯ СТОИМОСТЬ ТУРА:</strong></label>
					<div class="form-group">
						<strong class="info-payment"><span data-out="paymentWithSurcharge">{{beatifulSum(total_sum)}}</span><span class="auxiliary"> ₸</span></strong>
					</div>
				</div>

				<div class="col-md-12 text-center" style="margin-top: 40px;">
					<div style="margin-bottom: 20px;">
						<button type="button" @click="sendCreditRequest" class="input-control input-button credit-bg alive">Отправить заявку</button>        
					</div>
					<div class="desktop-only">
						<p class="info-waiting">Рассмотрение заявки за <strong class="text-major">15–30 минут</strong></p>
						<p class="text-minor"><sup>*</sup><small>Ответ будет получен в виде СМС</small></p>
						<p class="info-contact"><span>Телефон колл-центра </span><em class="text-major">7979</em></p>
					</div>
				</div>
			</div>
			

			<!-- Modal -->
			<div class="modal fade" id="creditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-md-6">
							<h3 class="modal-title" id="exampleModalLabel">Готово</h3>
						</div>
						<div class="col-md-6">
							<button type="button" @click="hideModal" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" style="font-size: 40px;">&times;</span>
							</button>
						</div>
					</div>
					
					
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 text-center">
							<div style="margin-bottom: 20px;">
								<i class="fas fa-check-circle" style="font-size: 50px; color: green;"></i>
							</div>
							Запрос успешно отправлен. Скоро с Вами свяжется специалист.
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" @click="hideModal" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
				</div>
				</div>
			</div>
			</div>
		</div>
		
	</div>
</div>
<style>
.input-text {
	border-bottom: 2px solid #c62c34;
    padding: 20px;
}	
.info-waiting {
	background: url(/img/icon-clock.png) left center/auto 100% no-repeat;
    display: inline-block;
    line-height: 2em;
    padding-left: 2.5em;
}
.input-button {
	border: 1px solid #c62c34;
	background-color: #c62c34;
    color: #fff;
	border-radius: 6px;
    display: block;
    outline: 0 none;
    width: 100%;
	padding: 1em;
	text-transform: uppercase;
}
.text-major {
	font-size: 1.75em;
	font-style: normal;
    font-weight: bold;
}
.term-input {
	display: none;
}
.item {
	width: auto;
	float: left;
	margin-right: 10px;
}
.item label {
	padding: 15px 20px;
    color: #000;
    font-weight: bold;
    border-radius: 5px;
    border: 1px solid #ccc;
    cursor: pointer;
    border-bottom: 4px solid #C62C34;
}
.term-input:checked + label {
	background-color: #c62c34;
    border-color: #c62c34;
    color: #fff;
}
.info-payment {
	color: #c62c34;
	font-size: 2em;
}
.text-minor {
	color: #999;
    display: block;
    font-size: .9em;
}
</style>
<!-- production version, optimized for size and speed -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
<script>
	var app = new Vue({
		el: '#hcb-credit',
		data() {
			return {
				sum: 0,
				term: 6,
				fio: '',
				phone: '',
				iin: '',
				sum_for_month: 0,
				total_sum: 0
			}
		},
		methods: {
			calc(){
				$("#term"+this.term).prop('checked', true);
				this.sum = parseInt($("#sum").val());

				if (this.term != 18) {
					this.total_sum = Math.ceil((this.sum + this.sum * (this.term/100)));
					this.sum_for_month = Math.ceil(this.total_sum/this.term);
				} else {
					this.total_sum = Math.ceil((this.sum + this.sum * 0.16));
					this.sum_for_month = Math.ceil(this.total_sum/this.term);
				}
				
				console.log(this.sum_for_month);
				console.log(this.total_sum);
			},
			sendCreditRequest(){
				if (this.sum.length == 0) {
					return $("#sum").css({'border': '1px solid red'});
				} else {
					$("#sum").css({'border': 'none'}).css({ 'border-bottom': '2px solid #c62c34' });
				}

				if (this.fio.length == 0) {
					return $("#fio").css({'border': '1px solid red'});
				} else {
					$("#fio").css({'border': 'none'}).css({ 'border-bottom': '2px solid #c62c34' });
				}

				if (this.phone.length == 0) {
					return $("#phone").css({'border': '1px solid red'});
				} else {
					$("#phone").css({'border': 'none'}).css({ 'border-bottom': '2px solid #c62c34' });
				}

				if (this.iin.length == 0) {
					return $("#iin").css({'border': '1px solid red'});
				} else {
					$("#iin").css({'border': 'none'}).css({ 'border-bottom': '2px solid #c62c34' });
				}


				let c = {
					'leads_for_credit' : {
						'name': this.fio,
						'phone': this.phone,
						'iin': this.iin,
						'sum': this.sum,
						'type': 4,
						'comment': 'Купить туры в рассрочку. Сумма: '+this.sum+', срок: '+this.term+' мес',
						'txt': 'Туры в рассрочку',
						'company': 0
					}
				}
				$.post('https://www.afinadb.kz/leads-for-credit',c,function(data) {
					console.log(data+"| подбор тура");
					$("#creditModal").removeClass('fade').show();
				});
				
				// axios.post('https://afinadb.kz/leads-for-credit', {
				// 	'leads_for_credit' : {
				// 		'name': this.fio,
				// 		'phone': this.phone,
				// 		'iin': this.iin,
				// 		'sum': this.sum,
				// 		'type': 4,
				// 		'comment': 'Туры в рассрочку',
				// 		'txt': 'Туры в рассрочку'
				// 	}
				// })
				// .then(res => {
				// 	console.log('успешно', res)
				// })
				// .catch(err => {
				// 	console.log(err)
				// })
			},
			hideModal(){
				$("#creditModal").addClass('fade').hide();
			},
			beatifulSum(n) {
				return (n + "").split("").reverse().join("").replace(/(\d{3})/g, "$1 ").split("").reverse().join("").replace(/^ /, "");
			}
		},
		mounted(){
			this.calc();
		}
	})
</script>