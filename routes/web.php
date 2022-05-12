<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
// Route::get('/',function(){
//     return view('Pages.home');
// });


 Route::get('search','HomeController@search'); 

Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('/','Admin\AdminController@dashboard');

	Route::get('dashboard','Admin\AdminController@dashboard');
	Route::get('logout','Admin\AdminController@logout');
    Route::get('profile','Admin\AdminController@edit');
    Route::post('profile','Admin\AdminController@update');

	Route::get('users/{id}/delete','Admin\UserController@delete');
    Route::post('users/drop','Admin\UserController@bulkDelete');
	Route::get('users/{id}/status','Admin\UserController@updateStatus');
	Route::resource('users','Admin\UserController');

    Route::get('categories/{id}/delete','Admin\CategoryController@delete');
    Route::post('categories/drop','Admin\CategoryController@bulkDelete');
	Route::get('categories/{id}/status','Admin\CategoryController@updateStatus');
	Route::resource('categories','Admin\CategoryController');
    
    // Route::get('brands/{id}/delete','Admin\BrandController@delete');
    // Route::post('brands/drop','Admin\BrandController@bulkDelete');
    // Route::get('brands/{id}/status','Admin\BrandController@updateStatus');
    // Route::resource('brands','Admin\BrandController');

    Route::get('cities/{id}/delete','Admin\CityController@delete');
    Route::post('cities/drop','Admin\CityController@bulkDelete');
    Route::get('cities/{id}/status','Admin\CityController@updateStatus');
    Route::resource('cities','Admin\CityController');

    Route::get('vendors/{id}/delete','Admin\VendorController@delete');
    Route::post('vendors/drop','Admin\VendorController@bulkDelete');
    Route::get('vendors/{id}/status','Admin\VendorController@updateStatus');
    Route::resource('vendors','Admin\VendorController');
    Route::get('vendors/list/{status}','Admin\VendorController@index');

    Route::get('pages/{id}/delete','Admin\PageController@delete');
    Route::post('pages/drop','Admin\PageController@bulkDelete');
    Route::get('pages/{id}/published','Admin\PageController@updatePublished');
    Route::resource('pages','Admin\PageController'); 

    Route::get('customers/{id}/delete','Admin\CustomerController@delete');
    Route::post('customers/drop','Admin\CustomerController@bulkDelete');
    Route::get('customers/{id}/status','Admin\CustomerController@updateStatus');
    Route::resource('customers','Admin\CustomerController');

    Route::get('stores/{id}/delete','Admin\StoreController@delete');
    Route::post('stores/drop','Admin\StoreController@bulkDelete');
    Route::get('stores/{id}/status','Admin\StoreController@updateStatus');
    Route::resource('stores','Admin\StoreController');

    
    Route::get('posts/{id}/delete','Admin\PostController@delete');
    Route::post('posts/drop','Admin\PostController@bulkDelete');
    Route::get('posts/{id}/published','Admin\PostController@updatePublished');
    Route::resource('posts','Admin\PostController');
    
    Route::get('topics/{id}/delete','Admin\TopicController@delete');
    Route::post('topics/drop','Admin\TopicController@bulkDelete');
    Route::get('topics/{id}/published','Admin\TopicController@updatePublished');
    Route::resource('topics','Admin\TopicController');

    Route::get('sliders/{id}/delete','Admin\SliderController@delete');
    Route::post('sliders/drop','Admin\SliderController@bulkDelete');
    Route::get('sliders/{id}/status','Admin\SliderController@updateStatus');
    Route::resource('sliders','Admin\SliderController');

   

    Route::get('faqs/{id}/delete','Admin\FaqController@delete');
    Route::post('faqs/drop','Admin\FaqController@bulkDelete');
    Route::resource('faqs','Admin\FaqController');

    Route::get('policies/{id}/delete','Admin\PolicyController@delete');
    Route::post('policies/drop','Admin\PolicyController@bulkDelete');
    Route::get('policies/{id}/status','Admin\PolicyController@updateStatus');
    Route::resource('policies','Admin\PolicyController');

    Route::get('product-types/{id}/delete','Admin\ProductTypeController@delete');
    Route::post('product-types/drop','Admin\ProductTypeController@bulkDelete');
    Route::get('product-types/{id}/status','Admin\ProductTypeControllere@updateStatus');
    Route::resource('product-types','Admin\ProductTypeController');


    Route::get('occasions/{id}/delete','Admin\OccasionController@delete');
    Route::post('occasions/drop','Admin\OccasionController@bulkDelete');
    Route::get('occasions/{id}/status','Admin\OccasionController@updateStatus');
    Route::resource('occasions','Admin\OccasionController');

    Route::get('products/{id}/delete','Admin\ProductController@delete');
    Route::post('products/drop','Admin\ProductController@bulkDelete');
    Route::get('products/{id}/published','Admin\ProductController@updatePublished');
    Route::resource('products','Admin\ProductController'); 


    // Route::get('products-variants/{id}/delete','Admin\PProductVariantController@delete');
    // Route::post('products-variants/drop','Admin\ProductVariantController@bulkDelete');
    // Route::get('products-variants/{id}/published','Admin\ProductVariantController@updatePublished');


    Route::get('shippings/{id}/delete','Admin\ShippingController@delete');
    Route::post('shippings/drop','Admin\ShippingController@bulkDelete');
    Route::get('shippings/{id}/status','Admin\ShippingController@updateStatus');
    Route::get('shippings/{id}/delivery_date','Admin\ProductTypeControllere@updateDelivery');
    Route::resource('shippings','Admin\ShippingController');

    Route::get('colors/{id}/delete','Admin\ColorController@delete');
    Route::post('colors/drop','Admin\ColorController@bulkDelete');
    Route::resource('colors','Admin\ColorController');


    Route::get('subscribers/{id}/delete','Admin\SubscriberController@delete');
    Route::post('subscribers/drop','Admin\SubscriberController@bulkDelete');
    Route::get('subscribers/{id}/status','Admin\SubscriberController@updateStatus');
    Route::resource('subscribers','Admin\SubscriberController');


    Route::get('social-medias/{id}/delete','Admin\SocialMediaController@delete');
    Route::post('social-medias/drop','Admin\SocialMediaController@bulkDelete');
    Route::get('social-medias/{id}/status','Admin\SocialMediaController@updateStatus');
    Route::resource('social-medias','Admin\SocialMediaController');

    Route::get('navigations/{id}/delete','Admin\NavigationController@delete');
    Route::post('navigations/drop','Admin\NavigationController@bulkDelete');
    Route::get('navigations/{id}/status','Admin\NavigationController@updateStatus');
    Route::resource('navigations','Admin\NavigationController');

    // Route::get('messages/{id}/delete','Admin\MessageController@delete');
    // Route::post('messages/drop','Admin\MessageController@bulkDelete');
    // Route::get('messages/{id}/recipient_status','Admin\MessageController@updateRecipentStatus');
    // Route::get('messages/{id}/sender_status','Admin\MessageController@updateSenderStatus');
    // Route::resource('messages','Admin\MessageController');

    Route::get('messages/{id}/delete','Admin\MessageController@delete');
    Route::get('messages/{id}/deleteInbox','Admin\MessageController@deleteInbox');
    Route::get('messages','Admin\MessageController@inbox');
    Route::get('messages/compose','Admin\MessageController@composeCreate');
    Route::post('messages/compose','Admin\MessageController@compose');
    Route::get('messages/sent','Admin\MessageController@sent');
    Route::get('messages/{id}/view','Admin\MessageController@viewMessage');
    Route::post('messages/reply','Admin\MessageController@sendReply');
    Route::get('messages/trash','Admin\MessageController@bin');

    
    Route::resource('products-variants','Admin\ProductVariantController');
    Route::resource('provinces','Admin\ProvincesController');
    Route::resource('staffs','Admin\StaffController');
    
    Route::get('faq/delete/{id}','Admin\VendorCategoryController@faqDelete');
    Route::get('vendor-categories/{id}/delete','Admin\VendorCategoryController@delete');
    Route::post('vendor-categories/drop','Admin\VendorCategoryController@bulkDelete');
    Route::get('vendor-categories/{id}/status','Admin\VendorCategoryController@updateStatus');
    Route::resource('vendor-categories','Admin\VendorCategoryController');
    
    Route::resource('tickets','Admin\TicketController');
    Route::resource('order-supports','Admin\OrderSupportController');
    Route::resource('contacts','Admin\ContactController');
    
    
    Route::get('shopping-categories/{id}/delete','Admin\ShoppingCategoryController@delete');
    Route::post('shopping-categories/drop','Admin\ShoppingCategoryController@bulkDelete');
	Route::get('shopping-categories/{id}/status','Admin\ShoppingCategoryController@updateStatus');
	Route::resource('shopping-categories','Admin\ShoppingCategoryController');
    
    Route::get('attributes/{id}/delete','Admin\AttributeController@delete');
    Route::post('attributes/drop','Admin\AttributeController@bulkDelete');
    Route::get('attributes/{id}/status','Admin\AttributeController@updateStatus');
    Route::resource('attributes','Admin\AttributeController');

    Route::get('send-an-update','Admin\SendAnUpdateController@index');

    Route::get('discounts/{id}/delete','Admin\DiscountController@delete');
    Route::post('discounts/drop','Admin\DiscountController@bulkDelete');
    Route::get('discounts/{id}/status','Admin\DiscountController@updateStatus');
    Route::resource('discounts','Admin\DiscountController');
   // Route::post('send-an-update','Admin\SendAnUpdateController@formsubmit');

    Route::get('banners/{id}/delete','Admin\BannerController@delete');
    Route::post('banners/drop','Admin\BannerController@bulkDelete');
    Route::get('banners/{id}/status','Admin\BannerController@updateStatus');
    Route::resource('banners','Admin\BannerController');
    

    Route::post('orders/{id}/edit','Admin\OrderController@edit');
    Route::get('orders','Admin\OrderController@orders');
    Route::get('orders/list/{status}','Admin\OrderController@orders');
    
});
Route::get('/admin/login','Admin\AdminController@login')->name('admin-login');
Route::post('/admin/login','Admin\AdminController@postLogin');
Route::get('/admin/hash','Admin\AdminController@hashMake');
Route::get('/email','Admin\UserController@emailTest');
Route::get('contact-us','HomeController@contactus');
Route::post('contact-us','HomeController@storeContactus');
Route::get('about-us','HomeController@aboutus');
Route::get('faqs','HomeController@faqs');
Route::get('policies','HomeController@policies');


Route::prefix('seller')->middleware('auth:vendor')->group(function()
{
    Route::get('/','Vendor\VendorController@dashboard');
    Route::get('profile','Vendor\VendorController@editProfile');
    Route::post('profile','Vendor\VendorController@updateProfile');
    Route::get('logout','Vendor\VendorController@logout');
    
    
    Route::get('products','Vendor\ProductController@index');
    Route::get('products/create','Vendor\ProductController@create');
    Route::post('products/create','Vendor\ProductController@store');
    Route::get('products/{id}/edit','Vendor\ProductController@edit');
    Route::post('products/{id}/edit','Vendor\ProductController@update');
    Route::get('products/{id}/delete','Vendor\ProductController@delete');
    
    
   // Route::resource('orders','Vendor\OrderController');
    Route::resource('payments','Vendor\PaymentController');
    Route::resource('reports','Vendor\ReportController');
   

    Route::get('messages/{id}/delete','Vendor\MessageController@delete');
    Route::get('messages/{id}/deleteInbox','Vendor\MessageController@deleteInbox');
    Route::get('messages','Vendor\MessageController@inbox');
    Route::get('messages/compose','Vendor\MessageController@compose');
    Route::post('messages/compose','Vendor\MessageController@postCompose');
    Route::get('messages/sent','Vendor\MessageController@sent');
    Route::get('messages/{id}/view','Vendor\MessageController@viewMessage');
    Route::post('messages/reply','Vendor\MessageController@sendReply');
    Route::get('messages/trash','Vendor\MessageController@bin');
    
    Route::get('change-password','Vendor\VendorController@changePassword');
    Route::post('change-password','Vendor\VendorController@saveChangePassword');
    Route::get('stores/{id}/delete','Vendor\StoreController@delete');
    Route::get('store/edit','Vendor\VendorController@editStore');
    Route::post('store/edit/{id}','Vendor\VendorController@updateStore');
    Route::get('orders','Vendor\OrderController@orders');
    Route::get('orders/{id}','Vendor\OrderController@viewOrder');
    Route::post('orders/{id}','Vendor\OrderController@updateOrder');
   
    
});

Route::get('seller/login','Vendor\VendorController@login')->name('seller-login');
Route::post('seller/login','Vendor\VendorController@postLogin');


Route::get('/','HomeController@index');
Route::get('/navbar','HomeController@navbar');
Route::get('customer/dashboard','Customer\CustomerController@home');
Route::get('customer/login','Customer\CustomerController@login');
Route::post('customer/login','Customer\CustomerController@postLogin');
Route::get('customer/register','Customer\CustomerController@register');
Route::post('customer/register','Customer\CustomerController@postRegister');


Route::prefix('customer')->middleware('auth:customer')->group(function()
{
    Route::get('cart','Customer\CustomerController@cart');
    Route::post('editprofile','Customer\CustomerController@editProfile');
    Route::get('orders','Customer\CustomerController@orders');
    Route::get('downloads','Customer\CustomerController@downloads');
    Route::get('track-my-order','Customer\CustomerController@trackMyOrder');
    Route::post('track-my-order','Customer\CustomerController@getTrackMyOrder');
    Route::get('addresses','Customer\CustomerController@addresses');
    Route::get('editaddress/{id}','Customer\CustomerController@editAddress');
    Route::get('addaddress','Customer\CustomerController@addAddress');
    Route::post('editaddress','Customer\CustomerController@saveAddress');
    Route::get('account-details','Customer\CustomerController@account_details');

    Route::get('logout','Customer\CustomerController@logout');
});
Route::post('subscription','HomeController@subscription');


// Route::get('/shop',function(){
//     return view('Pages.products-listing');
// });

Route::get('/shop/login','ShopController@login');
Route::post('/shop/login','ShopController@postLogin');
Route::post('/shop/guestlogin','ShopController@guestLogin');
// Route::get('/shop/register', 'LoginController@checkoutRegister');
// Route::post('/shop/register', 'LoginController@PostCheckoutRegister');


Route::get('item/{id}/delete','ShopController@delete');
Route::post('/shop/cart/add','ShopController@addItem');
Route::get('/shop/cart','ShopController@displayCart');
Route::post('item/{id}/update','ShopController@updateQuantity');
Route::post('/shop/coupon','ShopController@coupon');


Route::get('/shop/checkout','ShopController@checkout');
Route::post('/shop/checkout','ShopController@postCheckout');
Route::get('cart/payment','ShopController@payment');
Route::post('cart/payment','ShopController@postPayment');
Route::get('/shop/thankyou/{id}','ShopController@thankyou');

Route::get('{slug}','ProductController@categoryListing');
Route::get('/gift/{slug}','ProductController@productDetail');
Route::get('/occasion/{slug}','ProductController@occasionListing');
Route::get('/shopping/{slug}','ProductController@shoppingcategoryListing');
Route::get('/budget/{min}/{max}','ProductController@budget');
Route::get('/type/{slug}','ProductController@producttypeListing');

Route::get('/occasion',function(){
    return "occasions";
});

Route::get('/category/shop',function(){
    return view('Pages.category-listing');
});

Route::get('/occasion/shop',function(){
    return view('Pages.occasion-products');
});
// Route::get('search',function(){
//   return "search here";
// });


// Route::get('menu',function(){
//     getMenu(12);
// });