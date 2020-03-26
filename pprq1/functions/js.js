function validation(){
    var name=document.getElementById("name");
     
    if(name.value==""){
            alert('name is empty');
            name.focus();
            return false;
        }
    var character="/^[a-z]+$/";
    if(!name.value.match(character)){
             alert('name is invalid');
            name.focus();
            return false;
        }
}
