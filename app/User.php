<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use App\Notifications\PartnerResetPassword as PartnerResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email','phone_number','birth_date','password','provider','provider_id','is_activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function putRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereRoleName($role)->first();
        }
        return $this->roles()->attach($role);
    }

    /*
    * Method untuk menghapus role (hak akses) pada user
    */ 
    public function forgetRole($role)
    {
        if (is_string($role))
        {
            $role = Role::whereRoleName($role)->first();
        }
        return $this->roles()->detach($role);
    }
    /*
    * Method untuk mengecek apakah user yang sedang login punya hak akses untuk mengakses page sesuai rolenya
    */ 
    public function hasRole($roleName)
    {
        foreach ($this->roles as $role)
        {
            if ($role->role_name === $roleName) return true;
        }
            return false;
    }

    public function sendPasswordResetNotification($token)
    {
        foreach ($this->roles as $role) {
            if ($role->role_name == 'user') {
                $this->notify(new ResetPasswordNotification($token));
            } elseif ($role->role_name == 'partner') {
                $this->notify(new PartnerResetPasswordNotification($token));
            }
        }
    }
}
