<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>
    <script type="text/javascript" src="<?php echo base_url() ?>bower_components/moment/min/moment.min.js"></script>
    <!--    <script type="text/javascript" src="-->
    <?php //echo base_url() ?><!--bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
    <script type="text/javascript"
            src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!--    <link rel="stylesheet" href="-->
    <?php //echo base_url() ?><!--bower_components/bootstrap/dist/css/bootstrap.min.css" />-->
    <link rel="stylesheet"
          href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"/>
</head>
<body>
<div class="app" id="app">
    <!--    Sidebar-->
    <?php include 'common/aside.php' ?>
    <!--    Content-->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <!--        Header-->
        <?php include 'common/header.php' ?>
        <div ui-view class="app-body" id="view">
            <!--            Content-->
            <div class="padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header">
                                <h2>New Employee</h2>
                                <small>New employee registration form.
                                </small>
                            </div>
                            <div class="box-divider m-a-0"></div>
                            <div class="box-body">
                                <form role="form" action="<?php echo site_url('New_employee/register'); ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="padding">
                                                <div class="form-group row form-sub-group">
                                                    <small>Login</small>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputUsername" class="col-sm-2 form-control-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputUsername"
                                                               name="username"
                                                               placeholder="Username" value="ivantha">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 form-control-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword"
                                                               name="password"
                                                               placeholder="Password" value="cat">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="box-divider m-a-0"></div>
                                                </div>
                                                <div class="form-group row form-sub-group">
                                                    <small>Personal</small>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputFirstName" class="col-sm-2 form-control-label">First
                                                        name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputFirstName"
                                                               name="firstName"
                                                               placeholder="First name" value="Oshan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputMiddleName" class="col-sm-2 form-control-label">Middle
                                                        name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputMiddleName"
                                                               name="middleName"
                                                               placeholder="Middle name" value="Ivantha">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputLastName" class="col-sm-2 form-control-label">Last
                                                        name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputLastName"
                                                               name="lastName"
                                                               placeholder="Last name" value="Mudannayake">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputDob" class="col-sm-2 form-control-label">Date of
                                                        birth</label>
                                                    <div class="col-sm-10">
                                                        <div class='input-group date' id='datetimepicker'>
                                                            <input type='text' class="form-control" id="inputDob" name="dob"
                                                                   placeholder="Date of birth" value="12/03/1995"/>
                                                            <span class="input-group-addon">
                                                                              <span class="fa fa-calendar"></span>
                                                                              </span>
                                                        </div>

                                                        <!--Move this script out of view-->
                                                        <script type="text/javascript">
                                                            $(function () {
                                                                $('#datetimepicker').datetimepicker({
                                                                    format: 'DD/MM/YYYY',
                                                                    icons: {
                                                                        time: 'fa fa-clock-o',
                                                                        date: 'fa fa-calendar',
                                                                        up: 'fa fa-chevron-up',
                                                                        down: 'fa fa-chevron-down',
                                                                        previous: 'fa fa-chevron-left',
                                                                        next: 'fa fa-chevron-right',
                                                                        today: 'fa fa-screenshot',
                                                                        clear: 'fa fa-trash',
                                                                        close: 'fa fa-remove'
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputGender"
                                                           class="col-sm-2 form-control-label">Gender</label>
                                                    <div class="col-sm-10">
                                                        <div class="radio radio-inline">
                                                            <label class="ui-check ui-check-md">
                                                                <input type="radio" name="gender" value="m" checked="true">
                                                                <i class="dark-white"></i>
                                                                Male
                                                            </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <label class="ui-check ui-check-md">
                                                                <input type="radio" name="gender" value="f">
                                                                <i class="dark-white"></i>
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputNic"
                                                           class="col-sm-2 form-control-label">NIC</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputNic" name="nic"
                                                               placeholder="NIC" value="950722355V">
                                                    </div>
                                                </div>
<!--                                                <div class="form-group row">-->
<!--                                                    <label for="inputProfilePicture"-->
<!--                                                           class="col-sm-2 form-control-label">Profile picture</label>-->
<!--                                                    <div class="col-sm-10">-->
<!--                                                        <input type="file" class="form-control">-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="form-group row m-t-md">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn white">Register</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="padding">
                                                <div class="form-group row form-sub-group">
                                                    <small>Contact</small>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputTelephone" class="col-sm-2 form-control-label">Telephone</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputTelephone"
                                                               name="telephone"
                                                               placeholder="Telephone" value="0719084020">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAddress" class="col-sm-2 form-control-label">Address</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputAddress"
                                                               name="address"
                                                               placeholder="Address" value="Colombo road, Dambokka, Boyagane">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail"
                                                           class="col-sm-2 form-control-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail"
                                                               name="email"
                                                               placeholder="Email" value="oshan.ivantha@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="box-divider m-a-0"></div>
                                                </div>
                                                <div class="form-group row form-sub-group">
                                                    <small>Role</small>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputRole"
                                                           class="col-sm-2 form-control-label">Role</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control c-select" name="role">
                                                            <option value="doctor">Doctor</option>
                                                            <option value="receptionist">Receptionist</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Foot-->
<?php include 'common/foot.php' ?>
</body>
</html>