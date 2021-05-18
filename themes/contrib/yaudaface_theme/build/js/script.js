  /**** Home Page Animation ****/
  jQuery.noConflict();
  (function($){
	"use strict";
	var controller = new ScrollMagic.Controller();

  /****Featurette Bundle Scroll Animation */
	$('.featurette_bundle_override').each(function(i){
		var featurette_bundle_scroll=new ScrollMagic.Scene({
			triggerElement:this,
			offset: 100, // offset trigger position by 100px;
			triggerHook: "onCenter",
		})
		featurette_bundle_scroll.on('start end', function(){
			$('[data-animate-featurette="On"]').eq(i).find('.featurette-heading').addClass('animated fadeIn');
			$('[data-animate-featurette="On"]').eq(i).find('.lead').addClass('animated fadeInDown');
			$('[data-animate-featurette="On"]').eq(i).find('.featurettes_image').addClass('animated animate__fadeInDown delay-1s');
			$('[data-animate-featurette="On"]').eq(i).find('.hyperlinks').addClass('animated fadeIn delay-2s');
		}) // add class toggle
		controller.addScene(featurette_bundle_scroll);
	});

})(jQuery);

jQuery.noConflict();
(function($){
  jQuery(".knockout-text h1").fitText(.35);

})(jQuery);

jQuery.noConflict();
(function($){
  $(window).on('load resize', function () {
    if ($(this).width() < 640) {
      $('table tfoot').hide();
    } else {
      $('table tfoot').show();
    }
  });
})(jQuery);

/*   "use strict";
console.log(jQuery('.call_to_action_bundle .video_background_YouTube').data('videoid'));
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('cmplayer', {
      height: '390',
      width: '640',
	  videoId: jQuery('.call_to_action_bundle .video_background_YouTube').data('videoid'),
	  playerVars: { 'autoplay': 1, 'playsinline': 1, 'origin':'http://yaudaface.com.test/' },
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
      setTimeout(stopVideo, 6000);
      done = true;
    }
  }
  function stopVideo() {
    player.stopVideo();
  } */