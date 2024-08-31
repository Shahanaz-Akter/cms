<?php

use App\Models\User;
use App\Models\Domain;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


// Route::get('/', function () {
//     return view('backend.layouts.master_page');
// });

Route::get('/', function () {
    // return view('welcome');
    return view('backend.auth.sign-in');
})->name('login');

Route::get('sign-up', [AuthController::class, 'register'])->name('admin.register');
Route::post('/admin/post-register', [AuthController::class, 'postRegister'])->name('post.register');

Route::get('sign-in', [AuthController::class, 'login'])->name('admin.login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('post.login');

// Admin Authentication routes
Route::group(['prefix' => 'admin'], function () {

    Route::get('master_page', function () {
        return view('backend.layouts.master_page');
    });

    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('forget-password', [AuthController::class, 'forget'])->name('admin.forget');
    Route::post('/admin/post-forget', [AuthController::class, 'postForget'])->name('post.forget');

    Route::get('update-password/{userId}', [AuthController::class, 'updatePassword'])->name('update.password');

    Route::post('post-update-password/{userId}', [AuthController::class, 'postUpdatePassword'])->name('post.update-password');
});

Route::group(['prefix' => 'cms'], function () {

    Route::get('/home-page', function () {
        return view('backend.layouts.master_page');
    })->name('home.page');

    Route::get('/templates', function () {
        $templates = Template::get();
        // dd($templates);
        $t1 = $templates[0];
        $t2 = $templates[1];
        $t3 = $templates[2];

        return view('backend.template.templates', compact('t1', 't2', 't3'));
    })->name('template');


    Route::post('/post-template', function (Request $request) {
        // dd($request->all());
        $user =  Auth::user();  //dd($user);

        if ($request->has('temp_id')) {


            $user_model = Domain::where('user_id',  $user->id)->first();
            // dd($user_model);

            if ($user_model) {
                $user_model->template_id =  $request->temp_id;
                $user_model->save();
                // dd($user_model);
                return redirect()->route('template')->with('success', 'Successfully Associated Template!');
            }
        }
    })->name('post.template');
});

Route::group(['prefix' => 'template'], function () {

    Route::get('/temp1', function () {
        return view('backend.template.temp1');
    })->name('temp1');

    Route::get('/temp2', function () {
        return view('backend.template.temp2');
    })->name('temp2');

    Route::get('/temp3', function () {
        return view('backend.template.temp3');
    })->name('temp3');

    Route::get('/temp1-edit', function () {
        return view('backend.template.temp1-edit');
    })->name('temp1.edit');

    Route::post('/post-temp1', function () {
        return 'post-temp1';
    })->name('post.temp1');

    Route::get('/temp2-edit', function () {
        return view('backend.template.temp2-edit');
    })->name('temp2.edit');

    Route::post('/post-temp2', function () {
        return 'post-temp2';
    })->name('post.temp2');

    Route::get('/temp3-edit', function () {
        return view('backend.template.temp3-edit');
    })->name('temp3.edit');

    Route::post('/post-temp3', function () {
        return 'post-temp3';
    })->name('post.temp3');



    Route::get('/custom-content', function () {

        $user =  Auth::user();  //dd($user);
        $user_model = Domain::where('user_id',  $user->id)->first();
        $t_id = $user_model->template_id;
        // dd($user_model->template_id);

        return view('backend.template.custom-content', compact('t_id'));
    })->name('custom.content');
});


// Route::get('/landing-page', function () {
//     return view('backend.layouts.langing-page');
// });