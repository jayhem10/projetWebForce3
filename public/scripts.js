$("img").hover(function(){
  $(this).css("background-color", "black");
  }, function(){
  $(this).css("background-color", "purple");
});

$( 'audio' ).audioPlayer({
   classPrefix: 'audioplayer',
   strPlay: 'Play',
   strPause: 'Pause',
   strVolume: 'Volume'
});