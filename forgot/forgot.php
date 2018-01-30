<?php
include ("../app/includes/php/template.php");
# load your login template and call it $template
$template = getTemplate("forgot.html");
# load your header and footer templates also
$header = getTemplate("../app/template/header.html");
$footer = getTemplate("../app/template/footer.html");

# replaces TAG with the file (string)
$template 	=	str_replace("{{header}}",$header,$template);
$template 	=	str_replace("{{footer}}",$footer,$template);

# display the final template
echo $template;