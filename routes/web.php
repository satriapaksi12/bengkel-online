
<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NotificationController;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

//Benahi
Route::get('/', [DashboardController::class, 'GuestView'])->name('dashboard')->middleware('guest');
Route::get('/store-view/{id}/show', [DashboardController::class, 'StoreView']);

// Ajax
Route::post('/search-bengkel-ajax', [AjaxController::class, 'searchStore']);
Route::post('/get-kecamatan', [AjaxController::class, 'searchKecamatan']);
Route::post('/search-employee-mitra', [AjaxController::class, 'searchEmployeeMitra']);
Route::post('/search-bengkel-aktif', [AjaxController::class, 'searchBengkelAktif']);
Route::post('/search-bengkel-employee', [AjaxController::class, 'searchBengkelEmployee']);
Route::post('/search-mitra', [AjaxController::class, 'searchMitra']);

//Dashboard Route
Route::resource('dashboard', DashboardController::class)->except(['destroy', 'store'])->middleware(['auth', 'verified']);

//Categories Route
Route::controller(CategoriesController::class)->group(function () {
    Route::get('sparepart/brakes', 'brakes');
    Route::get('sparepart/suspension', 'suspension');
    Route::get('sparepart/drivetrain', 'drivetrain');
    Route::get('sparepart/electronics', 'electronics');
    Route::get('sparepart/exhaust', 'exhaust');
    Route::get('sparepart/oil', 'oil');
    Route::get('sparepart/wheels', 'wheels');
    Route::get('sparepart/tools', 'tools');
});
//Notification
Route::get('/mark-read', [NotificationController::class, 'MarkAsAllRead']);

//SuperAdmin
Route::middleware(['auth', 'verified', 'role:superadmin'])->controller(AuthController::class)->group(function () {
    Route::post('/create-employee',  'CreateEmployee');
    Route::post('/update-employee', 'UpdateEmployee');
    Route::delete('/delete-employee/{user}', 'DeleteEmployee');
});

//Mitra
Route::middleware(['auth', 'verified', 'role:mitra'])->controller(MitraController::class)->group(function () {
    Route::get('/list-store', 'ListStore');
    Route::get('/list-pengajuan-store', 'ListPengajuanStore');
    Route::get('/store-register', 'StoreRegisterView');
    Route::post('/store-register', 'StoreRegisterSubmit');
    Route::post('/store-update/{id}', 'StoreUpdate');
    Route::post('/store-item-insert/{id}', 'StoreInsertItem');
    Route::get('/store-edit/{id}', 'StoreEdit');
    Route::get('/delete-bengkel/{id}', 'DeleteBengkel');
    Route::post('create-product', 'create_product');
    Route::put('edit-product/{id}', 'update_product');
    Route::get('edit-product/{id}','edit');
    Route::get('bengkel-list', 'bengkel_list');
    Route::get('delete-product/{id}','DeleteProduct');
    Route::get('add-to-bengkel', 'SparepartToBengkelView');
    Route::get('item-management/{id}', 'itemManagementView');
    Route::post('item-management/{id}/{store_id}', 'itemManagementUpdate');
    Route::post('item-management-detach/{id}/{store_id}', 'itemManagementDetach');
});

//Profile
Route::middleware(['auth', 'verified', 'role:superadmin|employee|mitra'])->controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'ProfileView');
    Route::post('/profile', 'ProfileUpdate');
});

//Employee
Route::resource('list-mitra', EmpController::class);
Route::middleware(['auth', 'verified', 'role:employee|superadmin'])->controller(EmpController::class)->group(function () {
    Route::get('/validasi-bengkel', 'StoreValidationView');
    Route::post('/validasi-bengkel', 'StoreValidation');
    Route::get('/list-mitra', 'ListMitraView');
    Route::get('/list-nonmitra', 'ListNonMitra');
    Route::post('/update-mitra', 'UpdateDataMitra');
    Route::get('/delete-mitra/{id}', 'DeleteDataMitra');
    Route::post('/non-aktif/{id}', 'NonAktifMitra');
    Route::post('/aktif/{id}', 'AktifMitra');
    Route::get('/dashboard-mitra', 'mitra');
    Route::get('/dashboard-employee', 'employee');
});

//Store Controller
Route::middleware(['auth', 'verified', 'role:superadmin|employee|mitra'])->controller(StoreController::class)->group(function () {
    Route::get('/list-bengkel', 'StoreView');
    Route::get('/reject-bengkel', 'StoreReject');
    Route::get('/banding-bengkel', 'StoreBanding');
    Route::post('/aktif-bengkel', 'StoreUpdateStatus');
    Route::post('/reject-bengkel/{id}', 'RejectBengkel');
//    Route::get('/store-banding/{id}', 'StoreBandingEdit');
    Route::post('/store-banding', 'StoreBandingUpdate');
    Route::get('/pengajuan-bengkel', 'StorePengajuan');
    Route::get('/delete-bengkel/{id}', 'DeleteBengkel');
});

//Route Confirmation Email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Route Send Notification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//Route Resend Email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Dashboard Route
Route::resource('dashboard', DashboardController::class)->except(['destroy', 'update', 'store'])->middleware(['auth', 'verified']);

//Protected Route
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/otp-confirmation', [AuthController::class, 'resetEmailPassword'])->name('otp');
    Route::post('/otp-confirmation', [AuthController::class, 'otpValidation']);
    Route::get('/update-email-pw', [AuthController::class, 'resetEmailPasswordView']);
    Route::post('/update-email-pw', [AuthController::class, 'resetEmailPasswordStore']);
});

// For testing only
Route::controller(TestController::class)->group(function () {
    Route::get('test', 'index');
    Route::get('map', 'map');
    Route::get('otp', 'otp');
    Route::get('otp-validation', 'otpValidation');
    Route::get('email-test', 'TestEmail');
    Route::get('test-create-product', 'TestCreateProductView');
    Route::post('test-create-product', 'TestCreateProductStore');
    Route::get('test-input-product', 'TestInputProductView');
    Route::post('test-input-product', 'TestInputProductStore');
    Route::post('test-image', 'TestImage');
    Route::get('login-test', 'TestLogin');

});


//Google Login Halo
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/redirect', 'redirectToProvider');
    Route::get('/auth/callback', 'handleProviderCallback');
});


Route::controller(CategoriesController::class)->group(function () {
    Route::get('sparepart', 'index');
    Route::get('sparepart/brakes/{id}', 'brakeDetails');
    Route::get('sparepart/oil/{id}', 'oilDetails');
    Route::get('sparepart/suspension/{id}', 'suspensionDetails');
    Route::get('sparepart/electronics/{id}', 'electronicsDetails');
    Route::get('sparepart/exhaust/{id}', 'exhaustDetails');
    Route::get('sparepart/wheels/{id}', 'wheelsDetails');
    Route::get('sparepart/tools/{id}', 'toolsDetails');
});

Route::get('/product', function () {
    return view('user/userproduct');
});

// Route::get('/login', function () {
//     return view('auth/loginn');
// })->name('login');

Route::get('/registerr', function () {
    return view('auth/registerr');
});

Route::get('/forget', function () {
    return view('auth/forget');
});

Route::get('/user', function () {
    return view('user/dashboard');
});

// Route login dan register

Route::get('/register_view_test', function () {
    return view('auth.register_temp');
});

Route::get('/login_view_test', function () {
    return view('auth.login_temp');
});

Route::get('/bengkel', function () {
    return view('user.bengkel');
});
Route::get('/emaill', function () {
    return view('auth.reset-email-password');
});

