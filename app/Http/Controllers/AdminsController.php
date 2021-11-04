<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect; 

use Illuminate\Support\Str;

use Storage;

use Mail;

use Hash;

use Session;

use datetime;

use App\Term;

use App\Models\Models;

use App\Privacy;

use App\Admin;

use App\Models\User;

use App\Models\Blog;

use App\Banner;

use App\Message;

use App\Models\ReplyMessage;

use App\Category;

use App\Slider;

use App\Models\Gallery;

use App\Models\Sermon;

use App\Models\Ministry;

use App\Models\Subscriber;

use App\Models\Update;

use App\Notifications;

use App\Models\Testimonial;

use App\Models\Comment;

use App\Models\Register;

class AdminsController extends Controller
{


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response 
     */
    
    //  Home Page
    public function index(){
        $Message = DB::table('messages')->where('status','0')->get();
 
        $page_title = 'Admin Home';
        $page_name = 'Admin Home';
        return view('admin.index',compact('page_title','page_name','Message'));
    }

    //sitesettings
    public function sitesettings(){
        $SiteSettings = DB::table('sitesettings')->get();
        $page_title = 'formfiletext';
        $page_name = 'Site Setting';
        return view('admin.sitesettings',compact('page_title','page_name','SiteSettings'));
    }

    public function savesitesettings(Request $request)
    {
        $path = 'uploads/logo';
        if(isset($request->logo)){
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logo = $filename;
        }else{
            $logo = $request->logo_cheat;
        }
        if(isset($request->logoo)){
            $file = $request->file('logoo');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logoo = $filename;
        }else{
            $logoo = $request->logoo_cheat;
        }
        if(isset($request->favicon)){
            $file = $request->file('favicon');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $favicon = $filename;
        }else{
            $favicon = $request->favicon_cheat;
        }
        $updateDetails = array(
            'sitename'=>$request->sitename,
            'logo'=>$logo,
            'logoo'=>$logoo,
            'favicon'=>$favicon, 
            'email'=>$request->email,
            'email_one'=>$request->email_one,
            'mobile'=>$request->mobile,
            'mobile_one'=>$request->mobile_one,
            'mobile_two'=>$request->mobile_two,
            'tagline'=>$request->tagline,
            'url'=>$request->url,

            'location'=>$request->location,
            'address'=>$request->address,
            'facebook'=>$request->facebook,
            'paypal'=>$request->paypal,
            'mpesa'=>$request->mpesa,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram,
            'youtube'=>$request->youtube,
            'google'=>$request->google,

            'welcome'=>$request->welcome
            
        );
        DB::table('sitesettings')->update($updateDetails);
        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }
    public function copyright(){
        $Copyright = DB::table('copyright')->get();
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'Copyright';
        return view('admin.copyright',compact('page_title','page_name','Copyright'));
    }
    public function edit_copyright(Request $request){
        $updateDetails = array(
            'content'=>$request->content
        );
        DB::table('copyright')->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }
    public function about(){
        $About = DB::table('about')->get();
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'About Us';
        return view('admin.about',compact('page_title','page_name','About'));
    }
    public function about_save(Request $request){
        $path = 'uploads/images';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
        $updateDetails = array(
            'content'=>$request->content,
            'image'=>$image,

            'vision' => $request->support,
            'mission' => $request->handpicked,
            
        );
        DB::table('about')->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }
    // 
    public function abouts(){
        $About = DB::table('about')->get();
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'About Us';
        return view('admin.abouts',compact('page_title','page_name','About'));
    }
    public function abouts_save(Request $request){
       
        $updateDetails = array(
            'contents'=>$request->content,

        );
        DB::table('about')->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }

    // 


    public function addTerms(){
        $page_name = 'Add Terms & Conditions';
        $page_title = 'formfiletext';//For Style Inheritance
        return view('admin.addTerms',compact('page_title','page_name'));
    }
    public function add_term(Request $request){
        $terms = new Term;
        $terms->title = $request->title;
        $terms->content = $request->content;
        $terms->save();
        Session::flash('message', "Content Has been Added");
        return Redirect::back();
    }

    public function terms(){
        $page_name = 'Terms & Conditions';
        $Terms = Term::All();
        $page_title = 'list';
        return view('admin.terms',compact('page_title','Terms','page_name'));
    }
    public function editTerm($id){
        $Terms = Term::find($id);
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = $Terms->title;
        return view('admin.editTerm')->with('Terms',$Terms)->with('page_title',$page_title)->with('page_name',$page_name);
    }

    public function edit_term(Request $request, $id){
       $updateDetails = array(
           'title'=>$request->title,
           'content' =>$request->content
       );
       DB::table('terms')->where('id',$id)->update($updateDetails);
       Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function delete_term($id){
        DB::table('terms')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function addPrivacy(){
        $page_name = 'Add Privacy Policy';
        $page_title = 'formfiletext';//For Style Inheritance
        return view('admin.addPrivacy',compact('page_title','page_name'));
    }
    public function add_privacy(Request $request){
        $privacy = new Privacy;
        $privacy->title = $request->title;
        $privacy->content = $request->content;
        $privacy->save();
        Session::flash('message', "Content Has been Added");
        return Redirect::back();
    }

    public function privacy(){
        $Privacy = Privacy::All();
        $page_name = 'Privacy Policies';
        $page_title = 'list';
        return view('admin.privacy',compact('page_title','Privacy','page_name'));
    }
    public function editPrivacy($id){
        $Privacy = Privacy::find($id);
        $page_name = $Privacy->title;
        $page_title = 'formfiletext';//For Style Inheritance
        
        return view('admin.editPrivacy')->with('Privacy',$Privacy)->with('page_name',$page_name)->with('page_title',$page_title);
    }

    public function edit_privacy(Request $request, $id){
       $updateDetails = array(
           'title'=>$request->title,
           'content' =>$request->content
       );
       DB::table('privacy')->where('id',$id)->update($updateDetails);
       Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function delete_privacy($id){
        DB::table('privacy')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function addAdmin(){
        $page_name = 'Add Site Admin';
        $page_title = 'formfiletext';//For Style Inheritance
        return view('admin.addAdmin',compact('page_title','page_name'));
    }

    public function add_Admin(Request $request){
        $path = 'uploads/admins';
        
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;
        
        $password_inSecured = $request->password;
        //harshing password Here
        $password = Hash::make($password_inSecured);
         $Admin = new Admin;
         $Admin->name = $request->name;
         $Admin->email = $request->email;
         $Admin->password = $password;
         $Admin->image = $image;
         $Admin->save();
         Session::flash('message', "$request->name has been added as new admin");
         return Redirect::back();

    }
    public function admins(){
        $page_title = 'list';
        $page_name = 'Site Administrator';
        $Admin = Admin::all();
        return view('admin.admins',compact('page_title','Admin','page_name'));
    }

    public function editAdmin($id){
        $newID = Auth::user()->id;
        $Admin = Admin::find($newID);
        $page_title = 'formfiletext';//For Style Inheritance
        $page_name = 'Edit Site Administrator';
       
        return view('admin.editAdmin',compact('page_title','Admin','page_name'));
    }

    public function edit_Admin(Request $request, $id){
        $path = 'uploads/admins';
        if($request->email == Auth::user()->email ){
            if(isset($request->image)){
               
                   
                    $file = $request->file('image');
                    $filename = str_replace(' ', '', $file->getClientOriginalName());
                    $timestamp = new Datetime();
                    $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                    $image_main_temp = $new_timestamp.'image'.$filename;
                    $image = str_replace(' ', '',$image_main_temp);
                    $file->move($path, $image);
                
            }else{
                $image = $request->image_cheat;
            }
            $updateDetails = array(
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'facebook'=>$request->facebook,
                    'twitter'=>$request->twitter,
                    'linkedin'=>$request->linkedin,
                    'instagram'=>$request->instagram,
                    'youtube'=>$request->youtube,
                    'google'=>$request->google,
                    'content'=>$request->content,
                    'position'=>$request->position,
                    'image'=>$image
            );
            DB::table('admins')->where('id',$id)->update($updateDetails);
            Session::flash('message', "Your Changes Have Been Saved");
            return Redirect::back();
        }else{
            if(isset($request->image)){
               
                   
                    $file = $request->file('image');
                    $filename = str_replace(' ', '', $file->getClientOriginalName());
                    $timestamp = new Datetime();
                    $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                    $image_main_temp = $new_timestamp.'image'.$filename;
                    $image = str_replace(' ', '',$image_main_temp);
                    $file->move($path, $image);
                
            }else{
                $image = $request->image_cheat;
            }
            $updateDetails = array(
                'name'=>$request->name,
                'email'=>$request->email,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'linkedin'=>$request->linkedin,
                'instagram'=>$request->instagram,
                'youtube'=>$request->youtube,
                'google'=>$request->google,
                'content'=>$request->content,
                'position'=>$request->position,
                'image'=>$image
            );
            DB::table('admins')->where('id',$id)->update($updateDetails);
            Auth::guard('admin')->logout();
            return Redirect::back();
        }
    }
    

    public function deleteAdmin($id){
        if($id==1){
            echo "<script>alert('You cannot Delete the Supper Admin)</script>";
            
            return Redirect::back();
        }else{
            DB::table('admins')->where('id',$id)->delete();
            return Redirect::back();
        }
    }


    public function banners(){
        $Slider = Banner::all();
        $page_title = 'list';
        $page_name = 'Banners';
        return view('admin.banner',compact('page_title','Slider','page_name'));
    }

    public function editBanner($id){
        $Banner = Banner::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Site Banner';
        return view('admin.editBanner',compact('page_title','Banner','page_name'));
    }
    
    public function edit_Banner(Request $request, $id){
        $path = 'uploads/banners';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
        $updateDetails = array(
            'name'=>$request->name,
            'section' =>$request->section,
            'image' =>$image
        );
        DB::table('banners')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function allMessages(){
        $Message = Message::all();
        $page_title = 'list';
        $page_name = 'Messages';
        return view('admin.allMessages',compact('page_title','Message','page_name'));
    }
    public function unread(){
        $Message = DB::table('messages')->where('status','0')->get();
        $page_title = 'list';
        $page_name = 'Messages';
        return view('admin.allMessages',compact('page_title','Message','page_name'));
    }
    public function read($id){
        $Message = Message::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Messages';
        return view('admin.read',compact('page_title','Message','page_name'));
    }
    public function reply(Request $request,$id){
        $reply = $request->message;
        $subject = $request->subject;
        $name = $request->name;
        $email = $request->email;
        
        //Call The Generic Reply Class
        ReplyMessage::SendMessage($reply,$subject,$name,$email,$id);
    }
    public function deleteMessage($id){
        DB::table('messages')->where('id',$id)->delete();
        return Redirect::back();
    }

        
public function categories(){
    $Category = Category::all();
    $page_title = 'list';
    $page_name = 'Categories';
    return view('admin.categories',compact('page_title','Category','page_name'));
}

public function addCategory(){
    $page_title = 'formfiletext';
    $page_name = 'Add Category';
    return view('admin.addCategory',compact('page_title','page_name'));
}

public function add_Category(Request $request){
    
    $Category = new Category;
    $Category->cat = $request->name;
    
    $Category->save();
    Session::flash('message', "Category Has Been Added");
    return Redirect::back();
}

public function editCategories($id){
    $Category = Category::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Home Page Slider';
    return view('admin.editCategory',compact('page_title','Category','page_name'));
}

public function edit_Category(Request $request, $id){
    $path = 'uploads/categories';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }
    $updateDetails = array(
        'cat'=>$request->name,
        // 'description'=>$request->content,
        'image'=>$image
      
    );
    DB::table('category')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteCategory($id){
    DB::table('category')->where('id',$id)->delete();
    return Redirect::back();
}


public function addProduct(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add New Product';
    return view('admin.addProduct',compact('page_title','page_name'));
}

public function add_Product(Request $request){

    $path = 'uploads/product';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        
            
            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         
    }else{
        $image_two = $request->pro_img_cheat;
    }

    
    if(isset($request->image_three)){
        $fileSize = $request->file('image_three');
       
           
            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        
    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four');
       
           
            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        
    }else{
        $image_four = $request->pro_img_cheat;
    }

    if(isset($request->image_five)){
        $fileSize = $request->file('image_five');
       
           
            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        
    }else{
        $image_five = $request->pro_img_cheat;
    }

    if(isset($request->image_six)){
        $fileSize = $request->file('image_six');
       
           
            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        
    }else{
        $image_six = $request->pro_img_cheat;
    }

    if(isset($request->image_seven)){
        $fileSize = $request->file('image_seven');
       
           
            $file = $request->file('image_seven');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_seven = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_seven);
        
    }else{
        $image_seven = $request->pro_img_cheat;
    }

    if(isset($request->image_eight)){
        $fileSize = $request->file('image_eight');
       
           
            $file = $request->file('image_eight');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_eight = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_eight);
        
    }else{
        $image_eight = $request->pro_img_cheat;
    }

    if(isset($request->image_nine)){
        $fileSize = $request->file('image_nine');
       
           
            $file = $request->file('image_nine');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_nine = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_nine);
        
    }else{
        $image_nine = $request->pro_img_cheat;
    }

    if(isset($request->image_ten)){
        $fileSize = $request->file('image_ten');
       
           
            $file = $request->file('image_ten');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_ten = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_ten);
        
    }else{
        $image_ten = $request->pro_img_cheat;
    }

    if(isset($request->slider)){
        $fileSize = $request->file('slider');
       
           
            $file = $request->file('slider');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $slider = str_replace(' ', '',$image_main_temp);
            $file->move($path, $slider);
        
    }else{
        $slider = $request->pro_img_cheat;
    }
    //Additional images
    

    $Product = new Product;
    $Product->name = $request->name;
    $Product->slung = Str::slug($request->title);
    $Product->title = $request->title;
    $Product->location = $request->location;
    $Product->content = $request->content;
    $Product->price = $request->price;
    $Product->meta = $request->meta;
    $Product->cat = $request->category;
    $Product->type = $request->type;
    $Product->br = $request->br;
    $Product->bath = $request->bath;
    $Product->video = $request->video;
    $Product->map = $request->map;
    $Product->agent = $request->agent;
    $Product->sqr = $request->sqr;

    $Product->slider = $slider;
    $Product->image_one = $image_one;
    $Product->image_two = $image_two;
    $Product->image_three = $image_three;
    $Product->image_four = $image_four;
    $Product->image_five = $image_five;
    $Product->image_six = $image_six;
    $Product->image_seven = $image_seven;
    $Product->image_eight = $image_eight;
    $Product->image_nine = $image_nine;
    $Product->image_ten = $image_ten;
 
    $Product->save();
    
    Session::flash('message', "You have Added One New Product");
    return Redirect::back();
}

public function Products(){
    $Product = Product::all();
    $page_title = 'list';
    $page_name = 'All Products';
    return view('admin.products',compact('page_title','Product','page_name'));
}

public function editProduct($id){
    $Product = Product::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Product';
    return view('admin.editProduct',compact('page_title','Product','page_name'));
}





public function edit_Product(Request $request, $id){

    $path = 'uploads/product';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        
            
            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         
    }else{
        $image_two = $request->image_two_cheat;
    }

    
    if(isset($request->image_three)){
        $fileSize = $request->file('image_three');
       
           
            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        
    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four');
       
           
            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        
    }else{
        $image_four = $request->image_four_cheat;
    }

    if(isset($request->image_five)){
        $fileSize = $request->file('image_five');
       
           
            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        
    }else{
        $image_five = $request->image_five_cheat;
    }

    if(isset($request->image_six)){
        $fileSize = $request->file('image_six');
       
           
            $file = $request->file('image_six');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_six = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_six);
        
    }else{
        $image_six = $request->image_six_cheat;
    }

    if(isset($request->image_seven)){
        $fileSize = $request->file('image_seven');
       
           
            $file = $request->file('image_seven');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_seven = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_seven);
        
    }else{
        $image_seven = $request->image_seven_cheat;
    }

    if(isset($request->image_eight)){
        $fileSize = $request->file('image_eight');
       
           
            $file = $request->file('image_eight');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_eight = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_eight);
        
    }else{
        $image_eight = $request->image_eight_cheat;
    }

    if(isset($request->image_nine)){
        $fileSize = $request->file('image_nine');
       
           
            $file = $request->file('image_nine');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_nine = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_nine);
        
    }else{
        $image_nine = $request->image_nine_cheat;
    }

    if(isset($request->image_ten)){
        $fileSize = $request->file('image_ten');
       
           
            $file = $request->file('image_ten');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_ten = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_ten);
        
    }else{
        $image_ten = $request->image_ten_cheat;
    }

    if(isset($request->slider)){
        $fileSize = $request->file('slider');
       
           
            $file = $request->file('slider');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $slider = str_replace(' ', '',$image_main_temp);
            $file->move($path, $slider);
        
    }else{
        $slider = $request->slider_cheat;
    }
   

    $updateDetails = array(
   
        'name' =>$request->name,
        'slung' =>Str::slug($request->title),
        'title' =>$request->title,
        'location' =>$request->location,
        'content' =>$request->content,
        'price' =>$request->price,
        'meta' =>$request->meta,
        'cat' =>$request->category,
        'type' =>$request->type,
        'br' =>$request->br,
        'bath' =>$request->bath,
        'video' =>$request->video,
        'map' =>$request->map,
        'agent' =>$request->agent,
        'sqr' =>$request->sqr,
        'slider' =>$slider,
        'image_one' =>$image_one,
        'image_two' =>$image_two,
        'image_three' =>$image_three,
        'image_four' =>$image_four,
        'image_five' =>$image_five,
        'image_six' =>$image_six,
        'image_seven' =>$image_seven,
        'image_eight' =>$image_eight,
        'image_nine' =>$image_nine,
        'image_ten' =>$image_ten,
    );
    DB::table('product')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteProduct($id){
    
    DB::table('product')->where('id',$id)->delete();
    return Redirect::back();
}


public function updates(){
    $Update = Update::all();
    $page_title = 'list';
    $page_name = 'Updates';
    return view('admin.updates',compact('page_title','Update','page_name'));
}

public function update($id){
    $Update = Update::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Updates';
    return view('admin.update',compact('page_title','Update','page_name'));
}
public function mark($id){
    $updateDetails = array(
        'status'=>1
    );
    DB::table('updates')->where('id',$id)->update($updateDetails);
    return back();
}



public function notifications(){
    $Notifications = Notifications::all();
    $page_title = 'list';
    $page_name = 'Notifications';
    return view('admin.notifications',compact('page_title','Notifications','page_name'));
}

public function notification($id){
    $Notifications = Notifications::all();
    $page_title = 'list';
    $page_name = 'Notification';
    return view('admin.notification',compact('page_title','Notifications','page_name'));
}

// Testimonials
public function addTestimonial(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'addTestimonial';
    return view('admin.addTestimonial',compact('page_title','page_name'));
}

public function add_Testimonial(Request $request){

    $path = 'uploads/testimonials';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->pro_img_cheat;
    }

    

   

    $Testimonial = new Testimonial;
    $Testimonial->name = $request->name;
    $Testimonial->content = $request->content;
    $Testimonial->company = $request->company;
    $Testimonial->service = $request->service;
    $Testimonial->position = $request->position;
    $Testimonial->rating = $request->rating;
    
    $Testimonial->image = $image_one;
     
    $Testimonial->save();
  
    Session::flash('message', "Testimonial Has Been Added");
    return Redirect::back();
}

public function testimonials(){
    $Testimonial = Testimonial::all();
    $page_title = 'list';
    $page_name = 'Testimonial';
    return view('admin.testimonial',compact('page_title','Testimonial','page_name'));
}

public function editTestimonial($id){
    $Testimonial = Testimonial::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Testimonial';
    return view('admin.editTestimonial',compact('page_title','Testimonial','page_name'));
}


public function edit_Testimonial(Request $request, $id){
    $path = 'uploads/testimonials';
    if(isset($request->image_one)){
       
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->image_one_cheat;
    }


   

    $updateDetails = array(
        'name' => $request->name,
        'content' => $request->content,
        'service' => $request->service,
        'company' => $request->company,
        'position' => $request->position,
        'image' =>$image_one,
        
        
    );
    DB::table('testimonials')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteTestimonial($id){
    DB::table('testimonials')->where('id',$id)->delete();
   
    return Redirect::back();
}

public function deleteImage($id,$image,$table){
    
    $updateDetails = array(
        $image=>NULL,
    );

    DB::table($table)->where('id',$id)->update($updateDetails);
    return Redirect::back();
}


public function addBlog(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add New Blog';
    return view('admin.addBlog',compact('page_title','page_name'));
}

public function add_Blog(Request $request){

    $path = 'uploads/blogs';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_two)){
        
            
            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         
    }else{
        $image_two = $request->pro_img_cheat;
    }

    
    if(isset($request->image_three)){
        $fileSize = $request->file('image_three');
       
           
            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        
    }else{
        $image_three = $request->pro_img_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four');
       
           
            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        
    }else{
        $image_four = $request->pro_img_cheat;
    }

    if(isset($request->image_five)){
        $fileSize = $request->file('image_five');
       
           
            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        
    }else{
        $image_five = $request->pro_img_cheat;
    }


    $Blog = new Blog;
    $Blog->slung = Str::slug($request->title);
    $Blog->title = $request->title;
    $Blog->date = $request->date;
    $Blog->content = $request->content;
    $Blog->registration = $request->registration;
    $Blog->event = $request->event;
    $Blog->meta = $request->meta;
    $Blog->category = $request->category;
    $Blog->link = $request->link;
    $Blog->author = $request->agent;
    $Blog->video = $request->video;
    $Blog->image_one = $image_one;
    $Blog->image_two = $image_two;
    $Blog->image_three = $image_three;
    $Blog->image_four = $image_four;
    $Blog->image_five = $image_five;
 
    $Blog->save();
    
    Session::flash('message', "You have Added One New Blog");
    return Redirect::back();
}

public function Blogs(){
    $Blog = Blog::all();
    $page_title = 'list';
    $page_name = 'All Blogs';
    return view('admin.blogs',compact('page_title','Blog','page_name'));
}

public function editBlog($id){
    $Blog = Blog::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Blog';
    return view('admin.editBlog',compact('page_title','Blog','page_name'));
}





public function edit_Blog(Request $request, $id){

    $path = 'uploads/blogs';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_two)){
        
            
            $file = $request->file('image_two');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_two = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_two);
         
    }else{
        $image_two = $request->image_two_cheat;
    }

    
    if(isset($request->image_three)){
        $fileSize = $request->file('image_three');
       
           
            $file = $request->file('image_three');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_three = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_three);
        
    }else{
        $image_three = $request->image_three_cheat;
    }

    if(isset($request->image_four)){
        $fileSize = $request->file('image_four');
       
           
            $file = $request->file('image_four');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_four = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_four);
        
    }else{
        $image_four = $request->image_four_cheat;
    }

    if(isset($request->image_five)){
        $fileSize = $request->file('image_five');
       
           
            $file = $request->file('image_five');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_five = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_five);
        
    }else{
        $image_five = $request->image_five_cheat;
    }



    $updateDetails = array(
        'slung' =>Str::slug($request->title),
        'title' =>$request->title,
        'date' =>$request->date,
        'content' =>$request->content,
        'event' =>$request->event,
        'registration' =>$request->registration,
        'meta' =>$request->meta,
        'category' =>$request->category,
        'link' =>$request->link,
        'author' =>$request->agent,
        'video' =>$request->video,
        'image_one' =>$image_one,
        'image_two' =>$image_two,
        'image_three' =>$image_three,
        'image_four' =>$image_four,
        'image_five' =>$image_five,
    );
    DB::table('blogs')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteBlog($id){
    $Curriculum = DB::table('blogs')->where('id',$id)->delete();
    return Redirect::back();
}


public function add_product_Featured($id){
   $Status = Product::find($id);
   if($Status->featured == 1){
       $updateDetails = array(
          'featured'=>0,
       );
   }else{
    $updateDetails = array(
        'featured'=>1,
     );
   }
   DB::table('product')->where('id',$id)->update($updateDetails);
   Session::flash('message', "Changes have been saved");
   return Redirect::back();

}

public function add_product_Slider($id){
    $Status = Product::find($id);
    if($Status->slider_area == 1){
        $updateDetails = array(
           'slider_area'=>0,
        );
    }else{
     $updateDetails = array(
         'slider_area'=>1,
      );
    }
    DB::table('product')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

// 

public function addSermon(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add New Sermon';
    return view('admin.addSermon',compact('page_title','page_name'));
}

public function add_Sermon(Request $request){

    $path = 'uploads/sermons';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_file)){
        
            
        $file = $request->file('image_file');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'file'.$filename;
        $image_file = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image_file);
     
         
    }else{
        $image_file = $request->pro_img_cheat;
    }

    
  

    $Sermon = new Sermon;
    $Sermon->slung = Str::slug($request->title);
    $Sermon->title = $request->title;
    $Sermon->content = $request->content;
    $Sermon->author = $request->author;
    $Sermon->meta = $request->meta;
    $Sermon->books = $request->books;
    $Sermon->author = $request->agent;
    $Sermon->video = $request->video;
    $Sermon->image = $image_one;
    $Sermon->file = $image_file;
    $Sermon->save();
    
    Session::flash('message', "You have Added One New Sermon");
    return Redirect::back();
}



public function Sermons(){
    $Sermon = Sermon::all();
    $page_title = 'list';
    $page_name = 'All Sermons';
    return view('admin.sermons',compact('page_title','Sermon','page_name'));
}

public function editSermon($id){
    $Sermon = Sermon::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Sermon';
    return view('admin.editSermon',compact('page_title','Sermon','page_name'));
}




public function edit_Sermon(Request $request, $id){

    $path = 'uploads/sermons';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->image_one_cheat;
    }

    if(isset($request->image_file)){
        
            
        $file = $request->file('image_file');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'file'.$filename;
        $image_file = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image_file);
     
    }else{
        $image_file = $request->image_file_cheat;
    }

    
  



    $updateDetails = array(
        'slung' =>Str::slug($request->title),
        'title' =>$request->title,
        'content' =>$request->content,
        'meta' =>$request->meta,
        'books' =>$request->books,
        'author' =>$request->agent,
        'video' =>$request->video,
        'image' =>$image_one,
        'file' =>$image_file,
    );
    DB::table('sermons')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}



public function deleteSermon($id){
    $Curriculum = DB::table('sermons')->where('id',$id)->get();
    return Redirect::back();
}
// 

public function slider(){
    $Slider = Slider::all();
    $page_title = 'list';
    $page_name = 'Home Page Slider';
    return view('admin.slider',compact('page_title','Slider','page_name'));
}

public function addSlider(){
    $page_title = 'formfiletext';
    $page_name = 'Add Home Page Slider';
    return view('admin.addSlider',compact('page_title','page_name'));
}

public function add_Slider(Request $request){
    $path = 'uploads/slider';
    $file = $request->file('image');
    $filename = $file->getClientOriginalName();
    $file->move($path, $filename);
    $image = $filename;
    $Slider = new Slider;
    $Slider->name = $request->name;
    $Slider->heading = $request->heading;
    $Slider->content = $request->content;
    $Slider->image = $image;
    $Slider->save();
    Session::flash('message', "Slider Image Has Been Added");
    return Redirect::back();
}

public function editSlider($id){
    $Slider = Slider::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Home Page Slider';
    return view('admin.editSlider',compact('page_title','Slider','page_name'));
}

public function edit_Slider(Request $request, $id){
    $path = 'uploads/slider';
    if(isset($request->image)){
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;
    }else{
        $image = $request->image_cheat;
    }
    $updateDetails = array(
        'name'=>$request->name,
        'heading'=>$request->heading,
        'content' =>$request->content,
        'image' =>$image
    );
    DB::table('slider')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function deleteSlider($id){
    DB::table('slider')->where('id',$id)->delete();
    return Redirect::back();
}

public function addGallery(){
    $page_title = 'formfiletext';
   
    $page_name =  'Add Image';
    return view('admin.addGallery',compact('page_title','page_name'));
}
public function add_Gallery(Request $request){
        $path = 'uploads/gallery';
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;
        $Gallery  = new Gallery;
        $Gallery->title = $request->title;
        $Gallery->content = $request->content;
        $Gallery->image = $image;
        $Gallery->save();
        Session::flash('message', "Image Added To Gallery");
        return Redirect::back();
   
} 

public function save_gallery(Request $request, $id){
    $path = 'uploads/gallery';
    if(isset($request->image)){
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;
    }else{
        $image = $request->image_cheat;
    }
    $updateDetails = array(
        'title'=>$request->title,
        'content' =>$request->content,
        'image' =>$image
    );
    DB::table('gallery')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}

public function galleryList(){
    $page_title = 'list';
    $page_name = 'Image Gallery';
    $Gallery = Gallery::all();
    return view('admin.galleryList',compact('page_title','Gallery','page_name'));
}

public function deleteGallery($id){
    DB::table('gallery')->where('id',$id)->delete();
    return Redirect::back();
}

// 
public function addMinistry(){
    $page_title = 'formfiletext';//For Layout Inheritance
    $page_name = 'Add New Ministry';
    return view('admin.addMinistry',compact('page_title','page_name'));
}

public function add_Ministry(Request $request){

    $path = 'uploads/ministries';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->pro_img_cheat;
    }

    if(isset($request->image_file)){
        
            
        $file = $request->file('image_file');
        $filename = str_replace(' ', '', $file->getClientOriginalName());
        $timestamp = new Datetime();
        $new_timestamp = $timestamp->format('Y-m-d H:i:s');
        $image_main_temp = $new_timestamp.'file'.$filename;
        $image_file = str_replace(' ', '',$image_main_temp);
        $file->move($path, $image_file);
     
         
    }else{
        $image_file = $request->pro_img_cheat;
    }

    
  

    $Ministry = new Ministry;
    $Ministry->slung = Str::slug($request->title);
    $Ministry->title = $request->title;
    $Ministry->content = $request->content;
    $Ministry->author = $request->author;
    $Ministry->meta = $request->meta;
    $Ministry->books = $request->books;
    $Ministry->author = $request->agent;
    $Ministry->video = $request->video;
    $Ministry->image = $image_one;
    $Ministry->file = $image_file;
    $Ministry->save();
    
    Session::flash('message', "You have Added One New Ministry");
    return Redirect::back();
}



public function ministries(){
    $Ministry = Ministry::all();
    $page_title = 'list';
    $page_name = 'All Ministrys';
    return view('admin.ministries',compact('page_title','Ministry','page_name'));
}

public function editMinistry($id){
    $Ministry = Ministry::find($id);
    $page_title = 'formfiletext';
    $page_name = 'Edit Ministry';
    return view('admin.editMinistry',compact('page_title','Ministry','page_name'));
}




public function edit_Ministry(Request $request, $id){

    $path = 'uploads/ministries';
    if(isset($request->image_one)){
        
            
            $file = $request->file('image_one');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'image'.$filename;
            $image_one = str_replace(' ', '',$image_main_temp);
            $file->move($path, $image_one);
            
    }else{
        $image_one = $request->image_one_cheat;
    }

    
  



    $updateDetails = array(
        'slung' =>Str::slug($request->title),
        'title' =>$request->title,
        'content' =>$request->content,
        'meta' =>$request->meta,
        'video' =>$request->video,
        'image' =>$image_one,
      
    );
    DB::table('ministries')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have been saved");
    return Redirect::back();
}



public function deleteMinistry($id){
    $Curriculum = DB::table('ministries')->where('id',$id)->get();
    return Redirect::back();
}
// 
}
