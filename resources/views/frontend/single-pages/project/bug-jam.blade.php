@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('frontend/wp-content/uploads/2018/02/bg1.png')}}/" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/02/bg2.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/02/bg3.png')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Bug Jam Adventure</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>A small cozy town was not waiting for the outbreak of bugs! You just wanted to eat a piece of cake. And berries. Ice also wouldn’t hurt either. And chips – well, how many of those chips? And a few of sweets!</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>You’ll have to wander the forests and fields, seas and mountains, until you will clean up the whole district from these creatures! Because nobody, except you and your friends, will be able to cook their goose.</p>
<p>Employ your own strategy, collect bug juice and buy a weapon against bugs. Frog or freezing, Machete or Napalm – don’t limit yourself! The winner must be one!</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Awaits you:</p>
<ul>
<li>6 parts, more than 180 levels;</li>
<li>More than a dozen of resources against bugs! You can freeze, burn, crushing, cutting – choose what you want!</li>
<li>More than 27 different creatures – from Stinkie to Termit (and, of course, Cockroaches);</li>
<li>At the end of each part – Boss. And keep in mind, to cook his goose is not easy!</li>
<li>Gameplay drag out and 30 different achievements induce to run the game again!<br />
Super-cool cartoonish graphics;</li>
<li>In-game guide detailing descriptions of different kindsof bugs and resources against them.</li>
</ul>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									C#, Unity 3D, MonoDevelop, NGUI, Json, Git                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile (Android, iOS)                                </div>
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