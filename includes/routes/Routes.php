<?php
Route::set('index.php', function() {
  Index::createView('Index');
});
Route::set('representatives', function() {
  Representatives::createView('Representatives');
  Representatives::run();
  
});
Route::set('addRepresentatives', function() {
  AddRepresentatives::createView('AddRepresentatives');
  AddRepresentatives::test();
  
});

Route::set('updateRepresentatives', function() {
  UpdateRepresentatives::createView('UpdateRepresentatives');
  UpdateRepresentatives::test();
  
});

Route::set('deleteRepresentatives', function() {
  DeleteRepresentatives::createView('DeleteRepresentatives');
  DeleteRepresentatives::test();
  
});

Route::set('deleteComplete', function() {
  DeleteComplete::test();
  
});

Route::set('updateComplete', function() {
  UpdateComplete::test();
  
});


?>