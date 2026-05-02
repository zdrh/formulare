<?php

namespace App\Models\Core;

use CodeIgniter\Model;

class BaseModel extends Model
{
    public function restore(int|string $id): bool
    {
        return $this->builder()
            ->where($this->primaryKey, $id)
            ->update([
                $this->deletedField => null,
            ]);
    }
}