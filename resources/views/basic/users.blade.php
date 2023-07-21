@extends('common.main')

@section('content')

<style>
 .disabled_ele{
    opacity:0.3;
    cursor: not-allowed;
    pointer-events: none;
 }
</style>

<div class="card custom-card">
    <div class="card-header justify-content-between">
        <div class="card-title text-center pl-4"> User Management</div>
        <div class="prism-toggle">
            <button class="btn btn-sm btn-primary-light" onclick="add_user_method()">NEW USER</i></button>
        </div>
    </div>
    <div class="card-body pl-3">


        <div class="table-responsive mt-1" style='width:100%'>
            <table  class="table text-nowrap user_table">
                <thead>
                    <tr>

                        <th scope="col">#</th>

                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Last Login</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Status</th>

                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id='role_table_body'>

                    <tr class='no_role_message'>
                        <th colspan='5' style='color:gray'>Loading registered users .....</th>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>
</div>




<div class='modal fade' id='add_new_user_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Adding New User </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>
              <form id='add_new_user_form' action='/user/add_new_user'>
                  <div class="col-xl-12">

                      <label style="font-weight:bolder" class="mb-2">Name *</label><br/>
                      <input type="text" id='new_user_name' name='user_name' class="form-control" placeholder="Enter user name ....."><br/>
                      <label style="font-weight:bolder" class="mb-2">Email *</label><br/>
                      <input type="text" id='new_user_email' name='email' class="form-control" placeholder="Enter user email ....."><br/>

                 </div>

                  <input class='btn btn-primary' type='submit'value='Register'><br/>
                  <div id="new_user_registration_error">

                  </div>
                  <br/>
              </form>
          </div>
      </div>
    </div>
  </div>







<style>


.circle-img {
  width: 30px;
  height: 30px;
  overflow: hidden;
}

.circle-img img {
  height: 100%;
  transform: translateX(-50%);
  margin-left: 0%;
}
</style>






<script>


    function add_user_method()
    {
        $('#add_new_user_form').trigger("reset");
        $('#add_new_user_modal').modal("show");
    }

    $("#add_new_user_form").on('submit', function(event){
        event.preventDefault();

        var url = $(this).attr('action');

        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'text',
            contentType: false,
            cache: false,
            processData: false,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(data)
            {
                if(data=='yes')
                 {
                    $('#add_new_user_form').trigger("reset");
                    $("#add_new_user_modal").modal("hide");
                    refresh_datatable();
                 }
                 else
                 {
                     alerting(data,"new_user_registration_error","danger");
                 }
            },
            error: function(response)
            {
            }
        });
    });



    $(function () {
            var table = $('.user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "/user/load_users"
            },
            columns: [

                    {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false,searchable: false},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'last_login', name: 'last_login'},
                    {data: 'roles', name: 'roles'},
                    {data: 'permissions', name: 'permissions'},
                    {data: 'user_status', name: 'user_status'},
                    {data: 'view_permissions', name: 'view_permissions',orderable: false,searchable: false},
                    {data: 'change_status', name: 'change_status',orderable: false,searchable: false},
                    {data: 'update', name: 'update',orderable: false,searchable: false},
                    {data: 'delete', name: 'delete',orderable: false,searchable: false}
                ]
            });
            //$(".dataTables_filter").remove();
            //$(".dataTables_length").remove();
            dataTableSearch = $('.user_table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
            $('#dataTableSearch').keyup(function(){
                dataTableSearch.search($(this).val()).draw() ;
            })
            $('#dataTableSize').change(function(){
                dataTableSearch.page.len($(this).val()).draw() ;
            })

            dataTableSearch.page.len(5).draw() ;
    });

    function refresh_current_datatable_page()
    {
        dataTableSearch.ajax.reload( null, false )
    }


    function refresh_datatable()
    {
        dataTableSearch.draw() ;
    }

</script>
@endsection
