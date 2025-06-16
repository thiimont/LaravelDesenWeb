<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Models\Produto;
use App\Models\Usuario;
use App\Models\Contato;

use App\Http\Requests\ContatoRequest;

use App\Http\Requests\AddProdutoRequest;
use App\Http\Requests\AtualizarProdutoRequest;

use App\Http\Requests\AddUsuarioRequest;
use App\Http\Requests\AtualizarUsuarioRequest;

use App\Http\Requests\LoginRequest;

class AppController extends Controller
{
    public function home(){
        $cards = [
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
                'nome' => 'Nuvem',
                'texto' => 'Plataforma de infraestrutura totalmente gerenciada para implantação e hospedagem PHP.',
                'preco' => 'A partir de US$ 0,00/mês'
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
                'nome' => 'Forja',
                'texto' => 'Gerenciamento de servidores para aplicativos no DigitalOcean, Vultr, Amazon, Hetzner e muito mais',
                'preco' => 'A partir de US$ 12,00/mês'
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
                'nome' => 'Vigília Noturna',
                'texto' => 'Monitoramento e insights incomparáveis sobre o desempenho do seu aplicativo Laravel.',
                'preco' => 'Preços em breve'
            ],
            [
                'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
                'nome' => 'Nova',
                'texto' => 'A maneira mais simples e rápida de criar painéis de administração prontos para produção.',
                'preco' => 'A partir de $ 99,00'
            ]
        ];

        return view('home', ['cards'=>$cards]);
    }

    public function sobre(){
        $frame = "(Laravel)";
        $vantagens = ["Sintaxe simples", "Sintaxe concisa", "Sistema modular"];

        return view('sobre', ['frm'=>$frame, 'vtg'=>$vantagens]);
    }

    public function contato(){
        return view('contato');
    }

    public function listacontatos(){
        if (!Auth::check()) {
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        $contatos = Contato::all();

        return view('listacontatos', ['msgs'=>$contatos]);
    }

    public function excluircontato($id){
        $contato = Contato::findOrFail($id);

        $contato->delete();
        
        return redirect('listacontatos')->with('sucesso', 'Mensagem excluída com sucesso!');
    }

    public function enviarcontato(ContatoRequest $request){
        $dadosValidados = $request->validated();

        $msg = Contato::create($dadosValidados);

        return redirect('contato')->with('sucesso', 'Mensagem enviada com sucesso!');
    }

    public function produtos(){
        $produtos = Produto::all();

        return view('produtos', ['prods'=>$produtos]);
    }

    public function listaprodutos(){
        if (!Auth::check()) {
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        $produtos = Produto::all();

        return view('listaprodutos', ['prods'=>$produtos]);
    }

    public function frmeditproduto($id){
        $produto = Produto::findOrFail($id);
        if (!Auth::check()) {
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('frmeditproduto', ['prod'=>$produto]);
    }

    public function atualizarproduto(AtualizarProdutoRequest $request, $id){
        $produto = Produto::findOrFail($id);

        $dadosValidados = $request->validated();

        $produto->update($dadosValidados);

        return redirect('listaprodutos')->with('sucesso', 'Produto atualizado com sucesso!');
    }

    public function excluirproduto($id){
        $produto = Produto::findOrFail($id);

        $produto->delete();
        
        return redirect('listaprodutos')->with('sucesso', 'Produto excluído com sucesso!');
    }

    public function frmproduto(){
        if (!Auth::check()) {
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('frmproduto');
    }

    public function addproduto(AddProdutoRequest $request){
        $dadosValidados = $request->validated();

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('imagens', 'public');
            $dadosValidados['imagem'] = $path;
        }

        $prod = Produto::create($dadosValidados);

        return redirect('produtos');
    }

    public function frmusuario(){
        return view('frmusuario');
    }

    public function addusuario(AddUsuarioRequest $request){
        $dadosValidados = $request->validated();

        $dadosValidados['senha'] = Hash::make($dadosValidados['senha']);

        $usuario = Usuario::create($dadosValidados);

        return redirect('dashboard');
    }

    public function listausuarios(){
        if (!Auth::check()) {
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        $usuarios = Usuario::all();

        return view('listausuarios', ['users'=>$usuarios]);
    }

    public function frmeditusuario($id){
        $usuario = Usuario::findOrFail($id);
        if (!Auth::check()) {
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('frmeditusuario', ['user'=>$usuario]);
    }

    public function atualizarusuario(AtualizarUsuarioRequest $request, $id){
        $usuario = Usuario::findOrFail($id);

        $dadosValidados = $request->validated();

        if (!empty($dadosValidados['senha'])) {
            $dadosValidados['senha'] = Hash::make($dadosValidados['senha']);
        } else {
            unset($dadosValidados['senha']);
        }

        $usuario->update($dadosValidados);

        return redirect('listausuarios')->with('sucesso', 'Usuário atualizado com sucesso!');
    }

    public function excluirusuario($id){
        $usuario = Usuario::findOrFail($id);

        $usuario->delete();
        
        return redirect('listausuarios')->with('sucesso', 'Usuário excluído com sucesso!');
    }

    public function frmlogin(){
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('frmlogin');
    }

    public function dashboard(){
        if (!Auth::check()) {
            return redirect()->route('login')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('dashboard');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

    public function login(LoginRequest $request){
        $credenciais = [
            'email' => $request->email,
            'password' => $request->senha,
        ];

        if (!Auth::attempt($credenciais)) {
            return redirect('/frmlogin')->with('erro', 'Email e/ou senha inválidos!');
        }

        return redirect()->intended('/dashboard');
    }
}