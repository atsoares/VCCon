<?php

namespace Sgpweb\Support\JasperPhp;

use JasperPHP\JasperPHP;
use Sgpweb\Domains\Pessoas\Contracts\PessoaContract;

class GerarRelatorio
{

    private $PessoaRepository;

    public function __construct(PessoaContract $PessoaRepository)
    {
        $this->PessoaRepository = $PessoaRepository;
    }

    public function gerarRelatorio()
    {
        /*$results = $this->PessoaRepository->all();
        $nomeCompleto = '';
        $cpf = '';

        foreach ($results as $pessoa){
            $nomeCompleto = $pessoa->nome_completo;
            $cpf = $pessoa->cpf;
        }*/

        $jasper = new JasperPHP();

        // Process a Jasper file to PDF and RTF (you can use directly the .jrxml)
        $jasper->process(
            app_path() . "/Domains/Pessoas/Reports/Pessoa/Pessoas.jrxml",
            false,
            array('pdf', 'rtf', 'xls', 'xlsx', 'docx', 'odt', 'ods', 'pptx', 'csv', 'html', 'xhtml', 'xml', 'jrprint'),
            array(),
            array(
                'driver' => 'postgres',
                'username' => 'homestead',
                'password' => 'secret',
                'host' => '127.0.0.1',
                'database' => 'sgpweb',
                'port' => '5432',
            )
        )->execute();

        // List the parameters from a Jasper file.
    }
}