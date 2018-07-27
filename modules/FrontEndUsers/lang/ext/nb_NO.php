<?php
$lang['title_forgotpw'] = 'Glemt passord';
$lang['import_deleteduser'] = 'Slettet bruker %s';
$lang['encrypted'] = 'Kryptert';
$lang['info_cookiename'] = 'Om satt, "husk meg" funksjonaliteten vill bli aktivert. Dette er tilsvarer cookie hold i live funksjonen, men varer opp til ett år.';
$lang['msg_username_readonly'] = 'Autentiserings forbrukeren tillater ikke endring av brukernavnet for denne kontoen';
$lang['msg_password_readonly'] = 'Autentiserings forbrukeren tillater ikke endring av passordet for denne kontoen';
$lang['prompt_normallogin'] = 'Direkte innlogging';
$lang['move_up'] = 'flytt opp';
$lang['move_down'] = 'flytt ned';
$lang['title_propmodule'] = 'Denne egenskapen er opprettet av en modul, og kan ikke redigeres';
$lang['not_available'] = 'Ikke tilgjengelig';
$lang['prompt_dflt_checked'] = 'Som standard, bør dette feltet være avkrysset';
$lang['operation_completed'] = 'Handling fullført';
$lang['members'] = 'Medlemmer';
$lang['view_filter'] = 'Vis filter';
$lang['data'] = 'Data';
$lang['applied'] = 'Brukt';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['page'] = 'Side';
$lang['prompt_allow_changeusername'] = 'Tillat å endre brukernavn';
$lang['info_allow_changeusername'] = 'Om aktivert, så vil brukere tillates å endre sitt brukernavn og andre innstillinger';
$lang['template_saved'] = 'Mal lagret';
$lang['template_resetdefaults'] = 'Mal tilbakestilt til standard';
$lang['lbl_settings'] = 'Innstillinger';
$lang['lbl_templates'] = 'Maler';
$lang['enable_captcha'] = 'Aktiver captcha på innloggingskjemaet';
$lang['info_enable_captcha'] = 'Hvis brukeren ikke er logget inn, og modulens preferanser er satt til å vise innloggingskjema, styrer dette alternativet om en captcha vises på innloggingskjemaet.     Hvis captcha er tilgjengelig';
$lang['pagetype_unauthorized'] = 'Du er ikke autorisert til å se dette innholdet';
$lang['info_contentpage_grouplist'] = 'Angi en liste over FEU-grupper som kan ha tilgang til denne siden. Ved å ikke velge noen grupper så vil enhver bruker som er logget inn med FEU få tillatelse til å se siden';
$lang['pagetype_settings'] = 'Innstillinger for Beskyttede sider';
$lang['pagetype_groups'] = 'Tillatte grupper';
$lang['info_pagetype_groups'] = 'Velg grupper som har (som standard) lov til å vise beskyttede sider. En redaktør med "Behandle alt Innhold"-tillatelse kan overstyre dette for hver side';
$lang['pagetype_action'] = 'Handling for utilstrekkelig tilgang';
$lang['info_pagetype_action'] = 'Angi atferd for personer som åpner denne siden uten tilstrekkelig tillatelse. Du kan enten omdirigere til en bestemt side, eller vise innloggingskjemaet';
$lang['showloginform'] = 'Vis innloggingskjema';
$lang['redirect'] = 'Omdiriger til en side';
$lang['pagetype_redirectto'] = 'Omdiriger til';
$lang['info_pagetype_redirectto'] = 'Angi siden å omdirigere til. Hvis du velger Ingen, og handlingen er satt til "omdirigere til en side" så vil brukeren bli presentert med en melding som indikerer at de ikke har tilgang til siden';
$lang['permissions'] = 'Tillatelser';
$lang['feu_protected_page'] = 'Beskyttet innhold';
$lang['prompt_viewprops'] = 'Velg ekstra egenskaper som skal vises';
$lang['view'] = 'Vis';
$lang['info_ignore_userid'] = 'Om valgt så vil importrutinen forsøke å legge til brukere uavhengig av brukerid kolonnen. Hvis en bruker eksisterer allerede med navnet som er angitt i importfilen, vil en feilmelding bli generert';
$lang['ignore_userid'] = 'Ignorer UserID kolonnen ved import';
$lang['export_passhash'] = 'Eksporter passord hash til filen';
$lang['info_export_passhash'] = 'Passordet hash er bare nyttig hvis passord salt på import-verten er identisk med eksport-verten';
$lang['error_adjustsalt'] = 'Passord salt kan ikke endres';
$lang['prompt_pwsalt'] = 'Passord salt';
$lang['info_pwsalt'] = 'FrontEndUsers salter alle passord med denne nøkkelen som er opprettet ved installasjon. Når brukerne har blitt lagt til databasen så kan salt ikke endres. Saltet kan være tomt for eldre installasjoner.';
$lang['advanced_settings'] = 'Avanserte innstillinger';
$lang['info_sessiontimeout'] = 'Angi antall sekunder før en inaktiv bruker automatisk blir logget ut av nettstedet';
$lang['prompt_expireusers_interval'] = 'Bruker utløps intervall';
$lang['info_expireusers_interval'] = 'Angi en verdi (i sekunder) som viser hvor ofte systemet skal tvinge brukere hvor sesjonen har utløpt å bli logget ut. Dette er en optimalisering for å lagre databasespørringer. Dersom satt tomt eller satt til 0 - utløp vil bli utført på hver forespørsel.';
$lang['msg_settingschanged'] = 'Dine innstillinger ble vellykket lagret';
$lang['forcedlogouttask_desc'] = 'Tving brukere til å logge ut på gitte intervaller';
$lang['prompt_forcelogout_times'] = 'Tider for tvunget utlogging';
$lang['info_forcelogout_times'] = 'Angi en kommaseparert liste med tider som HH:MM,HH:MM hvor brukerne vil bli tvangs utlogget. Merk, bruker dette psuedocron mekanismen så du må være sikker på at de tidene oppgitt her vil falle rimelig sammen med "pseudocron granularitet" og at nok forespørsler vil oppstå til ditt nettsted for å sikre at pseudocron utføres.';
$lang['prompt_forcelogout_sessionage'] = 'Ekskludere brukere som har vært aktive i <em>(minutter)</em>';
$lang['info_forcelogout_sessionage'] = 'Hvis spesifisert, vil alle brukere som har vært aktive i dette antallet sekunder ikke bli tvangs utlogget';
$lang['areyousure_delete'] = 'Er du sikker på at du vil slette brukeren %s';
$lang['error_invalidfileextension'] = 'Den opplastede filen passer ikke til listen med tillatte filtyper';
$lang['postuninstall'] = 'Alle data assosiert med FrontEndUsers modulen har blitt slettet';
$lang['info_ecomm_paidregistration'] = 'Om slått på, så vil denne modulen lytte på handlinger fra Ecommerce suiten. De følgende innstillingene har kun effekt om denne innstillingen er påslått.';
$lang['prompt_ecomm_paidregistration'] = 'Lytt på Order handlinger';
$lang['info_paidreg_settings'] = 'De følgende innstillingene gjelder bare hvis du bruker Selvregistrering(Self Registration) og tillater Betalt påmelding';
$lang['none'] = 'Ingen';
$lang['delete_user'] = 'Slett bruker';
$lang['expire_user'] = 'Tidsutløp bruker';
$lang['prompt_action_ordercancelled'] = 'Handling å utføre når en abonnementbestilling er kansellert';
$lang['prompt_action_orderdeleted'] = 'Handling å utføre når en abonnementordre er slettet';
$lang['ecommerce_settings'] = 'Ecommerce innstillinger';
$lang['securefieldmarker'] = 'Sikkert felt markør';
$lang['securefieldcolor'] = 'Sikkert felt farge';
$lang['prompt_encrypt'] = 'Lagre disse data kryptert i databasen';
$lang['error_notsupported'] = 'Den valgte opsjonen er ikke støttet med din nåværende konfigurasjon';
$lang['audit_user_created'] = 'Bruker automatisk opprettet';
$lang['info_auto_create_unknown'] = 'Om en bruker er identifisert av en ekstern identifikasjonsmodul, men ikke er kjent i FrontEndUsers modulen - skal da en FEU-konto opprettes automatisk?';
$lang['prompt_auto_create_unknown'] = 'Opprett automatisk ukjente brukere';
$lang['display_settings'] = 'Visningsinnstillinger';
$lang['info_std_auth_settings'] = 'Den følgende innstillingen er kun gyldig om "Innebygd identifikasjon" er benyttet.';
$lang['info_support_lostun'] = 'Å velge Nei vi slå av muligheten for en bruker til å be om glemt innloggingsinformasjon, uavhengig av andre innstillinger';
$lang['info_support_lostpw'] = 'Å velge Nei vil slå av muligheten for en bruker til å be om tilbakestilling av passord, uavhengig av andre innstillinger';
$lang['prompt_support_lostun'] = 'Tillat brukere å be om sitt brukernavn';
$lang['prompt_support_lostpw'] = 'Tillat brukere å be om passordendring';
$lang['auth_settings'] = 'Identifikasjonsinnstillinger';
$lang['authentication'] = 'Innebygd identifikasjon';
$lang['auth_builtin'] = 'FEU Standard identifikasjon';
$lang['auth_module'] = 'Identifikasjonsmodul/metode';
$lang['info_auth_module'] = 'FrontendUsers modulen støtter støtter bruk alternative metoder for identifikasjon, med varierende funksjoner. Noe funksjonalitet vil ikke fungere eller vil være deaktivert når ikke den innebygde identifikasjonsmetode er i bruk';
$lang['error_user_nonunique_field_value'] = 'Verdien oppgitt for %s er allerede i bruk av en annen bruker';
$lang['unique'] = 'Unik';
$lang['error_nonunique_field_value'] = 'Verdien som er oppgitt for %s (%s) er ikke unik';
$lang['prompt_force_unique'] = 'Tving verdier for denne egenskapen til å unik på tvers av alle kontoer';
$lang['help_returnlast'] = 'Om benyttet med innlogging- og utlogging-skjemaene vil denne parameter, om den er spesifisert, indikere at brukeren skal sendes tilbake til siden (etter url) som brukeren var på før handlingen hendte. Denne parameter vil overstyre omdirigering preferansene, og returnto parameteren.';
$lang['title_reset_session'] = 'Innloggings sessionstidsutløpsadvarsel';
$lang['msg_reset_session'] = 'Din innloggingsession er i ferd med å utløpe, vennligst klikk  OK  for å bekrefte din tilstedeværelse på dette nettstedet.';
$lang['ok'] = 'OK';
$lang['resetsession_template'] = 'Tilbakestill sessionsmalen';
$lang['info_name'] = 'Dette er feltnavnet, som skal benyttes for adressering i smarty. Det må bestå av kun alfanummeriske bokstaver og understreker.';
$lang['visitors_tab'] = 'Besøkere';
$lang['feu_groups_prompt'] = 'Velg en eller flere FEU-grupper som er tillatt å se denne siden';
$lang['error_mustselect_group'] = 'En gruppe må velges';
$lang['selectone'] = 'Velg en';
$lang['start_year'] = 'Startår';
$lang['end_year'] = 'Sluttår';
$lang['date'] = 'Dato';
$lang['prompt_thumbnail_size'] = 'Miniatyrbildestørrelse';
$lang['OnUpdateGroup'] = 'Ved endring av Brukergruppe(User Group)';
$lang['error_toomanyselected'] = 'For mange brukere ble valgt for masse-handlinger.... Vennligst reduser ned til 250 eller mindre';
$lang['confirm_delete_selected'] = 'Er du sikker på at du vil slette de valgte brukerne?';
$lang['delete_selected'] = 'Sletting valgt';
$lang['prompt_randomusername'] = 'Generer et tilfeldig brukenavn ved opprettelse av nye brukere';
$lang['months'] = 'måneder';
$lang['prompt_expireage'] = 'Standard bruker utløpstid';
$lang['notification_settings'] = 'Varsling innstillinger';
$lang['property_settings'] = 'Egenskap innstillinger';
$lang['redirection_settings'] = 'Omdirigering innstillinger';
$lang['general_settings'] = 'Generelle innstillinger';
$lang['session_settings'] = 'Session og cookie innstillinger';
$lang['field_settings'] = 'Felt innstillinger';
$lang['prop_textarea_wysiwyg'] = 'Tillat bruk av wysiwyg på dette tekstområdet';
$lang['editing_user'] = 'Rediger bruker';
$lang['noinline'] = 'Ikke bruk skjema som inline';
$lang['info_lostun'] = 'Klikk her om du ikke kan huske dine innloggingsdetaljer';
$lang['info_forgotpw'] = 'Klikk her om du ikke kan huske ditt passord';
$lang['info_logout'] = 'Klikk her for å logge ut';
$lang['info_changesettings'] = 'Klikk her for å endre ditt passord eller annen informasjon';
$lang['viewuser_template'] = 'Vis bruker mal';
$lang['event'] = 'Hendelse';
$lang['feu_event_notification'] = 'FEU Hendelse varsel';
$lang['prompt_notification_address'] = 'Varsel e-postadresse';
$lang['prompt_notification_template'] = 'Varsling E-postmal';
$lang['prompt_notification_subject'] = 'Varsling E-postemne';
$lang['prompt_notifications'] = 'E-postvarsling';
$lang['OnLogin'] = 'Ved innlogging';
$lang['OnLogout'] = 'Ved utlogging';
$lang['OnExpireUser'] = 'Ved utløp av session';
$lang['OnCreateUser'] = 'Ved Bruker opprettet';
$lang['OnDeleteUser'] = 'Ved Bruker slettet';
$lang['OnUpdateUser'] = 'Ved endring av brukerinnstillinger';
$lang['OnCreateGroup'] = 'Ved opprettelse av brukergruppe';
$lang['OnDeleteGroup'] = 'Ved sletting av brukergruppe';
$lang['lostunconfirm_premsg'] = 'Funksjonen for mistet innloggingsdetaljer er fullført. Vi har funnet et unikt brukernavn som passer til de detaljene du har oppgitt.';
$lang['your_username_is'] = 'Ditt brukernavn er';
$lang['lostunconfirm_postmsg'] = 'Vi anbefaler at du tar vare på denne informasjonen på en sikker, men tilgjengelig plass.';
$lang['prompt_after_change_settings'] = 'PageID/Alias å hoppe til etter endring av innstillinger';
$lang['prompt_after_verify_code'] = 'PageID/Alias å hoppe til etter kode bekreftelse *';
$lang['lostun_details_template'] = 'Glemt Brukernavn detaljmal';
$lang['lostun_confirm_template'] = 'Glemt Brukernavn bekreftelsesmal';
$lang['error_nonuniquematch'] = 'Feil: Mere enn en brukerkonto passer med de spesifiserte egenskaper';
$lang['error_cantfinduser'] = 'Feil: Kunne ikke finne en bruker som passer';
$lang['error_groupnotfound'] = 'Feil: Kunne ikke finne en gruppe med det navnet';
$lang['readonly'] = 'Skrivebeskyttet';
$lang['prompt_usermanipulator'] = 'Bruker Manipulator Klasse';
$lang['admin_logout'] = 'Logget ut av administrator';
$lang['prompt_loggedinonly'] = 'Vis kun de som er innlogget';
$lang['prompt_logout'] = 'Logg ut denne brukeren';
$lang['user_properties'] = 'Bruker egenskaper';
$lang['userhistory'] = 'Bruker historie';
$lang['export'] = 'Eksporter';
$lang['clear'] = 'Tøm';
$lang['prompt_exportuserhistory'] = 'Eksporter Brukerhistorie til ASCII fil som er minst';
$lang['prompt_clearuserhistory'] = 'Tøm Brukerhistorie oppføringer som er minst';
$lang['title_lostusername'] = 'Glemt dine innloggingsdetaljer?';
$lang['title_rssexport'] = 'Eksporter gruppedefinisjon (og egenskaper) til XML';
$lang['title_userhistorymaintenance'] = 'Behandle Brukerhistorie';
$lang['yes'] = 'Ja';
$lang['no'] = 'Nei';
$lang['prompt_of'] = 'av';
$lang['date_allrecords'] = '** Ingen grense **';
$lang['date_onehourold'] = 'En time gamle';
$lang['date_sixhourold'] = 'Seks timer gamle';
$lang['date_twelvehourold'] = 'Tolv timer gamle';
$lang['date_onedayold'] = 'En dag gamle';
$lang['date_oneweekold'] = 'En uke gamle';
$lang['date_twoweeksold'] = 'To uker gamle';
$lang['date_onemonthold'] = 'En måned gamle';
$lang['date_threemonthsold'] = 'Tre måneder gamle';
$lang['date_sixmonthsold'] = 'Seks måneder gamle';
$lang['date_oneyearold'] = 'Ett år gamle';
$lang['title_groupsort'] = 'Gruppering og Sortering';
$lang['prompt_recordsfound'] = 'Oppføringer som passer kriteriet';
$lang['sortorder_username_desc'] = 'Synkende brukernavn';
$lang['sortorder_username_asc'] = 'Stigende brukernavn';
$lang['sortorder_date_desc'] = 'Synkende Dato';
$lang['sortorder_date_asc'] = 'Stigende Dato';
$lang['sortorder_action_desc'] = 'Synkende Hendelsestype';
$lang['sortorder_action_asc'] = 'Stigende Hendelsestype';
$lang['sortorder_ipaddress_desc'] = 'Synkende IP-adresse';
$lang['sortorder_ipaddress_asc'] = 'Stigende IP-adresse';
$lang['info_nohistorydetected'] = 'Ikke noe historisk funnet';
$lang['reset'] = 'Tilbakestill';
$lang['prompt_group_ip'] = 'Grupper etter IP-adresse';
$lang['prompt_filter_eventtype'] = 'Hendelsestype Filter';
$lang['prompt_filter_date'] = 'Vis kun hendelser som er mindre enn:';
$lang['prompt_pagelimit'] = 'Sidegrense';
$lang['for'] = 'for';
$lang['title_userhistory'] = 'Brukerhistorie rapport';
$lang['unknown'] = 'Ukjent';
$lang['prompt_ipaddress'] = 'IP-adresse';
$lang['prompt_eventtype'] = 'Hendelsestype';
$lang['prompt_date'] = 'Dato';
$lang['prompt_return'] = 'Tilbake';
$lang['import_complete_msg'] = 'Import oppgaven er ferdig';
$lang['prompt_linesprocessed'] = 'Linjer prosessert';
$lang['prompt_errors'] = 'Det oppstod feil';
$lang['prompt_recordsadded'] = 'Poster lagt til';
$lang['error_nogroupproprelns'] = 'Kunne ikke finne egenskaper for gruppe %s';
$lang['error_noresponsefromserver'] = 'Fikk ingen respons fra SMTP serveren';
$lang['error_importfilenotfound'] = 'Spesifiserte filer (%s) ble ikke funnet';
$lang['error_importfieldvalue'] = 'Ugyldig verdi for nedtrekk eller flervalgsfelt %s';
$lang['error_importfieldlength'] = 'Felt %s overskrider maksimum lengde';
$lang['error_importusers'] = 'Import Feil (linje %s): %s';
$lang['error_propertydefns'] = 'Kunne ikke få tak i egenskap definisjonene (intern feil)';
$lang['error_problemsettinginfo'] = 'Problem med å sette brukerinfo';
$lang['error_importrequiredfield'] = 'Kunne ikke finne en kolonne som samsvarte med det påkrevde feltet %es';
$lang['error_nogroupproperties'] = 'Kunne ikke finne egenskaper for den spesifiserte gruppen';
$lang['error_importfileformat'] = 'Filen oppgitt for import er ikke i korrekt format';
$lang['error_couldnotopenfile'] = 'Kunne ikke åpne filen';
$lang['prompt_importdestgroup'] = 'Importer Brukere til denne gruppen';
$lang['prompt_importfilename'] = 'Inndata CSV fil';
$lang['prompt_importxmlfile'] = 'Inndata XML fil';
$lang['prompt_exportusers'] = 'Eksporter Brukere';
$lang['prompt_importusers'] = 'Importer Brukere';
$lang['prompt_clear'] = 'Tøm';
$lang['prompt_image_destination_path'] = 'Bilde målsti';
$lang['error_missing_upload'] = 'Et problem har oppstått med en manglende (men nødvendig) opplasting';
$lang['error_bad_xml'] = 'Kunne ikke behandle den tilbudte XML filen';
$lang['error_notemptygroup'] = 'Kan ikke slette en gruppe som fortsatt har brukere';
$lang['error_norepeatedlogins'] = 'Denne brukeren er allerede innlogget';
$lang['error_captchamismatch'] = 'Teksten fra bildet ble ikke skrevet riktig';
$lang['prompt_allow_repeated_logins'] = 'Tillater brukere å logge inn mer en en gang';
$lang['prompt_allowed_image_extensions'] = 'Bilde filendelser som brukere får lov å laste opp';
$lang['event_help_OnRefreshUser'] = '<h3>OnRefreshUser</h3>
<p>An event generated when the user session is refreshed.</p>
<h4>Parameters:</h4>
<ul>
  <li><em>id</em> - The User id</li>
</ul>';
$lang['event_help_OnDeleteUser'] = '<h3>OnDeleteUser<h3>
<p>En hendelse/event generert når en bruker slettes</p>
<h4>Parametere</h4>
<ul>
<li><em>username</em> - Brukernavnet</li>
<li><em>id</em> - Bruker IDen</li>
<li><em>props</em> - En hash fylt med egenskapene til brukeren</li>
</ul>';
$lang['event_help_OnCreateUser'] = '<h3>OnCreateUser<h3>
<p>En hendelse/event generert når en bruker opprettes</p>
<h4>Parametere</h4>
<ul>
<li><em>name</em> - Brukernavnet</li>
<li><em>id</em> - Bruker IDen</li>
</ul>';
$lang['event_help_OnUpdateUser'] = '<h3>OnUpdateUser<h3>
<p>En hendelse generert når en bruker er oppdatert (enten av brukeren selv eller av admin)</p>
<h4>Parametere</h4>
<ul>
<li><em>name</em> - Brukernavnet</li>
<li><em>id</em> - BrukerID\'en</li>
</ul>';
$lang['event_help_OnCreateGroup'] = '<h3>OnCreateGroup<h3>
<p>En hendelse/event generert når en gruppe er opprettet</p>
<h4>Parametere</h4>
<ul>
<li><em>name</em> - Gruppenavnet</li>
<li><em>description</em> - Gruppebeskrivelsen</li>
<li><em>id</em> - Gruppe IDen</li>
</ul>';
$lang['event_help_OnDeleteGroup'] = '<h3>OnDeleteGroup<h3>
<p>En hendelse/event generert når en gruppe er slettet</p>
<h4>Parametere</h4>
<ul>
<li><em>name</em> - Gruppenavnet</li>
<li><em>id</em> - Gruppe IDen</li>
</ul>';
$lang['event_help_OnLogin'] = '<h3>OnLogin<h3>
<p>En hendelse/event generert når en bruker logger seg inn</p>
<h4>Parametere</h4>
<ul>
<li><em>id</em> - id\'en for den innloggede bruker</li>
<li><em>username</em> - Navnet på brukeren som er logget inn</li>
<li><em>ip</em> - Webklientens IP adresse </li>
</ul>';
$lang['event_help_OnLogout'] = '<p>En hendelse/event generert når en bruker logger ut</p>
<h4>Parametere</h4>
<ul>
<li><em>id</em> - Bruker IDen</li>
</ul>';
$lang['event_help_OnExpireUser'] = '<p>En hendelse/event generert når en brukersession utløper</p>
<h4>Parametereh4>
<ul>
<li><em>username</em> - Navnet på brukeren som utløp</li>
<li><em>id</em> - Bruker IDen til brukeren som utløp</li>
</ul>';
$lang['event_info_OnLogin'] = 'En hendelse som genereres når en bruker logger seg inn i systemet';
$lang['event_info_OnLogout'] = 'En hendelse som genereres når en bruker logger seg ut av systemet';
$lang['event_info_OnExpireUser'] = 'En hendelse som genereres når en bruker-session har utløpt';
$lang['event_info_OnCreateUser'] = 'En hendelse generert når en bruker er opprettet';
$lang['event_info_OnRefreshUser'] = 'En hendelse som genereres når en bruker-session er oppfrisket';
$lang['event_info_OnUpdateUser'] = 'En hendelse generert når en brukers info er oppdatert';
$lang['event_info_OnDeleteUser'] = 'En hendelse generert når en brukerkonto er slettet';
$lang['event_info_OnCreateGroup'] = 'En hendelse generert når en brukergruppe er opprettet';
$lang['event_info_OnUpdateGroup'] = 'En hendelse generert når en brukergruppe er oppdatert';
$lang['event_info_OnDeleteGroup'] = 'En hendelse generert når en brukergruppe er slettet';
$lang['backend_group'] = 'Backend gruppe';
$lang['info_star'] = '* Følgende felt er fullstendige Smartymaler.<br/>Sammen med andre tidligere eksisterende smarty variabler og plugins, så er ($username) og ($ gruppe) variablene tilgjengelige. <em> (($group)-variablen kobler den første gruppen til den som brukeren tilhører.)</ em>.';
$lang['info_admin_password'] = 'Rediger dette feltet for å endre brukerens passord';
$lang['info_admin_repeatpassword'] = 'Rediger dette feltet for å endre brukerens passord';
$lang['error_username_exists'] = 'En bruker med samme brukernavn finnes allerede';
$lang['nocsvresults'] = 'Ingen resultater fra csv eksporten';
$lang['prompt_unfldlen'] = 'Lengden på brukernavnfeltet';
$lang['prompt_pwfldlen'] = 'Lengden på passordfeltet';
$lang['error_invalidpasswordlengths'] = 'Min/Maks lengde på passordet er ugyldig';
$lang['error_invalidusernamelengths'] = 'Min/Maks lengde på brukernavn er ugyldig';
$lang['error_invalidemailaddress'] = 'Ugyldig e-postadresse';
$lang['error_noemailaddress'] = 'Vi kunne ikke finne en e-postadresse for denne kontoen';
$lang['error_problemseettinginfo'] = 'Kan ikke lagre brukerinformasjonen';
$lang['error_settingproperty'] = 'Kan ikke lagre egenskapen';
$lang['user_added'] = 'Bruker lagt til %s = %s';
$lang['user_deleted'] = 'Bruker slettet uid=%s';
$lang['propertyfilter'] = 'Egenskaper';
$lang['valueregex'] = 'Verdi (regular expression)';
$lang['warning_effectsfieldlength'] = 'Advarsel: Disse feltene påvirker størrelsen på inndatafeltene i skjemaer. Å minske disse verdiene på et eksisterende nettsted er ikke å anbefale';
$lang['confirm_submitprefs'] = 'Er du sikker på at du vil endre denne modulens innstillinger?';
$lang['error_emailalreadyused'] = 'E-postadressen er allerede i bruk';
$lang['prompt_usecookiestoremember'] = 'Bruk informasjonskapsler(cookies) for å huske innloggingsdetaljer';
$lang['prompt_cookiename'] = 'Navnet på informasjonskapselen(cookie)';
$lang['prompt_allow_duplicate_emails'] = 'Tillat identiske e-postadresser';
$lang['prompt_username_is_email'] = 'E-postadresse er brukernavn';
$lang['info_cookie_keepalive'] = 'Forsøk å holde innloggingen ved live ved å benytte en informasjonskapsel <em>informasjonskapselen vil bli tilbakesatt når du er aktiv på nettstedet)</em>';
$lang['info_allow_duplicate_emails'] = '(tillat flere brukere med samme e-postadresse)';
$lang['info_username_is_email'] = '(brukers e-postadresse er deres brukernavn -- ikke sett dette sammen med "Tillat identiske e-postadresser"!)';
$lang['prompt_allow_duplicate_reminders'] = 'Tillat flere "glemt passord" påminnelser?';
$lang['info_allow_duplicate_reminders'] = '(tillat at en bruker ber om nullstilling av passordet, selv om de ikke har benyttet det forrige)';
$lang['prompt_feusers_specific_permissions'] = 'Benytt Front-end User spesifike tillatelser?';
$lang['info_feusers_specific_permissions'] = '(Normalt er, FEUser tillatelser de samme som tilsvarende Admin-område tillatelser - Legg til bruker, Legg til gruppe, osv. Om du haker av her, vil det være adskilte/egne tillatelser for FEUsers.)';
$lang['error_missingupload'] = 'Klarte ikke å finne den opplastede fila (intern feil)';
$lang['error_problem_upload'] = 'Det er et problem med din opplastede fil. Vennligst forsøk på nytt';
$lang['error_missingusername'] = 'Du oppga ikke brukernavn';
$lang['error_missingemail'] = 'Du oppga ikke en e-postadresse';
$lang['error_missingpassword'] = 'Du oppga ikke passord';
$lang['frontenduser_logout'] = 'Frontend bruker utlogging';
$lang['frontenduser_loggedin'] = 'Frontend bruker innlogging';
$lang['editprop_infomsg'] = '<font color="red"><b>VÆR VARSOM</b> når eksisterende egenskaper som er tilegnet grupper forandres, du kan komme i skade for å ødelegge noe og dermed nettstedet <i>(spesielt hvis du minsker feltlengder, etc)</i></font>';
$lang['info_smtpvalidate'] = 'Denne funksjonen virker ikke i Windows';
$lang['msg_dontcreateusername'] = 'Ikke opprett egenskaper for brukernavn eller passord da disse egenskapene er innebygget i selve FrontEndUser modulen.';
$lang['prompt_exportcsv'] = 'Eksporter brukere til CSV';
$lang['exportcsv'] = 'Eksporter';
$lang['importcsv'] = 'Importer';
$lang['admin'] = 'Admin';
$lang['editprop'] = 'Rediger egenskap';
$lang['maxlength'] = 'Maks lengde';
$lang['created'] = 'Opprettet';
$lang['sortby'] = 'Sorter etter';
$lang['sort'] = 'Sorterer';
$lang['usersingroup'] = 'Brukere i valgt(e) gruppe(r)';
$lang['userlimit'] = 'Begrens resultatene til';
$lang['error_noemailfield'] = 'Kunne ikke finne et e-postfelt for denne brukeren. Du må kanskje kontakte systemadministratoren';
$lang['prompt_forgotpw_page'] = 'SideID/Alias for skjemaet Glemt passord';
$lang['prompt_changesettings_page'] = 'SideID/Alias for skjemaet Endre innstillinger';
$lang['prompt_login_page'] = 'SideID/Alias det skal hoppes til etter innlogging *';
$lang['prompt_logout_page'] = 'SideID/Alias det skal hoppes til etter utlogging *';
$lang['sortorder'] = 'Sorteringsrekkefølge';
$lang['prompt_numresetrecord'] = 'Noen brukere holder på å tilbakestille sine tapte passord. Nå er dette antallet:';
$lang['remove1week'] = 'Fjern alle innlegg som er mer enn en uke gamle';
$lang['remove1month'] = 'Fjern alle innlegg som er mer enn en måned gamle';
$lang['removeall'] = 'Fjern alle innlegg';
$lang['areyousure'] = 'Er du sikker?';
$lang['error_invalidcode'] = 'En ugyldig kode er lagt inn, vennligst prøv igjen.';
$lang['error_tempcodenotfound'] = 'En midlertidig kode for din brukerID ble ikke funnet i databasen';
$lang['forgotpassword_verifytemplate'] = 'Mal som benyttes for å vise verifikasjonsskjemaet';
$lang['forgotpassword_emailtemplate'] = 'Mal som benyttes på glemt passord epsoten';
$lang['error_resetalreadysent'] = 'Endring av passord for denne kontoen er allerede satt i gang av deg eller noen annen. Sjekk e-posten din, du kan ha mottatt videre instruksjoner om hvordan dette skal gjennomføres.';
$lang['error_dberror'] = 'Database feil';
$lang['message_forgotpwemail'] = 'Du får denne meldingen fordi noen har fortalt vår nettside at du har mistet ditt passord.  Om dette er korrekt, les instruksjonene nedenfor.  Om du ikke skjønner hva dette kan være, så kan du trygt slette denne meldingen, og vi takker for din oppmerksomhet.';
$lang['prompt_code'] = 'Kode';
$lang['message_code'] = 'Den følgende kode har blitt generert tilfeldig for å gjenkjenne brukerkontoen.  når du klikker linken nedenfor vil du få opp et felt for å skrive inn denne koden.  Normal er feltet forhåndsutfylt for deg, men i tilfelle det ikke er - så er koden:';
$lang['prompt_link'] = 'Hvis du klikker på linken som følger vil du bli ført til en nettside hvor du kan legge inn vedlagte kode og legge inn nytt passord.';
$lang['lostpassword_emailsubject'] = 'Glemt passord';
$lang['error_nomailermodule'] = 'Kunne ikke finne CMSMailer modulen';
$lang['info_forgotpwmessagesent'] = 'En e-post er blitt sendt til %s med instruksjoner om hvordan passordet kan legges inn på ny. Takk.';
$lang['lostpw_message'] = 'Har du glemt eller mistet passordet ditt? Fyll inn brukernavnet ditt her så vil vi sende deg en e-post om hvordan du kan tilbakestille det.';
$lang['forgotpassword_template'] = 'Mal for glemt passord';
$lang['lostusername_template'] = '\'Mistet brukernavn\' mal';
$lang['error_propnotfound'] = 'Egenskap %s ikke funnet';
$lang['propsfound'] = 'Egenskap funnet';
$lang['addprop'] = 'Legg til egenskap';
$lang['error_requiredfield'] = 'Et obligatorisk felt (%s) var tomt';
$lang['info_emptypasswordfield'] = 'Evt. nytt passord her for å endre det eksisterende';
$lang['error_notloggedin'] = 'Det ser ikke ut til at du er innlogget';
$lang['user_settings'] = 'Innstillinger';
$lang['user_registration'] = 'Registrering';
$lang['error_accountexpired'] = 'Kontoen har utløpt';
$lang['error_improperemailformat'] = 'Feil på e-postadressens formatering';
$lang['error_invalidexpirydate'] = 'Ugyldig utløpsdato. Dette kan være systemrelatert. Forsøk med å sette et tidligere år.';
$lang['error_problemsettingproperty'] = 'Feil ved setting av egenskap %s for bruker $s';
$lang['error_invalidgroupid'] = 'Ugyldig gruppeID %s';
$lang['hiddenfieldmarker'] = 'Merke for skjult felt';
$lang['hiddenfieldcolor'] = 'Farge for skjult felt';
$lang['hidden'] = 'Skjult';
$lang['error_duplicatename'] = 'En egenskap med det navnet er allerede definert';
$lang['error_noproperties'] = 'Ingen egenskap definert';
$lang['error_norelations'] = 'Ingen egenskaper ble valgt for denne gruppen';
$lang['nogroups'] = 'Ingen grupper er definert';
$lang['groupsfound'] = 'Grupper funnet';
$lang['error_onegrouprequired'] = 'Det må tildeles medlemskap for minst en gruppe';
$lang['prompt_requireonegroup'] = 'Krev medlemskap for minst en gruppe';
$lang['back'] = 'Tilbake';
$lang['error_missing_required_param'] = '%s feltet må fylles ut';
$lang['requiredfieldmarker'] = 'Merk obligatoriske felt med';
$lang['requiredfieldcolor'] = 'Uthev obligatoriske felt med';
$lang['next'] = 'Neste';
$lang['error_groupexists'] = 'En gruppe med det navnet eksisterer allerede';
$lang['required'] = 'Obligatorisk';
$lang['optional'] = 'Valgfritt';
$lang['off'] = 'Av';
$lang['size'] = 'Størrelse';
$lang['sizecomment'] = '<br/>(Maks størrelse i pixler for enhver dimensjon på bildet)';
$lang['length'] = 'Lengde';
$lang['lengthcomment'] = '<br>(bokstaver i tekstinnskrivingen)';
$lang['seloptions'] = 'Nedtrekksvalg, separert med linjeskift. Verdier kan separeres fra tekst med et = tegn. F.eks. Hunnkjønn=f';
$lang['radiooptions'] = 'Radioknapp etiketter, separert med linjeskift. Verdier kan separeres fra tekst med et = tegn. F.eks: Hunnkjønn=k';
$lang['prompt'] = 'Spør';
$lang['prompt_type'] = 'Type';
$lang['type'] = 'Type';
$lang['fieldstatus'] = 'Felt Status';
$lang['usedinlostun'] = 'Spør i Mistet<br/>brukernavn';
$lang['text'] = 'Tekst';
$lang['checkbox'] = 'Avkryssningsboks';
$lang['multiselect'] = 'Flervalgsliste';
$lang['radiobuttons'] = 'Radioknapper';
$lang['image'] = 'Bilde';
$lang['email'] = 'E-postadresse';
$lang['textarea'] = 'Tekstområde';
$lang['dropdown'] = 'Nedtrekksmeny';
$lang['msg_currentlyloggedinas'] = 'Velkommen';
$lang['logout'] = 'Logg ut';
$lang['prompt_newgroupname'] = 'Benytt dette gruppenavnet';
$lang['prompt_changesettings'] = 'Forandre mine innstillinger';
$lang['error_loginfailed'] = 'Innlogging misslykket - ugyldig brukernavn eller passord?';
$lang['login'] = 'Logg inn';
$lang['prompt_signin_button'] = 'Logg inn knapp etikett';
$lang['prompt_username'] = 'Brukernavn';
$lang['prompt_email'] = 'E-postadresse';
$lang['prompt_password'] = 'Passord';
$lang['prompt_rememberme'] = 'Husk meg på denne datamaskinen';
$lang['register'] = 'Registrer';
$lang['forgotpw'] = 'Glemt passordet?';
$lang['lostusername'] = 'Har du glemt innloggingsdetaljene?';
$lang['defaults'] = 'Tilbakestill til standard';
$lang['template'] = 'Mal';
$lang['error_usernametaken'] = 'Det brukernavnet (%s) er allerede i bruk';
$lang['prompt_smtpvalidate'] = 'Bruk SMTP for å kontrollere e-postadresser?';
$lang['prompt_minpwlen'] = 'Minimum lengde på passord';
$lang['prompt_maxpwlen'] = 'Maksimum lengde på passord';
$lang['prompt_minunlen'] = 'Minimum Lengde på brukernavn';
$lang['prompt_maxunlen'] = 'Maksimum lengde på brukernavn';
$lang['prompt_sessiontimeout'] = 'Session Timeout (sekunder)';
$lang['prompt_cookiekeepalive'] = 'Bruk cookies for å holde innloggingen ved liv';
$lang['prompt_allowemailreg'] = 'Tillat e-post registrering';
$lang['prompt_dfltgroup'] = 'Standardgruppe for nye brukere';
$lang['changesettings_template'] = 'Mal for forandre brukerdata';
$lang['error_passwordmismatch'] = 'Passordene er ikke like';
$lang['error_invalidusername'] = 'Ugyldig brukernavn';
$lang['error_invalidpassword'] = 'Ugyldig passord';
$lang['error_usernotfound'] = 'Kunne ikke finne informasjon om denne brukeren';
$lang['edituser'] = 'Rediger bruker';
$lang['valid'] = 'Gyldig';
$lang['username'] = 'Brukernavn';
$lang['status'] = 'Status';
$lang['error_membergroups'] = 'Denne brukeren er ikke medlem av noen gruppe';
$lang['error_properties'] = 'Ingen egenskaper';
$lang['error_dup_properties'] = 'Forsøk å importere duplikate egenskaper';
$lang['value'] = 'Verdi';
$lang['groups'] = 'Grupper';
$lang['properties'] = 'Egenskaper';
$lang['propname'] = 'Egenskapens Navn';
$lang['propvalue'] = 'Egenskapens verdi';
$lang['add'] = 'Legg til';
$lang['history'] = 'Historie';
$lang['edit'] = 'Rediger';
$lang['expires'] = 'Utløper';
$lang['specify_date'] = 'Spesifiser dato';
$lang['12hrs'] = '12 timer';
$lang['24hrs'] = '24 timer';
$lang['48hrs'] = '48 timer';
$lang['1week'] = '1 uke';
$lang['2weeks'] = '2 Uker';
$lang['1month'] = '1 Måned';
$lang['3months'] = '3 Måneder';
$lang['6months'] = '6 Måneder';
$lang['1year'] = '1 År';
$lang['never'] = 'Aldri';
$lang['postinstallmessage'] = 'Vellykket installasjon av modulen.<br/>Husk å aktivisere  "Modify FrontEndUser Properties permission."
I tillegg, anbefaler vi deg å installere Captcha modulen.  Om denne er installert, en gyldighetstest av et captchabilde vil kreves i tillegg til brukernavn og passord for å logge inn. Meningen med dette er å hindre brute force angrep.  <strong>Merk:</strong> Parameteren nocaptcha kan benyttes for å slå av denne funksjonen selv om Captcha modulen er installert."';
$lang['password'] = 'Nytt passord';
$lang['repeatpassword'] = 'Gjenta';
$lang['error_groupname_exists'] = 'En gruppe med det navnet eksisterer allerede';
$lang['editgroup'] = 'Rediger gruppe';
$lang['submit'] = 'Send';
$lang['cancel'] = 'Avbryt';
$lang['delete'] = 'Slett';
$lang['confirm_editgroup'] = 'Er du sikker på at dette er korrekte valg for denne gruppen?\nÅ slå en egenskap av/off vil ikke slette noen innlegg i egenskap-tabellen for denne gruppen/brukeren.  Egenskapen vil i stedet bli utilgjengelig.';
$lang['areyousure_deletegroup'] = 'Er du sikker på at du vil slette denne gruppen?';
$lang['confirm_delete_prop'] = 'Er du sikker på at du vil slette denne egenskapen helt?\nÅ gjøre dette vil også slette enhver brukers innlegg i denne egenskapen.';
$lang['error_insufficientparams'] = 'Ufullstendige parametre';
$lang['id'] = 'Id';
$lang['name'] = 'Navn';
$lang['error_cantaddprop'] = 'Problem med å legge til egenskap';
$lang['error_cantaddgroupreln'] = 'Problem med å legge til gruppeegenskap';
$lang['error_cantaddgroup'] = 'Problem med å legge til gruppe';
$lang['error_cantassignuser'] = 'Problem med å legge en bruker til gruppen';
$lang['error_couldnotdeleteproperty'] = 'Problem med å slette en egenskap';
$lang['error_couldnotfindemail'] = 'Kunne ikke finne en e-postadresse';
$lang['error_destinationnotwritable'] = 'Ingen skriverettighet i målmappen';
$lang['error_invalidparams'] = 'Ugyldige parametere';
$lang['error_nogroups'] = 'Kunne ikke finne noen grupper';
$lang['applyfilter'] = 'Bruk';
$lang['filter'] = 'Filtrer';
$lang['userfilter'] = 'Brukernavn vanlig uttrykk';
$lang['description'] = 'Beskrivelse';
$lang['groupname'] = 'Gruppenavn';
$lang['accessdenied'] = 'Adgang nektet';
$lang['error'] = 'Feil';
$lang['addgroup'] = 'Legg til gruppe';
$lang['importgroup'] = 'Importer Gruppe';
$lang['adduser'] = 'Legg til bruker';
$lang['usersfound'] = 'Brukere som passer med kriteriene';
$lang['group'] = 'Gruppe';
$lang['selectgroup'] = 'Velg gruppe';
$lang['registration_template'] = 'Mal for registrering';
$lang['logout_template'] = 'Mal for utlogging';
$lang['login_template'] = 'Mal for innlogging';
$lang['preferences'] = 'Preferanser';
$lang['users'] = 'Brukere';
$lang['friendlyname'] = 'Frontend brukere';
$lang['moddescription'] = 'Administrer Frontend brukere';
$lang['defaultfrontpage'] = 'Standard forside';
$lang['lastaccessedpage'] = 'Siste viste side';
$lang['otherpage'] = 'Annen side:';
$lang['captcha_title'] = 'Oppgi teksten fra bildet';
?>