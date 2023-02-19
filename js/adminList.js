function seeMoreDetails(id){
	console.log(id);

	$.ajax({
        url:'../../backend/getSpecificProfileDetails.php',
        method:'post',
        data:{id:id},
        success:function(result){
            result = JSON.parse(result);
            document.getElementById('fname').innerHTML = result[0].first_name + " ";
            document.getElementById('mname').innerHTML = result[0].middle_name + " ";
            document.getElementById('lname').innerHTML = result[0].last_name;
            document.getElementById('p_email').innerHTML = result[0].email;
            document.getElementById('p_cp_number').innerHTML = result[0].cp_number;
            document.getElementById('b_date').innerHTML = result[0].birthdate;
            document.getElementById('uname').innerHTML = result[0].username;
            document.getElementById('gender').innerHTML = result[0].gender;
            document.getElementById('status').innerHTML = result[0].status;
            document.getElementById('company_name').innerHTML = result[0].company_name;
            document.getElementById('company_email').innerHTML = result[0].company_email;
            document.getElementById('company_address').innerHTML = result[0].company_address;
            document.getElementById('company_number').innerHTML = result[0].company_number;
            document.getElementById('elem_school').innerHTML = result[0].elem_school;
            document.getElementById('elem_year').innerHTML = result[0].elem_year;
            document.getElementById('junior_school').innerHTML = result[0].junior_school;
            document.getElementById('junior_year').innerHTML = result[0].junior_year;
            document.getElementById('senior_school').innerHTML = result[0].senior_school;
            document.getElementById('senior_year').innerHTML = result[0].senior_year;
            document.getElementById('senior_course').innerHTML = result[0].senior_course;
            document.getElementById('college_school').innerHTML = result[0].college_school;
            document.getElementById('college_year').innerHTML = result[0].college_year;
            document.getElementById('college_course').innerHTML = result[0].college_course;
            document.getElementById('master_school').innerHTML = result[0].master_school;
            document.getElementById('master_year').innerHTML = result[0].master_year;
            document.getElementById('master_course').innerHTML = result[0].master_course;
            document.getElementById('doctor_school').innerHTML = result[0].doctor_school;
            document.getElementById('doctor_year').innerHTML = result[0].doctor_year;
            document.getElementById('doctor_course').innerHTML = result[0].doctor_course;
        }
        
    })
}
