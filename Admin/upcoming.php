<?php include("includes/header.php") ?>

<?php
if (isset($_SESSION["success"])) {
    ?>
    <script type="text/javascript">
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('<?= $_SESSION["success"] ?>');
    </script>
    <?php
    // Clear the session message after displaying it
    unset($_SESSION["success"]);
}
// Danger message
if (isset($_SESSION["danger"])) {
    ?>
    <script type="text/javascript">
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('<?= $_SESSION["danger"] ?>');
    </script>
    <?php
    unset($_SESSION["danger"]);
}
// Warning message
if (isset($_SESSION["warning"])) {
    ?>
    <script type="text/javascript">
        alertify.set('notifier', 'position', 'top-right');
        alertify.warning('<?= $_SESSION["warning"] ?>');
    </script>
    <?php
    unset($_SESSION["warning"]);
}
?>

<div class="card-header">
    <button class="btn" style="background:#c5722b;color:white" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New UpcomingActivities</button>
</div>
<form action="EditCode.php" method="POST">
    <div class="d-flex justify-content-end">
        <button type="submit" name="editUpcomingActivities" class="btn btn-warning me-2">Edit Upcoming</button>
        <button type="submit" name="postUpcomingActivities" class="btn btn-success me-2">Post Upcoming</button>
        <button type="submit" name="unpostUpcomingActivities" class="btn btn-secondary me-2">Unpost Upcoming</button>
        <button type="submit" name="deleteUpcomingActivities" class="btn btn-danger">Delete Upcoming</button>
    </div>
    <div class="card-body mt-2 mb-4 border" style="padding:0 20px">
        <?php
            $admins = mysqli_query($con, "SELECT * FROM `upcoming` ORDER BY  id DESC");
            $i=0;
        ?>
        <div class="table-responsive">
            <table id="myTable_customer" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="position: sticky; left: 0; z-index: 1; background-color: white;"></th>
                        <th style="position: sticky; left: 40px; z-index: 1; background-color: white;">ID</th>
                        <th style="position: sticky; left: 80px; z-index: 1; background-color: white;">Status</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($admins as $admin) : $i++; $id = $admin['id']; $status=$admin['status']; ?>
                    <tr>
                        <td style="position: sticky; left: 0; background-color: white;"><input type="checkbox" name="selected[]" value="<?= $admin['id'] ?>" class="row-select" onchange="toggleEditable(this)"></td>
                        <td style="position: sticky; left: 40px; background-color: white;"><?= $i ?> | <?= $id ?></td>
                        <td style="position: sticky; left: 80px; background-color: white;">
                            <?php
                            if($status=="Posted"){
                                echo "<label style='border-radius:4px;color:white;padding:5px 7px;background:green'>$status</label>";
                            }else{
                                echo "<label style='border-radius:4px;color:white;padding:5px 7px;background:red'>$status</label>";
                            }
                            ?>
                        </td>
                        <td><?= $admin['date'] ?></td>
                        <td><b style="display:none"><?= $admin['title'] ?></b><input type="text" name="title[<?= $admin['id'] ?>]" value="<?= $admin['title'] ?>" class="form-control" style="width:250px" readonly></td>
                        <td><b style="display:none"><?= $admin['description'] ?></b><textarea name="description[<?= $admin['id'] ?>]" class="form-control" style="width:250px" rows="5" readonly><?= $admin['description'] ?></textarea></td>
                        <td class="text-center">
                            <img alt="" src="images/<?php echo $admin['image'] ?>" style="width:70px;height:70px">
                        </td>
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adding UpcomingActivities</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid px-4 mb-4">
                    <form action="EditCode.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect02">Title</label>
                                    <input type="text" name="title" placeholder="Upcoming Title" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group mb-3">
                                    <input type="file" name="image" class="form-control" required>
                                    <label class="input-group-text" for="inputGroupSelect02">Upload Image</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect02">Date(When)</label>
                                    <input type="date" name="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">Description</span>
                                    <textarea class="form-control" name="description" placeholder="Write short description here..." aria-label="With textarea" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="upcomingBtn" class="btn" style="background:#c5722b;color:white">Save UpcomingActivities</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleEditable(checkbox) {
        let row = checkbox.closest('tr');
        let inputs = row.querySelectorAll('input[type="text"], textarea, input[type="file"]');

        inputs.forEach(function(input) {
            if (checkbox.checked) {
                input.removeAttribute('readonly'); // Remove readonly for text/textarea inputs
                input.removeAttribute('disabled'); // Enable file input
            } else {
                input.setAttribute('readonly', 'readonly'); // Add readonly for text/textarea inputs
                input.setAttribute('disabled', 'disabled'); // Disable file input
            }
        });
    }
</script>
<?php include("includes/footer.php") ?>