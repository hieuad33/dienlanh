<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Session;
class ServiceController extends Controller
{
    public function getview(){
        $services = Service::all();
        return view('service',['services'=> $services]);    
    }
     public function search(Request $request){
        $search = $request->input('search');
        $services = Service::where('name', 'like',"%".$search."%")->get();
        return view('service',['services'=> $services])->with('keysearch',$search   );    
    }

    public function getServiceslug($slug){
        $service = Service::where('slug',$slug)->first();
        if($service)
        {
            $service->view++;
            $service->save();
             $services = Service::where('slug','!=', $slug)->take(5)->get();
             
            return view('service.serviceview')
                    ->with('services',$services)
                    ->with('service',$service);
            
        }
        else
        {
            return 404;
        }
       
    }

     public function getList()
    {
        $services = Service::all();
        return view('admin.service.list',['services'=> $services]);
    }
    public function getAdd()
    {
        
        return view('admin.service.add');
    }
    public function postAdd(Request $request)
    {
        $rules= [
                'name'=>'required|min:3|max:150',
                'des' =>'required',
                'content'=> 'required',
                'slug'=> 'required|unique:services,slug|alpha_dash',
                ];
        $msg = [
                'name.required'=>'Không được bỏ trống Tên.',
                'name.unique' => 'Dịch vụ này đã bị trùng, vui lòng nhập lại!',
                'name.min'=>'Tên gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên gồm tối đa 100 ký tự!',
                'des.required'=>'Không được bỏ trống tóm tắt.',
                'content.required'=>'Không được bỏ trống nội dung',
            
                'slug.unique' => 'Url đã tồn tại, vui lòng nhập lại tên!',
                'slug.required'=> 'Không được bỏ trống url',
                'slug.alpha_dash'=> 'Sai định dạng slug.',
                ];
        $validator = Validator::make($request->all(), $rules , $msg);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $service = new Service();
            $service->name = $request->input('name');
            $service->detail = $request->input('content');
            $service->description = $request->input('des');
           
            //if(Auth::user()->role =='admin'){
               
           // }
            $service->slug = $request->input('slug');
           // $service->user_id = 1;//Auth::user()->id;
            $service->price = $request->input('price');
            //Upload Image
            if($request->hasFile('img_post')){
                $file = $request->file('img_post');
                $file_extension = $file->getClientOriginalExtension(); // Lấy đuôi của file
                if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){
                   
                } else if($file_extension == 'mp4' || $file_extension == '3gp' || $file_extension == 'avi' || $file_extension == 'flv'){
                   
                } else return redirect()->back()->with('errfile','Chưa hỗ trợ định dạng file vừa upload.')->withInput();

                $file_name = $file->getClientOriginalName();
                $random_file_name = Str::random(4).'_'.$file_name;
                while(file_exists('upload/services/'.$random_file_name)){
                    $random_file_name = Str::random(4).'_'.$file_name;
                }
                $file->move('upload/services',$random_file_name);
                // $file_upload = new File();
                // $file_upload->name = $random_file_name;
                // $file_upload->link = 'upload/posts/'.$random_file_name;
                // $file_upload->post_id = $service->id;
                // $file_upload->save();
                $service->image = 'upload/services/'.$random_file_name;
            } else $service->image='';


            $service->save();
            // Inset to table tag.


           
        }
        Session::flash('flash_success','Thêm dịch vụ thành công.');
        return redirect()->route('list-service');
    }
    public function getUpdate($id)
    {
        $service = Service::find($id);
        if($service){
            if(true){ // $service->user_id == Auth::user()->id
                return view('admin.service.edit',['service'=>$service]);
            } else {
                 Session::flash('flash_err','Bạn không có quyền thay đổi.');
                return redirect()->route('list-service');
            }
        }
        else {
            Session::flash('flash_err','Sai Thông tin Dịch vụ.');
            return redirect()->route('list-service');
        }
        
    }

    public function postUpdate(Request $request,$id)
    {
        $service = Service::find($id);
        if( $service ) {
            if(true || $service->user_id == Auth::user()->id){
                if($service->slug == $request->input('slug')){
                   $rules= [
                'name'=>'required|min:3|max:150',
                'des' =>'required',
                'content'=> 'required',
               
                ];
        $msg = [
                'name.required'=>'Không được bỏ trống Tên.',
                'name.unique' => 'Dịch vụ này đã bị trùng, vui lòng nhập lại!',
                'name.min'=>'Tên gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên gồm tối đa 100 ký tự!',
                'des.required'=>'Không được bỏ trống tóm tắt.',
                'content.required'=>'Không được bỏ trống nội dung',
            
               
                ];
                } else {
                            $rules= [
                'name'=>'required|min:3|max:100',
                'des' =>'required|max:180',
                'content'=> 'required',
                'slug'=> 'required|unique:services,slug|alpha_dash',
                ];
        $msg = [
                'name.required'=>'Không được bỏ trống Tên.',
                'name.unique' => 'Dịch vụ này đã bị trùng, vui lòng nhập lại!',
                'name.min'=>'Tên gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên gồm tối đa 100 ký tự!',
                'des.required'=>'Không được bỏ trống tóm tắt.',
                'content.required'=>'Không được bỏ trống nội dung',
            
                'slug.unique' => 'Url đã tồn tại, vui lòng nhập lại tên!',
                'slug.required'=> 'Không được bỏ trống url',
                'slug.alpha_dash'=> 'Sai định dạng slug.',
                ];
                }
                $validator = Validator::make($request->all(), $rules , $msg);

                if ($validator->fails()) {
                    return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
                } else {
                    $service->name = $request->input('name');
                    $service->detail = $request->input('content');
                    $service->description = $request->input('des');
                    $service->slug = $request->input('slug');
                        $service->price = $request->input('price');
                   // $service->user_id = Auth::user()->id;
                  
                    //Upload Image
                    if($request->hasFile('img_post')){
                        ini_set('memory_limit','256M');
                        $file = $request->file('img_post');
                        $file_extension = $file->getClientOriginalExtension(); // Lấy đuôi của file
                        if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){
                          
                        } else if($file_extension == 'mp4' || $file_extension == '3gp' || $file_extension == 'avi' || $file_extension == 'flv'){
                           
                        } else return redirect()->back()->with('errfile','Chưa hỗ trợ định dạng file vừa upload.')->withInput();

                        $file_name = $file->getClientOriginalName();
                        $random_file_name = Str::random(4).'_'.$file_name;
                        while(file_exists('upload/services/'.$random_file_name)){
                            $random_file_name = Str::random(4).'_'.$file_name;
                        }
                        $file->move('upload/services',$random_file_name);
                        // $file_upload = new File();
                        // $file_upload->name = $random_file_name;
                        // $file_upload->post_id = $service->id;
                        // $file_upload->save();
                        $service->image = 'upload/services/'.$random_file_name;
                    }

                    $service->save();

                    Session::flash('flash_success','Thay đổi thành công.');
                    return redirect()->route('list-service');
                }
            } else {
                    Session::flash('flash_err','Bạn không có quyền thay đổi.');
                    return redirect()->route('list-service');
                }
        } else {
            Session::flash('flash_err','Sai thông tin Dịch vụ.');
            return redirect()->route('list-service');
        }
    }
        
    public function getDelete($id)
    {
        $service = Service::find($id);
            if( $service ){
                if( true ){ //$service->user_id == Auth::user()->id || Auth::user()->role == 'admin'
                  ;
                    $service->delete();
                    Session::flash('flash_success','Xóa thành công.');
                    return redirect()->route('list-service');
                } else {
                    Session::flash('flash_err','Bạn không có quyền xóa bài.');
                    return redirect()->route('list-service');
                }
            } else {
                Session::flash('flash_err','Dịch vụ không tồn tại.');
            }
            return redirect()->route('list-service');
    }
    
}
