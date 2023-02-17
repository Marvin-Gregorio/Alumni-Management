<form action="view-alumni.php" method="" id="mypdf">

<div class="form-group mb-2">
    <div class="row">
        <div class="col-md-2">
            <label for="">Last Name<span class="mx-1" style="color:red;">*</span></label>
            <input type="text" name="" class="form-control form-control-sm" value="<?=$row['lastname']; ?>">
        </div>
        <div class="col-md-2">
            <label for="">First Name<span class="mx-1" style="color:red;">*</span></label>
            <input type="text" class="form-control form-control-sm" value="<?=$row['email'] ?>" placeholder="First Name">
        </div>
        <div class="col-md-2">
            <label for="">Middle Name<span class="mx-1" style="color:red;">*</span></label>
            <input type="text" class="form-control form-control-sm" value="<?=$row['email'] ?>" placeholder="Middle Name">
        </div>
    </div>
</div>
<div class="form-group mb-2">
    <div class="row">
        <div class="col-md-1">
            <label for="">Civil Status<span class="mx-1" style="color:red;">*</span></label>
            <select name="" id="" class="form-select form-select-sm">
                <option selected>...</option>
                <option value="">Single</option>
                <option value="">Married</option>
                <option value="">Widow/Widower</option>
            </select>
        </div>
        <div class="col-md-1">
            <label for="">Gender<span class="mx-1" style="color:red;">*</span></label>
            <select name="" id="" class="form-select form-select-sm">
                <option selected>...</option>
                <option value="">Male</option>
                <option value="">Female</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="">Date of Birth<span class="mx-1" style="color:red;">*</span></label>
            <input type="date" class="form-control form-control-sm" value="date">
        </div>
    </div>
</div>
<div class="form-group mb-2">
    <div class="row">
        <div class="col-md-1">
            <label for="">Contact No.<span class="mx-1" style="color:red;">*</span></label>
            <input type="text" class="form-control form-control-sm" value="<?=$row['email'] ?>" placeholder="contact no.">
        </div>
        <div class="col-md-2">
            <label for="">Email Address<span class="mx-1" style="color:red;">*</span></label>
            <input type="text" class="form-control form-control-sm" value="<?=$row['emailaddr'] ?>" placeholder="email address">
        </div>
        <div class="col-md-2">
            <label for="">Address<span class="mx-1" style="color:red;">*</span></label>
            <input type="text" class="form-control form-control-sm" value="<?=$row['email'] ?>" placeholder="Address">
        </div>
    </div>
</div>
&nbsp;
<div class="form-group mb-2">
    <div class="row">
        <div class="col-md-4">
            <span><b>BASIC EDUCATION</b></span>
            <form action="" method="">
                <div class="row">
                    <div class="col-md-4">
                        <select name="" id="" class="form-select form-select-sm">
                            <option selected>Choose Grade Level</option>
                            <option value="">Elementary</option>
                            <option value="">Junior High School</option>
                            <option value="">Senior Highschool</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-sm" placeholder="Year Graduated">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <span><b>COLLEGE</b></span>
            <form action="" method="">
                <div class="row">
                    <div class="col-md-4">
                        <select name="" id="" class="form-select form-select-sm">
                            <option selected>Choose Grade Level</option>
                            <option value="">Elementary</option>
                            <option value="">Junior High School</option>
                            <option value="">Senior Highschool</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-sm" placeholder="Year Graduated">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="form-group mb-2">
    <div class="row">
        <div class="col-md-4">
            <span><b>GRADUATE SCHOOL</b></span>
            <form action="">

                <div class="row">
                    <div class="col-md-3">
                        <select name="" id="" class="form-select form-select-sm">
                            <option selected>choose</option>
                            <option value="">Masteral</option>
                            <option value="">Doctorate</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select name="" id="" class="form-select form-select-sm">
                            <option selected>choose course</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control form-control-sm" placeholder="Year" min="1900" max="2030">
                        <script>
                            document.querySelector("input[type=number]")
                            .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                        </script>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="form-group mb-2">
    <div class="row">
        <span><b>EMPLOYMENT STATUS</b></span>
        <form action="">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <label for="">Name of Organization / Company:</label>
                        <input type="text" value="<?=$row['email'] ?>" class="form-control form-control-sm">
                    </div>
                    <div>
                        <label for="">Organization / Company Address:</label>
                        <input type="text" value="<?=$row['email'] ?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <label for="">Contact Number:</label>
                        <input type="text" value="<?=$row['email'] ?>" class="form-control form-control-sm">
                    </div>
                    <div>
                        <label for="">Email Address:</label>
                        <input type="text" value="<?=$row['email'] ?>" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <input type="text" name="id"value="<?=$row['id']?>"hidden >
        </form>
    </div>
</div>

</form>