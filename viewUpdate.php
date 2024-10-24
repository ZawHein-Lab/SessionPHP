<?php require_once("./storage/sessionUpdate.php") ?>

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
                    <thhead>
                        <tr>
                            <th>Roll Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <?php foreach($student_list as $key=> $student){?>
                        
                            <tr>
                                <td><?php echo $student["roll"]; ?></td>
                                <td><?php echo $student["name"]; ?></td>
                                <td><?php echo $student["email"]; ?></td>
                                <td><?php echo $student["age"]; ?></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
<?php require_once("./layout/footer.php") ?>