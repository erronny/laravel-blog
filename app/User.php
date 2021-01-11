<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'vendor_id','IsActive','role_id','CreatedBy','name', 'email','password','Phone','Designation','RoleID','UpdatedBy','IsVerify','language_known','order_count'
    ];
    protected $dates = ['deleted_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function studio_detail(){
        return $this->belongsTo('App\Studio', 'studio_id', 'id')->withTrashed();
    }
    public function org(){
        return $this->belongsTo('App\Organizationmaster', 'OrgID', 'id');
    }

    public function roleName(){
        return $this->belongsTo('App\Roles', 'role_id');
    }
     public static function roleNames($id){
        //return "manish".$id;
        return Roles::where('userType',$id)->pluck('name')->implode(' ');
        //return $this->belongsTo('App\Roles', 'role_id');
    }

    

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
    
    public function getLanguagesAttribute()
    {
        $languages = Language_master::withTrashed()->whereIn('id', explode(",", $this->language_known))->pluck('name');
        return $languages;
    }
}
