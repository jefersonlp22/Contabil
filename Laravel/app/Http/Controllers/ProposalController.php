<?php

namespace App\Http\Controllers;
use App\Proposal;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProposalRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProposalController extends Controller
{
   
    public function index()
    {
        $proposals= Proposal::paginate(3);
        return view('proposal.index', compact('proposals'));

    }

    
    public function create()
    {
        return 'aki';
    }

   
    public function store(CreateProposalRequest $request)
    {
        $proposal= new Proposal;
        $proposal= $proposal->create($request->all());
        return view('torres.thankyou');

    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $proposal = Proposal::find($id);
      return view('proposal.editProposal', compact('proposal'));
    }

   
    public function getUpdate(Request $request, $id)
    {
        $proposal = Proposal::find($id);
        $proposal->Update($request->all());
        return redirect ('/proposal');
    }
   
    public function getDestroy($id)
    {
        $proposal= Proposal:: find($id);
        $proposal->delete();
        return redirect ('/proposal');
    }
}
