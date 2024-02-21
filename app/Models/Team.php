<?php

namespace App\Models;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;
    protected $table = "teams";

    protected $fillable = ['name','slug'];

    
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    } 


    function customers(): HasMany {
        
        return $this->hasMany(Customer::class);
    }

}
