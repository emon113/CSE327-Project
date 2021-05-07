<?php
Route::set('index.php',function(){
    Index::CreateView('Index');
    Index::logged();
});

Route::set('employees',function(){
        Employees::CreateView('Employees');
        Employees::test();
});

Route::set('auth',function(){
        //Auth::CreateView('Auth');
        Auth::logged();
});
Route::set('sale',function(){
    Sales::CreateView('Sales');
    Sales::sale();
});
Route::set('update',function(){
    Update::CreateView('Update');
    Update::updateM();
});

?>