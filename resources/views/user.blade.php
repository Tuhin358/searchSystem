<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 Datatables Date Range Filter</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body>

    <div class="container">
        <h1 class="text-center text-success mt-5 mb-5"><b>Laravel 10 Datatables Date Range Filter</b></h1>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    {{-- <div class="col col-3">
                        date range search
                        <div id="daterange" class="float-end"
                            style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; text-align:center">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span>
                            <i class="fa fa-caret-down"></i>
                        </div>

                    </div> --}}
                    <div class="col-md-3 mb-1">
                        <input type="date" class="form-control input-daterange" id="startDate">
                    </div>
                    <div class="col-md-3 mb-1">
                        <input type="date" class="form-control input-daterange" id="endDate">
                    </div>
                    <div class="col-md-3 mb-1">
                        <div class="form-group">
                            <div class="mb-3">
                                <select id="Id" class="js-example-basic-single form-select patientId">
                                    <option value="">select Name</option>
                                    {{-- @foreach ($patient as $item)
                                    <option value="{{ $item->id }}">{{ $item->full_name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-1">
                        <div class="d-flex justify-content-around">
                            <button class="btn btn-primary btn-sm" type="button" id="filter">Filter</button>
                            <button class="btn btn-primary btn-sm" type="button" id="refresh">Refresh</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="daterange_table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>{{ 'Name' }}</th>
                            <th>{{ 'Email' }}</th>
                            <th>{{ 'Created At' }}</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    {{--  $(document).ready(function ()  --}}

    function loadDatatable(startDate = '', endDate = '', Id = '') {
        $('#daterange_table').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 100,
            "order": [
                [1, "desc"]
            ],
            ajax: {
                url: "{{ route('users.index') }}",
                data: {
                    startDate: startDate,
                    endDate: endDate,
                    Id: Id,

                }
            },
            columns: [
                // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: false,
                    className: 'text-center'
                },
            ],
            "columnDefs": [{
                "className": "dt-center",
                "targets": "_all"
            }]


        });
    };
    loadDatatable();
    $('#filter').click(function() {
        var startDate = $('#startDate').val();
        var endDate = $('#endDate').val();
        var Id = $('#Id').val();
        if ((startDate != '' && endDate != '' || Id != '')) {
            $('#daterange_table').DataTable().destroy();
            loadDatatable(startDate, endDate, Id);
        } else {
            alert('Both Date is required');
        }
    });

    $('#refresh').click(function() {
        $('#startDate').val('');
        $('#endDate').val('');
        $('#Id').append('<option value="" selected></option>');
        $('#daterange_table').DataTable().destroy();
        loadDatatable();
    });

    function onDelete(e) {
        console.log(e.id)
        document.getElementById('delForm').setAttribute('action', e.id)

    }
</script>

</html>
