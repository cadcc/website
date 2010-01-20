$(document).ready(function() {
  
  $.address.change(function(event) {
      if (event.value == '/')
        event.value = 'inicio'

      $('#content').load(event.value + '.html');
      $('#nav2 .current_page_item').removeClass('current_page_item');
      $('#nav2 a[href=#'+event.value+']').parent('li').addClass('current_page_item');
      
      document.title = $('#nav2 .current_page_item a').html() + ' @ CaDCC';
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