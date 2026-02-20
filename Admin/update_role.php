<?php
$u = App\Models\User::where('email', 'ranaimranali2210@gmail.com')->first();
if ($u) {
    $u->role = 'admin';
    $u->save();
    echo "User role updated to admin for " . $u->email . "\n";
} else {
    echo "User not found\n";
}
