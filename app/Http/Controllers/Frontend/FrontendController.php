<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\Mission;
use App\Model\Vission;
use App\Model\Service;
use App\Model\About;
use App\Model\Communicate;
use App\Model\Banner;
use App\Model\Portfolio;
use App\Model\Mlogo;
use Mail;

class FrontendController extends Controller
{
    public function index(){
        $data['logo']       = Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
    	$data['sliders']    = Slider::all();
        $data['contact']    = Contact::first();
        
        $data['portfolios']   = Portfolio::all();
        $data['services']   = Service::all();
    	return view('frontend.layouts.home', $data);
    }

    public function aboutUs(){
        $data['logo']       = Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['contact']    = Contact::first();
        $data['abouts']     = About::first();
    	return view('frontend.single-pages.aboutus',$data);
    }

    public function contactUs(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['contact']= Contact::first();
    	return view('frontend.single-pages.contactus', $data);
    }

    public function newsdetails($id){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['news'] = NewsEvent::find($id);
        $data['contact']= Contact::first();
        return view('frontend.single-pages.news-event-details',$data);
    }

    public function mission(){

        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.mission',$data);

    }

    public function vission(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
         $data['vission']    = Vission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.vission',$data);

    }

    public function newsEvents(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['news_events']= NewsEvent::orderBy('id','desc')->get();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.newsevents',$data);

    }

    public function contactstore(Request $request){
        $contact = new Communicate();
        $contact->contact_textarea = $request->contact_textarea;
        $contact->contact_name = $request->contact_name;
        $contact->contact_email = $request->contact_email;
        $contact->contact = $request->contact;
        $contact->address = $request->address;
       
        $contact->save();

        $data = array(
            'name' => $request->contact_name,
            'email'=>$request->contact_email,
            'mobile_no'=> $request->contact,
            'address' => $request->address,
            'msg' => $request->msg,
        );

        Mail::send('frontend.emails.contact', $data, function($message) use($data){
            $message->from('abdulgoni.me@gmail.com', 'Abdul Goni');
            $message->to($data['email']);
            $message->subject('Thanks for contact us');

        });
        return redirect()->back()->with('success', 'Your message successfully sent');

    }

    public function mdevolopment(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        
        return view('frontend.single-pages.mobiledevolopment', $data);

    }

    
    public function wdevolopment(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        
        return view('frontend.single-pages.wdevolopment', $data);

    }
 
    public function ddevolopment(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        
        return view('frontend.single-pages.ddevolopment', $data);

    }

    public function mvp(){
        
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.mvp', $data);

    }

    public function productdevolopment(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.prouduct_devolopment', $data);

    }

    public function uiuxdesign(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.ui_ux_design', $data);

    }
    
    public function partnership(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.partnership', $data);

    }

    public function faq(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.faq', $data);

    }

    public function ourwork(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.our_work', $data);
    }

    public function team(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.team', $data);
    }
    public function howtowork(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.how_to_work', $data);
    }
    public function career(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first(); 
        return view('frontend.single-pages.career', $data);
    }

    public function expertise(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.expertise', $data);
    }
    public function technology(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology', $data);
    }
    public function blog(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.blog', $data);
    }
    public function sdevolopment(){
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first(); 
        return view('frontend.single-pages.software_devolopment_service', $data);
    }
    public function learncase(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.learn_case', $data);
    }

    public function fanclab(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.fan_clab', $data);
    }

    public function virtualsupervisor(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.virtual-supervisor', $data);
    }
    
    public function selfservice(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.self-service-portal', $data);
    }

    public function projectonlinestore(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.backpack-online-store', $data);
    }

    public function ecommerceproject(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.ecommerce-project', $data);
    }

    public function projectproperty(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.propertly', $data);
    }

    public function familyplan(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.family-plan', $data);
    }

    public function gabtrans(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.gabtrans', $data);
    }

    public function empproject(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.emp-project', $data);
    }

    public function uproject(){ 
        return view('frontend.single-pages.project.uproject-app', $data);
    }
    

    public function exchangeproject(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.fut-exchange-project', $data);
    }

    public function imyraapp(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.imyra-app', $data);
    }
    public function icomplyicoplatform(){ 
        return view('frontend.single-pages.project.icomplyico-platform', $data);
    }
    public function ultimatetradingrobot(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.ultimate-trading-robot', $data);
    }

    public function cryptocurrency(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.cryptocurrency-wallet', $data);
    }

    public function icrypt(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.icrypt', $data);
    }

    public function bugjam(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.bug-jam', $data);
    }

    public function pinapp(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.pin-app', $data);
    }

    public function medicalapp(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.presentation-medical-app', $data);
    }

    public function inspectionapp(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.inspection-app', $data);
    }

    public function myclubapp(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.myclub-app', $data);
    }

    public function clubbable(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.clubbable', $data);
    }

    public function checkinapp(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.check-in-app', $data);
    }

    public function healthcareapp(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.project.healthcare-app', $data);
    }

    public function dotnetdeveloper(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.net-development', $data);
    }

    public function javadevelopment(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.jave-development', $data);
    }

    public function xamarindevelopment(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.xamarin-development', $data);
    }

    public function reactjs(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.react-js', $data);
    }

    public function iosdevelopment(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.ios-development', $data);
    }

    public function androidappsdev(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.android-apps-dev', $data);
    }

    public function nodejsdevelopmentservices(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.node-js-development-services', $data);
    }

    public function phpdevelopmentservices(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.technology.php-development', $data);
    }

    public function blogone(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.what-is-industry-4-0', $data);
    }

    public function blogtwo(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.industry-technology', $data);
    }

    public function blogthree(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.ui-ux-design-for-mobile', $data);
    }

    public function blogfour(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.how-to-hire-good-software-developers', $data);
    }

    public function blogfive(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.mobile-app-step-by-step', $data);
    }

    public function blogsix(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.practices-for-successful-offshore-development', $data);
    }

    public function blogseven(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.asp-net-zero-for-creating-web-and-mobile-apps', $data);
    }

    public function blogeight(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.make-apps-for-children', $data);
    }


    public function blognine(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.why-to-outsource-app-development-to-ukraine', $data);
    }


    public function blogten(){ 
        $data['logo']= Logo::first();
        $data['mlogo']       = Mlogo::first();
        $data['banner']    = Banner::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.mobile-app-step-by-step', $data);
    }

}
