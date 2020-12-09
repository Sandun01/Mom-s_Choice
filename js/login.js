
    function validateForm()
	{

        if (document.getElementById('user').value == "user" && document.getElementById('pwd').value == "111")
		{
		
            window.open("userProfile.html");
        }
        else {
            alert("Login was unsuccessful, please check your username and password");
        }
      }
	  
	