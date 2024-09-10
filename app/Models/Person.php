<?php

namespace App\Models;

use ChrisReedIO\SecureMeilisearch\Contracts\SearchUser;
use ChrisReedIO\SecureMeilisearch\Traits\HasSearchKeys;
use ChrisReedIO\SecureMeilisearch\Traits\SearchFlush;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Person extends Model implements SearchUser
{
    use HasFactory, Searchable, SearchFlush, HasSearchKeys;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'birthday',
    ];

    protected function casts(): array
    {
        return [
            'birthday' => 'date',
        ];
    }

    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'birthday' => $this->birthday,
        ];
    }
}
