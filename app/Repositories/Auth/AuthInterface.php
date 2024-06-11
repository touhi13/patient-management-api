<?php

namespace App\Repositories\Auth;

use App\Models\User;

interface AuthInterface
{
    public function login($data): ?string;
    public function register($data): ?User;
    public function getUserByEmail(string $email): ?User;
    public function getUser(int $id): ?User;
}
