// app/Http/Controllers/Api/PresencaController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Presenca;
use Illuminate\Http\Request;

class PresencaController extends Controller
{
    // Se você não precisa de autenticação para a API, este construtor não é necessário
    // public function __construct()
    // {
    //     $this->middleware('auth:sanctum');
    // }

    public function index()
    {
        $presencas = Presenca::all();
        return response()->json($presencas);
    }

    // Adicione outros métodos da API conforme necessário
}
