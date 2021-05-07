<?php
Route::set('index.php', function() {
  Index::CreateView('Index');
});
Route::set('representatives', function() {
  Representatives::CreateView('Representatives');
  Representatives::test();
  
});
Route::set('addRepresentatives', function() {
  addRepresentatives::CreateView('addRepresentatives');
  addRepresentatives::test();
  
});

Route::set('updateRepresentatives', function() {
  updateRepresentatives::CreateView('updateRepresentatives');
  updateRepresentatives::test();
  
});

Route::set('deleteRepresentatives', function() {
  deleteRepresentatives::CreateView('deleteRepresentatives');
  deleteRepresentatives::test();
  
});

Route::set('deleteComplete', function() {
  deleteComplete::CreateView('deleteComplete');
  deleteComplete::test();
  
});







?>