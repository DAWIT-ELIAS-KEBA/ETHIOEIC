@extends('common.main')

@section('content')


<div class="card custom-card">
    <div class="card-header justify-content-between">
        <div class="card-title text-center pl-4"> Role Management</div>

        <div class="prism-toggle p-0 bg-success">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><i class="bx bx-search-alt-2 header-link-icon"></i></span>
                <input type="text" class="form-control" id='search_role_input' onkeyup="load_roles()" placeholder="enter role name...." >

            </div>
        </div>


        <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">New Role</button> </div>

    </div>
    <div class="card-body">



        <div class="table-responsive">
            <table class="table text-nowrap">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role Name</th>
                        <th scope="col">Permissions</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id='role_table_body'>

                    <tr class='no_role_message'>
                        <th colspan='5' style='color:red'>There is no role created yet!!</th>

                    </tr>

                </tbody>
            </table>
        </div>


        <div>

            <span class="badge bg-outline-warning">bbbbbbbbbbbbb</span>
            <span class="badge bg-outline-warning">dddddddddd</span>
            <span class="badge bg-outline-warning">fffffffffff</span>
            <span class="badge bg-outline-warning">jjjjjjjjjjjjj</span>
            <span class="badge bg-outline-warning">kkkkkkkkkkkkkkkkkkkkkk</span>
        </div>
        </div>

</div>



<script>
    function load_roles()
    {
        $(".no_role_message").show();
        $(".role_rows").remove();
        var search_key=$("#search_role_input").val();
        var userURL = '/role/load_roles';
        $.ajax({
            url: userURL,
            type: 'GET',
            data:{ key : search_key },
            dataType: 'json',
            success: function(data)
            {
                $(".role_rows").remove();
                for( i = 0 ;  i < data.length ; i++)
                {
                    $(".no_role_message").hide();

                    var role = data[i];

                    var html = "<tr class='role_rows'><th>" + (i+1) +"</th><td>" + role["name"] + "</td><td>";

                    var permissions =  role["permissions"];

                    html +="<table>"
                    for ( j = 0 ; j < permissions.length ; j++ )
                    {
                        if(j%2==0)
                        {
                           if(j!=0)
                           {
                                html +="</tr>"
                           }
                           html +="<tr>"
                        }
                        html += "<td><table><tr>";
                        html += "       <td>"+permissions[j]["label"]+"</td>";
                        html += "       <td><div style='cursor:pointer;padding-left:5px;padding-right:5px'>x</div></td>";
                        html += "</table></td>";
                    }
                    if(j>0)
                    {
                        html +="</tr>"
                    }
                    html +="</table>"

                    html+="</td><td>";

                    html+="     <button class='btn btn-sm btn-primary'>Update</button>";

                    html+="</td><td'>";

                    html+="     <button class='btn btn-sm btn-danger'>Delete</button>";

                    html+="</td></tr>";

                    $("#role_table_body").append(html);
                }
            }
        });
    }
    load_roles();
</script>
@endsection

