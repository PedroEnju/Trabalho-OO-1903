<?php

namespace MyCode;

class Sobre
{

    public function index()
    {
        $code = array(
            $this->sintese(),
            array(
                $this->primeiro(),
                $this->segundo(),
                $this->terceiro(),
                $this->quarto()
            )
        );
        return $code;
    }

    private function sintese()
    {
        $p = "Site é um sistema feito orientado a objetos utilizando componentes já existentes de uma framework chamada Symfony. Utilizando rotas como por exemplo /produto.";
        return $p;
    }

    private function primeiro()
    {
        $p = "O que é um framework?";
        $s = "Framework é um aglomerado de funções feitas que irão se repetir em praticamente todos os sistemas, ele normalmente utiliza padrões de projeto, como, por exemplo, Singleton. Feito para agilizar o trabalho dos desenvolvedores, retirando a necessidade de sempre ter que programar a mesma coisa.";
        return array($p, $s);
    } 

    private function segundo()
    {
        $p = "O que é padrão de projeto?";
        $s = "São formas de programar que alguns desenvolvedores criaram em consenso para ter um padrão nos sistemas, para evitar ter que estudar o padrão de programação de cada um.";
        return array($p, $s);
    }

    private function terceiro()
    {
        $p = "Quais as principais categorias de padrões de projetos?";
        $s = "Singleton, MVC, Facade, Routing, Business Rules, Builder, State, Observer";
        return array($p, $s);
    }

    private function quarto()
    {
        $p = "Qual o principal padrão de projeto utilizado nesta aplicação?";
        $s = "Routing";
        return array($p, $s);
    }

}
