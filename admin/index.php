<?php 
    include "header.php";
    session_start();
    if($_SESSION['user_type'] != 'admin'){
        header("Location: http://localhost/php_registration_form/admin/not-found.php");
    }
 ?>
<div class="container">
    <div class="row" style="height:80vh;">
        <div class="col table-responsive">
            <table class="table table-secondary table-bordered mt-4">
                <thead>
                    <tr>
                        <th class="bg-danger text-center text-nowrap text-white">Sr. No</th>
                        <th class="bg-danger text-center text-nowrap text-white">Name</th>
                        <th class="bg-danger text-center text-nowrap text-white">Email</th>
                        <th class="bg-danger text-center text-nowrap text-white">Role</th>
                        <th class="bg-danger text-center text-nowrap text-white">Edit/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "config.php";
                        $limit = 13;
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }else{
                            $page = 1;
                        }

                        $offset = ($page - 1 ) * $limit;

                        $query = "SELECT * FROM users LIMIT {$offset}, {$limit}";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <th class="text-center text-nowrap"><?php echo $row['id'] ?></th>
                        <td class="text-center text-nowrap"><?php echo $row['name'] ?></td>
                        <td class="text-center text-nowrap"><?php echo $row['email'] ?></td>
                        <td class="text-center text-nowrap"><?php echo $row['user_typ'] ?></td>
                        <td class="text-center text-nowrap">
                            <a class="me-4" href="update-user.php?id=<?php echo $row['id'] ?>" style="color:#F13E93;cursor:pointer;"><i class="fa-solid fa-edit"></i></a>
                            <a href="delete-user.php?id=<?php echo $row['id'] ?>" style="color:#F13E93;cursor:pointer;"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php 
                          }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <nav>
                <ul class="pagination mt-3">
                    <?php 
                        include "config.php";
                        $query = "SELECT * FROM users";
                        $result = mysqli_query($conn, $query);
                        if($page > 1){
                            echo " <li class='page-item'><a class='page-link' href='index.php?page=" . ($page - 1) . "'>Previous</a></li>";
                        }
                        if(mysqli_num_rows($result) > 0){
                            $totalRecords = mysqli_num_rows($result);
                            $totalPages = ceil($totalRecords/$limit);
                            for($i=1; $i <= $totalPages; $i++){
                                if($i == $page ){
                                    $active = "active";
                                }else{
                                    $active = "";
                                }
                                echo "<li class='page-item $active'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
                            }
                        }
                        if($page < $totalPages){
                            echo " <li class='page-item'><a class='page-link' href='index.php?page=" . ($page + 1) . "'>Next</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>