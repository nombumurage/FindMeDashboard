<?php
    error_reporting(0);
    // include header
    include 'header-nav.php';

    $uid = $_GET['uid'];
?>
<p id="uid"><?php echo $uid; ?></p>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">User Profile</h4>
                    </div>
                    <div class="content">
                        <form>
                            <!-- <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="FindMe.Inc">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" id='user_name'>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" id="user_email">
                                    </div>
                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input disabled type="text" class="form-control" placeholder="Company" id="prof_fname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input disabled type="text" class="form-control" placeholder="Last Name" id="prof_lname">
                                    </div>
                                </div>
                            </div>

                           <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input disabled type="text" class="form-control" placeholder="Phone number" id="prof_phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Conditions</label>
                                        <input disabled type="text" class="form-control" placeholder="Other Conditions" id="prof_condition">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <input disabled type="text" class="form-control" placeholder="Blood Group" id="prof_blood">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Med. Allergies</label>
                                        <input disabled type="text" class="form-control" placeholder="Medical Allergies" id="prof_medallergies">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Other Allergies</label>
                                        <input disabled type="text" class="form-control" placeholder="Other Allergies" id="prof_allergies">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h4>Emergency Contacts</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="prof_em1name">User 1</label>
                                        <input disabled type="text" class="form-control" placeholder="Emagency 1" id="prof_em1">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="prof_em2name">User 2</label>
                                        <input disabled type="text" class="form-control" placeholder="Emagency 2" id="prof_em2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="prof_em3name">User 3</label>
                                        <input disabled type="text" class="form-control" placeholder="Emagency 3" id="prof_em3">
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                             <a href="#">
                            <img class="avatar border-gray" src="assets/img/default-avatar.png" alt="..."/>

                              <h4 class="title" id="prof_fullname"><br />
                                 <small class="user_name"></small>
                              </h4>
                            </a>
                        </div>
                        <p class="description text-center"> Email: <span class="user_email"></span> <br></p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
    // include footer
    include 'footer.php';
?>
