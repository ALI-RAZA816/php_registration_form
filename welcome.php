<?php 
    include "header.php";
    session_start();
 ?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height:89vh">
        <div class="col-md-4">
            <h2 class="name">Hi,<span class="badge ms-3 text-bg-danger"><?php echo $_SESSION['user_name'] ?></span></h2>
            <span class=" msg badge text-bg-primary">You login successfully</span>
        </div>
    </div>
</div>