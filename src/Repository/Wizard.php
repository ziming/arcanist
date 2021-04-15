<?php declare(strict_types=1);

namespace Sassnowski\Arcanist\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $class
 * @property array $data
 */
class Wizard extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'data' => 'array',
    ];
}
