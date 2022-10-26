<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentUser extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'document_user';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getFullInformation() {
        return $this->hasMany(TypeDocument::class, 'id', 'type_document_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function users() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
