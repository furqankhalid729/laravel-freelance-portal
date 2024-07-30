<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix'=>'v1', 'middleware' => 'setlang'],function(){

    //freelancer route start
    Route::group(['prefix'=>'freelancer'],function(){

        // user registration
        Route::controller(\App\Http\Controllers\Api\Freelancer\RegisterController::class)->group(function(){
            Route::post('register','register');
            Route::post('resend-otp','resend_otp');
            Route::post('email-verify','email_verify');
        });

        // forget password
        Route::controller(\App\Http\Controllers\Api\Freelancer\ForgetPasswordController::class)->group(function(){
            Route::post('forget-password','forget_password');
            Route::post('confirm-email-by-otp','confirm_email_by_otp');
            Route::post('reset-password','reset_password');
        });


        // user login
        Route::controller(\App\Http\Controllers\Api\Freelancer\LoginController::class)->group(function(){
            Route::post('login','login');
        });

        //language
        Route::controller(\App\Http\Controllers\Api\Freelancer\LanguageController::class)->group(function(){
            Route::get('language/all','all_language');
            Route::post('language/string-translate','string_translate');
        });

        //authenticated api
        Route::group(['middleware' => 'auth:sanctum'],function(){

            //logout
            Route::controller(\App\Http\Controllers\Api\Freelancer\LoginController::class)->group(function(){
                Route::post('logout','logout');
            });

            //country manage
            Route::controller(\App\Http\Controllers\Api\Freelancer\CategoryManageController::class)->group(function(){
                Route::get('category/all','category');
            });

            //country manage
            Route::controller(\App\Http\Controllers\Api\Freelancer\CountryManageController::class)->group(function(){
                Route::get('country/all','country');
                Route::post('state/all','state');
                Route::post('city/all','city');
            });

            //personal info
            Route::controller(\App\Http\Controllers\Api\Freelancer\PersonalInfoController::class)->group(function(){
                Route::get('personal/info','personal_info');
                Route::post('personal/info/update','personal_info_update');
                Route::post('profile/image/update','profile_image_update');
                Route::post('profile/password/update','change_password');
                Route::get('profile/details','profile_details');
                Route::post('account/delete','account_delete');
            });

            //order info
            Route::controller(\App\Http\Controllers\Api\Freelancer\OrderController::class)->group(function(){
                Route::get('order/all','all_order');
                Route::get('order/details/{id?}','order_details');
            });

            //job info
            Route::controller(\App\Http\Controllers\Api\Freelancer\JobController::class)->group(function(){
                Route::get('job/all','all_job');
                Route::get('job/my-proposals','my_proposal');
                Route::get('job/my-offers','my_offer');
                Route::get('job/details/{id?}', 'job_details');
                Route::post('job/proposal-send', 'job_proposal_send');
                Route::post('job/filter', 'jobs_filter');
            });

            //support ticket
            Route::controller(\App\Http\Controllers\Api\Freelancer\TicketController::class)->group(function(){
                Route::get('department/all','all_department');
                Route::get('ticket/all','all_ticket');
                Route::get('ticket/single/all-message/{id?}','all_message');
                Route::post('ticket/create','create_ticket');
                Route::get('ticket/details/{id?}', 'ticket_details');
                Route::post('ticket/message-send', 'ticket_message_send');
            });

            //wallet
            Route::controller(\App\Http\Controllers\Api\Freelancer\WalletController::class)->group(function(){
                Route::get('wallet/history','wallet_history');
            });

            //withdraw
            Route::controller(\App\Http\Controllers\Api\Freelancer\WithdrawController::class)->group(function(){
                Route::get('withdraw/history','withdraw_history');
            });

            //notification
            Route::controller(\App\Http\Controllers\Api\Freelancer\NotificationController::class)->group(function(){
                Route::get('notification/unread','unread_notification');
                Route::get('notification/unread/count','unread_notification_count');
                Route::post('notification/read','read_notification');
            });

            //live chat
            Route::controller(\Modules\Chat\Http\Controllers\Api\Freelancer\ChatController::class)->group(function(){
                Route::get('chat/client-list','client_list');
                Route::get('chat/fetch-record/{live_chat_id?}','fetch_record');
                Route::post('chat/message-send','message_send');
                Route::get('chat/credentials','credentials');
                Route::get('chat/unseen-message/count','unseen_message_count');
            });

        });

    });
    //freelancer route start
});
