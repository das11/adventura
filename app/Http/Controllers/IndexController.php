<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Categories;
use App\Listings;
use App\ContactUS;
use App\Article;
use App\packages;
use App\offers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\Input; 

class IndexController extends Controller
{
    public function register_individual(){
        return view("auth.register_individual");
    }
    public function register_organisation(){
        return view("auth.register_organisation");
    }
    public function register_institution(){
        return view("auth.register_institution");
    }
    public function generatecode(){
        
    }

    public function landing_page(){
        return view('_particles.landing');
    }


    /**
     * 
     * 
     * iDishum Controllers
     * 
     * 
     */





    public function index(){

            $packages = packages::all();

            return view('tour.home', compact('packages'));
    }

    public function package(Request $request){

        $packageid = $request->id;

        $package = new packages;
        $package = packages::where("packageid", $packageid)->first();

        $this->sendSMS($package);

        return view("tour.package", compact("package"));
    }

    public function idishum_article(){
        return view('_particles.idishumarticle');
    }
    public function idishum_admin(){
        return view('_particles.idishumadmin');
    }
    public function idishum_author(){

    //   echo "test";

        if(Auth::check()){
            

            $user_id = Auth::user()->id;
            $articles = Article::where("author_id", $user_id)->paginate("10");

            $user = User::findOrFail($user_id);

            // print_r($user_id . "\n\n");
            // echo sizeof($articles);

            return view('_particles.idishumauthor', compact('articles', 'user'));
        }


        //  return view('_particles.idishumauthor');
    }
    public function idishum_post_review(){
        return view('_particles.idishumpostreview');
    }
    public function idishum_profile(){
        return view('_particles.idishumprofile');
    }
    public function idishum_create_article(){
        return view('_particles.idishumcreatearticle');
    }
    public function push_created_article(Request $request){

        $inputs = $request->all();
        $title = $inputs["title"];
        $body = $inputs["body"];
        $feature_image= $inputs["feature_image"];
        
        $user_id = Auth::user()->id;

        

        $articles = new Article;
        $articles->body = $body;
        $articles->title = $title;
        $articles->feature_image = $feature_image;
        $articles->author_id = $user_id;
       
        $articles->save();

        // \Session::flash('message_step_1', 'Data Pushed!');
        // \Session::flash('alert-class', 'alert-success');

        return redirect("/idishum-author-dashboard");   

    }
    public function idishum_signin(){
        return view('_particles.idishumsignin');
    }
    public function idishum_category(){
        return view('_particles.idishumcategory');
    }
    public function idishum_editor(){
        return view('_particles.idishumeditor');
    }
    public function idishum_editor_profile(){
        return view('_particles.idishumeditorprofile');
    }
   
    public function idishumpost(){
        return view('idishum_pages.post');
    }
    
    public function signup(){
        return view("auth.register");
    }
   
    public function idishum_signup(){
        return view('_particles.idishumsignup');
    }
    
    public function postidishum_signup(Request $request){

        // $data = \Input::except(array('_token'));

        $inputs = $request->all();

        $email = $inputs["email"];
        $pass = $inputs["password"];
        $name = $inputs["name"];
        $usertype = $inputs["usertype"];
        // $usertype = $inputs["usertype"];


        echo $email . " \n " . $pass;

        $user = new User;
        $user->email = $email;
        $user->password = bcrypt($pass);
        $user->first_name = $name;
        $user->usertype = $usertype; // Statically set to Author for Sprint-1 


        $user->save();
        
            \Session::flash('flash_message', 'Register successfully...');

            return redirect("/idishum-author");

    }

     /**
     * SMS Push Method
     */
    public function sendSMS($package){

        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $number = $user->mobile;

        // 
        // Add a field replacing note with 1-2 words
        // reuse that in the SMS push
        // eg : bla bla bla for "Braces" bla bla
        // 
        // send through CURL

        // Replace with your username
        $user = "gentledental";

        // Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
        $apikey = "WT5DhHV5X8VU6ySwd4fd"; 

        // Replace if you have your own Sender ID, else donot change
        $senderid  =  "GENTLE";

        $offer = $package->packagecost;
        $offer = $offer - 1000;


        // Replace with your Message content
        $message   =  "Trip to " . $package->packagename . " available exclusively at " . $offer . " for you !";
        $message = urlencode($message);

        // For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
        $type   =  "txt";

        /**
         * Params : 
         * $ch - to ambulance
         * $ch2 - to patient
         */

        $ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user
                        ."&apikey=".$apikey
                        ."&mobile=".$number
                        ."&senderid=".$senderid
                        ."&message=".$message
                        ."&type=".$type.""); 
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);      
            curl_close($ch); 

        // Display MSGID of the successful sms push
        // echo $output;

        // print_r($output . $output2 . "Hey :: " . $date);
        // print_r("Booking Appointment ...");

        // print_r(array_keys($data));

        // return redirect("/listings");



    }

    public function test(){

        $offer = new offers;
        $offer->offerid = 100;

        $offer->save();

    }

}
