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

/* /Users/andrew/Sites/turnkey-site/themes/turnkey/pages/business-phone-systems.htm */
class __TwigTemplate_bfc490feaebc457c24387c202097f4b988d39e744835ae4496c6d7be6430f12e extends \Twig\Template
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
        echo "<!-- Body Content -->
      <!-- Body Content -->
\t<main role=\"main\"> <!-- Header -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t\t<div class=\"col-lg-6 hideOver box1 formHeader tinted contactBannerNew formBox white\">
\t\t\t    <br/>
\t\t\t    <br/>
\t\t\t    <h3>Compare Price Quotes for <strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "meta_title", [], "any", false, false, false, 10), "html", null, true);
        echo "</strong> and Save</h3>
\t\t\t    <p class=\"white\">Simplify your research by letting us do the work for you.</p>
\t\t\t    <h4 class=\"white\">Share a few details and get:</h4>
\t\t\t    <p class=\"white\">
\t\t\t    <i class=\"fa fa-book\" style=\"font-size:40px;\"></i> Multiple quotes to compare so you know you’re getting the best deal.
\t\t\t    </p>
\t\t\t    
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 hideOver formBox2 blueBoxContent formBox\">
\t\t\t<link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/smart_wizard.min.css");
        echo "\" rel=\"stylesheet\">
  
<form id=\"myForm\" data-request=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["testForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\" role=\"form\" data-toggle=\"validator\" method=\"post\" accept-charset=\"utf-8\">

    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["testForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

    <!-- SmartWizard html -->
        <div id=\"smartwizard\">
            <ul class=\"d-none\">
                <li><a href=\"#step-1\">Step 1<br /><small></small></a></li>
                <li><a href=\"#step-2\">Step 2<br /><small></small></a></li>
                <li><a href=\"#step-3\">Step 3<br /><small></small></a></li>
                <li><a href=\"#step-4\">Step 4<br /><small></small></a></li>
                <li><a href=\"#step-5\">Step 5<br /><small></small></a></li>
                <li><a href=\"#step-6\">Step 6<br /><small></small></a></li>
                <li><a href=\"#step-7\">Step 7<br /><small></small></a></li>
                <li><a href=\"#step-8\">Step 8<br /><small></small></a></li>
            </ul>

            <div>
                <div id=\"step-1\">
                    <div id=\"form-step-0\" role=\"form\" data-toggle=\"validator\">
                    \t<input type=\"hidden\" name=\"campaign\" value=\"business-phone-systems\" />
                        <div class=\"form-group\">
                        <br/>
                        <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"phone_system_needs\">Which best describes your phone system needs?</label><br/>
                                  <button class='btn btn-lg radio-btn custom-question-1' data-desc=\"Installing new phone system\"><i class=\"fa fa-phone-square q-icon-format\"></i> Installing new phone system </button>
                                  <button class='btn btn-lg radio-btn custom-question-1' data-desc=\"Replacing existing phone system\"><i class=\"fa fa-phone-square q-icon-format\"></i> Replacing existing phone system </button>
                                  <button class='btn btn-lg radio-btn custom-question-1' data-desc=\"Expanding existing phone system\"><i class=\"fa fa-phone-square q-icon-format\"></i> Expanding existing phone system </button>
                                  <input type=\"hidden\" id=\"phone_system_needs\"  name=\"phone_system_needs\" value=\"\" required />
                            
                        </div>
                    </div>

                </div>
                <div id=\"step-2\">
                    <div id=\"form-step-1\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors\"></div>
                            <label for=\"Approximately-how-many-phones-do-you-need\">Approximately how many phones do you need?</label>
                            <input type=\"number\" class=\"form-control\" name=\"approximately-how-many-phones-do-you-need\" id=\"Approximately-how-many-phones-do-you-need\" placeholder=\"\" required>
                            
                        </div>
                    </div>
                </div>
                <div id=\"step-3\">
                    <div id=\"form-step-2\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"When-do-you-anticipate-making-a-decision\">When do you anticipate making a decision?</label>
                            <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"ASAP\"><i class=\"fa fa-question-circle q-icon-format\"></i> ASAP </button>
                                  <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"Within a few months\"><i class=\"fa fa-question-circle q-icon-format\"></i> Within a few months </button>
                                  <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"Between 3 and 6 months\"><i class=\"fa fa-question-circle q-icon-format\"></i> Between 3 and 6 months </button>
                                  <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"In more than 6 months\"><i class=\"fa fa-question-circle q-icon-format\"></i> In more than 6 months </button>
                            <input type=\"hidden\" id=\"decision\"  name=\"when-do-you-anticipate-making-a-decision\" value=\"\" required />
                            
                        </div>
                    </div>
                </div>
                <div id=\"step-4\">
                    <div id=\"form-step-3\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"zip\">What is your zip code?</label>
                            <input type=\"number\" id=\"zip\" name=\"zip\" data-minlength=\"5\" maxlength=\"5\" class=\"form-control\" placeholder=\"\" required>
                            
                        </div>
                    </div>
                </div>
                
                <div id=\"step-5\">
                    <div id=\"form-step-4\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"email\">What is your email?</label>
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"\" required>
                            
                        </div>
                    </div>
                </div>
                
                <div id=\"step-6\">
                    <div id=\"form-step-5\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"first_name\">First Name: </label>
                            <input type=\"text\" id=\"first_name\" name=\"first_name\" class=\"form-control\" placeholder=\"Your First Name\" data-error=\"Please enter your first name\" required>
                            
                            <label for=\"last_name\">Last Name: </label>
                            <input type=\"text\" id=\"last_name\" name=\"last_name\" class=\"form-control\" placeholder=\"Your Last Name\" required>
                            
                            <label for=\"job_title\">Your Job Title: </label>
                            <select name=\"job_title\" id=\"job_title\" class=\"form-control\" required>
                                <option value=\"\">Choose Below...</option>
                                <option value=\"Accounting/Finance\">Accounting/Finance</option>
                                <option value=\"Admin. Assistant\">Admin. Assistant</option>
                                <option value=\"Attorney\">Attorney</option>
                                <option value=\"CEO/President/Owner\">CEO/President/Owner</option>
                                <option value=\"CFO\">CFO</option>
                                <option value=\"CIO\">CIO</option>
                                <option value=\"Consultant\">Consultant</option>
                                <option value=\"Dentist/Physician\">Dentist/Physician</option>
                                <option value=\"Designer/Writer/Producer\">Designer/Writer/Producer</option>
                                <option value=\"Educator\">Educator</option>
                                <option value=\"Engineer/Programmer\">Engineer/Programmer</option>
                                <option value=\"Facilities/Operations\">Facilities/Operations</option>
                                <option value=\"General Manager\">General Manager</option>
                                <option value=\"Human Resources\">Human Resources</option>
                                <option value=\"Manufacturing\">Manufacturing</option>
                                <option value=\"Marketing/Public Relations\">Marketing/Public Relations</option>
                                <option value=\"MIS/IT\">MIS/IT</option>
                                <option value=\"Office Manager\">Office Manager</option>
                                <option value=\"Other\">Other</option>
                                <option value=\"Partner/Principal\">Partner/Principal</option>
                                <option value=\"Purchasing Manager\">Purchasing Manager</option>
                                <option value=\"R&amp;D\">R&amp;D</option>
                                <option value=\"Receptionist\">Receptionist</option>
                                <option value=\"Sales/Business Devt.\">Sales/Business Devt.</option>
                            </select>
                            
                            
                        </div>
                    </div>
                </div>
                
                <div id=\"step-7\">
                    <div id=\"form-step-6\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                             <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"company_name\">Company Name: </label>
                            <input type=\"text\" id=\"company_name\" name=\"company_name\" class=\"form-control\" placeholder=\"Your Company's Name\" required>
                        
                            <label for=\"phone_number\">Your Phone Number: </label>
                            <input type=\"tel\" id=\"phone_number\" name=\"phone_number\" pattern=\"^\\d{10}\$\" class=\"form-control\" placeholder=\"Your Phone Number\" required>
                        
                            <label for=\"number_of_employees\">Number of Employees: </label>
                            <select name=\"number_of_employees\" id=\"number_of_employees\" class=\"form-control\" required>
                                <option value=\"\">Choose Below...</option>
                                <option value=\"1 to 9\">1 to 9</option>
                                <option value=\"10 to 19\">10 to 19</option>
                                <option value=\"20 to 49\">20 to 49</option>
                                <option value=\"50 to 99\">50 to 99</option>
                                <option value=\"100 to 499\">100 to 499</option>
                                <option value=\"500 to 999\">500 to 999</option>
                                <option value=\"1000+\">1000+</option>
                            </select>
                            
                            <label for=\"industry\">Industry you work in: </label>
                            <select name=\"industry\" id=\"industry\" class=\"form-control\" required>
                                <option value=\"\">Choose Below...</option>
                                <option value=\"Advertising/Marketing/PR\">Advertising/Marketing/PR</option>
                                <option value=\"Agriculture\">Agriculture</option>
                                <option value=\"Biotech/Pharmaceuticals\">Biotech/Pharmaceuticals</option>
                                <option value=\"Computers - Hardware\">Computers - Hardware</option>
                                <option value=\"Computers - Software\">Computers - Software</option>
                                <option value=\"Construction/General Contracting\">Construction/General Contracting</option>
                                <option value=\"Consulting\">Consulting</option>
                                <option value=\"Education\">Education</option>
                                <option value=\"Equipment Sales &amp; Service\">Equipment Sales &amp; Service</option>
                                <option value=\"Financial Services\">Financial Services</option>
                                <option value=\"Government\">Government</option>
                                <option value=\"Healthcare\">Healthcare</option>
                                <option value=\"Information Services\">Information Services</option>
                                <option value=\"Insurance\">Insurance</option>
                                <option value=\"Legal\">Legal</option>
                                <option value=\"Manufacturing\">Manufacturing</option>
                                <option value=\"Media/Entertainment/Publishing\">Media/Entertainment/Publishing</option>
                                <option value=\"Non-Profit\">Non-Profit</option>
                                <option value=\"Other Services\">Other Services</option>
                                <option value=\"Real Estate\">Real Estate</option>
                                <option value=\"Restaurant\">Restaurant</option>
                                <option value=\"Retai\">Retail</option>
                                <option value=\"Telecom/Utilities\">Telecom/Utilities</option>
                                <option value=\"Transportation/Logistics\">Transportation/Logistics</option>
                                <option value=\"Travel/Hospitality\">Travel/Hospitality</option>
                                <option value=\"Wholesale\">Wholesale</option>
                            </select>
                           
                        </div>
                    </div>
                </div>
                
                
                <div id=\"step-8\">
                    <div id=\"form-step-7\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                             <div class=\"help-block with-errors hidden-errors\"></div>
                             <label for=\"street_address\">Street Address: </label>
                            <input type=\"text\" id=\"street_address\" name=\"street_address\" class=\"form-control\" placeholder=\"\" required>
                             
                             <label for=\"city\">City: </label>
                            <input type=\"text\" id=\"city\" name=\"city\" value=\"\" class=\"form-control\"   required />
                            
                             <label for=\"state\">State: </label>
                            <input type=\"text\" id=\"state\" name=\"state\" value=\"\" class=\"form-control\"  required/>
                        </div>
                    </div>
                </div>
                
                
                
                
                
            </div>
        </div>
        <br/>
        <p style=\"color:#fff;\">Your privacy is important to us. By submitting this form, you consent to TurnKey Office Solutions and up to six companies calling you at the phone number provided using automated phone technology. Consent is not a condition of purchasing any products or services.</p>
 <br/>
            
        <br/>

<button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default d-none\">Submit</button>

</form>
 <!-- Include jQuery -->
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <!-- Include jQuery Validator plugin -->
  <script src=\"//cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js\"></script>
<script src=\"";
        // line 240
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.smartWizard.min.js");
        echo "\"></script>
<script type=\"text/javascript\">
        \$(document).ready(function(){
            // Toolbar extra buttons
            var btnFinish = \$('<button id=\"btn-finish\"></button>').text('Submit')
                                             .addClass('btn btn-info d-none')
                                             .on('click', function(){
                                                    if( !\$(this).hasClass('disabled')){
                                                        var elmForm = \$(\"#myForm\");
                                                        if(elmForm){
                                                            elmForm.validator('validate');
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                return false;
                                                            }else{
                                                            \t\$('#simpleContactSubmitButton').click();
                                                            \treturn false;
                                                            }
                                                        }
                                                    }
                                                });
            



            // Smart Wizard
            \$('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'arrows',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });

            \$(\"#smartwizard\").on(\"leaveStep\", function(e, anchorObject, stepNumber, stepDirection) {
                
                if(stepNumber == 0) {
                     if(\$('#phone_system_needs').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please provide an answer.\");
                        \$('#phone_system_needs').focus();
                        return false;
                     }
                }
                if(stepNumber == 2) {
                     if(\$('#decision').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please provide an answer.\");
                        \$('#decision').focus();
                        return false;
                     }
                }
                
                 if(stepNumber == 3) {
                     if(\$('#city').val() == \"\") {
                        \$(\".hidden-errors\").addClass('has-error');    
                        \$(\".hidden-errors\").text(\"Please enter a valid zip code.\");
                        \$('#zip').focus();
                        return false;
                     }
                }
                
                if(stepNumber == 5) {
                     if(\$('#first_name').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your first name.\");
                        \$('#first_name').focus();
                        return false;
                     }
                     if(\$('#last_name').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your last name.\");
                        \$('#last_name').focus();
                        return false;
                     }
                     if(\$('#job_title').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                         \$(\".hidden-errors\").text(\"Please select your job title.\");
                         \$('#job_title').focus();
                        return false;
                     }
                }
                
                if(stepNumber == 6) {
                     if(\$('#company_name').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your company name.\");
                        \$('#company_name').focus();
                        return false;
                     }
                     if(\$('#phone_number').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your phone number.\");
                        \$('#phone_number').focus();
                        return false;
                     }
                     if(\$('#number_of_employees').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                         \$(\".hidden-errors\").text(\"Please choose the number of employees.\");
                         \$('#number_of_employees').focus();
                        return false;
                     }
                     if(\$('#industry').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                         \$(\".hidden-errors\").text(\"Please choose your industry.\");
                         \$('#industry').focus();
                        return false;
                     }
                }
                
                \$(\".hidden-errors\").text(\" \");
                var elmForm = \$(\"#form-step-\" + stepNumber);
                
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });

            \$(\"#smartwizard\").on(\"showStep\", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 7){
                \t\$('.sw-btn-prev').addClass('d-none');
                    \$('.sw-btn-next').addClass('d-none');
                    \$('#btn-finish').removeClass('disabled');
                    \$('#btn-finish').removeClass('d-none');
                }
            });
            \$(\".custom-question-1\").click(function(e){
                e.preventDefault();
                \$('#phone_system_needs').val(\$(this).attr('data-desc'));
                \$('.sw-btn-next').click();
            });
            \$(\".custom-question-2\").click(function(e){
                e.preventDefault();
                \$('#decision').val(\$(this).attr('data-desc'));
                \$('.sw-btn-next').click();
            });
            \$('#zip').keyup(function () {
                if (\$(this).val().length === 5) {
                    \$.ajax({
                        dataType: \"json\",
                        url: '/get-city-state/' + \$(this).val()
                    }).done(function (data) {
\t\t\t\t\t\tif (data.city!='' && data.state!='') {
\t\t\t\t\t\t\t\$('#city').val(data.city);
\t\t\t\t\t\t\t\$('#state').val(data.state);
\t\t\t\t\t\t}\t
                    });
                }

            });

        });
    </script>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Header -->
      <!-- Main Content -->
\t\t<div class=\"container-fluid contentSections mt-5\">
\t\t\t\t\t\t\t
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/business-phone-systems.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 240,  73 => 25,  68 => 23,  63 => 21,  58 => 19,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Body Content -->
      <!-- Body Content -->
\t<main role=\"main\"> <!-- Header -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t\t<div class=\"col-lg-6 hideOver box1 formHeader tinted contactBannerNew formBox white\">
\t\t\t    <br/>
\t\t\t    <br/>
\t\t\t    <h3>Compare Price Quotes for <strong>{{ this.page.meta_title }}</strong> and Save</h3>
\t\t\t    <p class=\"white\">Simplify your research by letting us do the work for you.</p>
\t\t\t    <h4 class=\"white\">Share a few details and get:</h4>
\t\t\t    <p class=\"white\">
\t\t\t    <i class=\"fa fa-book\" style=\"font-size:40px;\"></i> Multiple quotes to compare so you know you’re getting the best deal.
\t\t\t    </p>
\t\t\t    
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 hideOver formBox2 blueBoxContent formBox\">
\t\t\t<link href=\"{{ 'assets/css/smart_wizard.min.css' | theme }}\" rel=\"stylesheet\">
  
<form id=\"myForm\" data-request=\"{{ testForm }}::onFormSubmit\" role=\"form\" data-toggle=\"validator\" method=\"post\" accept-charset=\"utf-8\">

    {{ form_token() }}

    <div id=\"{{ testForm }}_forms_flash\"></div>

    <!-- SmartWizard html -->
        <div id=\"smartwizard\">
            <ul class=\"d-none\">
                <li><a href=\"#step-1\">Step 1<br /><small></small></a></li>
                <li><a href=\"#step-2\">Step 2<br /><small></small></a></li>
                <li><a href=\"#step-3\">Step 3<br /><small></small></a></li>
                <li><a href=\"#step-4\">Step 4<br /><small></small></a></li>
                <li><a href=\"#step-5\">Step 5<br /><small></small></a></li>
                <li><a href=\"#step-6\">Step 6<br /><small></small></a></li>
                <li><a href=\"#step-7\">Step 7<br /><small></small></a></li>
                <li><a href=\"#step-8\">Step 8<br /><small></small></a></li>
            </ul>

            <div>
                <div id=\"step-1\">
                    <div id=\"form-step-0\" role=\"form\" data-toggle=\"validator\">
                    \t<input type=\"hidden\" name=\"campaign\" value=\"business-phone-systems\" />
                        <div class=\"form-group\">
                        <br/>
                        <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"phone_system_needs\">Which best describes your phone system needs?</label><br/>
                                  <button class='btn btn-lg radio-btn custom-question-1' data-desc=\"Installing new phone system\"><i class=\"fa fa-phone-square q-icon-format\"></i> Installing new phone system </button>
                                  <button class='btn btn-lg radio-btn custom-question-1' data-desc=\"Replacing existing phone system\"><i class=\"fa fa-phone-square q-icon-format\"></i> Replacing existing phone system </button>
                                  <button class='btn btn-lg radio-btn custom-question-1' data-desc=\"Expanding existing phone system\"><i class=\"fa fa-phone-square q-icon-format\"></i> Expanding existing phone system </button>
                                  <input type=\"hidden\" id=\"phone_system_needs\"  name=\"phone_system_needs\" value=\"\" required />
                            
                        </div>
                    </div>

                </div>
                <div id=\"step-2\">
                    <div id=\"form-step-1\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors\"></div>
                            <label for=\"Approximately-how-many-phones-do-you-need\">Approximately how many phones do you need?</label>
                            <input type=\"number\" class=\"form-control\" name=\"approximately-how-many-phones-do-you-need\" id=\"Approximately-how-many-phones-do-you-need\" placeholder=\"\" required>
                            
                        </div>
                    </div>
                </div>
                <div id=\"step-3\">
                    <div id=\"form-step-2\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"When-do-you-anticipate-making-a-decision\">When do you anticipate making a decision?</label>
                            <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"ASAP\"><i class=\"fa fa-question-circle q-icon-format\"></i> ASAP </button>
                                  <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"Within a few months\"><i class=\"fa fa-question-circle q-icon-format\"></i> Within a few months </button>
                                  <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"Between 3 and 6 months\"><i class=\"fa fa-question-circle q-icon-format\"></i> Between 3 and 6 months </button>
                                  <button class='btn btn-lg radio-btn custom-question-2' data-desc=\"In more than 6 months\"><i class=\"fa fa-question-circle q-icon-format\"></i> In more than 6 months </button>
                            <input type=\"hidden\" id=\"decision\"  name=\"when-do-you-anticipate-making-a-decision\" value=\"\" required />
                            
                        </div>
                    </div>
                </div>
                <div id=\"step-4\">
                    <div id=\"form-step-3\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"zip\">What is your zip code?</label>
                            <input type=\"number\" id=\"zip\" name=\"zip\" data-minlength=\"5\" maxlength=\"5\" class=\"form-control\" placeholder=\"\" required>
                            
                        </div>
                    </div>
                </div>
                
                <div id=\"step-5\">
                    <div id=\"form-step-4\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"email\">What is your email?</label>
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"\" required>
                            
                        </div>
                    </div>
                </div>
                
                <div id=\"step-6\">
                    <div id=\"form-step-5\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                            <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"first_name\">First Name: </label>
                            <input type=\"text\" id=\"first_name\" name=\"first_name\" class=\"form-control\" placeholder=\"Your First Name\" data-error=\"Please enter your first name\" required>
                            
                            <label for=\"last_name\">Last Name: </label>
                            <input type=\"text\" id=\"last_name\" name=\"last_name\" class=\"form-control\" placeholder=\"Your Last Name\" required>
                            
                            <label for=\"job_title\">Your Job Title: </label>
                            <select name=\"job_title\" id=\"job_title\" class=\"form-control\" required>
                                <option value=\"\">Choose Below...</option>
                                <option value=\"Accounting/Finance\">Accounting/Finance</option>
                                <option value=\"Admin. Assistant\">Admin. Assistant</option>
                                <option value=\"Attorney\">Attorney</option>
                                <option value=\"CEO/President/Owner\">CEO/President/Owner</option>
                                <option value=\"CFO\">CFO</option>
                                <option value=\"CIO\">CIO</option>
                                <option value=\"Consultant\">Consultant</option>
                                <option value=\"Dentist/Physician\">Dentist/Physician</option>
                                <option value=\"Designer/Writer/Producer\">Designer/Writer/Producer</option>
                                <option value=\"Educator\">Educator</option>
                                <option value=\"Engineer/Programmer\">Engineer/Programmer</option>
                                <option value=\"Facilities/Operations\">Facilities/Operations</option>
                                <option value=\"General Manager\">General Manager</option>
                                <option value=\"Human Resources\">Human Resources</option>
                                <option value=\"Manufacturing\">Manufacturing</option>
                                <option value=\"Marketing/Public Relations\">Marketing/Public Relations</option>
                                <option value=\"MIS/IT\">MIS/IT</option>
                                <option value=\"Office Manager\">Office Manager</option>
                                <option value=\"Other\">Other</option>
                                <option value=\"Partner/Principal\">Partner/Principal</option>
                                <option value=\"Purchasing Manager\">Purchasing Manager</option>
                                <option value=\"R&amp;D\">R&amp;D</option>
                                <option value=\"Receptionist\">Receptionist</option>
                                <option value=\"Sales/Business Devt.\">Sales/Business Devt.</option>
                            </select>
                            
                            
                        </div>
                    </div>
                </div>
                
                <div id=\"step-7\">
                    <div id=\"form-step-6\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                             <div class=\"help-block with-errors hidden-errors\"></div>
                            <label for=\"company_name\">Company Name: </label>
                            <input type=\"text\" id=\"company_name\" name=\"company_name\" class=\"form-control\" placeholder=\"Your Company's Name\" required>
                        
                            <label for=\"phone_number\">Your Phone Number: </label>
                            <input type=\"tel\" id=\"phone_number\" name=\"phone_number\" pattern=\"^\\d{10}\$\" class=\"form-control\" placeholder=\"Your Phone Number\" required>
                        
                            <label for=\"number_of_employees\">Number of Employees: </label>
                            <select name=\"number_of_employees\" id=\"number_of_employees\" class=\"form-control\" required>
                                <option value=\"\">Choose Below...</option>
                                <option value=\"1 to 9\">1 to 9</option>
                                <option value=\"10 to 19\">10 to 19</option>
                                <option value=\"20 to 49\">20 to 49</option>
                                <option value=\"50 to 99\">50 to 99</option>
                                <option value=\"100 to 499\">100 to 499</option>
                                <option value=\"500 to 999\">500 to 999</option>
                                <option value=\"1000+\">1000+</option>
                            </select>
                            
                            <label for=\"industry\">Industry you work in: </label>
                            <select name=\"industry\" id=\"industry\" class=\"form-control\" required>
                                <option value=\"\">Choose Below...</option>
                                <option value=\"Advertising/Marketing/PR\">Advertising/Marketing/PR</option>
                                <option value=\"Agriculture\">Agriculture</option>
                                <option value=\"Biotech/Pharmaceuticals\">Biotech/Pharmaceuticals</option>
                                <option value=\"Computers - Hardware\">Computers - Hardware</option>
                                <option value=\"Computers - Software\">Computers - Software</option>
                                <option value=\"Construction/General Contracting\">Construction/General Contracting</option>
                                <option value=\"Consulting\">Consulting</option>
                                <option value=\"Education\">Education</option>
                                <option value=\"Equipment Sales &amp; Service\">Equipment Sales &amp; Service</option>
                                <option value=\"Financial Services\">Financial Services</option>
                                <option value=\"Government\">Government</option>
                                <option value=\"Healthcare\">Healthcare</option>
                                <option value=\"Information Services\">Information Services</option>
                                <option value=\"Insurance\">Insurance</option>
                                <option value=\"Legal\">Legal</option>
                                <option value=\"Manufacturing\">Manufacturing</option>
                                <option value=\"Media/Entertainment/Publishing\">Media/Entertainment/Publishing</option>
                                <option value=\"Non-Profit\">Non-Profit</option>
                                <option value=\"Other Services\">Other Services</option>
                                <option value=\"Real Estate\">Real Estate</option>
                                <option value=\"Restaurant\">Restaurant</option>
                                <option value=\"Retai\">Retail</option>
                                <option value=\"Telecom/Utilities\">Telecom/Utilities</option>
                                <option value=\"Transportation/Logistics\">Transportation/Logistics</option>
                                <option value=\"Travel/Hospitality\">Travel/Hospitality</option>
                                <option value=\"Wholesale\">Wholesale</option>
                            </select>
                           
                        </div>
                    </div>
                </div>
                
                
                <div id=\"step-8\">
                    <div id=\"form-step-7\" role=\"form\" data-toggle=\"validator\">
                        <div class=\"form-group\">
                             <div class=\"help-block with-errors hidden-errors\"></div>
                             <label for=\"street_address\">Street Address: </label>
                            <input type=\"text\" id=\"street_address\" name=\"street_address\" class=\"form-control\" placeholder=\"\" required>
                             
                             <label for=\"city\">City: </label>
                            <input type=\"text\" id=\"city\" name=\"city\" value=\"\" class=\"form-control\"   required />
                            
                             <label for=\"state\">State: </label>
                            <input type=\"text\" id=\"state\" name=\"state\" value=\"\" class=\"form-control\"  required/>
                        </div>
                    </div>
                </div>
                
                
                
                
                
            </div>
        </div>
        <br/>
        <p style=\"color:#fff;\">Your privacy is important to us. By submitting this form, you consent to TurnKey Office Solutions and up to six companies calling you at the phone number provided using automated phone technology. Consent is not a condition of purchasing any products or services.</p>
 <br/>
            
        <br/>

<button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default d-none\">Submit</button>

</form>
 <!-- Include jQuery -->
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <!-- Include jQuery Validator plugin -->
  <script src=\"//cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js\"></script>
<script src=\"{{ 'assets/js/jquery.smartWizard.min.js' | theme }}\"></script>
<script type=\"text/javascript\">
        \$(document).ready(function(){
            // Toolbar extra buttons
            var btnFinish = \$('<button id=\"btn-finish\"></button>').text('Submit')
                                             .addClass('btn btn-info d-none')
                                             .on('click', function(){
                                                    if( !\$(this).hasClass('disabled')){
                                                        var elmForm = \$(\"#myForm\");
                                                        if(elmForm){
                                                            elmForm.validator('validate');
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                return false;
                                                            }else{
                                                            \t\$('#simpleContactSubmitButton').click();
                                                            \treturn false;
                                                            }
                                                        }
                                                    }
                                                });
            



            // Smart Wizard
            \$('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'arrows',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });

            \$(\"#smartwizard\").on(\"leaveStep\", function(e, anchorObject, stepNumber, stepDirection) {
                
                if(stepNumber == 0) {
                     if(\$('#phone_system_needs').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please provide an answer.\");
                        \$('#phone_system_needs').focus();
                        return false;
                     }
                }
                if(stepNumber == 2) {
                     if(\$('#decision').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please provide an answer.\");
                        \$('#decision').focus();
                        return false;
                     }
                }
                
                 if(stepNumber == 3) {
                     if(\$('#city').val() == \"\") {
                        \$(\".hidden-errors\").addClass('has-error');    
                        \$(\".hidden-errors\").text(\"Please enter a valid zip code.\");
                        \$('#zip').focus();
                        return false;
                     }
                }
                
                if(stepNumber == 5) {
                     if(\$('#first_name').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your first name.\");
                        \$('#first_name').focus();
                        return false;
                     }
                     if(\$('#last_name').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your last name.\");
                        \$('#last_name').focus();
                        return false;
                     }
                     if(\$('#job_title').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                         \$(\".hidden-errors\").text(\"Please select your job title.\");
                         \$('#job_title').focus();
                        return false;
                     }
                }
                
                if(stepNumber == 6) {
                     if(\$('#company_name').val() == \"\") {
                        \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your company name.\");
                        \$('#company_name').focus();
                        return false;
                     }
                     if(\$('#phone_number').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                        \$(\".hidden-errors\").text(\"Please enter your phone number.\");
                        \$('#phone_number').focus();
                        return false;
                     }
                     if(\$('#number_of_employees').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                         \$(\".hidden-errors\").text(\"Please choose the number of employees.\");
                         \$('#number_of_employees').focus();
                        return false;
                     }
                     if(\$('#industry').val() == \"\") {
                         \$(\".hidden-errors\").addClass('.has-error');    
                         \$(\".hidden-errors\").text(\"Please choose your industry.\");
                         \$('#industry').focus();
                        return false;
                     }
                }
                
                \$(\".hidden-errors\").text(\" \");
                var elmForm = \$(\"#form-step-\" + stepNumber);
                
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });

            \$(\"#smartwizard\").on(\"showStep\", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 7){
                \t\$('.sw-btn-prev').addClass('d-none');
                    \$('.sw-btn-next').addClass('d-none');
                    \$('#btn-finish').removeClass('disabled');
                    \$('#btn-finish').removeClass('d-none');
                }
            });
            \$(\".custom-question-1\").click(function(e){
                e.preventDefault();
                \$('#phone_system_needs').val(\$(this).attr('data-desc'));
                \$('.sw-btn-next').click();
            });
            \$(\".custom-question-2\").click(function(e){
                e.preventDefault();
                \$('#decision').val(\$(this).attr('data-desc'));
                \$('.sw-btn-next').click();
            });
            \$('#zip').keyup(function () {
                if (\$(this).val().length === 5) {
                    \$.ajax({
                        dataType: \"json\",
                        url: '/get-city-state/' + \$(this).val()
                    }).done(function (data) {
\t\t\t\t\t\tif (data.city!='' && data.state!='') {
\t\t\t\t\t\t\t\$('#city').val(data.city);
\t\t\t\t\t\t\t\$('#state').val(data.state);
\t\t\t\t\t\t}\t
                    });
                }

            });

        });
    </script>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Header -->
      <!-- Main Content -->
\t\t<div class=\"container-fluid contentSections mt-5\">
\t\t\t\t\t\t\t
\t\t</div>", "/Users/andrew/Sites/turnkey-site/themes/turnkey/pages/business-phone-systems.htm", "");
    }
}
