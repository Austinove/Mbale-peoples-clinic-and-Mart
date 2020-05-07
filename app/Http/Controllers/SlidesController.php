<?php

namespace App\Http\Controllers;

use App\Slide;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Slide::all());
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
            "slides-title" => "required",
            "slides-desc" => "required",
            "slides-image" => "required|image|max:2000|mimes:jpeg,png,jpg",
        ]);
        
        if ($request->hasFile('slides-image') && $request->file('slides-image') instanceof UploadedFile) {
            $filenameWithExt = $request->file("slides-image")->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("slides-image")->getClientOriginalExtension();
            $fileNameToStore = $filename."_".time().".".$extension;
            $path = $request->file("slides-image")->storeAs("public/slides", $fileNameToStore);
            
            $slide = new Slide;
            $slide->title = $request->input("slides-title");
            $slide->image = $fileNameToStore;
            $slide->description = $request->input("slides-desc");
            $user = User::findOrFail(Auth::user()->id);
            try {
                $user->slides()->save($slide);
                return response()->json([
                    "msg" => "Slide saved Successfully"
                ]);
            } catch (QueryException $th) {
                throw $th->getMessage();
            }
        }else{
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
        $this->validate($request, [
            "slides-title" => "required",
            "slides-desc" => "required"
        ]);

        $user = User::findOrFail(Auth::user()->id);

        if ($request->hasFile('slides-image') && $request->file('slides-image') instanceof UploadedFile) {
            $this->validate($request, [
                "slides-image" => "required|image|max:2000|mimes:jpeg,png,jpg",
            ]);
            
            $filenameWithExt = $request->file("slides-image")->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("slides-image")->getClientOriginalExtension();
            $fileNameToStore = $filename . "_" . time() . "." . $extension;
            $path = $request->file("slides-image")->storeAs("public/slides", $fileNameToStore);
            
            try {
                $user->slides()->whereId($id)->update([
                    'title' => $request->input('slides-title'),
                    'image' => $fileNameToStore,
                    'description' => $request->input('slides-desc')
                ]);
                return response()->json([
                    "msg" => "Slide saved Successfully"
                ]);
            } catch (QueryException $th) {
                throw $th->getMessage();
            }
        }
        
        try {
            $user->slides()->whereId($id)->update([
                'title' => $request->input('slides-title'),
                'description' => $request->input('slides-desc')
            ]);
            return response()->json([
                "msg" => "Slide saved Successfully"
            ]);
        } catch (QueryException $th) {
            throw $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail(Auth::user()->id);
        try {
            $user->slides()->whereId($id)->delete();
            return response()->json([
                "msg" => "Slide deleted"
            ]);
        } catch (QueryException $th) {
            throw $th->getMessage();
        }
    }
}
