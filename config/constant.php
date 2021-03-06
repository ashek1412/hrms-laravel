<?php
	return array(
        'default_title' => 'Employer Zone',
    	'system_default' => [
            'list_user_criteria' => 'active',
            'theme_color' => 'default',
            'theme_font' => 'Open+Sans',
            'application_name' => 'Employer Zone',
            'setup_guide' => 1,
            'timezone_id' => '266',
            'default_language' => 'en',
            'direction' => 'ltr',
            'error_display' => 1,
            'textarea_limit' => '300',
            'enable_password_strength_meter' => 1,
            'notification_position' => 'toast-bottom-right',
            'multilingual' => 1,
            'throttle_attempt' => 5,
            'throttle_lockout_period' => 2,
            'login_type' => 'username_or_email',
            'lock_screen_timeout' => 1,
            'cache_lifetime' => '100',
            'credit' => 'Designed with love by WM Lab',
            'celebration_days' => 30,
            'under_maintenance_message' => 'The system is under maitnenance.',
            'chat_refresh_duration' => 60,
            'hidden_value' => 'xxxxxxxxxxxxxxxx',
            'designation_level' => 1,
            'location_level' => 1,
            'show_error_messages' => 0,
            'allowed_upload_file' => 'jpg,png,doc,docx,pdf,txt',
            'max_file_size_upload' => 1,
            'task_users' => 'multiple',
            'leave_approval_level' => 'single',
            'expense_approval_level' => 'single',
            'enable_attendance_auto_lock' => 0,
            'enable_attendance_auto_clock' => 0,
            'payroll_days' => 'start_date',
            'default_notification_tone' => 'capisci.mp3',
        ],
        'mode' => 1,
        'default_role' => 'admin',
        'default_department' => 'System Administration',
        'default_designation' => 'System Administrator',
        'item_code' => 'EZ0303',
        'storage_root' => '/app/uploads/',
        'upload_path' => [
            'company_logo' => 'uploads/company_logo/',
            'avatar' => 'uploads/avatar/',
        ],
        'ignore_var' => array('_token','config_type','ajax_submit'),
        'path' => [
            'country' => '/config/country.php',
            'timezone' => '/config/timezone.php',
            'translation' => '/config/translation.php',
            'localization' => '/config/localization.php',
            'verifier' => 'http://envato.wmlab.in/',
            'config' => '/config/config.php',
            'mail' => '/config/mail.php',
            'service' => '/config/services.php',
            'upload' => '/config/upload.php',
        ],
        'social_login_provider' => [
            'facebook','twitter','google','github'
        ]
	);
?>