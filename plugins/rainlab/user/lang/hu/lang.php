<?php

return [
    'plugin' => [
        'name' => 'Felhasználók',
        'description' => 'Felhasználók menedzselése a honlapon.',
        'tab' => 'Felhasználók',
        'access_users' => 'Fiókok kezelése',
        'access_groups' => 'Csoportok kezelése',
        'access_settings' => 'Beállítások kezelése'
    ],
    'users' => [
        'menu_label' => 'Felhasználók',
        'all_users' => 'Felhasználók',
        'new_user' => 'Új felhasználó',
        'list_title' => 'Felhasználók kezelése',
        'trashed_hint_title' => 'A felhasználók felfüggeszthetik a saját fiókjukat',
        'trashed_hint_desc' => 'Amennyiben nem akarnak megjelennik a weboldalon, úgy deaktiválhatják a saját fiókjukat. Bármikor újra engedélyezhetik, ha újra sikeresen bejelentkeznek a honlapra.',
        'banned_hint_title' => 'A felhasználó tiltva van',
        'banned_hint_desc' => 'Ezt a felhasználót már tiltotta egy adminisztrátor, így nem lesz képes bejelentkezni.',
        'activate_warning_title' => 'Nincs aktiválva a felhasználó!',
        'activate_warning_desc' => 'Ennek a felhasználónak nem történt meg az aktiválása, így nem tud bejelentkezni.',
        'activate_confirm' => 'Valóban aktiválni akarja ezt a felhasználót?',
        'activated_success' => 'A felhasználó aktiválása megtörtént',
        'activate_manually' => 'A felhasználó kézi aktiválása',
        'delete_confirm' => 'Valóban törölni akarja ezt a felhasználót?',
        'unban_user' => 'Felhasználó engedélyezése',
        'unban_confirm' => 'Valóban engedélyezni akarja ezt a felhasználót?',
        'unbanned_success' => 'A felhasználó sikeresen engedélyezve lett.',
        'return_to_list' => 'Vissza a felhasználó listához',
        'update_details' => 'Adatok módosítása',
        'bulk_actions' => 'Műveletek',
        'delete_selected' => 'Eltávolítás',
        'delete_selected_confirm' => 'Valóban törölni akarja a kiválasztott felhasználókat?',
        'delete_selected_empty' => 'Nincs kiválasztva felhasználó a törléshez.',
        'delete_selected_success' => 'A kiválasztott felhasználók sikeresen törölve lettek.',
        'deactivate_selected' => 'Deaktiválás',
        'deactivate_selected_confirm' => 'Valóban deaktiválni akarja a kiválasztott felhasználókat?',
        'deactivate_selected_empty' => 'Nincs kiválasztva felhasználó a deaktiváláshoz.',
        'deactivate_selected_success' => 'A kiválasztott felhasználók sikeresen deaktiválva lettek.',
        'restore_selected' => 'Visszaállítás',
        'restore_selected_confirm' => 'Valóban vissza akarja állítani a kiválasztott felhasználókat?',
        'restore_selected_empty' => 'Nincs kiválasztva felhasználó a visszaállításhoz.',
        'restore_selected_success' => 'A kiválasztott felhasználók sikeresen vissza lettek állítva.',
        'ban_selected' => 'Letiltás',
        'ban_selected_confirm' => 'Valóban tiltani akarja a kiválasztott felhasználókat?',
        'ban_selected_empty' => 'Nincs kiválasztva felhasználó a tiltáshoz.',
        'ban_selected_success' => 'A kiválasztott felhasználók sikeresen tiltva lettek.',
        'unban_selected' => 'Engedélyezés',
        'unban_selected_confirm' => 'Valóban engedélyezni akarja a kiválasztott felhasználókat?',
        'unban_selected_empty' => 'Nincs kiválasztva felhasználó az engedélyezéshez.',
        'unban_selected_success' => 'A kiválasztott felhasználók sikeresen engedélyezve lettek.'
    ],
    'settings' => [
        'users' => 'Felhasználók',
        'menu_label' => 'Beállítások',
        'menu_description' => 'A felhasználó alapú beállítások kezelése.',
        'activation_tab' => 'Aktiválás',
        'signin_tab' => 'Bejelentkezés',
        'registration_tab' => 'Regisztráció',
        'notifications_tab' => 'Értesítések',
        'allow_registration' => 'Regisztráció engedélyezése',
        'allow_registration_comment' => 'Tiltás esetén csak az adminisztrátorok adhatnak hozzá felhasználót.',
        'activate_mode' => 'Aktiválási mód',
        'activate_mode_comment' => 'Válassza ki, hogyan kell aktiválni egy felhasználói fiókot.',
        'activate_mode_auto' => 'Automatikus',
        'activate_mode_auto_comment' => 'Regisztráláskor automatikusan aktiválva.',
        'activate_mode_user' => 'Felhasználó',
        'activate_mode_user_comment' => 'A felhasználó levéllel aktiválja a saját fiókját.',
        'activate_mode_admin' => 'Adminisztrátor',
        'activate_mode_admin_comment' => 'Csak adminisztrátor aktiválhat felhasználót.',
        'welcome_template' => 'Üdvözlő sablon',
        'welcome_template_comment' => 'A felhasználónak első aktiváláskor küldendő levél sablonja.',
        'require_activation' => 'A bejelentkezéshez aktiválás szükséges',
        'require_activation_comment' => 'A felhasználóknak aktivált fiókkal kell rendelkezniük a bejelentkezéshez.',
        'use_throttle' => 'Kísérletek késleltetése',
        'use_throttle_comment' => 'Az ismétlődő sikertelen bejelentkezések ideiglenesen felfüggesztik a felhasználót.',
        'login_attribute' => 'Bejelentkezési azonosító',
        'login_attribute_comment' => 'Válassza ki, hogy milyen felhasználói adatot kell használni a bejelentkezéshez.',
        'no_mail_template' => 'Nincs értesítés küldése',
        'hint_templates' => 'A sablonok kinézetét a Beállítások menüben a Levelezés > Sablonok oldalon módosíthatja.'
    ],
    'user' => [
        'label' => 'Felhasználó',
        'id' => 'Azonosító',
        'username' => 'Felhasználónév',
        'name' => 'Név',
        'surname' => 'Családnév',
        'email' => 'E-mail cím',
        'created_at' => 'Regisztrált',
        'last_seen' => 'Belépve',
        'joined' => 'Csatlakozva',
        'is_online' => 'Elérhető',
        'is_offline' => 'Nem elérhető',
        'create_password' => 'Jelszó megadása',
        'create_password_comment' => 'Kérjük használjon egyedi és erős jelszót.',
        'reset_password' => 'Új jelszó megadása',
        'reset_password_comment' => 'Kérjük használjon egyedi és erős jelszót.',
        'confirm_password' => 'Jelszó megerősítése',
        'confirm_password_comment' => 'Kérjük gépelje be újra a jelszót.',
        'groups' => 'Csoportok',
        'empty_groups' => 'Egy sincs létrehozva.',
        'avatar' => 'Profilkép',
        'details' => 'Adatok',
        'account' => 'Fiók',
        'block_mail' => 'Az összes kimenő levél tiltása ennél a felhasználónál.'
    ],
    'group' => [
        'label' => 'Csoport',
        'id' => 'Azonosító',
        'name' => 'Név',
        'description_field' => 'Leírás',
        'code' => 'Kód',
        'code_comment' => 'Egyedi azonosító az API eléréshez.',
        'created_at' => 'Létrehozva',
        'users_count' => 'Felhasználók'
    ],
    'groups' => [
        'menu_label' => 'Csoportok',
        'all_groups' => 'Csoportok',
        'new_group' => 'Új csoport',
        'delete_selected_confirm' => 'Valóban törölni akarja a kijelölt csoportokat?',
        'list_title' => 'Csoportok kezelése',
        'delete_confirm' => 'Valóban törölni akarja ezt a csoportot?',
        'delete_selected_success' => 'A csoportok sikeresen eltávolításra kerültek.',
        'delete_selected_empty' => 'A törléshez előbb ki kell választania legalább egy csoportot.',
        'return_to_list' => 'Vissza a csoportokhoz',
        'return_to_users' => 'Vissza a felhasználókhoz',
        'create_title' => 'Csoport létrehozása',
        'update_title' => 'Csoport szerkesztése',
        'preview_title' => 'Csoport előnézete'
    ],
    'login' => [
        'attribute_email' => 'E-mail cím',
        'attribute_username' => 'Felhasználónév'
    ],
    'account' => [
        'account' => 'Fiók',
        'account_desc' => 'Felhasználó kezelési űrlap.',
        'redirect_to' => 'Átirányítás',
        'redirect_to_desc' => 'A lap neve az átirányításhoz frissítés, bejelentkezés vagy regisztrálás után.',
        'code_param' => 'Aktiválási kód',
        'code_param_desc' => 'A regisztrálás aktiválási kódjához használt oldal webcíme.',
        'invalid_user' => 'Nem található a megadott hitelesítési adatokkal rendelkező felhasználó.',
        'invalid_activation_code' => 'A megadott aktiválási kód érvénytelen.',
        'invalid_deactivation_pass' => 'A megadott jelszó érvénytelen.',
        'success_activation' => 'A fiók aktiválása sikerült.',
        'success_deactivation' => 'Sikeresen felfüggesztette a fiókját. További szép napot kívánunk!',
        'success_saved' => 'Sikerült menteni a beállításokat!',
        'login_first' => 'Előbb be kell jelentkeznie!',
        'already_active' => 'Már aktiválta a fiókját!',
        'activation_email_sent' => 'Az aktiválási e-mail elküldése sikeresen megtörtént.',
        'registration_disabled' => 'A regisztráció jelenleg tiltva van az oldalon.',
        'sign_in' => 'Bejelentkezés',
        'register' => 'Regisztráció',
        'full_name' => 'Teljes név',
        'email' => 'E-mail cím',
        'password' => 'Jelszó',
        'login' => 'Bejelentkezés',
        'new_password' => 'Új jelszó',
        'new_password_confirm' => 'Új jelszó megerősítése'
    ],
    'reset_password' => [
        'reset_password' => 'Új jelszó megadása',
        'reset_password_desc' => 'Elfelejtett jelszó űrlap.',
        'code_param' => 'Visszaállító kód',
        'code_param_desc' => 'A visszaállító kódhoz használt oldal webcíme.'
    ],
    'session' => [
        'session' => 'Munkamenet',
        'session_desc' => 'Hozzáadja egy laphoz a felhasználói munkamenetet és korlátozhatja a laphoz való hozzáférést.',
        'security_title' => 'Csak engedélyezés',
        'security_desc' => 'Ki számára engedélyezett a hozzáférés ehhez laphoz.',
        'all' => 'Mindenki',
        'users' => 'Felhasználók',
        'guests' => 'Vendégek',
        'redirect_title' => 'Átirányítás',
        'redirect_desc' => 'Az átirányítandó oldal neve, ha a hozzáférés megtagadva.',
        'logout' => 'Sikeresen kijelentkezett!'
    ]
];
