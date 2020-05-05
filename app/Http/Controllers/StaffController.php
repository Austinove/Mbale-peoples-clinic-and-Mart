<?php

namespace App\Http\Controllers;

use App\Staff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
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
            "staff-name" => "required",
            "staff-dept" => "required",
            "staff-image" => "required|image|max:2000|mimes:jpeg,png,jpg",
        ]);

        if ($request->hasFile('staff-image') && $request->file('staff-image') instanceof UploadedFile) {
            $filenameWithExt = $request->file("staff-image")->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("staff-image")->getClientOriginalExtension();
            $fileNameToStore = $filename . "_" . time() . "." . $extension;
            $path = $request->file("staff-image")->storeAs("public/staff", $fileNameToStore);

            $staff = new Staff;
            $staff->name = $request->input("staff-name");
            $staff->image = $fileNameToStore;
            $staff->department = $request->input("staff-dept");
            
            $user = User::findOrFail(Auth::user()->id);
            try {
                $user->staffs()->save($staff);
                return response()->json([
                    "msg" => "staff saved Successfully"
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
