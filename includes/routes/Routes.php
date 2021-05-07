<?php

Route::set('index', function() {
    Index::CreateView('Index');
});

Route::set('medicines', function() {
    Medicines::CreateView('Medicines');
});

Route::set('companies', function() {
    Companies::CreateView('Companies');
});

Route::set('checkout', function() {
    checkout::CreateView('checkout');
});

?>