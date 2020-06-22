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

Auth::routes();


Route::get('/', function(){
    return redirect('/home');
});

//Database notification route
Route::get('/notifications/{id}/view-notification', 'NotificationController@viewNotification')->name('viewNotification'); //route for all database notifications

//leave email notification routes
Route::get('notifications/{id}/view-leave-notification-finance', 'NotificationController@viewLeaveNotificationFinance')->name('viewLeaveNotificationFinance');
Route::get('notifications/{id}/view-leave-notification-mgmt', 'NotificationController@viewLeaveNotificationMgmt')->name('viewLeaveNotificationMgmt');
Route::get('notifications/{id}/view-leave-notification-hr', 'NotificationController@viewLeaveNotificationHr')->name('viewLeaveNotificationHr');
Route::get('notifications/{id}/view-leave-notification-hod', 'NotificationController@viewLeaveNotificationHOD')->name('viewLeaveNotificationHOD');
Route::get('notifications/{id}/view-leave-notification-supervisor', 'NotificationController@viewLeaveNotificationSupervisor')->name('viewLeaveNotificationSupervisor');
Route::get('notifications/{id}/view-leave-notification-profile', 'NotificationController@viewLeaveNotificationProfile')->name('viewLeaveNotificationProfile');

//claims email notification routes
Route::get('notifications/{id}/view-claim-intimation-handler', 'NotificationController@viewClaimIntimationNotificationHandler')->name('viewClaimIntimationNotificationHandler');


//Page routes
Route::get('/home', 'PagesController@dashboardPage')->name('dashboardPage');

//Get profile dashboard
Route::get('/profile', 'PagesController@profileDashboardPage')->name('profileDashboardPage');

//page controller pages
Route::get('/loan-history-page', 'PagesController@loanHistoryPage')->name('loanHistoryPage');
Route::get('/travel-history-page', 'PagesController@travelHistoryPage')->name('travelHistoryPage');
Route::get('/performance-history-page', 'PagesController@performanceHistoryPage')->name('performanceHistoryPage');
Route::get('/leave-history-page', 'PagesController@leaveHistoryPage')->name('leaveHistoryPage');


//user profile pages
Route::get('/user-profile/profile-dashboard', 'ProfileDashboardController@userProfileDashboardPage')->name('userProfileDashboardPage');
Route::get('/user-profile/performance', 'ProfileDashboardController@userPerformancePage')->name('userPerformancePage');
Route::get('/user-profile/loans', 'ProfileDashboardController@userLoansPage')->name('userLoansPage');
Route::get('/user-profile/leave', 'ProfileDashboardController@userLeavePage')->name('userLeavePage');
Route::get('/user-profile/travel', 'ProfileDashboardController@userTravelPage')->name('userTravelPage');


//user leave application pages
Route::get('/annual-leave-apply-page', 'PagesController@applyForAnnualLeavePage')->name('applyAnnualLeavePage');
Route::get('/sick-leave-apply-page', 'PagesController@applyForSickLeavePage')->name('applySickLeavePage');
Route::get('/compassionate-leave-apply-page', 'PagesController@applyForCompassionateLeavePage')->name('applyCompassionateLeavePage');
Route::get('/special-leave-apply-page', 'PagesController@applyForSpecialLeavePage')->name('applySpecialLeavePage');
Route::get('/study-leave-apply-page', 'PagesController@applyForStudyLeavePage')->name('applyStudyLeavePage');
Route::get('/maternity-leave-apply-page', 'PagesController@applyForMaternityLeavePage')->name('applyMaternityLeavePage');
Route::get('/paternity-leave-apply-page', 'PagesController@applyForPaternityLeavePage')->name('applyPaternityLeavePage');
Route::get('/mothers-leave-apply-page', 'PagesController@applyForMothersLeavePage')->name('applyMothersLeavePage');


//user loan application pages
Route::get('/special-loan-apply-page', 'PagesController@applyForSpecialLoanPage')->name('applySpecialLoanPage');
Route::get('/advance-loan-apply-page', 'PagesController@applyForAdvanceLoanPage')->name('applyAdvanceLoanPage');
Route::get('/gratuity-loan-apply-page', 'PagesController@applyForGratuityLoanPage')->name('applyGratuityLoanPage');
Route::get('/project-loan-apply-page', 'PagesController@applyForProjectLoanPage')->name('applyProjectLoanPage');


//Employee management pages
Route::get('employee-management-page', 'PagesController@employeeManagementPage')->name('employeeManagementPage');


//Performance Management
Route::get('/add-action-plan', 'PagesController@addActionPlanPage')->name('addActionPlanPage');













