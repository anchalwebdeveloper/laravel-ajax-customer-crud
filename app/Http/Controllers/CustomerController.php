<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\country;
use App\Models\state;
use App\Models\city;




class CustomerController extends Controller
{
    public function createCutomer(){
        $countries=country::get();
        $states=State::get();
        $city=city::get();
        return view('customer.customer')->with(['countries'=> $countries, 'states'=>$states, 'city'=>$city]);

    }

    public function storeCustomer(Request $request){
        
        // p($request->all());
        // die;
       // Define validation rules
       $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:customers,email',
        'address' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'country_id' => 'required|integer|exists:countries,id',
        'state_id' => 'required|integer|exists:states,id',
        'city_id' => 'required|integer|exists:cities,id',
    ];

    // Validate the request data
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        // Return validation errors as JSON response
        return response()->json(['status' => false, 'errors' => $validator->errors()], 400);
    }

    // Create the customer
    $customer = new Customer();
    $customer->name = $request->name;
    $customer->email = $request->email;
    $customer->address = $request->address;
    $customer->phone = $request->phone;
    $customer->country_id = $request->country_id;
    $customer->state_id = $request->state_id;
    $customer->city_id = $request->city_id;
    $customer->save();

    // Return success response
    return response()->json(['status' => true, 'message' => 'Customer successfully added'], 200);
}

public function showCustomer(Request $request){
    $search = $request->input('search', '');
    if ($search != '') {
        $customers = Customer::where("name",  "LIKE", "%$search%")
        ->orWhere("email", "LIKE", "%$search%")
        ->orWhereHas('country', function($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%");
        })
        ->orWhereHas('state', function($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%");
        })
        ->orWhereHas('city', function($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%");
        })
        ->paginate(10);
    } else {
        $customers = Customer::with(['country', 'state', 'city'])->paginate(10);
    }

    return view('customer.index', compact('customers', 'search'));
}

    // join multiple table with one column
    // public function showCustomer() {
    //     $customers = DB::table('customers')
    //         ->select('customers.*', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name')
    //         ->join('countries', 'customers.country_id', '=', 'countries.id')
    //         ->join('states', 'customers.state_id', '=', 'states.id')
    //         ->join('cities', 'customers.city_id', '=', 'cities.id')
    //         ->get();
    
    //     return view('customer.index', compact('customers'));
    // }

    public function viewCustomer($customer_id){
        $customer = Customer::findOrFail($customer_id);

    // Check if $item is not false before accessing its properties
    if ($customer) {
        return view('customer.view', compact('customer'));
    } else {
        // Handle the case where the item is not found (e.g., show 404 page)
        abort(404);
    }
    }

    public function deleteCustomer($customer_id){
        $customer = Customer::findOrFail($customer_id);
        $customer->delete();
        return redirect()->route('customer.list');
    }

    public function tarshCustomer(){
        $customers = Customer::onlyTrashed()->get();
        return view('customer.trash', compact('customers'));

    }
    public function restoreCustomer($customer_id){
        $customer = Customer::withTrashed()->findOrFail($customer_id);
        $customer->restore();
        return redirect()->route('customer.list');
    }
    public function forcedeleteCustomer($customer_id){
        $customer = Customer::withTrashed()->findOrFail($customer_id);
        $customer->forceDelete();
        return redirect()->route('customer.list');
    }
}
