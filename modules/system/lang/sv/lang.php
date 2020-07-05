<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => 'Getting back to basics',
    ],
    'directory' => [
        'create_fail' => "Kunde inte skapa mapp: :name",
    ],
    'file' => [
        'create_fail' => "Kunde inte skapa fil: :name",
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Ogiltig säkerhetstoken',
        ],
    ],
    'combiner' => [
        'not_found' => "Kombinationsfilen ':name' kunde ej hittas",
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Övrigt',
            'logs' => 'Loggar',
            'mail' => 'Mail',
            'shop' => 'Affär',
            'team' => 'Lag',
            'users' => 'Användare',
            'system' => 'System',
            'social' => 'Social',
            'events' => 'Händelser',
            'customers' => 'Kunder',
            'my_settings' => 'Mina inställningar'
        ]
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'Namnlöst tema',
        'name' => [
            'label' => 'Temanamn',
            'help' => 'Namnge temat med en unik kod. Till exempel, RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Installerar teman',
        'search' => 'sök efter teman att installera...',
        'installed' => 'Installerade teman',
        'no_themes' => 'Det finns inga teman installerade från marknadsplatsen.',
        'recommended' => 'Rekommenderat',
        'remove_confirm' => 'Är du säker på att du vill radera det här temat?'
    ],
    'plugin' => [
        'label' => 'Tillägg',
        'unnamed' => 'Namnlöst tillägg',
        'name' => [
            'label' => 'Tilläggsnamn',
            'help' => 'Namnge tillägget efter dess unika kod. Exempelvis RainLab.Blog',
        ]
        ],
    'plugins' => [
        'manage' => 'Hantera tillägg',
        'enable_or_disable' => 'Aktivera eller inaktivera',
        'enable_or_disable_title' => 'Aktivera eller inaktivera tillägg',
        'install' => 'Installera tillägg',
        'install_products' => 'Installera produkter',
        'search' => 'sök efter tillägg att installera...',
        'installed' => 'Installerade tillägg',
        'no_plugins' => 'Det finns inga tillägg installerade från marknadsplatsen.',
        'recommended' => 'Rekommenderat',
        'remove' => 'Ta bort',
        'refresh' => 'Uppdatera',
        'disabled_label' => 'Avaktivera',
        'disabled_help' => 'De avaktiverade tilläggen ignorerades av systemet.',
        'frozen_label' => 'Frys uppdateringar',
        'frozen_help' => 'Tillägg som är frusna kommer att ignoreras av uppdateringsprocessen.',
        'selected_amount' => 'Markerade tillägg: :amount',
        'remove_confirm' => 'Är du säker?',
        'remove_success' => 'Tilläggen raderades.',
        'refresh_confirm' => 'Är du säker?',
        'refresh_success' => 'Tilläggen uppdaterades.',
        'disable_confirm' => 'Är du säker?',
        'disable_success' => 'Tilläggen avaktiverades.',
        'enable_success' => 'Aktiverade tilläggen.',
        'unknown_plugin' => 'Tillägget har raderats.'
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Ägare',
        'attach' => 'Länka projekt',
        'detach' => 'Avlänka projekt',
        'none' => 'Inget',
        'id' => [
            'label' => 'Projekt-ID',
            'help' => 'Hur du hittar ditt Projekt-ID',
            'missing' => 'Vänligen välj ett Projekt-ID',
        ],
        'detach_confirm' => 'Vill du verkligen avlänka detta projekt?',
        'unbind_success' => 'Projektet har avlänkats',
    ],
    'settings' => [
        'menu_label' => 'Inställningar',
        'not_found' => 'Det går inte att hitta de angivna inställningarna.',
        'missing_model' => 'Inställningssidan saknar en modell-definition',
        'update_success' => 'Inställningar för :name har uppdaterats',
        'return' => 'Återgå till systeminställningar',
        'search' => 'Sök'
    ],
    'mail' => [
        'log_file' => 'Loggfiler',
        'menu_label' => 'E-postkonfiguration',
        'menu_description' => 'Hantera e-postinställningar',
        'general' => 'Generellt',
        'method' => 'E-postmetod',
        'sender_name' => 'Avsändarnamn',
        'sender_email' => 'Avsändarens e-postadress',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP-adress',
        'smtp_authorization' => 'SMTP-autentisering krävs',
        'smtp_authorization_comment' => 'Om din server kräver autentisering, markerar du denna checkbox',
        'smtp_username' => 'Användarnamn',
        'smtp_password' => 'Lösenord',
        'smtp_port' => 'SMTP-port',
        'smtp_ssl' => 'SSL-anslutning krävs',
        'smtp_encryption' => 'SMTP-krypteringsprotokoll',
        'smtp_encryption_none' => 'Ingen kryptering',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail-sökväg',
        'sendmail_path_comment' => 'Vänligen ange sökvägen till sendmail',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun domän',
        'mailgun_domain_comment' => 'Vänligen ange Mailgun domännamnet.',
        'mailgun_secret' => 'Mailgun hemlighet',
        'mailgun_secret_comment' => 'Ange din Mailgun API-nyckel.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill hemlighet',
        'mandrill_secret_comment' => 'Ange din API-nyckel.',
        'drivers_hint_header' => 'Drivrutiner är inte installerade',
        'drivers_hint_content' => 'Den här e-postmetoden kräver att tillägget ":plugin" är installerat innan du kan skicka e-post.'
    ],
    'mail_templates' => [
        'menu_label' => 'E-postmall',
        'menu_description' => 'Ändra e-postmallar som skickas till användare och administratörer, hantera e-postlayouter.',
        'new_template' => 'Ny mall',
        'new_layout' => 'Ny layout',
        'template' => 'Mall',
        'templates' => 'Mallar',
        'menu_layouts_label' => 'E-postmallar',
        'layout' => 'Layout',
        'layouts' => 'Layouter',
        'no_layout' => '-- ingen layout --',
        'name' => 'Namn',
        'name_comment' => 'Unikt namn för att hänvisa till den här mallen',
        'code' => 'Kod',
        'code_comment' => 'Unik kod som används för att hänvisa till den här mallen',
        'subject' => 'Ämne',
        'subject_comment' => 'Mailets ämne',
        'description' => 'Beskrivning',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Text',
        'test_send' => 'Skicka ett testmeddelande',
        'test_success' => 'Testmeddelandet har skickats.',
        'return' => 'Återvänd till mallistan',
        'test_confirm' => 'Ett testmeddelande kommer skickas till :email. Fortsätt?',
        'saving' => 'Sparar mall...',
        'sending' => 'Skickar testmeddelande...',
    ],
    'install' => [
        'project_label' => 'Länka till Projekt',
        'plugin_label' => 'Installera tillägg',
        'theme_label' => 'Installera tema',
        'missing_plugin_name' => 'Välj ett tilläggsnamn att installera',
        'missing_theme_name' => 'Vänligen specificera ett tema att installera.',
        'install_completing' => 'Installationen är klar',
        'install_success' => 'Tillägget har installerats',
    ],
    'updates' => [
        'title' => 'Hantera uppdateringar',
        'name' => 'Uppdatera systemet',
        'menu_label' => 'Uppdateringar',
        'menu_description' => 'Uppdatera systemet, hantera och installera tillägg och teman.',
        'return_link' => 'Återgå till systemuppdateringar',
        'check_label' => 'Sök efter uppdateringar',
        'retry_label' => 'Försök igen',
        'plugin_name' => 'Namn',
        'plugin_code' => 'Kod',
        'plugin_description' => 'Beskrivning',
        'plugin_version' => 'Version',
        'plugin_author' => 'Skapare',
        'plugin_not_found' => 'Plugin not found',
        'core_current_build' => 'Nuvarande build',
        'core_build' => 'Build :build',
        'core_build_help' => 'Senaste build är tillgänglig.',
        'core_downloading' => 'Laddar ner applikationsfiler',
        'core_extracting' => 'Packar upp applikationsfiler',
        'plugins' => 'Tillägg',
        'themes' => 'Teman',
        'disabled' => 'Avaktiverade',
        'plugin_downloading' => 'Laddar ner tillägg: :name',
        'plugin_extracting' => 'Packar upp tillägg: :name',
        'plugin_version_none' => 'Nytt tillägg',
        'plugin_current_version' => 'Nuvarande version',
        'theme_new_install' => 'Installation av nytt tema.',
        'theme_downloading' => 'Ladda ner temat: :name',
        'theme_extracting' => 'Packar upp temat: :name',
        'update_label' => 'Uppdatera systemet',
        'update_completing' => 'Slutför uppdatering',
        'update_loading' => 'Laddar tillgängliga uppdateringar...',
        'update_success' => 'Uppdateringen är slutförd.',
        'update_failed_label' => 'Updateringen misslyckades',
        'force_label' => 'Tvinga uppdatering',
        'found' => [
            'label' => 'Hittade nya uppdateringar!',
            'help' => 'Klicka på Uppdatera systemet för att påbörja processen.'
        ],
        'none' => [
            'label' => 'Inga uppdateringar',
            'help' => 'Inga nya uppdateringar hittades.'
        ],
        'important_action' => [
            'empty' => 'Välj åtgärd',
            'confirm' => 'Bekräfta uppdatering',
            'skip' => 'Hoppa över detta tillägg (en gång)',
            'ignore' => 'Hoppa över detta tillägg (alltid)',
        ],
        'important_action_required' => 'Åtgärd krävs',
        'important_view_guide' => 'Visa uppgraderingsguide',
        'important_alert_text' => 'Några uppdateringar behöver din uppmärksamhet.',
        'details_title' => 'Tilläggsdetaljer',
        'details_view_homepage' => 'Visa hemsida',
        'details_readme' => 'Dokumentation',
        'details_readme_missing' => 'Det finns ingen dokumentation tillgänglig.',
        'details_upgrades' => 'Uppgraderingsguide',
        'details_upgrades_missing' => 'Det finns inga uppgraderingsinstruktioner tillgängliga.',
        'details_current_version' => 'Nuvarande version',
        'details_author' => 'Författare',
    ],
    'server' => [
        'connect_error' => 'Ett fel uppstod vid anslutning till servern.',
        'response_not_found' => 'Uppdateringsserver kunde ej hittas.',
        'response_invalid' => 'Felaktigt svar från servern.',
        'response_empty' => 'Tomt svar från servern.',
        'file_error' => 'Servern kunde inte leverera paketet.',
        'file_corrupt' => 'Filen från servern är korrupt.',
    ],
    'behavior' => [
        'missing_property' => 'Klassen :class måste definiera egenskapen $:property som används av :behavior -egenskapen',
    ],
    'config' => [
        'not_found' => 'Kunde inte hitta konfigurationsfilen :file definierad för :location',
        'required' => 'Konfigurationen som används i :location måste sända med ett värde :property',
    ],
    'zip' => [
        'extract_failed' => "Kunde inte packa upp core-fil ':file'.",
    ],
    'event_log' => [
        'hint' => 'Denna logg visar en lista över potentiella fel som uppstår i applikationen, såsom undantag och felsökningsinformation.',
        'menu_label' => 'Händelselogg',
        'menu_description' => 'Visa systemloggmeddelanden med respektive tid och detaljer.',
        'empty_link' => 'Töm händelseloggen',
        'empty_loading' => 'Tömmer händelselogg...',
        'empty_success' => 'Lyckades tömma händelseloggen.',
        'return_link' => 'Återvänd till händelseloggen',
        'id' => 'ID',
        'id_label' => 'Händelse-ID',
        'created_at' => 'Datum och tid',
        'message' => 'Meddelande',
        'level' => 'Nivå'
    ],
    'request_log' => [
        'hint' => 'Denna loggen visar en lista med förfrågningar från webbläsare som kan kräva uppmärksamhet. Till exempel, om en besökare öppnar en CMS sida som inte kan hittas, så skapas en post med statuskoden 404.',
        'menu_label' => 'Förfrågningslogg',
        'menu_description' => 'Visa otillåtna eller omdirigerade förfrågningar, så som Sidan kunde inte hittas (404).',
        'empty_link' => 'Töm förfrågningsloggen',
        'empty_loading' => 'Tömmer förfrågningsloggen...',
        'empty_success' => 'Lyckades tömma förfrågningsloggen.',
        'return_link' => 'Återvänd till förfrågningsloggen',
        'id' => 'ID',
        'id_label' => 'Logg-ID',
        'count' => 'Räknare',
        'referer' => 'Hänvisning',
        'url' => 'URL',
        'status_code' => 'Status'
    ],
    'permissions' => [
        'name' => 'System',
        'manage_system_settings' => 'Hantera systeminställningar',
        'manage_software_updates' => 'Hantera systemuppdateringar',
        'access_logs' => 'Visa systemloggen',
        'manage_mail_templates' => 'Hantera e-postmallar',
        'manage_mail_settings' => 'Hantera e-postinställningar',
        'manage_other_administrators' => 'Hantera andra administratörer',
        'manage_preferences' => 'Hantera inställningar för back-end',
        'manage_editor' => 'Hantera inställningar för kodredigerare',
        'view_the_dashboard' => 'Visa kontrollpanelen',
        'manage_branding' => 'Anpassa back-end',
    ],
    'media' => [
        'invalid_path' => "Felaktig filsökväg angiven: ':path'.",
        'folder_size_items' => 'föremål',
    ],
];
