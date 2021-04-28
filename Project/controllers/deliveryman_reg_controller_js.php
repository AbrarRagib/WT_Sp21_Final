<script>
    function get(id){
		return document.getElementById(id);
	}
	function validate(){
		refresh();
		var hasError=false;
		if(get("name").value == ""){
            get("err_name").innerHTML = "Name Required";
			get("err_name").style.color = "red";
			hasError = true;
		}
		if(get("uname").value == ""){
			get("err_uname").innerHTML = "Username Required";
			get("err_uname").style.color = "red";
			hasError = true;
		}else if(get("uname").value.length<6){
            get("err_uname").innerHTML = "Username must be at least 6 charachters long";
			get("err_uname").style.color = "red";
			hasError = true;
        }else if(get("uname").value.indexOf(" ") > -1){
            get("err_uname").innerHTML = "Username shouldn't have any whitespaces";
			get("err_uname").style.color = "red";
        }

        if(get("pass").value == ""){
			get("err_pass").innerHTML = "Password Required";
			get("err_pass").style.color = "red";
			hasError = true;
		}else if(get("pass").length < 8){
            get("err_pass").innerHTML = "Password must be atleast 8 character long.";
			get("err_pass").style.color = "red";
			hasError = true;
        }else if(get("pass").indexOf(" ") > -1){
            get("err_pass").innerHTML = "Password shouldn't have any whitespaces";
			get("err_pass").style.color = "red";
        }
        
		if(!get("male").checked && !get("female").checked){
			get("err_gender").innerHTML = "Select a gender"
			get("err_gender").style.color = "red";
			hasError = true;
		}

        if(get("email").value == ""){
            get("err_email").innerHTML = "E-mail Required";
			get("err_email").style.color = "red";
			hasError = true;
		}
//isInteger
        if(get("mobile").value == ""){
            get("err_mobile_numb").innerHTML = "Phone Required";
			get("err_mobile_numb").style.color = "red";
			hasError = true;
		}else if(get("mobile").value.isInteger != false){
            get("err_mobile_numb").innerHTML = "Only Numeric Numbers are allowed.";
			get("err_mobile_numb").style.color = "red";
        }
        return !hasError;		
	}

    function refresh(){
		get("err_name").innerHTML = "";
		get("err_uname").innerHTML = "";
		get("err_pass").innerHTML = "";
		get("err_gender").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_mobile_numb").innerHTML = "";
	}

</script>