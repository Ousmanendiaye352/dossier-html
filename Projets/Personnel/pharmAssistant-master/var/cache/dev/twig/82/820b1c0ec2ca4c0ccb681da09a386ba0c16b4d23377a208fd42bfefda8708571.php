<?php

/* admin/nouveauachat.html.twig */
class __TwigTemplate_25e499b662fbbf5d12be50093aacc86eff86f4b2bc5677a0f7bf956f678e81eb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/nouveauachat.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/nouveauachat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/nouveauachat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nouveau achat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<!-- Font CSS (Via CDN) -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

<!-- Admin Forms CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-tools/admin-forms/css/admin-forms.css"), "html", null, true);
        echo "\">

<!-- Theme CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/skin/default_skin/css/theme.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 16
        echo "<!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">

        <!-- Start: Topbar-Dropdown -->
        <div id=\"topbar-dropmenu\" class=\"alt\">
            <div class=\"topbar-menu row\">
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-primary light\">
                        <span class=\"glyphicon glyphicon-inbox text-muted\"></span>
                        <span class=\"metro-title\">Messages</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-info light\">
                        <span class=\"glyphicon glyphicon-user text-muted\"></span>
                        <span class=\"metro-title\">Users</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-success light\">
                        <span class=\"glyphicon glyphicon-headphones text-muted\"></span>
                        <span class=\"metro-title\">Support</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-system light\">
                        <span class=\"glyphicon glyphicon-facetime-video text-muted\"></span>
                        <span class=\"metro-title\">Videos</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-warning light\">
                        <span class=\"fa fa-gears text-muted\"></span>
                        <span class=\"metro-title\">Settings</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-alert light\">
                        <span class=\"glyphicon glyphicon-picture text-muted\"></span>
                        <span class=\"metro-title\">Pictures</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End: Topbar-Dropdown -->

        <!-- Begin: Content -->
        <section id=\"content\" class=\"table-layout animated fadeIn\">

            <!-- begin: .tray-center -->
            <div class=\"tray tray-center\">

                <!-- create new order panel -->
                <div class=\"panel mb25 mt5\">
                    <div class=\"panel-heading\">
                        <span class=\"panel-title hidden-xs\"> Ajouter un achat</span>
                        <ul class=\"nav panel-tabs-border panel-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab1_1\" data-toggle=\"tab\">Général</a>
                            </li>
                            <li>
                                <a href=\"#tab1_2\" data-toggle=\"tab\">Déscription</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"panel-body p20 pb10\">
                        <div class=\"tab-content pn br-n admin-form\">
                            <div id=\"tab1_1\" class=\"tab-pane active\">
                                <div class=\"section row mbn\">
                                    <div class=\"col-md-4\">
                                        <div class=\"fileupload fileupload-new admin-form\" data-provides=\"fileupload\">
                                            <div class=\"fileupload-preview thumbnail mb20\">
                                                <img data-src=\"holder.js/100%x140\" alt=\"holder\">
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-7 pr5\">
                                                    <input type=\"text\" name=\"name2\" id=\"name2\" class=\"text-center event-name gui-input br-light bg-light\" placeholder=\"Img Keywords\">
                                                    <label for=\"name2\" class=\"field-icon\"></label>
                                                </div>
                                                <div class=\"col-xs-5\">
                                                    <span class=\"button btn-system btn-file btn-block\">
                                                        <span class=\"fileupload-new\">Select</span>
                                                        <span class=\"fileupload-exists\">Change</span>
                                                        <input type=\"file\">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-8 pl15\">
                                        <div class=\"section mb10\">
                                            <label for=\"name2\" class=\"field prepend-icon\">
                                                <input type=\"text\" name=\"name2\" id=\"name2\" class=\"event-name gui-input br-light light\" placeholder=\"Product Title\">
                                                <label for=\"name2\" class=\"field-icon\">
                                                    <i class=\"fa fa-tag\"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <div class=\"section mb10\">
                                            <label class=\"field prepend-icon\">
                                                <textarea style=\"height: 160px;\" class=\"gui-textarea br-light bg-light\" id=\"comment\" name=\"comment\" placeholder=\"Product Description\"></textarea>
                                                <label for=\"comment\" class=\"field-icon\">
                                                    <i class=\"fa fa-comments\"></i>
                                                </label>
                                                <span class=\"input-footer hidden\">
                                                    <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"tab1_2\" class=\"tab-pane\">
                                <div class=\"section row\">
                                    <div class=\"col-md-6\">
                                        <label for=\"product-category\" class=\"field select\">
                                            <select id=\"product-category\" name=\"product-category\">
                                                <option value=\"0\" selected=\"selected\">Product Category...</option>
                                                <option value=\"1\">Software</option>
                                                <option value=\"2\">Computers</option>
                                                <option value=\"3\">Gadgets</option>
                                                <option value=\"4\">Clothing</option>
                                            </select>
                                            <i class=\"arrow double\"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-6\">
                                        <label class=\"field select\">
                                            <select id=\"product-status\" name=\"product-status\">
                                                <option value=\"0\" selected=\"selected\">Product Availability</option>
                                                <option value=\"1\">Available</option>
                                                <option value=\"2\">Unavailable</option>
                                                <option value=\"3\">Discontinued</option>
                                                <option value=\"4\">Out of Stock</option>
                                            </select>
                                            <i class=\"arrow double\"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end section row section -->

                                <div class=\"section row\">
                                    <div class=\"col-md-4\">
                                        <label for=\"product-price\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"product-price\" id=\"product-price\" class=\"gui-input\" placeholder=\"Product Price...\">
                                            <label for=\"product-price\" class=\"field-icon\">
                                                <i class=\"fa fa-usd\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-4\">
                                        <label for=\"product-vendor\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"product-vendor\" id=\"product-vendor\" class=\"gui-input\" placeholder=\"Vendor Source...\">
                                            <label for=\"product-vendor\" class=\"field-icon\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-4\">
                                        <label for=\"product-sku\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"product-sku\" id=\"product-sku\" class=\"gui-input\" placeholder=\"Product SKU...\">
                                            <label for=\"product-sku\" class=\"field-icon\">
                                                <i class=\"fa fa-barcode\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end section row section -->

                                <div class=\"section\">
                                    <input id=\"tagsinput\" type=\"text\" value=\"Software, Adobe, Photoshop, Editor, Commercial\">
                                </div>
                                <!-- end section row section -->

                                <hr class=\"short alt\">

                                <div class=\"section row mbn\">
                                    <div class=\"col-sm-8\">
                                        <label class=\"field option mt10\">
                                            <input type=\"checkbox\" name=\"info\" checked>
                                            <span class=\"checkbox\"></span>Save Customer
                                            <em class=\"small-text text-muted\">- A Random Unique ID will be generated</em>
                                        </label>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <p class=\"text-right\">
                                            <button class=\"btn btn-primary\" type=\"button\">Save Order</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- end section -->
                            </div>
                            <div id=\"tab1_3\" class=\"tab-pane\">

                                <div class=\"section\">
                                    <label for=\"lastaddr\" class=\"field prepend-icon\">
                                        <input type=\"text\" name=\"lastaddr\" id=\"lastaddr\" class=\"gui-input\" placeholder=\"Street address 2\">
                                        <label for=\"lastaddr\" class=\"field-icon\">
                                            <i class=\"fa fa-map-marker\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section\">
                                    <label class=\"field select\">
                                        <select id=\"location\" name=\"location\">
                                            <option value=\"\">Select country...</option>
                                            <option value=\"AL\">Albania</option>
                                            <option value=\"DZ\">Algeria</option>
                                            <option value=\"AD\">Andorra</option>
                                            <option value=\"AO\">Angola</option>
                                            <option value=\"AI\">Anguilla</option>
                                            <option value=\"AG\">Antigua and Barbuda</option>
                                            <option value=\"AR\">Argentina</option>
                                            <option value=\"AM\">Armenia</option>
                                            <option value=\"AW\">Aruba</option>
                                            <option value=\"AU\">Australia</option>
                                            <option value=\"AT\">Austria</option>
                                            <option value=\"AZ\">Azerbaijan Republic</option>
                                            <option value=\"BS\">Bahamas</option>
                                            <option value=\"BH\">Bahrain</option>
                                            <option value=\"BB\">Barbados</option>
                                            <option value=\"BE\">Belgium</option>
                                            <option value=\"BZ\">Belize</option>
                                            <option value=\"BJ\">Benin</option>
                                            <option value=\"BM\">Bermuda</option>
                                            <option value=\"BT\">Bhutan</option>
                                            <option value=\"BO\">Bolivia</option>
                                            <option value=\"BA\">Bosnia and Herzegovina</option>
                                            <option value=\"BW\">Botswana</option>
                                            <option value=\"BR\">Brazil</option>
                                            <option value=\"BN\">Brunei</option>
                                            <option value=\"BG\">Bulgaria</option>
                                            <option value=\"BF\">Burkina Faso</option>
                                            <option value=\"BI\">Burundi</option>
                                            <option value=\"KH\">Cambodia</option>
                                            <option value=\"CA\">Canada</option>
                                            <option value=\"CV\">Cape Verde</option>
                                            <option value=\"KY\">Cayman Islands</option>
                                            <option value=\"TD\">Chad</option>
                                            <option value=\"CL\">Chile</option>
                                            <option value=\"C2\">China Worldwide</option>
                                            <option value=\"CO\">Colombia</option>
                                            <option value=\"KM\">Comoros</option>
                                            <option value=\"CK\">Cook Islands</option>
                                            <option value=\"CR\">Costa Rica</option>
                                            <option value=\"HR\">Croatia</option>
                                            <option value=\"CY\">Cyprus</option>
                                            <option value=\"CZ\">Czech Republic</option>
                                            <option value=\"CD\">Democratic Republic of the Congo</option>
                                            <option value=\"DK\">Denmark</option>
                                            <option value=\"DJ\">Djibouti</option>
                                            <option value=\"DM\">Dominica</option>
                                            <option value=\"DO\">Dominican Republic</option>
                                            <option value=\"EC\">Ecuador</option>
                                            <option value=\"EG\">Egypt</option>
                                            <option value=\"SV\">El Salvador</option>
                                            <option value=\"ER\">Eritrea</option>
                                            <option value=\"EE\">Estonia</option>
                                            <option value=\"ET\">Ethiopia</option>
                                            <option value=\"FK\">Falkland Islands</option>
                                            <option value=\"FO\">Faroe Islands</option>
                                            <option value=\"FJ\">Fiji</option>
                                            <option value=\"FI\">Finland</option>
                                            <option value=\"FR\">France</option>
                                            <option value=\"GF\">French Guiana</option>
                                            <option value=\"PF\">French Polynesia</option>
                                            <option value=\"GA\">Gabon Republic</option>
                                            <option value=\"GM\">Gambia</option>
                                            <option value=\"GE\">Georgia</option>
                                            <option value=\"DE\">Germany</option>
                                            <option value=\"GI\">Gibraltar</option>
                                            <option value=\"GR\">Greece</option>
                                            <option value=\"GL\">Greenland</option>
                                            <option value=\"GD\">Grenada</option>
                                            <option value=\"GP\">Guadeloupe</option>
                                            <option value=\"GT\">Guatemala</option>
                                            <option value=\"GN\">Guinea</option>
                                            <option value=\"GW\">Guinea Bissau</option>
                                            <option value=\"GY\">Guyana</option>
                                            <option value=\"HN\">Honduras</option>
                                            <option value=\"HK\">Hong Kong</option>
                                            <option value=\"HU\">Hungary</option>
                                            <option value=\"IS\">Iceland</option>
                                            <option value=\"IN\">India</option>
                                            <option value=\"ID\">Indonesia</option>
                                            <option value=\"IE\">Ireland</option>
                                            <option value=\"IL\">Israel</option>
                                            <option value=\"IT\">Italy</option>
                                            <option value=\"JM\">Jamaica</option>
                                            <option value=\"JP\">Japan</option>
                                            <option value=\"JO\">Jordan</option>
                                            <option value=\"KZ\">Kazakhstan</option>
                                            <option value=\"KE\">Kenya</option>
                                            <option value=\"KI\">Kiribati</option>
                                            <option value=\"KW\">Kuwait</option>
                                            <option value=\"KG\">Kyrgyzstan</option>
                                            <option value=\"LA\">Laos</option>
                                            <option value=\"LV\">Latvia</option>
                                            <option value=\"LS\">Lesotho</option>
                                            <option value=\"LI\">Liechtenstein</option>
                                            <option value=\"LT\">Lithuania</option>
                                            <option value=\"LU\">Luxembourg</option>
                                            <option value=\"MG\">Madagascar</option>
                                            <option value=\"MW\">Malawi</option>
                                            <option value=\"MY\">Malaysia</option>
                                            <option value=\"MV\">Maldives</option>
                                            <option value=\"ML\">Mali</option>
                                            <option value=\"MT\">Malta</option>
                                            <option value=\"MH\">Marshall Islands</option>
                                            <option value=\"MQ\">Martinique</option>
                                            <option value=\"MR\">Mauritania</option>
                                            <option value=\"MU\">Mauritius</option>
                                            <option value=\"YT\">Mayotte</option>
                                            <option value=\"MX\">Mexico</option>
                                            <option value=\"FM\">Micronesia</option>
                                            <option value=\"MN\">Mongolia</option>
                                            <option value=\"MS\">Montserrat</option>
                                            <option value=\"MA\">Morocco</option>
                                            <option value=\"MZ\">Mozambique</option>
                                            <option value=\"NA\">Namibia</option>
                                            <option value=\"NR\">Nauru</option>
                                            <option value=\"NP\">Nepal</option>
                                            <option value=\"NL\">Netherlands</option>
                                            <option value=\"AN\">Netherlands Antilles</option>
                                            <option value=\"NC\">New Caledonia</option>
                                            <option value=\"NZ\">New Zealand</option>
                                            <option value=\"NI\">Nicaragua</option>
                                            <option value=\"NE\">Niger</option>
                                            <option value=\"NU\">Niue</option>
                                            <option value=\"NF\">Norfolk Island</option>
                                            <option value=\"NO\">Norway</option>
                                            <option value=\"OM\">Oman</option>
                                            <option value=\"PW\">Palau</option>
                                            <option value=\"PA\">Panama</option>
                                            <option value=\"PG\">Papua New Guinea</option>
                                            <option value=\"PE\">Peru</option>
                                            <option value=\"PH\">Philippines</option>
                                            <option value=\"PN\">Pitcairn Islands</option>
                                            <option value=\"PL\">Poland</option>
                                            <option value=\"PT\">Portugal</option>
                                            <option value=\"QA\">Qatar</option>
                                            <option value=\"CG\">Republic of the Congo</option>
                                            <option value=\"RE\">Reunion</option>
                                            <option value=\"RO\">Romania</option>
                                            <option value=\"RU\">Russia</option>
                                            <option value=\"RW\">Rwanda</option>
                                            <option value=\"KN\">Saint Kitts and Nevis Anguilla</option>
                                            <option value=\"PM\">Saint Pierre and Miquelon</option>
                                            <option value=\"VC\">Saint Vincent and Grenadines</option>
                                            <option value=\"WS\">Samoa</option>
                                            <option value=\"SM\">San Marino</option>
                                            <option value=\"ST\">São Tomé and Príncipe</option>
                                            <option value=\"SA\">Saudi Arabia</option>
                                            <option value=\"SN\">Senegal</option>
                                            <option value=\"RS\">Serbia</option>
                                            <option value=\"SC\">Seychelles</option>
                                            <option value=\"SL\">Sierra Leone</option>
                                            <option value=\"SG\">Singapore</option>
                                            <option value=\"SK\">Slovakia</option>
                                            <option value=\"SI\">Slovenia</option>
                                            <option value=\"SB\">Solomon Islands</option>
                                            <option value=\"SO\">Somalia</option>
                                            <option value=\"ZA\">South Africa</option>
                                            <option value=\"KR\">South Korea</option>
                                            <option value=\"ES\">Spain</option>
                                            <option value=\"LK\">Sri Lanka</option>
                                            <option value=\"SH\">St. Helena</option>
                                            <option value=\"LC\">St. Lucia</option>
                                            <option value=\"SR\">Suriname</option>
                                            <option value=\"SJ\">Svalbard and Jan Mayen Islands</option>
                                            <option value=\"SZ\">Swaziland</option>
                                            <option value=\"SE\">Sweden</option>
                                            <option value=\"CH\">Switzerland</option>
                                            <option value=\"TW\">Taiwan</option>
                                            <option value=\"TJ\">Tajikistan</option>
                                            <option value=\"TZ\">Tanzania</option>
                                            <option value=\"TH\">Thailand</option>
                                            <option value=\"TG\">Togo</option>
                                            <option value=\"TO\">Tonga</option>
                                            <option value=\"TT\">Trinidad and Tobago</option>
                                            <option value=\"TN\">Tunisia</option>
                                            <option value=\"TR\">Turkey</option>
                                            <option value=\"TM\">Turkmenistan</option>
                                            <option value=\"TC\">Turks and Caicos Islands</option>
                                            <option value=\"TV\">Tuvalu</option>
                                            <option value=\"UG\">Uganda</option>
                                            <option value=\"UA\">Ukraine</option>
                                            <option value=\"AE\">United Arab Emirates</option>
                                            <option value=\"GB\">United Kingdom</option>
                                            <option value=\"US\">United States</option>
                                            <option value=\"UY\">Uruguay</option>
                                            <option value=\"VU\">Vanuatu</option>
                                            <option value=\"VA\">Vatican City State</option>
                                            <option value=\"VE\">Venezuela</option>
                                            <option value=\"VN\">Vietnam</option>
                                            <option value=\"VG\">Virgin Islands (British)</option>
                                            <option value=\"WF\">Wallis and Futuna Islands</option>
                                            <option value=\"YE\">Yemen</option>
                                            <option value=\"ZM\">Zambia</option>
                                        </select>
                                        <i class=\"arrow double\"></i>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section row\">
                                    <div class=\"col-md-3\">
                                        <label for=\"zip\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"zip\" id=\"zip\" class=\"gui-input\" placeholder=\"Zip\">
                                            <label for=\"zip\" class=\"field-icon\">
                                                <i class=\"fa fa-certificate\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-4\">
                                        <label for=\"city\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"city\" id=\"city\" class=\"gui-input\" placeholder=\"City\">
                                            <label for=\"city\" class=\"field-icon\">
                                                <i class=\"fa fa-building-o\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-5\">
                                        <label for=\"states\" class=\"field select\">
                                            <select id=\"states\" name=\"states\">
                                                <option value=\"\">Choose state</option>
                                                <option value=\"AL\">Alabama</option>
                                                <option value=\"AK\">Alaska</option>
                                                <option value=\"AZ\">Arizona</option>
                                                <option value=\"AR\">Arkansas</option>
                                                <option value=\"CA\">California</option>
                                                <option value=\"CO\">Colorado</option>
                                                <option value=\"CT\">Connecticut</option>
                                                <option value=\"DE\">Delaware</option>
                                                <option value=\"DC\">District Of Columbia</option>
                                                <option value=\"FL\">Florida</option>
                                                <option value=\"GA\">Georgia</option>
                                                <option value=\"HI\">Hawaii</option>
                                                <option value=\"ID\">Idaho</option>
                                                <option value=\"IL\">Illinois</option>
                                                <option value=\"IN\">Indiana</option>
                                                <option value=\"IA\">Iowa</option>
                                                <option value=\"KS\">Kansas</option>
                                                <option value=\"KY\">Kentucky</option>
                                                <option value=\"LA\">Louisiana</option>
                                                <option value=\"ME\">Maine</option>
                                                <option value=\"MD\">Maryland</option>
                                                <option value=\"MA\">Massachusetts</option>
                                                <option value=\"MI\">Michigan</option>
                                                <option value=\"MN\">Minnesota</option>
                                                <option value=\"MS\">Mississippi</option>
                                                <option value=\"MO\">Missouri</option>
                                                <option value=\"MT\">Montana</option>
                                                <option value=\"NE\">Nebraska</option>
                                                <option value=\"NV\">Nevada</option>
                                                <option value=\"NH\">New Hampshire</option>
                                                <option value=\"NJ\">New Jersey</option>
                                                <option value=\"NM\">New Mexico</option>
                                                <option value=\"NY\">New York</option>
                                                <option value=\"NC\">North Carolina</option>
                                                <option value=\"ND\">North Dakota</option>
                                                <option value=\"OH\">Ohio</option>
                                                <option value=\"OK\">Oklahoma</option>
                                                <option value=\"OR\">Oregon</option>
                                                <option value=\"PA\">Pennsylvania</option>
                                                <option value=\"RI\">Rhode Island</option>
                                                <option value=\"SC\">South Carolina</option>
                                                <option value=\"SD\">South Dakota</option>
                                                <option value=\"TN\">Tennessee</option>
                                                <option value=\"TX\">Texas</option>
                                                <option value=\"UT\">Utah</option>
                                                <option value=\"VT\">Vermont</option>
                                                <option value=\"VA\">Virginia</option>
                                                <option value=\"WA\">Washington</option>
                                                <option value=\"WV\">West Virginia</option>
                                                <option value=\"WI\">Wisconsin</option>
                                                <option value=\"WY\">Wyoming</option>
                                            </select>
                                            <i class=\"arrow double\"></i>
                                        </label>
                                    </div>
                                    <!-- end .col8 section -->
                                </div>
                                <!-- end section row section -->

                                <div class=\"section row mbn\">
                                    <div class=\"col-sm-8\">
                                        <label class=\"field option mt10\">
                                            <input type=\"checkbox\" name=\"info\" checked>
                                            <span class=\"checkbox\"></span>Save Customer
                                            <em class=\"small-text text-muted\">- A Random Unique ID will be generated</em>
                                        </label>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <p class=\"text-right\">
                                            <button class=\"btn btn-primary\" type=\"button\">Save Order</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- end section -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- recent orders table -->
                <div class=\"panel\">
                    <div class=\"panel-menu p12 admin-form theme-primary\">
                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <label class=\"field select\">
                                    <select id=\"filter-category\" name=\"filter-category\">
                                        <option value=\"0\">Filter by Category</option>
                                        <option value=\"1\">Smart Phones</option>
                                        <option value=\"2\">Smart Watches</option>
                                        <option value=\"3\">Notebooks</option>
                                        <option value=\"4\">Desktops</option>
                                        <option value=\"5\">Music Players</option>
                                    </select>
                                    <i class=\"arrow\"></i>
                                </label>
                            </div>
                            <div class=\"col-md-5\">
                                <label class=\"field select\">
                                    <select id=\"filter-status\" name=\"filter-status\">
                                        <option value=\"0\">Filter by Status</option>
                                        <option value=\"1\">Active</option>
                                        <option value=\"2\">Inactive</option>
                                        <option value=\"3\">Low Stock</option>
                                        <option value=\"4\">Out of Stock</option>
                                    </select>
                                    <i class=\"arrow\"></i>
                                </label>
                            </div>
                            <div class=\"col-md-2\">
                                <label class=\"field select\">
                                    <select id=\"bulk-action\" name=\"bulk-action\">
                                        <option value=\"0\">Actions</option>
                                        <option value=\"1\">Edit</option>
                                        <option value=\"2\">Delete</option>
                                        <option value=\"3\">Active</option>
                                        <option value=\"4\">Inactive</option>
                                    </select>
                                    <i class=\"arrow double\"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-body pn\">
                        <div class=\"table-responsive\">
                            <table class=\"table admin-form theme-warning tc-checkbox-1 fs13\">
                                <thead>
                                    <tr class=\"bg-light\">
                                        <th class=\"text-center\">Select</th>
                                        <th class=\"\">Image</th>
                                        <th class=\"\">Product Title</th>
                                        <th class=\"\">SKU</th>
                                        <th class=\"\">Price</th>
                                        <th class=\"\">Stock</th>
                                        <th class=\"text-right\">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stock/products/thumb_1.jpg"), "html", null, true);
        echo "\">
                                        </td>
                                        <td class=\"\">Apple Ipod 4G - Silver</td>
                                        <td class=\"\">#21362</td>
                                        <td class=\"\">\$215</td>
                                        <td class=\"\">1,400</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stock/products/thumb_2.jpg"), "html", null, true);
        echo "\">
                                        </td>
                                        <td class=\"\">Apple Smart Watch - 1G</td>
                                        <td class=\"\">#15262</td>
                                        <td class=\"\">\$455</td>
                                        <td class=\"\">2,100</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stock/products/thumb_6.jpg"), "html", null, true);
        echo "\">
                                        </td>
                                        <td class=\"\">Apple Macbook 4th Gen - Silver</td>
                                        <td class=\"\">#66362</td>
                                        <td class=\"\">\$1699</td>
                                        <td class=\"\">6,100</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stock/products/thumb_7.jpg"), "html", null, true);
        echo "\">
                                        </td>
                                        <td class=\"\">Apple Iphone 16GB - Silver</td>
                                        <td class=\"\">#51362</td>
                                        <td class=\"\">\$1299</td>
                                        <td class=\"\">5,200</td>
                                        <td clas  s=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stock/products/thumb_3.jpg"), "html", null, true);
        echo "\">
                                        </td>
                                        <td class=\"\">Apple Ipod Nano 2G - Silver</td>
                                        <td class=\"\">#4132</td>
                                        <td class=\"\">\$995</td>
                                        <td class=\"\">11,000</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stock/products/thumb_4.jpg"), "html", null, true);
        echo "\">
                                        </td>
                                        <td class=\"\">Apple Macbook 3rd Gen - Silver</td>
                                        <td class=\"\">#21362</td>
                                        <td class=\"\">\$1,150</td>
                                        <td class=\"\">4,300</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end: .tray-center -->

            <!-- begin: .tray-right -->
            <aside class=\"tray tray-right tray290\" data-tray-height=\"match\">

                <!-- menu quick links -->
                <div class=\"admin-form\">

                    <h4> Filter Products</h4>

                    <hr class=\"short\">

                    <div class=\"section mb15\">
                        <label for=\"order-id\" class=\"field prepend-icon\">
                            <input type=\"text\" name=\"order-id\" id=\"order-id\" class=\"gui-input\" placeholder=\"Product SKU #\">
                            <label for=\"order-id\" class=\"field-icon\">
                                <i class=\"fa fa-tag\"></i>
                            </label>
                        </label>
                    </div>

                    <h5><small>Price Range(\$)</small></h5>
                    <div class=\"section row mb15\">
                        <div class=\"col-md-6\">
                            <label for=\"price1\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"price1\" id=\"price1\" class=\"gui-input\" placeholder=\"0\">
                                <label for=\"price1\" class=\"field-icon\">
                                    <i class=\"fa fa-usd\"></i>
                                </label>
                            </label>
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"price2\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"price2\" id=\"price2\" class=\"gui-input\" placeholder=\"1000\">
                                <label for=\"price2\" class=\"field-icon\">
                                    <i class=\"fa fa-usd\"></i>
                                </label>
                            </label>
                        </div>
                    </div>

                    <h5><small>Sales Date</small></h5>
                    <div class=\"section row\">
                        <div class=\"col-md-6\">
                            <label for=\"date1\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"date1\" id=\"date1\" class=\"gui-input\" placeholder=\"01/01/15\">
                                <label for=\"date1\" class=\"field-icon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </label>
                            </label>
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"date2\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"date2\" id=\"date2\" class=\"gui-input\" placeholder=\"01/31/15\">
                                <label for=\"date2\" class=\"field-icon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </label>
                            </label>
                        </div>
                    </div>

                    <h5><small>Search Categories</small></h5>
                    <div class=\"section mb15\">
                        <label class=\"field select\">
                            <select id=\"filter-categories\" name=\"filter-categories\">
                                <option value=\"0\" selected=\"selected\">Filter by Categories</option>
                                <option value=\"1\">Electronics</option>
                                <option value=\"2\">Software</option>
                            </select>
                            <i class=\"arrow double\"></i>
                        </label>
                    </div>

                    <h5><small>Search Customers</small></h5>
                    <div class=\"section\">
                        <label class=\"field select\">
                            <select id=\"filter-customers\" name=\"filter-customers\">
                                <option value=\"0\" selected=\"selected\">Filter by Vendor</option>
                                <option value=\"1\">Michael</option>
                                <option value=\"2\">David</option>
                                <option value=\"3\">Sara</option>
                                <option value=\"4\">Tasha</option>
                            </select>
                            <i class=\"arrow double\"></i>
                        </label>
                    </div>

                    <hr class=\"short\">

                    <div class=\"section\">
                        <button class=\"btn btn-default btn-sm ph25\" type=\"button\">Search</button>
                        <label class=\"field option ml15\">
                            <input type=\"checkbox\" name=\"info\">
                            <span class=\"checkbox\"></span>
                            <span class=\"text-muted\">Save Search</span>
                        </label>
                    </div>
                </div>
            </aside>
            <!-- end: .tray-right -->
        </section>
        <!-- End: Content -->
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 962
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 963
        echo "<!-- jQuery -->
<script src=\"";
        // line 964
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 965
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery_ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

<!-- FileUpload JS -->
<script src=\"";
        // line 968
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/fileupload/fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 969
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/holder/holder.min.js"), "html", null, true);
        echo "\"></script>

<!-- Tagmanager JS -->
<script src=\"";
        // line 972
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/plugins/tagsinput/tagsinput.min.js"), "html", null, true);
        echo "\"></script>

<!-- Theme Javascript -->
<script src=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/utility/utility.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 976
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core    
        Core.init();

        // Init Demo JS  
        Demo.init();

        // select list dropdowns - placeholder like creation
        var selectList = \$('.admin-form select');
        selectList.each(function(i, e) {
            \$(e).on('change', function() {
                if (\$(e).val() == \"0\") \$(e).addClass(\"empty\");
                else \$(e).removeClass(\"empty\")
            });
        });
        selectList.each(function(i, e) {
            \$(e).change();
        });
        // Init TagsInput plugin
        \$(\"input#tagsinput\").tagsinput({
            tagClass: function(item) {
                return 'label bg-primary light';
            }
        });
    });
</script>
<!-- END: PAGE SCRIPTS -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/nouveauachat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1124 => 977,  1120 => 976,  1116 => 975,  1110 => 972,  1104 => 969,  1100 => 968,  1094 => 965,  1090 => 964,  1087 => 963,  1078 => 962,  922 => 815,  876 => 772,  830 => 729,  784 => 686,  738 => 643,  692 => 600,  106 => 16,  97 => 15,  85 => 12,  79 => 9,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau achat{% endblock %}

{% block stylesheets %}<!-- Font CSS (Via CDN) -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

<!-- Admin Forms CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/admin-tools/admin-forms/css/admin-forms.css')}}\">

<!-- Theme CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/skin/default_skin/css/theme.css')}}\">
{% endblock %}

{% block contenu %}
<!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">

        <!-- Start: Topbar-Dropdown -->
        <div id=\"topbar-dropmenu\" class=\"alt\">
            <div class=\"topbar-menu row\">
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-primary light\">
                        <span class=\"glyphicon glyphicon-inbox text-muted\"></span>
                        <span class=\"metro-title\">Messages</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-info light\">
                        <span class=\"glyphicon glyphicon-user text-muted\"></span>
                        <span class=\"metro-title\">Users</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-success light\">
                        <span class=\"glyphicon glyphicon-headphones text-muted\"></span>
                        <span class=\"metro-title\">Support</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-system light\">
                        <span class=\"glyphicon glyphicon-facetime-video text-muted\"></span>
                        <span class=\"metro-title\">Videos</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-warning light\">
                        <span class=\"fa fa-gears text-muted\"></span>
                        <span class=\"metro-title\">Settings</span>
                    </a>
                </div>
                <div class=\"col-xs-4 col-sm-2\">
                    <a href=\"#\" class=\"metro-tile bg-alert light\">
                        <span class=\"glyphicon glyphicon-picture text-muted\"></span>
                        <span class=\"metro-title\">Pictures</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End: Topbar-Dropdown -->

        <!-- Begin: Content -->
        <section id=\"content\" class=\"table-layout animated fadeIn\">

            <!-- begin: .tray-center -->
            <div class=\"tray tray-center\">

                <!-- create new order panel -->
                <div class=\"panel mb25 mt5\">
                    <div class=\"panel-heading\">
                        <span class=\"panel-title hidden-xs\"> Ajouter un achat</span>
                        <ul class=\"nav panel-tabs-border panel-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab1_1\" data-toggle=\"tab\">Général</a>
                            </li>
                            <li>
                                <a href=\"#tab1_2\" data-toggle=\"tab\">Déscription</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"panel-body p20 pb10\">
                        <div class=\"tab-content pn br-n admin-form\">
                            <div id=\"tab1_1\" class=\"tab-pane active\">
                                <div class=\"section row mbn\">
                                    <div class=\"col-md-4\">
                                        <div class=\"fileupload fileupload-new admin-form\" data-provides=\"fileupload\">
                                            <div class=\"fileupload-preview thumbnail mb20\">
                                                <img data-src=\"holder.js/100%x140\" alt=\"holder\">
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-xs-7 pr5\">
                                                    <input type=\"text\" name=\"name2\" id=\"name2\" class=\"text-center event-name gui-input br-light bg-light\" placeholder=\"Img Keywords\">
                                                    <label for=\"name2\" class=\"field-icon\"></label>
                                                </div>
                                                <div class=\"col-xs-5\">
                                                    <span class=\"button btn-system btn-file btn-block\">
                                                        <span class=\"fileupload-new\">Select</span>
                                                        <span class=\"fileupload-exists\">Change</span>
                                                        <input type=\"file\">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-8 pl15\">
                                        <div class=\"section mb10\">
                                            <label for=\"name2\" class=\"field prepend-icon\">
                                                <input type=\"text\" name=\"name2\" id=\"name2\" class=\"event-name gui-input br-light light\" placeholder=\"Product Title\">
                                                <label for=\"name2\" class=\"field-icon\">
                                                    <i class=\"fa fa-tag\"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <div class=\"section mb10\">
                                            <label class=\"field prepend-icon\">
                                                <textarea style=\"height: 160px;\" class=\"gui-textarea br-light bg-light\" id=\"comment\" name=\"comment\" placeholder=\"Product Description\"></textarea>
                                                <label for=\"comment\" class=\"field-icon\">
                                                    <i class=\"fa fa-comments\"></i>
                                                </label>
                                                <span class=\"input-footer hidden\">
                                                    <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"tab1_2\" class=\"tab-pane\">
                                <div class=\"section row\">
                                    <div class=\"col-md-6\">
                                        <label for=\"product-category\" class=\"field select\">
                                            <select id=\"product-category\" name=\"product-category\">
                                                <option value=\"0\" selected=\"selected\">Product Category...</option>
                                                <option value=\"1\">Software</option>
                                                <option value=\"2\">Computers</option>
                                                <option value=\"3\">Gadgets</option>
                                                <option value=\"4\">Clothing</option>
                                            </select>
                                            <i class=\"arrow double\"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-6\">
                                        <label class=\"field select\">
                                            <select id=\"product-status\" name=\"product-status\">
                                                <option value=\"0\" selected=\"selected\">Product Availability</option>
                                                <option value=\"1\">Available</option>
                                                <option value=\"2\">Unavailable</option>
                                                <option value=\"3\">Discontinued</option>
                                                <option value=\"4\">Out of Stock</option>
                                            </select>
                                            <i class=\"arrow double\"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end section row section -->

                                <div class=\"section row\">
                                    <div class=\"col-md-4\">
                                        <label for=\"product-price\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"product-price\" id=\"product-price\" class=\"gui-input\" placeholder=\"Product Price...\">
                                            <label for=\"product-price\" class=\"field-icon\">
                                                <i class=\"fa fa-usd\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-4\">
                                        <label for=\"product-vendor\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"product-vendor\" id=\"product-vendor\" class=\"gui-input\" placeholder=\"Vendor Source...\">
                                            <label for=\"product-vendor\" class=\"field-icon\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-4\">
                                        <label for=\"product-sku\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"product-sku\" id=\"product-sku\" class=\"gui-input\" placeholder=\"Product SKU...\">
                                            <label for=\"product-sku\" class=\"field-icon\">
                                                <i class=\"fa fa-barcode\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end section row section -->

                                <div class=\"section\">
                                    <input id=\"tagsinput\" type=\"text\" value=\"Software, Adobe, Photoshop, Editor, Commercial\">
                                </div>
                                <!-- end section row section -->

                                <hr class=\"short alt\">

                                <div class=\"section row mbn\">
                                    <div class=\"col-sm-8\">
                                        <label class=\"field option mt10\">
                                            <input type=\"checkbox\" name=\"info\" checked>
                                            <span class=\"checkbox\"></span>Save Customer
                                            <em class=\"small-text text-muted\">- A Random Unique ID will be generated</em>
                                        </label>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <p class=\"text-right\">
                                            <button class=\"btn btn-primary\" type=\"button\">Save Order</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- end section -->
                            </div>
                            <div id=\"tab1_3\" class=\"tab-pane\">

                                <div class=\"section\">
                                    <label for=\"lastaddr\" class=\"field prepend-icon\">
                                        <input type=\"text\" name=\"lastaddr\" id=\"lastaddr\" class=\"gui-input\" placeholder=\"Street address 2\">
                                        <label for=\"lastaddr\" class=\"field-icon\">
                                            <i class=\"fa fa-map-marker\"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section\">
                                    <label class=\"field select\">
                                        <select id=\"location\" name=\"location\">
                                            <option value=\"\">Select country...</option>
                                            <option value=\"AL\">Albania</option>
                                            <option value=\"DZ\">Algeria</option>
                                            <option value=\"AD\">Andorra</option>
                                            <option value=\"AO\">Angola</option>
                                            <option value=\"AI\">Anguilla</option>
                                            <option value=\"AG\">Antigua and Barbuda</option>
                                            <option value=\"AR\">Argentina</option>
                                            <option value=\"AM\">Armenia</option>
                                            <option value=\"AW\">Aruba</option>
                                            <option value=\"AU\">Australia</option>
                                            <option value=\"AT\">Austria</option>
                                            <option value=\"AZ\">Azerbaijan Republic</option>
                                            <option value=\"BS\">Bahamas</option>
                                            <option value=\"BH\">Bahrain</option>
                                            <option value=\"BB\">Barbados</option>
                                            <option value=\"BE\">Belgium</option>
                                            <option value=\"BZ\">Belize</option>
                                            <option value=\"BJ\">Benin</option>
                                            <option value=\"BM\">Bermuda</option>
                                            <option value=\"BT\">Bhutan</option>
                                            <option value=\"BO\">Bolivia</option>
                                            <option value=\"BA\">Bosnia and Herzegovina</option>
                                            <option value=\"BW\">Botswana</option>
                                            <option value=\"BR\">Brazil</option>
                                            <option value=\"BN\">Brunei</option>
                                            <option value=\"BG\">Bulgaria</option>
                                            <option value=\"BF\">Burkina Faso</option>
                                            <option value=\"BI\">Burundi</option>
                                            <option value=\"KH\">Cambodia</option>
                                            <option value=\"CA\">Canada</option>
                                            <option value=\"CV\">Cape Verde</option>
                                            <option value=\"KY\">Cayman Islands</option>
                                            <option value=\"TD\">Chad</option>
                                            <option value=\"CL\">Chile</option>
                                            <option value=\"C2\">China Worldwide</option>
                                            <option value=\"CO\">Colombia</option>
                                            <option value=\"KM\">Comoros</option>
                                            <option value=\"CK\">Cook Islands</option>
                                            <option value=\"CR\">Costa Rica</option>
                                            <option value=\"HR\">Croatia</option>
                                            <option value=\"CY\">Cyprus</option>
                                            <option value=\"CZ\">Czech Republic</option>
                                            <option value=\"CD\">Democratic Republic of the Congo</option>
                                            <option value=\"DK\">Denmark</option>
                                            <option value=\"DJ\">Djibouti</option>
                                            <option value=\"DM\">Dominica</option>
                                            <option value=\"DO\">Dominican Republic</option>
                                            <option value=\"EC\">Ecuador</option>
                                            <option value=\"EG\">Egypt</option>
                                            <option value=\"SV\">El Salvador</option>
                                            <option value=\"ER\">Eritrea</option>
                                            <option value=\"EE\">Estonia</option>
                                            <option value=\"ET\">Ethiopia</option>
                                            <option value=\"FK\">Falkland Islands</option>
                                            <option value=\"FO\">Faroe Islands</option>
                                            <option value=\"FJ\">Fiji</option>
                                            <option value=\"FI\">Finland</option>
                                            <option value=\"FR\">France</option>
                                            <option value=\"GF\">French Guiana</option>
                                            <option value=\"PF\">French Polynesia</option>
                                            <option value=\"GA\">Gabon Republic</option>
                                            <option value=\"GM\">Gambia</option>
                                            <option value=\"GE\">Georgia</option>
                                            <option value=\"DE\">Germany</option>
                                            <option value=\"GI\">Gibraltar</option>
                                            <option value=\"GR\">Greece</option>
                                            <option value=\"GL\">Greenland</option>
                                            <option value=\"GD\">Grenada</option>
                                            <option value=\"GP\">Guadeloupe</option>
                                            <option value=\"GT\">Guatemala</option>
                                            <option value=\"GN\">Guinea</option>
                                            <option value=\"GW\">Guinea Bissau</option>
                                            <option value=\"GY\">Guyana</option>
                                            <option value=\"HN\">Honduras</option>
                                            <option value=\"HK\">Hong Kong</option>
                                            <option value=\"HU\">Hungary</option>
                                            <option value=\"IS\">Iceland</option>
                                            <option value=\"IN\">India</option>
                                            <option value=\"ID\">Indonesia</option>
                                            <option value=\"IE\">Ireland</option>
                                            <option value=\"IL\">Israel</option>
                                            <option value=\"IT\">Italy</option>
                                            <option value=\"JM\">Jamaica</option>
                                            <option value=\"JP\">Japan</option>
                                            <option value=\"JO\">Jordan</option>
                                            <option value=\"KZ\">Kazakhstan</option>
                                            <option value=\"KE\">Kenya</option>
                                            <option value=\"KI\">Kiribati</option>
                                            <option value=\"KW\">Kuwait</option>
                                            <option value=\"KG\">Kyrgyzstan</option>
                                            <option value=\"LA\">Laos</option>
                                            <option value=\"LV\">Latvia</option>
                                            <option value=\"LS\">Lesotho</option>
                                            <option value=\"LI\">Liechtenstein</option>
                                            <option value=\"LT\">Lithuania</option>
                                            <option value=\"LU\">Luxembourg</option>
                                            <option value=\"MG\">Madagascar</option>
                                            <option value=\"MW\">Malawi</option>
                                            <option value=\"MY\">Malaysia</option>
                                            <option value=\"MV\">Maldives</option>
                                            <option value=\"ML\">Mali</option>
                                            <option value=\"MT\">Malta</option>
                                            <option value=\"MH\">Marshall Islands</option>
                                            <option value=\"MQ\">Martinique</option>
                                            <option value=\"MR\">Mauritania</option>
                                            <option value=\"MU\">Mauritius</option>
                                            <option value=\"YT\">Mayotte</option>
                                            <option value=\"MX\">Mexico</option>
                                            <option value=\"FM\">Micronesia</option>
                                            <option value=\"MN\">Mongolia</option>
                                            <option value=\"MS\">Montserrat</option>
                                            <option value=\"MA\">Morocco</option>
                                            <option value=\"MZ\">Mozambique</option>
                                            <option value=\"NA\">Namibia</option>
                                            <option value=\"NR\">Nauru</option>
                                            <option value=\"NP\">Nepal</option>
                                            <option value=\"NL\">Netherlands</option>
                                            <option value=\"AN\">Netherlands Antilles</option>
                                            <option value=\"NC\">New Caledonia</option>
                                            <option value=\"NZ\">New Zealand</option>
                                            <option value=\"NI\">Nicaragua</option>
                                            <option value=\"NE\">Niger</option>
                                            <option value=\"NU\">Niue</option>
                                            <option value=\"NF\">Norfolk Island</option>
                                            <option value=\"NO\">Norway</option>
                                            <option value=\"OM\">Oman</option>
                                            <option value=\"PW\">Palau</option>
                                            <option value=\"PA\">Panama</option>
                                            <option value=\"PG\">Papua New Guinea</option>
                                            <option value=\"PE\">Peru</option>
                                            <option value=\"PH\">Philippines</option>
                                            <option value=\"PN\">Pitcairn Islands</option>
                                            <option value=\"PL\">Poland</option>
                                            <option value=\"PT\">Portugal</option>
                                            <option value=\"QA\">Qatar</option>
                                            <option value=\"CG\">Republic of the Congo</option>
                                            <option value=\"RE\">Reunion</option>
                                            <option value=\"RO\">Romania</option>
                                            <option value=\"RU\">Russia</option>
                                            <option value=\"RW\">Rwanda</option>
                                            <option value=\"KN\">Saint Kitts and Nevis Anguilla</option>
                                            <option value=\"PM\">Saint Pierre and Miquelon</option>
                                            <option value=\"VC\">Saint Vincent and Grenadines</option>
                                            <option value=\"WS\">Samoa</option>
                                            <option value=\"SM\">San Marino</option>
                                            <option value=\"ST\">São Tomé and Príncipe</option>
                                            <option value=\"SA\">Saudi Arabia</option>
                                            <option value=\"SN\">Senegal</option>
                                            <option value=\"RS\">Serbia</option>
                                            <option value=\"SC\">Seychelles</option>
                                            <option value=\"SL\">Sierra Leone</option>
                                            <option value=\"SG\">Singapore</option>
                                            <option value=\"SK\">Slovakia</option>
                                            <option value=\"SI\">Slovenia</option>
                                            <option value=\"SB\">Solomon Islands</option>
                                            <option value=\"SO\">Somalia</option>
                                            <option value=\"ZA\">South Africa</option>
                                            <option value=\"KR\">South Korea</option>
                                            <option value=\"ES\">Spain</option>
                                            <option value=\"LK\">Sri Lanka</option>
                                            <option value=\"SH\">St. Helena</option>
                                            <option value=\"LC\">St. Lucia</option>
                                            <option value=\"SR\">Suriname</option>
                                            <option value=\"SJ\">Svalbard and Jan Mayen Islands</option>
                                            <option value=\"SZ\">Swaziland</option>
                                            <option value=\"SE\">Sweden</option>
                                            <option value=\"CH\">Switzerland</option>
                                            <option value=\"TW\">Taiwan</option>
                                            <option value=\"TJ\">Tajikistan</option>
                                            <option value=\"TZ\">Tanzania</option>
                                            <option value=\"TH\">Thailand</option>
                                            <option value=\"TG\">Togo</option>
                                            <option value=\"TO\">Tonga</option>
                                            <option value=\"TT\">Trinidad and Tobago</option>
                                            <option value=\"TN\">Tunisia</option>
                                            <option value=\"TR\">Turkey</option>
                                            <option value=\"TM\">Turkmenistan</option>
                                            <option value=\"TC\">Turks and Caicos Islands</option>
                                            <option value=\"TV\">Tuvalu</option>
                                            <option value=\"UG\">Uganda</option>
                                            <option value=\"UA\">Ukraine</option>
                                            <option value=\"AE\">United Arab Emirates</option>
                                            <option value=\"GB\">United Kingdom</option>
                                            <option value=\"US\">United States</option>
                                            <option value=\"UY\">Uruguay</option>
                                            <option value=\"VU\">Vanuatu</option>
                                            <option value=\"VA\">Vatican City State</option>
                                            <option value=\"VE\">Venezuela</option>
                                            <option value=\"VN\">Vietnam</option>
                                            <option value=\"VG\">Virgin Islands (British)</option>
                                            <option value=\"WF\">Wallis and Futuna Islands</option>
                                            <option value=\"YE\">Yemen</option>
                                            <option value=\"ZM\">Zambia</option>
                                        </select>
                                        <i class=\"arrow double\"></i>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class=\"section row\">
                                    <div class=\"col-md-3\">
                                        <label for=\"zip\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"zip\" id=\"zip\" class=\"gui-input\" placeholder=\"Zip\">
                                            <label for=\"zip\" class=\"field-icon\">
                                                <i class=\"fa fa-certificate\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-4\">
                                        <label for=\"city\" class=\"field prepend-icon\">
                                            <input type=\"text\" name=\"city\" id=\"city\" class=\"gui-input\" placeholder=\"City\">
                                            <label for=\"city\" class=\"field-icon\">
                                                <i class=\"fa fa-building-o\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class=\"col-md-5\">
                                        <label for=\"states\" class=\"field select\">
                                            <select id=\"states\" name=\"states\">
                                                <option value=\"\">Choose state</option>
                                                <option value=\"AL\">Alabama</option>
                                                <option value=\"AK\">Alaska</option>
                                                <option value=\"AZ\">Arizona</option>
                                                <option value=\"AR\">Arkansas</option>
                                                <option value=\"CA\">California</option>
                                                <option value=\"CO\">Colorado</option>
                                                <option value=\"CT\">Connecticut</option>
                                                <option value=\"DE\">Delaware</option>
                                                <option value=\"DC\">District Of Columbia</option>
                                                <option value=\"FL\">Florida</option>
                                                <option value=\"GA\">Georgia</option>
                                                <option value=\"HI\">Hawaii</option>
                                                <option value=\"ID\">Idaho</option>
                                                <option value=\"IL\">Illinois</option>
                                                <option value=\"IN\">Indiana</option>
                                                <option value=\"IA\">Iowa</option>
                                                <option value=\"KS\">Kansas</option>
                                                <option value=\"KY\">Kentucky</option>
                                                <option value=\"LA\">Louisiana</option>
                                                <option value=\"ME\">Maine</option>
                                                <option value=\"MD\">Maryland</option>
                                                <option value=\"MA\">Massachusetts</option>
                                                <option value=\"MI\">Michigan</option>
                                                <option value=\"MN\">Minnesota</option>
                                                <option value=\"MS\">Mississippi</option>
                                                <option value=\"MO\">Missouri</option>
                                                <option value=\"MT\">Montana</option>
                                                <option value=\"NE\">Nebraska</option>
                                                <option value=\"NV\">Nevada</option>
                                                <option value=\"NH\">New Hampshire</option>
                                                <option value=\"NJ\">New Jersey</option>
                                                <option value=\"NM\">New Mexico</option>
                                                <option value=\"NY\">New York</option>
                                                <option value=\"NC\">North Carolina</option>
                                                <option value=\"ND\">North Dakota</option>
                                                <option value=\"OH\">Ohio</option>
                                                <option value=\"OK\">Oklahoma</option>
                                                <option value=\"OR\">Oregon</option>
                                                <option value=\"PA\">Pennsylvania</option>
                                                <option value=\"RI\">Rhode Island</option>
                                                <option value=\"SC\">South Carolina</option>
                                                <option value=\"SD\">South Dakota</option>
                                                <option value=\"TN\">Tennessee</option>
                                                <option value=\"TX\">Texas</option>
                                                <option value=\"UT\">Utah</option>
                                                <option value=\"VT\">Vermont</option>
                                                <option value=\"VA\">Virginia</option>
                                                <option value=\"WA\">Washington</option>
                                                <option value=\"WV\">West Virginia</option>
                                                <option value=\"WI\">Wisconsin</option>
                                                <option value=\"WY\">Wyoming</option>
                                            </select>
                                            <i class=\"arrow double\"></i>
                                        </label>
                                    </div>
                                    <!-- end .col8 section -->
                                </div>
                                <!-- end section row section -->

                                <div class=\"section row mbn\">
                                    <div class=\"col-sm-8\">
                                        <label class=\"field option mt10\">
                                            <input type=\"checkbox\" name=\"info\" checked>
                                            <span class=\"checkbox\"></span>Save Customer
                                            <em class=\"small-text text-muted\">- A Random Unique ID will be generated</em>
                                        </label>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <p class=\"text-right\">
                                            <button class=\"btn btn-primary\" type=\"button\">Save Order</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- end section -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- recent orders table -->
                <div class=\"panel\">
                    <div class=\"panel-menu p12 admin-form theme-primary\">
                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <label class=\"field select\">
                                    <select id=\"filter-category\" name=\"filter-category\">
                                        <option value=\"0\">Filter by Category</option>
                                        <option value=\"1\">Smart Phones</option>
                                        <option value=\"2\">Smart Watches</option>
                                        <option value=\"3\">Notebooks</option>
                                        <option value=\"4\">Desktops</option>
                                        <option value=\"5\">Music Players</option>
                                    </select>
                                    <i class=\"arrow\"></i>
                                </label>
                            </div>
                            <div class=\"col-md-5\">
                                <label class=\"field select\">
                                    <select id=\"filter-status\" name=\"filter-status\">
                                        <option value=\"0\">Filter by Status</option>
                                        <option value=\"1\">Active</option>
                                        <option value=\"2\">Inactive</option>
                                        <option value=\"3\">Low Stock</option>
                                        <option value=\"4\">Out of Stock</option>
                                    </select>
                                    <i class=\"arrow\"></i>
                                </label>
                            </div>
                            <div class=\"col-md-2\">
                                <label class=\"field select\">
                                    <select id=\"bulk-action\" name=\"bulk-action\">
                                        <option value=\"0\">Actions</option>
                                        <option value=\"1\">Edit</option>
                                        <option value=\"2\">Delete</option>
                                        <option value=\"3\">Active</option>
                                        <option value=\"4\">Inactive</option>
                                    </select>
                                    <i class=\"arrow double\"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-body pn\">
                        <div class=\"table-responsive\">
                            <table class=\"table admin-form theme-warning tc-checkbox-1 fs13\">
                                <thead>
                                    <tr class=\"bg-light\">
                                        <th class=\"text-center\">Select</th>
                                        <th class=\"\">Image</th>
                                        <th class=\"\">Product Title</th>
                                        <th class=\"\">SKU</th>
                                        <th class=\"\">Price</th>
                                        <th class=\"\">Stock</th>
                                        <th class=\"text-right\">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"{{asset('assets/img/stock/products/thumb_1.jpg')}}\">
                                        </td>
                                        <td class=\"\">Apple Ipod 4G - Silver</td>
                                        <td class=\"\">#21362</td>
                                        <td class=\"\">\$215</td>
                                        <td class=\"\">1,400</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"{{asset('assets/img/stock/products/thumb_2.jpg')}}\">
                                        </td>
                                        <td class=\"\">Apple Smart Watch - 1G</td>
                                        <td class=\"\">#15262</td>
                                        <td class=\"\">\$455</td>
                                        <td class=\"\">2,100</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"{{asset('assets/img/stock/products/thumb_6.jpg')}}\">
                                        </td>
                                        <td class=\"\">Apple Macbook 4th Gen - Silver</td>
                                        <td class=\"\">#66362</td>
                                        <td class=\"\">\$1699</td>
                                        <td class=\"\">6,100</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"{{asset('assets/img/stock/products/thumb_7.jpg')}}\">
                                        </td>
                                        <td class=\"\">Apple Iphone 16GB - Silver</td>
                                        <td class=\"\">#51362</td>
                                        <td class=\"\">\$1299</td>
                                        <td class=\"\">5,200</td>
                                        <td clas  s=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"{{asset('assets/img/stock/products/thumb_3.jpg')}}\">
                                        </td>
                                        <td class=\"\">Apple Ipod Nano 2G - Silver</td>
                                        <td class=\"\">#4132</td>
                                        <td class=\"\">\$995</td>
                                        <td class=\"\">11,000</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-center\">
                                            <label class=\"option block mn\">
                                                <input type=\"checkbox\" name=\"mobileos\" value=\"FR\">
                                                <span class=\"checkbox mn\"></span>
                                            </label>
                                        </td>
                                        <td class=\"w100\">
                                            <img class=\"img-responsive mw40 ib mr10\" title=\"user\" src=\"{{asset('assets/img/stock/products/thumb_4.jpg')}}\">
                                        </td>
                                        <td class=\"\">Apple Macbook 3rd Gen - Silver</td>
                                        <td class=\"\">#21362</td>
                                        <td class=\"\">\$1,150</td>
                                        <td class=\"\">4,300</td>
                                        <td class=\"text-right\">
                                            <div class=\"btn-group text-right\">
                                                <button type=\"button\" class=\"btn btn-success br2 btn-xs fs12 dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Active
                                                    <span class=\"caret ml5\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                    <li>
                                                        <a href=\"#\">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Archive</a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"#\">Complete</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#\">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end: .tray-center -->

            <!-- begin: .tray-right -->
            <aside class=\"tray tray-right tray290\" data-tray-height=\"match\">

                <!-- menu quick links -->
                <div class=\"admin-form\">

                    <h4> Filter Products</h4>

                    <hr class=\"short\">

                    <div class=\"section mb15\">
                        <label for=\"order-id\" class=\"field prepend-icon\">
                            <input type=\"text\" name=\"order-id\" id=\"order-id\" class=\"gui-input\" placeholder=\"Product SKU #\">
                            <label for=\"order-id\" class=\"field-icon\">
                                <i class=\"fa fa-tag\"></i>
                            </label>
                        </label>
                    </div>

                    <h5><small>Price Range(\$)</small></h5>
                    <div class=\"section row mb15\">
                        <div class=\"col-md-6\">
                            <label for=\"price1\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"price1\" id=\"price1\" class=\"gui-input\" placeholder=\"0\">
                                <label for=\"price1\" class=\"field-icon\">
                                    <i class=\"fa fa-usd\"></i>
                                </label>
                            </label>
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"price2\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"price2\" id=\"price2\" class=\"gui-input\" placeholder=\"1000\">
                                <label for=\"price2\" class=\"field-icon\">
                                    <i class=\"fa fa-usd\"></i>
                                </label>
                            </label>
                        </div>
                    </div>

                    <h5><small>Sales Date</small></h5>
                    <div class=\"section row\">
                        <div class=\"col-md-6\">
                            <label for=\"date1\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"date1\" id=\"date1\" class=\"gui-input\" placeholder=\"01/01/15\">
                                <label for=\"date1\" class=\"field-icon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </label>
                            </label>
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"date2\" class=\"field prepend-icon\">
                                <input type=\"text\" name=\"date2\" id=\"date2\" class=\"gui-input\" placeholder=\"01/31/15\">
                                <label for=\"date2\" class=\"field-icon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </label>
                            </label>
                        </div>
                    </div>

                    <h5><small>Search Categories</small></h5>
                    <div class=\"section mb15\">
                        <label class=\"field select\">
                            <select id=\"filter-categories\" name=\"filter-categories\">
                                <option value=\"0\" selected=\"selected\">Filter by Categories</option>
                                <option value=\"1\">Electronics</option>
                                <option value=\"2\">Software</option>
                            </select>
                            <i class=\"arrow double\"></i>
                        </label>
                    </div>

                    <h5><small>Search Customers</small></h5>
                    <div class=\"section\">
                        <label class=\"field select\">
                            <select id=\"filter-customers\" name=\"filter-customers\">
                                <option value=\"0\" selected=\"selected\">Filter by Vendor</option>
                                <option value=\"1\">Michael</option>
                                <option value=\"2\">David</option>
                                <option value=\"3\">Sara</option>
                                <option value=\"4\">Tasha</option>
                            </select>
                            <i class=\"arrow double\"></i>
                        </label>
                    </div>

                    <hr class=\"short\">

                    <div class=\"section\">
                        <button class=\"btn btn-default btn-sm ph25\" type=\"button\">Search</button>
                        <label class=\"field option ml15\">
                            <input type=\"checkbox\" name=\"info\">
                            <span class=\"checkbox\"></span>
                            <span class=\"text-muted\">Save Search</span>
                        </label>
                    </div>
                </div>
            </aside>
            <!-- end: .tray-right -->
        </section>
        <!-- End: Content -->
    </section>
{% endblock %}

{% block javascripts %}
<!-- jQuery -->
<script src=\"{{asset('vendor/jquery/jquery-1.11.1.min.js')}}\"></script>
<script src=\"{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}\"></script>

<!-- FileUpload JS -->
<script src=\"{{asset('vendor/plugins/fileupload/fileupload.js')}}\"></script>
<script src=\"{{asset('vendor/plugins/holder/holder.min.js')}}\"></script>

<!-- Tagmanager JS -->
<script src=\"{{asset('vendor/plugins/tagsinput/tagsinput.min.js')}}\"></script>

<!-- Theme Javascript -->
<script src=\"{{asset('assets/js/utility/utility.js')}}\"></script>
<script src=\"{{asset('assets/js/demo/demo.js')}}\"></script>
<script src=\"{{asset('assets/js/main.js')}}\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core    
        Core.init();

        // Init Demo JS  
        Demo.init();

        // select list dropdowns - placeholder like creation
        var selectList = \$('.admin-form select');
        selectList.each(function(i, e) {
            \$(e).on('change', function() {
                if (\$(e).val() == \"0\") \$(e).addClass(\"empty\");
                else \$(e).removeClass(\"empty\")
            });
        });
        selectList.each(function(i, e) {
            \$(e).change();
        });
        // Init TagsInput plugin
        \$(\"input#tagsinput\").tagsinput({
            tagClass: function(item) {
                return 'label bg-primary light';
            }
        });
    });
</script>
<!-- END: PAGE SCRIPTS -->
{% endblock %}", "admin/nouveauachat.html.twig", "/var/www/html/Projet/pharmAssistant/templates/admin/nouveauachat.html.twig");
    }
}
