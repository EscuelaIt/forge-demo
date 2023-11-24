<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\NotificationTest;

class NotificateController extends Controller
{
    public function notificate() {
        $user = User::find(1);
        $user->notify(new NotificationTest());
    }
}
