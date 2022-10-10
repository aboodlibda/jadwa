<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>الصفحة الرئيسية</span>
<<<<<<< Updated upstream
                    </a>

                </li>
                <li>
                    <a href="<?php echo e(route('users.index')); ?>" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span>المستخدمين</span>
                    </a>
=======
                    </a>

                </li>
                <li>
                    <a href="<?php echo e(route('users.index')); ?>" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span>المستخدمين</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('projects.index')); ?>" class="waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span>المشاريع</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('users.index')); ?>" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>بيانات المستخدم</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('translation.Calendars'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar" key="t-tui-calendar"><?php echo app('translator')->get('translation.TUI_Calendar'); ?></a></li>
                        <li><a href="calendar-full" key="t-full-calendar"><?php echo app('translator')->get('translation.Full_Calendar'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="chat" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat"><?php echo app('translator')->get('translation.Chat'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="apps-filemanager" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-file-manager"><?php echo app('translator')->get('translation.File_Manager'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce"><?php echo app('translator')->get('translation.Ecommerce'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products" key="t-products"><?php echo app('translator')->get('translation.Products'); ?></a></li>
                        <li><a href="ecommerce-product-detail" key="t-product-detail"><?php echo app('translator')->get('translation.Product_Detail'); ?></a></li>
                        <li><a href="ecommerce-orders" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="ecommerce-customers" key="t-customers"><?php echo app('translator')->get('translation.Customers'); ?></a></li>
                        <li><a href="ecommerce-cart" key="t-cart"><?php echo app('translator')->get('translation.Cart'); ?></a></li>
                        <li><a href="ecommerce-checkout" key="t-checkout"><?php echo app('translator')->get('translation.Checkout'); ?></a></li>
                        <li><a href="ecommerce-shops" key="t-shops"><?php echo app('translator')->get('translation.Shops'); ?></a></li>
                        <li><a href="ecommerce-add-product" key="t-add-product"><?php echo app('translator')->get('translation.Add_Product'); ?></a>
                        </li>
                    </ul>
>>>>>>> Stashed changes
                </li>
                <li>
<<<<<<< Updated upstream
                    <a href="<?php echo e(route('projects.index')); ?>" class="waves-effect">
=======
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto"><?php echo app('translator')->get('translation.Crypto'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet" key="t-wallet"><?php echo app('translator')->get('translation.Wallet'); ?></a></li>
                        <li><a href="crypto-buy-sell" key="t-buy"><?php echo app('translator')->get('translation.Buy_Sell'); ?></a></li>
                        <li><a href="crypto-exchange" key="t-exchange"><?php echo app('translator')->get('translation.Exchange'); ?></a></li>
                        <li><a href="crypto-lending" key="t-lending"><?php echo app('translator')->get('translation.Lending'); ?></a></li>
                        <li><a href="crypto-orders" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="crypto-kyc-application" key="t-kyc"><?php echo app('translator')->get('translation.KYC_Application'); ?></a></li>
                        <li><a href="crypto-ico-landing" key="t-ico"><?php echo app('translator')->get('translation.ICO_Landing'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email"><?php echo app('translator')->get('translation.Email'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox" key="t-inbox"><?php echo app('translator')->get('translation.Inbox'); ?></a></li>
                        <li><a href="email-read" key="t-read-email"><?php echo app('translator')->get('translation.Read_Email'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span key="t-email-templates"><?php echo app('translator')->get('translation.Templates'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic" key="t-basic-action"><?php echo app('translator')->get('translation.Basic_Action'); ?></a></li>
                                <li><a href="email-template-alert" key="t-alert-email"><?php echo app('translator')->get('translation.Alert_Email'); ?></a></li>
                                <li><a href="email-template-billing" key="t-bill-email"><?php echo app('translator')->get('translation.Billing_Email'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices"><?php echo app('translator')->get('translation.Invoices'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list" key="t-invoice-list"><?php echo app('translator')->get('translation.Invoice_List'); ?></a></li>
                        <li><a href="invoices-detail" key="t-invoice-detail"><?php echo app('translator')->get('translation.Invoice_Detail'); ?></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
>>>>>>> Stashed changes
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span>المشاريع</span>
                    </a>
                </li>
                <li>
<<<<<<< Updated upstream
                    <a href="<?php echo e(route('users.index')); ?>" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span>بيانات المستخدم</span>
=======
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts"><?php echo app('translator')->get('translation.Contacts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid" key="t-user-grid"><?php echo app('translator')->get('translation.User_Grid'); ?></a></li>
                        <li><a href="contacts-list" key="t-user-list"><?php echo app('translator')->get('translation.User_List'); ?></a></li>
                        <li><a href="contacts-profile" key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog"><?php echo app('translator')->get('translation.Blog'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog-list" key="t-blog-list"><?php echo app('translator')->get('translation.Blog_List'); ?></a></li>
                        <li><a href="blog-grid" key="t-blog-grid"><?php echo app('translator')->get('translation.Blog_Grid'); ?></a></li>
                        <li><a href="blog-details" key="t-blog-details"><?php echo app('translator')->get('translation.Blog_Details'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end" key="t-new"><?php echo app('translator')->get('translation.New'); ?></span>
                        <i class="bx bx-briefcase-alt"></i>
                        <span key="t-jobs"><?php echo app('translator')->get('translation.Jobs'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="job-list" key="t-job-list"><?php echo app('translator')->get('translation.Job_List'); ?></a></li>
                        <li><a href="job-grid" key="t-job-grid"><?php echo app('translator')->get('translation.Job_Grid'); ?></a></li>
                        <li><a href="job-apply" key="t-apply-job"><?php echo app('translator')->get('translation.Apply_Job'); ?></a></li>
                        <li><a href="job-details" key="t-job-details"><?php echo app('translator')->get('translation.Job_Details'); ?></a></li>
                        <li><a href="job-categories" key="t-Jobs-categories"><?php echo app('translator')->get('translation.Jobs_Categories'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-candidate"><?php echo app('translator')->get('translation.Candidate'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="candidate-list" key="t-list"><?php echo app('translator')->get('translation.List'); ?></a></li>
                                <li><a href="candidate-overview" key="t-overview"><?php echo app('translator')->get('translation.Overview'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages"><?php echo app('translator')->get('translation.Pages'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication"><?php echo app('translator')->get('translation.Authentication'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" key="t-login"><?php echo app('translator')->get('translation.Login'); ?></a></li>
                        <li><a href="auth-login-2" key="t-login-2"><?php echo app('translator')->get('translation.Login'); ?> 2</a></li>
                        <li><a href="auth-register" key="t-register"><?php echo app('translator')->get('translation.Register'); ?></a></li>
                        <li><a href="auth-register-2" key="t-register-2"><?php echo app('translator')->get('translation.Register'); ?> 2</a></li>
                        <li><a href="auth-recoverpw" key="t-recover-password"><?php echo app('translator')->get('translation.Recover_Password'); ?></a>
                        </li>
                        <li><a href="auth-recoverpw-2" key="t-recover-password-2"><?php echo app('translator')->get('translation.Recover_Password'); ?>
                                2</a></li>
                        <li><a href="auth-lock-screen" key="t-lock-screen"><?php echo app('translator')->get('translation.Lock_Screen'); ?></a></li>
                        <li><a href="auth-lock-screen-2" key="t-lock-screen-2"><?php echo app('translator')->get('translation.Lock_Screen'); ?> 2</a>
                        </li>
                        <li><a href="auth-confirm-mail" key="t-confirm-mail"><?php echo app('translator')->get('translation.Confirm_Mail'); ?></a></li>
                        <li><a href="auth-confirm-mail-2" key="t-confirm-mail-2"><?php echo app('translator')->get('translation.Confirm_Mail'); ?> 2</a>
                        </li>
                        <li><a href="auth-email-verification" key="t-email-verification"><?php echo app('translator')->get('translation.Email_verification'); ?></a></li>
                        <li><a href="auth-email-verification-2" key="t-email-verification-2"><?php echo app('translator')->get('translation.Email_verification'); ?> 2</a>
                        </li>
                        <li><a href="auth-two-step-verification" key="t-two-step-verification"><?php echo app('translator')->get('translation.Two_step_verification'); ?></a>
                        </li>
                        <li><a href="auth-two-step-verification-2" key="t-two-step-verification-2"><?php echo app('translator')->get('translation.Two_step_verification'); ?>
                                2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-utility"><?php echo app('translator')->get('translation.Utility'); ?></span>
>>>>>>> Stashed changes
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">اعدادات النظام</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
<<<<<<< Updated upstream
                        <li><a href="<?php echo e(route('sliders.index')); ?>" key="t-tui-calendar">السلايدر </a></li>
                        <li><a href="<?php echo e(route('pages.index')); ?>" key="t-tui-calendar">الصفحات </a></li>
                        <li><a href="<?php echo e(route('services.index')); ?>" key="t-tui-calendar">الخدمات </a></li>
=======
                        <li><a href="ui-alerts" key="t-alerts"><?php echo app('translator')->get('translation.Alerts'); ?></a></li>
                        <li><a href="ui-buttons" key="t-buttons"><?php echo app('translator')->get('translation.Buttons'); ?></a></li>
                        <li><a href="ui-cards" key="t-cards"><?php echo app('translator')->get('translation.Cards'); ?></a></li>
                        <li><a href="ui-carousel" key="t-carousel"><?php echo app('translator')->get('translation.Carousel'); ?></a></li>
                        <li><a href="ui-dropdowns" key="t-dropdowns"><?php echo app('translator')->get('translation.Dropdowns'); ?></a></li>
                        <li><a href="ui-grid" key="t-grid"><?php echo app('translator')->get('translation.Grid'); ?></a></li>
                        <li><a href="ui-images" key="t-images"><?php echo app('translator')->get('translation.Images'); ?></a></li>
                        <li><a href="ui-lightbox" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a></li>
                        <li><a href="ui-modals" key="t-modals"><?php echo app('translator')->get('translation.Modals'); ?></a></li>
                        <li><a href="ui-offcanvas" key="t-offcanvas"><?php echo app('translator')->get('translation.Offcanvas'); ?></a></li>
                        <li><a href="ui-rangeslider" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a></li>
                        <li><a href="ui-session-timeout" key="t-session-timeout"><?php echo app('translator')->get('translation.Session_Timeout'); ?></a></li>
                        <li><a href="ui-progressbars" key="t-progress-bars"><?php echo app('translator')->get('translation.Progress_Bars'); ?></a></li>
                        <li><a href="ui-placeholders" key="t-placeholders"><?php echo app('translator')->get('translation.Placeholders'); ?></a></li>
                        <li><a href="ui-sweet-alert" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a></li>
                        <li><a href="ui-tabs-accordions" key="t-tabs-accordions"><?php echo app('translator')->get('translation.Tabs_&_Accordions'); ?></a></li>
                        <li><a href="ui-typography" key="t-typography"><?php echo app('translator')->get('translation.Typography'); ?></a></li>
                        <li><a href="ui-toasts" key="t-toasts"><?php echo app('translator')->get('translation.Toasts'); ?></a></li>
                        <li><a href="ui-video" key="t-video"><?php echo app('translator')->get('translation.Video'); ?></a></li>
                        <li><a href="ui-general" key="t-general"><?php echo app('translator')->get('translation.General'); ?></a></li>
                        <li><a href="ui-colors" key="t-colors"><?php echo app('translator')->get('translation.Colors'); ?></a></li>
                        <li><a href="ui-rating" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a></li>
                        <li><a href="ui-notifications" key="t-notifications"><?php echo app('translator')->get('translation.Notifications'); ?></a></li>
                        <li><a href="ui-utilities"><span key="t-utilities"><?php echo app('translator')->get('translation.Utilities'); ?></span> <span
                                    class="badge rounded-pill bg-success float-end"
                                    key="t-new"><?php echo app('translator')->get('translation.New'); ?></span></a></li>
                    </ul>
                </li>
>>>>>>> Stashed changes

                        <li><a href="<?php echo e(route('contacts.index')); ?>" key="t-tui-calendar">معلومات التواصل </a></li>

<<<<<<< Updated upstream
                    </ul>
                </li>

                
                
                
=======
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" key="t-basic-tables"><?php echo app('translator')->get('translation.Basic_Tables'); ?></a></li>
                        <li><a href="tables-datatable" key="t-data-tables"><?php echo app('translator')->get('translation.Data_Tables'); ?></a></li>
                        <li><a href="tables-responsive" key="t-responsive-table"><?php echo app('translator')->get('translation.Responsive_Table'); ?></a></li>
                        <li><a href="tables-editable" key="t-editable-table"><?php echo app('translator')->get('translation.Editable_Table'); ?></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex" key="t-apex-charts"><?php echo app('translator')->get('translation.Apex_Charts'); ?></a></li>
                        <li><a href="charts-echart" key="t-e-charts"><?php echo app('translator')->get('translation.E_Charts'); ?></a></li>
                        <li><a href="charts-chartjs" key="t-chartjs-charts"><?php echo app('translator')->get('translation.Chartjs_Charts'); ?></a></li>
                        <li><a href="charts-flot" key="t-flot-charts"><?php echo app('translator')->get('translation.Flot_Charts'); ?></a></li>
                        <li><a href="charts-tui" key="t-ui-charts"><?php echo app('translator')->get('translation.Toast_UI_Charts'); ?></a></li>
                        <li><a href="charts-knob" key="t-knob-charts"><?php echo app('translator')->get('translation.Jquery_Knob_Charts'); ?></a></li>
                        <li><a href="charts-sparkline" key="t-sparkline-charts"><?php echo app('translator')->get('translation.Sparkline_Charts'); ?></a></li>
                    </ul>
                </li>
>>>>>>> Stashed changes

                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">اعدادات المشروع</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
<<<<<<< Updated upstream
                        <li><a href="<?php echo e(route('projectype.index')); ?>" key="t-tui-calendar">أنواع المشاريع</a></li>
                        <li><a href="<?php echo e(route('projBpChanlRes.index')); ?>" key="t-full-calendar">قنوات البيع</a></li>
                        <li><a href="<?php echo e(route('marktchanl.index')); ?>" key="t-full-calendar">قنوات التسويق</a></li>
                        <li><a href="calendar-full" key="t-full-calendar"> مصادر الايرادات</a></li>
                        <li><a href="calendar-full" key="t-full-calendar"> هيكل التكاليف </a></li>
                        <li><a href="calendar-full" key="t-full-calendar"> الأنشطة الرئيسية  </a></li>
=======
                        <li><a href="icons-boxicons" key="t-boxicons"><?php echo app('translator')->get('translation.Boxicons'); ?></a></li>
                        <li><a href="icons-materialdesign" key="t-material-design"><?php echo app('translator')->get('translation.Material_Design'); ?></a></li>
                        <li><a href="icons-dripicons" key="t-dripicons"><?php echo app('translator')->get('translation.Dripicons'); ?></a></li>
                        <li><a href="icons-fontawesome" key="t-font-awesome"><?php echo app('translator')->get('translation.Font_awesome'); ?></a></li>
                    </ul>
                </li>
>>>>>>> Stashed changes

                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(route('adminstExp.index')); ?>" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span> مصاريف ادارية</span>
                    </a>
                </li>
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\Users\hp\Documents\GitHub\jadwa\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>