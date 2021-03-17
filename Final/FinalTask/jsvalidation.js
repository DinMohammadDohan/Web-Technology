

function getElement(name){
	return document.getElementById(name);
}


function person(){
    
    var hasErr=false;
	var name = getElement("name");
	var address = getElement("address");
	var email = getElement("email");
	var password = getElement("password");
    var telephone = getElement("telephone");
    var superpower = getElement("super");
    
	
	var err_name = getElement("err_name");
	var err_address = getElement("err_address");
	var err_email = getElement("err_email");
	var err_password = getElement("err_password");
    var err_telephone = getElement("err_telephone");
    var err_superpower = getElement("err_super");
	
	
	
	if (isempty(name)) {
        hasErr = true;
        err_name.innerHTML = "*Name can not be empty";
    } 
	else if (checkNumberContains(name)) {
        hasError = true;
        err_name.innerHTML = "Name only accept Alphabets ";
    }
	
	
	
	if (isempty(address)) {
        hasError = true;
        err_address.innerHTML = "*Address can not be empty";
    
    } else if (address.search(" ") > -1) {
        hasError = true;
        err_address.innerHTML = "*No spaces is allowed in Address";
    }
	
    if (isempty(email)) {
        hasError = true;
        err_email.innerHTML = "*Email can not be empty";
    }
	else if (email.search("@") == -1) {
        hasError = true;
        err_email.innerHTML = "Invalid Email format";
    }
	
	
	
	if (isempty(password)) {
        hasError = true;
        err_password.innerHTML = "*Password can not be empty";
    } else if (!password.length==6) {
        hasError = true;
        err_password.innerHTML = "*Password must be 6 characters long";
    }
	
    if (isempty(telephone)) {
        hasError = true;
        err_telephone.innerHTML = "TelePhone can not be empty";
    } 
     else if (parseFloat(contact) != contact) {
        hasError = true;
        err_telePhone.innerHTML = "TelePhone must contain only numbers";
    }
    
    if (isempty(superpower)) {
        hasErr = true;
        err_superpower.innerHTML = "Superpower can not be empty";
	}
	

}

function isempty(str) {
    if (str == "") {
        return true;
    }
    return false;
}