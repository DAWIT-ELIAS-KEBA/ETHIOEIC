@extends('common.main')
<style>
        .dataTables_paginate .paginate_button 
        {
            margin: 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            color: #333;
            cursor: pointer; 
            border-radius: 5px; 
        }

        .dataTables_paginate .paginate_button.current 
        {
            background-color: #007bff; 
            color: #fff; 
            border: 1px solid #007bff; 
        }    
        .dataTables_wrapper .dataTables_filter input[type="search"]
         {
            /* Add your custom styles here */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f0f0f0;
            color: #333;
        }

        .dataTables_wrapper .dataTables_filter input[type="search"]:focus 
        {
            border-color: #007bff;
            outline: none;
        }



    </style>
@section('content')


<div class="card custom-card">
    <div class="card-header ">
        <div class="card-title text-center pl-4"> Investment Type Management</div>
    </div>
    <div class="card-body pl-3">


    <ul class="nav nav-tabs mb-4">
    @if(Auth::check() && Auth::user()->hasPermissionWithName("register_item"))
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#registrationTab">Register Investment Type</a>
        </li>
    @endif
    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_item"))
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#listTab">List of Investment Type</a>
        </li>
    @endif
    </ul>
<div class="tab-content">
        <!-- Registration Form Tab -->
        @if(Auth::check() && Auth::user()->hasPermissionWithName("investment_type_registration"))
                    <div class="tab-pane fade show active" id="registrationTab">
                        <form id="investmentTypeForm">
                        <div class="mb-3">
                        <label for="region_name" class="form-label">Investment Type Name</label>
                        <input type="text" class="form-control" id="investment_type_name" placeholder="Enter Investment Type Name" required>
                        <div class="error-message" id="region_name_error"></div>
                    </div>
                    <label class="form-label">Is Shareholder?</label>
                    <div class ="container">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="shareholder_yes" name="shareholder_value" value="1" required> 
                            <label class="form-check-label" for="shareholder_yes">YES</label> 
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="shareholder_no" name="shareholder_value" value="0" required> 
                            <label class="form-check-label" for="shareholder_no">NO</label> 
                        </div>
                    </div>
                <div class="input-group mb-3"> 
                     <label class="input-group-text" for="inputGroupSelect01">Memorandum Type</label>
                        <select class="form-select" id="memorandum_type">
                              <option selected>Choose </option>
                              <option value="MoU">Memorundum of Understanding</option>
                              <option value="MoA">Memorandum of Association</option>
                        </select>
                        <div class="error-message" id="memorundum_type_error"></div>
                  </div>
                <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                <button type="button" class="btn btn-primary" id="registerButton">Register Investment Type</button>
            </form>
        </div>
        @endif

    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_investment_type"))
        <!-- List of Items Tab -->
        <div class="tab-pane fade" id="listTab">
            <div class="table-responsive mt-3">
                <table class="table text-nowrap table-sm" id="investmentTypesTable">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Investment Type Name</th>
                                <th>Is Shareholders?</th>
                                <th>Type of Memorandum</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                    </thead>
                    <tbody id='role_table_body'>
                        <tr class='no_role_message'>
                            <th colspan = '5' style='color:red'>There is no item  created yet!!</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   @endif
</div>

@if(Auth::check() && Auth::user()->hasPermissionWithName("update_investment_type"))
    <!-- The Modal for Editing Item -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Investment Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editItemForm">
                        <div class="mb-3">
                            <label for="edit_investment_type_name" class="form-label">Investment Type Name</label>
                            <input type="text" class="form-control" id="edit_investment_type_name" placeholder="Enter Item Name">
                            <div class="error-message" id="edit_investment_type_name_error"></div>
                        </div>
                        <div class="mb-3">
                            <label for="edit_memorandum_type" class="form-label">Memorandum Type</label>
                            <select class="form-select" id="edit_memorandum_type">
                                <option value="MoA">Memorandum of Association</option>
                                <option value="MoU">Memorandum of Understanding</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Is Shareholder?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="edit_is_shareholder" id="edit_is_shareholder_yes" value="1">
                                <label class="form-check-label" for="edit_is_shareholder_yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="edit_is_shareholder" id="edit_is_shareholder_no" value="0">
                                <label class="form-check-label" for="edit_is_shareholder_no">No</label>
                            </div>
                        </div>
                        <input type="hidden" name="item_id" id="edit_investment_type_id" value="">
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
        // Initialize DataTable inside the List of Items Tab
        $('#investmentTypesTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true, 
        ajax: {
            url: '/investment_types/list',
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}',
            },
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'is_shareholders', name: 'is_shareholders' },
            { data: 'memorandum_type', name: 'memorandum_type' },
            {
                data: null,
                render: function (data, type, row) 
                {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("update_investment_type"))
                        return '<button class="btn btn-sm btn-primary edit-investment_type" data-id="' + row.id + '">Edit</button>';
                    @else
                        return ''; 
                    @endif
                }
            },
            {
                data: null,
                render: function (data, type, row) {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_Investment_type"))
                        return '<button class="btn btn-sm btn-danger delete-investment_type" data-id="' + row.id + '">Delete</button>';
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
        var investment_edit_id =  $('#edit_investment_type_id').val();

        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#edit_investment_type_name').val(),
            created_by: $('#edit_created_by').val(),
            is_shareholders: $('input[name="edit_is_shareholder"]:checked').val(),
            memorandum_type: $('#edit_memorandum_type option:selected').val()
        };

        $.ajax({
            type: 'POST',
            url: '/investment_types/update/' +investment_edit_id, // The route to handle the item update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                alert(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#investmentTypesTable').DataTable().ajax.reload();
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


    $('#investmentTypesTable').on('click', '.edit-investment_type', function () {
        var row = $(this).closest('tr');
        var investment_type_Id = row.find('td:eq(0)').text(); // Get the item ID from the first column
        var investmenet_type_Name = row.find('td:eq(1)').text(); // Get the item name from the second column
        var is_shareholder = row.find('td:eq(2)').text(); // Get the item name from the second column
        var memorandum_type = row.find('td:eq(3)').text(); // Get the item name from the second column

        // Populate the modal form fields
        $('#edit_investment_type_id').val(investment_type_Id); // Set the item ID in the hidden form field
        $('#edit_investment_type_name').val(investmenet_type_Name); // Set the item name in the input field
        if (memorandum_type === 'Memorandum of Association')
            {
            $('#edit_memorandum_type').val('MoA').change();
            } 
        else if (memorandum_type === 'Memorandum of Understanding') {
                $('#edit_memorandum_type').val('MoU').change();
            }
        if (is_shareholder === '1') {
        $('#edit_is_shareholder_yes').prop('checked', true);
        } 
        else {
            $('#edit_is_shareholder_no').prop('checked', true);
        }
        $('#editModal').modal('show'); // Show the modal
    });

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editItemForm')[0].reset();
    });



    $('#investmentTypesTable').on('click', '.delete-investment_type', function () {
        var investmentType = $(this).data('id');
        
        // Display a confirmation prompt before deleting the item
        var confirmation = confirm('Are you sure you want to delete this Investment Type?');
        
        if (confirmation) {
            // If the user confirms, proceed with the deletion
            $.ajax({
                type: 'get',
                url: '/delete/investment_types/' + investmentType,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    alert('Investment Type deleted successfully.');
                    $('#investmentTypesTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    alert('Error deleting investment Type.');
                }
            });
       }
    });

    $('#registerButton').click(function () {
    $('.error-message').empty();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#investment_type_name').val(),
            created_by: $('#created_by').val(),
            is_shareholders: $('input[name="shareholder_value"]:checked').val(),
            memorandum_type: $('#memorandum_type option:selected').val()
        };
    $.ajax({
        type: 'POST',
        url: '/investment_type/register',
        data: formData,
        success: function (response) {
            console.log(response);
            alert(response.message);
            $('#investmentTypeForm')[0].reset();
            $('.error-message').empty();
            $('#investmentTypesTable').DataTable().ajax.reload();

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
