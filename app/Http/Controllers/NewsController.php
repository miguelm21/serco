<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(10);
        return view('data.news.index', ['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            'image' => 'required',
        ]);
        $new = new News;
        $new->fill($request->all());

        $destinationPath = 'images/news/'; // upload path
        $destinationPath2 = base_path() . '/public/images/news/'; // upload path
        $extension = 'jpg'; // getting image extension
        $fileName = $request->name.'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath2, $fileName); // uploading file to given path
        $new->image = $destinationPath.'/'.$fileName;
        /*$new->filename = $fileName;*/
        $new->save();
        return redirect('/news')->with('message','Noticia Registrada Correctamente');
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
        $news = News::find($id);
        return view('data.news.edit', ['news'=>$news]);
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
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
        ]);
        $new = News::find($id);
        $new->fill($request->all());
        if(isset($request->image))
        {
            $destinationPath = 'images/news/'; // upload path
            $destinationPath2 = base_path() . '/public/images/news/'; // upload path
            $extension = 'jpg'; // getting image extension
            $fileName = $new->name.'.'.$extension; // renameing image
            $request->file('image')->move($destinationPath2, $fileName); // uploading file to given path
            $new->image = $destinationPath.'/'.$fileName;
        }
        $new->save();
        return redirect('/news')->with('message','Noticia Actualizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::find($id)->delete();

        return redirect('/news')->with('error','Noticia Eliminada Correctamente');
    }
}
