<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $state_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property State $state
 * @property RolItem[] $rolItems
 * @property UsersRol[] $usersRols
 */
class Rol extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['state_id', 'name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rolItems()
    {
        return $this->hasMany('App\Models\RolItem');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersRols()
    {
        return $this->hasMany('App\Models\UsersRol');
    }
}
