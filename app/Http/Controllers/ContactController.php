<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

   public function getdata(){

   }

   public function contact_type($type){

    return view('contact')->with('type',$type);
   }

   public function postContact(Request $request){
    $rules= [
                'name'=>'required|min:2',
                'phone' =>'required|size:10',
                'message'=> 'required|min:4',
                ];
        $msg = [
                'name.required'=>'Không được bỏ trống tên.',        
                'name.min'=>'Tên quá ngắn',
                'phone.required'=>'Không được bỏ trống số điện thoại.',
                'phone.size'=>'Số điện thoại không hợp lệ',
                'message.required'=> 'Không được bỏ trống message.',
                'message.min' => 'Message quá ngắn!',
            
                ];
        $validator = Validator::make($request->all(), $rules , $msg);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }else{

            $contact = new Contact();
            $contact->type = $request->input('type');
            $contact->name = $request->input('name');
            $contact->phone = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->message = $request->input('message');
            $contact->save();
             Session::flash('flash_success','Cám ơn bạn đã gửi phản hồi cho chúng tôi! Chúng tôi sẽ phản hồi bạn trong thời gian sớm nhất.');
        return redirect()->route('contact');

        }


   }


}
