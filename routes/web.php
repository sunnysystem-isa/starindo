<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForecastController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\HelperController;
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
    return view('0_Welcome');
});

// begin :: Login 

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ["required"],
        'password' => ["required"]
    ]);
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        Alert::toast('Login Success','success')->autoClose(2500);
        return redirect()->intended("/dashboard");
    }
    Alert::error("Login Gagal", "Pastikan Email dan Password Benar");
    return back();
});

Route::group(['middleware' => ["auth"]], function () {
// Begin :: Group Route

    Route::get('/logout', function (Request $request) {

            Auth::logout();

            Request()->session()->invalidate();

            Request()->session()->regenerateToken();


            if (str_contains($request->url(), "api")) {
                return response()->json([
                    "status" => "success",
                    "msg" => "Logged out",
                ]);
            }
            return redirect('/');
        });

    // end :: Login

    Route::resource('/account', UserController::class);

    Route::post('/account/new',  [UserController::class, 'create']);

    Route::get('/account/view/{uuid}',  [UserController::class, 'view']);

    Route::post('/account/update',  [UserController::class, 'update']);

    Route::post('/account/password/reset',  [UserController::class, 'resetPassword']);

    Route::delete('/account/delete/{id}',  [UserController::class, 'delete']);

    Route::post('/dashboard-login', function (Request $request) {
        // Redirect::to('localhost:8000/api/login');
        // dd($request, $UserName, $UserPassword );
        // $credentials = $request->validate([
        //     'UserName' => ["required", "email"],
        //     'UserPassword' => ["required"]
        // ]);
        // $token = STR::random(50);
        // $data = [
        //     'email' => $UserName,
        //     'password' => $UserPassword
        // ];
        // if (Auth::attempt($data)) {
        //     $user = auth()->user();
        //     $token_user = $user->createToken($user->name)->plainTextToken;
        //     // dd($token_user);
        //     auth()->user()->forceFill([
        //         "remember_token" => $token_user,
        //     ])->save();
        //     return response()->json([
        //         "token" => $token_user,
        //         "user" => $user,
        //     ])->cookie("BPMCSRF", $token, 60);
        // }
        // return Redirect::to('https://crm.wika.co.id/api/login');
        $loginSukses = true;
        Alert::success("Success", "Login Berhasil");
        return view('1_dashboard', compact(["loginSukses"]));
    });

    Route::get('/metronic', function () {
        return view('dashboardMetronic');
    });

    Route::get('/dashboard', function () {
        return view('1_dashboard');
    });

    Route::get('/dashboard-unit-1', function () {
        return view('dashboard_unit_1');
    });

    Route::get('dashboard-unit-2', function () {
        return view('dashboard_unit_2');
    });

    Route::get('dashboard-unit-3', function () {
        return view('dashboard_unit_3');
    });

    Route::get('dashboard-unit-4', function () {
        return view('dashboard_unit_4');
    });

    Route::get('dashboard-unit-5', function () {
        return view('dashboard_unit_5');
    });

    Route::get('dashboard-unit-6', function () {
        return view('dashboard_unit_6');
    });

    Route::get('dashboard-unit-7', function () {
        return view('dashboard_unit_7');
    });

    Route::get('dashboard-unit-8', function () {
        return view('dashboard_unit_8');
    });

    Route::get('dashboard-unit-9', function () {
        return view('dashboard_unit_9');
    });

    // Begin :: Forecast
    Route::get('/forecast', [ForecastController::class, "index"]);
    // End :: Forecast

    Route::get('/setting', function () {
        $default = Cookie::get('default');
        $color = Cookie::get('color');
        $active = Cookie::get('active');
        $chartColor = Cookie::get('chart');
        $svg = Illuminate\Support\Facades\File::allFiles(public_path('assets/media/icons/duotune'));
        // dd($svg);
        // $chartColor = ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"];
        // dd($color, $active);
        return view('9_setting', compact(['color', 'active', 'chartColor', 'default', 'svg']));
    });

    Route::post('/setting/cookie', function (Request $request) {
        if (empty($request["default"])) {
            $color = cookie()->forever('color', $request["aside-color"]);
            $active = cookie()->forever('active', $request["active-color"]);
            $chartColor = cookie()->forever('chart', $request["chart-color"]);
            $default = cookie()->forever('default', '');
        } else {
            $color = cookie()->forever('color', '#0F2846');
            // $color = cookie()->forever('color', '#535353');
            $active = cookie()->forever('active', "#F39A06");
            // $active = cookie()->forever('active', "#ffa800");
            $chartColor = cookie()->forever('chart', '');
            $default = cookie()->forever('default', 'true');
        }
        
        return redirect()->back()->withCookies([$default, $color, $active, $chartColor]) ;
    });

    // Begin :: Route Customer Management
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/contact/get', [HelperController::class, "getAllData"]);
    Route::get('/contact/view/{id_customer}', [ContactController::class, 'view']);
    Route::post('/contact/create', [ContactController::class, 'create']);
    // End :: Route Customer Management
   
    // Begin :: Route Company
    Route::get('/company', [CompanyController::class, 'index']);
    Route::get('/company/get', [HelperController::class, "getAllData"]);
    Route::get('/company/delete/{case}/{model_class}', [HelperController::class, "delete"]);
    Route::get('/company/view/{id_companies}', [CompanyController::class, 'view']);
    Route::post('/company/create', [CompanyController::class, 'create']);
    Route::post('/company/edit', [CompanyController::class, 'edit']);
    // Route::get('/company/view', [CompanyController::class, 'view']);
    // Route::post('/customer/create', [ContactController::class, 'create']);
    // End :: Route Company

// End :: Group Route
});