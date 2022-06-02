var page = {
	leaveLead: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-txt');
		$(".e-23").remove();
		c = '';
		if (b !== '-') {
			c = b;
		}
		$("#comments").html(c);
	},
	validate: function(a) {
		if (a.length == 15) {
			return true;
		} else {
			return false;
		}
	},
	Lead: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z, city;
		if ($("#phone_number").val().trim() === '') {
			return $("#phone_number").focus();
		} else if ($("#phone_number").val().trim() === '') {
			return $("#phone_number").focus();
		} else if (!page.validate($("#phone_number").val().trim())) {
			return $("#phone_number").css({border:'1px solid red'}).focus();
		}

		$(a).prop('disabled', true).text('Подождите...');

		if ($('#customRadioInline1').prop('checked')) {
			city = 'almaty';
			t = 15;
		} else if ($('#customRadioInline2').prop('checked')) {
			city = 'astana';
			t = 19;
		} else {
			city = 'almaty';
			t = 15;
		}

		c = {
			'leads':{
				'name': $("#first_name").val(),
				'phone': $("#phone_number").val(),
				'city': '',
				'comment':"Сайт: egipt.kz, Комментарий: "+$("#comments").val(),
				'tour': '/',
				'url':window.location.pathname,
				'type': t,
				'company':0
			}
		};
		$.post('https://www.afinadb.kz/ajax.php',c,function(data) {
			console.log(data+"| подбор тура");
		}).done(function(){
			page.close();
			window.location.href = "https://egipt.kz/thanks-main.html";
		});
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
				'comment':"Сайт: egipt.kz, Комментарий: Запрос на получение консультацию",
				'tour': '/',
				'url':window.location.pathname,
				'type': 15,
				'company':0
			}
		};
		$.post('https://www.afinadb.kz/ajax.php',c,function(data) {
			console.log(data+"| подбор тура");
		}).done(function(){
			page.close();
			window.location.href = "https://egipt.kz/thanks-consultation.html";
		});
	},
	close: function() {
		$(".e-23").remove();
		$(document.body).css({'overflow':'auto'});
	}
}
