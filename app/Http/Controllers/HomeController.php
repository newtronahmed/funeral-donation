<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalDonations = Donation::sum('amount');
        
        return view('home',compact('totalDonations'));
    }
    public function store(Request $request){
        // dd($request);
       $validated= $request->validate([
            'name' => 'required',
            'receiver' => 'required',
            'amount' => 'required',
            'phone' =>'required',
        ]);
        $data = Donation::create([
            'name' => $validated['name'],
            'receiver' => $validated['receiver'],
            'amount' => $validated['amount'],
            'phone' => $validated['phone'],
            'hashId' => Str::random(30),
        ]);

        return redirect('/thankYou/'.$data->hashId);
    }
    public function thankYou($hashId){
        $data = Donation::where('hashId',$hashId)->first();
        
        return view('thankYou',compact('data'));
    }
    public function download($hashId){
        $data = Donation::where('hashId',$hashId)->first();

        view()->share('data',$data);
        $pdf = PDF::loadView('download' );

        return $pdf->download('receipt');
    }
}
