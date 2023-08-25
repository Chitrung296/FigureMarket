<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function StaffList()
    {
        $data = Staff::get();
        
        //return $data;
        return view('admin.staff-list',compact('data'));    
    }

    public function StaffAdd()
    {
        $data = Staff::get();
        return view('admin.staff-add',compact('data'));
    }
    
    public function StaffSave(Request $request)
    {
       
        $data = new Staff();
        // $data->staffID = $request->id;
        $data->image = $request->image;
        $data->firstName = $request->first_name;
        $data->lastName = $request->last_name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->position = $request->position;
        $data->salary = $request->salary;
        $data->save();
        return redirect()->back()->with('success', 'Staff added successfully!');
    }

    public function StaffDelete($id)
    {
        Staff::where('staffID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Staff deleted successfully');
    }

    public function StaffEdit($id)
    {
        $data = Staff::where('staffID', '=', $id)->first();
        return view('admin.staff-edit', compact('data'));
    }

    public function StaffUpdate(Request $request)
    {
        $img = $request->new_image == "" ? $request->old_image : $request->new_image;
        Staff::where('staffID', '=', $request->id)->update([
            'image'=>$img,
            'firstName'=>$request->first_name,
            'lastName'=>$request->last_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'position'=>$request->position,
            'salary'=>$request->salary
        ]);
        return redirect()->back()->with('success', 'Staff updated successfully!');
    }
}
