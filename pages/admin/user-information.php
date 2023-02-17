<form action="user-reg-func.php" method="POST" id="">
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name="lastname"
                                    id="lastname"
                                    placeholder="Last Name"
                                    value="<?php echo $rows['lastname']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name="firstname"
                                    id="firstname"
                                    placeholder="First Name"
                                    value="<?php echo $rows['lastname']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Middle Name</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name="middlename"
                                    id="middlename"
                                    placeholder="Middle Name"
                                    value="<?php echo $rows['lastname']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name="email"
                                    id="email"
                                    placeholder="Email Address"
                                    value="<?php echo $rows['lastname']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <input type="date"
                                    class="form-control form-control-sm"
                                    name="dob"
                                    id="dob"
                                    value="<?php echo $rows['lastname']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="">Contact</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name="phone"
                                    id="phone"
                                    placeholder="Contact"
                                    value="<?php echo $rows['lastname']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text"
                                    class="form-control form-control-sm"
                                    name="username"
                                    id="username"
                                    placeholder="Username"
                                    value="<?php echo $rows['lastname']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password"
                                    class="form-control form-control-sm"
                                    name="password"
                                    id="password"
                                    placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password"
                                    class="form-control form-control-sm"
                                    name="re_password"
                                    id="re_password"
                                    placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="form-group text-end">
                                    <input type="submit" name="submit" id="submit" class="btn btn-success btn-sm" value="Create">
                                    <a href="user-list.php" class="btn btn-danger btn-sm" name="" id="" type="button">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </form>