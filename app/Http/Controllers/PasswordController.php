<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;

class PasswordController extends Controller
{
    public function getPasswordChange()
    {
        return view('blog.admin.change-password');
    }

    public function postPasswordChange(Request $request)
    {
        $input = $request->all();

        $admin = Admin::find('1');

        if (password_verify($input['oldPassword'],$admin->password) && $input['newPassword']==$input['newConfirmPassword']) {
            $admin->password=bcrypt($input['newPassword']);
            $admin->save();
            return redirect()->route('admin.getChangePassword','status=success');
        }
        else return redirect()->route('admin.getChangePassword', 'error=invalid');

    }
}
