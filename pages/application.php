<?php
include('../includes/header.php');
include('../includes/session.php');

 ?>

<body>
    <div class="container profile profile-view" id="profile">

        <form>
            <div class="form-row profile-row">
                <div class="col-md-4 relative"></div>
                <div class="col-md-8">
                    <h1>Job Application Window</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Firstname </label><input class="form-control" type="text"
                                    name="firstname"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Lastname </label><input class="form-control" type="text"
                                    name="lastname"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Email </label><input class="form-control" type="email"
                            autocomplete="off" required="" name="email"></div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Gender </label><input class="form-control" type="text"
                                    name="gender" autocomplete="off" required=""></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Country</label><input class="form-control" type="text"
                                    name="country" autocomplete="off" required=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Gender </label><input class="form-control" type="text"
                                    name="gender" autocomplete="off" required=""></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Country</label><input class="form-control" type="text"
                                    name="country" autocomplete="off" required=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Gender </label><input class="form-control" type="text"
                                    name="gender" autocomplete="off" required=""></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Country</label><input class="form-control" type="text"
                                    name="country" autocomplete="off" required=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE
                            </button><button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>