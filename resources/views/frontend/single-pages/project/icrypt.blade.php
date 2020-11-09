
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/07/icrypt-app.jpg')}}" width="1300" height="900"
                                                  alt="iCrypt messenger"/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">iCrypt</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>iCrypt allows you to freely send and receive text and multimedia messages that are 100% secure. Other text applications leave your data open to be stolen. Let iCrypt protect what you say!</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>With the custom pin you can set your own passphrase that will be requested each time you use iCrypt. Passphrase is also used to enhance the encryption strange of the data on the device.</p>
<p>Creating group chats is a breeze with iCrypt. Simply start a new group, add your friends and you are instantly ready to start chatting securely with your friends.</p>
<p>Easily share your photos and location with others with a click of a button. iCrypt has a variety of sharing buttons to help your friends navigate where you are, stay up to date with your travels and more!</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<ul>
<li><strong>Screenshot Notification</strong>. Want to know if someone saved one of your timed based messages? With iCrypt you can be instantly alerted if someone takes a screenshot of your messages.</li>
<li><strong>Remote Message Removal</strong>. Have you ever sent a message where moments later you regret that you sent it? iCrypt gives you the ability to remotely delete your messages from other people’s devices. Instantly.</li>
<li><strong>Each Message Expires</strong>. Want to set time limit on one of the messages you send? No problem. Just select how much time you want to give before the message disappears and click send. Easy as that!</li>
</ul>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									iOS Native, C++, C#, .Net                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile (iOS), Web                                </div>
                            </div>
                                                        <div class="shortcode-contact">
                                <div>Want to start a project? It’s simple. Contact us to discuss the details and we’ll tell you how we can help you.</div>
                                <a href="{{route('contact.us')}}" class="sc-link" target="" rel="">Contact Us</a>                            </div>
                                                    </div>
						                    </div>
				            </div>
        </div>
    </div>
@endsection