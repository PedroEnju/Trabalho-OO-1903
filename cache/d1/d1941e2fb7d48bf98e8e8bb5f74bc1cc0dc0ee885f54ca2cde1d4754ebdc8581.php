<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_b6a0c06b7254410b902d48efe6ac157613d97d4068d5f3b73e84d9402abad8a9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Awesome APP</title>
    </head>
    <body>
        <h3>
            ";
        // line 8
        if (($context["code"] ?? null)) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
            echo "<br>
            ";
        }
        // line 11
        echo "        </h3>
            
        ";
        // line 13
        if (($context["codeArray"] ?? null)) {
            // line 14
            echo "            <ul>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["codeArray"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
                // line 16
                echo "                    <li>
                        ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ca"], 0, []), "html", null, true);
                echo "
                        ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["ca"], 1, [])) {
                    // line 19
                    echo "                            <ul>
                                ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ca"], 1, []), "html", null, true);
                    echo "
                            </ul>
                        ";
                }
                // line 23
                echo "                    </li><br>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </ul>
        ";
        }
        // line 27
        echo "    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  90 => 25,  83 => 23,  77 => 20,  74 => 19,  72 => 18,  68 => 17,  65 => 16,  61 => 15,  58 => 14,  56 => 13,  52 => 11,  46 => 9,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "C:\\Documentos\\PHP\\Site\\template\\base.html");
    }
}
