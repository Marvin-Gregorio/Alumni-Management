
document.onload = loadProfileDetails();

function loadProfileDetails(){
    $.ajax({
        url:'../../backend/getProfileDetails.php',
        success:function(result){
            result = JSON.parse(result);
            document.getElementById('nav_profile').src = '../../profileImg/' + result[0].pic;
        }
        
    })
}