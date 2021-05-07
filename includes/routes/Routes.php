<?php
Route::set('index.php', function() {
  Index::CreateView('Index');
});

Route::set('about-us', function() {
  AboutUs::CreateView('AboutUs');
  AboutUs::test();
  
});

Route::set('contact-us', function() {
  ContactUs::CreateView('ContactUs');
});

Route::set('representatives', function() {
  Representatives::CreateView('Representatives');
  Representatives::test();
  
});
Route::set('addRepresentatives', function() {
  addRepresentatives::CreateView('addRepresentatives');
  addRepresentatives::test();
  
});

Route::set('addRepresentatives', function() {
  updateRepresentatives::CreateView('updateRepresentatives');
  updateRepresentatives::test();
  
});

Route::set('deleteRepresentatives', function() {
  updateRepresentatives::CreateView('deleteRepresentatives');
  updateRepresentatives::test();
  
});


?>