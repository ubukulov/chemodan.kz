$(function(){
	$(".a-176").datepicker({ dateFormat: 'dd.mm.yy' });
	$(window).on('scroll',function() {
		if (window.pageYOffset>430) {
			$(".a-274").fadeIn(200);
		} else {
			$(".a-274").fadeOut(200);
		}
	});
	setTimeout(function() {
		slider();
	},10000);
	$(".a-28").fadeIn(200);
});
var htnotification = 0;

var classes = {
	Homepage: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = a.hot_data.list;
		e = '';
		var turkey = '';
		var greece = '';
		var uae = '';
		var egypt = '';
		var thailand = '';
		var dominicana = '';
		for (c=0,d=b.length;c<d;c++) {
			if (b[c].tour_label.trim() === 'Доминикана') {
				dominicana += '<div class="a-424"><div class="a-425" style="background-image: url(http://kompastour.kz/'+b[c].image+')"></div> <div class="a-426">'+b[c].title+' '+b[c].tour_time+'</div><div class="a-427" onclick="return page.tourViewSel(this);" data-id="'+escapeHtml(JSON.stringify({'id':b[c].id,'date':b[c].tour_time,'sum':b[c].tour_price,'txt':b[c].title+' '+b[c].tour_time,'img':'http://kompastour.kz'+b[c].image,'country':b[c].tour_label}))+'">Цена: '+b[c].tour_price+'</div> </div>';
			} else if (b[c].tour_label.trim() === 'Тайланд' || b[c].tour_label.trim() === 'Таиланд') {
				thailand += '<div class="a-424"><div class="a-425" style="background-image: url(http://kompastour.kz/'+b[c].image+')"></div> <div class="a-426">'+b[c].title+' '+b[c].tour_time+'</div><div class="a-427" onclick="return page.tourViewSel(this);" data-id="'+escapeHtml(JSON.stringify({'id':b[c].id,'date':b[c].tour_time,'sum':b[c].tour_price,'txt':b[c].title+' '+b[c].tour_time,'img':'http://kompastour.kz'+b[c].image,'country':b[c].tour_label}))+'">Цена: '+b[c].tour_price+'</div> </div>';
			} else if (b[c].tour_label.trim() === 'Египет') {
				egypt += '<div class="a-424"><div class="a-425" style="background-image: url(http://kompastour.kz/'+b[c].image+')"></div> <div class="a-426">'+b[c].title+' '+b[c].tour_time+'</div><div class="a-427" onclick="return page.tourViewSel(this);" data-id="'+escapeHtml(JSON.stringify({'id':b[c].id,'date':b[c].tour_time,'sum':b[c].tour_price,'txt':b[c].title+' '+b[c].tour_time,'img':'http://kompastour.kz'+b[c].image,'country':b[c].tour_label}))+'">Цена: '+b[c].tour_price+'</div> </div>';
			} else if (b[c].tour_label.trim() === 'ОАЭ') {
				uae += '<div class="a-424"><div class="a-425" style="background-image: url(http://kompastour.kz/'+b[c].image+')"></div> <div class="a-426">'+b[c].title+' '+b[c].tour_time+'</div><div class="a-427" onclick="return page.tourViewSel(this);" data-id="'+escapeHtml(JSON.stringify({'id':b[c].id,'date':b[c].tour_time,'sum':b[c].tour_price,'txt':b[c].title+' '+b[c].tour_time,'img':'http://kompastour.kz'+b[c].image,'country':b[c].tour_label}))+'">Цена: '+b[c].tour_price+'</div> </div>';
			} else if (b[c].tour_label.trim() === 'Греция') {
				greece += '<div class="a-424"><div class="a-425" style="background-image: url(http://kompastour.kz/'+b[c].image+')"></div> <div class="a-426">'+b[c].title+' '+b[c].tour_time+'</div><div class="a-427" onclick="return page.tourViewSel(this);" data-id="'+escapeHtml(JSON.stringify({'id':b[c].id,'date':b[c].tour_time,'sum':b[c].tour_price,'txt':b[c].title+' '+b[c].tour_time,'img':'http://kompastour.kz'+b[c].image,'country':b[c].tour_label}))+'">Цена: '+b[c].tour_price+'</div> </div>';
			} else if (b[c].tour_label.trim() === 'Турция') {
				turkey += '<div class="a-424"><div class="a-425" style="background-image: url(http://kompastour.kz/'+b[c].image+')"></div> <div class="a-426">'+b[c].title+' '+b[c].tour_time+'</div><div class="a-427" onclick="return page.tourViewSel(this);" data-id="'+escapeHtml(JSON.stringify({'id':b[c].id,'date':b[c].tour_time,'sum':b[c].tour_price,'txt':b[c].title+' '+b[c].tour_time,'img':'http://kompastour.kz'+b[c].image,'country':b[c].tour_label}))+'">Цена: '+b[c].tour_price+'</div> </div>';
			}
			e += '<td><div class="a-30" data-id="'+b[c].id+'"><div class="a-31" style="background-image: url(http://kompastour.kz/'+b[c].image+')"><div class="a-38">'+b[c].tour_label+'</div></div><div class="a-32">'+b[c].title+' '+b[c].tour_time+'</div><div class="a-35" onclick="return page.tourViewSel(this);" data-id="'+escapeHtml(JSON.stringify({'id':b[c].id,'date':b[c].tour_time,'sum':b[c].tour_price,'txt':b[c].title+' '+b[c].tour_time,'img':'http://kompastour.kz'+b[c].image,'country':b[c].tour_label}))+'">Цена: '+b[c].tour_price+'</div></div></td>';


			//e += '<div class="e-23"><div class="e-23a" style="background: url(http://kompastour.kz/'+b[c].image+');"><div class="e-23b">'+b[c].tour_label+'</div></div><div class="e-23c">'+b[c].title+' '+b[c].tour_time+'</div><div class="e-23d" onclick="return page.selTour(this,'+escapeHtml(JSON.stringify({'price':b[c].tour_price,'title':b[c].title+' '+b[c].tour_time,'image':'http://kompastour.kz/'+b[c].image,'label':b[c].tour_label}))+');">'+b[c].tour_price+'</div></div>';
		}
		//$("#turkey").html(turkey);
		//$("#greece").html(greece);
		//$("#uae").html(uae);
		//$("#egypt").html(egypt);
		//$("#thailand").html(thailand);
		//$("#dominicana").html(dominicana);
		//$(".a-29").html('<table><tr>'+e+'</tr></table>');
		$(".a-28").fadeIn(200);
	}
};
$(document).on('mousedown',function() {
	$(".a-150, .a-342, .a-354").fadeOut(0);
	$(".a-341").removeAttr('data-view');
});
function slider() {
	var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
	if ($(".slider").hasClass('slider1')) {
		$(".slider").removeClass("slider1").addClass("slider2");
	} else if ($(".slider").hasClass('slider2')) {
		$(".slider").removeClass("slider1").removeClass("slider2");
	} else {
		$(".slider").addClass("slider1");
	}
	if (htnotification===3) {
		page.showNot();
	}
	htnotification++;
	setTimeout(function() {
		slider();
	},10000);
}
$(window).on('scroll',function() {
	if (window.pageYOffset>430) {
		$(".a-8").addClass("a-8a");
	} else {
		$(".a-8").removeClass("a-8a");
	}
});
function escapeHtml(text) {
  return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

var page = {
	startImgL: [],
	startImgUp: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = a.files;
		c = b.length;
		if (c > 5) return alert('Максимальное количество 5 фотографий!');
		page.startImgL = [];
		for (d=0;d<c;d++) {
			page.startImgL.push(b[d]);
		}
		e = '';
		var rd;
		h = 0;
		$(".a-472").html('');
		page.startImgL.forEach(function(g) {
			$(".a-472").append('<div class="a-473"><div class="a-474">'+g.name+'</div><div class="a-476" onclick="return page.removeImgUp(this);" data-id="'+(h++)+'"></div></div>');
		});
	},
	ajax: function() {
 		try{
			return new XMLHttpRequest()
  		} catch(e) {
			try{
	 			return new ActiveXObject('Msxml2.XMLHTTP')
			} catch(e){
	  			try {
					return new ActiveXObject('Microsoft.XMLHTTP')
	  			} catch(e) {
					return null;
	  			}
			}
    	}
	},
	leaveRequestComment: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		if ($(".a-443").eq(0).val().trim() === '') {
			return $(".a-443").eq(0).focus();
		} else if ($(".a-443").eq(1).val().trim() === '') {
			return $(".a-443").eq(1).focus();
		} else if ($(".a-445").eq(0).val().trim() === '') {
			return $(".a-445").eq(0).focus();
		}
		b = page.startImgL.length;
		d = new FormData();

		for (c=0;c<b;c++) {
			d.append('file_'+c,page.startImgL[c]);
		}

		e = {'name':$(".a-443").eq(0).val().trim(),'email':$(".a-443").eq(1).val().trim(),'comment':$(".a-445").eq(0).val().trim()};

		d.append('main',JSON.stringify(e));
		$.ajax({
    		url: "/upload",
    		type: "POST",
    		data : d,
    		processData: false,
    		contentType: false,
    		cache: false,
    		success: function(data){
    			console.log(data);
    		},
    		error: function(xhr, ajaxOptions, thrownError) {
       		console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    		}
		});

		$(".a-446").fadeIn(0);

	/*
	var http = page.ajax();
		http.addEventListener("load",function(event) {
			confirm();
			console.log(event.target.responseText);
			alert(event.target.responseText);
		},false);
		http.open("POST","/upload");
		http.send(d);
	*/



	},
	removeImgUp: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = $(a).attr('data-id');
		page.startImgL.splice(b,1);
		$(".a-472").html('');
		page.startImgL.forEach(function(g) {
			$(".a-472").append('<div class="a-473"><div class="a-474">'+g.name+'</div><div class="a-476" onclick="return page.removeImgUp(this);" data-id="'+(h++)+'"></div></div>');
		});
	},
	selCommentImg: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(document.body).remove('#file-img').append('<input type="file" style="display: none;" id="file-img" onchange="return page.startImgUp(this);" multiple accept="image/jpeg" >');
		$("#file-img").click();
	},
	leaveComment: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(document.body).css({'overflow':'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 400px;"><div class="a-446" style="height: 100%; z-index: 10;">Спасибо за ваш отзыв</div><div class="a-441">Форма отзыва</div><div class="a-442"><input type="text" class="a-443" placeholder="Ваше имя"></div><div class="a-442"><div class="a-470"> <div class="a-471"><div class="a-475" onclick="return page.selCommentImg();">Выбрать фото (Максимальное кол 5шт.)</div></div> <div class="a-472"></div>  </div></div><div class="a-442"><input type="text" class="a-443" placeholder="Ваша эл.почта"></div><div class="a-442"><textarea class="a-445" placeholder="Комментарий"></textarea></div><div class="a-442"><button class="a-444" onclick="page.leaveRequestComment();">Оставить отзыв</button></div></div></div>');
	},
	allowNot: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(".a-459").fadeOut(200);
		Notification.requestPermission(function(permission){
		// переменная permission содержит результат запроса
		if (permission === 'denied') {
			page.setCookie("agree","true",7);
		} else {
			page.setCookie("notification","true",7);
		}
		});
	},
	viewNot: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		// $(document.body).append('<div class="a-459"><div class="a-460"></div><div class="a-461"><div class="a-465"></div><div class="a-462">Уведомление в браузере</div><div class="a-463">Будьте в курсе лучших предложений от нашей компании!</div><div class="a-464">У нас есть скидки до 50%</div><div class="a-466"><div class="a-467" onclick="return page.allowNot();">Разрешить</div><div class="a-468" onclick="return page.disagreeNot();">Не сейчас</div></div></div></div>');
	},
	disagreeNot: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(".a-459").fadeOut(200);
		page.setCookie("agree","true",7);
	},
	showNot: function() {
		var myCookie = getCookie("notification");
		var is_agree = getCookie("agree");
    	if (myCookie == null && is_agree == null) page.viewNot(); else if (myCookie != null) page.showNotification();
	},
	showNotification: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		a = $(".h-19").html();
		b = $(".a-30");
		c = b.length;
		e = '';
		for (d=0;d<c;d++) {
			if (b.eq(d).attr('data-cities') === a) {
				e = b.eq(d).find('.a-35').attr('data-id');
				break;
			}
		}
		if (e!='') {
			e = JSON.parse(e);

			//{date: "ОАЭ из Алматы", sum: "от 162 000 KZ", txt: "Проведите 7 незабываемых ночей в теплых Эмиратах, …е! Цена на 1 человека при двухместном размещении.", img: "https://www.afinadb.kz/temp_img/2019-04-17_11:07:56.jpg", country: "ОАЭ"}

			Notification.requestPermission(function (permission) {
      			// Если пользователь разрешил, то создаем уведомление
      			if (permission === "granted") {
        			var notification = new Notification(e.date, {
					body: e.txt +" "+e.sum,
					icon: e.img,
					dir: 'auto'
				});
      			}
    		});
		}
		/*
		if (!("Notification" in window)) {
    		alert("This browser does not support desktop notification");
    	}// Проверка разрешения на отправку уведомлений
    	else if (Notification.permission === "granted") {
    		// Если разрешено, то создаем уведомление
    		var notification = new Notification("Hi there!");
  		}// В противном случае, запрашиваем разрешение
  		else if (Notification.permission !== 'denied') {
    		Notification.requestPermission(function (permission) {
      			// Если пользователь разрешил, то создаем уведомление
      			if (permission === "granted") {
        			var notification = new Notification("Hi there!");
      			}
    		});
 		}
		*/

	},
	selcityHT: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(".a-458").removeClass("a-458");
		$(a).addClass("a-458");
		b = $(a).attr('data-cities');
		c = $(".a-30");
		d = c.length;
		for (e=0;e<d;e++) {
			if (c.eq(e).attr('data-cities')==b) {
				c.eq(e).css('display','block');
			} else c.eq(e).css('display','none');
		}
		$(".a-29").css({'margin-left':0});
	},
	schemeMapSel: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(".a-448").removeClass("a-449");
		$(a).addClass("a-449");
		b = $(a).attr('data-id');
		$(".a-451").fadeOut(0);
		$("#cities-map-"+b).fadeIn(0);
	},
	schemeMap: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 700px;"><div class="a-450">Контакты сети турагентств Чемодан в Казахстане</div><div class="a-447"><div style="margin-top: 10px;" class="a-448 a-449" data-id="0" onclick="return page.schemeMapSel(this);">Алматы</div><div class="a-448" style="margin-top: 10px;" data-id="2" onclick="return page.schemeMapSel(this);">Тараз</div><div class="a-448" style="margin-top: 10px;" data-id="3" onclick="return page.schemeMapSel(this);">Актобе</div><div style="margin-top: 10px;" class="a-448" data-id="4" onclick="return page.schemeMapSel(this);">Актау</div><div style="margin-top: 10px;" class="a-448" data-id="5" onclick="return page.schemeMapSel(this);">Нур-Султан 7</div><div style="margin-top: 10px;" class="a-448" data-id="6" onclick="return page.schemeMapSel(this);">Нур-Султан 8</div><div style="margin-top: 10px;" class="a-448" data-id="7" onclick="return page.schemeMapSel(this);">Шымкент №11</div><div style="margin-top: 10px;" class="a-448" data-id="8" onclick="return page.schemeMapSel(this);">Атырау №12</div></div> <div class="a-451" id="cities-map-0">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 (727) 346 84 78</div><div>+7 (727) 346 84 78</div></div> <div class="a-454">Адреса в г.Алматы</div> <div class="a-455"><div>г. Алматы, ул. Шевченко 146</div><div>г. Алматы, ул. Желтоксан 159</div><div>г. Алматы, ул. Жандосова 20</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div>  <div class="a-453">  <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A34176539b195f53ffa5abcc9cbd6f4c19281184a4f8da8095bd396cad6f1ae80&amp;source=constructor" width="400" height="300" frameborder="0"></iframe>  </div></div>  <div class="a-451" id="cities-map-2" style="display: none;">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 (777) 211 83 83</div><div>+7 (777) 211 66 33</div></div> <div class="a-454">Адреса в г.Тараз</div> <div class="a-455"><div>9 мкрн дом 67</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div>  <div class="a-453"> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae88157613806318b22b4669b11f254fe772628d4ca18bb8f9bec0b691a0676c3&amp;source=constructor" width="400" height="300" frameborder="0"></iframe> </div></div>  <div class="a-451" id="cities-map-3" style="display: none;">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 (713) 252 51 11</div></div> <div class="a-454">Адреса в г.Актобе</div> <div class="a-455"><div>ул. Есет Батыра 116г</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div>  <div class="a-453"> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac9f288307ce22ff90c5b1e8c92973dfeb5cbdedaed8cf26f97ae20870866abd3&amp;source=constructor" width="400" height="300" frameborder="0"></iframe> </div></div>  <div class="a-451" id="cities-map-4" style="display: none;">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 702 191 70 55</div></div> <div class="a-454">Адреса в г.Актау</div> <div class="a-455"><div>14 мкр, Здание 58/1 БЦ Форум, Вход с торца здания</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A79e7264a25222989fcd67fde44cae03112c15ecca958a86ff36a1ecd59d7bbfd&amp;source=constructor" width="400" height="300" frameborder="0"></iframe>  </div> <div class="a-451" id="cities-map-5" style="display: none;">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 (747) 094 71 75</div></div> <div class="a-454">Адреса в г.Нур-Султан</div> <div class="a-455"><div>Ул.23-15, дом 11/3, ЖК Millennnium Park, офис Чемодан</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A793f041ae8c475cf76da47c1d4fc680e2c759060f1e2f2cd163255903e8b895d&amp;source=constructor" width="400" height="300" frameborder="0"></iframe>  </div><div class="a-451" id="cities-map-6" style="display: none;">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 (747) 094 45 02</div><div>+7 (747) 094 45 03</div><div>+7 (747) 094 45 04</div></div> <div class="a-454">Адреса в г.Нур-Султан</div> <div class="a-455"><div>БЦ Болашак, Сарыарка 3/1, офис 301/1</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A28cfa7930dc612d5c8a0aed8883d01cea1c15c71261d737550ae1ab4e24f4dcc&amp;source=constructor" width="400" height="300" frameborder="0"></iframe>  </div><div class="a-451" id="cities-map-7" style="display: none;">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 (701) 800 09 51</div><div>+7 (747) 288 94 98</div></div> <div class="a-454">Адреса в г.Шымкент</div> <div class="a-455"><div>проспект Тауке хана 60</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A99b81b8c53e93422db599af3e54204fb4153f610dcbd3f37ceaabeeeb52e7ed4&amp;source=constructor" width="400" height="300" frameborder="0"></iframe>  </div> <div class="a-451" id="cities-map-8" style="display: none;">  <div class="a-452"> <div class="a-454">Телефоны</div> <div class="a-455"><div>+7 (707) 877 88 55</div><div>+7 (702) 066 66 17</div><div>+7 (778) 066 66 17</div></div> <div class="a-454">Адреса в г.Атырау</div> <div class="a-455"><div>ул. Абая Кунанбаева, дом 19Б, офис №3</div></div> <div class="a-454">Часы работы</div> <div class="a-455"><div>с 10:00 до 19:00</div></div> </div> <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3da966b318e4ccc58e52808964a0c17fd873b20686708cbab1f41bad17fd7f1c&amp;source=constructor" width="400" height="300" frameborder="0"></iframe>  </div>      </div></div>');
	},
	requestClient: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 400px;"><div class="a-446">Спасибо за запрос, скоро с вами свяжутся</div><div class="a-441">Оставить запрос</div><div class="a-442"><input type="text" class="a-443" placeholder="Ваше имя"></div><div class="a-442"><input type="text" value="+7" class="a-443" placeholder="Ваш телефон номер"></div><div class="a-442"><textarea class="a-445" placeholder="Комментарий (* не обязательно)"></textarea></div><div class="a-442"><button class="a-444" id="main_pod_tur" onclick="page.leaveRequestClient();">Оставить запрос</button></div></div></div>');
	},
	requestClientForAlakol: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 400px;"><div class="a-446">Спасибо за запрос, скоро с вами свяжутся</div><div class="a-441">Оставить запрос</div><div class="a-442"><input type="text" class="a-443" placeholder="Ваше имя"></div><div class="a-442"><input type="text" value="+7" class="a-443" placeholder="Ваш телефон номер"></div><div class="a-442"><textarea class="a-445" placeholder="Комментарий (* не обязательно)"></textarea></div><div class="a-442"><button class="a-444" id="alakol" onclick="page.leaveRequestClient();">Оставить запрос</button></div></div></div>');
	},
	requestClientForIssikkul: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 400px;"><div class="a-446">Спасибо за запрос, скоро с вами свяжутся</div><div class="a-441">Оставить запрос</div><div class="a-442"><input type="text" class="a-443" placeholder="Ваше имя"></div><div class="a-442"><input type="text" value="+7" class="a-443" placeholder="Ваш телефон номер"></div><div class="a-442"><textarea class="a-445" placeholder="Комментарий (* не обязательно)"></textarea></div><div class="a-442"><button class="a-444" id="issikkul" onclick="page.leaveRequestClient();">Оставить запрос</button></div></div></div>');
	},
	leaveRequestClient: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		if ($(".a-443").eq(0).val().trim() === '') {
			return $(".a-443").eq(0).focus();
		} else if ($(".a-443").eq(1).val().trim() === '') {
			return $(".a-443").eq(1).focus();
		} else if (!page.validate($(".a-443").eq(1).val().trim())) {
			return $(".a-443").eq(1).css({border:'1px solid red'}).focus();
		}

		c = {
			'leads':{
				'name': $(".a-443").eq(0).val().trim(),
				'phone': $(".a-443").eq(1).val().trim(),
				'city': '',
				'comment':'Запрос --- Позвонить --- '+$(".a-445").val().trim(),
				'tour': '/',
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		$(".a-446").fadeIn(0);
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"| подбор тура");
		});


	},
	validate: function(a) {
		var a,b;
		var b = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
		return b.test(a);
	},
	cancelCity: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(".a-433").fadeOut(0);
		$(".a-418").removeAttr("style");

	},
	selectCity: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = $(a).closest('.a-435').find('.h-19').html();
		c = $(".a-421");
		for (e=0,d=c.length;e<d;e++) {
			if (c.eq(e).html()===b) {
				c.eq(e).click();
				break;
			}
		}
	},
	setCookie: function(name,value,days) {
    	var expires = "";
    	if (days) {
        	var date = new Date();
        	date.setTime(date.getTime() + (days*24*60*60*1000));
        	expires = "; expires=" + date.toUTCString();
    	}
    	document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    	window.location.reload();
	},
	selLocation: function(a,b) {
		page.setCookie('location',JSON.stringify(b),10);
	},
	tourViewSel: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = $(a).attr('data-id');
		c = JSON.parse(b);

		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 400px;"><div class="a-410"><div class="a-411" style="background-image: url('+escapeHtml(c.img)+')"></div><div class="a-412"><div class="a-413">'+c.country+'</div><div class="a-414">'+c.txt+'</div><div class="a-415">'+c.sum+'</div></div></div><div class="a-416"><div class="a-417">С вами скоро свяжутся!</div></div><div class="a-406"><input type="text" class="a-407" placeholder="Ваше имя"></div><div class="a-406"><input type="text" class="a-407" placeholder="Ваш номер телефона"></div><div class="a-406"><textarea class="a-408" placeholder="Комментарий *не обязательно"></textarea></div><div class="a-406"><button class="a-409" id="main_hot_btn" onclick="return page.leaveTourInfo(this);" data-id="'+b+'">Оставить запрос</button></div></div></div>');
	},
	tourCredit: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = $(a).attr('data-id');
		c = JSON.parse(b);

		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 400px;"><div class="a-410"><div class="a-411" style="background-image: url('+escapeHtml(c.img)+')"></div><div class="a-412"><div class="a-413">'+c.country+'</div><div class="a-414">'+c.txt+'</div><div class="a-415">'+c.sum+'</div></div></div><div class="a-416"><div class="a-417">С вами скоро свяжутся!</div></div><div class="a-406"><input type="text" class="a-407" placeholder="Ваше имя"></div><div class="a-406"><input type="text" class="a-407" id="credit_phone" placeholder="Ваш номер телефона"></div><div class="a-406"><input type="text" id="credit_iin" class="a-407" placeholder="Ваш ИИН"></div><div class="a-406"><input type="number" min="1" id="credit_sum" class="a-407" placeholder="Сумма"></div><div class="a-406"><textarea class="a-408" placeholder="Комментарий *не обязательно"></textarea></div><div class="a-406"><button class="a-409" id="main_hot_btn2" onclick="return page.leaveTourCredit(this);" data-id="'+b+'" data-sum="'+c.sum+'" data-txt="'+c.txt+'">Отправить запрос</button></div></div></div>');
		$("#credit_phone").mask("+7 (999)-999-9999");
  		$("#credit_iin").mask("999999999999");
	},
	tourCreditTop: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;

		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 400px;"><div class="a-410"><div class="a-411" style="background-image: url(/img/homecreditbank.jpeg)"></div><div class="a-412"><div class="a-414">Оставить заявку на тур в рассрочку</div></div></div><div class="a-416"><div class="a-417">С вами скоро свяжутся!</div></div><div class="a-406"><input type="text" class="a-407" placeholder="Ваше имя"></div><div class="a-406"><input type="text" class="a-407" id="credit_phone" placeholder="Ваш номер телефона"></div><div class="a-406"><input type="text" id="credit_iin" class="a-407" placeholder="Ваш ИИН"></div><div class="a-406"><input type="number" min="1" id="credit_sum" class="a-407" placeholder="Сумма"></div><div class="a-406"><textarea class="a-408" placeholder="Комментарий *не обязательно"></textarea></div><div class="a-406"><button class="a-409" id="main_hot_btn2" onclick="return page.leaveTourCreditTop(this);">Отправить запрос</button></div></div></div>');
		$("#credit_phone").mask("+7 (999)-999-9999");
  		$("#credit_iin").mask("999999999999");
	},
	leaveTourInfo: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		if ($(".a-407").eq(0).val().trim() === '') {
			return $(".a-407").eq(0).focus();
		} else if ($(".a-407").eq(1).val().trim() === '') {
			return $(".a-407").eq(1).focus();
		} else if (!page.validate($(".a-407").eq(1).val().trim())) {
			return $(".a-407").eq(1).css({border:'1px solid red'}).focus();
		}
		$(".a-416").fadeIn(0);
		$(".a-409").removeAttr('onclick').html('Спасибо за запрос!');

		c = {
			'leads':{
				'name': $(".a-407").eq(0).val().trim(),
				'phone': $(".a-407").eq(1).val().trim(),
				'city': '',
				'comment':'Горящие туры --- с: '+ $(a).closest('.a-278').find('.a-413').html().trim()+" --- "+$(a).closest('.a-278').find('.a-414').html().trim()+" --- "+$(a).closest('.a-278').find('.a-415').html().trim()+" --- Комментарий: "+$(".a-408").val().trim(),
				'tour': '/',
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"| подбор тура");
		});
		/*
		c = {
			'leads':{
				'name': $(".a-230").eq(0).val().trim(),
				'phone': $(".a-230").eq(1).val().trim(),
				'cities': '',
				'comment':'Подбор тура --- с: '+$(".a-3a").find('span').html()+" - до: "+$(".a-3b").find('span').html()+" --- дата: "+$(".a-3c").eq(0).find('span').attr('data-day')+"/"+$(".a-3c").find('span').attr('data-month')+"/"+$(".a-3c").find('span').attr('data-year')+" --- дней: "+$(".a-3c").eq(1).find('span').html()+" --- звездность: "+$(".a-3c").eq(2).find('span').html()+" --- взрослые: "+$(".a-3c").eq(3).find('.adult').attr('data-id')+" --- дети: "+$(".a-3c").eq(3).find('.child').attr('data-id')+" --- Возрасть детей: "+page.childAge()+" --- Комментарий: "+$(".a-230a").val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':0
			}
		};
		$.post('https://www.afinadb.kz/ajax.php',c,function(data) {
			console.log(data+"| подбор тура");
		});
		*/

	},
	leaveTourCredit: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = $(a).attr('data-id');
		d = $(a).attr('data-txt');
		s = $(a).attr('data-sum');
		if ($(".a-407").eq(0).val().trim() === '') {
			return $(".a-407").eq(0).focus();
		} else if ($(".a-407").eq(1).val().trim() === '') {
			return $(".a-407").eq(1).focus();
		} else if (!page.validate($(".a-407").eq(1).val().trim())) {
			return $(".a-407").eq(1).css({border:'1px solid red'}).focus();
		} else if ($(".a-407").eq(2).val().trim() === '') {
			return $(".a-407").eq(2).focus();
		}

		if ($("#credit_phone").val().length != 17) {
			return $(".a-407").eq(1).css({border:'1px solid red'}).focus();
		}

		if ($("#credit_iin").val().length != 12) {
			return $(".a-407").eq(2).css({border:'1px solid red'}).focus();
		}

		$("#credit_phone").on("blur", function() {
      var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

      if( last.length == 3 ) {
          var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
          var lastfour = move + last;
          var first = $(this).val().substr( 0, 9 );

          $(this).val( first + '-' + lastfour );
      }
  	});

		$(".a-416").fadeIn(0);
		$(".a-409").removeAttr('onclick').html('Спасибо за запрос!');

		c = {
			'leads_for_credit':{
				'name': $(".a-407").eq(0).val().trim(),
				'phone': $(".a-407").eq(1).val().trim(),
				'iin': $(".a-407").eq(2).val().trim(),
				'txt' : d,
				'sum' : s,
				'city': '',
				'comment':'Горящие туры - (РАССРОЧКА): '+ $(a).closest('.a-278').find('.a-413').html().trim()+" --- "+$(a).closest('.a-278').find('.a-414').html().trim()+" --- "+$(a).closest('.a-278').find('.a-415').html().trim()+" --- Комментарий: "+$(".a-408").val().trim(),
				'tour': '/',
				'url':window.location.pathname,
				'type': 4,
				'company':0
			}
		};
		$.post('https://afinadb.kz/leads-for-credit',c,function(data) {
			console.log(data+"| подбор тура");
		});
	},
	leaveTourCreditTop: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		
		if ($(".a-407").eq(0).val().trim() === '') {
			return $(".a-407").eq(0).focus();
		} else if ($(".a-407").eq(1).val().trim() === '') {
			return $(".a-407").eq(1).focus();
		} else if (!page.validate($(".a-407").eq(1).val().trim())) {
			return $(".a-407").eq(1).css({border:'1px solid red'}).focus();
		} else if ($(".a-407").eq(2).val().trim() === '') {
			return $(".a-407").eq(2).focus();
		} else if ($(".a-407").eq(3).val().trim() === '') {
			return $(".a-407").eq(3).focus();
		}

		if ($("#credit_phone").val().length != 17) {
			return $(".a-407").eq(1).css({border:'1px solid red'}).focus();
		}

		if ($("#credit_iin").val().length != 12) {
			return $(".a-407").eq(2).css({border:'1px solid red'}).focus();
		}

		$("#credit_phone").on("blur", function() {
	      var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

	      if( last.length == 3 ) {
	          var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
	          var lastfour = move + last;
	          var first = $(this).val().substr( 0, 9 );

	          $(this).val( first + '-' + lastfour );
	      }
  		});

		$(".a-416").fadeIn(0);
		$(".a-409").removeAttr('onclick').html('Спасибо за запрос!');

		c = {
			'leads_for_credit':{
				'name': $(".a-407").eq(0).val().trim(),
				'phone':$(".a-407").eq(1).val().trim(),
				'iin':  $(".a-407").eq(2).val().trim(),
				'txt' : 'Купить тур с рассрочкой',
				'sum' : $(".a-407").eq(3).val().trim(),
				'city': '',
				'comment': "Горящие туры - (РАССРОЧКА): --- Комментарий: "+$(".a-408").val().trim(),
				'tour': '/',
				'url':window.location.pathname,
				'type': 4,
				'company':0
			}
		};
		$.post('https://afinadb.kz/leads-for-credit',c,function(data) {
			console.log(data+"| подбор тура");
		});
	},
	oneTouristSel: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = JSON.parse($(a).closest(".a-369a").attr('data-one'));
		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 600px;"><div class="a-405"></div><div class="a-395" style="display: block" data-id="'+escapeHtml(JSON.stringify(b))+'"><div class="a-402">'+b.sum+'</div><div class="a-400">'+b.name+'</div><div class="a-401">'+b.to+', '+b.city+'</div></div><div class="a-395"><div class="a-396"><div class="a-397">Город вылета:</div><div class="a-398">'+b.from+'</div></div><div class="a-396"><div class="a-397">Дата вылета:</div><div class="a-398">'+b.date+'</div></div><div class="a-396"><div class="a-397">Кол-во ночей:</div><div class="a-398">'+b.day+'</div></div><div class="a-396"><div class="a-397">Питание:</div><div class="a-398">'+b.meal+'</div></div><div class="a-396"><div class="a-397">Номер:</div><div class="a-398">'+b.room+'</div></div>  </div><div class="a-392"><div class="a-393"><input type="text" placeholder="+7" maxlength="16" class="a-393a"></div><div class="a-394"><button class="a-394a" onclick="return page.saveTourist(this);">Заказать обратный звонок</button></div></div></div></div>');
	},
	saveTourist: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		if ($(".a-393a").val().trim() === '') return $(".a-393a").focus();
		$(".a-278").html('<div class="a-403">Спасибо за отклик, с вами скоро свяжутся</div><div class="a-404" onclick="return page.closeView();">OK</div>');
		b = '';
	},
	buyTourist: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = JSON.parse($(a).attr('data-id'));
		$(".a-278").html('<div class="a-405"></div><div class="a-395" style="display: block" data-id="'+escapeHtml(JSON.stringify(b))+'"><div class="a-402">'+b.sum+'</div><div class="a-400">'+b.name+'</div><div class="a-401">'+b.to+', '+b.city+'</div></div><div class="a-395"><div class="a-396"><div class="a-397">Город вылета:</div><div class="a-398">'+b.from+'</div></div><div class="a-396"><div class="a-397">Дата вылета:</div><div class="a-398">'+b.date+'</div></div><div class="a-396"><div class="a-397">Кол-во ночей:</div><div class="a-398">'+b.day+'</div></div><div class="a-396"><div class="a-397">Питание:</div><div class="a-398">'+b.meal+'</div></div><div class="a-396"><div class="a-397">Номер:</div><div class="a-398">'+b.room+'</div></div>  </div><div class="a-392"><div class="a-393"><input type="text" placeholder="+7" maxlength="16" class="a-393a"></div><div class="a-394"><button class="a-394a" onclick="return page.saveTourist(this);">Заказать обратный звонок</button></div></div>');

		//{"from":"Алматы","name":"DAYI DIAMOND SUIT HOTEL","day":16,"sum":"1359","child":0,"adult":2,"people":"Взрослые: 2","url":"","star":3,"date":"07.02","cities":"ANTALYA","meal":"Все включено","operator":"tez-tour"}

	},
	showFullTourInfo: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;

		/*
		adult: 2
child: 0
cities: "ANTALYA"
date: "07.02"
day: 16
meal: "Все включено"
operator: "tez-tour"
people: "Взрослые: 2"
star: 3
sum: "1360"
url: ""
		*/

		b = JSON.parse($(a).closest('.a-369a').attr('data-id'));
		d = '';

		for (e=0,f=b.length;e<f;e++) {

			d += '<div class="a-386" onclick="return page.buyTourist(this);" data-id="'+escapeHtml(JSON.stringify(b[e]))+'"><div class="a-387" '+(b[e].url!==''?'style="background-image: url('+b[e].url+');"':'')+'><div class="a-387a">'+b[e].date+'</div></div><div class="a-388"><button class="a-388a">Цена '+b[e].sum+'</button><div class="a-389"><div class="a-389a">'+b[e].name+'</div><div class="a-389b "><div class="a-389b'+b[e].star+'"></div></div></div> <div class="a-390"> <div class="a-391"><div class="a-391a"></div><div class="a-391b">'+b[e].day+' ночей</div></div><div class="a-391"><div class="a-391a" style="background-image: url(/web/img/meal_round_yellow.svg)"></div><div class="a-391b">'+b[e].meal+'</div></div><div class="a-391" style="border:none;"><div class="a-391a" style="background-image: url(/web/img/people_round_yellow.svg)"></div><div class="a-391b">'+b[e].people+'</div></div> </div> </div></div>';

			//{"day":15,"sum":"1376","child":0,"adult":2,"people":"Взрослые: 2","url":"https://s.tez-tour.com/hotel/671/z1__17__4899_small.jpg","star":4,"date":"09.02","cities":"ANTALYA","meal":"Завтрак и ужин","operator":"tez-tour"}

			//{"day":16,"sum":"1360","child":0,"adult":2,"people":"Взрослые: 2","url":"","star":3,"date":"07.02","cities":"ANTALYA","meal":"Все включено","operator":"tez-tour"}

		}

		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278" style="width: 600px;">'+d+'</div></div>');

	},
	searchPrevMonth: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;

	},
	searchNextMonth: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		a = JSON.parse($("#start-info").attr("data-startinfo"));

		//{"day":"13","month":"01","year":"2019","end":"31","week":"7","current":{"month":"01","year":"2019"},"next":{"day":"13","month":"01","year":"2019","end":"31"}}

		$("#search-month-prev").attr('onclick','return page.searchPrevMonth();');
		b = new Date(a.year, (a.month - 1), a.day);
		c = ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
		alert(c[ a.month ]);
		$("#search-month-name").html(c[ a.month ]);



	},
	searchChildAge: function() {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		a = $("#search-child").attr('data-id');
		b = $(".a-353");
		c = [];
		for (d=0;d<a;d++) {
			c.push( b.eq(d).val().trim() );
		}
		return c;
	},
	searchTour: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		if ($(a).attr('data-status')==undefined) {
			$(a).attr('data-status','close').find('div').fadeIn(0).end().find('span').fadeOut(0);
			b = {
				'chemodan_search': {
					'from': $("#start-cities").attr('data-id'),
					'to': $("#end-cities").attr('data-id'),
					'start-date': $("#search-date").attr('data-startdate'),
					'end-date': $("#search-date").attr('data-enddate'),
					'night': $("#search-night").attr('data-id'),
					'adult': $("#search-adult").attr('data-id'),
					'child': $("#search-child").attr('data-id'),
					'child_age': page.searchChildAge(),
					'price': $("#search-price").val().trim(),
					'currency': $("#search-currency").attr('data-id'),
					'star': $("#search-star").attr('data-id'),
					'meal': $("#search-meal").attr('data-id')
				}

			};

			$.post('/confidential',b,function(data) {
				$("#search-result").html(data);
				console.log(data);
				$(a).removeAttr('data-status').find('span').fadeIn(0).end().find('div').fadeOut(0);
			});
		}
	},
	selSearchFinalDate: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = $(a).attr('data-day');
		c = $(a).attr('data-month');
		d = $(a).attr('data-year');
		e = JSON.parse($("#start-info").attr('data-startinfo'));
		e.next.day = b;
		e.next.month = c;
		e.next.year = d;
		$(".a-360c").removeClass("a-360c");
		$(a).addClass("a-360c");
		$("#start-info").attr("data-startinfo",JSON.stringify(e));
		$("#search-date").attr('data-enddate',b+"/"+c+"/"+(d-2000)).html($("#search-date").attr('data-startdate')+" - "+b+"/"+c+"/"+(d-2000));
	},
	selSearchDate: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		b = $(a).attr('data-day');
		c = $(a).attr('data-month');
		d = $(a).attr('data-year');
		e = JSON.parse($("#start-info").attr('data-startinfo'));
		e.day = b;
		e.month = c;
		e.year = (d-2000);
		$(".a-360b").removeClass("a-360b");
		$(a).addClass("a-360b");
		$("#start-info").attr("data-startinfo",JSON.stringify(e));
		$("#search-date").attr('data-startdate',b+"/"+c+"/"+(d-2000)).html(b+"/"+c+"/"+(d-2000)+" - "+$("#search-date").attr('data-enddate'));

	},
	searchCalendar: function(a) {
		var a,b,c,d,e,f,g,j,h,i,k,l,m,n,o,p,q,r,s,t,u,v,w,z,y,z;
		$(a).next().fadeIn(0);
	},
	showDropList: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-view');
		if (b === undefined) {
			$(a).attr('data-view','').next().fadeIn(0);
		} else {
			$(a).removeAttr('data-view').next().fadeOut(0);
		}
	},
	dropSel: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-id');
		c = $(a).attr('data-value');
		$(a).parent().parent().find('.a-344').attr('data-id',b).html(c);
		$(a).parent().prev().click();

		d = $(a).parent().prev().attr('id');

		if (d === 'child-size') {
			if (parseInt(b) === 0) {
				$(".a-349").fadeOut(0);
				$("div .a-352").fadeOut(0);
			} else {
				$(".a-349").fadeIn(0);
				$("div .a-352").fadeOut(0);
				if (parseInt(b) === 1) {
					$("div .a-352").eq(0).fadeIn(0);
				} else if (parseInt(b) === 2) {
					$("div .a-352").eq(0).fadeIn(0);
					$("div .a-352").eq(1).fadeIn(0);
				} else if (parseInt(b) === 3) {
					$("div .a-352").eq(0).fadeIn(0);
					$("div .a-352").eq(1).fadeIn(0);
					$("div .a-352").eq(2).fadeIn(0);
				} else if (parseInt(b) === 4) {
					$("div .a-352").eq(0).fadeIn(0);
					$("div .a-352").eq(1).fadeIn(0);
					$("div .a-352").eq(2).fadeIn(0);
					$("div .a-352").eq(3).fadeIn(0);
				}

			}
		}

	},
	showAllHotels: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-295").fadeOut(0);
		a = $(".a-296").html();
		$(".a-293").append(a);
	},
	link: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$("#link").remove();
		$(document.body).append('<a href="'+$(a).attr('href')+'" id="link" style="display: none;">1</a>');
		//$("#link").click();
		//alert($("#link").attr('href'));
		window.location.href = $("#link").attr('href');
	},
	imgSel: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).css('background-image');
		$(".a-283").css('background-image',b);
	},
	mobileView: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-278"><div class="a-281"><div class="a-279"><select class="a-280"><option selected>Алматы</option><option selected>Алматы</option><option selected>Алматы</option><option selected>Алматы</option></select></div><div class="a-279"><select class="a-280"><option selected>Турция</option></select></div></div></div></div>');
	},
	opendFran: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;

	},
	showMenuIn: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$('.a-150').not($(a).find('.a-150')).fadeOut(200);
		$(a).find('.a-150').fadeIn(200);
	},
	scrollTop: function() {
		$('html, body').animate({scrollTop:0},500);
		$(".a-274").fadeOut(200);
	},
	viewSelImg: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).css('background-image');
		$(".a-271").css({'background-image': b});
	},
	viewAllImg: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = JSON.parse($(a).attr('data-id'));
		c = '';
		for (d in b) {
			c += '<div class="a-273" style="background-image: url('+b[d]+')" onclick="return page.viewSelImg(this);"></div>';
		}
		$(document.body).css({'overflow': 'hidden'}).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-118"><div class="a-271" style="background-image: url('+b[0]+')"></div><div class="a-272">'+c+'</div></div></div>');
	},
	commentFull: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-id');
		$(a).parent().find('.txt').html(b);
		$(a).fadeOut(0);
	},
	readyAll: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-265").fadeOut(0);
		$(".a-264").fadeIn(0);
	},
	readFull: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-text');
		$(a).parent().find('.a-54').html(b);
		$(a).fadeOut(0);
	},
	childAge: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = $(".a-268");
		b = a.length;
		c = [];
		for (d=0;d<b;d++) c[d] = parseInt(a.eq(d).val().trim());
		return c;
	},
	saveReadySearch: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($(".a-230").eq(0).val().trim() === '') {
			$(".a-230").eq(0).focus();
			return;
		} else if ($(".a-230").eq(1).val().trim() === '') {
			$(".a-230").eq(1).focus();
			return;
		} else if (!page.validate($(".a-230").eq(1).val().trim())) {
			return $(".a-230").eq(1).css({border:'1px solid red'}).focus();
		}
		b = {
			'from':[$(".a-3a").find('span').attr('data-country'),$(".a-3a").find('span').attr('data-id'),$(".a-3a").find('span').html()],
			'to': [$(".a-3b").find('span').attr('data-country'),$(".a-3b").find('span').html()],
			'date': [$(".a-3c").eq(0).find('span').attr('data-day')+"-"+$(".a-3c").find('span').attr('data-month')+"-"+$(".a-3c").find('span').attr('data-year')],
			'days': [$(".a-3c").eq(1).find('span').attr('data-day'),$(".a-3c").eq(1).find('span').html()],
			'stars': [$(".a-3c").eq(2).find('span').attr('data-star'),$(".a-3c").eq(2).find('span').html()],
			'people': [$(".a-3c").eq(3).find('.adult').attr('data-id'),$(".a-3c").eq(3).find('.child').attr('data-id')],
			'name': $(".a-230").eq(0).val().trim(),
			'phone': $(".a-230").eq(1).val().trim(),
			'child_age': page.childAge(),
			'comment': $(".a-230a").val().trim()
		};

		$.post('/savesearch',b);

		/*
		c = {
			'leads':{
				'name': $(".a-192").eq(0).val().trim(),
				'phone': $(".a-192").eq(1).val().trim(),
				'cities': $(".a-192").eq(2).val().trim(),
				'comment':((window.location.pathname=='/franchise'||window.location.pathname=='/franchise/open')?'Франшиза':'Тур: '+b)+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':0
			}
		};
		$(".a-186").html('<div class="a-193">Спасибо за Вашу заявку! С Вами скоро свяжутся.</div>');
		$.post('https://www.afinadb.kz/ajax.php',c,function(data) {
			console.log(data+"|");
		});
		*/
		c = {
			'leads':{
				'name': $(".a-230").eq(0).val().trim(),
				'phone': $(".a-230").eq(1).val().trim(),
				'city': '',
				'comment':'Подбор тура --- с: '+$(".a-3a").find('span').html()+" - до: "+$(".a-3b").find('span').html()+" --- дата: "+$(".a-3c").eq(0).find('span').attr('data-day')+"/"+$(".a-3c").find('span').attr('data-month')+"/"+$(".a-3c").find('span').attr('data-year')+" --- дней: "+$(".a-3c").eq(1).find('span').html()+" --- звездность: "+$(".a-3c").eq(2).find('span').html()+" --- взрослые: "+$(".a-3c").eq(3).find('.adult').attr('data-id')+" --- дети: "+$(".a-3c").eq(3).find('.child').attr('data-id')+" --- Возрасть детей: "+page.childAge()+" --- Комментарий: "+$(".a-230a").val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"| подбор тура");
		});

		page.closeView();
		$(document.body).css({'overflow':'auto'});
		if ($(".a-218").length === 0) {
			$(document.body).append('<div class="a-218">Ваша заявка в обработке</div>');
		}
		$(".a-218").fadeIn(200);
		setTimeout(function() {
			$(".a-218").fadeOut(200);
		},3000);

	},
	readyGetSearch: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(document.body).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-118"><div class="a-226">В связи с разработкой системы поиска туров, Ваш запрос будет обработан менеджером. Напишите номер телефона, мы свяжемся с вами в течении 15 минут.</div><div class="a-227"></div><div class="a-228"><div class="a-229"><input type="text" class="a-230" placeholder="Ваше имя"></div><div class="a-229"><input type="text" class="a-230" placeholder="Ваш номер"></div><div class="a-229"><textarea class="a-230a" placeholder="Комментарий (*не обязательно)"></textarea></div><div class="a-229"><button class="a-231" onclick="return page.saveReadySearch(this);">Оставить заявку</button></div></div></div></div>');
	},
	infoNextV: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-id');
		$(".a-202").removeClass("a-202");
		$(a).addClass("a-202");
		$(".a-204").fadeOut(0);
		c = $(".a-204");
		for (d=0,e=c.length;d<e;d++) {
			if ($(c).eq(d).attr("data-id") === b) {
				$(c).eq(d).fadeIn(0);
				return;
			}
		}
	},
	buyTour: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-213").fadeIn(200);
	},
	changePicture: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).css('background-image');
		$(".a-197").css({'background-image':b});
	},
	closeModalTour: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-213").fadeOut(200);
	},
	readyTourG: function(b) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = $(".a-216");
		if (a.eq(0).val().trim() === '') {
			a.eq(0).focus();
			return;
		} else if (a.eq(1).val().trim() === '') {
			a.eq(1).focus();
			return;
		} else if (a.eq(2).val().trim() === '') {
			a.eq(2).focus();
			return;
		}
		b = $(b).attr('data-id');
		page.closeView();
		$(document.body).css({'overflow':'auto'});
		if ($(".a-218").length === 0) {
			$(document.body).append('<div class="a-218">Ваша заявка в обработке</div>');
		}
		$(".a-218").fadeIn(200);
		setTimeout(function() {
			$(".a-218").fadeOut(200);
		},3000);
		$.post('/tourget',{'id':b,'name':a.eq(0).val().trim(),'phone':a.eq(1).val().trim(),'city':a.eq(2).val().trim()});
	},
	showFullInfo: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = JSON.parse($(a).attr('data-id'));
		c = '';
		e = JSON.parse(b['img']);
		for (d=0,f=e.length;d<f;d++) c += '<div class="a-199" style="background-image: url('+e[d]+')" onclick="return page.changePicture(this);"></div>';
		g = JSON.parse(b['info']);

		$(document.body).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-118a"><div class="a-213" style="display: none;"><div class="a-119 a-213a" onclick="return page.closeModalTour();"></div><div class="a-214"><div class="a-215"><input type="text" class="a-216" placeholder="Ваше имя"></div><div class="a-215"><input type="text" class="a-216" placeholder="Ваш телефон"></div><div class="a-215"><input type="text" class="a-216" placeholder="Ваш город"></div><div class="a-215"><button id="main_pop_btn" class="a-217" onclick="return page.readyTourG(this);" data-id="'+b['id']+'">Отправить</button></div></div></div><div class="a-195"><div style="float: left;">'+b['desc']+'</div><div class="a-211"><div class="a-212 a-212-'+g['star']+'"></div></div><button class="a-210" onclick="return page.buyTour(this);" data-id="'+b['id']+'">Купить в офисе</button></div><div class="a-196"><div class="a-197" style="background-image: url('+e[0]+')"></div><div class="a-198">'+c+'</div></div> <div class="a-200"><div class="a-201 a-202" onclick="return page.infoNextV(this)" data-id="0">Описание</div><div class="a-201" onclick="return page.infoNextV(this)" data-id="1">Услуги</div><div class="a-201" onclick="return page.infoNextV(this)" data-id="2">Карта</div></div> <div class="a-203"> <div class="a-204" data-id="2"> <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='+g['map'][1]+','+g['map'][0]+'&hl=es;z=14&amp;output=embed"></iframe> </div> <div class="a-204 a-204a" data-id="1"> '+(g['wifi']=='true'?'<div class="a-209a"><div class="a-209"></div><div class="a-209b">WIFI</div></div>':'')+(g['beach']=='true'?'<div class="a-209a"><div class="a-209c"></div><div class="a-209b">Пляж</div></div>':'')+(g['transport']=='true'?'<div class="a-209a"><div class="a-209 a-209d"></div><div class="a-209b">Аренда автомобиля</div></div>':'')+(g['meal']=='true'?'<div class="a-209a"><div class="a-209 a-209e"></div><div class="a-209b">Питание</div></div>':'')+(g['parking']=='true'?'<div class="a-209a"><div class="a-209 a-209d"></div><div class="a-209b">Парковка</div></div>':(g['parking']=='normal'?'<div class="a-209a"><div class="a-209 a-209d"></div><div class="a-209b">Парковка (Частная)</div></div>':''))+' </div> <div class="a-204" data-id="0" style="display: block;"><div class="a-206"><div class="a-207">Цена за человека: <span class="a-208">'+b['price']+' тг</span></div>'+(g['phone']!=''?'<div class="a-207">Телефон: <span class="a-208">'+g['phone']+'</span></div>':'')+(g['email']!=''?'<div class="a-207">Email: <span class="a-208">'+g['email']+'</span></div>':'')+(g['website']!=''?'<div class="a-207">Вебсайт: <span class="a-208">'+g['website']+'</span></div>':'')+(g['distance']!=''?'<div class="a-207">Расстоние до Аэропорта: <span class="a-208">'+g['distance']+'</span></div>':'')+'</div><div class="a-205">'+b['txt']+'</div></div> </div> </div></div>');

		$(document.body).css({'overflow':'hidden'});

	},
	readyTourGet: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = window.location.pathname.split("/");
		b = a[ a.length - 1 ];
		if ($(".a-192").eq(0).val().trim() === '') {
			$(".a-192").eq(0).focus();
			return;
		} else if ($(".a-192").eq(1).val().trim() === '') {
			$(".a-192").eq(1).focus();
			return;
		} else if (!page.validate($(".a-192").eq(1).val().trim())) {
			return $(".a-192").eq(1).css({border:'1px solid red'}).focus();
		}

		/*
		else if ($(".a-192").eq(2).val().trim() === '') {
			$(".a-192").eq(2).focus();
			return;
		}
		*/




		$.post('/reviews',{
				'name': $(".a-192").eq(0).val().trim(),
				'phone': $(".a-192").eq(1).val().trim(),
				'city': $(".a-192").eq(2).val().trim(),
				'comment':'Тур: '+b+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			});
		d = {'/franchise':'Франшиза','/franchise/open':'Франшиза','/booking':'Раннее бронирование турции','/avia':'Авиабилеты','/tours/turkey':'Горящие туры в Турцию','/tours/egypt':'Горящие туры в Египет','/tours/greece':'Горящие туры в Грецию','/tours/uae':'Горящие туры в ОАЭ','/tours/thailand':'Горящие туры в Тайланд','/tours/dominicana':'Горящие туры в Доминикана','/services/club':'Клубный отдых','/services/cruises':'Круизный отдых','/services/hotels':'Подбор отеля','/services/insurance':'Страхование','/services/credit':'Рассрочка','/services/sert':'Подарочный сертификат','/services/bonus':'Бонусная карта','/services/taxi':'Такси в аэропорт','/services/closed':'Ограничение на выезд','/services/pay':'Способ оплаты','/services/educate':'Образавательный тур'};

		c = {
			'leads':{
				'name': $(".a-192").eq(0).val().trim(),
				'phone': $(".a-192").eq(1).val().trim(),
				'city': '',//$(".a-192").eq(2).val().trim(),
				'comment':((window.location.pathname=='/franchise'||window.location.pathname=='/franchise/open')?'Франшиза':'Тур: '+b)+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		$(".a-186").html('<div class="a-193">Спасибо за Вашу заявку! С Вами скоро свяжутся.</div>');
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"|");
		});
	},
	readyTourGetForFranchise: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = window.location.pathname.split("/");
		b = a[ a.length - 1 ];
		if ($(".a-192").eq(0).val().trim() === '') {
			$(".a-192").eq(0).focus();
			return;
		} else if ($(".a-192").eq(1).val().trim() === '') {
			$(".a-192").eq(1).focus();
			return;
		} else if (!page.validate($(".a-192").eq(1).val().trim())) {
			return $(".a-192").eq(1).css({border:'1px solid red'}).focus();
		}

		/*
		else if ($(".a-192").eq(2).val().trim() === '') {
			$(".a-192").eq(2).focus();
			return;
		}
		*/




		$.post('/reviews',{
				'name': $(".a-192").eq(0).val().trim(),
				'phone': $(".a-192").eq(1).val().trim(),
				'city': $(".a-192").eq(2).val().trim(),
				'comment':'Тур: '+b+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			});
		d = {'/franchise':'Франшиза','/franchise/open':'Франшиза','/booking':'Раннее бронирование турции','/avia':'Авиабилеты','/tours/turkey':'Горящие туры в Турцию','/tours/egypt':'Горящие туры в Египет','/tours/greece':'Горящие туры в Грецию','/tours/uae':'Горящие туры в ОАЭ','/tours/thailand':'Горящие туры в Тайланд','/tours/dominicana':'Горящие туры в Доминикана','/services/club':'Клубный отдых','/services/cruises':'Круизный отдых','/services/hotels':'Подбор отеля','/services/insurance':'Страхование','/services/credit':'Рассрочка','/services/sert':'Подарочный сертификат','/services/bonus':'Бонусная карта','/services/taxi':'Такси в аэропорт','/services/closed':'Ограничение на выезд','/services/pay':'Способ оплаты','/services/educate':'Образавательный тур'};

		c = {
			'leads':{
				'name': $(".a-192").eq(0).val().trim(),
				'phone': $(".a-192").eq(1).val().trim(),
				'city': '',//$(".a-192").eq(2).val().trim(),
				'comment':((window.location.pathname=='/franchise'||window.location.pathname=='/franchise/open')?'Франшиза':'Тур: '+b)+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		//$(".a-186").html('<div class="a-193">Спасибо за Вашу заявку! С Вами скоро свяжутся.</div>');
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"|");
		}).done(function(){
			window.location.href = "https://chemodan.kz/thanks-franchise.html";
		});
	},
	readyTourGetOne: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = window.location.pathname.split("/");
		b = a[ a.length - 1 ];
		if ($("#first_name1").val().trim() === '') {
			$("#first_name1").focus();
			return;
		} else if ($("#phone_numberfr1").val().trim() === '') {
			$("#phone_numberfr1").focus();
			return;
		} else if (!page.validate($("#phone_numberfr1").val().trim())) {
			return $("#phone_numberfr1").css({border:'1px solid red'}).focus();
		}

		/*
		else if ($(".a-192").eq(2).val().trim() === '') {
			$(".a-192").eq(2).focus();
			return;
		}
		*/




		$.post('/reviews',{
				'name': $("#first_name1").val().trim(),
				'phone': $("#phone_number1").val().trim(),
				'city': $(".a-192").eq(2).val().trim(),
				'comment':'Тур: '+b+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			});
		d = {'/franchise':'Франшиза','/franchise/open':'Франшиза','/booking':'Раннее бронирование турции','/avia':'Авиабилеты','/tours/turkey':'Горящие туры в Турцию','/tours/egypt':'Горящие туры в Египет','/tours/greece':'Горящие туры в Грецию','/tours/uae':'Горящие туры в ОАЭ','/tours/thailand':'Горящие туры в Тайланд','/tours/dominicana':'Горящие туры в Доминикана','/services/club':'Клубный отдых','/services/cruises':'Круизный отдых','/services/hotels':'Подбор отеля','/services/insurance':'Страхование','/services/credit':'Рассрочка','/services/sert':'Подарочный сертификат','/services/bonus':'Бонусная карта','/services/taxi':'Такси в аэропорт','/services/closed':'Ограничение на выезд','/services/pay':'Способ оплаты','/services/educate':'Образавательный тур'};

		c = {
			'leads':{
				'name': $("#first_name1").val().trim(),
				'phone': $("#phone_number1").val().trim(),
				'email': $("#email1").val().trim(),
				'city': '',//$(".a-192").eq(2).val().trim(),
				'comment':((window.location.pathname=='/franchise'||window.location.pathname=='/franchise/open')?'Франшиза, (запрос от "Остались вопросы?")':'Тур: '+b)+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		//$("#question").html('<div class="a-193" style="margin-top: 40px;">Спасибо за Вашу заявку! С Вами скоро свяжутся.</div>');
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"|");
		}).done(function(){
			window.location.href = "https://chemodan.kz/thanks-franchise.html";
		});
	},
	readyTourGetTwo: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = window.location.pathname.split("/");
		b = a[ a.length - 1 ];
		if ($("#first_name2").val().trim() === '') {
			$("#first_name2").focus();
			return;
		} else if ($("#phone_numberfr2").val().trim() === '') {
			$("#phone_numberfr2").focus();
			return;
		} else if (!page.validate($("#phone_numberfr2").val().trim())) {
			return $("#phone_numberfr2").css({border:'1px solid red'}).focus();
		}

		/*
		else if ($(".a-192").eq(2).val().trim() === '') {
			$(".a-192").eq(2).focus();
			return;
		}
		*/




		$.post('/reviews',{
				'name': $("#first_name2").val().trim(),
				'phone': $("#phone_number2").val().trim(),
				'city': $(".a-192").eq(2).val().trim(),
				'comment':'Тур: '+b+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			});
		d = {'/franchise':'Франшиза','/franchise/open':'Франшиза','/booking':'Раннее бронирование турции','/avia':'Авиабилеты','/tours/turkey':'Горящие туры в Турцию','/tours/egypt':'Горящие туры в Египет','/tours/greece':'Горящие туры в Грецию','/tours/uae':'Горящие туры в ОАЭ','/tours/thailand':'Горящие туры в Тайланд','/tours/dominicana':'Горящие туры в Доминикана','/services/club':'Клубный отдых','/services/cruises':'Круизный отдых','/services/hotels':'Подбор отеля','/services/insurance':'Страхование','/services/credit':'Рассрочка','/services/sert':'Подарочный сертификат','/services/bonus':'Бонусная карта','/services/taxi':'Такси в аэропорт','/services/closed':'Ограничение на выезд','/services/pay':'Способ оплаты','/services/educate':'Образавательный тур'};

		c = {
			'leads':{
				'name': $("#first_name2").val().trim(),
				'phone': $("#phone_number2").val().trim(),
				'email': $("#email2").val().trim(),
				'city': '',//$(".a-192").eq(2).val().trim(),
				'comment':((window.location.pathname=='/franchise'||window.location.pathname=='/franchise/open')?'Франшиза, (запрос от "Получить консультации")':'Тур: '+b)+', cities: '+$(".a-192").eq(2).val().trim(),
				'tour': b,
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		//$("#consultation").html('<div class="a-193" style="margin-top: 40px;">Спасибо за Вашу заявку! С Вами скоро свяжутся.</div>');
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"|");
		}).done(function(){
			window.location.href = "https://chemodan.kz/thanks-franchise.html";
		});
	},
	tourFinish: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#tour-phone").val().trim() === '') {
			$("#tour-phone").focus();
			return;
		} else if ($("#tour-email").val().trim() === '') {
			$("#tour-email").focus();
			return;
		}
		a = {
			'to':$("#to_country_list").html(),
			'from':$("#from_city_list").html(),
			'date':$("#tour_date").val(),
			'start':$("#start_day").val().trim(),
			'end':$("#end_day").val().trim(),
			'adult':$("#adult_list").attr('data-id'),
			'child':$("#child_list").attr('data-id'),
			'start':$("#hotel_stars").attr('data-id'),
			'price':$("#price_amount").attr('data-id'),
			'phone':$("#tour-phone").val().trim(),
			'email':$("#tour-email").val().trim(),
			'tours':$(".a-179").attr('data-id')
		};
		$("#get-tour").html('<div class="a-194">Спасибо за заявку</div>');
		$.post('/franchise',a);
	},
	viewStarList: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#star_list_all").hasClass("show")) {
			$("#star_list_all").removeClass("show");
		} else {
			$("#star_list_all").addClass("show");
		}
	},
	starChange: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$("#hotel_stars").attr("data-id", $(a).attr("data-id") ).html( $(a).html() );
		$("#star_list_all").removeClass("show");
	},
	viewPriceList: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#price_list_all").hasClass("show")) {
			$("#price_list_all").removeClass("show");
		} else {
			$("#price_list_all").addClass("show");
		}
	},
	priceChange: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$("#price_amount").attr("data-id", $(a).attr("data-id") ).html( $(a).html() );
		$("#price_list_all").removeClass("show");
	},
	getTours: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr("data-id");
		if (b == 0) {
			$(a).attr("data-id",1).find(".a-180").html('');
		} else {
			$(a).attr("data-id",0).find(".a-180").html('<div class="a-181"></div>');
		}
	},
	backStep: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-81").fadeIn(0);
		$(".a-81a").fadeOut(0);
	},
	nextStep: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#to_country_list").attr('data-id') === '-') {
			$("#to_all_list").addClass("show");
			return;
		} else if ($("#from_city_list").attr('data-id') === '-') {
			$("#city_all_list").addClass("show");
			return;
		} else if ($("#start_day").val().trim() === '') {
			$("#start_day").focus();
			return;
		} else if ($("#end_day").val().trim() === '') {
			$("#end_day").focus();
			return;
		}
		$(".a-81").fadeOut(0);
		$(".a-81a").fadeIn(0);
	},
	childSel: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$("#child_list").attr("data-id", $(a).attr("data-id") ).html( $(a).html() );
		$("#child_all").removeClass("show");
	},
	viewChild: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#child_all").hasClass("show")) {
			$("#child_all").removeClass("show");
		} else {
			$("#child_all").addClass("show");
		}
	},
	viewAdult: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#adult_all").hasClass("show")) {
			$("#adult_all").removeClass("show");
		} else {
			$("#adult_all").addClass("show");
		}
	},
	adultSel: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$("#adult_list").attr("data-id", $(a).attr("data-id") ).html( $(a).html() );
		$("#adult_all").removeClass("show");
	},
	dateList: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;

	},
	cityList: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#city_all_list").hasClass("show")) {
			$("#city_all_list").removeClass("show");
		} else {
			$("#city_all_list").addClass("show");
		}
		//city_all_list
	},
	toList: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($("#to_all_list").hasClass("show")) {
			$("#to_all_list").removeClass("show");
		} else {
			$("#to_all_list").addClass("show");
		}
	},
	slCityTo: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr("data-id");
		c = $(a).attr("data-country");
		d = $(a).html();
		$("#from_city_list").attr("data-id", b).attr("data-country", c).html(d);
		$("#city_all_list").removeClass("show");
	},
	slCountryTo: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-id');
		c = $(a).html();
		$("#to_country_list").attr('data-id', b).html(c);
		$("#to_all_list").removeClass("show");
	},
	menuBack: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-167").removeClass("a-167a");
	},
	menuSlide: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-id');
		$(".a-168").fadeOut(0);
		$(".a-167").find("[data-id=\""+b+"\"]").fadeIn(0).end().addClass("a-167a");
	},
	stop: function(event) {
		event.preventDefault ? event.preventDefault() : event.returnValue = false;
		event.stopPropagation ? event.stopPropagation() : (event.cancelBubble=true);
		return event;
	},
	menuShow: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($(a).hasClass('mob-h-2a')) {
			$(a).removeClass('mob-h-2a');
		} else {
			$(a).addClass('mob-h-2a');
		}
	},
	weekDay: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if (a === 0) return 7;
		return a;
	},
	monthList: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	prevMonth: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;

		a = new Date($(".a-157").attr("data-year"), ($(".a-157").attr("data-month")-1), $(".a-157").attr("data-day"));//CURRENT DATE
		b = new Date();//REAL DATE
		c = new Date(a.getFullYear(), (a.getMonth()-1), 1);//PREVIOUS MONTH FIRST DAY
		d = new Date(a.getFullYear(), a.getMonth(), 0);//PREVIOUS MONTH LAST DAY



		e = '';
		f = false;
		g = 0;
		j = false;
		h = false;
		for (i=0;i<42;i++) {
			if (((i%7)+1) === page.weekDay(c.getDay())) f = true;
			if (f && (g < d.getDate())) {

				g++;

				if (b.getFullYear() === c.getFullYear() && b.getMonth() === c.getMonth()) {
					if (g < b.getDate() ) {
						e += '<div class="a-163 a-163a">'+g+'</div>';
						continue;
					}
				}

				if (+$(".sel-date").attr("data-day") == g && (+$(".sel-date").attr("data-month")-1) == c.getMonth() && +$(".sel-date").attr("data-year") == c.getFullYear()) h = true; else h = false;

				e += '<div class="a-163 '+(h?'a-163b':'')+'" onclick="return page.selDate(this)" data-day="'+g+'" data-year="'+c.getFullYear()+'" data-month="'+c.getMonth()+'">'+g+'</div>';

			} else e += '<div class="a-163"></div>';
		}

		$(".a-159").html(e);
		$(".a-157").attr("data-day", 1).attr("data-month", c.getMonth()+1).attr("data-year", c.getFullYear()).html(page.monthList[c.getMonth()-1]);
		if (b.getFullYear() === c.getFullYear() && b.getMonth() === c.getMonth()) $(".a-156").removeAttr("onclick");
	},
	nextMonth: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-156").attr("onclick", "return page.prevMonth();");
		a = new Date($(".a-157").attr("data-year"), ($(".a-157").attr("data-month")-1), $(".a-157").attr("data-day"));//CURRENT DATE
		b = new Date(a.getFullYear(), a.getMonth()+2, 0);//NEXT LAST DATE
		c = new Date(a.getFullYear(), a.getMonth()+1, 1);//NEXT FIRST DATE
		e = '';
		f = false;
		g = 0;

		for (d=0;d<42;d++) {
			if (((d%7)+1) === page.weekDay(c.getDay())) f = true;
			if (f && (g < b.getDate())) {

				g++;
				if (+$(".sel-date").attr("data-day") === g && +$(".sel-date").attr("data-month") === (c.getMonth()+1) && +$(".sel-date").attr("data-year") === c.getFullYear()) h = true; else h = false;

				e += '<div class="a-163 '+(h?'a-163b':'')+'" onclick="return page.selDate(this)" data-day="'+g+'" data-year="'+c.getFullYear()+'" data-month="'+c.getMonth()+'">'+g+'</div>';

			} else e += '<div class="a-163"></div>';
		}

		$(".a-159").html(e);
		$(".a-157").attr("data-day", 1).attr("data-month", (+c.getMonth()+1)).attr("data-year", c.getFullYear()).html(page.monthList[c.getMonth()]);

	},
	dateAdditional: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = +$(".additional").attr("data-id");
		if (b === 1) {
			$(".additional").attr("data-id",0).html('+3');
			$(a).find(".a-161").addClass("a-161a");
		} else {
			$(".additional").attr("data-id",1).html('');
			$(a).find(".a-161").removeClass("a-161a");
		}
	},
	call: function() {

		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		window.BinotelGetCall['40384'].openPassiveForm("Хотите, перезвоним Вам за 30 секунд?")
	},
	selDate: function(a) {

		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-163b").removeClass("a-163b");
		$(a).addClass("a-163b");
		b = $(a).attr('data-day');
		c = +$(a).attr('data-month');
		d = $(a).attr('data-year');
		$(a).closest('button').find('.sel-date').attr('data-day', b).attr('data-month', (c+1)).attr('data-year', d).html(page.zer(b)+'.'+c);
	},
	zer: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if (+a <= 9) return '0'+a; else return a;
	},
	childAdd: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = +$(a).prev().html();
		b++;
		if (b != 5) $(".a-266").append('<div class="a-267"><input type="text" class="a-268" value="10" maxlength="2"></div>');
		if (b > 4) b = 4;
		$(a).prev().html(b);
		$(a).closest('button').find('.child').attr('data-id',b).html(b);

	},
	childRemove: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = +$(a).next().html();
		b--;
		c = b;
		if (b < 1) {
			b = 0;
			c = '';
		}
		$(a).next().html(b);
		$(a).closest('button').find('.child').attr('data-id',b).html(c);
		$(".a-267").last().remove();
	},
	adultAdd: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = +$(a).prev().html();
		b++;
		if (b > 4) b = 4;
		$(a).prev().html(b);
		$(a).closest('button').find('.adult').attr('data-id',b).html(b);
	},
	adultRemove: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = +$(a).next().html();
		b--;
		if (b < 1) b = 1;
		$(a).next().html(b);
		$(a).closest('button').find('.adult').attr('data-id',b).html(b);
	},
	selItemStar: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(a).closest('button').find('span').attr('data-star',$(a).html()).html( $(a).html() );
	},
	selItemDay: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(a).closest('button').find('span').attr('data-day', $(a).attr('data-day') ).html( $(a).html()+"-"+(+$(a).attr('data-day')+2) );
	},
	selItem: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(a).closest('button').find('span').attr('data-country', $(a).attr('data-country') ).attr('data-id', $(a).attr('data-id') ).html( $(a).html() );
	},
	selItemTo: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(a).closest('button').find('span').attr('data-country', $(a).attr('data-country') ).html( $(a).html() );
	},
	saveClaim: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(".a-77");
		if (b.eq(0).val().trim() === '') {
			b.eq(0).focus();
			return;
		} else if (b.eq(1).val().trim() === '') {
			b.eq(1).focus();
			return;
		} else if ($(".a-78").val().trim() === '') {
			$(".a-78").focus();
			return;
		} else if (!page.validate(b.eq(1).val().trim())) {
			return b.eq(1).css({border:'1px solid red'}).focus();
		}

		if ($(a).attr('data-status') === 'close') return; else $(a).attr('data-status','close');
		$("#claim").html('<div class="a-149">Ваша жалоба принята в обработку!</div>');
		$.post('/hot',{'name':b.eq(0).val().trim(),'email':b.eq(1).val().trim(),'text':$(".a-78").val().trim()});
		c = {
			'leads':{
				'name': b.eq(0).val().trim(),
				'phone': b.eq(1).val().trim(),
				'city': '',
				'comment':'Жалоба: '+$(".a-78").val().trim(),
				'tour': '/',
				'url':window.location.pathname,
				'type':4,
				'company':0
			}
		};
		$.post('https://afinadb.kz/ajax',c,function(data) {
			console.log(data+"|");
		});
	},
	openFranchise: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(".a-146");
		if (b.eq(0).val().trim() === '') {
			b.eq(0).focus();
			return;
		} else if (b.eq(1).val().trim() === '') {
			b.eq(1).focus();
			return;
		} else if (b.eq(2).val().trim() === '') {
			b.eq(2).focus();
			return;
		} else if (b.eq(3).val().trim() === '') {
			b.eq(3).focus();
			return;
		}
		if ($(a).attr('data-status') === 'close') return; else $(a).attr('data-status','close');
		$.post('/',{'name':b.eq(0).val().trim(),'phone':b.eq(0).val().trim(),'email':b.eq(0).val().trim(),'city':b.eq(0).val().trim()},function(data) {
			$(".a-144, .a-147").remove();
			$(".a-140").append(data);
		});
	},
	franchise: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(document.body).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-118"><div class="a-139a">Открыть Франшизу</div><div class="a-139"></div><div class="a-140"><div class="a-141"></div><div class="a-141 a-142"></div><div class="a-141 a-143"></div><div class="a-144"><div class="a-145"><input type="text" class="a-146" placeholder="Ф.И.О."></div><div class="a-145"><input type="text" class="a-146" placeholder="Телефон"></div><div class="a-145"><input type="text" class="a-146" placeholder="E-mail:"></div><div class="a-145"><input type="text" class="a-146" placeholder="Город открытия офиса:"></div></div><button class="a-147" id="open_franchise" onclick="return page.openFranchise(this);">Отправить</button></div></div></div>');
	},
	closeView: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-117").remove();
		$(document.body).css({'overflow':'auto'});
	},
	viewMap: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-url');
		$(document.body).append('<div class="a-117"><div class="a-119" onclick="return page.closeView();"></div><div class="a-118"><div class="a-120a"><iframe frameborder="no" style="margin: 10px;" width="680" height="430" src="'+b+'"></iframe></div></div></div>');
	},
	claim: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-74").removeClass("a-74a");
		$(".a-80").removeClass("invisible");
		$("#claim").removeClass("invisible");
		$("#get-tour").addClass("invisible");
	},
	getTour: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-74").removeClass("a-74a");
		$(".a-80").removeClass("invisible");
		$("#claim").addClass("invisible");
		$("#get-tour").removeClass("invisible");
	},
	hideBlock: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		$(".a-74").addClass("a-74a");
		$(".a-80").addClass("invisible");
	},
	moveLeft: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = $(".a-30").innerWidth();
		b = $(".a-29").innerWidth();
		c = Number($(".a-29").css('margin-left').slice(0,-2));
		d = (a*4)+4;
		e = c+d;
		if (e>0) e = 0;
		$(".a-29").animate({'margin-left':e+"px"},200);
	},
	moveRight: function() {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		a = $(".a-30").innerWidth();
		b = $(".a-29").innerWidth();
		c = Number($(".a-29").css('margin-left').slice(0,-2));
		d = (a*4)+4;
		e = c-d;
		if (e<(d-b)) e = d-b;
		$(".a-29").animate({'margin-left':e+"px"},200);
	},
	getTourList: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(a).attr('data-info');
		$(".a-15a").removeClass("a-15a");
		$(a).addClass("a-15a");
		$.post('/ajax',{'from':b},function(data) {
			$(".a-16").html(data);
		});
	},
	subscribe: function(a) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		b = $(".a-70");
		c = b.val().trim();
		if (c === '') {
			b.focus();
			return;
		}
		$(".a-69").html('<div class="a-69a">Спасибо за подписку</div>');
		$.post('/contacts',{'email':c});
	},
	input: function(a,event) {
		var a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z;
		if ($(a).val().trim()!=='') {
			$(".a-72").fadeOut(0);
		} else {
			$(".a-72").fadeIn(200);
		}

	}
}
