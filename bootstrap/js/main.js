
function check() {
    if(document.forms['rform']['pwd'].value ===
            document.forms['rform']['pwd1'].value) {
        document.getElementById('message').innerHTML = "";
    return True;
    } else {
        document.getElementById('message').innerHTML = "Password does not match";
        return False;
    }
}
function validatephn(){
	var x= document.getElementById('validationCustom03').value;
	if(isNaN(x)){
		document.getElementById('validationCustom03').value="";
	}else{
		var pattern=/^\(?([0-9]){10}$/;
		if(pattern.test(x)){
			document.getElementById('message1').innerHTML = "";
		}else{
			document.getElementById('message1').innerHTML = "Phone number is not valid";
		}
	}
}
function clearp(){
	var x= document.getElementById('validationCustom03').value;
	var pattern=/^\(?([0-9]){10}$/;
		if(pattern.test(x)){
			document.getElementById('message1').innerHTML = "";
		}else{
			document.getElementById('message1').innerHTML = "Please enter Correct Phone number";
			document.getElementById('validationCustom03').value="";
			document.getElementById("validationCustom03").focus();

		}
}
function Validate() {
        var password = document.getElementById("pwd").value;
        var confirmPassword = document.getElementById("pwd1").value;
        if (password != confirmPassword) {
            document.getElementById('message').innerHTML = "Password does not match";
            document.getElementById("pwd1").value="";
            document.getElementById("pwd1").focus();
            return false;
        }
        return true;
    }
