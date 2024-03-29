(function($) {
  'use strict';

  $(function() {
    var $fullText = $('.admin-fullText');
    $('#admin-fullscreen').on('click', function() {
      $.AMUI.fullscreen.toggle();
    });

    $(document).on($.AMUI.fullscreen.raw.fullscreenchange, function() {
      $fullText.text($.AMUI.fullscreen.isFullscreen ? '退出全屏' : '开启全屏');
    });
  });
  $.getUrlParam = function (name) {
      var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
      var r = window.location.search.substr(1).match(reg);
      if (r != null) return unescape(r[2]); return null;
  }

})(jQuery);

function post (url, data, jumpUrl) {
  if (url.indexOf('?') > 0)
  {
    url += '&json=1';
  }
  else
  {
    url += '?json=1';
  }
  $.post(url,data,
        function(data,status){
          result(data, status, jumpUrl);
        });
}

function result(data, status, url){
  var res =  data;//jQuery.parseJSON(data);
  if (status == 'success')
  {
    if (res.ret == 0) 
    {
      $('#success-msg').removeClass('am-alert-danger');
      $('#success-msg').addClass('am-alert-success');
      $('#success-msg').html(res.msg);
      $('#success-msg').fadeIn(2000, function() {
        if (url==null || url==undefined || url=='') 
        {
          location.reload();
        }
        else
        {
          window.location.href = url;
        }
      });
    }
    else 
    {
      $('#success-msg').removeClass('am-alert-success');
      $('#success-msg').addClass('am-alert-danger');
      $('#success-msg').html(res.msg);
      $('#success-msg').fadeIn(1000, function() {
        $('#success-msg').fadeOut(1000);
      });
    }
  }
}

function jumpUrl (url) {
  if (url==null || url==undefined || url=='') 
  {
    window.location.href = '/';
  }
  else
  {
    window.location.href = url;
  }
}
