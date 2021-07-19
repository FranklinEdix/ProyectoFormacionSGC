<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *  
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function adminlte_image(){
        return 'https://picsum.photos/id/237/200/300';
    }

    public function adminlte_desc(){

        if(auth()->user() -> Id_Rol=='1'){
            return 'SISTEMA DE GESTIÓN DE CALIDAD';
        }
        if(auth()->user() -> Id_Rol=='2'){
            return 'DIRECTOR DE ...';
        }
        if(auth()->user() -> Id_Rol=='3'){
            return 'DECANO DE ...';
        }
        if(auth()->user() -> Id_Rol=='4'){
            return 'REGISTROS ACADEMICOS';
        }
        if(auth()->user() -> Id_Rol=='5'){
            return 'ADMISION';
        }
        if(auth()->user() -> Id_Rol=='6'){
            return 'DOCENTE DE...';
        }
        if(auth()->user() -> Id_Rol=='7'){
            return 'DOCENTE TUTOR DE...';
        }
        if(auth()->user() -> Id_Rol=='8'){
            return 'DIRECTOR UNIDAD DE PSICOPEDAGOGIA';
        }
        if(auth()->user() -> Id_Rol=='9'){
            return 'RELACIONES INTERNACIONALES';
        }
        if(auth()->user() -> Id_Rol=='10'){
            return 'UNIDAD DE PEDAGOGIA';
        }
        if(auth()->user() -> Id_Rol=='11'){
            return 'ATT SEGUIMIENTO EGRESADO';
        }
        if(auth()->user() -> Id_Rol=='12'){
            return 'VIRRECTORADO ACADEMICO';
        }
        return '? FALTAN DATOS';
    }
}
