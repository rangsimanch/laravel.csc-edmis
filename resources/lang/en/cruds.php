<?php

return [
    'userManagement'         => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'             => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'                   => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'                   => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'img_user'                 => 'Display Photo',
            'img_user_helper'          => '',
            'dob'                      => 'Date of birth',
            'dob_helper'               => '',
            'gender'                   => 'Gender',
            'gender_helper'            => '',
            'workphone'                => 'Tel. number',
            'workphone_helper'         => '',
            'approved'                 => 'Approved',
            'approved_helper'          => '',
            'team'                     => 'Team',
            'team_helper'              => '',
            'jobtitle'                 => 'Jobtitle',
            'jobtitle_helper'          => '',
        ],
    ],
    'jobtitle'               => [
        'title'          => 'Jobtitle',
        'title_singular' => 'Jobtitle',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Job Title',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'department'        => 'Department',
            'department_helper' => '',
        ],
    ],
    'auditLog'               => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Description',
            'description_helper'  => '',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => '',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => '',
            'user_id'             => 'User ID',
            'user_id_helper'      => '',
            'properties'          => 'Properties',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
        ],
    ],
    'contentManagement'      => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory'        => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentTag'             => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentPage'            => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'title'                 => 'Title',
            'title_helper'          => '',
            'category'              => 'Categories',
            'category_helper'       => '',
            'tag'                   => 'Tags',
            'tag_helper'            => '',
            'page_text'             => 'Full Text',
            'page_text_helper'      => '',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => '',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => '',
        ],
    ],
    'faqManagement'          => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory'            => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'category'          => 'Category',
            'category_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'faqQuestion'            => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'category'          => 'Category',
            'category_helper'   => '',
            'question'          => 'Question',
            'question_helper'   => '',
            'answer'            => 'Answer',
            'answer_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'team'                   => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'code'              => 'Code',
            'code_helper'       => '',
        ],
    ],
    'userAlert'              => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => '',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => '',
            'user'              => 'Users',
            'user_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
        ],
    ],
    'department'             => [
        'title'          => 'Department',
        'title_singular' => 'Department',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'code'              => 'Code',
            'code_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'activityCalendarReport' => [
        'title'          => 'Activity Report',
        'title_singular' => 'Activity Report',
    ],
    'mainActivity'           => [
        'title'          => 'Main Activity',
        'title_singular' => 'Main Activity',
    ],
    'requestForApproval'     => [
        'title'          => 'Request For Approval (RFA)',
        'title_singular' => 'Request For Approval (RFA)',
    ],
    'rfa'                    => [
        'title'          => 'RFA Documents',
        'title_singular' => 'RFA Document',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'title'                  => 'Title',
            'title_helper'           => '',
            'document_number'        => 'Document Number',
            'document_number_helper' => '',
            'rfa_code'               => 'RFA Code',
            'rfa_code_helper'        => '',
            'submit_date'            => 'CEC Submit Date',
            'submit_date_helper'     => '',
            'issueby'                => 'Issue by',
            'issueby_helper'         => '',
            'assign'                 => 'Assign to',
            'assign_helper'          => '',
            'note_1'                 => 'Note',
            'note_1_helper'          => '',
            'file_upload_1'          => 'File Upload',
            'file_upload_1_helper'   => '',
            'create_by'              => 'Create By',
            'create_by_helper'       => '',
            'action_by'              => 'Action By',
            'action_by_helper'       => '',
            'comment_by'             => 'Comment By',
            'comment_by_helper'      => '',
            'information_by'         => 'Information By',
            'information_by_helper'  => '',
            'receive_date'           => 'CSC Receive Date',
            'receive_date_helper'    => '',
            'note_2'                 => 'Note',
            'note_2_helper'          => '',
            'note_3'                 => 'Note',
            'note_3_helper'          => '',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
            'type'                   => 'Type',
            'type_helper'            => '',
            'comment_status'         => 'Comment Status',
            'comment_status_helper'  => '',
            'for_status'             => 'For',
            'for_status_helper'      => '',
            'document_status'        => 'Document Status',
            'document_status_helper' => '',
        ],
    ],
    'rfatype'                => [
        'title'          => 'RFA Types',
        'title_singular' => 'RFA Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'type_name'         => 'Type Name',
            'type_name_helper'  => '',
            'type_code'         => 'Type Code',
            'type_code_helper'  => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'rfaCommentStatus'       => [
        'title'          => 'RFA Comment Status',
        'title_singular' => 'RFA Comment Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'rfaDocumentStatus'      => [
        'title'          => 'RFA Document Status',
        'title_singular' => 'RFA Document Status',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'status_name'        => 'Status Name',
            'status_name_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'taskManagement'         => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus'             => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'taskTag'                => [
        'title'          => 'Activity Types',
        'title_singular' => 'Activity Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'task'                   => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'status'             => 'Status',
            'status_helper'      => '',
            'tag'                => 'Activity Type',
            'tag_helper'         => '',
            'attachment'         => 'Attachment',
            'attachment_helper'  => '',
            'due_date'           => 'Start date',
            'due_date_helper'    => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
            'end_date'           => 'End Date',
            'end_date_helper'    => '',
        ],
    ],
    'tasksCalendar'          => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'contactManagement'      => [
        'title'          => 'Contact management',
        'title_singular' => 'Contact management',
    ],
    'contactCompany'         => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'company_name'           => 'Company name',
            'company_name_helper'    => '',
            'company_address'        => 'Address',
            'company_address_helper' => '',
            'company_website'        => 'Website',
            'company_website_helper' => '',
            'company_email'          => 'Email',
            'company_email_helper'   => '',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => '',
        ],
    ],
    'contactContact'         => [
        'title'          => 'Contacts',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'company'                   => 'Company',
            'company_helper'            => '',
            'contact_first_name'        => 'First name',
            'contact_first_name_helper' => '',
            'contact_last_name'         => 'Last name',
            'contact_last_name_helper'  => '',
            'contact_phone_1'           => 'Phone 1',
            'contact_phone_1_helper'    => '',
            'contact_phone_2'           => 'Phone 2',
            'contact_phone_2_helper'    => '',
            'contact_email'             => 'Email',
            'contact_email_helper'      => '',
            'contact_skype'             => 'Skype',
            'contact_skype_helper'      => '',
            'contact_address'           => 'Address',
            'contact_address_helper'    => '',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated At',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted At',
            'deleted_at_helper'         => '',
        ],
    ],
    'timeManagement'         => [
        'title'          => 'Time management',
        'title_singular' => 'Time management',
    ],
    'timeWorkType'           => [
        'title'          => 'Work types',
        'title_singular' => 'Work type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeProject'            => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeEntry'              => [
        'title'          => 'Time entries',
        'title_singular' => 'Time Entry',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'work_type'         => 'Work Type',
            'work_type_helper'  => '',
            'project'           => 'Project',
            'project_helper'    => '',
            'start_time'        => 'Start time',
            'start_time_helper' => '',
            'end_time'          => 'End time',
            'end_time_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'timeReport'             => [
        'title'          => 'Monthly report',
        'title_singular' => 'Monthly report',
        'reports'        => [
            'title'             => 'Reports',
            'title_singular'    => 'Report',
            'timeEntriesReport' => 'Time entries report',
            'timeByProjects'    => 'Report by project',
            'timeByWorkType'    => 'Report by work type',
        ],
    ],
    'assetManagement'        => [
        'title'          => 'Asset management',
        'title_singular' => 'Asset management',
    ],
    'assetCategory'          => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'assetLocation'          => [
        'title'          => 'Locations',
        'title_singular' => 'Location',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'assetStatus'            => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'asset'                  => [
        'title'          => 'Assets',
        'title_singular' => 'Asset',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'category'             => 'Category',
            'category_helper'      => '',
            'serial_number'        => 'Serial Number',
            'serial_number_helper' => '',
            'name'                 => 'Name',
            'name_helper'          => '',
            'photos'               => 'Photos',
            'photos_helper'        => '',
            'status'               => 'Status',
            'status_helper'        => '',
            'location'             => 'Location',
            'location_helper'      => '',
            'notes'                => 'Notes',
            'notes_helper'         => '',
            'assigned_to'          => 'Assigned to',
            'assigned_to_helper'   => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => '',
        ],
    ],
    'assetsHistory'          => [
        'title'          => 'Assets History',
        'title_singular' => 'Assets History',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'asset'                => 'Asset',
            'asset_helper'         => '',
            'status'               => 'Status',
            'status_helper'        => '',
            'location'             => 'Location',
            'location_helper'      => '',
            'assigned_user'        => 'Assigned User',
            'assigned_user_helper' => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => '',
        ],
    ],
];
