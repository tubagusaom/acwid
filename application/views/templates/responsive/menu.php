<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px;">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

    <li class="nav-item start <?= $this->uri->segment(1) == 'home' ? 'active' : '' ?>">
        <a href="<?= base_url() ?>" class="nav-link ">
            <i class="icon-home"></i>
            <span class="title">Beranda</span>
        </a>
    </li>
    <li class="nav-item start <?= $this->uri->segment(1) == 'profil' ? 'active' : '' ?>">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-user"></i>
            <span class="title">Profil</span>
            <span class="arrow <?= $this->uri->segment(1) == 'profil' ? 'open' : '' ?>"></span>
        </a>
        <ul class="sub-menu">

            <li class="nav-item <?= $this->uri->segment(1) == 'profil' && $this->uri->segment(2) == 'sosmed' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'profil/sosmed' ?>" class="nav-link ">
                    <span class="title">Social Media</span>

                </a>
            </li>

            <li class="nav-item <?= $this->uri->segment(1) == 'profil' && $this->uri->segment(2) == 'biodata' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'profil/biodata' ?>" class="nav-link ">
                    <span class="title">Biodata</span>

                </a>
            </li>

            <li class="nav-item <?= $this->uri->segment(1) == 'profil' && $this->uri->segment(2) == 'about' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'profil/about' ?>" class="nav-link ">
                    <span class="title">About</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item  <?= $this->uri->segment(1) == 'resume' ? 'active' : '' ?>">    <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-layers"></i>
            <span class="title">Resume</span>
            <span class="arrow"></span>
        </a>

        <ul class="sub-menu">
            <li class="nav-item <?= $this->uri->segment(1) == 'resume' && $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'resume/add' ?>" class="nav-link ">
                    <span class="title">Add Resume</span>
                </a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'resume' && $this->uri->segment(2) == 'data' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'resume/data' ?>" class="nav-link ">
                    <span class="title">Data Resume</span>
                </a>
            </li>
        </ul>

    </li>

    <li class="nav-item <?= $this->uri->segment(1) == 'portfolio' ? 'active' : '' ?> ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-docs"></i>
            <span class="title">Portfolio</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item <?= $this->uri->segment(1) == 'portfolio' && $this->uri->segment(2) == 'category' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'portfolio/category' ?>" class="nav-link ">
                    <span class="title">Portfolio Category</span>
                </a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) == 'portfolio' && $this->uri->segment(2) == 'upload' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'portfolio/upload' ?>" class="nav-link ">
                    <span class="title">Upload Portfolio</span>
                </a>
            </li>
            <li class="nav-item  <?= $this->uri->segment(1) == 'portfolio' && $this->uri->segment(2) == 'index' ? 'active' : '' ?>">
                <a href="<?= base_url() . 'portfolio/index' ?>" class="nav-link ">
                    <span class="title">Data Portfolio</span>
                </a>
            </li>
        </ul>
    </li>

    <!-- <li class="nav-item  <?= $this->uri->segment(1) == 'bantuan' ? 'active' : '' ?> ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-notebook"></i>
            <span class="title">Bantuan</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  <?= $this->uri->segment(1) == 'bantuan' && $this->uri->segment(2) == 'kontak' ? 'active' : '' ?> ">
                <a href="<?= base_url() . 'bantuan/kontak' ?>" class="nav-link ">
                    <span class="title">Kontak</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= base_url() . 'knowledge_base/view' ?>" class="nav-link ">
                    <span class="title">Panduan</span>
                </a>
            </li>
        </ul>
    </li> -->

    <li class="nav-item start <?= $this->uri->segment(1) == 'contact' ? 'active' : '' ?>">
        <a href="<?= base_url() . 'contact' ?>" class="nav-link ">
            <i class="icon-call-end"></i>
            <span class="title">Kontak</span>
        </a>
    </li>

</ul>
