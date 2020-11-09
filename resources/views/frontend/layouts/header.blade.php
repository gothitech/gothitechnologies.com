<header
class="header"
	style="background-image: url({{asset('/upload/m_images/'.$banner->image)}})"
>
<div class="top-line">
<div class="tl-flex">
<a class="logo" href="{{url('/')}}">
<img src="{{ asset('frontend/wp-content/themes/Gothi Technologies Limited/assets/images/logo-blog.png')}}" class="logo-dark" alt="">
<img src="{{url('public/upload/logo_images/'.$logo->image)}}" class="logo-light" alt="">
</a>
<div class="tl-right" style="color: #ffffff;">
<ul id="menu-new-main-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2245"><a href="{{route('software.devolopment.service')}}">Services</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2317"><a href="{{route('mdevolopment')}}">Mobile Development</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2249"><a href="{{route('wdevolopment')}}">Web Development</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2237"><a href="{{route('ddevolopment')}}">Desktop Development</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2241"><a href="{{route('mvp')}}">MVP Development</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2246"><a href="{{route('product.devolopment')}}">Product Development</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3339"><a href="{{route('ui.ux.design')}}">UI/UX Design</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3069"><a href="{{route('partnership')}}">Partnerships</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2239"><a href="{{route('faq')}}">FAQs</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2218"><a href="{{route('our.work')}}">Portfolio</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2231"><a href="about.html">Company</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2232"><a href="{{route('about.us')}}">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2247"><a href="{{route('team')}}">Team</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2240"><a href="{{route('how.to.work')}}">How We Work</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2234"><a href="{{route('career')}}">Career</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2238"><a href="{{route('expertise')}}">Expertise</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2248"><a href="{{route('technology')}}">Technologies</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2211"><a href="{{route('blog')}}">Blog</a></li>
</ul>		<a href="{{route('contact.us')}}" class="btn-contact" target="" rel="">Contact Us</a>    </div>
<div class="menu-icon">
<span></span>
<span></span>
<span></span>
</div>
</div>	</div>
<div class="head-cont">
<div class="fixed">
	<div class="gen-pic"><img src="{{url('/upload/mlogo_images/'.$mlogo->image)}}" width="838" height="644" alt=""/></div>
<h1 class="gen-title" style="color: #ffffff;">{{$banner->title}}</h1>
	<div class="gen-text" style="color: #ffffff;">{{$banner->short_title}}</div>
	<a href="{{route('contact.us')}}" class="btn-touch" target="" rel="">Get in touch</a>		</div>
</div>
</header>