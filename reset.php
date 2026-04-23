<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$user = App\Models\User::first();
if ($user) {
    $user->password = Illuminate\Support\Facades\Hash::make('password');
    $user->email = 'admin@tastyfood.com';
    $user->save();
    echo "Reset OK\n";
} else {
    echo "No user\n";
}
