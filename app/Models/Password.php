<?php

namespace App\Models;

use App\Enums\Passwords\PasswordStatusEnum;
use App\Traits\BelongsToUser;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use BelongsToUser;
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'uuid',
        'email',
        'user_id',
        'status',
        'ip',
    ];

    protected $casts = [
        'status' => PasswordStatusEnum::class,
    ];

    public function updateStatus(PasswordStatusEnum $status): bool
    {
        if ($this->status->is($status)) {
            return false;
        }

        return $this->update(compact('status'));
    }
}
