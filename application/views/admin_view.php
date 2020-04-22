<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mentalQ | Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"> </script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,900&display=swap" rel="stylesheet">
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- sidebar-wrapper -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading list-group-flush"><img src="logo.png" width="80%"></div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action" style="background-color: #f1f1f1;">Consultants</a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color: #f1f1f1;">Patients</a>
            </div>
        </div>
        <!-- /sidebar-wrapper -->

        <!-- Page Content -->
        <div id="main-content">

            <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #f1f1f1;">
                <button class="btn btn-light" id="menu-toggle"><i class="fa fa-bars"></i></button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Nama Admin
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid p-3">
                <!-- consultant-page  -->
                <!-- <div class="header-content mb-3">
                    <span style="font-size: 2rem; font-weight: 600;">Consultants List</span>
                    <button class="btn btn-sm float-right mt-2 btn-add" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Add Consultant</button>
                </div>
                <table id="dataTable" class="display" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Consultant Type</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>tigernix@gmail.com</td>
                            <td>082299102939</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Consultant Type</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table> -->
                <!-- endof consultant-page -->

                <!-- patient-page -->
                <div class="header-content mb-3">
                    <span style="font-size: 2rem; font-weight: 600;">Patients List</span>
                    <table id="dataTable" class="display" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Consultant Type</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($patients as $patient): ?>
                                <tr>
                                    <td><?= $patient->namaPasien ?></td>
                                    <td><?= $patient->email ?></td>
                                    <td><?= $patient->gender ?></td>
                                    <td><?= $patient->alamat ?></td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            <!-- <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>tigernix@gmail.com</td>
                                <td>082299102939</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr> -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Consultant Type</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- endof patient-page -->
            </div>
        </div>
        <!-- /#main-content -->

        <!-- Modal -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-weight: 600;">Add New Consultant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label>STR Number</label>
                                <input type="text" class="form-control" name="strnumber" placeholder="STR Number">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <!-- <div class="custom-control custom-control-inline"> -->
                                    <label>Gender</label>
                                <!-- </div> -->
                                <div class="radio-container custom-control custom-control-inline">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender" value="male">
                                        <label class="custom-control-label">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="gender" value="female">
                                        <label class="custom-control-label">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Consultant Type</label>
                                <input type="text" class="form-control" name="consultantType" placeholder="Consultant Type (Ex: Kids Psyclogist, etc.)">
                            </div>
                            <div class="form-group">
                                <label>Work Place</label>
                                <input type="text" class="form-control" name="workplace" placeholder="Work Place">
                            </div>
                            <div class="form-group">
                                <label>Alumni</label>
                                <input type="text" class="form-control" name="alumni" placeholder="Alumni (Ex: Telkom University, etc.)">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-add">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });

                $("#dataTable").DataTable();
            })
        </script>
    </div>
</body>

</html>