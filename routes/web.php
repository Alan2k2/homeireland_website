<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\panel\MainController;
use App\Http\Controllers\panel\PropertysController;
use App\Http\Controllers\TestCotroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Payment;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Cronejob;
use App\Http\Controllers\panel\AutomobilesController;
use App\Http\Controllers\FacilityManagementController;
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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/log', function(){
    return view('auth.login');
});
Route::get('/clear-route-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return 'Route cache cleared!';
});
// ================Automobile sections========================
Route::get('/view_automobile', [AutomobilesController::class, 'view_automobile'])->name('view_automobile');
Route::get('/Automobiles', [AutomobilesController::class, 'index'])->name('Automobiles');
Route::get('/Auto_Location', [AutomobilesController::class,'Location'])->name('Auto_Location');
Route::get('/Auto_store', [AutomobilesController::class,'Auto_store'])->name('Auto_store');
Route::post('/Auto_media_store', [AutomobilesController::class,'Auto_media_store'])->name('Auto_media_store');
Route::get('/Auto_single', [AutomobilesController::class,'Auto_single'])->name('Auto_single');
Route::get('/Auto_search', [AutomobilesController::class,'Auto_search'])->name('Auto_search');
Route::get('/Auto_delete{id}', [AutomobilesController::class,'Auto_delete'])->name('Auto_delete');
Route::get('/Auto_pay_now{id}', [AutomobilesController::class,'Auto_pay_now'])->name('Auto_pay_now');
Route::get('/scheam_auto', [AutomobilesController::class,'scheam_auto'])->name('scheam_auto');
Route::get('/add/automobile/needed', [AutomobilesController::class,'addAutomobileNeeded'])->name('AddAutomobileNeeded');
Route::get('/upgrade_featured_auto', [AutomobilesController::class, 'upgrade_featured_auto'])->name('upgrade_featured_auto');
// ============================================================================================================================
Route::get('/test', [HomeController::class,'test'])->name('test');
Route::get('/HomeLogout', [HomeController::class,'HomeLogout'])->name('HomeLogout');
Route::get('/Cronejob', [Cronejob::class,'Cronejob'])->name('Cronejob');
Route::get('/Advertisement', [HomeController::class, 'Advertisement'])->name('Advertisement');
Route::get('/generatePDF', [PDFController::class, 'generatePDF'])->name('generatePDF');
Route::get('/stamp-image', [HomeController::class, 'stampImage'])->name('stamp-image');
Route::get('/uploads/fetchpropertiimage{image}', [HomeController::class, 'fetchpropertiimage']);
Route::get('/uploads/fetchpropertishowimage{image}', [HomeController::class, 'fetchpropertishowimage']);
Route::get('/uploads/fetchautoimage{image}', [HomeController::class, 'fetchautoimage']);
Route::get('/automobiles', [HomeController::class, 'automobiles']);
///get brandmodels details_store


Route::get('get/brand/model',[HomeController::class,'getBrandModel'])->name('GetBrandModel');
Route::get('/view_automobiles', [HomeController::class, 'view_automobiles']);
Route::get('/property{id}', [HomeController::class, 'property_show']);
Route::get('/enquiry_submit', [HomeController::class, 'enquiry_submit']);
Route::get('/enquiry_submit_admin', [HomeController::class, 'enquiry_submit_admin']);
Route::get('/enquiry_auto_submit', [HomeController::class, 'enquiry_auto_submit']);
Route::post('/enquiries',[HomeController::class,'property_enquiry'])->name('property_enquiries');
Route::get('/slot{id}', [HomeController::class, 'slot_show']);
Route::get('/automobile/{id}', [HomeController::class, 'automobile_show']);
Route::get('/all-properties', [HomeController::class, 'allproperties']);
Route::get('/parking-slots', [HomeController::class, 'parking_slots']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/contact_us', [HomeController::class, 'contact_us']);
Route::post('/add-review', [HomeController::class, 'add_review']);
Route::get('/maps', [MapController::class, 'index']);
Route::post('/contact-enquiry', [HomeController::class, 'contactEnquiry']);
Route::get('/testemail', [HomeController::class, 'testemail']);
Route::post('/verifyemail', [MainController::class, 'verifyemail'])->name('verifyemail');
Route::get('/get-city', [HomeController::class, 'get_city']);
Route::post('/email-verification-try', [MainController::class, 'email_verification_try'])->name('email_verification_try');
Route::get('/up-city', [HomeController::class, 'up_city']);
Route::post('/upload-city', [HomeController::class, 'upload_city']);
Route::post('/sub-prop-enq', [HomeController::class, 'sub_prop_enq']);
Route::get('/filter-slots', [HomeController::class, 'parking_slots']);
Route::post('/set-cat-session', [HomeController::class, 'set_cat_session']);
Route::get('/filter-properties', [HomeController::class, 'filterproperties']);
Route::get('/view_needed', [HomeController::class, 'view_needed']);
Route::get('/filter-properties-in', [HomeController::class, 'filterproperties']);
Route::post('/get_brand_model', [HomeController::class, 'get_brand_model'])->name('get_brand_model');
Route::post('/get_vehicle_brands', [HomeController::class, 'get_vehicle_brands'])->name('get_vehicle_brands');
Route::get('/filterautomobiles', [HomeController::class, 'filterautomobiles']);
Route::group(['middleware' => ['auth']], function() {
// =============Property add secrion in clent side========================================================
Route::get('/delete_property{id}', [PropertysController::class, 'delete_property'])->name('delete_property');
Route::get('/delete_ad{id}', [PropertysController::class, 'delete_ad'])->name('delete_ad');
Route::get('/display_ads', [PropertysController::class, 'display_ads'])->name('display_ads');
Route::get('/display_property', [PropertysController::class, 'display_property'])->name('display_property');
Route::get('/display_needed', [PropertysController::class, 'display_needed'])->name('display_needed');
Route::get('/view_property', [PropertysController::class, 'view_property'])->name('view_property');
Route::get('/payments_history', [PropertysController::class, 'payments_history'])->name('payments_history');
Route::get('/add_ad', [PropertysController::class, 'add_ad'])->name('add_ad');
Route::get('/pay_holiday_homes', [PropertysController::class, 'pay_holiday_homes'])->name('pay_holiday_homes');
Route::get('/pay_needed', [PropertysController::class, 'pay_needed'])->name('pay_needed');
Route::get('/needed', [PropertysController::class, 'needed'])->name('needed');
Route::get('/basic', [PropertysController::class, 'index'])->name('basic');
Route::get('/scheam', [PropertysController::class, 'scheam'])->name('scheam');
Route::get('/upgrade_featured', [PropertysController::class, 'upgrade_featured'])->name('upgrade_featured');
Route::get('/location', [PropertysController::class, 'location'])->name('location');
Route::get('/price', [PropertysController::class, 'price'])->name('price');
Route::get('/detail', [PropertysController::class, 'property_details'])->name('detail');
Route::get('/property_details_sale', [PropertysController::class, 'property_details_sale'])->name('property_details_sale');
Route::get('/Enquiries', [PropertysController::class, 'Enquiries'])->name('Enquiries');
Route::get('/delete_Enquiries', [PropertysController::class, 'delete_Enquiries'])->name('delete_Enquiries');
Route::get('/Facilities', [PropertysController::class, 'Facilities'])->name('Facilities');
Route::get('/description', [PropertysController::class, 'description'])->name('description');
Route::get('/media', [PropertysController::class, 'media'])->name('media');
Route::get('/plan', [PropertysController::class, 'plan'])->name('plan');
Route::get('/contact', [PropertysController::class,'contact'])->name('contact');
Route::post('/create-order', [PayPalController::class, 'createOrder'])->name('paypal.create');
Route::post('/capture-order', [PayPalController::class, 'captureOrder'])->name('paypal.capture');

Route::get('/contact1', [PropertysController::class,'contact1'])->name('contact1');
Route::get('/myprofile', [MainController::class,'myprofile'])->name('myprofile');
Route::post('/myprofile_store', [MainController::class,'myprofile_store'])->name('myprofile_store');
Route::get('/myslots', [PropertysController::class,'myslots'])->name('myslots');
Route::get('/pay_now{id}', [PropertysController::class,'pay_now'])->name('pay_now');
Route::get('/pay_ad{id}', [PropertysController::class,'pay_ad'])->name('pay_ad');
Route::get('/details_store', [PropertysController::class,'details_store'])->name('details_store');
Route::post('/media_store', [PropertysController::class,'media_store'])->name('media_store  ');
//========================== property add section in client side ends==============================================================================================


Route::get('/dev-test', [MainController::class, 'devtest']);

Route::get('/home', [MainController::class, 'dashboard'])->name('home');;


Route::get('/price_range', function()
{
    return view('panel.price_range');
});
Route::get('/test_image', function()
{
    return view('panel.test_image');
});

Route::get('/test_location', function()
{
    return view('panel.test');
});
Route::get('/get_api', function()
{
    return view('get_api');
});

    Route::post('/upload', [MainController::class, 'upload']);
    Route::post('/uploadauto', [MainController::class, 'uploadauto']);
    
    Route::get('/dropzonefetch', [MainController::class, 'dropzonefetch']);
    Route::post('/upload_automobile', [MainController::class, 'upload_automobile']);
    Route::get('/dropzonefetch_automobile', [MainController::class, 'dropzonefetch_automobile']);    
    Route::get('/removefetchedimage', [MainController::class, 'removefetchedimage']);
     Route::get('/removefetchedimage_auto', [MainController::class, 'removefetchedimage_auto']);
    Route::get('/property-saved-delete{id}', [MainController::class, 'property_saved_delete']);
    Route::get('/addchat', [MainController::class, 'addchat']);
    Route::get('/chatcontents', [MainController::class, 'chatcontents']);
        



    Route::prefix('admin')->group(function () {
        Route::post('/edit_password_change', [AdminController::class, 'edit_password_change'])->middleware('admin');
        Route::post('/admin_register', [AdminController::class, 'admin_register'])->middleware('admin'); 
        Route::post('/edituser', [AdminController::class, 'edituser'])->middleware('admin'); 
        Route::get('/', [AdminController::class, 'index'])->middleware('admin'); 
        Route::get('/payments_history_admin', [AdminController::class, 'payments_history_admin'])->middleware('admin'); 
        Route::get('/ads_enquiry_delete/{id}', [AdminController::class, 'ads_enquiry_delete'])->middleware('admin'); 
        Route::get('/ads_enquiry', [AdminController::class, 'ads_enquiry'])->middleware('admin'); 
        Route::get('/banners', [AdminController::class, 'banners'])->middleware('admin'); 
        Route::post('/addbanners', [AdminController::class, 'addbanners'])->middleware('admin'); 
        Route::get('/properties', [AdminController::class, 'properties'])->middleware('admin'); 
        Route::get('/properties_Subscription', [AdminController::class, 'properties_Subscription'])->middleware('admin');
        Route::get('/Advertisement_page', [AdminController::class,'Advertisement_page'])->middleware('admin');
        // Edit Advertisement
Route::get('/Advertisement_edit/{id}', [AdminController::class, 'Advertisement_edit'])
    ->middleware('admin');

// Update Advertisement
Route::put('/Advertisement_update/{id}', [AdminController::class, 'Advertisement_update'])
    ->middleware('admin');
        Route::get('/property_subscribe_edit/{id}', [AdminController::class, 'property_subscribe_edit']);
        Route::post('/store_subscription', [AdminController::class, 'store_subscription'])->middleware('admin');
        Route::post('/payment_mode_save', [AdminController::class, 'payment_mode_save'])->middleware('admin');
        Route::post('/store_Advertisement', [AdminController::class, 'store_Advertisement'])->middleware('admin');
        Route::get('/testimonials', [AdminController::class, 'testimonials'])->middleware('admin');            
        Route::get('/automobiles', [AdminController::class, 'automobiles'])->middleware('admin'); 
        Route::get('/agents', [AdminController::class, 'agents'])->middleware('admin'); 
        Route::get('/enquiries', [AdminController::class, 'enquiries'])->middleware('admin'); 
        Route::get('/property_enquiries', [AdminController::class, 'property_enquiries'])->middleware('admin'); 
        Route::get('/admin_update', [AdminController::class, 'admin_update'])->middleware('admin'); 
        Route::post('/admin_update_store', [AdminController::class, 'admin_update_store'])->middleware('admin');
        Route::get('/admin_password', [AdminController::class, 'admin_password'])->middleware('admin'); 
        Route::post('/admin_password_update', [AdminController::class, 'admin_password_update'])->middleware('admin');
        Route::get('/Enquiry_setting', [AdminController::class, 'Enquiry_setting'])->middleware('admin'); 
        Route::post('/change-property-enquiry-status', [AdminController::class, 'change_property_enquiry_status']);  
        Route::post('/change_general', [AdminController::class, 'change_general']);
        Route::post('/verify-user', [AdminController::class, 'verify_clients']);    
        Route::get('/ads', [AdminController::class, 'ads']); 
        Route::post('/addads', [AdminController::class, 'addads']);   
        Route::post('/editads', [AdminController::class, 'editads']); 
        Route::post('/make_featured', [AdminController::class, 'make_featured']);  
        Route::post('/propertysubscription_update', [AdminController::class, 'propertysubscription_update']);  
        Route::post('/make_agent_verified', [AdminController::class, 'make_agent_verified']); 
        Route::post('/change-ad-status', [AdminController::class, 'change_ad_status']);   
        Route::post('/change_status', [AdminController::class, 'change_status']);  
        Route::post('/delete_item', [AdminController::class, 'delete_item']); 
        Route::post('/verify_item', [AdminController::class, 'verify_item']); 
        Route::post('/change_order', [AdminController::class, 'change_order']);  
        Route::post('/deleteitem', [AdminController::class, 'deleteitem']);
        Route::get('/Facilities', [AdminController::class, 'Facilities'])->name('Facilities');
        Route::get('/inser_property', [AdminController::class, 'inser_property']); 
        Route::get('/add_property', [AdminController::class, 'add_property']); 
        Route::get('/add_needed_property', [AdminController::class, 'add_needed_property']); 
        Route::get('/edit-properties/{id}', [AdminController::class, 'edit_properties']);   
        Route::get('/properties_details', [AdminController::class, 'properties_details'])->name('properties_details');
        Route::get('/property_description', [AdminController::class, 'property_description'])->name('property_description');
        Route::get('/property_media', [AdminController::class, 'property_media'])->name('property_media');
        Route::post('/media_store', [AdminController::class, 'media_store'])->name('media_store');
        Route::get('/add_automobiles', [AdminController::class, 'add_automobiles'])->name('add_automobiles');
        Route::get('/automobile_details', [AdminController::class, 'automobile_details'])->name('automobile_details');
        Route::get('/automobile_description', [AdminController::class, 'automobile_description'])->name('automobile_description');
        Route::get('/automobile_media', [AdminController::class, 'automobile_media'])->name('automobile_media');
        Route::post('/automobile_media_store', [AdminController::class, 'automobile_media_store'])->name('automobile_media_store');
        Route::get('/property_other_details', [AdminController::class, 'property_other_details'])->name('property_other_details');
        Route::get('/properties_details', [AdminController::class, 'properties_details'])->name('properties_details');
        Route::get('/property_description', [AdminController::class, 'property_description'])->name('property_description');
        Route::get('/property_media', [AdminController::class, 'property_media'])->name('property_media');
        Route::get('/property_other_details', [AdminController::class, 'property_other_details'])->name('property_other_details');
        Route::get('/edit-automobiles/{id}', [AdminController::class, 'edit_automobiles']);
        Route::get('/chats', [AdminController::class, 'chats']);
        Route::get('/messages/{id}', [AdminController::class, 'messages']);
        Route::get('/county', [AdminController::class, 'county'])->middleware('admin'); 
        Route::get('/delete_county/{id}', [AdminController::class, 'delete_county']);
        Route::get('/vehicle', [AdminController::class, 'vehicle'])->middleware('admin'); 
        Route::get('/delete_vehicle/{id}', [AdminController::class, 'delete_vehicle']);
        Route::get('/brand', [AdminController::class, 'brand'])->middleware('admin'); 
        Route::get('/delete_brand/{id}', [AdminController::class, 'delete_brand']);
        Route::get('/modal', [AdminController::class, 'modal'])->middleware('admin'); 
        Route::get('/delete_modal/{id}', [AdminController::class, 'delete_modal']);
        Route::get('/color', [AdminController::class, 'color'])->middleware('admin'); 
        Route::get('/delete_color/{id}', [AdminController::class, 'delete_color']);
        Route::get('/fuel', [AdminController::class, 'fuel'])->middleware('admin'); 
        Route::get('/delete_fuel/{id}', [AdminController::class, 'delete_fuel']);
        Route::get('/body_type', [AdminController::class, 'body_type'])->middleware('admin'); 
        Route::get('/delete_body_type/{id}', [AdminController::class, 'delete_body_type']);
        Route::match(['get', 'put'], '/cookie', [AdminController::class, 'cookiespolicy'])->name('admin.cookie');
        Route::get('/vat', [AdminController::class, 'vat'])->middleware('admin'); 
        Route::get('/delete_vat/{id}', [AdminController::class, 'delete_vat']);
        Route::get('/add_facilities', [AdminController::class, 'add_facilities'])->middleware('admin'); 
        Route::get('/delete_facilities/{id}', [AdminController::class, 'delete_facilities']);
        Route::get('/report', [AdminController::class, 'report'])->name('admin.report');
        Route::get('/admin/export-report', [AdminController::class, 'exportReport'])->name('admin.export_report');
        Route::post('/admin/property_subscription/toggle-status', [App\Http\Controllers\AdminController::class, 'togglePropertySubscriptionStatus'])->name('property_subscription.toggle');
        // Facility Management CRUD
      
    });
});
 
Route::group(['middleware' => ['auth']], function() {

Route::prefix('panel')->group(function () {
    Route::get('/upload', function()
{
    dd('dsf');
});
    
    Route::get('/suscription',[MainController::class, 'suscription']);
    Route::get('/dashboard', [MainController::class, 'dashboard']);
    Route::get('/edit-properties/{id}', [MainController::class, 'editproperties']);
    Route::get('/edit-slots/{id}', [MainController::class, 'editslots']);
    Route::get('/add-properties', [MainController::class, 'addproperties']);
    Route::get('/add-slots', [MainController::class, 'addslots']);
    Route::get('/edit-slot/{id}', [MainController::class, 'editslots']);
    Route::post('store-property', [MainController::class, 'store_property']);
    Route::post('store-slots', [MainController::class, 'store_slots'])->name('store-slots');
    Route::delete('/property-delete{id}', [MainController::class, 'property_delete'])->name('delete.property');
    Route::get('/automobile-delete/{id}', [MainController::class, 'automobile_delete']);
    Route::delete('/slot-delete/{id}', [MainController::class, 'slot_delete'])->name('delete.slot');
    Route::get('/property-sold-out{id}', [MainController::class, 'property_sold_out']);
    Route::get('/testimonials', 'AdminController@testimonials')->name('testimonials');
    Route::get('/add-ads', [MainController::class, 'add_ads']);
    Route::delete('/delete-ad/{id}',[MainController::class,'deleteAd'])->name('delete.ad');
    Route::post('/addtheads', [MainController::class, 'addNewAds']); 
    Route::post('/editAds', [MainController::class, 'editAds']); 
    Route::post('/editAds/{id}',[MainController::class,'editAds']);
    Route::prefix('property')->group(function () {
    Route::get('/list', [MainController::class, 'basic']);
    Route::post('/save-amenities', [MainController::class, 'save_amenities']);
    Route::post('/save-residential', [MainController::class, 'save_residential']);
    });
     Route::prefix('automobile')->group(function () {
     Route::get('/list', [MainController::class, 'basic']);
     Route::post('/save-features', [MainController::class, 'save_features']);
     Route::post('/save-residential', [MainController::class, 'save_residential']);
    });
    Route::get('/add-automobiles', [MainController::class, 'addautomobiles']);
    Route::get('/edit-automobiles/{id}', [MainController::class, 'editautomobiles']);
    Route::post('store-automobiles', [MainController::class, 'store_automobiles']);
  

});
    // your routes
});
    Route::post('deleteitem', [AdminController::class, 'deleteitem']);

Route::prefix('website')->group(function () {
     Route::post('/save-property', [HomeController::class, 'save_properties']);

});
Route::get('/success', [CheckoutController::class, 'success'])->name('success');
Route::get('/checkout/{ad}', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/propertysubscribe/{propertyid}', [CheckoutController::class, 'propertysubscribe'])->name('propertysubscribe');
Route::post('/webhook', [CheckoutController::class, 'handleWebhook']);
Route::get('/payment-success', [CheckoutController::class, 'paymentSuccess'])->name('payment.success');
Route::post('/checkout',[CheckoutController::class,'payments'])->name('payments');
Route::post('/confirm-payment',[Payment::class,'confirmPayment']);
Route::post('/payment-webhook',[Payment::class,'paymentWebhook']);
Route::get('/success-payment', [Payment::class, 'paymentSuccess'])->name('payment.success');
Route::get('/failed-payment', [Payment::class, 'paymentFailed'])->name('payment.Failed');
Route::get('/cancel-payment', [Payment::class, 'paymentCalcel'])->name('payment.Cancel');
Route::get('/revolut/{ad}',[CheckoutController::class,'paymentForm'])->name('revolutForm');
Route::post('/revolut',[CheckoutController::class,'paymentCreation'])->name('revolutPayments');
Route::get('/helpcenter', [HomeController::class, 'helpcenter']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/equality', [HomeController::class, 'equality']);
Route::get('/cookiepolicy', [HomeController::class, 'cookiepolicy']);
Route::get('/termsofuse', [HomeController::class, 'termsofuse']);
Route::get('/reset_password', [HomeController::class, 'reset_password']);
Route::get('/changepassword', [HomeController::class,'changepassword']);
Route::post('/change_password_store', [HomeController::class,'change_password_store']);
Route::post('/change_password_store1', [HomeController::class,'change_password_store1']);
// Route::post('/change_password_store', [HomeController::class, 'change_password_store'])->middleware('prevent.direct.access');
Route::post('/verify_code', [HomeController::class,'verify_code']);
//delete verify-user
Route::delete('/admin/delete-user', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
//Admin enquiry bulk deleteUser
Route::delete('/enquiries/bulk-delete', [AdminController::class, 'bulkDelete'])->name('enquiries.bulkDelete');
//facility management
        Route::get('admin/facility-management', [FacilityManagementController::class, 'index']);
        Route::get('admin/facility-management/create', [FacilityManagementController::class, 'create']);
        Route::post('admin/facility-management/store', [FacilityManagementController::class, 'store']);
        Route::get('admin/facility-management/edit/{id}', [FacilityManagementController::class, 'edit']);
        Route::post('admin/facility-management/update/{id}', [FacilityManagementController::class, 'update']);
        Route::get('admin/facility-management/delete/{id}', [FacilityManagementController::class, 'destroy']);
        









