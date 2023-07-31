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
            .custom-margin-bottom {
                margin-bottom: 20px; /* Adjust the value as needed */
            }
            #VIPServiceTypesTable th:nth-child(1),
            #VIPServiceTypesTable td:nth-child(1) {
                width: 10%;
            }

            #VIPServiceTypesTable th:nth-child(2),
            #VIPServiceTypesTable td:nth-child(2) {
                width: 50%;
            }

            #VIPServiceTypesTable th:nth-child(3),
            #VIPServiceTypesTable td:nth-child(3),
            #VIPServiceTypesTable th:nth-child(4),
            #VIPServiceTypesTable td:nth-child(4) {
                width: 20%;
            }


    </style>
@section('content')

<div class="card custom-card">
    <div class="card-header ">
        <div class="card-title text-center pl-4"> VIP Service Type Management</div>
    </div>
    <div class="card-body pl-3">


    <ul class="nav nav-tabs mb-4">
    @if(Auth::check() && Auth::user()->hasPermissionWithName("VIP_services_registration"))
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#registrationTab">Register VIP Service Type</a>
            </li>
    @endif
    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_VIP_services"))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#listTab">List of VIP Service Type</a>
            </li>
    @endif
    </ul>
        <div class="tab-content">
        <!-- Registration Form Tab -->
        @if(Auth::check() && Auth::user()->hasPermissionWithName("VIP_services_registration"))
        <div class="tab-pane fade show active" id="registrationTab">
            <form id="regionForm">
                <div class="mb-3">
                    <label for="VIPService_name" class="form-label">VIP Service Name</label>
                    <input type="text" class="form-control" id="VIPService_name" placeholder="Enter VIP Service Name">
                    <div class="error-message" id="VIPService_name_error"></div>
                </div>
                
                <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                <button type="button" class="btn btn-primary" id="registerButton">Register VIP Service</button>
            </form>
        </div>
        @endif

        <!-- List of VIP Service Tab -->
        @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_VIP_services"))
        <div class="tab-pane fade" id="listTab">
    <div class="table-responsive mt-3">
        <table class="table text-nowrap table-sm" id="VIPServiceTypesTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>VIP Service Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id='role_table_body'>
                <tr class='no_role_message'>
                    <td colspan='4' style='color:red; text-align:center;'>There is no VIP Service created yet!!</td>
                </tr>
                <!-- Add other rows with data here if available -->
            </tbody>
        </table>
    </div>
</div>
        @endif
</div>

<!-- The Modal for Editing Region -->
@if(Auth::check() && Auth::user()->hasPermissionWithName("update_VIP_services"))
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit VIP Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editMeasurementForm">
                    <div class="mb-3">
                        <label for="edit_VIPService_name" class="form-label">VIP Service Name</label>
                        <input type="text" class="form-control" id="edit_VIPService_name" placeholder="Enter Region Name">
                        <div class="error-message" id="edit_VIPService_name_error"></div>
                    </div>
                    <input type="hidden" name="VIPService_id_id" id="edit_VIPService_id">
                </form>
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="saveEditButton">Save Changes</button> 
            </div>
        </div>
    </div>
</div>
@endif


<script>

    $(document).ready(function () {
        $('#VIPServiceTypesTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true, 
        ajax: {
            url: '/VIP_services/list',
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}',
            },
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'service', name: 'service'},
            {
                data: null,
                render: function (data, type, row) {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("update_VIP_services"))
                        return '<a href="#" class="btn btn-sm btn-primary edit-VIPService" data-id="' + row.id + '">Edit</a>';
                    @else
                        return '';
                    @endif
                }
            },
            {
                data: null,
                render: function (data, type, row) {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_VIP_services"))
                        return '<button class="btn btn-sm btn-danger delete-VIPService" data-id="' + row.id + '">Delete</button>';
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
        var VIPServiceId = $('#edit_VIPService_id').val();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#edit_VIPService_name').val(),
            id:VIPServiceId,
        };

        $.ajax({
            type: 'post',
            url: '/VIP_services/update/', // The route to handle the measurement update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                alert(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#VIPServiceTypesTable').DataTable().ajax.reload();
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


    $('#VIPServiceTypesTable').on('click', '.edit-VIPService', function () {
        var row = $(this).closest('tr');
        var VIPServiceId = row.find('td:eq(0)').text(); // Get the region ID from the first column
        var VIPServiceName = row.find('td:eq(1)').text(); // Get the measurement name from the second column


        // Populate the modal form fields
        $('#edit_VIPService_id').val(VIPServiceId); // Set the region ID in the hidden form field
        $('#edit_VIPService_name').val(VIPServiceName); // Set the region name in the input fiel
        $('#editModal').modal('show'); // Show the modal
    });

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editMeasurementForm')[0].reset();
    });



    $('#VIPServiceTypesTable').on('click', '.delete-VIPService', function () {
        var regionId = $(this).data('id');
        
        // Display a confirmation prompt before deleting the measurement
        var confirmation = confirm('Are you sure you want to delete this VIP Service?');
        
        if (confirmation) {
            // If the user confirms, proceed with the deletion
            $.ajax({
                type: 'get',
                url: '/delete/VIP_services/' + regionId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    alert('VIP Service Deleted Successfully.');
                    $('#VIPServiceTypesTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    alert('Error deleting VIP Service.');
                }
            });
       }
    });

    $('#registerButton').click(function () {
    $('.error-message').empty();
    var formData = {
            _token: '{{ csrf_token() }}',
            service: $('#VIPService_name').val(),
            created_by: $('#created_by').val(),
      };

    $.ajax({
        type: 'POST',
        url: '/VIP_services/register',
        data: formData,
        success: function (response) {
            console.log(response);
            alert(response.message);
            $('#regionForm')[0].reset();
            $('.error-message').empty();
            $('#VIPServiceTypesTable').DataTable().ajax.reload();

        },
        error: function (xhr) {
            if (xhr.status === 422) {
                alert('Error occurred during Region registration.');
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    alert(value[0]);
                });
                $('#' + key + '_error').text(value[0]);
            } else {
                alert('Error occurred during Region registration.');
            }
        },
    });
});
});
</script>
@endsection
