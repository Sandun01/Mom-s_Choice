
    function validateForm()
	{

        if (document.getElementById('user').value == "admin" && document.getElementById('pwd').value == "123")
		{
		
            window.location("AdminDashboard.html");
        }
        else {
            alert("Login was unsuccessful, please check your username and password");
        }
      }
	  
	