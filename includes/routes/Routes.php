<?php

Route::set('representatives', function() {
  Representatives::createView('Representatives');
  Representatives::run();
  
});
Route::set('addRepresentatives', function() {
  AddRepresentatives::createView('AddRepresentatives');
  AddRepresentatives::run();
  
});

Route::set('updateRepresentatives', function() {
  UpdateRepresentatives::createView('UpdateRepresentatives');
  UpdateRepresentatives::run();
  
});

Route::set('deleteRepresentatives', function() {
  DeleteRepresentatives::createView('DeleteRepresentatives');
  DeleteRepresentatives::run();
  
});

Route::set('deleteComplete', function() {
  DeleteComplete::run();
  
});

Route::set('updateComplete', function() {
  UpdateComplete::run();
  
});

Route::set('home', function() {
  Home::createView('Home');
  Home::run();
  
});

Route::set('shortage', function() {
  Shortage::createView('Shortage');
  Shortage::run();
  
});

?>