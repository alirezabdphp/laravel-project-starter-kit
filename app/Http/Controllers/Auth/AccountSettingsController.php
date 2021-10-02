<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
//use Psy\Util\Str;
use Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use File;

class AccountSettingsController extends Controller
{
    /*
   |--------------------------------------------------------------------------
   | Admin User's Account Settings Controller
   |--------------------------------------------------------------------------
   |
   | This controller is responsible for handling admin users account settings Ex: Update Profile, Email , Password ...
   |
   */


    /**
     * Admin User edit profile page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        return view('auth.settings.account.admin-profile',[
            'user' => auth()->user()
        ]);
    }

    /**
     * Update admin users profile
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateProfile(Request $request)
    {
        $this->validate($request,[
            'name' =>  'required|max:255',
        ]);

        $user = User::findOrFail(auth()->user()->id);
        $user->fill($request->all());
        if($request->hasFile('profile_picture')){
            File::delete($user->profile_picture);
            $user->profile_picture = $request->profile_picture->move('uploads/account-settings/', Str::random(40) . '.' . $request->profile_picture->extension());
        }
        $user->save();

        Toastr::success('Profile successfully updated', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-bottom-right']);
        return redirect()->back();
    }


    /**
     * Redirect to change password blade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password()
    {
        return view('auth.settings.account.change-password');
    }


    /**
     * Update admin user's Password
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'current_password'      =>  'required|min:5',
            'c_password'  =>  'required|min:5',
            'password'       =>  'required|same:c_password'
        ]);

        if($this->isValidPassword($request)){
            $user = User::find(auth()->user()->id);
            $user->password = bcrypt($request->get('password'));
            if ($user->save()) {
                Toastr::success('Password saved successfully', '',  ['progressBar' => true, 'closeButton' => true]);
                return redirect()->back();
            }
        }else {
            Toastr::warning('Current password in not valid', '',  ['progressBar' => true, 'closeButton' => true]);
            return redirect()->back();
        }
    }


    /**
     * Redirect to change email blade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changeEmail()
    {
        return view('auth.settings.account.change-email');
    }


    /**
     * Update User Email
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateEmail(Request $request)
    {
        $this->validate($request,[
            'email'      =>  'required|email',
            'email' => Rule::unique('users')->ignore(auth()->user()->id,'id'),
        ]);

        if($this->isValidPassword($request)){
            $user = User::find(auth()->user()->id);
            $user->email = $request->email;
            if ($user->save()) {
                Toastr::success('Email changed successfully', '',  ['progressBar' => true, 'closeButton' => true]);
                return redirect()->back();
            }
        }else {
            Toastr::warning('Current password in not valid', '',  ['progressBar' => true, 'closeButton' => true]);
            return redirect()->back();
        }
    }


    /**
     * Change current password is valid
     * @param $request
     * @return bool
     */
    private function isValidPassword($request): bool
    {
        if (Hash::check($request->get('current_password'), auth()->user()->password)) {
            return true;
        } else {
            return false;
        }
    }
}
