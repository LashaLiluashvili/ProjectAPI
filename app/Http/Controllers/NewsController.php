<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;

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
        return NewsResource::collection($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insert_image(NewsRequest $request)
    {
        $imageFile= $request->image;

        $formData= array(
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image
        );
        // $imagePath = $request->file('image')->store('public');
    }

    public function store(NewsRequest $request)
    {
        $news = News::create($request->validated());

        $imagePath = $request->file('image')->store('public');

        $news->image = $imagePath;

        $news->save();

        return ["imageResult" => $imagePath];
        // return response("true")
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        return new NewsResource($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        return new NewsResource($news->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return response()->json(
            [
                "success" => true
            ]
        );
    }
}
