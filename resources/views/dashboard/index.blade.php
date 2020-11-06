<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon_logo.png') }}">
    <title>CA Admin | Techfest</title>

    <!-- Bootstrap CSS CDN -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Techfest</h3>
            </div>

            <ul class="list-unstyled components">

                <li class="active">
                    <a href="{{ route('dashboard') }}">CA</a>
                </li>
                <li>
                    <a href="{{ route('tasks') }}">Tasks</a>
                </li>
                <li>
                    <a href="{{ route('viewUploads') }}">Uploads</a>
                </li>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">CA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('createTask') }}">Add Task</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                <div id="ca-table" class="container-fluid">
                    <div id="toolbar" class="select">
                        <select class="form-control">
                            <option value="">Export Basic</option>
                            <option value="all">Export All</option>
                        </select>
                    </div>
                    <table id="table" class="table table-striped" data-toggle="table" data-pagination="true" data-search="true" data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-page-list="[10, 50, 100, 1000, All]" data-toolbar="#toolbar"  data-click-to-select="true"  data-show-toggle="true" data-show-pagination-switch="true" data-show-export="true" data-show-print="true">
                        <thead>
                          <tr>
                            <th data-field="id" data-sortable="true" data-switchable="false" scope="col">ID</th>
                            <th data-field="rank" data-sortable="true" data-switchable="false" scope="col">Rank</th>
                            <th data-field="name" data-sortable="true" data-switchable="false" scope="col">Name</th>
                            <th data-field="email" data-sortable="true" scope="col">Email</th>
                            <th data-field="points" data-sortable="true" scope="col">Points</th>
                            <th data-field="phone" data-sortable="true" scope="col">Phone</th>
                            <th data-field="college" data-sortable="true" scope="col">College</th>
                            <th data-field="pincode" data-sortable="true" scope="col">Pincode</th>
                            <th data-field="address" data-sortable="true" scope="col">Address</th>
                            <th data-field="year" data-sortable="true" scope="col">Year</th>
                            <th data-field="verify" data-sortable="true" scope="col">Verify</th>
                            <th data-field="referred-by" data-sortable="true" scope="col">Referred by</th>
                            <th data-field="no-of-logins" data-sortable="true" scope="col">no of logins</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->points}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->college}}</td>
                                <td>{{$user->pincode}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->year}}</td>
                                <td><a href="{{route('verifybyuser',['ca_id'=>$user->id])}}">Click here</a></td>
                                <td>{{$user->num_referred}}</td>
                                <td>{{$user->no_of_login}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF/jspdf.min.js"></script>
<script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
<script src="{{asset('js/bootstrap-table-print.min.js')}}"></script>
<script src="{{asset('js/bootstrap-table-export.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

        var table = $('#table');

        $('select').on('change', function(){
            if($(this).val() == 'selected'){
                table.bootstrapTable('showColumn', 'state');
            } else{
                table.bootstrapTable('hideColumn', 'state');
            }
            table.bootstrapTable({
                exportDataType: $(this).val(),
                exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf'],
            });
        });
    });
</script>
</body>

</html>


