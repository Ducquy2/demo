function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

window.onload = function ()
{  
  name = "source";
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS, "gi" );

  var results = regex.exec(window.location.href);
  if(results == null)
    return "";
  else
    createCookie(name,results[1],7);
}