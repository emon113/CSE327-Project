<?php
Route::set('index.php',function(){
    Index::CreateView('Index');
    Index::logged();
});

Route::set('employees',function(){
        Employees::CreateView('Employees');
        Employees::employee();
});


Route::set('sale',function(){
    Sales::CreateView('Sales');
    Sales::sale();
});
Route::set('update',function(){
    Update::CreateView('Update');
    Update::updateM();
});
Route::set('cart',function(){
    Cart::CreateView('Cart');
    Cart::cartP();
});
Route::set('medicines', function() {
    Medicines::CreateView('Medicines');
    Medicines::doSomething();

});
Route::set('addtocart',function(){
    AddToCart::addtocart2();
});
Route::set('removeanitem',function(){
    RemoveAnItem::removeItem();
});
Route::set('clearcart',function(){
   ClearCart::clearAll();
});
?>