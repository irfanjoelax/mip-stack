<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pastikan permission memiliki guard yang sesuai
        $guard = config('auth.defaults.guard', 'web');

        // Buat role Super Admin jika belum ada
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => $guard]);

        // Ambil semua permission yang ada
        $permissions = Permission::pluck('name')->toArray();

        // Attach semua permission ke role Super Admin
        $superAdminRole->syncPermissions($permissions);

        // Ambil user dengan ID 1
        $user = User::factory()->create([
            'name' => 'Super Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        if ($user) {
            // Assign role Super Admin ke user
            $user->assignRole($superAdminRole);

            // Attach semua permission langsung ke user
            $user->syncPermissions($permissions);
        } else {
            $this->command->error("User not created");
        }
    }
}
