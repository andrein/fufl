var counter = 1;

function addOption(){
  //get the poll form
  var form = document.getElementById("options");
  //create the new poll option
  var option = document.createElement("input");
  option.setAttribute("type", "input");
  option.setAttribute("name", "option" + counter);
  option.setAttribute("class", "submit");
  option.setAttribute("value", "Option " + counter);
  var remove = document.createElement("input");
  remove.setAttribute("type", "button");
  remove.setAttribute("name", "option" + counter);
  remove.setAttribute("value", "Remove");
  remove.setAttribute("onClick", "removeOption(" +  counter + ")");
  var div = document.createElement("div");
  div.setAttribute("id", counter);
  //add the option to the form
  div.appendChild(option);
  div.appendChild(remove);
  form.appendChild(div);

  
  counter++;
}

function removeOption( num ){
  var option = document.getElementById(num);
  option.parentNode.removeChild(option);
}
