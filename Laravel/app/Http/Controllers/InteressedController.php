<?php

namespace App\Http\Controllers;
use App\Interessed;
use Illuminate\Http\Request;
use App\Http\Requests\CreateInteressedRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InteressedController extends Controller
{
   
    public function index()
    {
        $interesseds= Interessed::all();

       return view('interessed.index' , compact('interesseds'));
    }

    
    public function create()
    {
        return redirect ('interessedCreate');
    }

   
    public function store(CreateInteressedRequest $request)
    {
        $interessed = new Interessed;
        $interessed = $interessed->create($request->all());
        return view('torres.thankyou');
    }

    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
       $interesseds= Interessed::find($id);
        return view('interessed.editInteressed', compact('interesseds'));

    }
    
    public function getUpdate(Request $request, $id)
    {
        $interesseds= Interessed::find($id);
        $interesseds->Update($request->all());
        return redirect ('/interessed');
    }
 
    public function getDestroy($id)
     {
        $interesseds= Interessed:: find($id);
        $interesseds->delete();

        return redirect('/interessed');
    }
}
