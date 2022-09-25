<?php
include '../component/sidebar.php'

?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>Edit Profile</h4>
        <a class="border-0" href="../page/detailProfilePage.php">
            <i style="color: red" class="fa fa-arrow-left fa-2x"></i>
        </a>
    </div>
    <hr>

    <form class="in-line" action="../process/editProfileProcess.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>">
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="name" class="form-control" value="<?= $_SESSION['user']['name'] ?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Number</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="phonenum" class="form-control" value="<?= $_SESSION['user']['phonenum'] ?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="email" class="form-control" value="<?= $_SESSION['user']['email']; ?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job</label>
            <div class="col-sm-12 col-md-7">
                <select class="form-control" name="job">
                    <option value="College Student">College Student</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Accounting">Accounting</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Membership</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="membership" class="form-control" value="<?= $_SESSION['user']['membership'] ?>" disabled>
            </div>
        </div>
        <div class="text-right">
            <button class="btn btn-success waves-effect" type="submit" name="submit"><i class="fa fa-edit"></i> Save</button>
        </div>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>