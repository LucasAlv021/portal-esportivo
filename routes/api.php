<?php
use App\Http\Controllers\ProdutoController;

Route::get('/produtos/{esporte}', [ProdutoController::class, 'getProdutosPorEsporte']);
