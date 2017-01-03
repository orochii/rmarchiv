<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserCreditType
 *
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserCreditType whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserCreditType whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserCreditType whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserCreditType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserCreditType extends Model
{
    protected $table = 'user_credit_types';

    public $timestamps = true;

    protected $fillable = [
        'title'
    ];

    protected $guarded = [];

        
}