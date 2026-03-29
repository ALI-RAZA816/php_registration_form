<?php include "header.php" ?>
<div class="container">
    <div class="row" style="height:80vh;">
        <div class="col">
            <table class="table table-secondary table-bordered mt-4">
                <thead>
                    <tr>
                        <th class="bg-danger text-center text-white">Sr. No</th>
                        <th class="bg-danger text-center text-white">Name</th>
                        <th class="bg-danger text-center text-white">Email</th>
                        <th class="bg-danger text-center text-white">Role</th>
                        <th class="bg-danger text-center text-white">Edit/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">1</th>
                        <td class="text-center">Mark</td>
                        <td class="text-center">abcdef@example.com</td>
                        <td class="text-center">Admin</td>
                        <td class="text-center">
                            <a class="me-4" href="" style="color:#F13E93;cursor:pointer;"><i class="fa-solid fa-edit"></i></a>
                            <a href="" style="color:#F13E93;cursor:pointer;"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <nav>
                <ul class="pagination mt-3">
                    <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                    <a class="page-link" href="#" aria-current="page">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>