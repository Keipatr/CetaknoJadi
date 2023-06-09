<?php

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Str;

class CustomerAuthProvider implements UserProvider
{
    protected $model;
    protected $hasher;

    public function __construct(Hasher $hasher, $model)
    {
        $this->hasher = $hasher;
        $this->model = $model;
    }

    public function retrieveById($identifier)
    {
        return $this->createModel()->newQuery()
            ->where($this->model->getAuthIdentifierName(), $identifier)
            ->first();
    }

    public function retrieveByToken($identifier, $token)
    {
        return $this->createModel()->newQuery()
            ->where($this->model->getAuthIdentifierName(), $identifier)
            ->where($this->model->getRememberTokenName(), $token)
            ->first();
    }

    public function updateRememberToken($user, $token)
    {
        $user->setRememberToken($token);
        $user->save();
    }

    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials)) {
            return null;
        }

        $query = $this->createModel()->newQuery();

        foreach ($credentials as $key => $value) {
            if (!Str::contains($key, 'PASSWORD')) {
                $query->where($key, $value);
            }
        }

        return $query->first();
    }

    public function validateCredentials($user, array $credentials)
    {
        $plain = $credentials['PASSWORD_CUST'];

        return $this->hasher->check($plain, $user->getAuthPassword());
    }

    public function createModel()
    {
        return new $this->model();
    }
}
