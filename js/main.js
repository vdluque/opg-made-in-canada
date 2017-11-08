$(document).ready(function() {

	window.my_mute = true;

	$('a.sound-toggle').bind('click', function(){

		$('a.sound-toggle i').toggleClass("fa-volume-off fa-volume-up");

		// $(".nav-el.sound a.sound-toggle span").toggle("slide", {direction: "right"});
		$("html, body").animate({scrollTop: ($(window).scrollTop() + 1)});

	    $('audio,video').each(function(){

	        if (!my_mute ) {

	            if( !$(this).paused ) {
	                $(this).data('muted',true); 
	                $(this).get(0).muted = true; 
	            }

	        } else {

	            if( $(this).data('muted') ) {
	                $(this).data('muted',false);
	                $(this).get(0).muted = false; 
	            }

	        }
	    });

	    my_mute = !my_mute;

	    // console.log(my_mute);

	});

	$(window).on('scroll', function(){

		if($(window).scrollTop() === 0) {
	     	$(".nav-el.sound a.sound-toggle span").show("slide", {direction: "right"});
	   	}else{
	   		$(".nav-el.sound a.sound-toggle span").hide("slide", {direction: "right"});
	   	}

	});

if (/Mobi/.test(navigator.userAgent)) {

	window.my_mute = false;

	console.log("no sfx on mobile");

}else{

	window.my_mute = true;

	console.log("sfx on");

	$(window).on('resize scroll load', function() {

		if ($("#slides2").isInViewport() || $('#breaths-video').isInViewport() || $('#darlington').isInViewport()) {

			$('audio').each(function(){
				$(this).data('muted',true); 
				$(this).get(0).muted = true; 
				console.log("sounds muted");
			});

		}else{

			if (!my_mute ) {
				$('audio').each(function(){
					$(this).data('muted',false); 
					$(this).get(0).muted = false; 
				});

			}
		};

		//audio play on section show
			$(".video-overlay").isInViewport() ? $("#sound_head").get(0).play() : $("#sound_head").get(0).pause();

			$("#intro1").isInViewport() ? $("#sound_1").get(0).play() : $("#sound_1").get(0).pause();

			$(".environment-lb").isInViewport() ? $("#sound_2").get(0).play() : $("#sound_2").get(0).pause();

			$("#intro2").isInViewport() ? $("#sound_3").get(0).play() : $("#sound_3").get(0).pause();

			$(".jobs-lb").isInViewport() ? $("#sound_4").get(0).play() : $("#sound_4").get(0).pause();
				
			$(".partnerships-lb").isInViewport() ? $("#sound_5").get(0).play() : $("#sound_5").get(0).pause();

			$("#intro4").isInViewport() ? $("#sound_7").get(0).play() : $("#sound_7").get(0).pause();

			$("#intro5").isInViewport() ? $("#sound_8").get(0).play() : $("#sound_8").get(0).pause();

			$(".footer").isInViewport() ? $("#sound_footer").get(0).play() : $("#sound_footer").get(0).pause();
		
	});
}

	$(window).on('scroll', function() {

		$(".content").each( function() {

			if ($(this).isInViewport()) {
				$(this).addClass(" inview");
			}else{
				$(this).removeClass("inview");
			}

		});

		$(".intro1").hasClass("inview") ? $("li.environment a").addClass("active") : $("li.environment a").removeClass("active");

		$(".intro2").hasClass("inview") ? $("li.economy a").addClass("active") : $("li.economy a").removeClass("active");

		$(".communities-lb").hasClass("inview") ? $("li.communities a").addClass("active") : $("li.communities a").removeClass("active");

		$(".innovation").hasClass("inview") ? $("li.innovation a").addClass("active") : $("li.innovation a").removeClass("active");

	});


		
		//section nav underlining 

		// var sections = $('content'),
		// 	nav = $('nav'), 
		// 	nav_height = nav.outerHeight();
 
		// $(window).on('scroll', function () {
  // 			var cur_pos = $(this).scrollTop();
 
  // 			sections.each(function() {
	 //    		var top = $(this).offset().top - nav_height,
	 //        	bottom = top + $(this).outerHeight();
	 
	 //    		if (cur_pos >= top && cur_pos <= bottom) {
	 //      			nav.find('a').removeClass('active');
	 //      			sections.removeClass('active');
	 
	 //      			$(this).addClass('active');
	 //      			nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	 //    		}
		// 	});
		// });

	$("html").hasClass("video") ? $("html").removeClass("video") : console.log("html does not have video class");

	//smooth scroll for scroll button 
	function smoothScrollingTo(target){
  		$('html,body').animate({scrollTop:$(target).offset().top}, 500);
	}

	$('a[href*=\\#]').on('click', function(event){     
    	event.preventDefault();
    	smoothScrollingTo(this.hash);
    	// if (this.hasClass("set")) {
    		
    	// }
	});

	$(document).ready(function(){
  		smoothScrollingTo(location.hash);
	});

	//ligthbox modal 
	// var lb_sections = [$('.environment-lb'), $('.jobs-lb')];

	$('.lightbox_trigger').click(function(e) {

			//prevent default action (hyperlink)
			e.preventDefault ? e.preventDefault() : event.returnValue = false;
			
			//Get clicked link href
			var image_href = $(this).attr("href"),
				lbbutton = $(this), 
				lbClass = $(this).parents(".content").attr('class').split(' ')[1],
				lbtext = $(this).find('p').html();
			
			if ($('#lightbox').length > 0) { // #lightbox exists

				if ($('.' + lbClass + ' #lightbox').hasClass("active")) {

					$('.'+ lbClass +' #lightbox').hide("slide", { direction: "right" }, 500);

				}

					//place href as img src value
					setTimeout(function(){
  						$('.' + lbClass + ' #content').html(
							'<div class="lb-image-holder" style="background-image: url('+ image_href +');">' +
							'</div>'+
							// '<img src="' + image_href +'" /></div>' +
							'<div class="lightbox-inner-content">'+ lbtext +'</div>'
						)
					}, 500);

					//show lightbox window
					$('.' + lbClass + ' #lightbox').show("slide", { direction: "right", }, 500 );
					$('.' + lbClass + ' #lightbox').addClass("active");
					lbbutton.parent().addClass("active");
					lbbutton.parent().siblings().removeClass("active");

					console.log(lbClass + " was clicked")
			}
			
			else { //#lightbox does not exist - create and insert (runs 1st time only)
				
				var lightbox = 
				'<div id="lightbox">' +
					'<div id="content">' + //insert clicked link's href into img src
					'<div class="lb-image-holder">' +
					'<img src="' + image_href +'" />' +
					'</div>' +
					'<div class="lightbox-inner-content">'+ lbtext +'</div>' +
					'</div>' +	
					'<button><i class="fa fa-times" aria-hidden="true"></i></button>' +
					'</div>';
					
				//insert lightbox HTML into page
				$('.caption-overlay').append(lightbox);
				console.log("lightbox appended");
			}
			
	});

	//Click button to get rid of lightbox window
	$('#lightbox button').on('click', function() {
		lbClass = $(this).parents(".content").attr('class').split(' ')[1];
		$('.'+ lbClass +' #lightbox').hide("slide", { direction: "right" }, 500);
		$('.'+ lbClass +' #lightbox').removeClass("active");
		$('.lightbox-link').removeClass("active");
	});


	//mobile check for resposive specific js
	if (/Mobi/.test(navigator.userAgent)) {
		//is mobile
		var vids = $(".slider-image"); 
		$.each(vids, function(){
       		this.controls = false; 
		}); 

		$(".click-video .video, .playpause").on("click touch", function(){

			var video,
				className = $(this).attr("class"),
				slide = "";


			if ($(this).parent().hasClass("slides")) {
				if ($(this).hasClass("playpause")) {
					video = $(this).parent().find(".video");
				}else{
					video = $(this);
					// console.log("in slide video clicked" + video);
				}
				slide = $(this).parent().find(".slides-wrap");
			}else{
				video = $(this).parent().find(".video");
				slide = $(this).parent().find(".slides-wrap");
				// console.log("not in slide video clicked" + video);
			}
				
			if (video.hasClass("active")) {
				console.log("pausing video " + className );
				video.removeClass("active");
				video.get(0).pause();
				// $(this).parent().find(".playpause").css("height","100%");
				$(this).parent().find(".playpause").fadeTo(1,1);
				video.removeAttr("controls");
				slide.show();
			}else{
				console.log("playing video " + className + ". slide is:" + slide.attr('class'));
				video.addClass("active");
				video.get(0).play();
				// $(this).parent().find(".playpause").css("height","90%");
				$(this).parent().find(".playpause").fadeTo(1,0);
				// video.attr("controls", "true");
				slide.hide();
			}
		});

	} else {
	//is desktop 
		$(".playpause").on("click", function(){

			var video,
				className = $(this).attr("class"),
				slide = "";


			if ($(this).parent().hasClass("slides")) {
				if ($(this).hasClass("playpause")) {
					video = $(this).parent().find(".video");
				}else{
					video = $(this);
					// console.log("in slide video clicked" + video);
				}
				slide = $(this).parent().find(".slides-wrap");
			}else{
				video = $(this).parent().find(".video");
				slide = $(this).parent().find(".slides-wrap");
				// console.log("not in slide video clicked" + video);
			}
				
			if (video.hasClass("active")) {
				console.log("pausing video " + className );
				video.removeClass("active");
				video.get(0).pause();
				$(this).parent().find(".playpause").css("height","112%");
				$(this).parent().find(".playpause").fadeTo(1,1);
				video.removeAttr("controls");
				slide.show();
			}else{
				console.log("playing video " + className + ". slide is:" + slide.attr('class'));
				video.addClass("active");
				video.get(0).play();
				$(this).parent().find(".playpause").css("height","90%");
				$(this).parent().find(".playpause").fadeTo(1,0);
				video.attr("controls", "true");
				slide.hide();
			}
		});

		// $("video.slider-image").click(function() {
			
		// 	var videoSrc = $(this),
		// 		parent = videoSrc.parent();
		// 		currentVideo = $("#slides2>video");

			
		// 	videoSrc.removeClass("slider-image");
		// 	videoSrc.addClass("click-video");
		// 	currentVideo.addClass("slider-image");
		// 	currentVideo.removeClass("click-video");
		// 	currentVideo.detach();
		// 	videoSrc.detach();
		// 	currentVideo.appendTo(parent);
		// 	videoSrc.prependTo($("#slides2"));
		// });

		// function switchVideo(videoId) {
		// 	var videoSrc = videoId,
		// 		parent = videoSrc.parent();
		// 		currentVideo = parent.find("slides");

		// 	console.log(currentVideo);
		// }

		//video pause/play on scroll
		// $(window).delay(10000).scroll(function() {
		// 	$('.video#video').each(function(){
		// 	    if ($(this).is(":visible")) {
		// 	        $(this).get(0).play();
			        // console.log( className + " is playing");
			    // } else {
			    //     $(this).get(0).pause();
		//    	        // console.log( className + " is paused");
		// 	    }
		// 	})
		// });

	}

	// $('.video').parent().click(function () {
 //    	if( $(this).children(".video").get(0).paused ){
 //        	$(this).children(".video").get(0).play();
 //        	$(this).children(".playpause").fadeOut();
 //        	console.log($(this).attr("class") + " was clicked");
 //    	}else{
 //       		$(this).children(".video").get(0).pause();
 //        	$(this).children(".playpause").fadeIn();
 //        	$(this).children(".playpause").fadeOut();
 //        	console.log($(this).attr("class") + " was clicked");
 //    	}
 //    });

 $('a.sound-toggle').click();

});

$.extend($.lazyLoadXT, {
  edgeY: 3000,
  updateEvent: 'load orientationchange resize scroll',
  loadEvent: "pageshow load orientationchange resize"
});

if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
   document.getElementsByTagName("BODY")[0].className += " safari";       
}

if (navigator.userAgent.search("Windows") >= 0 && navigator.userAgent.search("Chrome") < 0) {
   document.getElementsByTagName("BODY")[0].className += " MSIE";       
}

//mobile nav detection and showing
function showNav() {
	var nav = document.getElementById("mobileNav");
	var icon = document.getElementById('icon');
	if (nav.className === "nav-holder") {
		nav.className += " responsive";
		icon.innerHTML = "&#10005;";
	} else {
	    nav.className = "nav-holder";
	    icon.innerHTML = "&#9776;";
	}
}

$.fn.isInViewport = function() {
	var elementTop = $(this).offset().top;
	var elementBottom = elementTop + $(this).outerHeight();

	var viewportTop = $(window).scrollTop();
	var viewportBottom = viewportTop + $(window).height();

	return elementBottom > viewportTop && elementTop < viewportBottom;
};

function navscroll(nav) {

	var linkId = nav.getAttribute("href"),
		anchor = document.querySelector(linkId),
		scrollText = anchor.parentElement.querySelector('.navlink');

	if (linkId == "#communitiesAnchor") {
		scrollText.style.top = "30vh";
	}else{
		scrollText.style.top = "50vh";
		console.log("link clicked")
	}

}


// var videoEl = document.querySelectorAll(".darlington"), track;

// videoEl.addEventListener("loadedmetadata", function() {
//    track = document.createElement("track");
//    track.kind = "captions";
//    track.label = "English";
//    track.srclang = "en";
//    track.src = "assets/media/video/original-opg_innovation_at_darlington.vtt";
//    track.addEventListener("load", function() {
//       this.mode = "showing";
//       videoEl.textTracks[0].mode = "showing"; // thanks Firefox
//    });
//    this.appendChild(track);
// });

//video switching
function switchVideo(videoId) {
	var video = document.getElementById(videoId),
		parent = video.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement,
		currentVideo = parent.querySelector('.click-video');
		// clickSrc = currentVideo.querySelector("source"),
		// videoSrc = video.querySelector("source");

	// console.log(parent);
	console.log(video);


	// create marker element and insert it where obj1 is
    var temp = document.createElement("div");
    video.parentNode.insertBefore(temp, video);
    video.classList.remove("slider-image");
	video.classList.add("click-video");

    // move obj1 to right before obj2
    currentVideo.parentNode.insertBefore(video, currentVideo);

    // move obj2 to right before where obj1 used to be
    currentVideo.classList.add("slider-image");
	currentVideo.classList.remove("click-video");
    temp.parentNode.insertBefore(currentVideo, temp);

    // remove temporary marker node
    temp.parentNode.removeChild(temp);

    currentVideo.setAttribute("onclick", "switchVideo(this.id)");
	video.setAttribute("onclick", "");
}

function hideslider(video) {
	var slider = video.nextElementSibling;

	console.log(slider);

	if (slider.style.display === "none") {
        slider.style.display = "block";
    } else {
        slider.style.display = "none";
    }

}

//video slider initialization
var mySlider = new Siema({
	perPage: {
		440: 2,
    	768: 2,
    	1025: 3,
  	},
});

var prev = document.querySelector('.prev');
var next = document.querySelector('.next');

prev.addEventListener('click', function() { mySlider.prev() });
next.addEventListener('click', function() { mySlider.next() });


// //Custom Lazy loading 
// function runVisibleObjectAction (){
// 	var els = document.querySelectorAll('.content');

// 	for(var i = 0; i < els.length; i++){
// 		var el = els[i];
// 		if (typeof el.dataset == 'undefined' ){
// 			el.dataset = {
// 				visiblefullheight: el.getAttribute('data-visiblefullheight'),
// 				visiblefullwidth: el.getAttribute('data-visiblefullwidth'),
// 				visibleoffsettop: el.getAttribute('data-offsettop'),
// 				ifvisible: el.getAttribute('data-ifvisible'),
// 				ifnotvisible: el.getAttribute('data-ifnotvisible'),
// 				shapeend: el.getAttribute('data-shapeend'),
// 			};
// 		}
// 		var args  	= {
// 			'fullHeight': el.dataset.visiblefullheight 	== "true" ? true : false,
// 			'fullWidth'	: el.dataset.visiblefullwidth 	== "true" ? true : false,
// 			'offsetTop'		: parseInt(el.dataset.visibleoffsettop) 		|| 0,
// 			'offsetBottom'	: parseInt(el.dataset.visibleoffsetbottom) 	|| 0,
// 		};
// 		if(el.isInViewport(args))
// 			var callback = el.dataset.ifvisible;

// 		else
// 			var callback = el.dataset.ifnotvisible;

// 		var fn = window[callback];
// 		if(typeof fn === 'function') {
// 			fn(el,args);
// 		}else{
// 			var insAr 	= callback.split(".");
// 			var ins 	= new window[insAr[0]];

// 			insAr.shift();
// 			var insMth = insAr.join('.')
// 			if(typeof ins == 'object')
// 				ins[insMth](el,args);
// 		}
// 	}
// }
