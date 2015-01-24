<?php
/**
 * Created by PhpStorm.
 * User: jsposato
 * Date: 1/24/15
 * Time: 4:15 PM
 */

    use Illuminate\Database\Eloquent\ModelNotFoundException;

    App::error(function(ModelNotFoundException $e)
    {
        return Response::make('Not Found', 404);
    });
