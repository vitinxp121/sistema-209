<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use CodeIgniter\HTTP\ResponseInterface;

    // Faz o include do ConteudoModel no arquivo ConteudoController
    use App\Models\ConteudoModel;

    class ConteudoController extends BaseController
{

 protected $helpers = ['url'];

 public function index(): string

    {
    // 1. Instancia o Model
    $conteudoModel = new ConteudoModel();

    // 2. Busca o registro com Id = 1
    $dados['conteudo'] = $conteudoModel->find(1);

    // 3. Envia os dados para a view 'home'
    return view('home', $dados);
 }

    public function contato(): string
{

    // 1. Instancia o Model
    $conteudoModel = new ConteudoModel();

    // 2. Busca o registro com Id = 1
    $dados['conteudo'] = $conteudoModel->find(2);
    return view('contato', $dados);
}

  

}
 