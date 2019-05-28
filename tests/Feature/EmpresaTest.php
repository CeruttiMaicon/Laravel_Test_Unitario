<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Empresa;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EmpresaTest extends TestCase
{

    //Utilizar este recurso apaga o banco de dados ao final do teste
    // use RefreshDatabase;

    /** @test */
    public function autenticando_usuario_e_verificando_permissao_de_criar_empresa()
    {
        //Cria e loga o usuario
        $this->actingAs(factory('App\User')->create());

        //And a task object
        $empresa = factory('App\Empresa')->create();
        //When user submits post request to create task endpoint
        $this->post('empresa/create',$empresa->toArray());
        //It gets stored in the database
        $this->assertEquals(1, Empresa::all()->count());
    }
    
    /** @test */
    public function verifica_visualizacao_em_lista_dados_empresa_cadastrada()
    {
        //Cria e loga o usuario
        $this->actingAs(factory('App\User')->create());

        //Cria uma empresa com base no factoryes
        $empresa = factory('App\Empresa')->create();

        //Quando o usuário visita a página de empresas
        $response = $this->get('empresa/');
        
        //Ele faz a verificação se é possivel ver a empresa cadastrada
        $response->assertSee($empresa->nome_empresa);
    }

    /** @test */
    public function verifica_visualizacao_dados_empresa_cadastrada()
    {
        //Cria e loga o usuario
        $this->actingAs(factory('App\User')->create());

        //Cria uma empresa com base no factoryes
        $empresa = factory('App\Empresa')->create();

        //Quando o usuário visita a página de empresas
        $response = $this->get('empresa/'.$empresa->id);
        
        //Ele faz a verificação se é possivel ver a empresa cadastrada
        $response->assertSee($empresa->nome_empresa)->assertSee($empresa->email)->assertSee($empresa->endereco);
    }
}
