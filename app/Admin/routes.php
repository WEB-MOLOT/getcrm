<?php

use App\Admin\Http\Controllers;

Route::any('logout', Controllers\LogOutController::class)->name('admin.logout');
