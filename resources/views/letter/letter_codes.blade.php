@extends('common.main')

@section('content')


<div class="card custom-card mt-1">
    <div class="card-header justify-content-between">
        <div class="card-title text-center pl-4"> Letter Types</div>
        =
    </div>
    <div class="card-body pl-3 pb-3">


        <div class="table-responsive mt-1 mb-3 pb-3" style='width:100%'>
            <table  class="table text-nowrap letter_type_table vertical-top">
                <thead>
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">Letter code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">WithWhom</th>
                        <th scope="col">Templates</th>
                        <th></th>
                    </tr>
                </thead>

            </table>
        </div>


    </div>
</div>
<style>
     .paginate_button{
        padding:5px;
        padding-left:7px;
        padding-right:7px;
        border:1px solid lightgray;
        cursor:pointer;
        margin-bottom:15px
     }
</style>


<div class='modal fade' id='add_template_code_template' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
  <div class='modal-dialog modal-xl'>
     <div class='modal-content'>
       <div class='modal-header'>
           <h6 class='modal-title' id='exampleModalSmLabel'>Add New Template </h6>
           <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
       </div>
       <div class='modal-body'>

        <strong>Letter Code</strong><br/>

          <input placeholder='letter code .....' id="add_template_letter_code" class="form-control form-control-sm mt-2 mb-2" disabled>

          <strong>Letter Description</strong><br/>
          <input placeholder='letter description .....' id="add_template_letter_description" class="form-control form-control-sm mt-2 mb-2" disabled>

          <strong>Subject</strong><br/>
          <input placeholder='enter letter subject .....' id="add_template_letter_subject" class="form-control form-control-sm mt-2 mb-2" >

          <strong>Letter Body</strong><br/>
          <textarea class="form-control form-control-sm mt-2 mb-2" name="body_part_1" placeholder="write some content here.."></textarea>

          <div id='appending_body_block'>

          </div>

          <table class="mt-2 mb-2">
                <tr>
                    <td>
                        <a><ins style='color:blue;cursor:pointer' onclick='add_template_paragraph()'>add_paragraph</ins></a>
                    </td>
                    <td style='padding-left:20px;'>
                        <a> <ins style='color:brown;cursor:pointer' onclick='add_template_table()'> add_table </ins></a>
                    </td>
                </tr>
          </table>

          <strong>Closure</strong><br/>

          <input placeholder='enter letter closure .....' id="add_template_letter_closure" class="form-control form-control-sm mt-2 mb-2" >



          <table class="mt-3 mb-2">
            <tr>
                <td>
                    <a class="btn btn-info">preview</a>
                </td>
                <td style='padding-left:15px'>
                    <input type='submit' class="btn btn-primary ml-2" value="add template">
                </td>
            </tr>
          </table>

        </div>
     </div>
   </div>
</div>

<div id='add_paragraph_template' style="display:none">
     <div class='_added_paragraph_ pt-2' id='paragraph_x'>
        <textarea name='name_x'  class="form-control form-control-sm" placeholder="write some content here.."></textarea>
     </div>
</div>

<div id='add_table_template' style="display:none">
    <div class='_added_table_ pt-2' id='table_x'>
       <table style="width:100%;border-collapse:collapse" border="1" id='added_table_x'>
          <tr>
            <td style="border-left: 1px solid black"><input style="width:100%" placeholder="enter s/thing ..."></td>
            <td style="border-left: 1px solid black"><input style="width:100%" placeholder="enter s/thing ..."></td>
            <td style="border-left: 1px solid black"><input style="width:100%" placeholder="enter s/thing ..."></td>
            <td style="border-left: 1px solid black"><input style="width:100%" placeholder="enter s/thing ..."></td>
            <td style='border:1px solid white;border-left:1px solid black'> <span style='font-size:16px;text-align:center;cursor:pointer;color:red;padding-left:5px;padding-right:5px;font-weight:bolder'>x</span></td>
          </tr>
       </table>
       <table>
            <tr>
                <td>
                    <ins>add_row</ins>
                </td>
                <td>
                    <ins>add_column</ins>
                </td>
                <td>
                    <ins>add_column</ins>
                <td>
            </tr>
        </table>
    </div>
</div>

<script>

var append_index=2;


function add_letter_code_template(code,id)
{
    $("#add_template_code_template").modal("show");
    $("#add_template_letter_code").val(code);
    $("#add_template_letter_description").val($("#letter_code_"+id).html());
}
function add_template_paragraph()
{
    $html=$("#add_paragraph_template").html().
                replace("_added_paragraph_", "added_paragraph").
                replace("paragraph_x", "paragraph_"+append_index).
                replace("name_x", "name_"+append_index);
    $("#appending_body_block").append($html);
}

function add_template_table()
{
    $html=$("#add_table_template").html();
    $("#appending_body_block").append($html);
}



$(function () {
        var table = $('.letter_type_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/letter/load_letter_type"
        },
        columns: [

                {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false,searchable: false},
                {data: 'code', name: 'code'},
                {data: 'description', name: 'email'},
                {data: 'letter_type', name: 'letter_type'},
                {data: 'with_whom', name: 'with_whom'},
                {data: 'templates', name: 'templates'},
                {data: 'add_template', name: 'add_template'}

            ]
        });
        //$(".dataTables_filter").remove();
        //$(".dataTables_length").remove();
        dataTableSearch = $('.letter_type_table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
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
