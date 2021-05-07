<?php

Route::set('index', function() {
    Index::CreateView('Index');
});

Route::set('medicines', function() {
    Medicines::CreateView('Medicines');
    Medicines::onPageLoad();
});

Route::set('companies', function() {
    Companies::CreateView('Companies');
    Companies::onPageLoad();
});

Route::set('checkout', function() {
    Checkout::CreateView('checkout');
    Checkout::onPageLoad();
});

?>