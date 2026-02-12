<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable,HasApiTokens;

    protected $appends=['roles'];

    function getRolesAttribute(){
        $roles=[];
        if($this->esAdministrador()){
            $roles[]='administrador';
        }
        if($this->esDocente()){
            $roles[]='docente';
        }
        if($this->esEstudiante()){
            $roles[]='estudiante';
        }




        return $roles;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function evidencias(){
        return $this->hasMany(Evidencia::class,'estudiante_id');
    }

    public function modulosImpartidos(){
        return $this->hasMany(ModuloFormativo::class,'docente_id');
    }
    public function esAdministrador(): bool
    {
        return $this->email === config('app.admin.email');
    }

    public function esDocente(){
     return $this->modulosImpartidos()->exists();

    }
    public function esDocenteModulo(){
        return $this->modulosImpartidos()->exists();
    }


    public function modulosMatriculados(){
        return $this->belongsToMany(ModuloFormativo::class,'matriculas','estudiante_id','modulo_formativo_id');
    }

    public function esEstudiante(){
        return $this->modulosMatriculados()->exists();
    }

    public function esEstudianteModulo(ModuloFormativo $modulo){
        return $this->modulosMatriculados()->where('estudiante_id',$modulo->id)->exists();

    }
}
