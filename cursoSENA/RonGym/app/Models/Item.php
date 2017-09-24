<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $item_id
 * @property integer $state_id
 * @property string $name
 * @property string $route
 * @property string $icon
 * @property string $created_at
 * @property string $updated_at
 * @property Item $item
 * @property State $state
 * @property RolItem[] $rolItems
 */
class Item extends Model
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
    protected $fillable = ['item_id', 'state_id', 'name', 'route', 'icon', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo('App\Models\Item');
    }

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
}
