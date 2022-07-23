<?php
Route::get('/', "AllController@index")->name("index");
Route::get('telc', "AllController@telcIndex")->name("telc_index");
Route::post('telc', "AllController@telcLead")->name("telc_lead");
Route::get('telc/thankyou', "AllController@telcThank")->name("telc_thank");

Route::get('/thanks', "SimpleController@thanks")->name("thanks");
Route::get('/terms', "SimpleController@terms")->name("terms");
Route::get('/privacy', "SimpleController@privacy")->name("privacy");
Route::get('/ccpa', "SimpleController@ccpa")->name("ccpa");
Route::get('/contact', "SimpleController@contact")->name("contact");
Route::get('/do-not-sell-my-info', "SimpleController@dontSellMyInfo")->name("dnsmi");

Route::get('1', "AllController@oneIndex")->name("1.index");
Route::post('1', "AllController@onePostLead")->name("1.post-lead_1");

Route::get('1b', "AllController@oneBIndex");
Route::post('1b', "AllController@oneBPostLead");

Route::get('1c', "AllController@oneCIndex");
Route::post('1c', "AllController@oneCPostLead");

Route::get('abcd', "AllController@twoIndex");//->name("2.index");
Route::post('abcd', "AllController@twoPostLead");//->name("2.post-lead");

Route::get('3', "AllController@threeIndex")->name("3.index");
Route::post('3', "AllController@threePostLead")->name("3.post-lead");

Route::get('4', "AllController@fourIndex")->name("4.index");
Route::post('4', "AllController@fourPostLead")->name("1.post-lead");
Route::get('4/thanks', "AllController@fourThanks")->name("4.thanks");

Route::get('5', "AllController@fiveIndex")->name("5.index");
Route::post('5', "AllController@fivePostLead")->name("5.post-lead");

Route::fallback("AllController@twoIndex");