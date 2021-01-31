<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $CurrentUsers = User::orderby('id','asc')->paginate(10);
        return view('admin.users.allusers', compact('CurrentUsers'));
    }

    public function viewadd()
    {
        return view('admin.users.addusers');
    }

    public function viewedit(Request $request)
    {
        $EditUsers = User::where('id','=',$request->id)->get();
        return view('admin.users.editusers', compact('EditUsers'));
    }

    public function createUser(Request $request, userRequest $user)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin'=>$request->admin
        ]);
        return redirect('adminpanel/users/addusers')->with('msg','تم حفظ العضو');
    }

    public function updateUser(Request $request)
    {
        $data = User::where('id','=', $request->id)->first();
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin'=>$request->admin
        ]);

        return redirect('adminpanel/users/all')->with('msg', 'تم تعديل العضو بنجاح');
    }

    public function deleteUser(Request $request)
    {
        $data = User::where('id','=', $request->id)->first();
        $data->delete();
        return redirect('adminpanel/users/all')->with('msg', 'تم حذف العضو بنجاح');
    }
}
