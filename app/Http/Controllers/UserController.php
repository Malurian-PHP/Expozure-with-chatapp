<?php

namespace App\Http\Controllers;

use Auth;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Image;
use App\Notifications\GeneralNotification;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $id = Auth::user()->id;

        $skills = Skill::where('user_id', $id)->get();

        return view('dashboard/edit-profile', compact($skills));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('dashboard/profile');
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
    public function update(Request $request)
    {
        $profile = User::find(Auth::user()->id);
        $profile->name = $request->name;
        $profile->country =  $request->country;
        $profile->phone =  $request->phone;
        $profile->address =  $request->address;
        $profile->address2 =  $request->address2;
        $profile->current_company =  $request->current_company;
        $profile->position_company =  $request->position_company;
        $profile->zip =  $request->zip;
        $profile->about =  $request->about;
        $profile->state =  $request->state;
        $profile->website =  $request->website;
        $profile->country =  $request->country;
        $profile->email =  $request->email;
        $profile->industry =  $request->industry;
        $profile->education =  $request->education;

        $avatarName = '';
        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $avatarName = time() . Auth::user()->id . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(80, 80)->save(public_path('avatars/' . $avatarName));
            $profile->avatar =  $avatarName;
            $profile->update([$avatarName]);
        }


        $profile->update();

        $message = 'updated your profile successfully';
        $user = Auth::User();
        $body = 'You ' .$message;
        $title = 'Update Notification';
        $user->notify(new GeneralNotification($user, $body, $title));

        return redirect('dash');
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
