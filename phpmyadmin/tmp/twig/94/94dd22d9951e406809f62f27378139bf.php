<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/privileges/index.twig */
class __TwigTemplate_62df3619d291659b51e827fa1f377c02 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        if (($context["is_superuser"] ?? null)) {
            // line 2
            yield "  <form id=\"usersForm\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
            yield "\">
    ";
            // line 3
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            yield "

    <div class=\"w-100\">
      <fieldset class=\"pma-fieldset\">
        <legend>
          ";
            // line 8
            yield PhpMyAdmin\Html\Generator::getIcon("b_usrcheck");
            yield "
          ";
            // line 9
            yield Twig\Extension\CoreExtension::sprintf(_gettext("Users having access to \"%s\""), ((((("<a href=\"" . ($context["database_url"] ?? null)) . PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null)], "&")) . "\">") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html")) . "</a>"));
            yield "
        </legend>

        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover w-auto\">
            <thead>
              <tr>
                <th></th>
                <th scope=\"col\">";
yield _gettext("User name");
            // line 17
            yield "</th>
                <th scope=\"col\">";
yield _gettext("Host name");
            // line 18
            yield "</th>
                <th scope=\"col\">";
yield _gettext("Type");
            // line 19
            yield "</th>
                <th scope=\"col\">";
yield _gettext("Privileges");
            // line 20
            yield "</th>
                <th scope=\"col\">";
yield _gettext("Grant");
            // line 21
            yield "</th>
                <th scope=\"col\" colspan=\"2\">";
yield _gettext("Action");
            // line 22
            yield "</th>
              </tr>
            </thead>

            <tbody>
              ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["privileges"] ?? null));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 28
                yield "                ";
                $context["privileges_amount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 28));
                // line 29
                yield "                <tr>
                  <td";
                // line 30
                if ((($context["privileges_amount"] ?? null) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["privileges_amount"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield ">
                    <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31), "html", null, true);
                yield "\" value=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 32) . "&amp;#27;") . CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 32)), "html", null, true);
                yield "\">
                  </td>
                  <td";
                // line 34
                if ((($context["privileges_amount"] ?? null) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["privileges_amount"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield ">
                    ";
                // line 35
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 35))) {
                    // line 36
                    yield "                      <span class=\"text-danger\">";
yield _gettext("Any");
                    yield "</span>
                    ";
                } else {
                    // line 38
                    yield "                      ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 38), "html", null, true);
                    yield "
                    ";
                }
                // line 40
                yield "                  </td>
                  <td";
                // line 41
                if ((($context["privileges_amount"] ?? null) > 1)) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["privileges_amount"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield ">
                    ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 42), "html", null, true);
                yield "
                  </td>
                  ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["priv"]) {
                    // line 45
                    yield "                    <td>
                      ";
                    // line 46
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 46) == "g")) {
                        // line 47
                        yield "                        ";
yield _gettext("global");
                        // line 48
                        yield "                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 48) == "d")) {
                        // line 49
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 49) == Twig\Extension\CoreExtension::replace(($context["db"] ?? null), ["_" => "\\_", "%" => "\\%"]))) {
                            // line 50
                            yield "                          ";
yield _gettext("database-specific");
                            // line 51
                            yield "                        ";
                        } else {
                            // line 52
                            yield "                          ";
yield _gettext("wildcard");
                            yield ": <code>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 52), "html", null, true);
                            yield "</code>
                        ";
                        }
                        // line 54
                        yield "                      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 54) == "r")) {
                        // line 55
                        yield "                        ";
yield _gettext("routine");
                        // line 56
                        yield "                      ";
                    }
                    // line 57
                    yield "                    </td>
                    <td>
                      <code>
                        ";
                    // line 60
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 60) == "r")) {
                        // line 61
                        yield "                          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 61), "html", null, true);
                        yield "
                          (";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 62), ", ")), "html", null, true);
                        yield ")
                        ";
                    } else {
                        // line 64
                        yield "                          ";
                        yield Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 64), ", ");
                        yield "
                        ";
                    }
                    // line 66
                    yield "                      </code>
                    </td>
                    <td>
                      ";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "has_grant", [], "any", false, false, false, 69)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    yield "
                    </td>
                    <td>
                      ";
                    // line 72
                    if (($context["is_grantuser"] ?? null)) {
                        // line 73
                        yield "                        <a class=\"edit_user_anchor\" href=\"";
                        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                         // line 74
$context["privilege"], "user", [], "any", false, false, false, 74), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                         // line 75
$context["privilege"], "host", [], "any", false, false, false, 75), "dbname" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 76
$context["priv"], "database", [], "any", false, false, false, 76) != "*")) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 76)) : (($context["db"] ?? null))), "tablename" => "", "routinename" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 78
$context["priv"], "routine", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 78)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 78)) : (""))]);
                        // line 79
                        yield "\">
                          ";
                        // line 80
                        yield PhpMyAdmin\Html\Generator::getIcon("b_usredit", _gettext("Edit privileges"));
                        yield "
                        </a>
                      ";
                    }
                    // line 83
                    yield "                    </td>
                    <td class=\"text-center\">
                      <a class=\"export_user_anchor ajax\" href=\"";
                    // line 85
                    yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                     // line 86
$context["privilege"], "user", [], "any", false, false, false, 86), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["privilege"], "host", [], "any", false, false, false, 87), "export" => true, "initial" => ""]);
                    // line 90
                    yield "\">
                        ";
                    // line 91
                    yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
                    yield "
                      </a>
                    </td>
                  </tr>
                    ";
                    // line 95
                    if ((($context["privileges_amount"] ?? null) > 1)) {
                        // line 96
                        yield "                      <tr class=\"noclick\">
                    ";
                    }
                    // line 98
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "              ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 100
                yield "                <tr>
                  <td colspan=\"7\">
                    ";
yield _gettext("No user found.");
                // line 103
                yield "                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "            </tbody>
          </table>
        </div>

        <div class=\"float-start\">
          <img class=\"selectallarrow\" src=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("arrow_" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
            yield "\" alt=\"";
yield _gettext("With selected:");
            // line 112
            yield "\" width=\"38\" height=\"22\">
          <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
yield _gettext("Check all");
            // line 113
            yield "\">
          <label for=\"usersForm_checkall\">";
yield _gettext("Check all");
            // line 114
            yield "</label>
          <em class=\"with-selected\">";
yield _gettext("With selected:");
            // line 115
            yield "</em>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
yield _gettext("Export");
            // line 116
            yield "\">
            ";
            // line 117
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
            yield "
          </button>
        </div>
      </fieldset>
    </div>
  </form>
";
        } else {
            // line 124
            yield "  ";
            yield $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view users."));
            yield "
";
        }
        // line 126
        yield "
";
        // line 127
        if (($context["is_createuser"] ?? null)) {
            // line 128
            yield "  <div class=\"row\">
    <div class=\"col-12\">
      <fieldset class=\"pma-fieldset\" id=\"fieldset_add_user\">
        <legend>";
yield _pgettext("Create new user", "New");
            // line 131
            yield "</legend>
        <a id=\"add_user_anchor\" href=\"";
            // line 132
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true, "dbname" =>             // line 134
($context["db"] ?? null)]);
            // line 135
            yield "\" rel=\"";
            yield PhpMyAdmin\Url::getCommon(["checkprivsdb" => ($context["db"] ?? null)]);
            yield "\">
          ";
            // line 136
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", _gettext("Add user account"));
            yield "
        </a>
      </fieldset>
    </div>
  </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/privileges/index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  391 => 136,  386 => 135,  384 => 134,  383 => 132,  380 => 131,  374 => 128,  372 => 127,  369 => 126,  363 => 124,  353 => 117,  350 => 116,  346 => 115,  342 => 114,  338 => 113,  334 => 112,  330 => 111,  323 => 106,  315 => 103,  310 => 100,  297 => 99,  291 => 98,  287 => 96,  285 => 95,  278 => 91,  275 => 90,  273 => 87,  272 => 86,  271 => 85,  267 => 83,  261 => 80,  258 => 79,  256 => 78,  255 => 76,  254 => 75,  253 => 74,  251 => 73,  249 => 72,  243 => 69,  238 => 66,  232 => 64,  227 => 62,  222 => 61,  220 => 60,  215 => 57,  212 => 56,  209 => 55,  206 => 54,  198 => 52,  195 => 51,  192 => 50,  189 => 49,  186 => 48,  183 => 47,  181 => 46,  178 => 45,  174 => 44,  169 => 42,  161 => 41,  158 => 40,  152 => 38,  146 => 36,  144 => 35,  136 => 34,  131 => 32,  128 => 31,  120 => 30,  117 => 29,  114 => 28,  96 => 27,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  57 => 9,  53 => 8,  45 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/privileges/index.twig", "C:\\Login_PHP\\phpmyadmin\\templates\\database\\privileges\\index.twig");
    }
}
