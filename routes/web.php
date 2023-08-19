<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Actor\adminController;
use App\Http\Controllers\Actor\investorController;
use App\Http\Controllers\Actor\RolePermissionController;
use App\Http\Controllers\Basic\RegisterRegionAndZone;
//Route::get('/register', [RegisterRegionAndZone::class, 'displayform']);


Route::controller(RegisterRegionAndZone::class)->group(function()
    {

        // REGION ROUTE

        Route::post('/region/register','register_regions');
        Route::get('/region/register','register_regions');
        Route::get('/view/region','view_regions')->name('view_region');
        Route::get('/edit/region/{id}','edit_regions')->name('edit.region');
        Route::post('/edit/region/{id}','edit_regions');
        Route::get('/delete/region/{id}','delete_regions')->name('delete.region');

        //ZONE ROUTE
        Route::post('/zone/register','register_zones');
        Route::get('/zone/register','register_zones');
        Route::get('/view/zone','view_zones')->name('view_zone');
        Route::get('/edit/zone/{id}','edit_zones')->name('edit.zone');
        Route::post('/edit/zone/{id}','edit_zones');
        Route::get('/delete/zone/{id}','delete_zones')->name('delete.zone');

        // WOREDA ROUTE
        Route::get('/woreda/register','register_woredas');
        Route::post('/woreda/register','register_woredas');
        Route::get('/view/woreda','view_woredas')->name('view_woreda');
        Route::get('/edit/woreda/{id}','edit_woredas')->name('edit.woreda');
        Route::post('/edit/woreda/{id}','edit_woredas');
        Route::get('/delete/woreda/{id}','delete_woredas')->name('delete.woreda');


    });


use App\Http\Controllers\Actor\UsersController;
use App\Http\Controllers\Actor\TempController;
use App\Http\Controllers\Basic\OtherVisaController;

use App\Http\Controllers\Letter\LetterController;

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


Route::group(['prefix' => 'role'],function ()
{
    Route::controller(RolePermissionController::class)->group(function(){
        Route::get('view_roles', 'view_roles');
        Route::get('load_roles', 'load_roles');
        Route::get('load_role_permissions', 'load_role_permissions');
    })->middleware("permission:view_role");

    Route::controller(RolePermissionController::class)->group(function(){
        Route::get('assign_deassign_permission', 'assign_deassign_permission');
        Route::get('assign_all_role_permission', 'assign_all_role_permission');
        Route::get('remove_all_role_permission', 'remove_all_role_permission');
    })->middleware("permission:assign_role_permission");

    Route::controller(RolePermissionController::class)->group(function()
    {
        Route::post('add_new_role', 'add_new_role');
    })->middleware("permission:create_new_role");

    Route::controller(RolePermissionController::class)->group(function(){
        Route::post('update_role', 'update_role');
    })->middleware("permission:update_role");
    Route::controller(RolePermissionController::class)->group(function(){
        Route::get('delete_role', 'delete_role');
    })->middleware("permission:delete_role");

})->middleware('auth');




Route::group(['prefix' => 'user'],function ()
{
    Route::controller(UsersController::class)->group(function(){
        Route::get('view_users', 'view_users');
    })->middleware("permission:view_users");
    Route::controller(UsersController::class)->group(function(){
        Route::get('load_users', 'load_users');
    })->middleware("permission:view_users");
    Route::controller(UsersController::class)->group(function(){
        Route::post('add_new_user', 'add_new_user');
    })->middleware("permission:add_new_user");
    Route::controller(UsersController::class)->group(function(){
        Route::get('unassigned_role', 'unassigned_role');
    })->middleware("permission:assign_user_role");
    Route::controller(UsersController::class)->group(function(){
        Route::post('assign_user_role', 'assign_user_role');
        Route::get('remove_user_role', 'remove_user_role');
    })->middleware("permission:assign_user_role");

    Route::controller(UsersController::class)->group(function(){
        Route::get('load_user_permissions', 'load_user_permissions');
        Route::get('assign_deassign_user_permission', 'assign_deassign_user_permission');
        Route::get('assign_all_user_permission', 'assign_all_user_permission');
        Route::get('remove_all_user_permission', 'remove_all_user_permission');

    })->middleware("permission:assign_user_permission");

    Route::controller(UsersController::class)->group(function(){
        Route::get('enable_disable_user', 'enable_disable_user');
    })->middleware("permission:enable_disable_user");

    Route::controller(UsersController::class)->group(function(){
        Route::post('update_user', 'update_user');
    })->middleware("permission:update_user");

    Route::controller(UsersController::class)->group(function(){
        Route::get('delete_user', 'delete_user');
    })->middleware("permission:delete_user");

})->middleware('auth');


Route::group(['prefix' => 'other_visa'],function ()
{
    Route::controller(OtherVisaController::class)->group(function(){
        Route::get('view_other_visa', 'view_other_visa');
    })->middleware("permission:view_other_visa");

    Route::controller(OtherVisaController::class)->group(function(){
        Route::post('register_other_visa', 'register_other_visa');
    })->middleware("permission:register_other_visa");

    Route::controller(OtherVisaController::class)->group(function(){
        Route::post('update_other_visa', 'update_other_visa');
    })->middleware("permission:update_other_visa");

    Route::controller(OtherVisaController::class)->group(function(){
        Route::get('delete_other_visa', 'delete_other_visa');
    })->middleware("permission:delete_other_visa");

})->middleware('auth');



Route::group(['prefix' => 'letter'],function ()
{
    Route::controller(LetterController::class)->group(function(){
        Route::get('letter', 'createPDF');
    })->middleware("permission:view_letter_code");

    Route::controller(LetterController::class)->group(function(){
        Route::get('view_letter_type', 'view_letter_code');
        Route::get('load_letter_type', 'load_letter_types');

    })->middleware("permission:view_letter_code");



    Route::controller(LetterController::class)->group(function(){
        Route::post('create_new_letter_template', 'create_new_letter_template');
        Route::post('view_new_template_preview', 'view_new_template_preview');
    })->middleware("permission:create_new_letter_template");

})->middleware('auth');

Route::group(['prefix' => 'data'],function ()
{
    Route::controller(LetterController::class)->group(function(){
        Route::get('generate_migrations_and_models', 'generate_migrations_and_models');
    });



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
