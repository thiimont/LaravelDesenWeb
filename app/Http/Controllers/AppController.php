<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;
use App\Models\Contato;
use Illuminate\Support\Facades\Hash;
use Session;

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
        if(!session()->has('usuario_id')){
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

    public function enviarcontato(Request $request){
        $msg = new Contato();

        $msg->nome = $request->nome;
        $msg->email = $request->email;
        $msg->assunto = $request->assunto;
        $msg->mensagem = $request->mensagem;

        $msg->save();

        return redirect('contato')->with('sucesso', 'Mensagem enviada com sucesso!');
    }
    
    public function produtos(){
        $produtos = Produto::all();

        return view('produtos', ['prods'=>$produtos]);
    }

    public function listaprodutos(){
        if(!session()->has('usuario_id')){
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        $produtos = Produto::all();

        return view('listaprodutos', ['prods'=>$produtos]);
    }

    public function frmeditproduto($id){
        $produto = Produto::findOrFail($id);
        if(!session()->has('usuario_id')){
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('frmeditproduto', ['prod'=>$produto]);
    }

    public function atualizarproduto(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $dados = [
            'nome' => $request->fnome,
            'preco' => $request->fpreco,
            'quantidade' => $request->fquantidade
        ];

        $produto->update($dados);

        return redirect('listaprodutos')->with('sucesso', 'Produto atualizado com sucesso!');
    }

    public function excluirproduto($id){
        $produto = Produto::findOrFail($id);

        $produto->delete();
        
        return redirect('listaprodutos')->with('sucesso', 'Produto excluído com sucesso!');
    }

    public function frmproduto(){
        if(!session()->has('usuario_id')){
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('frmproduto');
    }

    public function addproduto(Request $request){
        $prod = new Produto();

        $prod->nome = $request->nome;
        $prod->preco = $request->preco;
        $prod->quantidade = $request->quantidade;

        if($request->hasFile('imagem')){
            $path = $request->file('imagem')->store('imagens', 'public');
            $prod->imagem = $path;
        }

        $prod->save();

        return redirect('produtos');
    }

    public function frmusuario(){
        return view('frmusuario');
    }

    public function addusuario(Request $request){
        $usuario = new Usuario();

        $usuario->nome = $request->fnome;
        $usuario->email = $request->femail;
        $usuario->senha = Hash::make($request->fsenha);
        
        $usuario->save();

        return redirect('dashboard');
    }

    public function listausuarios(){
        if(!session()->has('usuario_id')){
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        $usuarios = Usuario::all();

        return view('listausuarios', ['users'=>$usuarios]);
    }

    public function frmeditusuario($id){
        $usuario = Usuario::findOrFail($id);
        if(!session()->has('usuario_id')){
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('frmeditusuario', ['user'=>$usuario]);
    }

    public function atualizarusuario(Request $request, $id){
        $usuario = Usuario::findOrFail($id);

        $dados = [
            'nome' => $request->fnome,
            'email' => $request->femail
        ];

        if(!empty($request->fsenha)){
            $dados['senha'] = Hash::make($request->fsenha);
        }

        $usuario->update($dados);

        return redirect('listausuarios')->with('sucesso', 'Usuário atualizado com sucesso!');
    }

    public function excluirusuario($id){
        $usuario = Usuario::findOrFail($id);

        $usuario->delete();
        
        return redirect('listausuarios')->with('sucesso', 'Usuário excluído com sucesso!');
    }

    public function frmlogin(){
        if(session()->has('usuario_id')){
            return view('dashboard');
        }

        return view('frmlogin');
    }

    public function dashboard(){
        if(!session()->has('usuario_id')){
            return redirect('/frmlogin')->with('erro', 'Você precisa estar autenticado para acessar esta página!');
        }

        return view('dashboard');
    }

    public function logout(){
        Session::flush();
        
        return redirect('/');
    }

    public function logar(Request $request){
        $user = Usuario::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->senha, $user->senha)){
            return redirect('/frmlogin')->with('erro', 'Email e/ou senha inválidos!');
        }

        Session::put('usuario_id', $user->id);
        Session::put('usuario_nome', $user->nome);

        return view('dashboard');
    }
}