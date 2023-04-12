<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function MarkAsAllRead(){
        $user = User::find(1);
        $user->unreadNotifications->markAsRead();
        return redirect()->back();
    }
}
