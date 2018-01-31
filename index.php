<?php
include ("app/includes/php/template.php");
# load your login template and call it $template
$template = getTemplate("app/includes/php/doLogin.html");
# load your header and footer templates also
# variable named header is equal to the function getTemplate(pointing at filename: private/template/header.html
$header = getTemplate("app/template/header.html");
# variable named header is equal to the function getTemplate(pointing at filename: private/template/footer.html
$footer = getTemplate("app/template/footer.html");

# replaces TAG(e.g. {{header}} && {{footer}} ) with the files (strings: $header and $footer)
$template 	=	str_replace("{{header}}",$header,$template);
$template 	=	str_replace("{{footer}}",$footer,$template);

# display the final template
echo $template;