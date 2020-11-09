<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

route::get('/', 'Frontend\FrontendController@index')->name('index');
route::get('about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');
route::get('contact-us', 'Frontend\FrontendController@contactUs')->name('contact.us');
route::get('news/events/details/{id}', 'Frontend\FrontendController@newsdetails')->name('news.event.details');
route::get('our/misson', 'Frontend\FrontendController@mission')->name('our.mission');
route::get('our/visson', 'Frontend\FrontendController@vission')->name('our.vission');
route::get('news/evetnts', 'Frontend\FrontendController@newsEvents')->name('our.news.evets');
route::post('contact/store', 'Frontend\FrontendController@contactstore')->name('contact.store');
route::get('mdevolopment', 'Frontend\FrontendController@mdevolopment')->name('mdevolopment');
route::get('wdevolopment', 'Frontend\FrontendController@wdevolopment')->name('wdevolopment');
route::get('ddevolopment', 'Frontend\FrontendController@ddevolopment')->name('ddevolopment');
route::get('mvp', 'Frontend\FrontendController@mvp')->name('mvp');
route::get('product-devoloment', 'Frontend\FrontendController@productdevolopment')->name('product.devolopment');
route::get('ui-ux-design', 'Frontend\FrontendController@uiuxdesign')->name('ui.ux.design');
route::get('partnership', 'Frontend\FrontendController@partnership')->name('partnership');
route::get('faq', 'Frontend\FrontendController@faq')->name('faq');
route::get('our/work', 'Frontend\FrontendController@ourwork')->name('our.work');
route::get('team', 'Frontend\FrontendController@team')->name('team');
route::get('how/to/work', 'Frontend\FrontendController@howtowork')->name('how.to.work');
route::get('career', 'Frontend\FrontendController@career')->name('career');
route::get('expertise', 'Frontend\FrontendController@expertise')->name('expertise');
route::get('technology', 'Frontend\FrontendController@technology')->name('technology');
route::get('blog', 'Frontend\FrontendController@blog')->name('blog');
route::get('software/devolopment/service', 'Frontend\FrontendController@sdevolopment')->name('software.devolopment.service');
route::get('learn/case', 'Frontend\FrontendController@learncase')->name('learn.case');
route::get('fan/club', 'Frontend\FrontendController@fanclab')->name('fan.club');
route::get('virtual-supervisor', 'Frontend\FrontendController@virtualsupervisor')->name('virtual.supervisor');
route::get('self-service-portal', 'Frontend\FrontendController@selfservice')->name('self.service.portal');
route::get('project/backpack-online-store', 'Frontend\FrontendController@projectonlinestore')->name('backpack.online.store');
route::get('project/ecommerce-project', 'Frontend\FrontendController@ecommerceproject')->name('ecommerce.project');
route::get('project/propertly', 'Frontend\FrontendController@projectproperty')->name('project.property');
route::get('project/family-plan', 'Frontend\FrontendController@familyplan')->name('family.plan');
route::get('project/gabtrans', 'Frontend\FrontendController@gabtrans')->name('gabtrans');
route::get('project/emp-project', 'Frontend\FrontendController@empproject')->name('emp.project');
route::get('project/uproject-app', 'Frontend\FrontendController@uproject')->name('uproject');
route::get('project/fut-exchange-project', 'Frontend\FrontendController@exchangeproject')->name('exchange.project');
route::get('our/project/imyra-app', 'Frontend\FrontendController@imyraapp')->name('imyraapp');
route::get('our/project/icomplyico-platform', 'Frontend\FrontendController@icomplyicoplatform')->name('icomplyico.platform');
route::get('our/project/ultimate-trading-robot', 'Frontend\FrontendController@ultimatetradingrobot')->name('ultimate.trading.robot');
route::get('our/project/cryptocurrency-wallet', 'Frontend\FrontendController@cryptocurrency')->name('cryptocurrency');
route::get('our/project/icrypt', 'Frontend\FrontendController@icrypt')->name('icrypt');
route::get('our/project/bug-jam', 'Frontend\FrontendController@bugjam')->name('bugjam');
route::get('our/project/pin-app', 'Frontend\FrontendController@pinapp')->name('pinapp');
route::get('our/project/presentation-medical-app', 'Frontend\FrontendController@medicalapp')->name('medical.app');
route::get('our/project/inspection-app', 'Frontend\FrontendController@inspectionapp')->name('inspection.app');
route::get('our/project/myclub-app', 'Frontend\FrontendController@myclubapp')->name('myclub.app');
route::get('our/project/clubbable', 'Frontend\FrontendController@clubbable')->name('clubbable');
route::get('our/project/check-in-app', 'Frontend\FrontendController@checkinapp')->name('checkinapp');
route::get('/our/project/healthcare-app', 'Frontend\FrontendController@healthcareapp')->name('healthcareapp');

//technologies Page Route
route::get('our/dotnet/developer', 'Frontend\FrontendController@dotnetdeveloper')->name('dotnet.developer');
route::get('our/java/development', 'Frontend\FrontendController@javadevelopment')->name('java.development');
route::get('our/xamarin/development', 'Frontend\FrontendController@xamarindevelopment')->name('xamarin.development');
route::get('our/react-js', 'Frontend\FrontendController@reactjs')->name('react.js');
route::get('our/ios-development', 'Frontend\FrontendController@iosdevelopment')->name('ios.development');
route::get('our/android-apps-dev', 'Frontend\FrontendController@androidappsdev')->name('android.apps.dev');
route::get('our/node-js-development-services', 'Frontend\FrontendController@nodejsdevelopmentservices')->name('node.js-development.services');
route::get('/our/php-development-services', 'Frontend\FrontendController@phpdevelopmentservices')->name('php.development.services');
route::get('/what-is-industry-4-0.', 'Frontend\FrontendController@blogone')->name('blog.one');
route::get('/industry-technology', 'Frontend\FrontendController@blogtwo')->name('blog.two');
route::get('/ui-ux-design-for-mobile', 'Frontend\FrontendController@blogthree')->name('blog.three');
route::get('/how-to-hire-good-software-developers', 'Frontend\FrontendController@blogfour')->name('blog.four');
route::get('/mobile-app-step-by-step', 'Frontend\FrontendController@blogfive')->name('blog.five');
route::get('/practices-for-successful-offshore-development', 'Frontend\FrontendController@blogsix')->name('blog.six');
route::get('/asp-net-zero-for-creating-web-and-mobile-apps', 'Frontend\FrontendController@blogseven')->name('blog.seven');
route::get('/make-apps-for-children', 'Frontend\FrontendController@blogeight')->name('blog.eight');
route::get('/why-to-outsource-app-development-to-ukraine', 'Frontend\FrontendController@blognine')->name('blog.nine');
route::get('/mobile-apsdfp-step-by-step', 'Frontend\FrontendController@blogten')->name('blog.ten');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
	Route::prefix('users')->group(function(){
	route::get('/view', 'Backend\UsersController@view')->name('users.view');
	route::get('/add', 'Backend\UsersController@add')->name('users.add');
	route::post('/store', 'Backend\UsersController@store')->name('users.store');
	route::get('/edit/{id}', 'Backend\UsersController@edit')->name('users.edit');
	route::post('/update/{id}', 'Backend\UsersController@update')->name('users.update');
	route::get('/delete/{id}', 'Backend\UsersController@delete')->name('users.delete');
});

Route::prefix('profile')->group(function(){
	route::get('/view', 'Backend\ProfileController@view')->name('profile.view');
	route::get('/password/view', 'Backend\ProfileController@passwordView')->name('password.view');
	route::post('/store', 'Backend\ProfileController@store')->name('profile.store');
	route::get('/edit', 'Backend\ProfileController@edit')->name('profile.edit');
	route::post('/update', 'Backend\ProfileController@update')->name('profile.update');
	route::get('/delete/{id}', 'Backend\ProfileController@delete')->name('profile.delete');
	route::post('/password/update', 'Backend\ProfileController@passwordupdate')->name('password.update.view');
});

Route::prefix('logos')->group(function(){
	route::get('/view', 'Backend\LogoController@view')->name('logos.view');
	route::get('/add', 'Backend\LogoController@add')->name('logos.add');
	route::post('/store', 'Backend\LogoController@store')->name('logos.store');
	route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
	route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
	route::get('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
});

Route::prefix('mlogos')->group(function(){
	route::get('/view', 'Backend\MlogoController@view')->name('mlogos.view');
	route::get('/add', 'Backend\MlogoController@add')->name('mlogos.add');
	route::post('/store', 'Backend\MlogoController@store')->name('mlogos.store');
	route::get('/edit/{id}', 'Backend\MlogoController@edit')->name('mlogos.edit');
	route::post('/update/{id}', 'Backend\MlogoController@update')->name('mlogos.update');
	route::get('/delete/{id}', 'Backend\MlogoController@delete')->name('mlogos.delete');
});

Route::prefix('sliders')->group(function(){
	route::get('/view', 'Backend\sliderController@view')->name('sliders.view');
	route::get('/add', 'Backend\sliderController@add')->name('sliders.add');
	route::post('/store', 'Backend\sliderController@store')->name('sliders.store');
	route::get('/edit/{id}', 'Backend\sliderController@edit')->name('sliders.edit');
	route::post('/update/{id}', 'Backend\sliderController@update')->name('sliders.update');
	route::get('/delete/{id}', 'Backend\sliderController@delete')->name('sliders.delete');
});

Route::prefix('bannars')->group(function(){
	route::get('/view', 'Backend\BannarController@view')->name('bannars.view');
	route::get('/add', 'Backend\BannarController@add')->name('bannars.add');
	route::post('/store', 'Backend\BannarController@store')->name('bannars.store');
	route::get('/edit/{id}', 'Backend\BannarController@edit')->name('bannars.edit');
	route::post('/update/{id}', 'Backend\BannarController@update')->name('bannars.update');
	route::get('/delete/{id}', 'Backend\BannarController@delete')->name('bannars.delete');
});

Route::prefix('vissions')->group(function(){
	route::get('/view', 'Backend\VissionController@view')->name('vissions.view');
	route::get('/add', 'Backend\VissionController@add')->name('vissions.add');
	route::post('/store', 'Backend\VissionController@store')->name('vissions.store');
	route::get('/edit/{id}', 'Backend\VissionController@edit')->name('vissions.edit');
	route::post('/update/{id}', 'Backend\VissionController@update')->name('vissions.update');
	route::get('/delete/{id}', 'Backend\VissionController@delete')->name('vissions.delete');
});

Route::prefix('news_events')->group(function(){
	route::get('/view', 'Backend\NewsEventController@view')->name('news_events.view');
	route::get('/add', 'Backend\NewsEventController@add')->name('news_events.add');
	route::post('/store', 'Backend\NewsEventController@store')->name('news_events.store');
	route::get('/edit/{id}', 'Backend\NewsEventController@edit')->name('news_events.edit');
	route::post('/update/{id}', 'Backend\NewsEventController@update')->name('news_events.update');
	route::get('/delete/{id}', 'Backend\NewsEventController@delete')->name('news_events.delete');
});

Route::prefix('services')->group(function(){
	route::get('/view', 'Backend\serviceController@view')->name('services.view');
	route::get('/add', 'Backend\serviceController@add')->name('services.add');
	route::post('/store', 'Backend\serviceController@store')->name('services.store');
	route::get('/edit/{id}', 'Backend\serviceController@edit')->name('services.edit');
	route::post('/update/{id}', 'Backend\serviceController@update')->name('services.update');
	route::get('/delete/{id}', 'Backend\serviceController@delete')->name('services.delete');
});

Route::prefix('contacts')->group(function(){
	route::get('/view', 'Backend\ContactController@view')->name('contacts.view');
	route::get('/add', 'Backend\ContactController@add')->name('contacts.add');
	route::post('/store', 'Backend\ContactController@store')->name('contacts.store');
	route::get('/edit/{id}', 'Backend\ContactController@edit')->name('contacts.edit');
	route::post('/update/{id}', 'Backend\ContactController@update')->name('contacts.update');
	route::get('/delete/{id}', 'Backend\ContactController@delete')->name('contacts.delete');
	route::get('communicate/delete/{id}', 'Backend\ContactController@Communicatedelete')->name('communicate.delete');
	route::get('/communicate', 'Backend\ContactController@viewCommunicate')->name('contacts.communicate');

});

Route::prefix('abouts')->group(function(){
	route::get('/view', 'Backend\AboutController@view')->name('abouts.view');
	route::get('/add', 'Backend\AboutController@add')->name('abouts.add');
	route::post('/store', 'Backend\AboutController@store')->name('abouts.store');
	route::get('/edit/{id}', 'Backend\AboutController@edit')->name('abouts.edit');
	route::post('/update/{id}', 'Backend\AboutController@update')->name('abouts.update');
	route::get('/delete/{id}', 'Backend\AboutController@delete')->name('abouts.delete');
});

Route::prefix('software')->group(function(){
	route::get('/view', 'Backend\softwareDevelopmentServiceController@view')->name('software.view');
	route::get('/add', 'Backend\softwareDevelopmentServiceController@add')->name('software.add');
	route::post('/store', 'Backend\softwareDevelopmentServiceController@store')->name('software.store');
	route::get('/edit/{id}', 'Backend\softwareDevelopmentServiceController@edit')->name('software.edit');
	route::post('/update/{id}', 'Backend\softwareDevelopmentServiceController@update')->name('software.update');
	route::get('/delete/{id}', 'Backend\softwareDevelopmentServiceController@delete')->name('software.delete');
});

Route::prefix('portfolio')->group(function(){
	route::get('/view', 'Backend\PortfolioController@view')->name('portfolio.view');
	route::get('/add', 'Backend\PortfolioController@add')->name('portfolio.add');
	route::post('/store', 'Backend\PortfolioController@store')->name('portfolio.store');
	route::get('/edit/{id}', 'Backend\PortfolioController@edit')->name('portfolio.edit');
	route::post('/update/{id}', 'Backend\PortfolioController@update')->name('portfolio.update');
	route::get('/delete/{id}', 'Backend\PortfolioController@delete')->name('portfolio.delete');
});


Route::prefix('webportfolio')->group(function(){
	route::get('/view', 'Backend\WebController@view')->name('webportfolio.view');
	route::get('/add', 'Backend\WebController@add')->name('webportfolio.add');
	route::post('/store', 'Backend\WebController@store')->name('webportfolio.store');
	route::get('/edit/{id}', 'Backend\WebController@edit')->name('webportfolio.edit');
	route::post('/update/{id}', 'Backend\WebController@update')->name('webportfolio.update');
	route::get('/delete/{id}', 'Backend\WebController@delete')->name('webportfolio.delete');
});


Route::prefix('mobileportfolio')->group(function(){
	route::get('/view', 'Backend\MobileController@view')->name('mobileportfolio.view');
	route::get('/add', 'Backend\MobileController@add')->name('mobileportfolio.add');
	route::post('/store', 'Backend\MobileController@store')->name('mobileportfolio.store');
	route::get('/edit/{id}', 'Backend\MobileController@edit')->name('mobileportfolio.edit');
	route::post('/update/{id}', 'Backend\MobileController@update')->name('mobileportfolio.update');
	route::get('/delete/{id}', 'Backend\MobileController@delete')->name('mobileportfolio.delete');
});


Route::prefix('desktopportfolio')->group(function(){
	route::get('/view', 'Backend\DesktopController@view')->name('desktopportfolio.view');
	route::get('/add', 'Backend\DesktopController@add')->name('desktopportfolio.add');
	route::post('/store', 'Backend\DesktopController@store')->name('desktopportfolio.store');
	route::get('/edit/{id}', 'Backend\DesktopController@edit')->name('desktopportfolio.edit');
	route::post('/update/{id}', 'Backend\DesktopController@update')->name('desktopportfolio.update');
	route::get('/delete/{id}', 'Backend\DesktopController@delete')->name('desktopportfolio.delete');
});

Route::prefix('technologies')->group(function(){
	route::get('/view', 'Backend\TechnologyController@view')->name('technologies.view');
	route::get('/add', 'Backend\TechnologyController@add')->name('technologies.add');
	route::post('/store', 'Backend\TechnologyController@store')->name('technologies.store');
	route::get('/edit/{id}', 'Backend\TechnologyController@edit')->name('technologies.edit');
	route::post('/update/{id}', 'Backend\TechnologyController@update')->name('technologies.update');
	route::get('/delete/{id}', 'Backend\TechnologyController@delete')->name('technologies.delete');
});


});

