<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property boolean $sex
 * @property string $birthday
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class People extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'surname', 'sex', 'birthday', 'created_at', 'updated_at', 'deleted_at'];

}
