@extends('common.main')
<style>
            .dataTables_paginate .paginate_button {
            margin: 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            color: #333;
            cursor: pointer; 
            border-radius: 5px; 
            }

            .dataTables_paginate .paginate_button.current {
            background-color: #007bff; 
            color: #fff; 
            border: 1px solid #007bff; 
            }

    </style>
@section('content')

<div class="card custom-card">
    <div class="card-header ">
        <div class="card-title text-center pl-4"> Measurements Management</div>
    </div>
    <div class="card-body pl-3">


    <ul class="nav nav-tabs mb-4">
        @if(Auth::check() && Auth::user()->hasPermissionWithName("measurement_registration"))
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#registrationTab">Register Measurement</a>
            </li>
        @endif
        @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_measurement"))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#listTab">List of Measurements</a>
            </li>
        @endif
    </ul>
        <div class="tab-content">
        <!-- Registration Form Tab -->
        @if(Auth::check() && Auth::user()->hasPermissionWithName("measurement_registration"))
        <div class="tab-pane fade show active" id="registrationTab">
            <form id="measurementForm">
                <div class="mb-3">
                    <label for="measurement_name" class="form-label">Measurment Name</label>
                    <input type="text" class="form-control" id="measurement_name" placeholder="Enter Measurement Name">
                    <div class="error-message" id="measurement_name_error"></div>
                </div>
                <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                <button type="button" class="btn btn-primary" id="registerButton">Register Measurement</button>
            </form>
        </div>
        @endif

        @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_measurement"))
        <!-- List of Measurements Tab -->
            <div class="tab-pane fade" id="listTab">

                <div class="table-responsive mt-3">
                    <table class="table text-nowrap table-sm" id="measurementsTable">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Measurement Name</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody id='role_table_body'>

                            <tr class='no_role_message'>
                                <th colspan='5' style='color:red'>There is no measurement  created yet!!</th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
</div>

@if(Auth::check() && Auth::user()->hasPermissionWithName("update_measurement"))
<!-- The Modal for Editing Measurment -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Measurement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editMeasurementForm">
                    <div class="mb-3">
                        <label for="edit_measurement_name" class="form-label">Measurement Name</label>
                        <input type="text" class="form-control" id="edit_measurement_name" placeholder="Enter Measurment Name">
                        <div class="error-message" id="edit_measurement_name_error"></div>
                    </div>
                    <!-- Hidden form fields for measurement ID and created_by -->
                    <input type="hidden" name="measurement_id" id="edit_measurement_id" value="">
                </form>
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="saveEditButton">Save Changes</button> 
            </div>
        </div>
    </div>
@endif
</div>



<script>

    $(document).ready(function () {
        // Initialize DataTable inside the List of measurement Tab
        $('#measurementsTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true, 
        ajax: {
            url: '/measurement/list',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
            },
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            {
                data: null,
                render: function (data, type, row)
                 {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("update_measurement"))
                        return '<a href="#" class="btn btn-sm btn-primary edit-measurement" data-id="' + row.id + '">Edit</a>';
                    @else
                        return ''; 
                    @endif
                }
            },

            {
                data: null,
                render: function (data, type, row) 
                {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_measurement"))
                         return '<button class="btn btn-sm btn-danger delete-measurement" data-id="' + row.id + '">Delete</button>';
                    @else
                        return ''; 
                    @endif
                }
            },
        ],
        paging: true, // Enable pagination
        pageLength: 10, // Number of rows per page
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']], // Dropdown options for rows per page
        pagingType: 'full_numbers', // Style of pagination
    });

        $('#saveEditButton').click(function () {
        // Reset previous error messages
        $('.error-message').empty();
        var formData = {
            _token: '{{ csrf_token() }}',
            id: $('#edit_measurement_id').val(),
            name: $('#edit_measurement_name').val(),
        };

        $.ajax({
            type: 'POST',
            url: '/measurement/update', // The route to handle the measurement update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                alert(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#measurementsTable').DataTable().ajax.reload();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $('#edit_' + key + '_error').text(value[0]);
                    });
                }
            },
        });
    });


    $('#measurementsTable').on('click', '.edit-measurement', function () {
        var row = $(this).closest('tr');
        var measurementId = row.find('td:eq(0)').text(); // Get the measurement ID from the first column
        var measurementName = row.find('td:eq(1)').text(); // Get the measurement name from the second column

        // Populate the modal form fields
        $('#edit_measurement_id').val(measurementId); // Set the measurement ID in the hidden form field
        $('#edit_measurement_name').val(measurementName); // Set the measurement name in the input field

        $('#editModal').modal('show'); // Show the modal
    });

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editMeasurementForm')[0].reset();
    });



    $('#measurementsTable').on('click', '.delete-measurement', function () {
        var measurementId = $(this).data('id');
        
        // Display a confirmation prompt before deleting the measurement
        var confirmation = confirm('Are you sure you want to delete this measurement?');
        
        if (confirmation) {
            // If the user confirms, proceed with the deletion
            $.ajax({
                type: 'get',
                url: '/delete/measurements/' + measurementId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    alert('measurement deleted successfully.');
                    $('#measurementsTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    alert('Error deleting measurement.');
                }
            });
       }
    });

    $('#registerButton').click(function () {
    $('.error-message').empty();
    var formData = {
        _token: '{{ csrf_token() }}',
        name: $('#measurement_name').val(),
        created_by: $('#created_by').val(),
    };

    $.ajax({
        type: 'POST',
        url: '/measurements/register',
        data: formData,
        success: function (response) {
            console.log(response);
            alert(response.message);
            $('#measurementForm')[0].reset();
            $('.error-message').empty();
            $('#measurementsTable').DataTable().ajax.reload();

        },
        error: function (xhr) {
            if (xhr.status === 422) {
                alert('Error occurred during measurement registration.');
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    alert(value[0]);
                });
                $('#' + key + '_error').text(value[0]);
            } else {
                alert('Error occurred during measurement registration.');
            }
        },
    });
});
});
</script>
@endsection
