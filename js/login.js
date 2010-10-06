function popup(url){
  var doc = document;
  // check if we already have a popup displayed
  var popup = doc.getElementById('popup');
  if (popup != null)
    popup.parentNode.removeChild(popup);
  
  
  var page = doc.getElementById('page');
  var div = doc.createElement('div');
  div.id='popup';
  page.insertBefore(div, doc.getElementById('content'));
  div.style.position='relative';
  div.style.cssFloat='right';
  div.style.padding='5px';
  div.style.paddingRight='30px';
  div.style.opacity='0.95';
  div.style.backgroundColor='#c1caf4'; 
  var xhr = new XMLHttpRequest();
  xhr.open("GET", url, false);
  xhr.send();
  div.innerHTML = xhr.responseText;
}

