function signup(){

//fetching details from various input fields
    //var username = document.getElementById("username").value;
    //var password = document.getElementById("password").value;
    //var firstName = document.getElementById("firstName").value;
    //var lastName = document.getElementById("lastName").value;
    //var college = document.getElementById("college").value;
    //var major = document.getElementById("major").value;
//Checking if input field are null
    if(username == "" || lastName == "" || firstName == "" || password == "" || college == "" || major == ""){
        alert("Please Enter All The Fields");
    }

    else{
//Checking if Username is Email
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username))

        {

// If Username is Email we will begin Signup
// Place relevant server calls here to store the data to database.
        }
        else{
            alert("You have entered an Invalid email address!");

        }
    }
}

function loginPage(){
    location.href = 'login.html';
}
function login(){
//fetching details from login.html page
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
//fetching details from server, write relevant server calls to fetch them
    var serverUsername = "username@g.com";
    var serverPassword = "123456";
// Checking if Fields are empty or not
    if(username == "" || password == ""){
        alert("Please Enter All The Fields");
        location.reload();
    }
    else{

    }

//Checking if Username is Email
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username))
        {
            if(username == serverUsername && password == serverPassword){
// On Successful Authentication call index.html
                location.href = 'Index.html';
                document.getElementById("nameHome").innerHTML = username;
            }

            else{
// If Username doesn't match password
                alert("Invalid Details, Please enter right credentials");
                location.reload();
            }
        }

        else{

// If email/username is not in correct format
            alert("You have entered an Invalid email address!");
            location.reload();
        }
    }
}

function signout(){
// Calling signout.html page as Signout button was clicked
    location.href = 'Sign-Out.html';

}