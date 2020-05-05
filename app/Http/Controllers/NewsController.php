<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $this->validate($request, [
            "news-title" => "required",
            "news-desc" => "required",
            "news-image" => "required|image|max:2000|mimes:jpeg,png,jpg",
        ]);

        if ($request->hasFile('news-image') && $request->file('news-image') instanceof UploadedFile) {
            $filenameWithExt = $request->file("news-image")->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("news-image")->getClientOriginalExtension();
            $fileNameToStore = $filename . "_" . time() . "." . $extension;
            $path = $request->file("news-image")->storeAs("public/news", $fileNameToStore);

            $news = new News;
            $news->title = $request->input("news-title");
            $news->image = $fileNameToStore;
            $news->description = $request->input("news-desc");
            $user = User::findOrFail(Auth::user()->id);
            try {
                $user->news()->save($news);
                return response()->json([
                    "msg" => "News saved Successfully"
                ]);
            } catch (QueryException $th) {
                throw $th->getMessage();
            }
        } else {
            return response()->json([
                'msg' => "No image"
            ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
