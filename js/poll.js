function validate(form){
  with(form){
    if (name.value==null || name.value==""){
      alert("Please enter your name");
      name.focus();
      return false;
    } else {
      return true;
    }
  }
}
