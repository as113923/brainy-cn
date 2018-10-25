<?php
    $lang = array(
        'backup' => '备份',
        'backuptitle' => '备份',

        'backup_nametask' => '任务名称',
        'backup_list_config' => '已配置任务列表',

        'backup_remoteip' => '远程备份的IP服务器',
        'backup_remote_login' => '用户名',
        'backup_remote_pass' => '密码',
        'backup_remote_path' => '远程服务器上的文件夹',


        'backup_pathlocal' => '本地备份路径',
        'backup_type_arch_array' => '归档',
        'backup_type_arch_noarch' => '没有压缩',
        'backup_type_arch_incr_no_arch' => '增量无压缩',
        'backup_type_simple_noarch' => '没有压缩',
        'backup_type_arch_incr_tar' => '增量tar',


        'backup_type_arch_incr_noarch' => '增量无压缩',
        'backup_type_arch_tar' => 'tar',
        'backup_type_arch_simple_noarch' => '没有压缩',

        'backup_repotype_local' => '本地目录',
        'backup_repotype_remote' => '远程服务器',
        'backup_repotype_ftp' => 'FTP',
        'backup_repotype_YandexDisk' => 'Yandex Disk',
        'backup_repotype_GoogleDrive' => 'GoogleDrive',
        'backup_repotype_Dropbox' => 'Dropbox',



        'backup_period' => '日期',
        'backup_period_day' => '每日',
        'backup_period_week' => '每周',
        'backup_period_month' => '每月',

        'backup_time_start' => '启动时间',
        'backup_count_backupsday' => '每日备份',
        'backup_count_backupsweek' => '每周备份',
        'backup_count_backupsmonth' => '每月备份',

        'backup_level_compress' => '压缩级别',
        'backup_level_compress_default' => '默认情况下',

        'backup_repo' => '存储类型',
        'backup_repo_local' => '本地目录',
        'backup_repo_remote' => '远程服务器',
        'backup_repo_typeauth' => '授权类型',
        'backup_repo_typeauthpass' => '密码',
        'backup_repo_typeauthkey' => '密钥',
        'backup_repo_inputkey' => '公钥',
        'backup_repo_inputkey_private' => '私钥',
        'backup_path_to_restore' => '恢复路径',
        'backup_repo_btngeneratekey' => '生成密钥',
        'backup_rsync_speed_limit_kb' => '限制kb/s的速度',
        'backup_save' => '保存',
        'backup_update' => '刷新',
        'backup_delete' => '删除',
        'backup_delete_success' => '配置成功删除',
        'backup_delete_unsuccess' => '删除配置时发生错误',
        'backup_add_task' => '添加任务',
        'backup_save_success' => '保存成功',
        'backup_create_pleasewait' => '正在创建备份',
        'backup_restoring_pleasewait' => '备份正在进行中',
        'backup_restorto_now_dir' => '正在恢复：',

        'backup_createarch' => '创建一个tar备份',
        'backup_createarch_success' => '成功创建tar备份',
        'backup_createarch_unsuccess' => '在在创建tar备份时发生错误',
        'backup_create_inprogress' => '正在创建备份：',
        'backup_create_speed' => '速度：',
        'backup_estimated_time_remaining' => '剩余：',

        'backup_create_backup_now' => '创建备份',

        'backup_namebackup' => '名称',
        'backup_datebackup' => '日期',
        'backup_sizebackup' => '大小',
        'backup_option_t' => '选项',
        'backup_download' => '下载备份',
        'backup_restore' => '恢复',
        'backup_size_ci' => 'MB',
        'backup_not_perm' => '无权限',
        'backup_error_connect_remote_key' => '远程服务器上的密钥验证错误',
        'backup_error_connect_remote_pass' => '远程服务器上的密码授权错误',
        'backup_name_config' => '备份任务的名称',
        'backup_ip_remote_server' => '远程服务器IP',
        'backup_check_connect_remote_server' => '测试连接',
        'backup_check_connect_remote_server_ok' => '连接成功安装',
        'backup_check_connect_remote_server_failed' => '连接未建立！',
        'backup_please_wait_conn' => '请稍等',
        'backup_list_users' => '用户列表',
        'backup_make_for_all_users' => '为所有用户创建备份',
        'backup_manager_files' => '管理',
        'backup_manager_files_title' => '管理备份文件',
        'backup_manager_files_no_perm' => '无权访问此目录',
        'backup_manager_restorefile_path' => '指定恢复文件的路径',
        'backup_manager_restoredir_path' => '指定要恢复文件夹的路径',
        'backup_manager_restorefile_path_start_modal' => '开始',
        'backup_manager_db' => '数据库恢复',
        'backup_manager_db_list' => '数据库列表',
        'backup_manager_dbuser_list' => '用户列表',
        'backup_namebackup_db' => '数据库',
        'backup_namebackup_db_download' => '下载',
        'backup_namebackup_db_restore' => '恢复',
        'backup_namebackup_dbuser' => '用户',
        'backup_restore_selusers' => '还原选定的用户',
        'backup_restore_seldbs' => '还原选定的数据库',
        'backup_download_seldbs' => '准备选定的数据库',
        'backup_db_copy_inprogress' => '基地正在准备下载',
        'backup_db_copy_done' => '数据库已准备好下载',
        'backup_db_restoring' => '正在恢复数据库',
        'backup_db_restoring_finish' => '恢复数据库',
        'backup_dbuser_restoring' => '用户恢复',
        'backup_dbuser_restoring_finish' => '用户恢复',
        'backup_db_select_all' => '全选',
        'backup_db_denywrite_backups' => '禁止写入备份',
        'backup_restoring_start' => '恢复开始',
        'backup_no_saved_config' => '没有保存的配置',
        'backup_hist_nameconf' => '恢复配置名称',
        'backup_hist_typerest' => '恢复类型',
        'backup_hist_start_rest' => '开始时间',
        'backup_hist_end_rest' => '结束时间',
        'backup_history_stat_rest_progress' => '正在恢复',
        'backup_history_stat_rest_end' => '恢复完成',
        'backup_viewlog' => '日志视图',
        'backup_full_copy_inprogress' => '完整备份正在准备下载',
        'backup_full_copy_done' => '完全备份已准备好下载',
        'backup_saversa' => '保存密钥',
        'backup_keysavenew_ok' => '密钥已成功保存',
        'backup_start_restore_el' => '正在恢复，更多关于恢复历史记录选项卡',
        'backup_download_prepare_arch' => '从下载准备好的备份',


        'backup_nameconf' => '名称',
        'backup_pathfold' => '备份方式',
        'backup_type_arch' => '备份类型',

        'backup_config_edit' => '编辑',
        'backup_config_remove' => '删除',

        'backup_cancel_update_conf' => '取消',
        'backup_timeconf' => '日期',
        'backup_weekly_mon_full' => '星期一',
        'backup_weekly_mon_short' => '星期一',
        'backup_weekly_tue_full' => '星期二',
        'backup_weekly_tue_short' => '星期二',
        'backup_weekly_wed_full' => '星期二',
        'backup_weekly_wed_short' => '星期三',
        'backup_weekly_thu_full' => '星期四',
        'backup_weekly_thu_short' => '星期四',
        'backup_weekly_fri_full' => '星期五',
        'backup_weekly_fri_short' => '星期五',
        'backup_weekly_sat_full' => '星期六',
        'backup_weekly_sat_short' => '星期六',
        'backup_weekly_sun_full' => '星期日',
        'backup_weekly_sun_short' => '星期日',
        'backup_weekly_short_arr' => array('星期一','星期二','星期三','星期四','星期五','星期六','星期日'),
        'backup_weekly_select_days' => '选择每周要运行的日子',
        'backup_monthly_select_date' => '指定要运行的日期',

        'backup_pathlocaldir_wrong' => '备份文件夹格式无效',
        'backup_pathremotedir_wrong' => '远程备份文件夹格式无效',
        'backup_remoteip_wrong' => '远程服务器的ip格式无效',
        'backup_typearch_wrong' => '无效的备份格式格式',
        'backup_repo_wrong' => '备份类型无效',
        'backup_remote_login_wrong' => '登录格式无效',
        'backup_nametask_wrong' => '目标名称格式无效',
        'backup_period_wrong' => '无效期格式',
        'backup_time_start_wrong' => '无效的开始时间格式。应该是格式00:00:00',
        'backup_weekly_days_wrong' => '天数范围的格式无效',
        'backup_monthly_select_date_wrong' => '日期范围格式无效',
        'backup_level_compress_wrong' => '压缩级别格式无效',
        'backup_type_auth_wrong' => '授权类型无效',
        'backup_level_compress_wrong' => '压缩级别格式无效',
        'backup_rsync_speed_limit_kb_wrong' => '波特率格式无效。必须是一个整数',
        'backup_denywritebackup_wrong' => '备份编辑权限格式无效',

        'backup_add_day_start' => '添加开始日期',
        'backup_remove_day_start' => '删除',
        'backup_please_wait_load_listbackups' => '请稍候，正在下载备份列表',
        'backup_please_wait_load_listbackups_conf' => '请稍等，任务列表正在加载中',

        'backup_delete_backup' => '删除',
        'backup_download_new_prepare_arch' => '再次下载',
        'backup_conf_status' => '有效',
        'backup_error_connect_remote_any' => '授权错误',

        'backup_nodbbackup' => '备份副本中没有数据库',
        'backup_nodbuserbackup' => '备份中没有数据库用户',
        'backup_last_updated_process_fullprep_backup' => '完整备份正在准备下载，最后一次检查过程',

        'backup_create_pleasewait_gototablistbackup' => '创建备份的过程已开始，<br/>执行过程显示在备份历史记录选项卡上。',
		
        'backup_refresh_listbackup_nocache' => '更新备份列表',

        'backup_addjob_success' => '备份任务已成功添加。',
        'backup_editjob_ok' => '任务已成功编辑。',

        'backup_manage_jobs' => '管理任务',
        'backup_list_jobs' => '备份列表',
        'backup_history_restores' => '恢复历史记录',
        'backup_cron_not_run_att' => '注意：crond未在服务器上运行，该模块可能无法正常任务。安装并运行crond以进行正确的操作。',
        'backup_create_newjob' => '创建任务',
        'backup_list_backups' => '备份列表',
        'backup_search_backups' => '按备份搜索',
        'backup_histrory_restoring' => '恢复历史记录',
        'backup_prepare_fordownload' => '准备下载',
        'backup_prepare_fordownload_hint' => '从远程源复制到用户的主目录/tmpb',

        'backup_createbackup_confusercms_ok' => '用户的CMS配置备份已成功创建',
        'backup_createbackup_confusermain_ok' => '用户配置备份已成功创建',
        'backup_createbackup_usersftp_ok​​' => '成功创建备份用户FTP',
        'backup_createbackup_db_users_ok' => '成功创建数据库用户备份',
        'backup_restore_useracc_ok' => '用户恢复成功完成',

        'backup_restore_dbs_ok' => '恢复用户数据库成功完成',
        'backup_restore_dbsusers_ok' => '恢复数据库用户成功完成',

        'backup_createbackup_usersvhost_ok' => '成功完成用户虚拟主机的备份',
        'backup_restore_usersvhost_ok' => '恢复用户的虚拟主机成功完成',
        'backup_backups_jobs_ok' => '成功完成备份任务的备份',

        'backup_deletebackup_err' => '删除备份时发生错误。权限不足',


        'backup_no_seldb_download' => '没有选择数据库，请选择基地并重复。',

        'backup_no_seldbuser_download' => '没有选择数据库用户，请选择一个用户，然后重试。',

        'backup_manager_restorefile_confirm' => '请开始恢复文件',
        'backup_manager_restoredir_confirm' => '启动还原目录',

        'backup_manager_restoredirfile_address' => 'at',

        'backup_local_dir_userbackup' => '请指定不要创建备份的根目录。',

        'backup_notselect_userbackup' => '请选择要备份的用户',

        'backup_restore_emails_ok' => '用户的邮件帐号已成功恢复。',
        'backup_restore_forward_emails_ok' => '用户帐户重定向已成功恢复',
        'backup_restore_dns_user_ok' => 'DNS记录已成功恢复。',

        'backup_wrong_format_type_store' => '无效的存储类型',
        'backup_wrong_format_type_backup' => '无效的备份类型',


        'backup_restore_dkim_keys_user_ok' => 'DKIM密钥已成功恢复。',

        'backup_period_runcreatebackup' => '启动时间',
        'backup_period_intime' => '至',
        'backup_period_ondays' => '按数字排序',

        'backup_restore_userincludes_ok' => '成功恢复了virtchosts的个人定制。',

        'backup_restore_passdir_user_ok' => '目录上的密码已成功恢复。',
        'backup_restore_httpdredir_user_ok' => 'HTTP重定向恢复成功',
        'backup_restore_siteredir_user_ok' => '网站重定向已成功恢复',
        'backup_restore_opti_user_ok' => '网站优化设置已成功恢复',

        'backup_backup_pathlocal_wrong_dir' => 'backup_pathlocal备份配置文件中的目录无效',
        'backup_confirm_start_full_rest' => '确认完整备份恢复的开始。',
        'backup_confirm_start_yes' => '是',
        'backup_confirm_start_no' => '不',

        'backup_confirm_rest_user_exist' => '正在恢复的用户已经存在，通过替换备份中的所有数据来确认还原。',

        'backup_not_found' => '未找到备份',

        'backup_sel_date' => '选择日期',
        'backup_rest_wait' => '恢复用户，请稍等。',
        'backup_hist_empty' => '还没有备份的备份',
        'backup_cronjob_empty' => '不添加备份任务',
        'backup_manager_restoredir_file_confirm' => '开始数据恢复',

        'backup_config_sendemail_aftercomplete' => '完成后发送电子邮件',
        'backup_config_sendemail_aftercomplete_list_fail' => '用于发送备份结果的邮箱列表格式不正确',

        'backup_complete_titleemail' => '备份过程已完成。任务名称：',
        'backup_complete_titleemail_ok' => '备份过程成功完成',
        'backup_complete_time_start' => '开始时间：',
        'backup_complete_time_end' => '结束时间：',
        'backup_complete_table_size' => '大小',
        'backup_complete_table_path' => '路径',

        'backup_complete_restore_email' => '完成恢复后发送电子邮件',
        'backup_complete_restore_email_hint' => '输入电子邮件',

        'backup_config_sendemail_aftercomplete_list_fail_rest' => '用于发送还原结果的邮箱列表格式错误',

        'backup_complete_titleemail_rest' => '恢复备份的过程已完成，任务名称：',
        'backup_complete_titleemail_ok_rest' => '恢复备份的过程已成功完成',
        'backup_complete_titleemail_ok_rest_username' => '用户名',
        'backup_complete_timeduration' => '完成：',
        'backup_complete_timeduration_minute' => '分钟',

        'backup_conf_title_hourtitle' => 'чч:мм',


        'backup_encryptfile' => '加密备份',
        'backup_encryptfilesetpass' => '设置密码',
        'backup_encbackupenterpass' => '输入密码',
        'backup_encbackupenterpassretype' => '重新输入密码',
        'backup_encbackupenterpassmismatch' => '密码加密密码不匹配',

        'backup_enterpassencback' => '输入加密备份的密码',
        'backup_enterpassencback_wrong' => '备份中的密码无效',
        'backup_confirmremovebackup' => '确认删除备份',

        'backup_maxcountbackups' => '份数（0-不删除）',
        'backup_wrongformat_maxcountbackups' => '最大备份副本数的格式不正确。必须是整数。',

        'backup_email_placeholsendcomplete' => '通过;或空格输入邮箱地址',

        "Backup_email_hint_arch" =>"<b>增量未压缩</b> - 所有的文件将被复制，当您第一次创建备份，在备份随后将在备份中只更新更改的文件<br/> <B>焦油</b>.<br/> <b>无需压缩</b> - 与增量备份不同，所有文件将始终被复制.",

        'backup_email_hint_crypt' => '备份文件将被加密。要恢复备份，您必须输入密码.',
        'backup_email_hint_sendemail' => '完成备份后，备份完成时会向指定的电子邮件地址发送一条消息.',
        'backup_db_denywrite_backups_desc' => '用户无权编辑创建的备份中的文件',
        'backup_hint_speed' => '不限制速度 - 0',
        'backup_edit_job_name' => '编辑任务',

        'backup_mass_backup_remove' => '删除所选内容',
        'backup_mass_backup_selectall' => '全选',
        'backup_mass_backup_unselectall' => '删除选择',
        'backup_mass_backup_capt_confirm_del' => '确认删除',
        'backup_universal_yes' => '是',
        'backup_universal_no' => '否',
        'backup_cancelcurrent_autoupdatelist' => '停止通过备份列表自动更新',

        'backup_restonefile_label' => '从备份中恢复用户的完整备份',
        'backup_restonefile_selarch_load' => '选择存档',
        'backup_restonefile_selarch_load_notsel' => '文件未选中',
        'backup_restonefile_selarch_loadhard' => '从设备下载',
        'backup_restonefile_selarch_local' => '完整的本地路径',
        'backup_restonefile_selarch_url' => '网址',
        'backup_restonefile_selarch_ftp' => 'FTP',

        'backup_restonefile_selarch_loadhard_short' => '从设备上',


        'backup_restonefile_archenc_enterpass' => '从编码备份输入密码',

        'backup_restonefile_start_restore' => '开始恢复',
        'backup_listtasktitle' => '任务列表',
        'backup_pin_restore_from' => '从备份中恢复',

        'backup_restonefile_start_restore_confirm' => '确认用户恢复的开始',
        'backup_restonefile_warning_notsel' => '没有选择文件进行恢复。',
        'backup_restonefile_warning_ownerdeny' => '您没有权限恢复用户',

        'backup_restoreone_start' => '从在后台进程中启动的备份中恢复。',

        'backup_restoreone_pathnotexist_local' => '指定的文件不存在。请检查路径。',
        'backup_restoreone_pathnotexist_url' => '指定的URL不存在。请检查地址。',
        'backup_restoreone_pathnotexist_ftp' => '指定的FTP地址不存在。请检查FTP服务器上的地址和授权数据',


        'backup_history_backups' => '备份历史记录',
        'backup_history_namebackup' => '备份配置的名称',
        'backup_history_pathbackup' => '备份路径',
        'backup_history_backupnorunyet' => '备份尚未执行',
        'backup_history_backupinprog' => '正在备份',

        'backup_ya_noconn' => '我无法连接到Yandex。',
        'backup_ya_server_err' => '服务器不支持webdav或者用户名和密码不正确',

        'backup_gdrive_verifyplease' => '请点击链接并启用对GoogleDrive的GDrive访问权限',
        "Backup_gdrive_verifypleaseHintOpt" =>"该链接将在后你连接不成功的情况下，会产生单击测试连接",

        'backup_gdrive_verifyplease_enterhere' => '收到代码后，将其输入验证码字段，然后再次单击测试连接。',

        'backup_verifypleaseSucOk' => '如果一切正常，您将收到消息Connection successfully installed',


        'backup_gdrive_label_entervercode' => '验证码',

        'backup_gdrive_gotoverify' => '允许访问',
        'backup_gdrive_error_connect' => '连接错误',

        'backup_share_activetaskhint' => '任务处于活动状态并将在指定时间执行',

        'backup_gdrive_label_access_token' => '访问令牌',

        'backup_gdrive_label_access_token_instr' => '要想访问Dropbox帐户，请按照以下说明操作：<br/> 1.导航至 <a target=``_blank`` href=``https://www.dropbox.com/developers/apps``>链接</a> 并登录<br/>2.点击 `创建应用`，然后选择`Dropbox API应用程序`<br/>3.进行必要的设置，指定应用程序的权限并访问您的Dropbox文件夹（选择应用程序权限和对DropBox文件夹的访问限制）<br/>4.输入应用程序名称`应用名称`<br/>5.现在点击创建应用程序`创建应用`<br/>6.您的应用程序成功创建后，请点击生成按钮`生成的访问令牌` 部分<br/> 7.将访问令牌复制并粘贴到备份配置的<b>访问令牌字段中</b> 然后再次单击测试连接',

        'backup_dropbox_message_createbackup_failed' => '在Dropbox上创建备份时发生错误。无法连接到Dropbox，请检查令牌的相关性。',

        'backup_tokens_remove' => '删除已保存的授权',
        'backup_tokens_remove_ok' => '授权成功删除',
        'backup_tokens_remove_failed' => '授权未被删除。错误访问',

        'backup_failedconn_getlist_task' => '任务：',
        'backup_dropbox_noconn' => '我无法连接到Dropbox。',
        'backup_gdrive_noconn' => '我无法连接到GoogleDrive',
        'backup_ftp_noconn' => '我无法连接到FTP',
        'backup_remoteserv_noconn' => '我无法连接到远程服务器.',
		
        "Backup_hint_cachelistbackup" =>"备份列表缓存。<br/>每10分钟自动更新。<br/>单击备份刷新列表有关最新的名单",

        'backup_listbackup_time' => '创建列表的时间',

        "Backup_listbackup_cacheupdnot" =>"请稍候，我们正在更新备份列表",

        'backup_hist_type_rest_db' => '数据库',
        'backup_hist_type_rest_dbuser' => '数据库用户',
        'backup_hist_type_rest_file' => '用户文件',
        'backup_hist_type_rest_full' => '完整',

        'backup_list_countnow_backups' => '备份数量：',
        'backup_list_noclosepage' => '请不要在下载过程中重新加载页面！',
        'Backup_list_ftppasshint' => '对于具有密码FTP访问，使用格式如下：ftp：//登录：password@ftp.example.org/some_file',
        'backup_list_maxpostover' => '加载备份文件时发生错误。似乎上传的文件超过php.ini中的post_max_size或upload_max_filesize。请这些指令的值增加对上传文件的最小尺寸，或联系管理员。',

        'backupYaErrcreateDir' => '无法在YandexDisk上创建目录。检查：存在具有相同名称的文件，可用空间。',
        'backupYaErrAuthFailed' => 'YandexDisk授权错误',

        'backupLabelToken' => '令牌',

        'backupHintInstallToken' => '授权配置说明',

        'backupYandexInstructionGetOAuth' => 'Получение доступа к Яндекс диску. Выполните следующие инструкции: <br/> 1. Перейдите по <a target=``_blank`` href=``https://oauth.yandex.ru/``>ссылке</a> и авторизуйтесь<br/>2. Нажмите на `Зарегистрировать новое приложение`<br/>3.  Выполните необходимые настройки, указав Название приложения, Описание приложения. В секции Платформы отметьте пункт Веб-сервисы и нажмите кнопку Подставить URL для разработки<br/>4. В секции Доступы выберите все пункты Яндекс.Диск REST API<br/>5. Теперь нажмите на Создать приложение<br/>6. Когда Ваше приложение будет успешно создано, перейдите по адресу https://oauth.yandex.ru/authorize?response_type=token&client_id=ВАШ_АЙДИ заменив ВАШ_АЙДИ на ID приложения<br/> 7. Нажмите кнопку Разрешить для подтверждения запроса доступа<br/> 8. Скопируйте и вставьте токен в поле <b>Токен конфигурации бэкапов</b> и снова нажмите Проверить соединение',

        'backupHintUseKeysAuth' => 'Авторизация с помощью ключа<br/><br/> 1. Сгенерируйте ключ<br/><br/> 2. На <b>удаленном сервере</b> в файл /root/.ssh/authorized_keys добавьте строку с содержимым Публичного ключа ssh-rsa<br/>',

        'backup_restoring_startModal' => 'Восстановление начато.<br/> Детали на вкладке История восстановлений',

        'backup_hintPeriodRun' => '<b>Инкрементный + Ежедневно.</b> Количество резервных копий = 1 бэкап, формат имени user_айдибэкапа_incr<hr/><b>Без сжатия(tar) + Ежедневно.</b> Количество резервных копий = только ограничение параметром Количество копий, формат user_айдибэкапа_ГГММДД_s<hr/><b>Инкрементный + Еженедельно.</b> Количество резервных копий = количество выбранных дней для бэкапа, формат user_айдибэкапа_деньнедели<hr/><b>Без сжатия(tar) + Еженедельно.</b> Количество резервных копий = только ограничение параметром Количество копий, формат user_айдибэкапа_ГГММДД_деньнедели_s<hr/><b>Инкрементный + Ежемесячно.</b> Количество резервных копий = количество выбранных дней для бэкапа, формат user_айдибэкапа_дата_m<hr/><b>Без сжатия(tar) + Ежемесячно.</b> Количество резервных копий = только ограничение параметром Количество копий, формат user_айдибэкапа_ГГММДД_m_s',

        'backup_logs_stat_deleted' => 'Удален',
        'backup_logs_stat_deletedInfo' => 'Файл лога удален',
        'backup_titleLogHistBacks' => 'История бэкапирования',

        'backup_titleDialogEnterPassBackup' => 'Скачиваемый бэкап зашифрован. Для расшифровки бэкапа введите пароль и нажмите скачать.',

        'backup_titleDialogStartRestore' => 'Восстановление бэкапа: ',
        'backup_titleDialogCheckPassEncoded' => 'Выполняется проверка введеного пароля. Пожалуйста, подождите. Время выполнения зависит от размера бэкапа',
        'backup_titleDialogCheckWaitExist' => 'Пожалуйста, подождите.',
        'backup_titleDialogEnterpassRequire' => 'Введите пароль для зашифрованного бэкапа.',
        'backup_FailedConnWhileCreateBackupRemote' => 'Ошибка подключения к удаленному серверу. Пожалуйста, проверьте настройки соединения.',

        'backup_UnpackEncodedBackupTitle' => 'Распаковать зашифрованный бэкап в локальную папку пользователя?',

        'backup_btnUnpackCancel' => 'Закрыть',
        'backup_btnUnpackFailedLog' => 'Ошибка дешифрования бэкапа. Неверный пароль.',

        'backup_changeIP' => 'Сменить IP адрес аккаунта',

        'backup_gdriveGetFilesTempError' => 'Временная ошибка получения списка файлов gDrive. Пожалуйста, повторите еще раз. Если ошибка не исчезнет проверьте настройки файрвола.',

        'backup_mass_backupRestore' => 'Восстановить выбранные',
        'backup_mass_backupNothingSel' => 'Ничего не выбрано',
        'backup_mass_backupRestoreSomeConfirm' => 'Восстановить несколько пользователей?',
        'backup_mass_backupRestoreSelMultBackForOneUser' => 'Выбрано несколько бэкапов для восстановления для одного пользователя.',
        'backup_mass_backupRestoreCodeOneItem' => 'Восстановление зашифрованных бэкапов возможно только по одному',

        'backupStopMakeBackup' => 'Остановить создание бэкапа',
        'backupStopMakeBackupConfirm' => 'Остановить создание бэкапа? <br/>Внимание! Прерывание создания бэкапа не удаляет уже созданные файлы по адресу резервной копии.',
        'backupStopMakeBackupOk' => 'Создание бэкапа остановлено',
        'backupStopMakeBackupCancelLog' => 'Прервано пользователем',

        'backupStopMakeRestore' => 'Остановить восстановление бэкапа',
        'backupStopMakeRestoreConfirm' => 'Остановить восстановление бэкапа? <br/>Внимание! Прерывание восстановления бэкапа не возращает хост-аккаунт в старое состояние до восстановление, а лишь останавливает процесс по требованию.',
        'backupStopMakeRestoreOk' => 'Восстановление бэкапа остановлено',
        'backupStopMakeRestoreCancelLog' => 'Восстановление прервано пользователем',
        'backupFullListRestUser' => 'Полный список восстановленных пользователей',

        'backup_FailedCreateDir' => 'Ошибка создания директории на удаленном сервере. Пожалуйста, проверьте, что указанный пользователь в параметрах подключения имеет права на запись в указанный каталог.',
        'backupRemoteConnPort' => 'Порт',
        'backupRemoteConnPortHolder' => 'По умолчанию порт для ssh - 22, для ftp - 21',
        'backupRemoteConnPortErr' => 'Порт для подключения должен быть целым числом',
        'backupDbSizeMB' => 'мб',
        'backupDbSizeKB' => 'кб',
        'backupDbSizeB' => 'б',

    )
?>