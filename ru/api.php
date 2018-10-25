<?php

$lang = array(
    'api_code_1002' => '无效的命令',
    'api_code_1000' => '您没有管理用户的权限',
    'api_code_1001' => '此用户不在Brainy中',
    'api_code_1003' => '您没有管理员权限',
    'api_code_1004' => '输入数据未找到',
    'api_code_2' => '参数错误！',
    'api_code_addmail_3' => '添加邮箱时发生错误：',
    'api_code_addmail_0' => '新邮箱已成功添加：',
    'api_code_addmail_1' => '此邮箱已存在：',
    'api_code_addmail_4' => '在系统上找不到指定的邮箱域：',
    'api_code_delmail_0' => '邮箱已成功删除：',
    'api_code_delmail_1' => '删除邮箱时发生错误：',
    'api_code_delmail_3' => '无法删除,找不到这样的邮箱：',
    'api_code_delforwardmail_0' => '邮箱重定向已成功删除',
    'api_code_delforwardmail_1' => '删除邮箱重定向时发生错误：',
    'api_code_addforwardmail_0' => '邮箱重定向成功：',
    'api_code_addforwardmailmail_1' => '添加邮箱重定向时发生错误：',
    'api_code_addforwardmail_3' => '邮箱地址错误：',
    'api_code_dkim_0' => 'OpenDkim已成功激活',
    'api_code_dkim_1' => '未找到该用户的域名',
    'api_code_dkim_3' => 'OpenDkim已经在运行',
    'api_code_offdkim_0' => 'OpenDkim已成功禁用',
    'api_code_offdkim_1' => '未找到该用户的域名',
    'api_code_spf_0' => '为域名成功激活SPF',
    'api_code_spf_1' => '未找到该用户的域名',
    'api_code_spf_3' => 'SPF已经为该域启用',
    'api_code_offspf_0' => '成功为域禁用SPF',
    'api_code_offspf_1' => '未找到该用户的域名',
    'api_code_offspf_3' => 'SPF已针对域名停用',
    'api_code_getlistmail_0' => '邮箱列表已成功接收',
    'api_code_getlistmail_1' => '没有找到邮箱',
    'api_code_getforwardmail_0' => '邮箱列表已成功接收',
    'api_code_getforwardmail_1' => '找不到邮箱重定向',

    'api_code_cron_min_1' => '给定分钟的格式无效',
    'api_code_cron_hours_1' => '预设时间格式无效',
    'api_code_cron_days_1' => '无效的预定义天数格式',
    
    'api_code_cron_add_0' => '新的cron任务已成功添加到用户：',
    'api_code_cron_add_1' => '向用户添加新的cron任务时出错：',
    'api_code_cron_edit_0' => 'cron任务已成功为用户编辑：',
    'api_code_cron_edit_1' => '编辑用户的任务时发生错误',
    'api_code_cron_edit_2' => '使用这些值,用户找不到任务',
    'api_code_cron_edit_4' => '没有指定的值。无事可做！',
    'api_code_cron_del_0' => '该用户的cron任务已成功删除：',
    'api_code_cron_del_1' => '删除用户的任务时发生错误',
    'api_code_cron_del_2' => '使用这些值,用户找不到任务',
    'api_code_cron_list_0' => '任务列表已成功为用户接收',

    'api_code_cert_add_0' => '新证书已成功添加到用户：',
    'api_code_cert_add_1' => '将证书添加到用户时发生错误：',
    'api_code_cert_list_0' => '用户成功接收到证书列表：',
    'api_code_cert_list_1' => '获取用户证书列表时出错：',
    'api_code_cert_del_0' => '该用户的密钥和证书已成功删除：',
    'api_code_cert_del_1' => '所需的证书不能被删除,因为它被主机使用。',
    'api_code_cert_del_2' => '没有这样的密钥和证书。没有东西可以删除',
    'api_code_cert_savedomain_0' => '证书已成功安装到域中',
    'api_code_cert_deldomain_0' => '证书已成功删除该域名',
    'api_code_cert_listdomain_0' => '用户已收到安装证书的域列表：',


    'api_code_ftp_add_0' => '新FTP成功添加：',
    'api_code_ftp_add_1' => '这个FTP用户已经存在：',
    'api_code_ftp_add_2' => '没有安装FTP服务器',
    'api_code_ftp_add_3' => '面板中缺少用户名',
    'api_code_ftp_add_4' => '添加新用户时发生错误',
    'api_code_ftp_del_0' => 'FTP用户被成功删除',
    'api_code_ftp_del_1' => '未找到该用户',
    'api_code_ftp_del_2' => '没有安装FTP服务器',
    'api_code_ftp_del_3' => '删除用户时发生错误',
    'api_code_ftp_quota_0' => '配额已成功更改为用户',
    'api_code_ftp_quota_1' => '未找到用户',
    'api_code_ftp_quota_2' => '没有安装FTP服务器',
    'api_code_ftp_quota_3' => '错误更改用户的配额',
    'api_code_ftp_pass_0' => '密码已成功更改',
    'api_code_ftp_pass_1' => '找不到FTP用户',
    'api_code_ftp_pass_2' => '没有安装FTP服务器',
    'api_code_ftp_pass_3' => '更改用户密码时出错',
    'api_code_ftp_list_0' => '用户成功接收到FTP用户列表',
    'api_code_ftp_list_2' => '没有安装FTP服务器',
    'api_code_ftp_list_3' => '无法获取FTP用户列表',


    'api_code_prop_getinfo_0' => '信息已成功收到',
    'api_code_prop_getinfo_1' => '检索信息时发生错误',
    'api_code_prop_newtime_0' => '时间已成功更改为：',
    'api_code_prop_newtime_0' => '更改时间时发生错误。',
    'api_code_prop_tz_0' => '时区已成功更改',
    'api_code_prop_tz_1' => '更改时区时发生错误',
    'api_code_prop_tz_2' => '指定了错误的时区',
    'api_code_prop_host_0' => '新主机名已设置',
    'api_code_prop_host_1' => '安装新主机名时发生错误',
    'api_code_prop_host_2' => '指定的主机名称无效',
    'api_code_prop_rootps_0' => 'root的密码已成功更改',
    'api_code_prop_rootps_1' => '更改根密码时发生错误',
    'api_code_prop_rootps_2' => '新的root密码太短,至少8个字符',
    'api_code_prop_brainyps_0' => 'brainysql的密码已成功更改',
    'api_code_prop_brainyps_1' => '更改brainysql的密码时发生错误',
    'api_code_prop_brainyps_2' => '新的brainysql密码太短,至少8个字符',
    'api_code_prop_lang_0' => '所选语言已成功安装：',
    'api_code_prop_lang_2' => '指定了无效的语言选择参数：',
    'api_code_prop_mail_0' => '新设置已成功应用',
    'api_code_prop_mail_1' => '应用新参数时发生错误',
    'api_code_prop_mail_2' => '指定的邮箱不正确',
    'api_code_prop_mail_3' => '指定的主机名不正确',
    'api_code_prop_mail_4' => '端口未定义或无效',
    'api_code_prop_mail_5' => '指定的邮件发件人无效。应该是smtp或phpmail',


    'api_code_acc_changeshell_0' => '外壳访问已更改。现状：',
    'api_code_acc_changeshell_1' => '尝试更改对shell的访问时发生错误',
    'api_code_acc_changeshell_2' => 'shell参数包含无效值。可接受：是/否',
    'api_code_acc_changeshell_3' => '',
    'api_code_acc_changelang_0' => '所选语言已成功更改。当前语言：',
    'api_code_acc_changelang_1' => '尝试更改语言时发生错误',
    'api_code_acc_changelang_2' => 'lang参数包含无效值。有效期：ru / en',
    'api_code_acc_edituser_err_info' => '没有错误',
    'api_code_acc_edituser_0' => '用户数据已成功编辑',
    'api_code_acc_edituser_1' => '编辑用户数据时发生错误：',
    'api_code_acc_edituser_2' => '没有发现任何群组',
    'api_code_acc_edituser_3' => '未找到指定的群组',
    'api_code_acc_edituser_4' => '登录名必须至少有4个字符',
    'api_code_acc_edituser_5' => '密码必须包含至少7个字符',
    'api_code_acc_edituser_10' => ' - 参数错误，只有数字0-9是允许的',
    'api_code_acc_edituser_6' => 'Shell包含无效值。这是允许的y / n',
    'api_code_acc_edituser_7' => '没有找到单个关税计划',
    'api_code_acc_edituser_8' => '指定的资费计划不存在',
    'api_code_acc_edituser_9' => '指定的语言不正确。有效值是en / en',
    'api_code_acc_deluser_0' => '用户已成功删除',
    'api_code_acc_deluser_1' => '删除用户时发生错误',
    'api_code_acc_deluser_2' => '没有用户定义删除',
    'api_code_acc_adduser_0' => '新用户已成功添加',
    'api_code_acc_adduser_1' => '添加用户时发生错误',
    'api_code_acc_adduser_2' => '找不到指定的群组',
    'api_code_acc_adduser_3' => '没有找到指定的计划',
    'api_code_acc_adduser_4' => '登录名必须至少有4个字符',
    'api_code_acc_adduser_5' => '密码必须包含至少7个字符',
    'api_code_acc_listuser_0' => '用户列表已成功接收',
    'api_code_acc_listuser_1' => '没有找到用户',
    'api_code_acc_listgroup_0' => '成功收到群组列表',
    'api_code_acc_listgroup_1' => '没有发现任何群组',
    'api_code_acc_listplan_0' => '关税计划清单已成功收到',
    'api_code_acc_listplan_1' => '没有找到单个关税计划',
    'api_code_acc_editplan_0' => '关税计划已成功编辑',
    'api_code_acc_editplan_1' => '删除关税计划时发生错误',
    'api_code_acc_editplan_2' => '指定的计划不存在',
    'api_code_acc_editplan_3' => 'Shell包含无效值。这是允许的y / n',
    'api_code_acc_editplan_4' => '指定的语言不正确。有效值是en / en',
    'api_code_acc_editplan_10' => ' - 参数错误。只有数字0-9是允许的',
    'api_code_acc_addplan_0' => '新计划已成功创建',
    'api_code_acc_addplan_1' => '创建关税计划时发生错误',
    'api_code_acc_addplan_2' => '这个计划已经存在',
    'api_code_acc_addplan_3' => 'Oazano关税计划的名称不正确',
    'api_code_acc_addplan_4' => 'Shell包含无效值。这是允许的y / n',
    'api_code_acc_addplan_5' => '指定的语言不正确。有效值是en / en',
    'api_code_acc_addplan_10' => ' - 参数错误，只有数字0-9是允许的',
    'api_code_acc_delplan_0' => '关税计划已成功删除',
    'api_code_acc_delplan_1' => '删除关税计划时发生错误',
    'api_code_acc_delplan_2' => '没有这样的关税计划',
    'api_code_acc_delplan_3' => '资费计划的名称未指定或不正确',

    'api_code_acc_viewplan_0' => '关税计划数据已成功收到',
    'api_code_acc_viewplan_1' => '检索资费计划数据时发生错误',
    'api_code_acc_viewplan_2' => '没有这样的关税计划',
    'api_code_acc_viewplan_3' => '资费计划的名称未指定或不正确',
    'api_code_acc_viewgroup_0' => '关于该群组的数据已成功接收',
    'api_code_acc_viewgroup_1' => '检索群组信息时发生错误',
    'api_code_acc_viewgroup_2' => '指定的组未找到或未定义：',
    'api_code_acc_editgroup_0' => '该群组已成功编辑',
    'api_code_acc_editgroup_1' => '编辑组时发生错误',

    'api_code_ipm_listip_0' => 'IP地址列表已成功接收',
    'api_code_ipm_listip_1' => '没有找到IP地址',
    'api_code_ipm_addip_0' => '新的IP地址已成功添加',
    'api_code_ipm_addip_1' => '添加IP地址时发生错误',
    'api_code_ipm_addip_2' => '指定的IP地址无效',
    'api_code_ipm_addip_3' => '指定的掩码无效',
    'api_code_ipm_delip_0' => '指定的IP地址被成功删除',
    'api_code_ipm_delip_1' => '删除指定的IP地址时发生错误',
    'api_code_ipm_delip_2' => '指定的IP地址无效',

    'api_code_hostacc_manaer2' => '找不到操作',

    'api_code_acc_setplan_ok' => '关税计划已成功应用于用户',
    'api_code_acc_setplan_failed' => '更改用户的资费计划时发生错误',

    
);

?>

