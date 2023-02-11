<?php

namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

    private $clientes = [
    ['nome' => 'Ana', 'id' => 1],
    ['nome' => 'João', 'id' => 2],
    ['nome' => 'Aline', 'id' => 3],
    ['nome' => 'Ademir', 'id' => 4]
    ];

    public function __construct()
    {
        if (!isset($_SESSION['clientes']))
            $_SESSION['clientes'] = $this -> clientes;
    }

    /**
     * Display a listing of the resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = $_SESSION['clientes'];
        // Passar variaveis para as views com array associativo
        return view('clientes.index',[
            'clientes' => $clientes,
            'titulo' => 'Inicio e Todos os clientes'
        ]);

//        Maneira NOVA de chamar uma view
//        return view('clientes.index')
//            ->with('clientes', $clientes)
//            ->with('titulo','Todos os Clientes:');
//        Maneira antiga de chamar uma view
//        return view("clientes.index",compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = $_SESSION['clientes'];
        $id = end($clientes)['id'] +1;
        $nome = $request -> name;
        $dados = ["nome" => $nome, "id" => $id ];
        $clientes[] = $dados;
        $_SESSION['clientes'] = $clientes;
        return redirect()->route('clientes.index');

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = $_SESSION['clientes'];
        $index = $this->getIndex($id, $clientes);

        $cliente = $clientes[$index];
        return  view('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = $_SESSION['clientes'];
        $index = $this->getIndex($id, $clientes);

        $cliente = $clientes[$index];
        return view("clientes.edit", compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = $_SESSION['clientes'];
        $index = $this->getIndex($id, $clientes);

        $_SESSION['clientes'][$index]['nome'] =  $request -> name;

        return redirect()->route('clientes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = $_SESSION['clientes'];
        $index = $this->getIndex($id, $clientes);
        array_splice($clientes, $index, 1);
        $_SESSION['clientes'] = $clientes;
        return redirect()->route('clientes.index');

    }
    private function getIndex ($id, $clientes){
        $ids = array_column($clientes, "id");
        $index = array_search($id, $ids);
        return $index;
    }
}
