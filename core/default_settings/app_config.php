<?php

	//application details
		$apps[$x]['name'] = "Default Settings";
		$apps[$x]['uuid'] = "2c2453c0-1bea-4475-9f44-4d969650de09";
		$apps[$x]['category'] = "Core";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Default settings that apply to all domains.";
		$apps[$x]['description']['es-cl'] = "Configuraciones predeterminadas que aplican a todos los dominios.";
		$apps[$x]['description']['de-de'] = "Grundlegende Einstellungen die für alle Domänen gültig sind.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "Grundlegende Einstellungen die für alle Domänen gültig sind.";
		$apps[$x]['description']['fr-fr'] = "Configurations par défaut applicable à tous les domaines";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "Configurações padrão que se aplicam a todos os domínios.";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['ru-ru'] = "Настройки по умолчанию для всех доменов";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "834b2739-9e99-4345-9b0b-7ec3ca332b67";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "default_setting_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;

	//default settings
		$y = 0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '3bcb4912-e34c-45b0-8612-662783ee8d1b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'server';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'temp';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'dir';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = sys_get_temp_dir();
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'f1a7c2d4-ba3c-49c8-9146-e40eb8873030';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'domain';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'template';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'name';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'default';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'da9aa071-5dd8-4955-b5a6-d3c60ce7d78a';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'domain';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'menu';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'uuid';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'b4750c3f-2a86-b00d-b7d0-345c14eca286';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '500f7a88-e288-4a80-9f0a-b696f9f33cd6';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'domain';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'language';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'code';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'en-us';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c55b28df-0eba-4e8f-a13b-022d5dfd8d22';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'domain';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'time_zone';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'name';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'cb55e6ac-9bb0-4714-b68f-82b39a3b9ec2';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'domain';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'country';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'code';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'us';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c338e26c-0dd5-4ad5-a055-82e2c5ed3f6f';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'domain';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'bridge';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'outbound';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'outbound,loopback,lcr';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '48874632-421d-4829-a6b7-0695c589d85f';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'domain';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'paging';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '100';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set the maximum number of records displayed per page. (Default: 50)';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '57d81b35-bc24-4e92-8436-4335ab5e9d0b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'security';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_length';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '10';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set the required/default length for user/system generated passwords.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '0fa21a56-7515-4c65-b5f8-270cc24ea375';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'security';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_number';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set whether to require at least one number in user passwords.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd5f9acbd-857c-42eb-9e9a-92a850fcb734';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'security';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_lowercase';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set whether to require at least one lowecase letter in user passwords.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '256b0d87-a43e-4618-b96b-541e191879c7';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'security';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_uppercase';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set whether to require at least one uppercase letter in user passwords.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '4209ff1f-6ea8-4b77-81be-bd75e8670785';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'security';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_special';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set whether to require at least one special character in user passwords.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '718b1641-fa3c-4861-b1f3-40635c951888';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'security';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_strength';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '4';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set the default strength for system generated passwords.  Valid Options: 1 - Numeric Only, 2 - Include Lower Apha, 3 - Include Upper Alpha, 4 - Include Special Characters.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '33914c55-9081-4b95-b62e-f1a500088d78';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'security';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'session_rotate';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Whether to regenerate the session ID.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '97a2410b-cfc8-4194-9172-dd5b0acfa9f3';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_auth';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'var';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '9f4a1209-72ba-435b-90e1-4cba48d74509';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'method';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'smtp';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'smtp|sendmail|mail|qmail';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8efff742-eea4-493d-abeb-064457586e26';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_port';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '0';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'use non-default port if enabled and non-zero';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '16f40b7b-293d-4308-81f4-772e0ea4c536';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_from';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'var';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '2976da3a-d8e5-4e25-9f16-463dfa256f4d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_from_name';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'var';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '0bd788c1-3262-4336-92f4-ef7869062380';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_host';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'var';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '49e778a6-22a7-418f-84b9-bfa27e38f2e5';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_username';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'var';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8a5ae059-9bf3-4d6d-ae92-b6cb39766d0a';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_password';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'var';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'fd7441d5-d348-4660-8c0b-6413220c680d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_secure';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'var';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'tls';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'e1c17089-1e75-4e46-9e59-4748bb6a6cec';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'email';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'smtp_validate_certificate';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'set to false to ignore SSL certificate warnings e.g. for self-signed certificates';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8a07ab78-f386-482c-85dd-7ce8127597d6';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'login';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_reset_key';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = generate_password('20', '4');
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Display a Reset Password link on the login box (requires smtp_host be defined).';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '962ac32c-74ce-4cce-b1d9-89f4d921493d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'login';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'domain_name_visible';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Displays a domain input or select box (if domain_name array defined) on the login box.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '796508ee-894d-4566-bb7f-e1269a6e0e26';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'login';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'domain_name';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'pbx1.yourdomain.com';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Domain select option displayed on the login box.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'e20ff5fb-cc63-474b-90f8-f472d2247317';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Voicemail block for users in the admin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '39bdd07e-dca5-4aea-949b-72286bd66fe4';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'missed';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Missed Calls block for users in the admin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '49dbc472-7c68-46b7-84da-986b3e925850';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'recent';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Recent Calls block for users in the admin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '08095792-7fa7-4d6d-9fc4-d1ba8b4f80b7';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'limits';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Domain Limits block for users in the admin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd8ee1c50-0c3f-41b8-879a-d0b9c58e4479';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'counts';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Domain Counts block for users in the admin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '5d96872d-7828-489e-b87a-0e7b75cf1a84';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'call_routing';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Call Routing controls for users in the admin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'f7ca9dc1-b06e-4477-94c6-c660792ebe6c';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'ring_groups';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Ring Group Forwarding controls for users in the admin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '3f727c07-51ec-42fb-82fc-0a711b87dd76';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'caller_id';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable changing Caller ID name and number.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '610cfc85-7a17-4c96-a7c7-a83054710bc1';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Voicemail block for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'e5064608-707a-456d-8b1d-d658e7f1b8f8';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'missed';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Missed Calls block for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'da9dc1a2-5d10-4fa4-82f9-0baebc1f8222';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'recent';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Recent Calls block for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'b15264cf-9200-458f-a71a-5967ee7118a7';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'limits';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Domain Limits block for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '3aa6b8d3-bd6d-4f4f-9a62-104f3452f31b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'counts';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard System Counts block for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '13387e37-bf0a-43ca-a24f-94339bd61208';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'system';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard System Status block for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8ca6fc59-9243-4a4f-9358-006469cf828a';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'call_routing';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Call Routing controls for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd81aa35c-06cd-4013-b985-1119ce4ba6bc';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'caller_id';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable changing Caller ID name and number.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '78bb45d5-8108-4bed-aced-d764575531dc';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'superadmin';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'ring_groups';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Ring Group Forwarding controls for users in the superadmin group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd2bf2781-18c2-44a4-bdf4-68516e68d69c';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'user';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Voicemail block for users in the users group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '22f90e1b-112c-4842-af77-376226e5aa46';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'user';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'missed';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Missed Calls block for users in the users group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'f1bf3d93-29ce-4c3e-8e91-e8ec36d1220b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'user';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'recent';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Recent Calls block for users in the users group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8f74f69b-58f1-4040-9d4e-e949d384a915';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'user';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'call_routing';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Call Routing controls for users in the users group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'f4e9247b-bfd1-40ed-9a1e-920e7d9ed2bb';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'user';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'ring_groups';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable Dashboard Ring Group Forwarding controls for users in the users group.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'ed51b63a-0a42-4c82-84e2-09e9222034ea';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'dashboard';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'user';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'caller_id';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enable changing Caller ID name and number.';
		$y++;

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_default_settings";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "app_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_category";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the category.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_subcategory";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the subcategory.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_value";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the value.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "default_setting_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_languages";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "language_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "language";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The language name/title.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "code";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The language code.";
		$z++;

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_countries";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "country_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "country";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The country name/title.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "iso_a2";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The 2-letter ISO abbreviation.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "iso_a3";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The 3-letter ISO abbreviation.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "num";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The numerical code.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "calling_code";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The calling code.";
		$z++;

?>
