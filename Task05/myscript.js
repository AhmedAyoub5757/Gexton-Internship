
// google process 
//will be using jquery here
function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $("#name").text(profile.getName());
    $("#email").text(profile.getEmail());
    $("#image").attr("src", profile.getImageUrl());
    $(".ui").css("display", "block");
    $(".g-signin2").css("display", "none");
    // console.log('ID: ' + profile.getId()); 
    // console.log('Name: ' + profile.getName());
    // console.log('Image URL: ' + profile.getImageUrl());
    // console.log('Email: ' + profile.getEmail());

}


function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        alert("Are Your Sure You Want To Log Out? Click OK To Proceed");
        $(".g-signin2").css("display", "block");
        $(".ui").css("display", "none");


    });
}
