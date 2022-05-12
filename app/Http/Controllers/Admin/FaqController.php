<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use App\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $faqs = Faq::get();
      return view('Admin.faqs', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Admin.faq-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->display_order = $request->display_order;
        try {
            $faq->save();
            session()->flash('message',alertMessage('Successfully created the faq!',1));
            return redirect(admin('faqs'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create faq! '.$e->getMessage(),0));
            return redirect(admin('faqs'));
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
      $faq = Faq::findOrFail($id);
      return view('Admin.faq-form', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, $id)
    {
        $faq=Faq::find($id);
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->display_order = $request->input('display_order');
        try {
            $faq->save();
            session()->flash('message',alertMessage('Successfully created the faq!',1));
            return redirect(admin('faqs'));
            exit;
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to create faq! '.$e->getMessage(),0));
            return redirect(admin('faqs'));
            exit;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function delete($id)
    {
        // Logic for deleting the user
        $faq = Faq::findOrFail($id);
        try {
            $faq->delete();
            session()->flash('message',alertMessage('Successfully deleted the faq!',1));
            return redirect('admin/faqs');
        }
        catch(\Exception $e) {
            session()->flash('message',alertMessage('Unable to deleted the faq! '.$e->getMessage(),0));
            return redirect('admin/faqs');
        }
    }

    public function bulkDelete(Request $request) {
        $faqcount = 0;
        $result='';
        if($request->has('checked') && count($request->checked)) {  
            foreach($request->checked as $key=>$id) {
                $faq = Faq::findOrFail($id);
                try {
                    $faq->delete();
                    $faqcount++;
                }
                catch(\Exception $e) {
                    $result = "error while deleting the faq";           
                }
            }
        }
        if($faqcount>0 && $result!='') {
            session()->flash('message',alertMessage('Unable to delete the faq!' .$result ,0));
            return redirect(admin('faqs'));
        }       
        else{ 
          session()->flash('message',alertMessage('Total ' .$faqcount. ' faq deleted',1));
          return redirect(admin('faqs'));
        }
    }
}
