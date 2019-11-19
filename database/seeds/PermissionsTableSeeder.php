<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'jobtitle_create',
            ],
            [
                'id'    => '18',
                'title' => 'jobtitle_edit',
            ],
            [
                'id'    => '19',
                'title' => 'jobtitle_show',
            ],
            [
                'id'    => '20',
                'title' => 'jobtitle_delete',
            ],
            [
                'id'    => '21',
                'title' => 'jobtitle_access',
            ],
            [
                'id'    => '22',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '23',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '24',
                'title' => 'content_management_access',
            ],
            [
                'id'    => '25',
                'title' => 'content_category_create',
            ],
            [
                'id'    => '26',
                'title' => 'content_category_edit',
            ],
            [
                'id'    => '27',
                'title' => 'content_category_show',
            ],
            [
                'id'    => '28',
                'title' => 'content_category_delete',
            ],
            [
                'id'    => '29',
                'title' => 'content_category_access',
            ],
            [
                'id'    => '30',
                'title' => 'content_tag_create',
            ],
            [
                'id'    => '31',
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => '32',
                'title' => 'content_tag_show',
            ],
            [
                'id'    => '33',
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => '34',
                'title' => 'content_tag_access',
            ],
            [
                'id'    => '35',
                'title' => 'content_page_create',
            ],
            [
                'id'    => '36',
                'title' => 'content_page_edit',
            ],
            [
                'id'    => '37',
                'title' => 'content_page_show',
            ],
            [
                'id'    => '38',
                'title' => 'content_page_delete',
            ],
            [
                'id'    => '39',
                'title' => 'content_page_access',
            ],
            [
                'id'    => '40',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '41',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '42',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '43',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '44',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '45',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '46',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '47',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '48',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '49',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '50',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '51',
                'title' => 'team_create',
            ],
            [
                'id'    => '52',
                'title' => 'team_edit',
            ],
            [
                'id'    => '53',
                'title' => 'team_show',
            ],
            [
                'id'    => '54',
                'title' => 'team_delete',
            ],
            [
                'id'    => '55',
                'title' => 'team_access',
            ],
            [
                'id'    => '56',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '57',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '58',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '59',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '60',
                'title' => 'department_create',
            ],
            [
                'id'    => '61',
                'title' => 'department_edit',
            ],
            [
                'id'    => '62',
                'title' => 'department_show',
            ],
            [
                'id'    => '63',
                'title' => 'department_delete',
            ],
            [
                'id'    => '64',
                'title' => 'department_access',
            ],
            [
                'id'    => '65',
                'title' => 'activity_calendar_report_access',
            ],
            [
                'id'    => '66',
                'title' => 'main_activity_access',
            ],
            [
                'id'    => '67',
                'title' => 'request_for_approval_access',
            ],
            [
                'id'    => '68',
                'title' => 'rfa_create',
            ],
            [
                'id'    => '69',
                'title' => 'rfa_edit',
            ],
            [
                'id'    => '70',
                'title' => 'rfa_show',
            ],
            [
                'id'    => '71',
                'title' => 'rfa_delete',
            ],
            [
                'id'    => '72',
                'title' => 'rfa_access',
            ],
            [
                'id'    => '73',
                'title' => 'rfatype_create',
            ],
            [
                'id'    => '74',
                'title' => 'rfatype_edit',
            ],
            [
                'id'    => '75',
                'title' => 'rfatype_show',
            ],
            [
                'id'    => '76',
                'title' => 'rfatype_delete',
            ],
            [
                'id'    => '77',
                'title' => 'rfatype_access',
            ],
            [
                'id'    => '78',
                'title' => 'rfa_comment_status_create',
            ],
            [
                'id'    => '79',
                'title' => 'rfa_comment_status_edit',
            ],
            [
                'id'    => '80',
                'title' => 'rfa_comment_status_show',
            ],
            [
                'id'    => '81',
                'title' => 'rfa_comment_status_delete',
            ],
            [
                'id'    => '82',
                'title' => 'rfa_comment_status_access',
            ],
            [
                'id'    => '83',
                'title' => 'rfa_document_status_create',
            ],
            [
                'id'    => '84',
                'title' => 'rfa_document_status_edit',
            ],
            [
                'id'    => '85',
                'title' => 'rfa_document_status_show',
            ],
            [
                'id'    => '86',
                'title' => 'rfa_document_status_delete',
            ],
            [
                'id'    => '87',
                'title' => 'rfa_document_status_access',
            ],
            [
                'id'    => '88',
                'title' => 'task_management_access',
            ],
            [
                'id'    => '89',
                'title' => 'task_status_create',
            ],
            [
                'id'    => '90',
                'title' => 'task_status_edit',
            ],
            [
                'id'    => '91',
                'title' => 'task_status_show',
            ],
            [
                'id'    => '92',
                'title' => 'task_status_delete',
            ],
            [
                'id'    => '93',
                'title' => 'task_status_access',
            ],
            [
                'id'    => '94',
                'title' => 'task_tag_create',
            ],
            [
                'id'    => '95',
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => '96',
                'title' => 'task_tag_show',
            ],
            [
                'id'    => '97',
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => '98',
                'title' => 'task_tag_access',
            ],
            [
                'id'    => '99',
                'title' => 'task_create',
            ],
            [
                'id'    => '100',
                'title' => 'task_edit',
            ],
            [
                'id'    => '101',
                'title' => 'task_show',
            ],
            [
                'id'    => '102',
                'title' => 'task_delete',
            ],
            [
                'id'    => '103',
                'title' => 'task_access',
            ],
            [
                'id'    => '104',
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => '105',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '106',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '107',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '108',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '109',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '110',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '111',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '112',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '113',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '114',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '115',
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => '116',
                'title' => 'time_management_access',
            ],
            [
                'id'    => '117',
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => '118',
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => '119',
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => '120',
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => '121',
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => '122',
                'title' => 'time_project_create',
            ],
            [
                'id'    => '123',
                'title' => 'time_project_edit',
            ],
            [
                'id'    => '124',
                'title' => 'time_project_show',
            ],
            [
                'id'    => '125',
                'title' => 'time_project_delete',
            ],
            [
                'id'    => '126',
                'title' => 'time_project_access',
            ],
            [
                'id'    => '127',
                'title' => 'time_entry_create',
            ],
            [
                'id'    => '128',
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => '129',
                'title' => 'time_entry_show',
            ],
            [
                'id'    => '130',
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => '131',
                'title' => 'time_entry_access',
            ],
            [
                'id'    => '132',
                'title' => 'time_report_create',
            ],
            [
                'id'    => '133',
                'title' => 'time_report_edit',
            ],
            [
                'id'    => '134',
                'title' => 'time_report_show',
            ],
            [
                'id'    => '135',
                'title' => 'time_report_delete',
            ],
            [
                'id'    => '136',
                'title' => 'time_report_access',
            ],
            [
                'id'    => '137',
                'title' => 'asset_management_access',
            ],
            [
                'id'    => '138',
                'title' => 'asset_category_create',
            ],
            [
                'id'    => '139',
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => '140',
                'title' => 'asset_category_show',
            ],
            [
                'id'    => '141',
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => '142',
                'title' => 'asset_category_access',
            ],
            [
                'id'    => '143',
                'title' => 'asset_location_create',
            ],
            [
                'id'    => '144',
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => '145',
                'title' => 'asset_location_show',
            ],
            [
                'id'    => '146',
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => '147',
                'title' => 'asset_location_access',
            ],
            [
                'id'    => '148',
                'title' => 'asset_status_create',
            ],
            [
                'id'    => '149',
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => '150',
                'title' => 'asset_status_show',
            ],
            [
                'id'    => '151',
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => '152',
                'title' => 'asset_status_access',
            ],
            [
                'id'    => '153',
                'title' => 'asset_create',
            ],
            [
                'id'    => '154',
                'title' => 'asset_edit',
            ],
            [
                'id'    => '155',
                'title' => 'asset_show',
            ],
            [
                'id'    => '156',
                'title' => 'asset_delete',
            ],
            [
                'id'    => '157',
                'title' => 'asset_access',
            ],
            [
                'id'    => '158',
                'title' => 'assets_history_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
