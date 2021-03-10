<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
use Carbon;
use File;
use view;
use DB;
use App\Http\Requests;
use App\DisgnationDetail;
use App\HealthWorkerDocument;
use App\DocType;

class DocumentController extends Controller
{
    //WhizzAct
    public function store(Request $request)
    {
        $dd = new DocType($request->all());
        if ($dd->save()) {
            return redirect()->back()->with('msg', 'Document type created Successfully');
        }
    }

    public function update(Request $request)
    {
        $dd = DocType::find($request->doctype_id)->update($request->all());
        if ($dd) {
            return redirect()->back()->with('msg', 'Document type updated Successfully');
        }
    }
    
    public function delete($id)
    {
        $dd = HealthWorkerDocument::where('doc_type_id', $id)->first();
        if ($dd) {
            echo "Sorry you can not delete this because this Document type use many other important places";
        } else {
            DocType::where('id', $id)->delete();
            echo "success";
        }
    }
}
