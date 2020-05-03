<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mentalQ | Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"> </script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,900&display=swap" rel="stylesheet">
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- sidebar-wrapper -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading list-group-flush"><img src="<?= base_url('assets/img/LOGO KECIL MENTALQ.png')?>" width="80%"></div>
            <div class="list-group list-group-flush">
                <a href="<?= base_url('admin') ?>" class="list-group-item list-group-item-action <?= $this->uri->segment(2) ? '' : 'active_tab' ?>" style="background-color: #f1f1f1;">Consultants</a>
                <a href="<?= base_url('admin/patients') ?>" class="list-group-item list-group-item-action <?= $this->uri->segment(2) == 'patients' ? 'active_tab' : '' ?>" style="background-color: #f1f1f1;">Patients</a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?= $profile->namaAdmin ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item modal-logout" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- main-content -->
            <div class="container-fluid p-3">
                <?php $this->load->view($main_view) ?>
            </div>
            <!-- main-content -->

        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-weight: 600;"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>STR Number</label>
                                <input type="text" class="form-control strnumber" name="strnumber" placeholder="STR Number">
                                <div id="error-strnumber" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control name" name="name" placeholder="Name">
                                <div id="error-name" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="radio-container custom-control custom-control-inline">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input gender" name="gender" id="male" value="male">
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input gender" name="gender" id="female" value="female">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                                <div id="error-gender" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label>Consultant Type</label>
                                <input type="text" class="form-control consultantType" name="consultantType" placeholder="Consultant Type (Ex: Kids Psyclogist, etc.)">
                                <div id="error-consultantType" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label>Work Place</label>
                                <input type="text" class="form-control workplace" name="workplace" placeholder="Work Place">
                                <div id="error-workplace" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label>Alumni</label>
                                <input type="text" class="form-control alumni" name="alumni" placeholder="Alumni (Ex: Telkom University, etc.)">
                                <div id="error-alumni" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                    </div>
                                    <input type="number" class="form-control phone" name="phone" placeholder="Phone Number">
                                </div>
                                <div id="error-phone" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label class="email">Email</label>
                                <input type="text" class="form-control email" name="email" placeholder="Email">
                                <div id="error-email" class="errormess"></div>
                            </div>
                            <div class="form-group">
                                <label class="password">Password</label>
                                <input type="text" class="form-control password" name="password" placeholder="Password">
                                <div id="error-password" class="errormess"></div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-add btn-modal" value="Save Changes">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });

                function fetchConsultants() {
                    var table = $('#dataTable').DataTable({
                        "ajax": {
                            url : "<?= base_url('admin/fetchConsultants') ?>",
                            type : 'get',
                        },
                        "columnDefs": [ {
                            "targets": 0,
                            "render": function(data) {
                                return "<img src='<?= base_url('assets/img/consultants/') ?>" + data + "' style='width: 50%'>";
                            }
                        }, {
                            "targets": 4,
                            "render": function(data) {
                                return '0' + data;
                            }
                        }, {
                            "targets": 5,
                            "render": function(data) {
                                return "<a href='<?= base_url("admin/detailConsultant/") ?>" + data + "' class='btn btn-info btn-sm detailConsultant'><i class='fa fa-eye'></i></a> <a href='<?= base_url("admin/editConsultant/") ?>" + data + "' class='btn btn-warning btn-sm editConsultant'><i class='fa fa-pencil' style='color:white'></i></a> <a href='<?= base_url("admin/deleteConsultant/") ?>" + data + "' class='btn btn-danger btn-sm deleteConsultant'><i class='fa fa-trash'></i></a>"
                            }
                        } ]
                    });
                }

                function fetchPatients() {
                    var table = $('#dataTable').DataTable({
                        "ajax": {
                            url : "<?= base_url('admin/fetchPatients') ?>",
                            type : 'get',
                        }
                    });
                }

                $('#dataTable tbody').on('click', 'a', function (e) {
                    e.preventDefault();
                    var data =  $('#dataTable').DataTable().row($(this).parents('tr')).data();
                    const URL = this.href;

                    if ($(this).hasClass('detailConsultant') || $(this).hasClass('editConsultant')) {
                        if ($(this).hasClass('detailConsultant')) {
                            $('.modal-title').html('Detail Consultant')
                            $("form :input").prop("disabled", true);
                            $('.btn-modal').hide();
                            $("input[name='password']").attr('type','password');
                        } else {
                            $('.modal-title').html('Edit Consultant');
                            $('form').trigger('reset');
                            $("form :input").prop("disabled", false );
                            $("input[name='password']").attr('type','text');
                            $('.btn-modal').show();
                            $('form').attr('action','<?= base_url('admin/updateConsultant/') ?>' + data[5]);
                            $('form').attr('name','update');
                        }
                        $.ajax({
                            url: URL,
                            dataType: 'json',
                            success: function (res) {
                                $('#modalAdd').modal('show');
                                $("input[name='strnumber']").val(res.noSTR);
                                $("input[name='name']").val(res.namaConsultant);
                                res.gender == 'male' ? $('#male').prop('checked',true) : $('#female').prop('checked',true);
                                $("input[name='consultantType']").val(res.jenisPsikologi);
                                $("input[name='workplace']").val(res.tempatPraktik);
                                $("input[name='alumni']").val(res.alumni);
                                $("input[name='phone']").val(res.noHP);
                                $("input[name='email']").val(res.email);
                                $("input[name='password']").val(res.password);
                            }
                        });
                    }

                    if ($(this).hasClass('deleteConsultant')) {
                        Swal.fire({
                            title: 'Delete Consultant?',
                            text: 'Are you sure to delete ' + data[1] + '?',
                            icon: 'warning',
                            showCancelButton: true,
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.value) {
                                $.ajax({
                                    url: URL,
                                    type: 'ajax',
                                    success: function() {
                                        $('#dataTable').DataTable().destroy();
                                        fetchConsultants();
                                        Swal.fire(
                                            'Deleted!',
                                            'The data has been deleted',
                                            'success'
                                        );
                                    }
                                });
                            }
                        });
                    }
                });
                <?php if ($this->uri->segment(2)): ?>
                    fetchPatients();
                <?php else: ?>
                    fetchConsultants();
                <?php endif ?>

                $('.add-consultant').click(function() {
                    $('.modal-title').html('Add New Consultant')
                    $('form').trigger('reset');
                    $("form :input").prop("disabled", false );
                    $("input[name='password']").attr('type','text');
                    $('.btn-modal').show();
                    $('form').attr('action','<?= base_url('admin/addConsultant') ?>');
                    $('form').attr('name','insert');
                })

                $('.btn-modal').click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: $('form').attr('action'),
                        data: $('form').serialize(),
                        dataType: "json",
                        type: 'post',
                        success: function(data,res) {
                            if (data.status == 'success') {
                                $('#modalAdd').modal('hide');
                                $('#dataTable').DataTable().destroy();
                                fetchConsultants();
                                Swal.fire(
                                    $('form').attr('name') == 'update' ? 'Updated!' : 'Success!',
                                    $('form').attr('name') == 'update' ? 'The data has been updated' : 'Successfully insert consultant!',
                                    'success'
                                );
                            } else {
                                Swal.fire(
                                    'Error!',
                                    "Oops, something wasn't right!",
                                    'error'
                                );
                                $.each(data, function(key, value) {
                                    if (value) {
                                        $('.' + key).addClass('is-invalid');
                                        $('.' + key).parents('.form-group').find('#error-'+key).html(value);
                                        $('.' + key).on('keyup', function () {
                                            $('.' + key).removeClass('is-invalid');
                                            $('.' + key).parents('.form-group').find('#error-' + key).html(" ");
                                        });
                                        $('.gender').click(function() {
                                            $('.gender').removeClass('is-invalid');
                                            $('.gender').parents('.form-group').find('#error-' + key).html(" ");
                                        });
                                    }
                                });
                            }
                        }
                    });
                })
                $('#modalAdd').on('show.bs.modal',function() {
                    $('.form-control').removeClass('is-invalid');
                    $('.gender').removeClass('is-invalid');
                    $('.errormess').html('');
                });

                $('.modal-logout').click(function(e) {
				e.preventDefault();
				Swal.fire({
                    title: 'Logging Out',
                    text: 'Are you sure you want to logout?',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout'
                }).then((result) => {
					if (result.value)
						window.location.replace('<?= base_url('home/logout') ?>');
				});
			});
            })
        </script>
        <style>
            .active_tab {
                color: black;
            }

            /* remove input type number arrow */
            /* Chrome, Safari, Edge, Opera */
                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
                input[type=number] {
                -moz-appearance: textfield;
            }
        </style>
    </div>
</body>

</html>