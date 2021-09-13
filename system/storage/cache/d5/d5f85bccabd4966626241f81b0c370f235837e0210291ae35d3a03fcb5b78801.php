<?php

/* common/footer.twig */
class __TwigTemplate_228edf72b066bc5d60b6559d18bbe8e407c9b1a0625ad02c5058ff6929963d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer id=\"footer\">";
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "<br />";
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</footer></div>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <footer id="footer">{{ text_footer }}<br />{{ text_version }}</footer></div>*/
/* </body></html>*/
/* */
