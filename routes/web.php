<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
Route::get('/', [ RoomController::class, 'index']);
Route::get('/sala/create/', [ RoomController::class, 'criar']);
Route::get('/sala/{id}', [ RoomController::class, 'buscar']);


/*
Route::get('/', function () {
    return redirect()->to('welcome');
});
*/

# Auth
Auth::routes(['verify' => true]);
Route::get('/register/complete/{RegisterCode}', 'Auth\RegisterController@completePage')->name('register.complete');

# Socialite Google
Route::get('auth/google', 'Auth\GoogleLogin@redirectToGoogle')->name('auth.google.redirect');
Route::get('auth/google/callback', 'Auth\GoogleLogin@handleGoogleCallback')->name('auth.google.callback');

# Painel
Route::group(['middleware' => ['auth', 'needsRole:user', 'verified'], 'prefix' => 'painel'], function () {
/* 
    # Home
    Route::get('/', 'Painel\HomeController@index')->name('painel.home');

    # Onboarding
    Route::get('onboarding/confirmado', 'Painel\OnboardingController@verified')->name('painel.onboarding.verified');
    Route::get('onboarding/iniciar', 'Painel\OnboardingController@start')->name('painel.onboarding.start');
    Route::get('onboarding/etapa/{Step}', 'Painel\OnboardingController@step')->name('painel.onboarding.step');
    Route::get('onboarding/finalizado', 'Painel\OnboardingController@finish')->name('painel.onboarding.finish');

    Route::post('onboarding/etapa/1/salvar', 'Painel\OnboardingController@saveStepOne')->name('painel.onboarding.step_one.save');
    Route::post('onboarding/etapa/2/salvar', 'Painel\OnboardingController@saveStepTwo')->name('painel.onboarding.step_two.save');
    Route::post('onboarding/etapa/3/salvar', 'Painel\OnboardingController@saveStepTree')->name('painel.onboarding.step_tree.save');
    Route::post('onboarding/etapa/4/salvar', 'Painel\OnboardingController@saveStepFour')->name('painel.onboarding.step_four.save');
    Route::post('onboarding/etapa/5/salvar', 'Painel\OnboardingController@saveStepFive')->name('painel.onboarding.step_five.save');

    Route::post('onboarding/agenda/salvar-horario/{dayId}/{Id?}', 'Painel\OnboardingController@saveHourAgenda')->name('painel.onboarding.agenda.save_hour');
    Route::get('onboarding/agenda/remover-horario/{Id}', 'Painel\OnboardingController@removeHourAgenda')->name('painel.onboarding.agenda.remove_hour');

    # Resources
    Route::get('resources', 'Painel\ResourcesController@index')->name('painel.resources');
    Route::post('resources/save', 'Painel\ResourcesController@saveResource')->name('painel.resources.save');

    # Agenda
    Route::get('agenda', 'Painel\AgendaController@index')->name('painel.agenda');
    Route::get('agenda/json', 'Painel\AgendaController@agendaJson')->name('painel.agenda.json');
    Route::get('agenda/json-home', 'Painel\AgendaController@agendaJsonHome')->name('painel.agenda.json_home');
    Route::post('agenda/nova-sessao', 'Painel\AgendaController@newSession')->name('painel.agenda.new_session');

    # Customers
    Route::get('clientes', 'Painel\CustomersController@index')->name('painel.customers');
*/
});

# Admin
Route::group(['middleware' => ['auth', 'needsRole:admin', 'verified'], 'prefix' => 'admin'], function () {

});
