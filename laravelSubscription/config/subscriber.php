<?php

return [
    'snw_enable_email_form' => env('OFFLINE_SHOW_EMAIL_FORM', false),
    'snw_send_email_to' => env('OFFLINE_SEND_EMAIL_TO','info@mail.in'),
    'snw_test_mode' => env('OFFLINE_ENABLE', true),  
    'snw_mail' => env ('OFFLINE_MAIL','info@mail.com')
];