<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\product;
use App\Mail\PendingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function adminDashboard(){
        if(Auth::check()){
            if(Auth::User()->role ==1){
                return view('admin.index');
            }
            else{
                abort('403', 'You dont have rights to access this page');
            }
        }else{
            return redirect()->route('login');
        }
    }
    public function adminButton(){
        if(Auth::User()->role ==1){
            return view('admin.button');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function bookingIndex(){
        if(Auth::check()){
            if(Auth::User()->role ==1){
                $bookings = booking::all();
                return view('admin.booking', compact('bookings'));
            }
            else{
                abort('403', 'You dont have rights to access this page');
            }
        }else{
            return redirect()->route('login');
        }
    }

    public function bookingStore(Request $req){
        $booking = new booking();
        $booking->name = $req->name;
        $booking->phone = $req->number;
        $booking->email = $req->email;
        $booking->persons = $req->persons;
        $booking->booking_date = $req->date;
        $booking->save();

        $demo = [
            'name' =>$req->name,
            'email' => $req->email,
            'persons' => $req->persons,
            'booking_date' => $req->date
        ];

        Mail::to($demo['email'])->send(new PendingMail($demo));


        return redirect()->back()->with('success', 'Booking Has Been Done SUccessfully');
    }

    public function bookingApprove($id){
        $bookingId = $id;
        $booking = booking::find($id);
        $booking->status = 'approve';

        $booking->save();
        return redirect()->back()->with('success', 'Booking Approved');
    }
    public function bookingReject($id){
        $bookingId = $id;
        $booking = booking::find($id);
        $booking->status = 'reject';

        $booking->save();
        return redirect()->back()->with('success', 'Booking Rejected');
    }

    //Products
    public function productIndex(){
        if(Auth::check()){
            if(Auth::User()->role ==1){
                $products = product::all();
                return view('admin.product', compact('products'));
            }
            else{
                abort('403', 'You dont have rights to access this page');
            }
        }else{
            return redirect()->route('login');
        }
    }

    public function deleteProduct($id){
        $product = product::find($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product Deleted');
    }

    public function updateProductForm($id){
        $product = product::find($id);
        return view('admin.updateProduct', compact('product'));
    }
}
