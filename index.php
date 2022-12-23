<?php
        include 'assets/header.php';
?>
<div class="container bg-white">
    <?php
    include 'connectdb.php';
    $query = "SELECT * FROM user_table";
    $result = $db -> query($query);
    ?>
    <div class="row" style="margin-top: 30px; margin-bottom: 10px;">
        <div class="col-sm-4">
            <h4>Input Data Mahasiswa</h4>
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="uname" class="text-info">Username:</label>
                    <input type="text" class="form-control" name="uname">
                </div>
                <div class="form-group">
                    <label for="uemail" class="text-info">Email:</label>
                    <input type="email" class="form-control" name="uemail">
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
            </form>
        </div>
        <div class="col-sm-8">
            <h4 width:"100">Data Mahasiswa</h4>
            <table class="table table-striped" width="100">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                //Here we Read the data base from the variable result
                //while (true)
                //fetchArray return false when there is not more elements in the array
                while ($row = $result->fetchArray()) {
                    ?>
                    <tr>
                        <!-- <td>John</td>-->
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['user_email']; ?></td>
                        <td>
                            <a href="update.php?u_id=<?php echo $row['user_id'];?>" class="btn btn-info" role="button">Update</a>
                            <a href="delete.php?u_id=<?php echo $row['user_id'];?>" class="btn btn-danger" role="button">Delete</a>


                        </td>
                    </tr>
                    <?php
                }

                ?>
                <?php
                ?>
                </tbody>
            </table>

        </div>


    </div>

</div>


<?php include 'assets/footer.php' ?>

