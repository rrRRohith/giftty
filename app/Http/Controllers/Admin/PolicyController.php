<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PolicyRequest;
use App\Policy;


class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $policies = Policy::get();
      return view('Admin.policies', compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.policy-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PolicyRequest $request)
    {
        $policy = new Policy;
        $policy->title = $request->title;
        $policy->slug = Str::slug($request->title);
        $policy->content = $request->content;
        $policy->status = $request->has('status') ? 1:0;
        try {
            $policy->save();
            session()->flash('message',alertMessage('Successfully created the policy!',1));
            return redirect(admin('policies'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create policy! '.$e->getMessage(),0));
            return redirect(admin('policies'));
            exit;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $policy = Policy::findOrFail($id);
      return view('Admin.policy-form', compact('policy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PolicyRequest $request, $id)
    {
        $policy = Policy::findOrFail($id);
      
        $policy->title = $request->input('title');
        $policy->slug = Str::slug($request->title);
        $policy->content = $request->input('content');
        $policy->status = $request->input('status') ? 1:0;
        try {
            $policy->save();
            session()->flash('message',alertMessage('Successfully updated the policy!',1));
            return redirect(admin('policies'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to update policy! '.$e->getMessage(),0));
            return redirect(admin('policies'));
            exit;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateStatus($id)
    {
       $policy = Policy::find($id) or abort(404);
       $policy->status = !$policy->status;
       $policy->save();
       return response()->json(['status'=>'Status successfully changed']);
    }  

    public function delete($id)
     {
      
        $policy = Policy::findOrFail($id);
        try {
            $policy->delete();
            session()->flash('message',alertMessage('Successfully deleted the policy!',1));
            return redirect('admin/policies');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the policy! '.$e->getMessage(),0));
            return redirect('admin/policies');
        }
    }
    public function bulkDelete(Request $request) {
        $policycount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $policy = Policy::findOrFail($id);
                try {
                    $policy->delete();
                    $policycount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the policy";           
                }
            }
        }
        if($policycount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the policy!' .$result ,0));
            return redirect(admin('policies'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$policycount. ' policy deleted',1));
          return redirect(admin('policies'));
        }
    }
}
