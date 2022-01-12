 <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                          
                           
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Kullanıcılar</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Users" class="nav-link ">
                                            <span class="title">Kullanıcı Listesi</span>
                                        </a>
                                    </li>
                               
                                  
                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Kategoriler</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Kategoriler" class="nav-link ">
                                            <span class="title">Kategori Listesi</span>
                                        </a>
                                    </li>
                               
                                  
                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Ürünler</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Urunler" class="nav-link ">
                                            <span class="title">Ürünler Listesi</span>
                                        </a>
                                    </li>
                               
                                  
                                </ul>
                            </li>
                              <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Müşteriler</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Musteriler" class="nav-link ">
                                            <span class="title">Müşteriler Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Siparişler</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Siparisler/yenisiparisler" class="nav-link ">
                                            <span class="title">Yeni Siparişler</span>
                                        </a>
                                         <a href="<?=base_url() ?>Admin/Siparisler/onaylanansiparisler" class="nav-link ">
                                            <span class="title">Onaylanan Siparişler</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                              <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Sayfalar</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Sayfalar" class="nav-link ">
                                            <span class="title">Sayfalar Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        
                              <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Mesajlar</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Mesajlar" class="nav-link ">
                                            <span class="title">Mesaj Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                              <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Ayarlar</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Ayarlar/Edit/1" class="nav-link ">
                                            <span class="title">Ayarı Düzenle</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <!--<li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-diamond"></i>
                                    <span class="title">Yapay Sinir Ağlar</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Regrasyon" class="nav-link ">
                                            <span class="title">Regrasyon</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Hesaplamalar" class="nav-link ">
                                            <span class="title">İleri Hesaplama</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?=base_url() ?>Admin/Hesaplamalar/geriHesapla" class="nav-link ">
                                            <span class="title">Geri Hesaplama</span>
                                        </a>
                                    </li>
                                </ul>
                                
                            </li> -->

                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->

                <!-- içerik başlangıç -->
            <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">