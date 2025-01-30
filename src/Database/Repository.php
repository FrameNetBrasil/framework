<?php

namespace FrameNetBrasil\Framework\Database;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

class Repository
{
    protected static function validFields(string $tableName, array $data): array
    {
        $fields = collect(Schema::getColumns($tableName))->pluck('name')->all();
        return Arr::only($data, $fields);
    }

    public static function save(string $tableName, object $object, string $key): ?int
    {
        if (is_null($object?->$key ?? null)) {
            unset($object->key);
        }
        $fields = static::validFields($tableName, (array)$object);
        $criteria = Criteria::table($tableName);
        $criteria->upsert([$fields], [$key], array_keys($fields));
        return $object->$key ?? $criteria->getConnection()->getPdo()->lastInsertId();
    }

}
