<?php
/*
UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// Traduzido para português para uso pessoal --> Marcelo T. dos Santos

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();

//Account
$lang = array_merge($lang,array(
	"ACCOUNT_USER_ADDED" 		=> "Novo usuário adicionado!",
	"ACCOUNT_SPECIFY_USERNAME" 		=> "Por favor, insira seu nome",
	"ACCOUNT_SPECIFY_PASSWORD" 		=> "Por favor insira sua senha",
	"ACCOUNT_SPECIFY_EMAIL"			=> "Por favor, insira seu endereço de e-mail",
	"ACCOUNT_INVALID_EMAIL"			=> "Endereço de e-mail inválido",
	"ACCOUNT_USER_OR_EMAIL_INVALID"		=> "Nome ou e-mail inválidos",
	"ACCOUNT_USER_OR_PASS_INVALID"		=> "Nome ou senha inválidos",
	"ACCOUNT_USER_OR_PASS_INVALID2"		=> "Nós atualizamos a tecnologia para melhor proteger sua conta.<a href='forgot-password.php'> Por favor, clique aqui para alterar sua senha para a nova plataforma.</a> Sentimos muito pela incoveniência.",
	"ACCOUNT_ALREADY_ACTIVE"		=> "Sua conta já está ativada",
	"ACCOUNT_INACTIVE"			=> "Sua conta ainda não foi ativada. Cheque sua caixa de entrada/spam para seguir as instruções de ativação",
	"ACCOUNT_USER_CHAR_LIMIT"		=> "Seu nome de usuário deve conter entre %m1% e %m2% caracteres",
	"ACCOUNT_DISPLAY_CHAR_LIMIT"		=> "Seu nome que será visualizado deve conter entre %m1% e %m2% caracteres",
	"ACCOUNT_PASS_CHAR_LIMIT"		=> "Sua senha deve conter entre %m1% e %m2% caracteres seguindo as intruções ao lado do campo",
	"ACCOUNT_TITLE_CHAR_LIMIT"		=> "Títulos devem conter entre %m1% and %m2% caracteres",
	"ACCOUNT_PASS_MISMATCH"			=> "A sua senha e confirmação de senha devem ser iguais",
	"ACCOUNT_DISPLAY_INVALID_CHARACTERS"	=> "O nome público deverá conter apenas letras e números",
	"ACCOUNT_USERNAME_IN_USE"		=> "O nome de usuário %m1% já está sendo usado",
	"ACCOUNT_DISPLAYNAME_IN_USE"		=> "Este nome público %m1% já está sendo usado",
	"ACCOUNT_EMAIL_IN_USE"			=> "O e-mail %m1% já está sendo usado",
	"ACCOUNT_LINK_ALREADY_SENT"		=> "Uma mensagem de ativação já foi enviada para este e-mail nas últimas %m1% hora(s)",
	"ACCOUNT_NEW_ACTIVATION_SENT"		=> "Nós enviamos a você um link de ativação! Por favor, cheque sua caixa de e-mail",
	"ACCOUNT_SPECIFY_NEW_PASSWORD"		=> "Por favor, insira sua nova senha",
	"ACCOUNT_SPECIFY_CONFIRM_PASSWORD"	=> "Agora confirme sua nova senha",
	"ACCOUNT_NEW_PASSWORD_LENGTH"		=> "A nova senha deve conter entre %m1% e %m2% caracteres",
	"ACCOUNT_PASSWORD_INVALID"		=> "Current password doesn't match the one we have on record",
	"ACCOUNT_DETAILS_UPDATED"		=> "Account details updated",
	"ACCOUNT_ACTIVATION_MESSAGE"		=> "You will need to activate your account before you can login. Please follow the link below to activate your account. \n\n
	%m1%activate-account.php?token=%m2%",
	"ACCOUNT_ACTIVATION_COMPLETE"		=> "You have successfully activated your account. You can now login <a href=\"login.php\">here</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "You have successfully registered. You can now login <a href=\"login.php\">here</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "You have successfully registered. You will soon receive an activation email.
	You must activate your account before logging in.",
	"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE"	=> "You cannot update with the same password",
	"ACCOUNT_PASSWORD_UPDATED"		=> "Account password updated",
	"ACCOUNT_EMAIL_UPDATED"			=> "Account email updated",
	"ACCOUNT_TOKEN_NOT_FOUND"		=> "Token does not exist / Account is already activated",
	"ACCOUNT_USER_INVALID_CHARACTERS"	=> "Username can only include alpha-numeric characters",
	"ACCOUNT_DELETIONS_SUCCESSFUL"		=> "You have successfully deleted %m1% users",
	"ACCOUNT_MANUALLY_ACTIVATED"		=> "%m1%'s account has been manually activated",
	"ACCOUNT_DISPLAYNAME_UPDATED"		=> "Displayname changed to %m1%",
	"ACCOUNT_TITLE_UPDATED"			=> "%m1%'s title changed to %m2%",
	"ACCOUNT_PERMISSION_ADDED"		=> "Added access to %m1% permission levels",
	"ACCOUNT_PERMISSION_REMOVED"		=> "Removed access from %m1% permission levels",
	"ACCOUNT_INVALID_USERNAME"		=> "Invalid username",
	"CAPTCHA_ERROR"		=> "You failed the Captcha Test, Robot!",
	));

//Configuration
$lang = array_merge($lang,array(
	"CONFIG_NAME_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_URL_CHAR_LIMIT"			=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_EMAIL_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_ACTIVATION_TRUE_FALSE"		=> "Email activation must be either `true` or `false`",
	"CONFIG_ACTIVATION_RESEND_RANGE"	=> "Activation Threshold must be between %m1% and %m2% hours",
	"CONFIG_LANGUAGE_CHAR_LIMIT"		=> "Language path must be between %m1% and %m2% characters in length",
	"CONFIG_LANGUAGE_INVALID"		=> "There is no file for the language key `%m1%`",
	"CONFIG_TEMPLATE_CHAR_LIMIT"		=> "Template path must be between %m1% and %m2% characters in length",
	"CONFIG_TEMPLATE_INVALID"		=> "There is no file for the template key `%m1%`",
	"CONFIG_EMAIL_INVALID"			=> "The email you have entered is not valid",
	"CONFIG_INVALID_URL_END"		=> "Please include the ending / in your site's URL",
	"CONFIG_UPDATE_SUCCESSFUL"		=> "Your site's configuration has been updated. You may need to load a new page for all the settings to take effect",
	));

//Forgot Password
$lang = array_merge($lang,array(
	"FORGOTPASS_INVALID_TOKEN"		=> "Your activation token is not valid",
	"FORGOTPASS_NEW_PASS_EMAIL"		=> "Nós enviamos uma nova senha para seu e-mail",
	"FORGOTPASS_REQUEST_CANNED"		=> "Lost password request cancelled",
	"FORGOTPASS_REQUEST_EXISTS"		=> "There is already a outstanding lost password request on this account",
	"FORGOTPASS_REQUEST_SUCCESS"		=> "We have emailed you instructions on how to regain access to your account",
	));

//Mail
$lang = array_merge($lang,array(
	"MAIL_ERROR"				=> "Fatal error attempting mail, contact your server administrator",
	"MAIL_TEMPLATE_BUILD_ERROR"		=> "Error building email template",
	"MAIL_TEMPLATE_DIRECTORY_ERROR"		=> "Unable to open mail-templates directory. Perhaps try setting the mail directory to %m1%",
	"MAIL_TEMPLATE_FILE_EMPTY"		=> "Template file is empty... nothing to send",
	));

//Miscellaneous
$lang = array_merge($lang,array(
	"CAPTCHA_FAIL"				=> "Falha de segurança",
	"CONFIRM"				=> "Confirmar",
	"DENY"					=> "Deny",
	"SUCCESS"				=> "Sucesso",
	"ERROR"					=> "Erro",
	"NOTHING_TO_UPDATE"			=> "Nada para atualizar",
	"SQL_ERROR"				=> "Fatal SQL error",
	"FEATURE_DISABLED"			=> "This feature is currently disabled",
	"PAGE_PRIVATE_TOGGLED"			=> "This page is now %m1%",
	"PAGE_ACCESS_REMOVED"			=> "Page access removed for %m1% permission level(s)",
	"PAGE_ACCESS_ADDED"			=> "Page access added for %m1% permission level(s)",
	));


	$lang = array_merge($lang,array(
	    "MESSAGE_ARCHIVE_SUCCESSFUL"        => "You have successfully archived %m1% threads",
	    "MESSAGE_UNARCHIVE_SUCCESSFUL"      => "You have successfully unarchived %m1% threads",
	    "MESSAGE_DELETE_SUCCESSFUL"         => "You have successfully deleted %m1% threads",
			"USER_MESSAGE_EXEMPT"         			=> "User is %m1% exempted from messages.",
	    ));

//Permissions
$lang = array_merge($lang,array(
	"PERMISSION_CHAR_LIMIT"			=> "Permission names must be between %m1% and %m2% characters in length",
	"PERMISSION_NAME_IN_USE"		=> "Permission name %m1% is already in use",
	"PERMISSION_DELETIONS_SUCCESSFUL"	=> "Successfully deleted %m1% permission level(s)",
	"PERMISSION_CREATION_SUCCESSFUL"	=> "Successfully created the permission level `%m1%`",
	"PERMISSION_NAME_UPDATE"		=> "Permission level name changed to `%m1%`",
	"PERMISSION_REMOVE_PAGES"		=> "Successfully removed access to %m1% page(s)",
	"PERMISSION_ADD_PAGES"			=> "Successfully added access to %m1% page(s)",
	"PERMISSION_REMOVE_USERS"		=> "Successfully removed %m1% user(s)",
	"PERMISSION_ADD_USERS"			=> "Successfully added %m1% user(s)",
	"CANNOT_DELETE_NEWUSERS"		=> "You cannot delete the default 'new user' group",
	"CANNOT_DELETE_ADMIN"			=> "You cannot delete the default 'admin' group",
	));


?>
