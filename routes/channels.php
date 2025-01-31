<?php

use Illuminate\Support\Facades\Broadcast;

// Exemplo de definição de um canal
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});