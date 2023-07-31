<?php

namespace App\Http\Controllers\Letter;

use App\Http\Controllers\Controller;
use App\Models\Actor\User;
use App\Models\Letter\LetterCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use DataTables;
class LetterController extends Controller
{

    public function createPDF() {
        $user = User::get();

	    $data = [
	            'title' => 'How To Create PDF File Using DomPDF In Laravel 9 - Techsolutionstuff',
	            'date' => date('d/m/Y'),
	            'users' => $user
	    ];


	        $pdf = PDF::loadView('index',$data);
	        return $pdf->download('users_pdf_example.pdf');
      }

    public function view_letter_code()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_letter_code"))
        {
            return "";
        }
        return view("letter.letter_codes");
    }
    function load_letter_types()
    {
        if(!Auth::user() || !Auth::user()->hasPermissionWithName("view_letter_code"))
        {
            return "";
        }

        $data = LetterCode::latest()->orderBy("code","ASC")->get();

        return DataTables::of($data)
            ->addIndexColumn()

            ->addColumn('templates', function($row){
                return $row->Templates->count();
             })
             ->addColumn('description', function($row){
                return "<span id='letter_code_".$row->id."'>".$row->description."</span>";
             })
            ->addColumn('add_template', function($row){
                if(!Auth::user()->hasPermissionWithName("create_new_letter_template"))
                {
                    return '';
                }
                return "<button class='btn btn-sm btn-primary' onclick='add_letter_code_template(\"".$row->code."\",".$row->id.")'>Add Template</button>";
             })
            ->rawColumns(['description','add_template'])
            ->make(true);
    }
}
