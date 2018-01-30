<?php
// thisincludes the file doCheckCustLogin.php
include "../app/includes/php/doCheckAdminLogin.php";

// this includes the file template.php
include "../app/includes/php/template.php";

# load your login template and call it $template
$template = getTemplate("admin_index.html");
# load your header and footer templates also
$header = getTemplate("../app/template/header.html");
$footer = getTemplate("../app/template/footer.html");

# replaces TAG with the file (string)
$template 	=	str_replace("{{header}}",$header,$template);
$template 	=	str_replace("{{footer}}",$footer,$template);

# display the final template
echo $template;

