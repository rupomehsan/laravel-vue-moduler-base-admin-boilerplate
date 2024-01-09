<?php

namespace App\Modules\User\Actions;

use App\Modules\User\Actions\Validation;

class Update
{
    static $model = \App\Modules\User\Model::class;

    public static function execute($user, $request)
    {
        try {
            if (!$user) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uploader($image, 'uploads/user');
                $data['image'] = $imageName;
            } else {
                $data['image'] = $user->image;
            }
            $user->update($data);
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
