<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberLanguage extends Model
{
    use HasFactory, softDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member_languages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'language_id',
        'name',
        'position',
        'contact'
    ];
}
