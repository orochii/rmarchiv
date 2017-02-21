<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserOnline
 *
 * @property int $id
 * @property int $user_id
 * @property string $last_place
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserOnline whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserOnline whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserOnline whereLastPlace($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserOnline whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserOnline whereUserId($value)
 * @mixin \Eloquent
 */
class UserOnline extends Model
{
    protected $table = 'user_online';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'last_place'
    ];

    protected $guarded = [];

        
}