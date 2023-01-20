function _registerUser(event) {
    event.preventDefault();
    let name=document.getElementById("name").value;
    let email=document.getElementById("regEmail").value;
    let password=document.getElementById("regPassword").value;
    let address=document.getElementById("address").value;
    let phone=document.getElementById("phone").value;

}

function _numberValidation(event){
    if(event.keyCode===101 || event.keyCode===43){
        return event.preventDefault();
    }
}