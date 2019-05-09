<?php
use App\Controllers\BreedsController;

// Api Routes
$app->group('',
    function () {
        // Breeds Routes
        $this->get('/breeds', BreedsController::class . ':search');
        $this->get('/breeds/{ID}', BreedsController::class . ':show');
});