document.onload = loadAccountDetails();

$(document).ready(function(){
    var $modal = $('#modal_crop');
    var crop_image = document.getElementById('sample_image');
    var cropper;
    $('#upload_image').change(function(event){
        var files = event.target.files;
        var done = function(url){
            crop_image.src = url;
            $modal.modal('show');
        };
        if(files && files.length > 0)
        {
            reader = new FileReader();
            reader.onload = function(event)
            {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });
    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(crop_image, {
            aspectRatio: 1,
            viewMode: 3,
            preview:'.preview'
        });
    }).on('hidden.bs.modal', function(){
        cropper.destroy();
        cropper = null;
    });
    $('#crop_and_upload').click(function(){
        canvas = cropper.getCroppedCanvas({
            width:400,
            height:400
        });
        canvas.toBlob(function(blob){
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function(){
                var base64data = reader.result; 
                $.ajax({
                    url:'../../backend/uploadProfilePic.php',
                    method:'POST',
                    data:{crop_image:base64data},
                    success:function(data)
                    {
                        $modal.modal('hide'); 
                    }
                }).then(function(){
                    Swal.fire({
                      icon: 'success',
                      title: 'Successful...',
                      text: 'Profile picture updated!'
                  }).then(function(){
                    location.reload();
                })
              });
            };
        });
    });
});

function clickImage(){
    document.getElementById('upload_image').click();
}

function loadAccountDetails(){
    $.ajax({
        url:'../../backend/getProfileDetails.php',
        success:function(result){
            result = JSON.parse(result);
            document.getElementById('profileImg').src = '../../profileImg/' + result[0].pic;
            document.getElementById('fname').value = result[0].first_name;
            document.getElementById('mname').value = result[0].middle_name;
            document.getElementById('lname').value = result[0].last_name;
            document.getElementById('p_email').value = result[0].email;
            document.getElementById('p_cp_number').value = result[0].cp_number;
            document.getElementById('b_date').value = result[0].birthdate;
            document.getElementById('uname').value = result[0].username;
            document.getElementById('gender').value = result[0].gender;
            document.getElementById('status').value = result[0].status;
            document.getElementById('company_name').value = result[0].company_name;
            document.getElementById('company_email').value = result[0].company_email;
            document.getElementById('company_address').value = result[0].company_address;
            document.getElementById('company_number').value = result[0].company_number;
            document.getElementById('elem_school').value = result[0].elem_school;
            document.getElementById('elem_year').value = result[0].elem_year;
            document.getElementById('junior_school').value = result[0].junior_school;
            document.getElementById('junior_year').value = result[0].junior_year;
            document.getElementById('senior_school').value = result[0].senior_school;
            document.getElementById('senior_year').value = result[0].senior_year;
            document.getElementById('senior_course').value = result[0].senior_course;
            document.getElementById('college_school').value = result[0].college_school;
            document.getElementById('college_year').value = result[0].college_year;
            document.getElementById('college_course').value = result[0].college_course;
            document.getElementById('master_school').value = result[0].master_school;
            document.getElementById('master_year').value = result[0].master_year;
            document.getElementById('master_course').value = result[0].master_course;
            document.getElementById('doctor_school').value = result[0].doctor_school;
            document.getElementById('doctor_year').value = result[0].doctor_year;
            document.getElementById('doctor_course').value = result[0].doctor_course;
        }
        
    })
}

function updatePersonalDetails(){

    let fname = document.getElementById('fname').value;
    let mname = document.getElementById('mname').value;
    let lname = document.getElementById('lname').value;
    let email = document.getElementById('p_email').value;
    let cp = document.getElementById('p_cp_number').value;
    let b_date = document.getElementById('b_date').value;
    let uname = document.getElementById('uname').value;
    let gender = document.getElementById('gender').value;
    let status = document.getElementById('status').value;

    $.ajax({
        url:'../../backend/updatePersonalDetails.php',
        method:'post',
        data:{
            fname:fname,
            mname:mname,
            lname:lname,
            email:email,
            cp:cp,
            b_date:b_date,
            uname:uname,
            gender:gender,
            status:status
        },
        success:function(result){
            console.log(result);
            loadAccountDetails();
            loadProfileDetails();
            Swal.fire({
              icon: 'success',
              title: 'Successful...',
              text: 'Personal information updated!'
          })
        }
    })
}

function updateEmploymentDetails(){

    let name = document.getElementById('company_name').value;
    let email = document.getElementById('company_email').value;
    let number = document.getElementById('company_number').value;
    let address = document.getElementById('company_address').value;

    $.ajax({
        url:'../../backend/updateEmploymentDetails.php',
        method:'post',
        data:{
            name:name,
            email:email,
            number:number,
            address:address
        },
        success:function(result){
            console.log(result);
            loadAccountDetails();
            Swal.fire({
              icon: 'success',
              title: 'Successful...',
              text: 'Employment information updated!'
          })
        }
    })
}

function updateEducationalDetails(){

    let elem_school = document.getElementById('elem_school').value;
    let elem_year = document.getElementById('elem_year').value;

    let junior_school = document.getElementById('junior_school').value;
    let junior_year = document.getElementById('junior_year').value;

    let senior_school = document.getElementById('senior_school').value;
    let senior_year = document.getElementById('senior_year').value;
    let senior_course = document.getElementById('senior_course').value;

    let college_school = document.getElementById('college_school').value;
    let college_year = document.getElementById('college_year').value;
    let college_course = document.getElementById('college_course').value;

    let master_school = document.getElementById('master_school').value;
    let master_year = document.getElementById('master_year').value;
    let master_course = document.getElementById('master_course').value;

    let doctor_school = document.getElementById('doctor_school').value;
    let doctor_year = document.getElementById('doctor_year').value;
    let doctor_course = document.getElementById('doctor_course').value;

    $.ajax({
        url:'../../backend/updateEducationalDetails.php',
        method:'post',
        data:{
            elem_school:elem_school,
            elem_year:elem_year,
            junior_school:junior_school,
            junior_year:junior_year,
            senior_school:senior_school,
            senior_year:senior_year,
            senior_course:senior_course,
            college_school:college_school,
            college_year:college_year,
            college_course:college_course,
            master_school:master_school,
            master_year:master_year,
            master_course:master_course,
            doctor_school:doctor_school,
            doctor_year:doctor_year,
            doctor_course:doctor_course
        },
        success:function(result){
            console.log(result);
            loadAccountDetails();
            Swal.fire({
              icon: 'success',
              title: 'Successful...',
              text: 'Educational information updated!'
          })
        }
    })
}

function updatePassword(){

    let old_pass = document.getElementById('old_pass').value;
    let new_pass = document.getElementById('new_pass').value;
    let confirm_pass = document.getElementById('confirm_pass').value;

    if(confirm_pass != new_pass){
        document.getElementById('new_pass').classList.add('border-danger');
        document.getElementById('confirm_pass').classList.add('border-danger');
        document.getElementById('new_pass').value = "";
        document.getElementById('confirm_pass').value = "";
        Swal.fire({
            icon: 'error',
            title: 'Ooops...',
            text: 'Password Mismatched!'
        })
    }else{
        document.getElementById('new_pass').classList.remove('border-danger');
        document.getElementById('confirm_pass').classList.remove('border-danger');

        $.ajax({
            url:'../../backend/verifyPassword.php',
            method:'post',
            data:{
                old_pass:old_pass,
                new_pass:new_pass
            },
            success:function(result){
                console.log(result);
                if(result == 'incorrect'){
                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops...',
                        text: 'Password Incorrect!'
                    })
                }else{
                    Swal.fire({
                        icon: 'success',
                        title: 'Successful...',
                        text: 'Password Updated!'
                    })
                }
            }
        })
    }

}