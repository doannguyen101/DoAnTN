var players={};$(document).ready(function(){var tag=document.createElement('script');tag.src="http://www.youtube.com/iframe_api";var firstScriptTag=document.getElementsByTagName('script')[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);window.onYouTubeIframeAPIReady=function(){$('.video-youtube.start').each(function(){var $index=$(this).attr('data-index');var $type=$(this).attr('data-ytype');var $ytpid='yt-player-'+$index;var $ytid=$(this).attr('data-yid');var $options={'showinfo':0,'wmode':'transparent','enablejsapi':1};if($type=='list'){$options.listType='playlist'$options.list=$ytid}$(this).attr({id:$ytpid,index:$index}).parent('.item').addClass('loaded');var player=new YT.Player($ytpid,{height:'374',width:'676',videoId:$ytid,playerVars:$options,events:{'onReady':onPlayerReady,'onStateChange':onPlayerStateChange}});window.players[$ytpid]=player;});}window.onPlayerReady=function(event){}window.onPlayerStateChange=function(event){switch(event.data){case YT.PlayerState.PLAYING:$('.carousel-videos').carousel('pause');break;case YT.PlayerState.PAUSED:$('.carousel-videos').carousel('cycle');break;}}window.stopVideo=function(){}$('.carousel-videos').on('slide.bs.carousel',function(e){var $player=$(this).find('.item.active iframe.video-youtube').eq(0);var $ytpid=$player.attr('id');if(typeof players[$ytpid]!=='undefined'){players[$ytpid].pauseVideo();}var $slide=$(e.relatedTarget);var $i=$slide.children('.video-youtube').data('index');});$('.carousel-videos').on('slid.bs.carousel',function(e){var $slide=$(e.relatedTarget);if(!$slide.hasClass('loaded')){$slide.find('.video-youtube').each(function(){var $index=$(this).attr('data-index');var $type=$(this).attr('data-ytype');var $ytpid='yt-player-'+$index;var $ytid=$(this).attr('data-yid');var $options={'showinfo':0,'wmode':'transparent','enablejsapi':1};if($type=='list'){$options.listType='playlist'$options.list=$ytid}$(this).attr({id:$ytpid,index:$index}).parent('.item').addClass('loaded');var player=new YT.Player($ytpid,{height:'425',width:'710',videoId:$ytid,playerVars:$options,events:{'onReady':onPlayerReady,'onStateChange':onPlayerStateChange}});window.players[$ytpid]=player;});$slide.addClass('loaded');}});$('.tab-indicators').find('a[data-toggle="tab"]').on('show.bs.tab',function(e){var tab=$($(e.target).attr('href'));var $slide=tab.find('.carousel-videos').find('.item.active');if(!$slide.hasClass('loaded')){$slide.find('.video-youtube').each(function(){var $index=$(this).attr('data-index');var $type=$(this).attr('data-ytype');var $ytpid='yt-player-'+$index;var $ytid=$(this).attr('data-yid');var $options={'showinfo':0,'wmode':'transparent','enablejsapi':1};if($type=='list'){$options.listType='playlist'$options.list=$ytid}$(this).attr({id:$ytpid,index:$index}).parent('.item').addClass('loaded');var player=new YT.Player($ytpid,{height:'425',width:'710',videoId:$ytid,playerVars:$options,events:{'onReady':onPlayerReady,'onStateChange':onPlayerStateChange}});window.players[$ytpid]=player;});$slide.addClass('loaded')}});});