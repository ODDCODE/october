<?php

return [
    'field' => [
        'invalid_type' => 'Ungültiger Feldtyp :type.',
        'options_method_not_exists' => 'Die Model-Klasse :model muss eine Methode :method() mit Rückgabe der Werte von ":field" besitzen.',
    ],
    'widget' => [
        'not_registered' => "Ein Widget namens ':name' wurde nicht registriert",
        'not_bound' => "Ein Widget mit dem Klassennamen ':name' wurde nicht mit dem Controller verbunden",
    ],
    'page' => [
        'untitled' => "Unbenannt",
        'access_denied' => [
            'label' => "Zugriff verweigert",
            'help' => "Sie haben nicht die erforderlichen Berechtigungen, um diese Seite zu sehen.",
            'cms_link' => "Zum CMS-Backend",
        ],
    ],
    'partial' => [
        'not_found_name' => "Das Partial ':name' wurde nicht gefunden.",
    ],
    'account' => [
        'sign_out' => 'Abmelden',
        'login' => 'Anmelden',
        'reset' => 'Zurücksetzen',
        'restore' => 'Wiederherstellen',
        'login_placeholder' => 'Benutzername',
        'password_placeholder' => 'Passwort',
        'forgot_password' => "Passwort vergessen?",
        'enter_email' => "Bitte E-Mail-Adresse eingeben",
        'enter_login' => "Bitte Benutzernamen eingeben",
        'email_placeholder' => "E-Mail",
        'enter_new_password' => "Bitte ein neues Passwort eingeben",
        'password_reset' => "Passwort zurücksetzen",
        'restore_success' => "Eine E-Mail mit weiteren Anweisungen zum Zurücksetzen Ihres Passworts wurde an Sie versandt",
        'restore_error' => "Ein Benutzer mit dem Namen ':login' wurde nicht gefunden",
        'reset_success' => "Ihr Passwort wurde erfolgreich zurückgesetzt. Sie können sich jetzt anmelden.",
        'reset_error' => "Konnte Passwort nicht zurücksetzen. Bitte erneut versuchen!",
        'reset_fail' => "Passwort-Zurücksetzung nicht möglich!",
        'apply' => 'Anwenden',
        'cancel' => 'Abbrechen',
        'delete' => 'Löschen',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
        'widget_label' => 'Widget',
        'widget_width' => 'Breite',
        'full_width' => 'ganze Breite',
        'add_widget' => 'Neues Widget',
        'widget_inspector_title' => 'Widget Konfiguration',
        'widget_inspector_description' => 'Dieses Widget konfigurieren',
        'widget_columns_label' => 'Breite :columns',
        'widget_columns_description' => 'Die Breite de Widgets, eine Zahl zwischen 1 und 10.',
        'widget_columns_error' => 'Bitte geben sie als Breite des Widgets eine Zahl zwischen 1 und 10 ein.',
        'columns' => '{1} Spalte|[2,Inf] Spalten',
        'widget_new_row_label' => 'Neue Reihe erzwingen',
        'widget_new_row_description' => 'Setzt das Widget in eine neue Reihe',
        'widget_title_label' => 'Titel des Widgets',
        'widget_title_error' => 'Ein Titel des Widgets wird benötigt.',
        'status' => [
            'widget_title_default' => 'System Status',
            'online' => 'online',
            'update_available' => '{0} Updates verfügbar!|{1} Update verfügbar!|[2,Inf] Updates verfügbar!',
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administratoren',
        'list_title' => 'Administratoren verwalten',
        'new' => 'Neuer Administrator',
        'login' => "Benutzername",
        'first_name' => "Vorname",
        'last_name' => "Nachname",
        'full_name' => "Kompletter Name",
        'email' => "E-Mail",
        'groups' => "Gruppen",
        'groups_comment' => "Geben Sie hier die Gruppenzugehörigkeit an",
        'avatar' => "Avatar",
        'password' => "Passwort",
        'password_confirmation' => "Passwort bestätigen",
        'superuser' => "Super User",
        'superuser_comment' => "Bestätigen Sie hier, um dem Nutzer Vollzugriff zu geben",
        'send_invite' => 'Einladung per E-Mail versenden',
        'send_invite_comment' => 'Hier bestätigen, dass eine Einladung per E-Mail erfolgt',
        'delete_confirm' => 'Möchten Sie diesen Administrator-Account wirklich löschen?',
        'return' => 'Zurück zur Administratoren Übersicht',
        'allow' => 'Zulassen',
        'inherit' => 'Vererben',
        'deny' => 'Verbieten',
        'group' => [
            'name' => 'Gruppe',
            'name_field' => 'Name',
            'menu_label' => 'Gruppen',
            'list_title' => 'Gruppen verwalten',
            'new' => 'Neue Administratoren Gruppe',
            'delete_confirm' => 'Möchten Sie diesen Administratoren-Gruppe wirklich löschen?',
            'return' => 'Zurück zur Gruppen Übersicht',
        ],
        'preferences' => [
            'not_authenticated' => 'Zum Speichern oder Anzeigen dieser Einstellungen liegt kein Nutzerkonto vor'
        ]
    ],
    'list' => [
        'default_title' => 'Auflisten',
        'search_prompt' => 'Suchen...',
        'no_records' => 'Keine Ergebnisse für diese Ansicht gefunden',
        'missing_model' => 'In :class benutztes Lisstenverhalten hat kein Model definiert.',
        'missing_column' => 'Keine Spaltendefinition für :columns.',
        'missing_columns' => 'In :class benutzte Liste behinhaltet keine Spalten',
        'missing_definition' => "Der Liste fehlt eine Spalte für ':field'.",
        'behavior_not_ready' => 'Listenverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
        'invalid_column_datetime' => "Spaltenwert ':column' ist kein gültiges DateTime Objekt, haben Sie eine  \$dates Referenz in dem Model vergessen?",
        'pagination' => 'Angezeigte Aufzeichnungen: :from-:to von :total',
        'prev_page' => 'Vorherige Seite',
        'next_page' => 'Nächste Seite',
        'loading' => 'Laden...',
        'setup_title' => 'Listen Setup',
        'setup_help' => 'Benutzen Sie Checkboxen, um Spalten auszuwählen, welche Sie in den Listen sehen möchten. Sie können die Position der Spalten ändern, indem Sie diese hinauf oder hinunter ziehen.',
        'records_per_page' => 'Aufzeichnungen pro Seite',
        'records_per_page_help' => 'Wählen Sie, wieviele Aufzeichnungen pro Seite dargestellt werden sollen. Bitte beachten Sie, dass eine hohe Anzahl pro Seite die Performance negativ beeinflussen kann.',
        'delete_selected' => 'Markierte löschen',
        'delete_selected_empty' => 'Keine Einträge zum Löschen markiert.',
        'delete_selected_confirm' => 'Markierte Einträge löschen?',
        'delete_selected_success' => 'Markierte Einträge erfolgreich gelöscht.'
    ],
    'fileupload' => [
        'attachment' => 'Anhang',
        'help' => 'Fügen Sie dem Anhang einen Titel und eine Beschreibung hinzu.',
        'title_label' => 'Titel',
        'description_label' => 'Beschreibung'
    ],
    'form' => [
        'create_title' => "Neuer :name",
        'update_title' => "Bearbeite :name",
        'preview_title' => "Vorschau für :name",
        'create_success' => ':name wurde erfolgreich erzeugt',
        'update_success' => ':name wurde erfolgreich aktualisiert',
        'delete_success' => ':name wurde erfolgreich gelöscht',
        'missing_id' => "Formulardatensatz-ID (Form record ID) fehlt.",
        'missing_model' => 'In :class genutztes Formularverhalten (behaviour) hat kein definiertes Model',
        'missing_definition' => "Formverhalten fehlt ein Feld für ':field'.",
        'not_found' => 'Formulareintrag mit der ID :id kann nicht gefunden werden.',
        'create' => 'Erstellen',
        'create_and_close' => 'Erstellen und schließen',
        'creating' => 'Erstellen...',
        'save' => 'Speichern',
        'save_and_close' => 'Speichern und schließen',
        'saving' => 'Wird gespeichert...',
        'delete' => 'Löschen',
        'deleting' => 'Löschen...',
        'undefined_tab' => 'Divers',
        'field_off' => 'Aus',
        'field_on' => 'An',
        'apply' => 'Anwenden',
        'cancel' => 'Abbrechen',
        'close' => 'Schließen',
        'ok' => 'OK',
        'or' => 'or',
        'confirm_tab_close' => 'Wollen Sie den Tab wirklich schließen? Ungespeicherte Änderungen gehen verloren.',
        'behavior_not_ready' => 'Formularverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
        'preview_no_files_message' => 'Keine Dateien wurden hochgeladen',
        'select' => 'Auswählen',
        'select_all' => 'Alle',
        'select_none' => 'Keine',
        'select_placeholder' => 'Bitte auswählen',
        'insert_row' => 'Reihe einfügen',
        'delete_row' => 'Reihe löschen',
        'concurrency_file_changed_title' => 'Datei wurde geändert',
        'concurrency_file_changed_description' => 'Die Datei, welche Sie bearbeiten, wurde auf von einem anderen Benutzer geändert. Sie können die Datei entweder erneut laden, wodurch Ihre Änderungen verloren gehen oder Sie überschreiben die Datei auf dem Server',
        'reload' => 'Erneut laden',
    ],
    'relation' => [
        'missing_definition' => "Verhalten (behaviour) der Verbindung umfasst keine Definition für ':field'.",
        'missing_model' => "Verhalten (behaviour) der Verbindung, die in :class benutzt wird, hat kein definiertes Model",
        'invalid_action_single' => "Dieser Vorgang kann nicht auf eine Einwege-Verbindung (singular) angewendet werden.",
        'invalid_action_multi' => "Dieser Vorgang kann nicht auf eine Mehrwege-Verbindung (multiple) angewendet werden.",
        'help'  => "Zum Hinzufügen auf ein Item klicken",
        'related_data' => "Verwandte :name Daten",
        'add' => "Hinzufügen",
        'add_name' => ":name hinzufügen",
        'create' => "Erstellen",
        'create_name' => "Erstelle :name",
        'update' => "Update",
        'update_name' => "Update :name",
        'remove' => "Entfernen",
        'remove_name' => ":name entfernen",
        'delete' => "Löschen",
        'delete_name' => ":name löschen",
        'delete_confirm' => "Sind Sie sicher?",
    ],
    'model' => [
        'name' => "Model",
        'not_found' => "Model ':class' mit ID :id konnte nicht gefunden werden",
        'missing_id' => "Für diesen Model-Datensatz ist keine ID angegeben",
        'missing_relation' => "Model ':class' hat keine definierte Verbindung ':relation'.",
        'invalid_class' => "In :class benutztes Model :model ist ungültig, da es von der Klasse \Model abgeleitet sein muss (inherit).",
        'mass_assignment_failed' => "Mass assignment failed for Model attribute ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'System Konfiguration Tips',
        'tips_description' => 'Es gibt Probleme, welche Sie beachten müssen, um das System korrekt zu konfigurieren.',
        'permissions'  => 'Verzeichnis :name oder ein Unterverzeichnis kann nicht von PHP beschrieben werden. Bitte setzen Sie die korrekten Rechte für den Webserver in diesem Verzeichnis.',
        'extension' => 'Die PHP Erweiterung :name ist nicht installiert. Bitte installieren Sie diese Library und aktivieren Sie die Erweiterung.'
    ],
    'editor' => [
        'menu_label' => 'Editor Einstellungen',
        'menu_description' => 'Verwalten der Code-Editor Einstellungen.',
        'font_size' => 'Schriftgrösse',
        'tab_size' => 'Tabgrösse',
        'use_hard_tabs' => 'Gedankenstrich bei Tabs',
        'code_folding' => 'Code-Folding',
        'word_wrap' => 'Word Wrap',
        'highlight_active_line' => 'Aktive Linie hervorheben',
        'show_invisibles' => 'unsichtbare Zeichen anzeigen',
        'show_gutter' => 'Gutter anzeigen',
        'theme' => 'Farb Schema',
    ],
    'tooltips' => [
        'preview_website' => 'Vorschau der Webseite'
    ],
    'mysettings' => [
        'menu_label' => 'Meine Einstellungen',
        'menu_description' => 'Einstellungen beziehen sich auf Ihren Administratoren Account',
    ],
    'myaccount' => [
        'menu_label' => 'Mein Account',
        'menu_description' => 'Updaten Sie Ihre Account-Details wie z.B. den Namen, die E-Mail-Adresse und das Passwort.',
        'menu_keywords' => 'Sicheres Anmelden'
    ],
    'backend_preferences' => [
        'menu_label' => 'Backend Einstellungen',
        'menu_description' => 'Verwalten der Spracheinstellungen und der Backenddarstellung.',
        'locale' => 'Sprache',
        'locale_comment' => 'Wählen Sie Ihre gewünschte Sprache für das Backend.',
    ],
    'access_log' => [
        'hint' => 'Dieser Log zeigt eine Liste mit erfolgreichen Anmelde-Verscuhen von Administratoren. Die Aufzeichnungen bleiben erhalten für :days Tage.',
        'menu_label' => 'Zugriffslog',
        'menu_description' => 'Sehen Sie sich eine Liste mit erfolgreichen Backend Benutzeranmeldungen an.',
        'created_at' => 'Datum & Uhrzeit',
        'login' => 'Anmeldung',
        'ip_address' => 'IP Adresse',
        'first_name' => 'Vorname',
        'last_name' => 'Nachname',
        'email' => 'E-Mail',
    ],
    'filter' => [
      'all' => 'Alle'
    ],
    'import_export' => [
        'upload_csv_file' => '1. CSV-Datei hochladen',
        'import_file' => 'Datei importieren',
        'first_row_contains_titles' => 'Erste Zeile enthält Spaltentitel',
        'first_row_contains_titles_desc' => 'Aktiviert lassen, falls erste Zeile Spaltentitel enthält.',
        'match_columns' => '2. Spalten der Datei den Datenbankfeldern zuordnen',
        'file_columns' => 'Spalten der Datei',
        'database_fields' => 'Datenbankfelder',
        'set_import_options' => '3. Importoptionen festlegen',
        'export_output_format' => '1. Exportformat wählen',
        'file_format' => 'Dateiformat',
        'standard_format' => 'Standardformat',
        'custom_format' => 'Benutzerdefiniertes Format',
        'delimiter_char' => 'Trennzeichen',
        'enclosure_char' => 'Textqualifizierer',
        'escape_char' => 'Escape-Zeichen',
        'select_columns' => '2. Spalten für den Export auswählen',
        'column' => 'Spalte',
        'columns' => 'Spalten',
        'set_export_options' => '3. Exportoptionen festlegen',
        'show_ignored_columns' => 'Ignorierte Spalten anzeigen',
        'auto_match_columns' => 'Spalten automatisch zuordnen',
        'created' => 'Erstellt',
        'updated' => 'Geändert',
        'skipped' => 'Übersprungen',
        'warnings' => 'Warnungen',
        'errors' => 'Fehler',
        'skipped_rows' => 'Übersprungene Zeilen',
        'import_progress' => 'Import-Fortschritt',
        'processing' => 'Verarbeite',
        'import_error' => 'Import-Fehler',
        'upload_valid_csv' => 'Bitte eine gültige CSV-Datei hochladen.',
        'drop_column_here' => 'Spalte hier ablegen...',
        'ignore_this_column' => 'Diese Spalte ignorieren',
        'processing_successful_line1' => 'Datei-Exportvorgang erfolgreich abgeschlossen!',
        'processing_successful_line2' => 'Ihr Browser sollte Sie nun automatisch zum Download weiterleiten.',
        'export_progress' => 'Export-Fortschritt',
        'export_error' => 'Export-Fehler',
        'column_preview' => 'Spaltenvorschau',
    ],
];
