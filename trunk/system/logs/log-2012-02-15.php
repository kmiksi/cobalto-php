<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2012-02-15 00:01:25 --> Config Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:01:25 --> URI Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Router Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Output Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Input Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:01:25 --> Language Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Loader Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:01:25 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:01:25 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:01:25 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:01:25 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Session Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:01:25 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '589193543944cb94915a54b9f0e4e526'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:01:25 --> Session routines successfully run
DEBUG - 2012-02-15 00:01:25 --> Controller Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Model Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Model Class Initialized
ERROR - 2012-02-15 00:01:25 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:01:25 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:01:25 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:01:25 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:01:25 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:01:25 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:01:25 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:01:25 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:01:25 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:01:25 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:01:25 --> Final output sent to browser
DEBUG - 2012-02-15 00:01:25 --> Total execution time: 0.0382
DEBUG - 2012-02-15 00:01:25 --> Config Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:01:25 --> URI Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Router Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Output Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Input Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:01:25 --> Language Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Loader Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:01:25 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:01:25 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:01:25 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:01:25 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:01:25 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Session Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:01:25 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '589193543944cb94915a54b9f0e4e526'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:01:25 --> Session routines successfully run
DEBUG - 2012-02-15 00:01:25 --> Controller Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Model Class Initialized
DEBUG - 2012-02-15 00:01:25 --> Model Class Initialized
ERROR - 2012-02-15 00:01:25 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:01:25 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:01:25 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:01:25 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:01:25 --> Final output sent to browser
DEBUG - 2012-02-15 00:01:25 --> Total execution time: 0.0228
DEBUG - 2012-02-15 00:01:39 --> Config Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:01:39 --> URI Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Router Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Output Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Input Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:01:39 --> Language Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Loader Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:01:39 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:01:39 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:01:39 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:01:39 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:01:39 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Session Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:01:39 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '589193543944cb94915a54b9f0e4e526'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:01:39 --> Session routines successfully run
DEBUG - 2012-02-15 00:01:39 --> Controller Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Model Class Initialized
DEBUG - 2012-02-15 00:01:39 --> Model Class Initialized
ERROR - 2012-02-15 00:01:39 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:01:39 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:01:39 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:01:39 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:01:39 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:01:39 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:01:39 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:01:39 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:01:39 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:01:39 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:01:39 --> Final output sent to browser
DEBUG - 2012-02-15 00:01:39 --> Total execution time: 0.0340
DEBUG - 2012-02-15 00:01:40 --> Config Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:01:40 --> URI Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Router Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Output Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Input Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:01:40 --> Language Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Loader Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:01:40 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:01:40 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:01:40 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:01:40 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:01:40 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Session Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:01:40 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '589193543944cb94915a54b9f0e4e526'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:01:40 --> Session routines successfully run
DEBUG - 2012-02-15 00:01:40 --> Controller Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Model Class Initialized
DEBUG - 2012-02-15 00:01:40 --> Model Class Initialized
ERROR - 2012-02-15 00:01:40 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:01:40 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:01:40 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:01:40 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:01:40 --> Final output sent to browser
DEBUG - 2012-02-15 00:01:40 --> Total execution time: 0.0230
DEBUG - 2012-02-15 00:14:32 --> Config Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:14:32 --> URI Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Router Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Output Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Input Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:14:32 --> Language Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Loader Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:14:32 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:14:32 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:14:32 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:14:32 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:14:32 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Session Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:14:32 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '589193543944cb94915a54b9f0e4e526'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:14:32 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:14:32 --> Session routines successfully run
DEBUG - 2012-02-15 00:14:32 --> Controller Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Model Class Initialized
DEBUG - 2012-02-15 00:14:32 --> Model Class Initialized
ERROR - 2012-02-15 00:14:32 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:14:32 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:14:32 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:14:32 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:14:32 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:14:32 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:14:32 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:14:32 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:14:32 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:14:32 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:14:32 --> Final output sent to browser
DEBUG - 2012-02-15 00:14:32 --> Total execution time: 0.0356
DEBUG - 2012-02-15 00:14:33 --> Config Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:14:33 --> URI Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Router Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Output Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Input Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:14:33 --> Language Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Loader Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:14:33 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:14:33 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:14:33 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:14:33 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:14:33 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Session Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:14:33 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '3cb9f58162f1a84e4feac2c35b928f6d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:14:33 --> Session routines successfully run
DEBUG - 2012-02-15 00:14:33 --> Controller Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Model Class Initialized
DEBUG - 2012-02-15 00:14:33 --> Model Class Initialized
ERROR - 2012-02-15 00:14:33 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:14:33 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:14:33 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:14:33 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:14:33 --> Final output sent to browser
DEBUG - 2012-02-15 00:14:33 --> Total execution time: 0.0260
DEBUG - 2012-02-15 00:15:05 --> Config Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:15:05 --> URI Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Router Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Output Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Input Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:15:05 --> Language Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Loader Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:15:05 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 00:15:05 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 00:15:05 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Session Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:15:05 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '3cb9f58162f1a84e4feac2c35b928f6d'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:15:05 --> Session routines successfully run
DEBUG - 2012-02-15 00:15:05 --> Controller Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Config Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:15:05 --> URI Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Router Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Output Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Input Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:15:05 --> Language Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Loader Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:15:05 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:15:05 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 00:15:05 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 00:15:05 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Session Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 00:15:05 --> A session cookie was not found.
DEBUG - 2012-02-15 00:15:05 --> Session routines successfully run
DEBUG - 2012-02-15 00:15:05 --> Controller Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:05 --> Model Class Initialized
ERROR - 2012-02-15 00:15:05 --> Severity: Notice  --> Undefined index: 92c29c1ac4d85b45639f741599c24cd7 /var/www/audigital/autenticacao/controllers/login.php 17
ERROR - 2012-02-15 00:15:05 --> Severity: Notice  --> Undefined index: tema /var/www/audigital/static/_views/headerScripts.php 6
DEBUG - 2012-02-15 00:15:05 --> File loaded: .//views/../../static/_views/headerScripts.php
DEBUG - 2012-02-15 00:15:05 --> File loaded: .//views/../../static/_views/headerLoginView.php
DEBUG - 2012-02-15 00:15:05 --> File loaded: .//views/../../static/_views/footerLoginView.php
DEBUG - 2012-02-15 00:15:05 --> File loaded: .//views/loginView.php
DEBUG - 2012-02-15 00:15:05 --> Final output sent to browser
DEBUG - 2012-02-15 00:15:05 --> Total execution time: 0.0269
DEBUG - 2012-02-15 00:15:08 --> Config Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:15:08 --> URI Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Router Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Output Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Input Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:15:08 --> Language Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Loader Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:15:08 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 00:15:08 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 00:15:08 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Session Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:15:08 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:15:08 --> Session routines successfully run
DEBUG - 2012-02-15 00:15:08 --> Controller Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
ERROR - 2012-02-15 00:15:08 --> SELECT u.id,u.pessoa_id,u.login,u.senha,p.nome as nome_pessoa,p.email,u.avatar_id,up.nome_gerado,up.nome_original,u.tema
FROM (usuarios as u)
LEFT JOIN uploads as up ON up.id = u.avatar_id
JOIN pessoas as p ON p.id = u.pessoa_id
WHERE `p`.`email` = 'admin'
OR `u`.`login` = 'admin'
OR `p`.`cpf` = 'admin'
DEBUG - 2012-02-15 00:15:08 --> Final output sent to browser
DEBUG - 2012-02-15 00:15:08 --> Total execution time: 0.0376
DEBUG - 2012-02-15 00:15:08 --> Config Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:15:08 --> URI Class Initialized
DEBUG - 2012-02-15 00:15:08 --> No URI present. Default controller set.
DEBUG - 2012-02-15 00:15:08 --> Router Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Output Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Input Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:15:08 --> Language Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Loader Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:15:08 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:15:08 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:15:08 --> Language file loaded: language/pt-br/dashboard_labels_lang.php
DEBUG - 2012-02-15 00:15:08 --> Language file loaded: language/pt-br/dashboard_messages_lang.php
DEBUG - 2012-02-15 00:15:08 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Session Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:15:08 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:15:08 --> Session routines successfully run
DEBUG - 2012-02-15 00:15:08 --> Controller Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:08 --> Model Class Initialized
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Undefined variable: path_bread /var/www/audigital/static/_views/headerGlobalView.php 16
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Undefined variable: path_bread /var/www/audigital/static/_views/headerGlobalView.php 16
DEBUG - 2012-02-15 00:15:08 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:15:08 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:15:08 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:15:08 --> File loaded: .//views/inicioView.php
ERROR - 2012-02-15 00:15:08 --> SELECT *
FROM (`programas`)
WHERE `link` = 'dashboard/'
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/audigital/system/filters/auth.php 32
ERROR - 2012-02-15 00:15:08 --> SELECT *
FROM (`programas`)
WHERE `link` = 'dashboard'
ERROR - 2012-02-15 00:15:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/audigital/system/filters/auth.php 32
ERROR - 2012-02-15 00:15:08 --> SELECT *
FROM (`programas`)
WHERE `link` = ''
DEBUG - 2012-02-15 00:15:08 --> Final output sent to browser
DEBUG - 2012-02-15 00:15:08 --> Total execution time: 0.0203
DEBUG - 2012-02-15 00:15:12 --> Config Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:15:12 --> URI Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Router Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Output Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Input Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:15:12 --> Language Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Loader Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:15:12 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:15:12 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:15:12 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:15:12 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Session Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:15:12 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:15:12 --> Session routines successfully run
DEBUG - 2012-02-15 00:15:12 --> Controller Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Model Class Initialized
ERROR - 2012-02-15 00:15:12 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:15:12 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:15:12 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:15:12 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:15:12 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:15:12 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:15:12 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:15:12 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:15:12 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:15:12 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:15:12 --> Final output sent to browser
DEBUG - 2012-02-15 00:15:12 --> Total execution time: 0.0388
DEBUG - 2012-02-15 00:15:12 --> Config Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:15:12 --> URI Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Router Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Output Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Input Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:15:12 --> Language Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Loader Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:15:12 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:15:12 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:15:12 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:15:12 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:15:12 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Session Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:15:12 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:15:12 --> Session routines successfully run
DEBUG - 2012-02-15 00:15:12 --> Controller Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Model Class Initialized
DEBUG - 2012-02-15 00:15:12 --> Model Class Initialized
ERROR - 2012-02-15 00:15:12 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:15:12 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:15:12 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:15:12 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:15:12 --> Final output sent to browser
DEBUG - 2012-02-15 00:15:12 --> Total execution time: 0.0187
DEBUG - 2012-02-15 00:16:03 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:03 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:03 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:03 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:03 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:03 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:03 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:03 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:03 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:03 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Model Class Initialized
ERROR - 2012-02-15 00:16:03 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:03 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:03 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:03 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:03 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:03 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:03 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:03 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:03 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:03 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:03 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:03 --> Total execution time: 0.0342
DEBUG - 2012-02-15 00:16:03 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:03 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:03 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:03 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:03 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:03 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:03 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:03 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:03 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:03 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:03 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:03 --> Model Class Initialized
ERROR - 2012-02-15 00:16:03 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:03 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:03 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:03 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:03 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:03 --> Total execution time: 0.0313
DEBUG - 2012-02-15 00:16:10 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:10 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:10 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:10 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:10 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:10 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:10 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:10 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:10 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:10 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Model Class Initialized
ERROR - 2012-02-15 00:16:10 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:10 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:10 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:10 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:10 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:10 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:10 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:10 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:10 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:10 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:10 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:10 --> Total execution time: 0.0336
DEBUG - 2012-02-15 00:16:10 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:10 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:10 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:10 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:10 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:10 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:10 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:10 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:10 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:10 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:10 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:10 --> Model Class Initialized
ERROR - 2012-02-15 00:16:10 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:10 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:10 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:10 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:10 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:10 --> Total execution time: 0.0293
DEBUG - 2012-02-15 00:16:11 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:11 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:11 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:11 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:11 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:11 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:11 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:11 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:11 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:11 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Model Class Initialized
ERROR - 2012-02-15 00:16:11 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:11 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:11 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:11 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:11 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:11 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:11 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:11 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:11 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:11 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:11 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:11 --> Total execution time: 0.0276
DEBUG - 2012-02-15 00:16:11 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:11 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:11 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:11 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:11 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:11 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:11 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:11 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:11 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:11 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:11 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:11 --> Model Class Initialized
ERROR - 2012-02-15 00:16:11 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:11 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:11 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:11 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:11 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:11 --> Total execution time: 0.0199
DEBUG - 2012-02-15 00:16:12 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:12 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:12 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:12 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:12 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:12 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:12 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:12 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:12 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:12 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Model Class Initialized
ERROR - 2012-02-15 00:16:12 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:12 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:12 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:12 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:12 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:12 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:12 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:12 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:12 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:12 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:12 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:12 --> Total execution time: 0.0339
DEBUG - 2012-02-15 00:16:12 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:12 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:12 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:12 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:12 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:12 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:12 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:12 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:12 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:12 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:12 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:12 --> Model Class Initialized
ERROR - 2012-02-15 00:16:12 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:12 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:12 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:12 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:12 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:12 --> Total execution time: 0.0248
DEBUG - 2012-02-15 00:16:13 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:13 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:13 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:13 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:13 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:13 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:13 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:13 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:13 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:16:13 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:13 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Model Class Initialized
ERROR - 2012-02-15 00:16:13 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:13 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:13 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:13 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:13 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:13 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:13 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:13 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:13 --> Total execution time: 0.0352
DEBUG - 2012-02-15 00:16:13 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:13 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:13 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:13 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:13 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:13 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:13 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:13 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:13 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:13 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:16:13 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:13 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:13 --> Model Class Initialized
ERROR - 2012-02-15 00:16:13 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:13 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:13 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:13 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:13 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:13 --> Total execution time: 0.0243
DEBUG - 2012-02-15 00:16:14 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:14 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:14 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:14 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:14 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:14 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:14 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:14 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:14 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:14 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:14 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:14 --> Model Class Initialized
ERROR - 2012-02-15 00:16:14 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:14 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:14 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:14 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:14 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:14 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:14 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:14 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:14 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:14 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:14 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:14 --> Total execution time: 0.0305
DEBUG - 2012-02-15 00:16:15 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:15 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:15 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:15 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:15 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:15 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:15 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:15 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:15 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:15 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Model Class Initialized
ERROR - 2012-02-15 00:16:15 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:15 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:15 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:15 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:15 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:15 --> Total execution time: 0.0250
DEBUG - 2012-02-15 00:16:15 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:15 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:15 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:15 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:15 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:15 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:15 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:15 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:15 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:15 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:15 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:15 --> Model Class Initialized
ERROR - 2012-02-15 00:16:15 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:15 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:15 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:15 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:15 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:15 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:15 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:15 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:15 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:15 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:15 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:15 --> Total execution time: 0.0365
DEBUG - 2012-02-15 00:16:16 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:16 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:16 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:16 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:16 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:16 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:16 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:16 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:16 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:16 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:16 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:16 --> Model Class Initialized
ERROR - 2012-02-15 00:16:16 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:16 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:16 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:16 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:16 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:16 --> Total execution time: 0.0248
DEBUG - 2012-02-15 00:16:20 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:20 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:20 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:20 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:20 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:20 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:20 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:20 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:20 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:20 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Model Class Initialized
ERROR - 2012-02-15 00:16:20 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:20 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:20 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:20 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:20 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:20 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:20 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:20 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:20 --> Total execution time: 0.0312
DEBUG - 2012-02-15 00:16:20 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:20 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:20 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:20 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:20 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:20 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:20 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:20 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:20 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:20 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:20 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:20 --> Model Class Initialized
ERROR - 2012-02-15 00:16:20 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:20 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:20 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:20 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:20 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:20 --> Total execution time: 0.0256
DEBUG - 2012-02-15 00:16:21 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:21 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:21 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:21 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:21 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:21 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:21 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:21 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:21 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:21 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Model Class Initialized
ERROR - 2012-02-15 00:16:21 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:21 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:21 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:21 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:21 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:21 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:21 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:21 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:21 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:21 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:21 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:21 --> Total execution time: 0.0237
DEBUG - 2012-02-15 00:16:21 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:21 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:21 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:21 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:21 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:21 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:21 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:21 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:21 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:21 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:21 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:21 --> Model Class Initialized
ERROR - 2012-02-15 00:16:21 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:21 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:21 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:21 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:21 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:21 --> Total execution time: 0.0249
DEBUG - 2012-02-15 00:16:22 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:22 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:22 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:22 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:22 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:22 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:22 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:22 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:22 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:22 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:22 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:22 --> Model Class Initialized
ERROR - 2012-02-15 00:16:22 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:22 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:22 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:22 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:22 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:22 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:22 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:22 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:22 --> Total execution time: 0.0368
DEBUG - 2012-02-15 00:16:23 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:23 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:23 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:23 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:23 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:23 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:23 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:23 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:23 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:23 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:23 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:23 --> Model Class Initialized
ERROR - 2012-02-15 00:16:23 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:23 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:23 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:23 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:23 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:23 --> Total execution time: 0.0273
DEBUG - 2012-02-15 00:16:25 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:25 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:25 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:25 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:25 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:25 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:25 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:25 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:25 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:16:25 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:25 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Model Class Initialized
ERROR - 2012-02-15 00:16:25 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:25 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:25 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:25 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:25 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:25 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:25 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:25 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:25 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:25 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:25 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:25 --> Total execution time: 0.0298
DEBUG - 2012-02-15 00:16:25 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:25 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:25 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:25 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:25 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:25 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:25 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:25 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:25 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:25 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:16:25 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:25 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:25 --> Model Class Initialized
ERROR - 2012-02-15 00:16:25 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:25 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:25 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:25 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:25 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:25 --> Total execution time: 0.0226
DEBUG - 2012-02-15 00:16:26 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:26 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:26 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:26 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:26 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:26 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:26 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:26 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:26 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:26 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Model Class Initialized
ERROR - 2012-02-15 00:16:26 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:26 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:26 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:26 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:26 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:26 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:26 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:26 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:26 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:26 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:26 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:26 --> Total execution time: 0.0377
DEBUG - 2012-02-15 00:16:26 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:26 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:26 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:26 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:26 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:26 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:26 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:26 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:26 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:26 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:26 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:26 --> Model Class Initialized
ERROR - 2012-02-15 00:16:26 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:26 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:26 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:26 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:26 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:26 --> Total execution time: 0.0232
DEBUG - 2012-02-15 00:16:27 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:27 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:27 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:27 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:27 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:27 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:27 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:27 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:27 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:27 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Model Class Initialized
ERROR - 2012-02-15 00:16:27 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:27 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:27 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:27 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:27 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:27 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:27 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:27 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:27 --> Total execution time: 0.0299
DEBUG - 2012-02-15 00:16:27 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:27 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:27 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:27 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:27 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:27 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:27 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:27 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:27 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:27 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:27 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:27 --> Model Class Initialized
ERROR - 2012-02-15 00:16:27 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:27 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:27 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:27 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:27 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:27 --> Total execution time: 0.0264
DEBUG - 2012-02-15 00:16:28 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:28 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:28 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:28 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:28 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:28 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:28 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:28 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:28 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:28 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Model Class Initialized
ERROR - 2012-02-15 00:16:28 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:28 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:28 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:28 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:28 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:28 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:28 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:28 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:28 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:28 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:28 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:28 --> Total execution time: 0.0266
DEBUG - 2012-02-15 00:16:28 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:28 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:28 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:28 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:28 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:28 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:28 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:28 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:28 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:28 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:28 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:28 --> Model Class Initialized
ERROR - 2012-02-15 00:16:28 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:28 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:28 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:28 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:28 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:28 --> Total execution time: 0.0248
DEBUG - 2012-02-15 00:16:29 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:29 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:29 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:29 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:29 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:29 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:29 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:29 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:29 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:29 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Model Class Initialized
ERROR - 2012-02-15 00:16:29 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:29 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:29 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:29 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:29 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:29 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:29 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:29 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:29 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:29 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:29 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:29 --> Total execution time: 0.0373
DEBUG - 2012-02-15 00:16:29 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:29 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:29 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:29 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:29 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:29 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:29 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:29 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:29 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:29 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:29 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:29 --> Model Class Initialized
ERROR - 2012-02-15 00:16:29 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:29 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:29 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:29 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:29 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:29 --> Total execution time: 0.0251
DEBUG - 2012-02-15 00:16:30 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:30 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:30 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:30 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:30 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:30 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:30 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:30 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:30 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:30 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Model Class Initialized
ERROR - 2012-02-15 00:16:30 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:30 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:30 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:30 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:30 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:30 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:30 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:30 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:30 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:30 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:30 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:30 --> Total execution time: 0.0303
DEBUG - 2012-02-15 00:16:30 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:30 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:30 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:30 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:30 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:30 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:30 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:30 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:30 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:30 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:30 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:30 --> Model Class Initialized
ERROR - 2012-02-15 00:16:30 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:30 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:30 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:30 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:30 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:30 --> Total execution time: 0.0262
DEBUG - 2012-02-15 00:16:31 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:31 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:31 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:31 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:31 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:31 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:31 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:31 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:31 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:31 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Model Class Initialized
ERROR - 2012-02-15 00:16:31 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:31 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:31 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:31 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:31 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:31 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:31 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:31 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:31 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:31 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:31 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:31 --> Total execution time: 0.0278
DEBUG - 2012-02-15 00:16:31 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:31 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:31 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:31 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:31 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:31 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:31 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:31 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:31 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:31 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:31 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:31 --> Model Class Initialized
ERROR - 2012-02-15 00:16:31 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:31 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:31 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:31 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:31 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:31 --> Total execution time: 0.0254
DEBUG - 2012-02-15 00:16:32 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:32 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:32 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:32 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:32 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:32 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:32 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:32 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:32 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:16:32 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:32 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Model Class Initialized
ERROR - 2012-02-15 00:16:32 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:32 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:32 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:32 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:32 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:32 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:32 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:32 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:32 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:32 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:32 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:32 --> Total execution time: 0.0324
DEBUG - 2012-02-15 00:16:32 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:32 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:32 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:32 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:32 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:32 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:32 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:32 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:32 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:32 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:16:32 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:32 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:32 --> Model Class Initialized
ERROR - 2012-02-15 00:16:32 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:32 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:32 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:32 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:32 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:32 --> Total execution time: 0.0216
DEBUG - 2012-02-15 00:16:33 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:33 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:33 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:33 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:33 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:33 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:33 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:33 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:33 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:33 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Model Class Initialized
ERROR - 2012-02-15 00:16:33 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:33 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:33 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:33 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:33 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:33 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:33 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:33 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:33 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:33 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:33 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:33 --> Total execution time: 0.0201
DEBUG - 2012-02-15 00:16:33 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:33 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:33 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:33 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:33 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:33 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:33 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:33 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:33 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:33 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:33 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:33 --> Model Class Initialized
ERROR - 2012-02-15 00:16:33 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:33 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:33 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:33 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:33 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:33 --> Total execution time: 0.0217
DEBUG - 2012-02-15 00:16:41 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:41 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:41 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:41 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:41 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:41 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:41 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:41 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:41 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:41 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Model Class Initialized
ERROR - 2012-02-15 00:16:41 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:41 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:41 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:41 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:41 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:41 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:41 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:41 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:41 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:41 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:41 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:41 --> Total execution time: 0.0341
DEBUG - 2012-02-15 00:16:41 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:41 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:41 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:41 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:41 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:41 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:41 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:41 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:41 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:41 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:41 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:41 --> Model Class Initialized
ERROR - 2012-02-15 00:16:41 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:41 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:41 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:41 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:41 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:41 --> Total execution time: 0.0285
DEBUG - 2012-02-15 00:16:42 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:42 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:42 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:42 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:42 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:42 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:42 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:42 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:42 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:42 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Model Class Initialized
ERROR - 2012-02-15 00:16:42 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:42 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:42 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:42 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:42 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:42 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:42 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:42 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:42 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:42 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:42 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:42 --> Total execution time: 0.0226
DEBUG - 2012-02-15 00:16:42 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:42 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:42 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:42 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:42 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:42 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:42 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:42 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:42 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:42 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:42 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:42 --> Model Class Initialized
ERROR - 2012-02-15 00:16:42 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:42 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:42 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:42 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:42 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:42 --> Total execution time: 0.0239
DEBUG - 2012-02-15 00:16:43 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:43 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:43 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:43 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:43 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:43 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:43 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:43 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:43 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:43 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Model Class Initialized
ERROR - 2012-02-15 00:16:43 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:43 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:43 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:43 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:43 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:43 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:43 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:43 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:43 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:43 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:43 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:43 --> Total execution time: 0.0197
DEBUG - 2012-02-15 00:16:43 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:43 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:43 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:43 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:43 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:43 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:43 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:43 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:43 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:43 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:43 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:43 --> Model Class Initialized
ERROR - 2012-02-15 00:16:43 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:43 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:43 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:43 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:43 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:43 --> Total execution time: 0.0242
DEBUG - 2012-02-15 00:16:44 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:44 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:44 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:44 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:44 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:44 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:44 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:44 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:44 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:44 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:44 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:44 --> Model Class Initialized
ERROR - 2012-02-15 00:16:44 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:44 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:44 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:44 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:44 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:44 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:44 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:44 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:44 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:44 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:44 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:44 --> Total execution time: 0.0196
DEBUG - 2012-02-15 00:16:45 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:45 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:45 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:45 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:45 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:45 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:45 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:45 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:45 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:45 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:45 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:45 --> Model Class Initialized
ERROR - 2012-02-15 00:16:45 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:45 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:45 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:45 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:45 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:45 --> Total execution time: 0.0264
DEBUG - 2012-02-15 00:16:46 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:46 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:46 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:46 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:46 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:46 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:46 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:46 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:46 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:46 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Model Class Initialized
ERROR - 2012-02-15 00:16:46 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:46 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:46 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:46 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:46 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:46 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:46 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:46 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:46 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:46 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:46 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:46 --> Total execution time: 0.0204
DEBUG - 2012-02-15 00:16:46 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:46 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:46 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:46 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:46 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:46 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:46 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:46 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:46 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:46 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:46 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:46 --> Model Class Initialized
ERROR - 2012-02-15 00:16:46 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:46 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:46 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:46 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:46 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:46 --> Total execution time: 0.0257
DEBUG - 2012-02-15 00:16:47 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:47 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:47 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:47 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:47 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:47 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:47 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:47 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:47 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:47 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Model Class Initialized
ERROR - 2012-02-15 00:16:47 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:47 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:47 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:47 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:47 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:47 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:47 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:47 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:47 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:47 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:47 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:47 --> Total execution time: 0.0338
DEBUG - 2012-02-15 00:16:47 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:47 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:47 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:47 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:47 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:47 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:47 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:47 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:47 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:47 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:47 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:47 --> Model Class Initialized
ERROR - 2012-02-15 00:16:47 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:47 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:47 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:47 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:47 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:47 --> Total execution time: 0.0199
DEBUG - 2012-02-15 00:16:48 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:48 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:48 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:48 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:48 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:48 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:48 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:48 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:48 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:48 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Model Class Initialized
ERROR - 2012-02-15 00:16:48 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:16:48 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:16:48 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:16:48 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:16:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:16:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:16:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:16:48 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:16:48 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:16:48 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:16:48 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:48 --> Total execution time: 0.0360
DEBUG - 2012-02-15 00:16:48 --> Config Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:16:48 --> URI Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Router Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Output Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Input Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:16:48 --> Language Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Loader Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:16:48 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:16:48 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:16:48 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:16:48 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:16:48 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Session Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:16:48 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:16:48 --> Session routines successfully run
DEBUG - 2012-02-15 00:16:48 --> Controller Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Model Class Initialized
DEBUG - 2012-02-15 00:16:48 --> Model Class Initialized
ERROR - 2012-02-15 00:16:48 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:16:48 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:16:48 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:16:48 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:16:48 --> Final output sent to browser
DEBUG - 2012-02-15 00:16:48 --> Total execution time: 0.0255
DEBUG - 2012-02-15 00:20:41 --> Config Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:20:41 --> URI Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Router Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Output Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Input Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:20:41 --> Language Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Loader Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:20:41 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:20:41 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:20:41 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:20:41 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Session Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:20:41 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f38d10a2d1f83e5265e6ce7b13082413'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:20:41 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:20:41 --> Session routines successfully run
DEBUG - 2012-02-15 00:20:41 --> Controller Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Model Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Model Class Initialized
ERROR - 2012-02-15 00:20:41 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:20:41 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:20:41 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:20:41 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:20:41 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:20:41 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:20:41 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:20:41 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:20:41 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:20:41 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:20:41 --> Final output sent to browser
DEBUG - 2012-02-15 00:20:41 --> Total execution time: 0.0264
DEBUG - 2012-02-15 00:20:41 --> Config Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:20:41 --> URI Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Router Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Output Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Input Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:20:41 --> Language Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Loader Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:20:41 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:20:41 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:20:41 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:20:41 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:20:41 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Session Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:20:41 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:20:41 --> Session garbage collection performed.
DEBUG - 2012-02-15 00:20:41 --> Session routines successfully run
DEBUG - 2012-02-15 00:20:41 --> Controller Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Model Class Initialized
DEBUG - 2012-02-15 00:20:41 --> Model Class Initialized
ERROR - 2012-02-15 00:20:41 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:20:41 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:20:41 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:20:41 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:20:41 --> Final output sent to browser
DEBUG - 2012-02-15 00:20:41 --> Total execution time: 0.0268
DEBUG - 2012-02-15 00:21:10 --> Config Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:21:10 --> URI Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Router Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Output Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Input Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:21:10 --> Language Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Loader Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:21:10 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:21:10 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:21:10 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:21:10 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Session Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:21:10 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:21:10 --> Session routines successfully run
DEBUG - 2012-02-15 00:21:10 --> Controller Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Model Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Model Class Initialized
ERROR - 2012-02-15 00:21:10 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:21:10 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:21:10 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:21:10 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:21:10 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:21:10 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:21:10 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:21:10 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:21:10 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:21:10 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:21:10 --> Final output sent to browser
DEBUG - 2012-02-15 00:21:10 --> Total execution time: 0.0446
DEBUG - 2012-02-15 00:21:10 --> Config Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:21:10 --> URI Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Router Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Output Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Input Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:21:10 --> Language Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Loader Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:21:10 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:21:10 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:21:10 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:21:10 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:21:10 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Session Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:21:10 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:21:10 --> Session routines successfully run
DEBUG - 2012-02-15 00:21:10 --> Controller Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Model Class Initialized
DEBUG - 2012-02-15 00:21:10 --> Model Class Initialized
ERROR - 2012-02-15 00:21:10 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:21:10 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:21:10 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:21:10 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:21:10 --> Final output sent to browser
DEBUG - 2012-02-15 00:21:10 --> Total execution time: 0.0230
DEBUG - 2012-02-15 00:21:46 --> Config Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:21:46 --> URI Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Router Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Output Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Input Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:21:46 --> Language Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Loader Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:21:46 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:21:46 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:21:46 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:21:46 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Session Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:21:46 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:21:46 --> Session routines successfully run
DEBUG - 2012-02-15 00:21:46 --> Controller Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Model Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Model Class Initialized
ERROR - 2012-02-15 00:21:46 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:21:46 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:21:46 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:21:46 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:21:46 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:21:46 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:21:46 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:21:46 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:21:46 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:21:46 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:21:46 --> Final output sent to browser
DEBUG - 2012-02-15 00:21:46 --> Total execution time: 0.0321
DEBUG - 2012-02-15 00:21:46 --> Config Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:21:46 --> URI Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Router Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Output Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Input Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:21:46 --> Language Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Loader Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:21:46 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:21:46 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:21:46 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:21:46 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:21:46 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Session Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:21:46 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:21:46 --> Session routines successfully run
DEBUG - 2012-02-15 00:21:46 --> Controller Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Model Class Initialized
DEBUG - 2012-02-15 00:21:46 --> Model Class Initialized
ERROR - 2012-02-15 00:21:46 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:21:46 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:21:46 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:21:46 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:21:46 --> Final output sent to browser
DEBUG - 2012-02-15 00:21:46 --> Total execution time: 0.0234
DEBUG - 2012-02-15 00:22:06 --> Config Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:22:06 --> URI Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Router Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Output Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Input Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:22:06 --> Language Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Loader Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:22:06 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:22:06 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:22:06 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:22:06 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:22:06 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Session Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:22:06 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:22:06 --> Session routines successfully run
DEBUG - 2012-02-15 00:22:06 --> Controller Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Model Class Initialized
DEBUG - 2012-02-15 00:22:06 --> Model Class Initialized
ERROR - 2012-02-15 00:22:06 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:22:06 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:22:06 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:22:06 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:22:06 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:22:06 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:22:06 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:22:06 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:22:06 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:22:06 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:22:06 --> Final output sent to browser
DEBUG - 2012-02-15 00:22:06 --> Total execution time: 0.0363
DEBUG - 2012-02-15 00:22:07 --> Config Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:22:07 --> URI Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Router Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Output Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Input Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:22:07 --> Language Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Loader Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:22:07 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:22:07 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:22:07 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:22:07 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Session Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:22:07 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:22:07 --> Session routines successfully run
DEBUG - 2012-02-15 00:22:07 --> Controller Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Model Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Model Class Initialized
ERROR - 2012-02-15 00:22:07 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:22:07 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:22:07 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:22:07 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:22:07 --> Final output sent to browser
DEBUG - 2012-02-15 00:22:07 --> Total execution time: 0.0271
DEBUG - 2012-02-15 00:22:07 --> Config Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:22:07 --> URI Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Router Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Output Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Input Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:22:07 --> Language Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Loader Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:22:07 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:22:07 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:22:07 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:22:07 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:22:07 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Session Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:22:07 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:22:07 --> Session routines successfully run
DEBUG - 2012-02-15 00:22:07 --> Controller Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Model Class Initialized
DEBUG - 2012-02-15 00:22:07 --> Model Class Initialized
ERROR - 2012-02-15 00:22:07 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:22:07 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:22:07 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:22:07 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:22:07 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:22:07 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:22:07 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:22:07 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:22:07 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:22:07 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:22:07 --> Final output sent to browser
DEBUG - 2012-02-15 00:22:07 --> Total execution time: 0.0195
DEBUG - 2012-02-15 00:22:08 --> Config Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:22:08 --> URI Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Router Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Output Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Input Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:22:08 --> Language Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Loader Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:22:08 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:22:08 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:22:08 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:22:08 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:22:08 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Session Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:22:08 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:22:08 --> Session routines successfully run
DEBUG - 2012-02-15 00:22:08 --> Controller Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:22:08 --> Model Class Initialized
ERROR - 2012-02-15 00:22:08 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:22:08 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:22:08 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:22:08 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:22:08 --> Final output sent to browser
DEBUG - 2012-02-15 00:22:08 --> Total execution time: 0.0254
DEBUG - 2012-02-15 00:22:16 --> Config Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:22:16 --> URI Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Router Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Output Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Input Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:22:16 --> Language Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Loader Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:22:16 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:22:16 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:22:16 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:22:16 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:22:16 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Session Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:22:16 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:22:16 --> Session routines successfully run
DEBUG - 2012-02-15 00:22:16 --> Controller Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Model Class Initialized
DEBUG - 2012-02-15 00:22:16 --> Model Class Initialized
DEBUG - 2012-02-15 00:22:22 --> Final output sent to browser
DEBUG - 2012-02-15 00:22:22 --> Total execution time: 5.4711
DEBUG - 2012-02-15 00:23:48 --> Config Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:23:48 --> URI Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Router Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Output Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Input Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:23:48 --> Language Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Loader Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:23:48 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:23:48 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:23:48 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:23:48 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:23:48 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Session Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:23:48 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:23:48 --> Session routines successfully run
DEBUG - 2012-02-15 00:23:48 --> Controller Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Model Class Initialized
DEBUG - 2012-02-15 00:23:48 --> Model Class Initialized
ERROR - 2012-02-15 00:23:48 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:23:48 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:23:48 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:23:48 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:23:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:23:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:23:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:23:48 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:23:48 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:23:48 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:23:48 --> Final output sent to browser
DEBUG - 2012-02-15 00:23:48 --> Total execution time: 0.0352
DEBUG - 2012-02-15 00:23:49 --> Config Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:23:49 --> URI Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Router Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Output Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Input Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:23:49 --> Language Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Loader Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:23:49 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Session Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:23:49 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:23:49 --> Session routines successfully run
DEBUG - 2012-02-15 00:23:49 --> Controller Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Model Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Model Class Initialized
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:23:49 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:23:49 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:23:49 --> Final output sent to browser
DEBUG - 2012-02-15 00:23:49 --> Total execution time: 0.0221
DEBUG - 2012-02-15 00:23:49 --> Config Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:23:49 --> URI Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Router Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Output Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Input Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:23:49 --> Language Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Loader Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:23:49 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Session Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:23:49 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:23:49 --> Session routines successfully run
DEBUG - 2012-02-15 00:23:49 --> Controller Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Model Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Model Class Initialized
ERROR - 2012-02-15 00:23:49 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:23:49 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:23:49 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:23:49 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:23:49 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:23:49 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:23:49 --> Final output sent to browser
DEBUG - 2012-02-15 00:23:49 --> Total execution time: 0.0289
DEBUG - 2012-02-15 00:23:49 --> Config Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:23:49 --> URI Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Router Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Output Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Input Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:23:49 --> Language Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Loader Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:23:49 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:23:49 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:23:49 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Session Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:23:49 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:23:49 --> Session routines successfully run
DEBUG - 2012-02-15 00:23:49 --> Controller Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Model Class Initialized
DEBUG - 2012-02-15 00:23:49 --> Model Class Initialized
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:23:49 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:23:49 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:23:49 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:23:49 --> Final output sent to browser
DEBUG - 2012-02-15 00:23:49 --> Total execution time: 0.0255
DEBUG - 2012-02-15 00:23:52 --> Config Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:23:52 --> URI Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Router Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Output Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Input Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:23:52 --> Language Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Loader Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:23:52 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:23:52 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:23:52 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:23:52 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Session Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:23:52 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:23:52 --> Session routines successfully run
DEBUG - 2012-02-15 00:23:52 --> Controller Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Model Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Model Class Initialized
ERROR - 2012-02-15 00:23:52 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:23:52 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:23:52 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:23:52 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:23:52 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:23:52 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:23:52 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:23:52 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:23:52 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:23:52 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:23:52 --> Final output sent to browser
DEBUG - 2012-02-15 00:23:52 --> Total execution time: 0.0312
DEBUG - 2012-02-15 00:23:52 --> Config Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:23:52 --> URI Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Router Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Output Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Input Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:23:52 --> Language Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Loader Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:23:52 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:23:52 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:23:52 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:23:52 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:23:52 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Session Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:23:52 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:23:52 --> Session routines successfully run
DEBUG - 2012-02-15 00:23:52 --> Controller Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Model Class Initialized
DEBUG - 2012-02-15 00:23:52 --> Model Class Initialized
ERROR - 2012-02-15 00:23:52 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:23:52 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:23:52 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:23:52 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:23:52 --> Final output sent to browser
DEBUG - 2012-02-15 00:23:52 --> Total execution time: 0.0245
DEBUG - 2012-02-15 00:24:05 --> Config Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:24:05 --> URI Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Router Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Output Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Input Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:24:05 --> Language Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Loader Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:24:05 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:24:05 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:24:05 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:24:05 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:24:05 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Session Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:24:05 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:24:05 --> Session routines successfully run
DEBUG - 2012-02-15 00:24:05 --> Controller Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Model Class Initialized
DEBUG - 2012-02-15 00:24:05 --> Model Class Initialized
ERROR - 2012-02-15 00:24:05 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:24:05 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:24:05 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:24:05 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:24:05 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:24:05 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:24:05 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:24:05 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:24:05 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:24:05 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:24:05 --> Final output sent to browser
DEBUG - 2012-02-15 00:24:05 --> Total execution time: 0.0319
DEBUG - 2012-02-15 00:24:06 --> Config Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:24:06 --> URI Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Router Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Output Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Input Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:24:06 --> Language Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Loader Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:24:06 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:24:06 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:24:06 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:24:06 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:24:06 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Session Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:24:06 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:24:06 --> Session routines successfully run
DEBUG - 2012-02-15 00:24:06 --> Controller Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Model Class Initialized
DEBUG - 2012-02-15 00:24:06 --> Model Class Initialized
ERROR - 2012-02-15 00:24:06 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:24:06 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:24:06 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:24:06 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:24:06 --> Final output sent to browser
DEBUG - 2012-02-15 00:24:06 --> Total execution time: 0.0241
DEBUG - 2012-02-15 00:24:43 --> Config Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:24:43 --> URI Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Router Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Output Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Input Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:24:43 --> Language Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Loader Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:24:43 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:24:43 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:24:43 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:24:43 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Session Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:24:43 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:24:43 --> Session routines successfully run
DEBUG - 2012-02-15 00:24:43 --> Controller Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Model Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Model Class Initialized
ERROR - 2012-02-15 00:24:43 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:24:43 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:24:43 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:24:43 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:24:43 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:24:43 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:24:43 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:24:43 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:24:43 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:24:43 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:24:43 --> Final output sent to browser
DEBUG - 2012-02-15 00:24:43 --> Total execution time: 0.0243
DEBUG - 2012-02-15 00:24:43 --> Config Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:24:43 --> URI Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Router Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Output Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Input Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:24:43 --> Language Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Loader Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:24:43 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:24:43 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:24:43 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:24:43 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:24:43 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Session Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:24:43 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:24:43 --> Session routines successfully run
DEBUG - 2012-02-15 00:24:43 --> Controller Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Model Class Initialized
DEBUG - 2012-02-15 00:24:43 --> Model Class Initialized
ERROR - 2012-02-15 00:24:43 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:24:43 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:24:43 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:24:43 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:24:43 --> Final output sent to browser
DEBUG - 2012-02-15 00:24:43 --> Total execution time: 0.0243
DEBUG - 2012-02-15 00:25:27 --> Config Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:25:27 --> URI Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Router Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Output Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Input Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:25:27 --> Language Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Loader Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:25:27 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:25:27 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:25:27 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:25:27 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Session Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:25:27 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:25:27 --> Session routines successfully run
DEBUG - 2012-02-15 00:25:27 --> Controller Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Model Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Model Class Initialized
ERROR - 2012-02-15 00:25:27 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:25:27 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:25:27 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:25:27 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:25:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:25:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:25:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:25:27 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:25:27 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:25:27 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:25:27 --> Final output sent to browser
DEBUG - 2012-02-15 00:25:27 --> Total execution time: 0.0224
DEBUG - 2012-02-15 00:25:27 --> Config Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:25:27 --> URI Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Router Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Output Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Input Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:25:27 --> Language Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Loader Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:25:27 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:25:27 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:25:27 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:25:27 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:25:27 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Session Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:25:27 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:25:27 --> Session routines successfully run
DEBUG - 2012-02-15 00:25:27 --> Controller Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Model Class Initialized
DEBUG - 2012-02-15 00:25:27 --> Model Class Initialized
ERROR - 2012-02-15 00:25:27 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:25:27 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:25:27 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:25:27 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:25:27 --> Final output sent to browser
DEBUG - 2012-02-15 00:25:27 --> Total execution time: 0.0196
DEBUG - 2012-02-15 00:25:48 --> Config Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:25:48 --> URI Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Router Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Output Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Input Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:25:48 --> Language Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Loader Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:25:48 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:25:48 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:25:48 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:25:48 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Session Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:25:48 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '0a6065d96c47854e30026cabf2835c01'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:25:48 --> Session routines successfully run
DEBUG - 2012-02-15 00:25:48 --> Controller Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Model Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Model Class Initialized
ERROR - 2012-02-15 00:25:48 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:25:48 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:25:48 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:25:48 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:25:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:25:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:25:48 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:25:48 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:25:48 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:25:48 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:25:48 --> Final output sent to browser
DEBUG - 2012-02-15 00:25:48 --> Total execution time: 0.0268
DEBUG - 2012-02-15 00:25:48 --> Config Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:25:48 --> URI Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Router Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Output Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Input Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:25:48 --> Language Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Loader Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:25:48 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:25:48 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:25:48 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:25:48 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:25:48 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Session Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:25:48 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f88ced3cb040a6fadd8ff27047a8d799'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:25:48 --> Session routines successfully run
DEBUG - 2012-02-15 00:25:48 --> Controller Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Model Class Initialized
DEBUG - 2012-02-15 00:25:48 --> Model Class Initialized
ERROR - 2012-02-15 00:25:48 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:25:48 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:25:48 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:25:48 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:25:48 --> Final output sent to browser
DEBUG - 2012-02-15 00:25:48 --> Total execution time: 0.0216
DEBUG - 2012-02-15 00:26:13 --> Config Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:26:13 --> URI Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Router Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Output Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Input Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:26:13 --> Language Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Loader Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:26:13 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:26:13 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:26:13 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:26:13 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Session Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:26:13 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f88ced3cb040a6fadd8ff27047a8d799'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:26:13 --> Session routines successfully run
DEBUG - 2012-02-15 00:26:13 --> Controller Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Model Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Model Class Initialized
ERROR - 2012-02-15 00:26:13 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:26:13 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:26:13 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:26:13 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:26:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:26:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:26:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:26:13 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:26:13 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:26:13 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:26:13 --> Final output sent to browser
DEBUG - 2012-02-15 00:26:13 --> Total execution time: 0.0389
DEBUG - 2012-02-15 00:26:13 --> Config Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:26:13 --> URI Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Router Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Output Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Input Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:26:13 --> Language Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Loader Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:26:13 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:26:13 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:26:13 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:26:13 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:26:13 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Session Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:26:13 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f88ced3cb040a6fadd8ff27047a8d799'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:26:13 --> Session routines successfully run
DEBUG - 2012-02-15 00:26:13 --> Controller Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Model Class Initialized
DEBUG - 2012-02-15 00:26:13 --> Model Class Initialized
ERROR - 2012-02-15 00:26:13 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:26:13 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:26:13 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:26:13 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:26:13 --> Final output sent to browser
DEBUG - 2012-02-15 00:26:13 --> Total execution time: 0.0243
DEBUG - 2012-02-15 00:26:17 --> Config Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:26:17 --> URI Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Router Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Output Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Input Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:26:17 --> Language Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Loader Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:26:17 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:26:17 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:26:17 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:26:17 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:26:17 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Session Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:26:17 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f88ced3cb040a6fadd8ff27047a8d799'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:26:17 --> Session routines successfully run
DEBUG - 2012-02-15 00:26:17 --> Controller Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Model Class Initialized
DEBUG - 2012-02-15 00:26:17 --> Model Class Initialized
DEBUG - 2012-02-15 00:26:22 --> Final output sent to browser
DEBUG - 2012-02-15 00:26:22 --> Total execution time: 4.4664
DEBUG - 2012-02-15 00:35:22 --> Config Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:35:22 --> URI Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Router Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Output Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Input Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:35:22 --> Language Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Loader Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:35:22 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:35:22 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:35:22 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:35:22 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Session Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:35:22 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = 'f88ced3cb040a6fadd8ff27047a8d799'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:35:22 --> Session routines successfully run
DEBUG - 2012-02-15 00:35:22 --> Controller Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Model Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Model Class Initialized
ERROR - 2012-02-15 00:35:22 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:35:22 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:35:22 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:35:22 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:35:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:35:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:35:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:35:22 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:35:22 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:35:22 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:35:22 --> Final output sent to browser
DEBUG - 2012-02-15 00:35:22 --> Total execution time: 0.0340
DEBUG - 2012-02-15 00:35:22 --> Config Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:35:22 --> URI Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Router Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Output Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Input Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:35:22 --> Language Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Loader Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:35:22 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:35:22 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:35:22 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:35:22 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:35:22 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Session Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:35:22 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:35:22 --> Session routines successfully run
DEBUG - 2012-02-15 00:35:22 --> Controller Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Model Class Initialized
DEBUG - 2012-02-15 00:35:22 --> Model Class Initialized
ERROR - 2012-02-15 00:35:22 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:35:22 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:35:22 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:35:22 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:35:22 --> Final output sent to browser
DEBUG - 2012-02-15 00:35:22 --> Total execution time: 0.0275
DEBUG - 2012-02-15 00:35:23 --> Config Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:35:23 --> URI Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Router Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Output Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Input Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:35:23 --> Language Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Loader Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:35:23 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:35:23 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:35:23 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:35:23 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:35:23 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Session Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:35:23 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:35:23 --> Session routines successfully run
DEBUG - 2012-02-15 00:35:23 --> Controller Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Model Class Initialized
DEBUG - 2012-02-15 00:35:23 --> Model Class Initialized
ERROR - 2012-02-15 00:35:23 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:35:23 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:35:23 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:35:23 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:35:23 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:35:23 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:35:23 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:35:23 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:35:23 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:35:23 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:35:23 --> Final output sent to browser
DEBUG - 2012-02-15 00:35:23 --> Total execution time: 0.0236
DEBUG - 2012-02-15 00:35:24 --> Config Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:35:24 --> URI Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Router Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Output Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Input Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:35:24 --> Language Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Loader Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:35:24 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Session Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:35:24 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:35:24 --> Session routines successfully run
DEBUG - 2012-02-15 00:35:24 --> Controller Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Model Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Model Class Initialized
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:35:24 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:35:24 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:35:24 --> Final output sent to browser
DEBUG - 2012-02-15 00:35:24 --> Total execution time: 0.0189
DEBUG - 2012-02-15 00:35:24 --> Config Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:35:24 --> URI Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Router Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Output Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Input Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:35:24 --> Language Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Loader Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:35:24 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Session Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:35:24 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:35:24 --> Session routines successfully run
DEBUG - 2012-02-15 00:35:24 --> Controller Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Model Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Model Class Initialized
ERROR - 2012-02-15 00:35:24 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:35:24 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:35:24 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:35:24 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:35:24 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:35:24 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:35:24 --> Final output sent to browser
DEBUG - 2012-02-15 00:35:24 --> Total execution time: 0.0238
DEBUG - 2012-02-15 00:35:24 --> Config Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:35:24 --> URI Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Router Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Output Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Input Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:35:24 --> Language Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Loader Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:35:24 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:35:24 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:35:24 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Session Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:35:24 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:35:24 --> Session routines successfully run
DEBUG - 2012-02-15 00:35:24 --> Controller Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Model Class Initialized
DEBUG - 2012-02-15 00:35:24 --> Model Class Initialized
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:35:24 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:35:24 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:35:24 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:35:24 --> Final output sent to browser
DEBUG - 2012-02-15 00:35:24 --> Total execution time: 0.0264
DEBUG - 2012-02-15 00:35:30 --> Config Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:35:30 --> URI Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Router Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Output Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Input Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:35:30 --> Language Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Loader Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:35:30 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:35:30 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:35:30 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:35:30 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:35:30 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Session Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:35:30 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:35:30 --> Session routines successfully run
DEBUG - 2012-02-15 00:35:30 --> Controller Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Model Class Initialized
DEBUG - 2012-02-15 00:35:30 --> Model Class Initialized
ERROR - 2012-02-15 00:35:30 --> SELECT *
FROM (site_audigital)
WHERE `id_computador` = '1'
DEBUG - 2012-02-15 00:35:35 --> Final output sent to browser
DEBUG - 2012-02-15 00:35:35 --> Total execution time: 4.3937
DEBUG - 2012-02-15 00:36:13 --> Config Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:36:13 --> URI Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Router Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Output Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Input Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:36:13 --> Language Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Loader Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:36:13 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:36:13 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:36:13 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:36:13 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:36:13 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Session Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:36:13 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:36:13 --> Session routines successfully run
DEBUG - 2012-02-15 00:36:13 --> Controller Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Model Class Initialized
DEBUG - 2012-02-15 00:36:13 --> Model Class Initialized
ERROR - 2012-02-15 00:36:13 --> SELECT *
FROM (`programas`)
WHERE `link` = 'controlreport/relatorios/inventarioSoftwareHardware'
ERROR - 2012-02-15 00:36:13 --> SELECT concat_ws(' / ',(case when pai.nome_programa is null then '' else pai.nome_programa end),p.nome_programa) as path_bread
FROM (perfis_programas as pp)
JOIN programas as p ON p.id = pp.programa_id
LEFT JOIN programas as pai ON pai.id = pp.programa_pai
WHERE `pp`.`programa_id` = '162'
DEBUG - 2012-02-15 00:36:13 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 00:36:13 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 00:36:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 00:36:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 00:36:13 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 00:36:13 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 00:36:13 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 00:36:13 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 00:36:13 --> Final output sent to browser
DEBUG - 2012-02-15 00:36:13 --> Total execution time: 0.0335
DEBUG - 2012-02-15 00:36:14 --> Config Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:36:14 --> URI Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Router Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Output Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Input Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:36:14 --> Language Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Loader Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:36:14 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:36:14 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:36:14 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:36:14 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:36:14 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Session Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:36:14 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:36:14 --> Session routines successfully run
DEBUG - 2012-02-15 00:36:14 --> Controller Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Model Class Initialized
DEBUG - 2012-02-15 00:36:14 --> Model Class Initialized
ERROR - 2012-02-15 00:36:14 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 00:36:14 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
ERROR - 2012-02-15 00:36:14 --> SELECT count(*) as total_inventarios
FROM (site_audigital_resumo)
ERROR - 2012-02-15 00:36:14 --> SELECT id_computador as id,str_equipamento as equipamento,usuario_windows as usuario,date_format(timestamp,'%d/%m/%Y %H:%i') as dt_inventario
FROM (site_audigital_resumo)
ORDER BY timestamp desc
DEBUG - 2012-02-15 00:36:14 --> Final output sent to browser
DEBUG - 2012-02-15 00:36:14 --> Total execution time: 0.0247
DEBUG - 2012-02-15 00:36:17 --> Config Class Initialized
DEBUG - 2012-02-15 00:36:17 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:36:17 --> URI Class Initialized
DEBUG - 2012-02-15 00:36:17 --> Router Class Initialized
DEBUG - 2012-02-15 00:36:17 --> Output Class Initialized
DEBUG - 2012-02-15 00:36:17 --> Input Class Initialized
DEBUG - 2012-02-15 00:36:17 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:36:17 --> Language Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Loader Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:36:18 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:36:18 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 00:36:18 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 00:36:18 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 00:36:18 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Session Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:36:18 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:36:18 --> Session routines successfully run
DEBUG - 2012-02-15 00:36:18 --> Controller Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Model Class Initialized
DEBUG - 2012-02-15 00:36:18 --> Model Class Initialized
ERROR - 2012-02-15 00:36:18 --> SELECT *
FROM (site_audigital)
WHERE `id_computador` = '1'
DEBUG - 2012-02-15 00:36:22 --> Final output sent to browser
DEBUG - 2012-02-15 00:36:22 --> Total execution time: 4.3625
DEBUG - 2012-02-15 00:42:08 --> Config Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:42:08 --> URI Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Router Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Output Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Input Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:42:08 --> Language Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Loader Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:42:08 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 00:42:08 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 00:42:08 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Session Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Encrypt class already loaded. Second attempt ignored.
ERROR - 2012-02-15 00:42:08 --> SELECT *
FROM (`ci_sessions`)
WHERE `session_id` = '6550615dc250395128775c1cd5e76c32'
AND `user_agent` = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.7 '
DEBUG - 2012-02-15 00:42:08 --> Session routines successfully run
DEBUG - 2012-02-15 00:42:08 --> Controller Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Config Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Hooks Class Initialized
DEBUG - 2012-02-15 00:42:08 --> URI Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Router Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Output Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Input Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 00:42:08 --> Language Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Loader Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: url_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: form_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: util_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: download_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 00:42:08 --> Helper loaded: string_helper
DEBUG - 2012-02-15 00:42:08 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 00:42:08 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 00:42:08 --> Database Driver Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Encrypt Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Session Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 00:42:08 --> A session cookie was not found.
DEBUG - 2012-02-15 00:42:08 --> Session routines successfully run
DEBUG - 2012-02-15 00:42:08 --> Controller Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
DEBUG - 2012-02-15 00:42:08 --> Model Class Initialized
ERROR - 2012-02-15 00:42:08 --> Severity: Notice  --> Undefined index: 92c29c1ac4d85b45639f741599c24cd7 /var/www/audigital/autenticacao/controllers/login.php 17
ERROR - 2012-02-15 00:42:08 --> Severity: Notice  --> Undefined index: tema /var/www/audigital/static/_views/headerScripts.php 6
DEBUG - 2012-02-15 00:42:08 --> File loaded: .//views/../../static/_views/headerScripts.php
DEBUG - 2012-02-15 00:42:08 --> File loaded: .//views/../../static/_views/headerLoginView.php
DEBUG - 2012-02-15 00:42:08 --> File loaded: .//views/../../static/_views/footerLoginView.php
DEBUG - 2012-02-15 00:42:08 --> File loaded: .//views/loginView.php
DEBUG - 2012-02-15 00:42:08 --> Final output sent to browser
DEBUG - 2012-02-15 00:42:08 --> Total execution time: 0.0278
DEBUG - 2012-02-15 17:40:10 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:10 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:10 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:10 --> No URI present. Default controller set.
DEBUG - 2012-02-15 17:40:10 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:10 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:10 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:10 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:10 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:10 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:10 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:10 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 17:40:10 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 17:40:11 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:11 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:11 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:11 --> Model Class Initialized
ERROR - 2012-02-15 17:40:11 --> Severity: Notice  --> Undefined index: 92c29c1ac4d85b45639f741599c24cd7 /var/www/audigital/autenticacao/controllers/login.php 17
ERROR - 2012-02-15 17:40:11 --> Severity: Notice  --> Undefined index: tema /var/www/audigital/static/_views/headerScripts.php 6
DEBUG - 2012-02-15 17:40:11 --> File loaded: autenticacao/views/../../static/_views/headerScripts.php
DEBUG - 2012-02-15 17:40:11 --> File loaded: autenticacao/views/../../static/_views/headerLoginView.php
DEBUG - 2012-02-15 17:40:11 --> File loaded: autenticacao/views/../../static/_views/footerLoginView.php
DEBUG - 2012-02-15 17:40:11 --> File loaded: autenticacao/views/loginView.php
DEBUG - 2012-02-15 17:40:11 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:11 --> Total execution time: 0.7661
DEBUG - 2012-02-15 17:40:14 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:14 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:14 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:14 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 17:40:14 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 17:40:14 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:14 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:14 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:14 --> Total execution time: 0.1143
DEBUG - 2012-02-15 17:40:14 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:14 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:14 --> No URI present. Default controller set.
DEBUG - 2012-02-15 17:40:14 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:14 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:14 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:14 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:14 --> Language file loaded: language/pt-br/dashboard_labels_lang.php
DEBUG - 2012-02-15 17:40:14 --> Language file loaded: language/pt-br/dashboard_messages_lang.php
DEBUG - 2012-02-15 17:40:14 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:14 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:14 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:14 --> Model Class Initialized
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Undefined variable: path_bread /var/www/audigital/static/_views/headerGlobalView.php 16
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Undefined variable: path_bread /var/www/audigital/static/_views/headerGlobalView.php 16
DEBUG - 2012-02-15 17:40:14 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:14 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:14 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:14 --> File loaded: .//views/inicioView.php
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/audigital/system/filters/auth.php 32
ERROR - 2012-02-15 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/audigital/system/filters/auth.php 32
DEBUG - 2012-02-15 17:40:14 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:14 --> Total execution time: 0.1795
DEBUG - 2012-02-15 17:40:17 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:17 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:17 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:17 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:17 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:17 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:17 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:17 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:17 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:17 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:17 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:17 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:17 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:17 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:17 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:17 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:17 --> File loaded: .//views/cadastros/licencaFiltroView.php
DEBUG - 2012-02-15 17:40:17 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:17 --> Total execution time: 0.2897
DEBUG - 2012-02-15 17:40:17 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:17 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:17 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:17 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:17 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:17 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:17 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:17 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:17 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:17 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:17 --> Model Class Initialized
ERROR - 2012-02-15 17:40:17 --> Severity: Notice  --> Undefined index: nome_software /var/www/audigital/controlreport/models/cadastros/licencamodel.php 119
ERROR - 2012-02-15 17:40:17 --> Severity: Notice  --> Undefined index: nome_software /var/www/audigital/controlreport/models/cadastros/licencamodel.php 128
DEBUG - 2012-02-15 17:40:17 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:17 --> Total execution time: 0.0696
DEBUG - 2012-02-15 17:40:18 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:18 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:18 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:19 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:19 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:19 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:19 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:19 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:19 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:19 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:19 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:19 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:19 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:19 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:19 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 17:40:19 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:19 --> Total execution time: 0.1821
DEBUG - 2012-02-15 17:40:19 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:19 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:19 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:19 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:19 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:19 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Model Class Initialized
ERROR - 2012-02-15 17:40:19 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 17:40:19 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
DEBUG - 2012-02-15 17:40:19 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:19 --> Total execution time: 0.0390
DEBUG - 2012-02-15 17:40:19 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:19 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:19 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:19 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:19 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:19 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:19 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:19 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:19 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/relatorios/quantidadeInventariosFiltroView.php
DEBUG - 2012-02-15 17:40:20 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:20 --> Total execution time: 0.0894
DEBUG - 2012-02-15 17:40:20 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:20 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:20 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:20 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:20 --> Session garbage collection performed.
DEBUG - 2012-02-15 17:40:20 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:20 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Model Class Initialized
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/quantidadeinventariosmodel.php 21
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/quantidadeinventariosmodel.php 22
DEBUG - 2012-02-15 17:40:20 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:20 --> Total execution time: 0.0275
DEBUG - 2012-02-15 17:40:20 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:20 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:20 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:20 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:20 --> Session garbage collection performed.
DEBUG - 2012-02-15 17:40:20 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:20 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:20 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 17:40:20 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:20 --> Total execution time: 0.0303
DEBUG - 2012-02-15 17:40:20 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:20 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:20 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:20 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:20 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:20 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:20 --> Session garbage collection performed.
DEBUG - 2012-02-15 17:40:20 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:20 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:20 --> Model Class Initialized
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 17:40:20 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
DEBUG - 2012-02-15 17:40:20 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:20 --> Total execution time: 0.0201
DEBUG - 2012-02-15 17:40:22 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:22 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:22 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:22 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:22 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:22 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:22 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:22 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:22 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:22 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:22 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:22 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:22 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:22 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:22 --> File loaded: .//views/relatorios/quantidadeInventariosFiltroView.php
DEBUG - 2012-02-15 17:40:22 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:22 --> Total execution time: 0.0248
DEBUG - 2012-02-15 17:40:22 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:22 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:22 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:22 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:22 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:22 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:22 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:22 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:22 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:22 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:22 --> Model Class Initialized
ERROR - 2012-02-15 17:40:22 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/quantidadeinventariosmodel.php 21
ERROR - 2012-02-15 17:40:22 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/quantidadeinventariosmodel.php 22
DEBUG - 2012-02-15 17:40:22 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:22 --> Total execution time: 0.0173
DEBUG - 2012-02-15 17:40:23 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:23 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:23 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:23 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:23 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:23 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:23 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:23 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:23 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:23 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:23 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:23 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:23 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:23 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:23 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:23 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:23 --> File loaded: .//views/relatorios/inventarioSoftwareHardwareFiltroView.php
DEBUG - 2012-02-15 17:40:23 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:23 --> Total execution time: 0.0284
DEBUG - 2012-02-15 17:40:23 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:23 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:23 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:23 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:23 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:23 --> Language file loaded: language/pt-br/controlreport_labels_lang.php
DEBUG - 2012-02-15 17:40:23 --> Language file loaded: language/pt-br/controlreport_messages_lang.php
DEBUG - 2012-02-15 17:40:23 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:23 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:23 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:23 --> Model Class Initialized
ERROR - 2012-02-15 17:40:23 --> Severity: Notice  --> Undefined index: dt_inicio /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 21
ERROR - 2012-02-15 17:40:23 --> Severity: Notice  --> Undefined index: dt_fim /var/www/audigital/controlreport/models/relatorios/inventariosoftwarehardwaremodel.php 22
DEBUG - 2012-02-15 17:40:23 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:23 --> Total execution time: 0.0194
DEBUG - 2012-02-15 17:40:27 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:27 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:27 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:27 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:27 --> Language file loaded: language/pt-br/system_lang.php
DEBUG - 2012-02-15 17:40:27 --> Language file loaded: language/pt-br/dashboard_labels_lang.php
DEBUG - 2012-02-15 17:40:27 --> Language file loaded: language/pt-br/dashboard_messages_lang.php
DEBUG - 2012-02-15 17:40:27 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:27 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:27 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:27 --> Model Class Initialized
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Undefined variable: path_bread /var/www/audigital/static/_views/headerGlobalView.php 16
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Undefined variable: path_bread /var/www/audigital/static/_views/headerGlobalView.php 16
DEBUG - 2012-02-15 17:40:27 --> File loaded: .//views/../../static/_views/headerScripts.php
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Undefined index: avatar /var/www/audigital/static/_views/headerGlobalView.php 31
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 48
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Undefined index: showMenu /var/www/audigital/static/_views/headerGlobalView.php 58
DEBUG - 2012-02-15 17:40:27 --> File loaded: .//views/../../static/_views/headerGlobalView.php
DEBUG - 2012-02-15 17:40:27 --> File loaded: .//views/../../static/_views/footerGlobalView.php
DEBUG - 2012-02-15 17:40:27 --> File loaded: .//views/configuracaoView.php
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/audigital/system/filters/auth.php 32
ERROR - 2012-02-15 17:40:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/audigital/system/filters/auth.php 32
DEBUG - 2012-02-15 17:40:27 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:27 --> Total execution time: 0.1028
DEBUG - 2012-02-15 17:40:28 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:28 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:28 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:28 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 17:40:28 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 17:40:28 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:28 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:28 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Config Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Hooks Class Initialized
DEBUG - 2012-02-15 17:40:28 --> URI Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Router Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Output Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Input Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Global POST and COOKIE data sanitized
DEBUG - 2012-02-15 17:40:28 --> Language Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Loader Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: url_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: lang_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: formaux_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: form_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: util_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: toolbar_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: tabpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: gridpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: jqgridpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: editorgridpanel_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: download_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: inflector_helper
DEBUG - 2012-02-15 17:40:28 --> Helper loaded: string_helper
DEBUG - 2012-02-15 17:40:28 --> Language file loaded: language/pt-br/system_lang.php
ERROR - 2012-02-15 17:40:28 --> Language file contains no data: language/pt-br/login_lang.php
DEBUG - 2012-02-15 17:40:28 --> Database Driver Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Encrypt Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Unit Testing Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Session Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Encrypt class already loaded. Second attempt ignored.
DEBUG - 2012-02-15 17:40:28 --> A session cookie was not found.
DEBUG - 2012-02-15 17:40:28 --> Session routines successfully run
DEBUG - 2012-02-15 17:40:28 --> Controller Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
DEBUG - 2012-02-15 17:40:28 --> Model Class Initialized
ERROR - 2012-02-15 17:40:28 --> Severity: Notice  --> Undefined index: 92c29c1ac4d85b45639f741599c24cd7 /var/www/audigital/autenticacao/controllers/login.php 17
ERROR - 2012-02-15 17:40:28 --> Severity: Notice  --> Undefined index: tema /var/www/audigital/static/_views/headerScripts.php 6
DEBUG - 2012-02-15 17:40:28 --> File loaded: .//views/../../static/_views/headerScripts.php
DEBUG - 2012-02-15 17:40:28 --> File loaded: .//views/../../static/_views/headerLoginView.php
DEBUG - 2012-02-15 17:40:28 --> File loaded: .//views/../../static/_views/footerLoginView.php
DEBUG - 2012-02-15 17:40:28 --> File loaded: .//views/loginView.php
DEBUG - 2012-02-15 17:40:28 --> Final output sent to browser
DEBUG - 2012-02-15 17:40:28 --> Total execution time: 0.0260
