<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Contracts\HasApiTokens;

class New_Modal extends Model
{
    use \Laravel\Sanctum\HasApiTokens, HasFactory, \Illuminate\Notifications\Notifiable;

    protected $table = 'new_modal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fathername',
        'address of incident',
        'aadhar',
        'district',
        'city',
        'state',
        'nationality',
        'incidentinformation',
        'phoneNo',
        'altPhoneNo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

