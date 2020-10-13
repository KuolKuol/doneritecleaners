<?php

use Illuminate\Support\Facades\Route;
use App\Mail\EmploymentMail;
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

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/blog', function () {
    return view('pages.blog');
});


Route::get('/request-a-quote', function () {
    return view('pages.request-a-quote');
});



Route::get('/services', function () {

$services = [
    array(
        "image" => "https://www.unijan.com/wp-content/uploads/2018/01/corporate-2.png",
        "title" => "Corporate and Commercial Cleaning",
        "summary" => "Regardless of the size of your offices or commercial complex we have skill cleaning personnel to address your needs. We know that all potential clients cleaning requests are unique that’s why Done-Rite will design a plan fitting your requirements and budget.",
        "link" => "/services/corporate-commercial-cleaning",
        "linkTitle" => ">> Commercial Cleaning Services"
    ),
    array(
        "image" => "https://www.unijan.com/wp-content/uploads/2018/01/building-2.png",
        "title" => "Building Maintenance",
        "summary" => "Not only do we design a critical maintenance plan/program that is adaptable to your needs and budgets but also create a healthy and safe environment for employees or residents of a buildings. If warranted, we apply preventive maintenance software to predict and reduce maintenance cost that could impact your budget.",
        "link" => "/services/building-maintenance",
        "linkTitle" => ">> Property & Building Maintenance"
    ),
    array(
        "image" => "https://www.unijan.com/wp-content/uploads/2020/03/toronto-office-cleaning.jpg",
        "title" => "Office Cleaning",
        "summary" => "First impressions count the initial evaluation a client/custom makes  when they walk into your office. They will decide in seconds if this a company or place they want to conduct their business. Cleanness is one of the unwritten factors that influences their decisions, cleanness can make or break a long-lasting business relationship which can affect a company’s revenue stream.  A clean workplace environment improves productivity, boosts employee’s retention and reduces employees’ sick days.",
        "link" => "/services/office-cleaning",
        "linkTitle" => ">> Office Cleaning Services"
    ),
    array(
        "image" => "https://www.unijan.com/wp-content/uploads/2018/01/floor-care-1.png",
        "title" => "Floor Cleaning Services",
        "summary" => "A good floor cleaning service plan will extend the longevity of your floors commercial or residential the following services are available.",
        "link" => "/services/floor-cleaning",
        "linkTitle" => ">> Floor Cleaning"
    ),
    array(
        "image" => "https://www.unijan.com/wp-content/uploads/2018/01/carpet-care-1.png",
        "title" => "Carpet Cleaning and Maintenance",
        "summary" => "Of all the surfaces in a facility, there is none more difficult to keep clean and maintain, while ensuring a good visual appearance, than carpet. Developing an effective maintenance plan for your carpet is critical to its appearance and the lifecycle costs it will offer you.  So, maintenance of your carpet flooring is not just about cleaning; it is about managing an expensive asset.",
        "link" => "/services/carpet-cleaning",
        "linkTitle" => ">> Carpet Cleaning"
    ),
    array(
        "image" => "https://www.unijan.com/wp-content/uploads/2018/01/condominium.png",
        "title" => "Condominiums",
        "summary" => "Premier quality care for your condo individual or corporate needs our packages are dynamic to accommodate exterior or interior projects.",
        "link" => "/services/condominium-cleaning",
        "linkTitle" => ">> Condominium Cleaning"
    ),
    array(
        "image" => asset('/images/Post-Construction-Cleaning-1.jpg'),
        "title" => "Construction Cleaning",
        "summary" => "Construction site cleaning enhance safety decrease the risk of work-related injuries and accidents. That is why our professional cleaning teams make sure all working areas and passageway are free from waste and debris.  A professionally cleaned and maintained work site improve productivity by allowing employees to focus on their work instead of imminent dangers or hazard at their work environment thereby decreasing lost work hours.",
        "link" => "/services/construction-cleaning",
        "linkTitle" => ">> Construction Cleaning"
    ),
    ];

    return view('pages.services',["services" => $services]);

});

Route::get('/services/corporate-commercial-cleaning', function () {
    return view('pages.services.corporate');
});

Route::get('/services/building-maintenance', function () {
    return view('pages.services.building');
});

Route::get('/services/office-cleaning', function () {
    return view('pages.services.office');
});

Route::get('/services/floor-cleaning', function () {
    return view('pages.services.floor');
});

Route::get('/services/carpet-cleaning', function () {
    return view('pages.services.carpet');
});

Route::get('/services/condominium-cleaning', function () {
    return view('pages.services.condominium');
});

Route::get('/services/construction-cleaning', function () {
    return view('pages.services.construction');
});


Route::get('/employment', function(){
    return view('pages.employment');
});

// Route::get('/email', function(){

//     Mail::to('info@doneritecleaners.com')->send(new EmploymentMail());

//     return new EmploymentMail();
// });

// Route::get('/employment','EmploymentController@create');
// Route::post('/employment','EmploymentController@store');
Route::get('/employment','HomeController@index');

Route::get('/employment/{session}', 'HomeController@show');


Route::get('/home-cleaning',function(){
    return view('pages.booking.home-cleaning');
});
Route::get('/deep-clean',function(){
    return view('pages.booking.deep-clean');
});
Route::get('/move',function(){
    return view('pages.booking.move');
});
Route::get('/post-renovation',function(){
    return view('pages.booking.post-renovation');
});
Route::get('/airbnb-Short-term-rental',function(){
    return view('pages.booking.airbnb');
});

Route::get('/privacy-policy',function(){
    return view('pages.privacy');
});