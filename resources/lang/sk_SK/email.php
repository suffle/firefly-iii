<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Ahoj,',
    'closing'                                 => 'Píp píp,',
    'signature'                               => 'Firefly III E-mail Robot',
    'footer_ps'                               => 'PS: Táto správa bola odoslaná na základe požiadavky z IP :ipAddress.',

    // admin test
    'admin_test_subject'                      => 'Testovacia správa z vašej inštalácie Firefly III',
    'admin_test_body'                         => 'Toto je testovacia správa z vašej inštancie Firefly III. Bola odoslaná na :email.',

    // new IP
    'login_from_new_ip'                       => 'Nové prihlásenie do Firefly III',
    'new_ip_body'                             => 'Firefly III zachytil nové prihlásenie do Vášho účtu z neznámej IP adresy. Ak ste sa tejto adresy nikdy neprihlásili, alebo to bolo pred viac, než 6 mesiacmi, Firefly III Vás na to upozorní.',
    'new_ip_warning'                          => 'Ak túto poznáte túto IP adresu alebo prihlásenie, ignorujte túto správu. Ak ste sa neprihlásili, alebo netušíte, o čo ide, overte si bezpečnosť Vášho hesla, zmeňte ho, a odhláste sa zo všetkých sedení. Môžete tak spraviť na stránke svojho profilu. Máte už zapnuté 2FA overenie, však? Buďte v bezpečí!',
    'ip_address'                              => 'IP adresa',
    'host_name'                               => 'Hostiteľ',
    'date_time'                               => 'Dátum a čas',

    // access token created
    'access_token_created_subject'            => 'Token prístupu bol vytvorený',
    'access_token_created_body'               => 'Niekto (dúfajme že vy) vytvoril pre váš účet nový prístupový token pre Firefly III API.',
    'access_token_created_explanation'        => 'With this token, they can access **all** of your financial records through the Firefly III API.',
    'access_token_created_revoke'             => 'If this wasn\'t you, please revoke this token as soon as possible at :url',

    // registered
    'registered_subject'                      => 'Vitajte vo Firefly III!',
    'registered_welcome'                      => 'Welcome to [Firefly III](:address). Your registration has made it, and this email is here to confirm it. Yay!',
    'registered_pw'                           => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                         => 'V pravom hornom rohu každej stánky je ikonka pomocníka. Ak potrebujete pomoc, kliknite na ňu!',
    'registered_doc_html'                     => 'If you haven\'t already, please read the [grand theory](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'If you haven\'t already, please also read the first use guide and the full description.',
    'registered_closing'                      => 'Užite si to!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Obnova hesla:',
    'registered_doc_link'                     => 'Dokumentácia:',

    // email change
    'email_change_subject'                    => 'Vaša e-mailová adresa Firefly III bola zmenená',
    'email_change_body_to_new'                => 'Vy, alebo niekto s prístupom k vášmu účtu Firefly III zmenil vašu e-mailovú adresu. Ak ste túto správu nečakali, môžete ju ignorovať a zmazať.',
    'email_change_body_to_old'                => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                     => 'Ak o tejto zmene viete, môžete túto správu pokojne ignorovať.',
    'email_change_old'                        => 'Pôvodná e-mailová adresa bola :email',
    'email_change_old_strong'                 => 'The old email address was: **:email**',
    'email_change_new'                        => 'Nová e-mailová adresa je: :email',
    'email_change_new_strong'                 => 'The new email address is: **:email**',
    'email_change_instructions'               => 'Kým túto zmenu nepotvrdíte, nemôžete používať svoj Firefly III účet. Pokračujte kliknutím na linku nižšie.',
    'email_change_undo_link'                  => 'Zmenu vrátite späť kliknutím na túto linku:',

    // OAuth token created
    'oauth_created_subject'                   => 'Bol vytvorený nový OAuth klient',
    'oauth_created_body'                      => 'Niekto (dúfajme, že vy) vytvoril pre váš účet nového OAuth klienta pre Firefly III API. Bol nazvaný ":name" a má spätnú URL `:url`.',
    'oauth_created_explanation'               => 'S týmto klientom je možné cez Firefly III API pristupovať ku **všetkým** vašim finančným záznamom.',
    'oauth_created_undo'                      => 'Ak ste to neboli vy, čo najskôr tohto klienta zneplatnite na `:url`',

    // reset password
    'reset_pw_subject'                        => 'Žiadosť o zmenu hesla',
    'reset_pw_instructions'                   => 'Niekto sa pokúsil obnoviť vaše heslo. Ak ste to boli vy, pokračujte kliknutím na linku nižšie.',
    'reset_pw_warning'                        => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                           => 'Zachytená chyba vo Firefly III',
    'error_intro'                             => 'Firefly III v:version narazil na chybu: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Trieda chyby ":class".',
    'error_timestamp'                         => 'Chyba nastala: :time.',
    'error_location'                          => 'Chyba nastala v súbore "<span style="font-family: monospace;">:file</span>" na riadku :line s kódom :code.',
    'error_user'                              => 'Chyba sa zobrazila používateľovi #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Pri vyskytnutí chyby nebol prihlásený žiadny používateľ alebo žiadny nebol zistený.',
    'error_ip'                                => 'IP adresa súvisiaca s touto chybou: :ip',
    'error_url'                               => 'URL je: :url',
    'error_user_agent'                        => 'User agent: :userAgent',
    'error_stacktrace'                        => 'Celý zásobník je uvedený nižšie. Ak si myslíte, že je to chyba vo Firefly III, môžete túto správu preposlať na <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii.org</a>. Môže to pomôcť odstrániť chybu, na ktorú ste narazili.',
    'error_github_html'                       => 'Prípadne môžete vytvoriť hlásenie na <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Prípadne môžete vytvoriť hlásenie na https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Celý zásobník je nižšie:',
    'error_headers'                           => 'The following headers may also be relevant:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III vytvoril novú transakciu|Firefly III :count nových transakcií',
    'new_journals_header'                     => 'Firefly III pre vás vytvoril transakciu. Nájdete ju vo svojej inštalácii Firefly III:|Firefly III pre vás vytvoríl :count transakcií. Nájdete ich vo svojej inštalácii Firefly III:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Your bill ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'       => 'Your bill ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'     => 'Your bill ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date' => 'Your bill ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                   => 'Your bill **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'             => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'              => 'Your bill **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'        => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'              => 'Please take the appropriate action.',

];
