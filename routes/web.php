<?php

use App\Http\Controllers\AuditCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuditItemController;
use App\Http\Controllers\AuditSubcategoryController;
use App\Http\Controllers\DashboardController;

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





//LOgin routes///////////////////////////////
Route::get('/login', function () { return view('authentication.login');})->name('login');
Route::post('/authorization', [AuthManager::class, 'authentication'])->name('login.authorization');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');



//Invoice Module Routes//////////////////////


//->middleware('authorization:emp_viewx')


//////////Employee routes/////////////////////
Route::prefix('employee')->group(function () {
    // Your employee routes go here edit
    Route::get('/register', function () { return view('employee.register');})->name('employee.register');//->middleware('authorization:emp_manage');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('employee.edit')->middleware('authorization:emp_manage');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('employee.update')->middleware('authorization:emp_manage');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('employee.delete')->middleware('authorization:emp_manage');

    Route::post('/register/store', [UserController::class, 'store'])->name('employee.register.store');//->middleware('authorization:emp_manage');
    // Example routes:
    Route::get('/list', [UserController::class, 'list'])->name('employee.list')->middleware('authorization:emp_manage');

    Route::get('/activate/{id}', [UserController::class, 'activate'])->name('employee.activate')->middleware('authorization:emp_manage');
    Route::get('/deactivate/{id}', [UserController::class, 'deactivate'])->name('employee.deactivate')->middleware('authorization:emp_manage');
    // Add more routes as needed

    //permissions
    Route::get('/permissions/{id}', [UserController::class, 'permissions'])->name('employee.permissions')->middleware('authorization:emp_permissions');

    Route::get('/permissions/add/{e_id}/{p_id}', [UserController::class, 'addpermissions'])->name('employee.permissions.add')->middleware('authorization:emp_permissions');
    //permission remove
    Route::get('/permissions/remove/{id}', [UserController::class, 'removepermissions'])->name('employee.permissions.remove')->middleware('authorization:emp_permissions');
    //permision active
    Route::get('/permissions/activate/{id}', [UserController::class, 'activatepermissions'])->name('employee.permissions.activate')->middleware('authorization:emp_permissions');
    Route::get('/permissions/deactivate/{id}', [UserController::class, 'deactivatepermissions'])->name('employee.permissions.deactivate')->middleware('authorization:emp_permissions');
    // Add more routes as needed
});


////////////////////////////////////

Route::get('/home/{category}', [AuditCategoryController::class, 'index'])->name('home');
Route::get('/audit/{audit_subcategory_id}', [AuditItemController::class, 'index'] )->name('audit');
Route::get('/auditdetails/{id}', [AuditItemController::class, 'auditdetails'] )->name('auditdetails');




Route::get('/add_audit_category', function(){
    return view('add_audit_category');
});
Route::post('/add_audit_category', [AuditCategoryController::class, 'store'] )->name('add_audit_category')->middleware('authorization:add_audit_category');




Route::get('/add_audit_subcategory_view/{audit_category_id}', [AuditSubcategoryController::class, 'add_audit_subcategory'])->name('add_audit_subcategory_view');
Route::post('/add_audit_subcategory', [AuditSubcategoryController::class, 'store'])->name('add_audit_subcategory');


Route::get('add_audit/{audit_subcategory_id}', [AuditItemController::class, 'add_audit'])->name('add_audit');

Route::get('add_audit_details', function(){
    return view('add_audit_details');
})->name('add_audit_details');

Route::post('store_audit_details', [AuditItemController::class, 'store_audit_details'])->name('store_audit_details');
Route::post('update_audit_details', [AuditItemController::class, 'update_audit_details'])->name('update_audit_details');
Route::post('delete_audit_details', [AuditItemController::class, 'delete_audit_details'])->name('delete_audit_details');

//Dashboard routes///////////////////////////
Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/test', function(){
    return view('test');
})->name('test');