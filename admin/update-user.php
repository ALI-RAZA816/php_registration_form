<?php include "header.php" ?>
<div class="container">
    <div class="row  d-flex justify-content-center align-items-center" style="height:85vh;">
        <div class="col-md-4 signup px-4">
            <h2 class="text-center" style="color: #F13E93;font-weight:bold;">Update User</h2>
            <?php
                include "config.php";
                $USER_ID = $_GET['id'];
                $query = "SELECT * FROM users WHERE id = {$USER_ID}";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <form action="save-update-post.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                <div>
                    <label class="text-dark" for="firstname">Name:</label>
                    <input type="text" id="name" name="fname" value="<?php echo $row['name'] ?>" class="mb-3 form-control">
                </div>
                <div>
                    <label class="text-dark" for="email">Email:</label>
                    <input type="text" id="email" value="<?php echo $row['email'] ?>" name="email" class="mb-3 form-control">
                </div>
                <div>
                    <label class="text-dark" for="role">Role:</label>
                    <select class="form-select mb-3" id="role" name="role"  aria-label="Default select example">
                        <?php
                        if($row['user_typ'] == 'admin'){
                            echo "<option selected value='admin'>Admin</option>
                                    <option value='user'>User</option>";
                        }else{
                               echo "<option  value='admin'>Admin</option>
                                    <option selected value='user'>User</option>";
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" name="submit" class="mt-2" value="Update">
            </form>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>