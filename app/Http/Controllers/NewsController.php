<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\News;
use Session;
use Auth;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $newses=News::where('campus_id','=',Auth::user()->campus_id)
        ->orderBy('id','desc')->get();
        return view('news.index')->withNewses($newses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]); 
        $file=$request->file('banner');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $uploaded=Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        if($uploaded){
        $news=new News();
        $news->title=$request->title;
        $news->description=$request->description;
        $news->filename=$fileName;
        $news->campus_id=Auth::user()->campus_id;
        $news->save();
        }
        Session::flash('success','News Successully Posted');
        return redirect()->route('news.index');


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
        $news=News::find($id);
        return view('news.edit')->withNews($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]); 
        $news=News::find($id);
        if($request->hasFile('banner')) {
        $file=$request->file('banner');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $uploaded=Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        $delete=Storage::disk('socials')->delete($news->filename);
        $news->title=$request->title;
        $news->description=$request->description;
        $news->filename=$fileName;
        $news->campus_id=Auth::user()->campus_id;
        }
        else {
        $news->title=$request->title;
        $news->description=$request->description;
        $news->campus_id=Auth::user()->campus_id;
        }
        $news->save();
        Session::flash('success','News Successully Updated');
        return redirect()->route('news.show',$news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::find($id);
        $news->delete();
        Session::flash('success','News Successully Deleted');
        return redirect()->route('news.index');
    }
}
