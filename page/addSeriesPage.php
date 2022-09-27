<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>ADD SERIES</h4><br>
        <a class="border-0" href="../page/listSeriesPage.php">
            <i style="color: red" class="fa fa-arrow-left fa-2x"></i>
        </a>
    </div>
    <hr>
    <form class="in-line" action="../process/addSeriesProcess.php" method="post" enctype="multipart/form-data">
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Genre</label>
            <div class="col-sm-12 col-md-7" style="font-size: 20px;">
                <label><input type="checkbox" name="genre[]" value="Action">&nbsp&nbsp Action</label><br>
                <label><input type="checkbox" name="genre[]" value="Drama">&nbsp&nbsp Drama</label><br>
                <label><input type="checkbox" name="genre[]" value="Music">&nbsp&nbsp Music</label><br>
                <label><input type="checkbox" name="genre[]" value="Comedy">&nbsp&nbsp Comedy</label><br>
                <label><input type="checkbox" name="genre[]" value="Romance">&nbsp&nbsp Romance</label><br>
                <label><input type="checkbox" name="genre[]" value="Adventure">&nbsp&nbsp Adventure</label><br>
                <label><input type="checkbox" name="genre[]" value="Sport">&nbsp&nbsp Sport</label>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Realease</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="realease" class="form-control">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Episode</label>
            <div class="col-sm-12 col-md-7">
                <input type="number" name="episode" class="form-control">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Season</label>
            <div class="col-sm-12 col-md-7">
                <input type="number" name="season" class="form-control">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Synopsis</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="synopsis" class="form-control">
            </div>
        </div>
        <div class="text-right">
            <button class="btn btn-primary waves-effect" type="submit" name="submit"><i class="fa fa-plus"></i> Tambah</button>
        </div>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>