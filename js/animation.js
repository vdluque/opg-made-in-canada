if ($(window).width() <= 1024) {
    //is mobile

	//Animations - ScrollMagic and TweenMax
	// var controller = new ScrollMagic.Controller();

}else{
	//is desktop

	//Animations - ScrollMagic and TweenMax
	var controller = new ScrollMagic.Controller();

	//nav color change
	// var navScene = new ScrollMagic.Scene({
	// 	triggerElement: '.hero-text h1',
	// 	triggerHook: 'onLeave'
	// }).setTween(".header", 0.5, { backgroundColor: "rgba(255, 255, 255, 0.7)" }, 0.5).addTo(controller);

	// var navScene = new ScrollMagic.Scene({
	// 	triggerElement: '.hero-text h1',
	// 	triggerHook: 'onLeave'
	// }).setTween(".nav-el", 0.5, { color: "black" }).addTo(controller);

	//nav dynamic shrinking
	// var navScene = new ScrollMagic.Scene({
	// 	triggerElement: '.hero-text h1',
	// 	triggerHook: 'onLeave'
	// }).setTween(".header", 0.5, { height: "10vh" }).addTo(controller);

	// var navScene = new ScrollMagic.Scene({
	// 	triggerElement: '.hero-text h1',
	// 	triggerHook: 'onLeave'
	// }).setTween(".nav", 0.5, { top: "-5px" }).addTo(controller);

	//opacity and fade-in text for hero
	var tl = new TimelineLite();

	tl.to(".hero-text", 0.5, {opacity:"1", bottom: "10vh"});

	tl.to(".hero-text", 1, {bottom: "100vh"});

	var navScene = new ScrollMagic.Scene({
		offset: 5,
		// triggerElement: '.hero-text',
		triggerHook: 'onLeave',
		duration: 1500,
		reverse: true
	}).setTween(tl).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '.video-overlay',
		triggerHook: 'onLeave',
		duration: 1500,
		// //offset: -10
	}).setPin('.video-overlay', {pushFollowers: true}).addTo(controller);

	// //var pinScene2 = new ScrollMagic.Scene({
	// //	triggerElement: '.rows',
	// 	//triggerHook: 'onEnter',
	// 	d//uration: 600,
	// 	of//fset: -10
	// }).//setPin('.video-overlay', {pushFollowers: false}).addIndicators({name:'pin-stay'}).addTo(controller);

	//row buttons slide down
	var rows = ["#row1", "#row2", "#row3", "#row4"];

	var slide = new TweenMax.staggerTo(rows, 1, { opacity: 1, top: "0px", ease: Power2.easeInOut, delay:0 }, 0.5);

	var rowShow = new ScrollMagic.Scene({
		triggerElement: '#scroll-trigger',
		triggerHook: 'onEnter'
	}).setTween(slide).addTo(controller);

	//opacity, pinning and fade-in text for intro1
	var introScene = new ScrollMagic.Scene({
		triggerElement: '#intro1',
		triggerHook: 'onLeave',
		duration: 1500,
		reverse: true,
		// offset: 3
	}).setTween(".intro-environment", 1, { top: "-30vh"}).addTo(controller);

	var introScene = new ScrollMagic.Scene({
		triggerElement: '#intro1',
		triggerHook: 'onLeave'
	}).setTween("#intro1 .intro-overlay", 2, {backgroundColor: "rgba(0,0,0,0.7)"}).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '#intro1',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('#intro1', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '#breaths-video',
	//	triggerHook: 'onEnter',
	//	duration: 1500,
	//	//offset: -10
	//}).setPin('#intro1', {pushFollowers: false}).addTo(controller);

	//pinning .content.click-video 
	var pinScene = new ScrollMagic.Scene({
		triggerElement: '#breaths-video',
		triggerHook: 'onLeave',
		duration: 100,
		// offset: 30
	}).setPin('.content.click-video', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '.environment-lb',
	//	triggerHook: 'onEnter',
	//	duration: 600,
	//	//offset: -10
	//}).setPin('.content.click-video', {pushFollowers: false}).addTo(controller);

	//opacity and fade-in text for environment-lb
	var introScene = new ScrollMagic.Scene({
		triggerElement: '.environment-lb',
		triggerHook: 'onLeave'
	}).setTween(".environment-lb .caption-overlay", 2, {backgroundColor: "rgba(0,0,0,0.6)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '.environment-lb',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween(".environment-lb .lightbox-link-holder", 1, { top: "-50vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '.environment-lb',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('.environment-lb', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '#intro2',
	//	triggerHook: 'onEnter',
	//	duration: 1500,
	//	//offset: -10
	//}).setPin('.environment-lb', {pushFollowers: false}).addTo(controller);

	//opacity and fade-in text for intro2
	var introScene = new ScrollMagic.Scene({
		triggerElement: '#intro2',
		triggerHook: 'onLeave'
	}).setTween("#intro2 .intro-overlay", 2, {backgroundColor: "rgba(0,0,0,0.6)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '#intro2',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween("#intro2 .intro-jobs", 1, { opacity: "1", top: "-40vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '#intro2',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('#intro2', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '#slides2',
	//	triggerHook: 'onEnter',
	//	duration: 1500,
	//	//offset: -10
	//}).setPin('#intro2', {pushFollowers: false}).addTo(controller);

	//pinning .content.slides 
	var pinScene = new ScrollMagic.Scene({
		triggerElement: '.content.slides',
		triggerHook: 'onLeave',
		duration: 500,
		//offset: -10
	}).setPin('.content.slides', {pushFollowers: true}).addTo(controller);

	// //var pinScene2 = new ScrollMagic.Scene({
	// //	triggerElement: '.jobs-lb',
	// 	//triggerHook: 'onEnter',
	// 	d//uration: 600,
	// 	of//fset: -10
	// }).//setPin('.content.slides', {pushFollowers: false}).addIndicators({name:'2'}).addTo(controller);


	//opacity and fade-in text for jobs-lb
	var introScene = new ScrollMagic.Scene({
		triggerElement: '.jobs-lb',
		triggerHook: 'onLeave'
	}).setTween(".jobs-lb .caption-overlay", 2, {backgroundColor: "rgba(0,0,0,0.5)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '.jobs-lb',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween(".jobs-lb .lightbox-link-holder", 1, { opacity: "1", top: "-50vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '.jobs-lb',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('.jobs-lb', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '.partnerships-lb',
	//	triggerHook: 'onEnter',
	//	duration: 1500,
	//	//offset: -10
	//}).setPin('.jobs-lb', {pushFollowers: false}).addTo(controller);

	//opacity and fade-in text for partnerships-lb
	var introScene = new ScrollMagic.Scene({
		triggerElement: '.partnerships-lb',
		triggerHook: 'onLeave'
	}).setTween(".partnerships-lb .caption-overlay", 2, {backgroundColor: "rgba(0,0,0,0.5)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '.partnerships-lb',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween(".partnerships-lb .lightbox-link-holder", 1, { opacity: "1", top: "-60vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '.partnerships-lb',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('.partnerships-lb', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '#introNew',
	//	triggerHook: 'onEnter',
	//	duration: 1500,
	//	//offset: -10
	//}).setPin('.partnerships-lb', {pushFollowers: false}).addTo(controller);

	//opacity and fade-in text for introNew
	var introScene = new ScrollMagic.Scene({
		triggerElement: '#introNew',
		triggerHook: 'onLeave'
	}).setTween("#introNew .intro-overlay", 2, {backgroundColor: "rgba(0,0,0,0.6)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '#introNew',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween("#introNew .intro-innovation", 1, { opacity: "1", top: "-60vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '#introNew',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('#introNew', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '.communities-lb',
	//	triggerHook: 'onEnter',
	//	duration: 1500,
	//	//offset: -10
	//}).setPin('#introNew', {pushFollowers: false}).addTo(controller);


	//opacity and fade-in text for communities-lb
	var introScene = new ScrollMagic.Scene({
		triggerElement: '.communities-lb',
		triggerHook: 'onLeave'
	}).setTween(".communities-lb .caption-overlay", 2, {backgroundColor: "rgba(0,0,0,0.5)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '.communities-lb',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween(".communities-lb .lightbox-link-holder", 1, { opacity: "1", top: "0vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '.communities-lb',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('.communities-lb', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '.content.darlington',
	//	triggerHook: 'onEnter',
	//	duration: 1500,
	//	//offset: -10
	//}).setPin('.communities-lb', {pushFollowers: false}).addTo(controller);

	//pinning .content.darlington 
	var pinScene = new ScrollMagic.Scene({
		triggerElement: '.content.darlington',
		triggerHook: 'onLeave',
		duration: 500,
		//offset: -10
	}).setPin('.content.darlington', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '#intro4',
	//	triggerHook: 'onEnter',
	//	duration: 600,
	//	//offset: -10
	//}).setPin('.content.darlington', {pushFollowers: false}).addTo(controller);

	//opacity and fade-in text for intro4
	var introScene = new ScrollMagic.Scene({
		triggerElement: '#intro4',
		triggerHook: 'onLeave'
	}).setTween("#intro4 .intro-overlay", 2, {backgroundColor: "rgba(0,0,0,0.6)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '#intro4',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween("#intro4 .intro-innovation", 1, { opacity: "1", top: "-40vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '#intro4',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('#intro4', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '#intro5',
	//	triggerHook: 'onEnter',
	//	duration: 600,
	//	//offset: -10
	//}).setPin('#intro4', {pushFollowers: false}).addTo(controller);

	//opacity and fade-in text for intro5
	var introScene = new ScrollMagic.Scene({
		triggerElement: '#intro5',
		triggerHook: 'onLeave'
	}).setTween("#intro5 .intro-overlay", 2, {backgroundColor: "rgba(0,0,0,0.6)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '#intro5',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween("#intro5 .intro-satellite", 1, { opacity: "1", top: "-40vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '#intro5',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('#intro5', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '#intro6',
	//	triggerHook: 'onEnter',
	//	duration: 600,
	//	//offset: -10
	//}).setPin('#intro5', {pushFollowers: false}).addTo(controller);

	//opacity and fade-in text for intro6
	var introScene = new ScrollMagic.Scene({
		triggerElement: '#intro6',
		triggerHook: 'onLeave'
	}).setTween("#intro6 .intro-overlay", 2, {backgroundColor: "rgba(0,0,0,0.6)"}).addTo(controller);

	var introJobsScene = new ScrollMagic.Scene({
		triggerElement: '#intro6',
		triggerHook: 'onLeave',
		duration: 1500
	}).setTween("#intro6 .intro-cobalt", 1, { opacity: "1", top: "-40vh" }).addTo(controller);

	var pinScene = new ScrollMagic.Scene({
		triggerElement: '#intro6',
		triggerHook: 'onLeave',
		duration: 1500,
		//offset: -10
	}).setPin('#intro6', {pushFollowers: true}).addTo(controller);

	//var pinScene2 = new ScrollMagic.Scene({
	//	triggerElement: '.content.footer',
	//	triggerHook: 'onEnter',
	//	duration: 600,
	//	//offset: -10
	//}).setPin('#intro6', {pushFollowers: false}).addTo(controller);

	//nav Underlining
	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:"#intro1",
	// 	triggerHook: "onLeave",
	// 	reverse: true,
	// 	//offset: -10
	// }).setTween("li.environment a", .1, {borderBottom: "2px solid black", className:"+=set"}).addTo(controller);

	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:"#intro2",
	// 	triggerHook: "onLeave",
	// 	reverse: true
	// }).setTween("li.environment a", .1, {borderBottom: "none", className:"-=set"}).addTo(controller);

	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:"#intro2",
	// 	triggerHook: "onLeave",
	// 	reverse: true,
	// 	//offset: -10
	// }).setTween("li.economy a", .1, {borderBottom: "2px solid black", className:"+=set"}).addTo(controller);

	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:".communities-lb",
	// 	triggerHook: "onLeave",
	// 	reverse: true,
	// 	//offset: -10
	// }).setTween("li.economy a", .1, {borderBottom: "none", className:"-=set"}).addTo(controller);

	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:".communities-lb",
	// 	triggerHook: "onLeave",
	// 	reverse: true,
	// 	//offset: -10
	// }).setTween("li.communities a", .1, {borderBottom: "2px solid black", className:"+=set"}).addTo(controller);

	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:"#darlington",
	// 	triggerHook: "onLeave",
	// 	reverse: true,
	// 	//offset: -10
	// }).setTween("li.communities a", .1, {borderBottom: "none", className:"-=set"}).addTo(controller);

	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:"#darlington",
	// 	triggerHook: "onLeave",
	// 	reverse: true,
	// 	//offset: -10
	// }).setTween("li.innovation a", .1, {borderBottom: "2px solid black", className:"+=set"}).addTo(controller);

	// var navLine = new ScrollMagic.Scene({
	// 	triggerElement:"#intro5",
	// 	triggerHook: "onLeave",
	// 	reverse: true,
	// 	//offset: -10
	// }).setTween("li.innovation a", .1, {borderBottom: "none", className:"-=set"}).addTo(controller);


}
