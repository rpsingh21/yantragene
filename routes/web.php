<?php
route::get('/',function (){
    return view('homeView.home');
});
route::get('/sponsors',function (){
    return view('sponsors');
});
route::get('/gallary',function (){
    return view('gallary');
});
// ----------------------admin route for handing the events-------------------------

route::group(['middleware'=>'adminlog'],function (){
    route::get('/admin/dashbord',[adminController::class,'adminDashbord']);
    route::get('/admin/createCo',[adminController::class,'goCreateCo']);
    route::post('/admin/createCo',[adminController::class,'createCo']);
    route::get('/adminlogout',[adminController::class,'adminLogout']);
    route::get('/admin/allTeam',[adminController::class,'teamTable']);
    route::get('/admin/alluser',[adminController::class,'allUser']);
    route::get('/admin/notVerify',[adminController::class,'notVerifyUser']);
    route::get('/admin/totalEvent',[adminController::class,'totalEvent']);
});

route::group(['middleware'=>'adminWithout'],function (){
    route::get('/admin',function (){
        return view('admin.adminLogin');
    });
    route::post('/admin/login',[adminController::class,'login']);
    route::get('/admin/login',[adminController::class,'login']);
});

//------------------------------- co routes ------------------------------------------

route::group(['middleware'=>'coWithout'],function (){
    route::get('/co',function (){
        return view('co.coLogin');
    });
    Route::match(['get', 'post'], '/co/login',[coController::class,'coLogin']);
});

route::group(['middleware'=>'coLogin'],function (){
    route::get('/co/dashbord',[coController::class,'dashbord']);
});

//---------------------------------user routes----------------------------------------

route::group(['middleware'=>'userLogin'],function (){
    route::get('/logout','userAuth@logout');
    route::get('/profile','userAuth@profile');
});
route::group(['middleware'=>'userWithout'],function (){
    route::get('/login',function (){
        return view('loginReg');
    });
    route::post('/login/log','userAuth@login');
    route::post('/reg','userAuth@reg');
    route::get('/reg/verify',function (){
        return view('otp');
    });
    route::post('/reg/verify/otp','userAuth@otpVerify');
    route::get('/reg/verify/otp','userAuth@otpVerify');
});
route::get('/teamreg',[teamRegController::class,'index']);
