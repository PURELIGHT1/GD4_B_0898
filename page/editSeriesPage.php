<?php
include('../db.php');

$id = $_GET['id'];
$series = mysqli_query($con, "SELECT * FROM series WHERE id='$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($series);
$dataGenre = explode(' , ', $data['genre']);
?>
<?php
include '../component/sidebar.php'

?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>Edit Series</h4>
        <a class="border-0" href="../page/listSeriesPage.php">
            <i style="color: red" class="fa fa-arrow-left fa-2x"></i>
        </a>
    </div>
    <hr>

    <form class="in-line" action="../process/editSeriesProcess.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Genre</label>
            <div class="col-sm-12 col-md-7" style="font-size: 20px;">
                <label><input type="checkbox" name="genre[]" value="Action" <?php if (in_array("Action", $dataGenre)) echo "checked"; ?>>&nbsp&nbsp Action</label><br>
                <label><input type="checkbox" name="genre[]" value="Drama" <?php if (in_array("Drama", $dataGenre)) echo "checked"; ?>>&nbsp&nbsp Drama</label><br>
                <label><input type="checkbox" name="genre[]" value="Music" <?php if (in_array("Music", $dataGenre)) echo "checked"; ?>>&nbsp&nbsp Music</label><br>
                <label><input type="checkbox" name="genre[]" value="Comedy" <?php if (in_array("Comedy", $dataGenre)) echo "checked"; ?>>&nbsp&nbsp Comedy</label><br>
                <label><input type="checkbox" name="genre[]" value="Romance" <?php if (in_array("Romance", $dataGenre)) echo "checked"; ?>>&nbsp&nbsp Romance</label><br>
                <label><input type="checkbox" name="genre[]" value="Adventure" <?php if (in_array("Adventure", $dataGenre)) echo "checked"; ?>>&nbsp&nbsp Adventure</label><br>
                <label><input type="checkbox" name="genre[]" value="Sport" <?php if (in_array("Sport", $dataGenre)) echo "checked"; ?>>&nbsp&nbsp Sport</label>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Realease</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="realease" class="form-control" value="<?= $data['realease']; ?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Episode</label>
            <div class="col-sm-12 col-md-7">
                <input type="number" name="episode" class="form-control" value="<?= $data['episode']; ?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Season</label>
            <div class="col-sm-12 col-md-7">
                <input type="number" name="season" class="form-control" value="<?= $data['season'] ?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Synopsis</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" name="synopsis" class="form-control" value="<?= $data['synopsis']; ?>">
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