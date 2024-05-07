<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PaypalPaymentController;
use App\Livewire\PaymentForm;
// use App\Livewire\PayPalPayment;
use App\Livewire\SuccessPage;
use App\Livewire\Website\HomePage;
use App\Livewire\Website\About;
use App\Livewire\Website\Cause;
use App\Livewire\Website\CauseDetail;
use App\Livewire\Website\ThankyouPage;
use App\Livewire\Website\SummaryPage;
use App\Livewire\Website\Contact;
use App\Livewire\Website\Donation;
use App\Livewire\Website\Volunteer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource('users', UserController::class);
Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::get('/', HomePage::class); ////

Route::get('/about', About::class); ////
Route::get('/cause', Cause::class); ////
Route::get('/cause-detail/{slug}', CauseDetail::class); ////
Route::get('/thank-you/{slug}/{donatedAmount}/{donatedCurrencySymbol}/{donatedCurrency}/{donatedGatewayName}', ThankyouPage::class); ////
Route::get('/summary/{slug}/{mainAmount}/{mainCurrencySymbol}/{mainCurrency}/{MainTransactionId}', SummaryPage::class); ////

Route::get('/contact', Contact::class); ////
// Route::get('/donation', Donation::class); ////
Route::get('/volunteer', Volunteer::class); ////

Route::middleware('checklogin')->group(function () {
    // Route::get('/register', Registration::class);
    // Route::get('/candidate-register', CandidateRegister::class);
    // Route::get('/company-register', CompanyRegister::class);
    // Route::get('/login', Login::class)->name('login');
    // Route::get('/forgot-password', ForgotPassword::class);
    // Route::get('/reset-password/{reset}', ResetPassword::class);
    // Route::get('/verify-account/{account}', [CandidateRegister::class, 'verifyAccount']);
});

// Route::get('/sign-out', [Login::class, 'signOut']);

// Route::middleware('auth')->group(function () {
//     Route::middleware('Candidate')->group(function () {
//         Route::get('/candidate-dashboard', CandidateDashboard::class);
//     });
//     Route::middleware(['Company', 'ApprovedCompany'])->group(function () {
//         Route::get('/company-dashboard', CompanyDashboard::class);
//     });
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('payin_response_url', [CauseDetail::class, 'payinResponseUrl']);


Route::post('/stripe/checkout', [StripePaymentController::class, 'stripeCheckoutProcess'])->name('stripe.checkout');
Route::post('/stripe/checkEmail', [StripePaymentController::class, 'checkEmail'])->name('stripe.checkEmail');
Route::post('/stripe/oneclickPayment', [StripePaymentController::class, 'oneclickPayment'])->name('stripe.oneclickPayment');
Route::post('/declineOffer', [StripePaymentController::class, 'declineOffer'])->name('declineOffer');


// Route::get('/demoPayemtn', PayPalPayment::class);

Route::post('/paypal/checkout', [PaypalPaymentController::class, 'paypalCheckout'])->name('paypal.checkout');
Route::get('/paypalCheckout/success', [PaypalPaymentController::class, 'paypalSuccess'])->name('paypalCheckout.success');
Route::get('/paypalCheckout/cancel', [PaypalPaymentController::class, 'paypalCancel'])->name('paypalCheckout.cancel');
Route::post('/paypal/oneclickPayment', [PaypalPaymentController::class, 'oneclickPayment'])->name('paypal.oneclickPayment');
Route::get('/upsellPaypal/upsellSuccess', [PaypalPaymentController::class, 'upsellPaypalSuccess'])->name('upsellPaypal.upsellSuccess');




