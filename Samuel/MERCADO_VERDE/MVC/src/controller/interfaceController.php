<?php


namespace MVC\src\controller;


interface interfaceController
{
      // precisa de view são formularios

    function index(); //listar

    function view($id); //exibir usuario

    function edit($id); // editar algun user

    function create(); // criar novo usuario

    //não precisa de view
    // funções de salvar

    function store(); // salvaro o que o create criar

    function update($id); // atualiza o que o edit mandar

    function delete($id); //


}