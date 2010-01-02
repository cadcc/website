$(document).ready(function() {
  
  // Ultima noticia del Blog
  jQuery.getFeed({
    url: 'http://blog.cadcc.cl/feed/',
    success: function(feed) {
      last = feed.items[0];
      $('#news').html('<div class="post">'+
      	'<div class="post_title"><h1><a href="'+last.link+'">'+last.title+'</a></h1></div>'+
      	'<div class="post_date">hace '+DateHelper.timeAgoInWords(new Date(last.updated))+'</div>'+
      	'<div class="post_body">'+last.description+'</div>'+
      '</div>');
    }
  });
  
  // Ultimos twitts
  jQuery.getJSON('http://twitter.com/statuses/user_timeline/cadcc.json?count=5&callback=?', function (data) {
    $.each(data, function(i, twitt) {
      $('#tweets').append('<p class="tweet">'+twitt.text+'<br /><span class="tweet_date">hace <a href="http://twitter.com/cadcc/status/'+twitt.id+'">'+
      DateHelper.timeAgoInWords(new Date(twitt.created_at))+'</a></span></p>')
    });
  });
});




var DateHelper = {
  timeAgoInWords: function(from) {
   return this.distanceOfTimeInWords(new Date().getTime(), from);
  },

  distanceOfTimeInWords: function(to, from) {
    seconds_ago = ((to  - from) / 1000);
    minutes_ago = Math.floor(seconds_ago / 60);

    if(minutes_ago == 0) { return "menos de un minuto"; }
    if(minutes_ago == 1) { return "un minuto"; }
    if(minutes_ago < 45) { return minutes_ago + " minutos"; }
    if(minutes_ago < 90) { return "como 1 hora"; }
    hours_ago  = Math.round(minutes_ago / 60);
    if(minutes_ago < 1440) { return "como " + hours_ago + " horas"; }
    if(minutes_ago < 2880) { return "1 día"; }
    days_ago  = Math.round(minutes_ago / 1440);
    if(minutes_ago < 43200) { return days_ago + " dias"; }
    if(minutes_ago < 86400) { return "como 1 mes"; }
    months_ago  = Math.round(minutes_ago / 43200);
    if(minutes_ago < 525960) { return months_ago + " meses"; }
    if(minutes_ago < 1051920) { return "como 1 año"; }
    years_ago  = Math.round(minutes_ago / 525960);
    return "over " + years_ago + " años";
  }
}