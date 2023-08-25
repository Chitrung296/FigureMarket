<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Customer;
use App\Models\Product;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RegisterRequest;

class CustomerController extends Controller
{
    private $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $data = Customer::get('id')->first();
        return view('customer.index1', compact('data'));
    }

    public function CustomerList()
    {
        $data = Customer::where('is_deleted', 0)->get();

        //return $data;
        return view('admin.customer-list', compact('data'));
    }

    public function register()
    {
        return view('customer.registration');
    }

    public function Details($id){
        $pro = Product::where('productID', '=', $id)->first();
        return view('customer.product-details',compact('pro'));
    }


    public function processRegister(RegisterRequest $request)
    {
        $cus = new Customer();
        $cus->customerEmail = $request->email;
        $cus->customerPass = Hash::make($request->password);
        $cus->customerName = $request->name;
        $cus->customerAddress = $request->address;
        $cus->customerPhone = $request->phone;
        $cus->customerPhoto = $request->photo;
        $res = $cus->save();
        if ($res) {
            return view('customer.login');
        } else {
            return back()->with('fail', 'Something wrong! please enter again!');
        }
    }
    public function login()
    {
        return view('customer.login');
    }
    public function deleteCustomer($id)
    {
         $customer = $this->customer->where('id', $id)->first();
         if(!empty($customer)){
             $dataUpdate= [
                'is_deleted'=> 1,
             ];
         }
         $customerUpdate = $this->customer->where('id',$id)
                ->update($dataUpdate);
                return redirect(route('admin.customer.list'));
    }
    public function loginprocess(LoginRequest $request)
    {
        $custom = Customer::where('customerEmail', '=', $request->email)->first();
        if ($custom) {
            if (Hash::check($request->password, $custom->customerPass)) {
                $request->session()->put('cusEmail', $custom->customerEmail);
                $request->session()->put('cusName', $custom->customerName);
                $request->session()->put('cusPhoto', $custom->customerPhoto);
                $request->session()->put('cusId', $custom->id);
                return redirect('customer/index1');
            } else {
                return back()->with('fail', 'Password not match!');
            }
        } else {
            return back()->with('fail', 'Username dóe not exist!!');
        }
    }

    public function logout()
    {

        Session::pull('cusEmail');
        Session::pull('cusName');
        Session::pull('cusPhoto');

        return redirect('customer/index1');
    }

    public function customerEdit($id)
    {

        $data = $this->customer->where('id', '=', $id)->first();
        if (!empty($data)) {
            return view('customer.customer-edit', compact('data'));
        }
        abort(404);
    }
    public function customerUpdate(Request $request)
    {
        $customer = $this->customer->where('id', $request->id)->first();
        if (!empty($customer)) {
            $dataUpdate = [
                'customerEmail' => $request->email,
                'customerName' => $request->name,
                'customerAddress' => $request->address,
                'customerPhone' => $request->phone,
                'customerPhoto' => $request->photo
            ];

            if(!empty($request->password)){
                $dataUpdate['customerPass'] = Hash::make($request->password);
            }
            $request->session()->put('cusName',$request->name);
            $customerUpdate = $this->customer->where('id', $request->id)
                ->update($dataUpdate);
                return redirect('customer/index1');
        }
        // abort(404);
    }
    public function products()
{
    $pro = Product::get();
    return view('customer.product',compact('pro'));
}
}
