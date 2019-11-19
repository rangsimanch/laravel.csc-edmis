<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li>
                <select class="searchable-field form-control">

                </select>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('main_activity_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-book nav-icon">

                        </i>
                        {{ trans('cruds.mainActivity.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('request_for_approval_access')
                            <li class="nav-item nav-dropdown">
                                <a class="nav-link  nav-dropdown-toggle" href="#">
                                    <i class="fa-fw fas fa-cogs nav-icon">

                                    </i>
                                    {{ trans('cruds.requestForApproval.title') }}
                                </a>
                                <ul class="nav-dropdown-items">
                                    @can('rfa_access')
                                        <li class="nav-item">
                                            <a href="{{ route("admin.rfas.index") }}" class="nav-link {{ request()->is('admin/rfas') || request()->is('admin/rfas/*') ? 'active' : '' }}">
                                                <i class="fa-fw fas fa-cogs nav-icon">

                                                </i>
                                                {{ trans('cruds.rfa.title') }}
                                            </a>
                                        </li>
                                    @endcan
                                    @can('rfatype_access')
                                        <li class="nav-item">
                                            <a href="{{ route("admin.rfatypes.index") }}" class="nav-link {{ request()->is('admin/rfatypes') || request()->is('admin/rfatypes/*') ? 'active' : '' }}">
                                                <i class="fa-fw fas fa-cogs nav-icon">

                                                </i>
                                                {{ trans('cruds.rfatype.title') }}
                                            </a>
                                        </li>
                                    @endcan
                                    @can('rfa_comment_status_access')
                                        <li class="nav-item">
                                            <a href="{{ route("admin.rfa-comment-statuses.index") }}" class="nav-link {{ request()->is('admin/rfa-comment-statuses') || request()->is('admin/rfa-comment-statuses/*') ? 'active' : '' }}">
                                                <i class="fa-fw fas fa-cogs nav-icon">

                                                </i>
                                                {{ trans('cruds.rfaCommentStatus.title') }}
                                            </a>
                                        </li>
                                    @endcan
                                    @can('rfa_document_status_access')
                                        <li class="nav-item">
                                            <a href="{{ route("admin.rfa-document-statuses.index") }}" class="nav-link {{ request()->is('admin/rfa-document-statuses') || request()->is('admin/rfa-document-statuses/*') ? 'active' : '' }}">
                                                <i class="fa-fw fas fa-cogs nav-icon">

                                                </i>
                                                {{ trans('cruds.rfaDocumentStatus.title') }}
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('team_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.teams.index") }}" class="nav-link {{ request()->is('admin/teams') || request()->is('admin/teams/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-users nav-icon">

                                    </i>
                                    {{ trans('cruds.team.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('department_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.departments.index") }}" class="nav-link {{ request()->is('admin/departments') || request()->is('admin/departments/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-chalkboard-teacher nav-icon">

                                    </i>
                                    {{ trans('cruds.department.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('jobtitle_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.jobtitles.index") }}" class="nav-link {{ request()->is('admin/jobtitles') || request()->is('admin/jobtitles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-address-card nav-icon">

                                    </i>
                                    {{ trans('cruds.jobtitle.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.auditLog.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('task_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-list nav-icon">

                        </i>
                        {{ trans('cruds.taskManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('task_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.task-statuses.index") }}" class="nav-link {{ request()->is('admin/task-statuses') || request()->is('admin/task-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.taskStatus.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('task_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.task-tags.index") }}" class="nav-link {{ request()->is('admin/task-tags') || request()->is('admin/task-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.taskTag.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('task_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.tasks.index") }}" class="nav-link {{ request()->is('admin/tasks') || request()->is('admin/tasks/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.task.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('tasks_calendar_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.tasks-calendars.index") }}" class="nav-link {{ request()->is('admin/tasks-calendars') || request()->is('admin/tasks-calendars/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-calendar nav-icon">

                                    </i>
                                    {{ trans('cruds.tasksCalendar.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('content_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-book nav-icon">

                        </i>
                        {{ trans('cruds.contentManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('content_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-categories.index") }}" class="nav-link {{ request()->is('admin/content-categories') || request()->is('admin/content-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.contentCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('content_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-tags.index") }}" class="nav-link {{ request()->is('admin/content-tags') || request()->is('admin/content-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.contentTag.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('content_page_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-pages.index") }}" class="nav-link {{ request()->is('admin/content-pages') || request()->is('admin/content-pages/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file nav-icon">

                                    </i>
                                    {{ trans('cruds.contentPage.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('faq_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-question nav-icon">

                        </i>
                        {{ trans('cruds.faqManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('faq_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.faq-categories.index") }}" class="nav-link {{ request()->is('admin/faq-categories') || request()->is('admin/faq-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.faqCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('faq_question_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.faq-questions.index") }}" class="nav-link {{ request()->is('admin/faq-questions') || request()->is('admin/faq-questions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-question nav-icon">

                                    </i>
                                    {{ trans('cruds.faqQuestion.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('contact_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-phone-square nav-icon">

                        </i>
                        {{ trans('cruds.contactManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('contact_company_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.contact-companies.index") }}" class="nav-link {{ request()->is('admin/contact-companies') || request()->is('admin/contact-companies/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-building nav-icon">

                                    </i>
                                    {{ trans('cruds.contactCompany.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('contact_contact_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.contact-contacts.index") }}" class="nav-link {{ request()->is('admin/contact-contacts') || request()->is('admin/contact-contacts/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user-plus nav-icon">

                                    </i>
                                    {{ trans('cruds.contactContact.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('time_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-clock nav-icon">

                        </i>
                        {{ trans('cruds.timeManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('time_work_type_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.time-work-types.index") }}" class="nav-link {{ request()->is('admin/time-work-types') || request()->is('admin/time-work-types/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-th nav-icon">

                                    </i>
                                    {{ trans('cruds.timeWorkType.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('time_project_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.time-projects.index") }}" class="nav-link {{ request()->is('admin/time-projects') || request()->is('admin/time-projects/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.timeProject.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('time_entry_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.time-entries.index") }}" class="nav-link {{ request()->is('admin/time-entries') || request()->is('admin/time-entries/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.timeEntry.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('time_report_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.time-reports.index") }}" class="nav-link {{ request()->is('admin/time-reports') || request()->is('admin/time-reports/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-chart-line nav-icon">

                                    </i>
                                    {{ trans('cruds.timeReport.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('asset_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-book nav-icon">

                        </i>
                        {{ trans('cruds.assetManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('asset_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.asset-categories.index") }}" class="nav-link {{ request()->is('admin/asset-categories') || request()->is('admin/asset-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.assetCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('asset_location_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.asset-locations.index") }}" class="nav-link {{ request()->is('admin/asset-locations') || request()->is('admin/asset-locations/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-map-marker nav-icon">

                                    </i>
                                    {{ trans('cruds.assetLocation.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('asset_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.asset-statuses.index") }}" class="nav-link {{ request()->is('admin/asset-statuses') || request()->is('admin/asset-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.assetStatus.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('asset_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.assets.index") }}" class="nav-link {{ request()->is('admin/assets') || request()->is('admin/assets/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-book nav-icon">

                                    </i>
                                    {{ trans('cruds.asset.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('assets_history_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.assets-histories.index") }}" class="nav-link {{ request()->is('admin/assets-histories') || request()->is('admin/assets-histories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-th-list nav-icon">

                                    </i>
                                    {{ trans('cruds.assetsHistory.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('user_alert_access')
                <li class="nav-item">
                    <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-bell nav-icon">

                        </i>
                        {{ trans('cruds.userAlert.title') }}
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : '' }}">
                    <i class="nav-icon fa-fw fas fa-calendar">

                    </i>
                    {{ trans('global.systemCalendar') }}
                </a>
            </li>
            @php($unread = \App\QaTopic::unreadCount())
                <li class="nav-item">
                    <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'active' : '' }} nav-link">
                        <i class="nav-icon fa-fw fa fa-envelope">

                        </i>
                        <span>{{ trans('global.messages') }}</span>
                        @if($unread > 0)
                            <strong>( {{ $unread }} )</strong>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt">

                        </i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>