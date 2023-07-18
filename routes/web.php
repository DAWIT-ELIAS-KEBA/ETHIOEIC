<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Actor\adminController;
use App\Http\Controllers\Actor\investorController;
use App\Http\Controllers\Actor\RolePermissionController;
use App\Http\Controllers\Actor\TempController;
Route::get('/test', [TempController::class, 'test']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('investors.investors_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::middleware('auth')->group(function () {
    Route::controller(RolePermissionController::class)->group(function(){
        Route::get('/role/view_roles', 'view_roles');
        Route::get('/role/load_roles', 'load_roles');
    })->middleware("permission:view_role");
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(adminController::class)->group(function(){
   Route::get('/dashboard1', 'dashboard1');
    Route::get('/investors', 'investors');
    Route::get('/dashboard2', 'dashboard2');
    Route::get('/dashboard3', 'dashboard3');
    Route::get('/dashboard4', 'dashboard4');
    Route::get('/dashboard5', 'dashboard5');
    Route::get('/dashboard6', 'dashboard6');
    Route::get('/dashboard7', 'dashboard7');
    Route::get('/dashboard8', 'dashboard8');
    Route::get('/dashboard9', 'dashboard9');
    Route::get('/dashboard10', 'dashboard10');
    Route::get('/dashboard11', 'dashboard11');
    Route::get('/notifications', 'notofication');
    Route::get('/terms_conditions', 'terms_conditions');
    Route::get('/contacts', 'contacts');
    Route::get('/checkout', 'checkout');
    Route::get('/invoice-create', 'invoice_create');
    Route::get('/invoice-details', 'invoice_details');
    Route::get('/invoice-list', 'invoice_list');
    Route::get('/pricing', 'pricing');
    Route::get('/reviews', 'reviews');
    Route::get('/team', 'team');
    Route::get('/timeline', 'timeline');
    Route::get('/to-do-list', 'to_do_list');
    Route::get('/error1', 'error1');
    Route::get('/alerts', 'alerts');
    Route::get('/badge', 'badge');
    Route::get('/breadcrumb', 'breadcrumb');
    Route::get('/buttons', 'buttons');
    Route::get('/buttongroup', 'buttongroup');
    Route::get('/cards', 'cards');
    Route::get('/dropdowns', 'dropdowns');
    Route::get('/images_figures', 'images_figures');
    Route::get('/listgroup', 'listgroup');
    Route::get('/navs_tabs', 'navs_tabs');
    Route::get('/object_fit', 'object_fit');
    Route::get('/pagination', 'pagination');
    Route::get('/popovers', 'popovers');
    Route::get('/progress', 'progress');
    Route::get('/spinners', 'spinners');
    Route::get('/toasts', 'toasts');
    Route::get('/tooltips', 'tooltips');
    Route::get('/typography', 'typography');
    Route::get('/form_inputs', 'form_inputs');
    Route::get('/form_check_radios', 'form_check_radios');
    Route::get('/form_input_group', 'form_input_group');
    Route::get('/form_select', 'form_select');
    Route::get('/form_range', 'form_range');
    Route::get('/progress', 'form_input_masks');
    Route::get('/form_input_masks', 'spinners');
    Route::get('/form_file_uploads', 'form_file_uploads');
    Route::get('/form_dateTime_pickers', 'form_dateTime_pickers');
    Route::get('/form_color_pickers', 'form_color_pickers');
    Route::get('/form_inputs', 'form_inputs');
    Route::get('/form_check_radios', 'form_check_radios');
    Route::get('/form_input_group', 'form_input_group');
    Route::get('/form_select', 'form_select');
    Route::get('/form_range', 'form_range');
    Route::get('/floating_labels', 'floating_labels');
    Route::get('/form_layout', 'form_layout');
    Route::get('/quill_editor', 'quill_editor');
    Route::get('/form_validation', 'form_validation');
    Route::get('/form_select2', 'form_select2');
   Route::get('/tables', 'tables');
    Route::get('/grid_tables', 'grid_tables');
    Route::get('/data_tables', 'data_tables');
    Route::get('/modals_closes', 'modals_closes');
    Route::get('/ratings', 'ratings');
    Route::get('/scrollspy', 'scrollspy');
    Route::get('/swiperjs', 'swiperjs');
    Route::get('/full_calendar', 'full_calendar');
    Route::get('/accordions_collpase', 'accordions_collpase');
    Route::get('/draggable_cards', 'draggable_cards');
     Route::get('/sweet_alerts', 'sweet_alerts');
     Route::get('/avatars', 'avatars');
     Route::get('/colors', 'colors');
     Route::get('/helpers', 'helpers');
     Route::get('/coming-soon', 'coming_soon');

        });


    Route::get('investors', ['uses'=>'App\Http\Controllers\investorController@index', 'as'=>'investor.index']);
    Route::controller(investorController::class)->group(function(){
       Route::get('/investors_dashboard', 'investors_dashboard');
      //  Route::get('investors_dashboard', ['uses'=>'App\Http\Controllers\investorController@index', 'as'=>'investor.index']);
             });
       Route::get('/logout',  [adminController::class, 'AdminLogout'] )->name('admin.logout');







require __DIR__.'/auth.php';
