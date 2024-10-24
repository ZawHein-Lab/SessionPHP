<?php require_once("./storage/sessionStorage.php") ?>

<?php require_once("./layout/header.php") ?>
<h2 class="text-center my-3">Student List</h2>
    <div class="row">
        <div class="col-6">
            <div class="card w-100">
                <img src="./image/bagan.jfif" alt="" style="width:100%; height: 400px">
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Roll Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                        <?php for($i = 0;$i<count($student_list ); $i++) { 
                            //var_dump($_SESSION['data'])  ?>
                            <tr>
                                <td><?= $student_list[$i]["roll"] ?></td>
                                <td><?= $student_list[$i]["name"] ?></td>
                                <td><?= $student_list[$i]["email"] ?></td>
                                <td><?= $student_list[$i]["age"] ?></td>
                                <td>
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                                        <input type="hidden" name="indexNumber" value="<?php echo $i ?>" id="indexNumber">
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name="indexUpdate" value="<?php echo $i ?>" id="indexUpdate">
                                        <button type="submit" name="update" class="btn btn-danger">Update</button>
                                    </form>
                                </td>
                            </tr>
                            <?php }    ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
<?php require_once("./layout/footer.php") ?>