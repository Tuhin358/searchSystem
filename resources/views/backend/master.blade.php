{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>  --}}

{{--  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>  --}}

{{--  </x-app-layout>  --}}
<!DOCTYPE html>
<html>

<head>
    <title>Codding Test</title>
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

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@yield('content')

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
                url: "{{ route('dashboard') }}",
                data: {
                    startDate: startDate,
                    endDate: endDate,
                    Id: Id,
                }
            },
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return '<img src="' + data +
                            '" alt="Image" style="max-width:100px; max-height:100px;">';
                    }
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'status',
                    name: 'status'
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
