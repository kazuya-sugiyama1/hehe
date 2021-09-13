<?php

namespace App\Models\Shared;

use Illuminate\Foundation\Auth\User as Model;
use App\Contracts\Metable;
use App\Models\Shared\Traits\HasMetaFields;

/**
 * Authenticatable
 *
 * @copyright 2020 MDReptTime, LLC
 * @package   App\Models\Shared
 */
class Authenticatable extends Model implements Metable
{
    use HasMetaFields;
}
