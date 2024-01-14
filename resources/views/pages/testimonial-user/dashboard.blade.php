<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
    <title>
        Dashboard Admin - INPES
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('dashboard') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('dashboard') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('dashboard') }}/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.7/datatables.min.css" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="">
            <img src="../assets/img/logo.png" class="navbar-brand-img h-100" alt="...">
          </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
          <ul class="navbar-nav">
    
            <li class="nav-item">
                <a class="nav-link {{ request()->is('client') ? 'active' : '' }} " href="client">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(0.000000, 148.000000)">
                                        <path class="color-background" d="M22.5,2.5A20,20,0,1,0,42.5,22.5,20,20,0,0,0,22.5,2.5Zm0,36A16,16,0,1,1,38.5,22.5,16,16,0,0,1,22.5,38.5Zm0-30A14,14,0,1,0,8.5,22.5,14,14,0,0,0,22.5,8.5Zm0,26A12,12,0,1,1,34.5,22.5,12,12,0,0,1,22.5,34.5Zm0-22A10,10,0,1,0,12.5,22.5,10,10,0,0,0,22.5,12.5Z"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                  </div>
                  <span class="nav-link-text ms-1 text-secondary">Pesanan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('testimoni') ? 'active' : '' }} " href="testimoni">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12px" height="12px" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1 text-secondary">Testimoni</span>
                </a>
            </li>
    
          </ul>
        </div>
    
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <form action="{{ route('logout') }}" method="post">@csrf
                    <button type="button" class="btn bg-gradient-primary w-100" id="logout-btn">Keluar</button>
                </form>
    
            </div>
        </div>
    </aside>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
                    </ol>
                    @if (session('userData'))
                        <h6 class="font-weight-bolder mb-0 text-capitalize">
                            Welcome, {{ session('userData')['name'] }}!                                
                        </h6>
                    @endif
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">

                    <div class="ms-md-3 pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        {{-- Dump the Request::path() --}}
                        {{-- {{ dd(Request::path()) }} --}}
                        {{-- <a href="{{ url('/logout')}}" class="nav-link text-body font-weight-bold px-0"> --}}
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none"> Client</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
          
        <div class="container-fluid py-4">
            {{-- Content --}}
            <div class="card mt-5">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('testimoni.create') }}" class="btn btn-md btn-success mb-3">Insert Data</a>
                        <table class="table" id="alldata">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Job</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <th scope="row">{{ $item->name }}</th> 
                                        <th scope="row">{{ $item->job }}</th> 
                                        <th scope="row">{{ \Illuminate\Support\Str::limit($item->message, 12) }}</th>                              
                                        <th>
                                            <form action="{{ route('testimoni.destroy', $item->id) }}" method="post" id="deleteForm{{ $item->id }}">
                                                <a class="btn btn-dark edit" href="{{ route('testimoni.edit', $item->id) }}">
                                                    <i class="material-icons opacity-10">edit</i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-dark delete-btn" onclick="confirmDelete({{ $item->id }})">
                                                    <i class="material-icons opacity-10">delete</i>
                                                </button>
                                                <a href="{{ route('testimoni.show', $item->id) }}" class="btn btn-dark info">
                                                    <i class="material-icons opacity-10">info</i>
                                                </a>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- EndContent --}}

                        
          {{-- modal --}}
            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" id="updateStatus">
                            <div class="modal-body">
                                @csrf
                                <div class="form-floating">
                                    <select class="form-select" id="status" name="status"
                                        aria-label="Floating label select example">
                                        @foreach ($status as $item)
                                            <option value="{{ $item->id }}">{{ $item->status }}</option>
                                        @endforeach
                                    </select>
                                    <label for="status">Ubah Status Layanan</label>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- modal --}}
        </div>
    </main>


    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('dashboard') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('dashboard') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('dashboard') }}/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="{{ asset('dashboard') }}/js/plugins/chartjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <script>
        $('.edit').on('click', function() {
            var id = $(this).data('id');
            $.ajax({
                url: "{{ url('/booking/edit') }}" + '/' + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#edit').modal('show');
                    $('#editLabel').html(data.name);
                    $('#updateStatus').attr('action', "{{ url('/booking/update') }}" + '/' + data.id);

                    $('#status').find('option:selected').prop('selected', false);
                    console.log(data.status.id);
                    $('#status option').each(function() {
                        if ($(this).val() == data.status.id) {
                            $(this).prop('selected', true);
                        }
                    });
                }
            });
        });
    </script>

    {{-- Konfirmasi hapus 2 --}}
    <script>
        function confirmDelete(itemId) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // If the user clicks "Yes" in the confirmation dialog, submit the form
                    document.getElementById('deleteForm' + itemId).submit();
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            // ... your other script code ...

            // Logout button click event
            $('#logout-btn').click(function() {
                showLogoutConfirmation();
            });

            function showLogoutConfirmation() {
                Swal.fire({
                    title: 'Apakah anda yakin ingin keluar?',
                    text: 'Anda akan keluar dari sesi ini',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, keluar!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.value) {
                        // Create a form dynamically and submit it
                        var form = $('<form>', {
                            'method': 'POST',
                            'action': '/logout'
                        });

                        // Add CSRF token field
                        form.append('{{ csrf_field() }}');

                        // Append the form to the body and submit it
                        $('body').append(form);
                        form.submit();
                    }
                });
            }

            // ... your other script code ...
        });
    </script>



    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('dashboard') }}/js/material-dashboard.min.js?v=3.1.0"></script>

    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.7/datatables.min.js"></script>

    <script>
        $('#alldata').DataTable({
            responsive: true
        });
    </script>

    <script>
        // Periksa apakah pengguna telah logout
        const loggedOut = sessionStorage.getItem('logged_out');

        if (loggedOut) {
            // Hapus informasi logout dari session storage
            sessionStorage.removeItem('logged_out');

            // Redirect ke halaman login
            window.location.href = '/login';
        }
    </script>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/fullcalendar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>

    @stack('dashboard')
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
