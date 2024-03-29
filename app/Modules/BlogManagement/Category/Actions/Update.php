<?php

namespace App\Modules\BlogManagement\Category\Actions;

use App\Modules\BlogManagement\Category\Actions\Validation;

class Update
{
    static $model = \App\Modules\BlogManagement\Category\Model::class;

    public static function execute(Validation $request,$id)
    {
        try {
            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $data->update($request->validated());
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}