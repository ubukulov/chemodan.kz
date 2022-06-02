var page = {
	leaveLead: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,id;
		b = $(a).attr('data-txt');
		id = $(a).attr('data-id');
		$(".e-23").remove();
		c = '';
		if (b !== '-') {
			c = b;
		}
		$("#comments").html(c);
		$("#send_btn").attr("data-id", id);
	},
	validate: function(a) {
		if (a.length == 15) {
			return true;
		} else {
			return false;
		}
	},
	Lead: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,id,txt,city,city_id;
		if ($("#phone_number").val().trim() === '') {
			return $("#phone_number").focus();
		} else if ($("#phone_number").val().trim() === '') {
			return $("#phone_number").focus();
		} else if (!page.validate($("#phone_number").val().trim())) {
			return $("#phone_number").css({border:'1px solid red'}).focus();
		}

		$(a).prop('disabled', true).text('Подождите...');

		id = parseInt($(a).attr('data-id'));
		
		if ($('#customRadioInline1').prop('checked')) {
			city = 'almaty';
		} else if ($('#customRadioInline2').prop('checked')) {
			city = 'astana';
		} else {
			city = 'almaty';
		}

		switch (id) {
			case 201:
					txt = "Сайт: turkish.kz (Групповые туры. Алматы программа 1), Комментарий: "+$("#comments").val();
				break;
			case 202:
					txt = "Сайт: turkish.kz (Групповые туры. Алматы программа 2), Комментарий: "+$("#comments").val();
				break;
			case 203:
					txt = "Сайт: turkish.kz (Групповые туры. Нур-Султан программа 1), Комментарий: "+$("#comments").val();
				break;
			case 204:
					txt = "Сайт: turkish.kz (Групповые туры. Нур-Султан программа 2), Комментарий: "+$("#comments").val();
				break;
			default:
					txt = "Сайт: turkish.kz, Комментарий: "+$("#comments").val();
		}
		if (city == 'astana') {
			t = 17;
			city_id = 2;
		} else {
			t = 6;
			city_id = 1;
		}
		c = {
			'leads':{
				'name': $("#first_name").val(),
				'phone': $("#phone_number").val(),
				'city': '',
				'comment': txt,
				'tour': '/',
				'url':window.location.pathname,
				'type': t,
				'company':0,
				'city_id': city_id
			}
		};
		$.post('https://www.afinadb.kz/ajax.php',c,function(data) {
			console.log(data+"| подбор тура");
		}).done(function(){
			switch(id) {
				case 1:
					window.location.href = "http://turkish.kz/antalya-thanks.html";
					break;
				case 2:
					window.location.href = "http://turkish.kz/belek-thanks.html";
					break;
				case 3:
					window.location.href = "http://turkish.kz/alanya-thanks.html";
					break;
				case 4:
					window.location.href = "http://turkish.kz/bodrum-thanks.html";
					break;
				case 5:
					window.location.href = "http://turkish.kz/kemer-thanks.html";
					break;
				case 6:
					window.location.href = "http://turkish.kz/kurdashi-thanks.html";
					break;
				case 7:
					window.location.href = "http://turkish.kz/marmaris-thanks.html";
					break;
				case 8:
					window.location.href = "http://turkish.kz/side-thanks.html";
					break;
				case 201:
					window.location.href = "http://turkish.kz/thanks-group-almaty1.html";
					break;
				case 202:
					window.location.href = "http://turkish.kz/thanks-group-almaty2.html";
					break;
				case 203:
					window.location.href = "http://turkish.kz/thanks-group-astana1.html";
					break;
				case 204:
					window.location.href = "http://turkish.kz/thanks-group-astana2.html";
					break;
				default:
					window.location.href = "http://turkish.kz/thanks-main.html";
					break;
			}
		});
		//page.notify();
	},
	GetConsultation: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#get_phone_number").val().trim() === '') {
			return $("#get_phone_number").focus();
		} else if ($("#get_phone_number").val().trim() === '') {
			return $("#get_phone_number").focus();
		} else if (!page.validate($("#get_phone_number").val().trim())) {
			return $("#get_phone_number").css({border:'1px solid red'}).focus();
		}

		$(a).prop('disabled', true).text('Подождите...');

		c = {
			'leads':{
				'name': $("#get_first_name").val(),
				'phone': $("#get_phone_number").val(),
				'city': '',
				'comment':"Сайт: turkish.kz, Комментарий: Запрос на получение консультацию",
				'tour': '/',
				'url':window.location.pathname,
				'type':6,
				'company':0,
				'city_id': 1
			}
		};
		$.post('https://www.afinadb.kz/ajax.php',c,function(data) {
			console.log(data+"| подбор тура");
		}).done(function(){
			page.close();
			window.location.href = "http://turkish.kz/thanks-consultation.html";
		});
		//page.notify();
	},
	GetConsultationByEarlyBooking: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#early_phone").val().trim() === '') {
			return $("#early_phone").focus();
		} else if ($("#early_phone").val().trim() === '') {
			return $("#early_phone").focus();
		} else if (!page.validate($("#early_phone").val().trim())) {
			return $("#early_phone").css({border:'1px solid red'}).focus();
		}

		$(a).prop('disabled', true).text('Подождите...');

		c = {
			'leads':{
				'name': $("#early_name").val(),
				'phone': $("#early_phone").val(),
				'city': '',
				'comment':"Сайт: turkish.kz, Комментарий: Раннее бронирование на 2020г. со скидкой 45%",
				'tour': '/',
				'url':window.location.pathname,
				'type':6,
				'company':0,
				'city_id': 1
			}
		};
		$.post('https://www.afinadb.kz/ajax.php',c,function(data) {
			console.log(data+"| подбор тура");
		}).done(function(){
			page.close();
			window.location.href = "http://turkish.kz/thanks-early-booking.html";
		});
		//page.notify();
	},
	close: function() {
		$(".e-23").remove();
		$(document.body).css({'overflow':'auto'});
	}
}
