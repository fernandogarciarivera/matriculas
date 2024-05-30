var onSignIn = function (googleUser) {
    let profile = googleUser.getBasicProfile();
    auth("login", profile);
}

var signOut = function () {
    //gapi.auth2.getAuthInstance().disconnect();
    let auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        auth("logout");
        window.location.href = "../login";
    });
}

var auth = function (action, profile = null) {
    let data = { UserAction : action };
    if(profile) {
        data = {
            UserName : profile.getGivenName(),
            UserLastName : profile.getFamilyName(),
            UserEmail : profile.getEmail(),
            UserAction : action
        };
    }

    console.log(data);

    $.ajax( {
            type: "POST",
            url: "../users/user.php",
            data: data,
            success: function (data) {
                let user = JSON.parse(data);
                console.log(data);
                if(user.logged) {
                    $('#user_given_name').text( profile.getGivenName());
                    $('#user_last_name').text( profile.getFamilyName());
                    $('#user_email').text( profile.getEmail());
                    $('#user_profile').attr( "src", profile.getImageUrl());

                    if(document.URL === "http://itic.tutoriales.com/google/login/") {
                        window.location.href = "../home";
                    }
                } else {
                    alert("La cuenta no esta registrada");
                    signOut();
                }
            }
        }
    )

}