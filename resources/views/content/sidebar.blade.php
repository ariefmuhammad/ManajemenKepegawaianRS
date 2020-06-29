<div class="app-sidebar sidebar-shadow bg-happy-fisher sidebar-text-dark">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Selamat Datang</li>
                                @if(auth()->user()->level == 'PEGAWAI')
                                    <li>
                                        <a href="{{route('dasar_pegawai')}}" class="{{ Request::is('/') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-id-card"></i>
                                            Dasar Pegawai
                                        </a>
                                    </li>
                                    @if(empty($pegawai_id))

                                    @elseif(!empty($pegawai_id))
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fa fa-history"></i>
                                        Riwayat
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="@if(Request::is('riwayat_pendidikan_formal')) {{ Request::is('riwayat_pendidikan_formal') ? 'mm-show' : '' }}
                                @elseif(Request::is('riwayat_diklat_fungsional')) {{ Request::is('riwayat_diklat_fungsional') ? 'mm-show' : '' }}
                                @elseif(Request::is('riwayat_diklat_teknis')) {{ Request::is('riwayat_diklat_teknis') ? 'mm-show' : '' }}
                                @elseif(Request::is('riwayat_diklat_penjenjangan_struktural')) {{ Request::is('riwayat_diklat_penjenjangan_struktural') ? 'mm-show' : '' }}
                                @elseif(Request::is('riwayat_kepangkatan')) {{ Request::is('riwayat_kepangkatan') ? 'mm-show' : '' }}
                                @elseif(Request::is('riwayat_jabatan_struktural')) {{ Request::is('riwayat_jabatan_struktural') ? 'mm-show' : '' }}
                                @elseif(Request::is('riwayat_jabatan_fungsional')) {{ Request::is('riwayat_jabatan_fungsional') ? 'mm-show' : '' }}
                                @elseif(Request::is('riwayat_pekerjaan_jabatan')) {{ Request::is('riwayat_pekerjaan_jabatan') ? 'mm-show' : '' }}@endif ">
                                       <li>
                                        <a href="{{route('riwayat_pendidikan_formal')}}" class="{{ Request::is('riwayat_pendidikan_formal') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Pendidikan Formal
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_diklat_fungsional')}}" class="{{ Request::is('riwayat_diklat_fungsional') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Diklat Fungsional
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_diklat_teknis')}}" class="{{ Request::is('riwayat_diklat_teknis') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Diklat Teknis
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_diklat_penjenjangan_struktural')}}" class="{{ Request::is('riwayat_diklat_penjenjangan_struktural') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Diklat Penjenjangan / Struktural
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_kepangkatan')}}" class="{{ Request::is('riwayat_kepangkatan') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Kepangkatan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_jabatan_struktural')}}" class="{{ Request::is('riwayat_jabatan_struktural') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Jabatan Struktural
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_jabatan_fungsional')}}" class="{{ Request::is('riwayat_jabatan_fungsional') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Jabatan Fungsional
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('riwayat_pekerjaan_jabatan')}}" class="{{ Request::is('riwayat_pekerjaan_jabatan') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Perkerjaan / Jabatan
                                        </a>
                                    </li>
                                </ul>
                            </li>

                                    <li>
                                        <a href="{{route('istri_suami')}}" class="{{ Request::is('istri_suami') ? 'mm-active' : '' }}">
                                            @if($pegawai_id->jenis_kelamin == "P")
                                            <i class="metismenu-icon fa fa-female"></i>
                                            Istri
                                            @elseif($pegawai_id->jenis_kelamin == "W")
                                            <i class="metismenu-icon fa fa-male"></i>
                                            Suami
                                            @endif
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('anak')}}" class="{{ Request::is('anak') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-child"></i>
                                            Anak
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon fa fa-home"></i>
                                            Keluarga
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                       <ul class="@if(Request::is('keluarga_kandung')) {{ Request::is('keluarga_kandung') ? 'mm-show' : '' }} 
                                       @elseif(Request::is('keluarga_istri_suami')) {{ Request::is('keluarga_istri_suami') ? 'mm-show' : '' }}@endif ">
                                    <li>
                                        <a href="{{route('keluarga_kandung')}}" class="{{ Request::is('keluarga_kandung') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Kandung
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('keluarga_istri_suami')}}" class="{{ Request::is('keluarga_istri_suami') ? 'mm-active' : '' }}">     
                                            @if($pegawai_id->jenis_kelamin == "P")
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Istri
                                            @elseif($pegawai_id->jenis_kelamin == "W")
                                            <i class="metismenu-icon pe-7s-note2"></i>
                                            Suami
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                        <a href="#">
                                            <i class="metismenu-icon fa fa-braille"></i>
                                            SKP
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                       <ul class="@if(Request::is('skp')) {{ Request::is('skp') ? 'mm-show' : '' }} 
                                       @elseif(Request::is('form_skp')) {{ Request::is('form_skp') ? 'mm-show' : '' }} 
                                       @elseif(Request::is('pengukuran_skp')) {{ Request::is('pengukuran_skp') ? 'mm-show' : '' }} 
                                       @elseif(Request::is('perilaku_kerja_skp')) {{ Request::is('perilaku_kerja_skp') ? 'mm-show' : '' }} 
                                       @elseif(Request::is('penilaian_skp')) {{ Request::is('penilaian_skp') ? 'mm-show' : '' }}@endif ">
                                            <li>
                                                <a href="{{route('skp')}}" class="{{ Request::is('skp') ? 'mm-active' : '' }}">
                                                    <i class="metismenu-icon"></i>
                                                    DATA SKP
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('form_skp')}}" class="{{ Request::is('form_skp') ? 'mm-active' : '' }}">
                                                    <i class="metismenu-icon"></i>
                                                    FORM SKP
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('pengukuran_skp')}}" class="{{ Request::is('pengukuran_skp') ? 'mm-active' : '' }}">
                                                    <i class="metismenu-icon">
                                                    </i>PENGUKURAN
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('perilaku_kerja_skp')}}" class="{{ Request::is('perilaku_kerja_skp') ? 'mm-active' : '' }}">
                                                    <i class="metismenu-icon">
                                                    </i>PERILAKU KERJA
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('penilaian_skp')}}" class="{{ Request::is('penilaian_skp') ? 'mm-active' : '' }}">
                                                    <i class="metismenu-icon">
                                                    </i>PENIILAIAN
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{route('seminar_lokakarya_simposium')}}" class="{{ Request::is('seminar_lokakarya_simposium') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-desktop"></i>
                                            Seminar / Lokakarya / Simposium
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('tanda_jasa_penghargaan')}}" class="{{ Request::is('tanda_jasa_penghargaan') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-trophy"></i>
                                            Tanda Jasa / Penghargaan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('hukum_disiplin')}}" class="{{ Request::is('hukum_disiplin') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-exclamation-triangle"></i>
                                            Hukum Disiplin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('keanggotaan_organisasi')}}" class="{{ Request::is('keanggotaan_organisasi') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-users"></i>
                                            Keanggotaan Organisasi
                                        </a>
                                    </li>
                                    @endif    
                                @endif
                                @if(auth()->user()->level == 'TU')
                                    <li>
                                        <a href="/admin" class="{{ Request::is('admin') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/pegawai" class="{{ Request::is('admin/pegawai') ? 'mm-active' : Request::is('admin/pegawai/*') ? 'mm-active' : ''  }}">
                                            <i class="metismenu-icon pe-7s-users"></i>
                                            Pegawai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/skp" class="{{ Request::is('admin/skp') ? 'mm-active' : Request::is('admin/skp/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-braille"></i>
                                            SKP
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/ruangan" class="{{ Request::is('admin/ruangan') ? 'mm-active' : Request::is('admin/ruangan/*') ? 'mm-active' : ''  }}">
                                            <i class="metismenu-icon pe-7s-home"></i>
                                            Ruangan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/setting" class="{{ Request::is('admin/setting') ? 'mm-active' : Request::is('admin/setting/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-settings"></i>
                                            Setting
                                        </a>
                                    </li>
                                @endif
                                @if(auth()->user()->level == 'ADMIN')
                                    <li>
                                        <a href="/it" class="{{ Request::is('it') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/pegawai" class="{{ Request::is('it/pegawai') ? 'mm-active' : Request::is('it/pegawai/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-users"></i>
                                            Pegawai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/skp" class="{{ Request::is('it/skp') ? 'mm-active' : Request::is('it/skp/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-braille"></i>
                                            SKP
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/ruangan" class="{{ Request::is('it/ruangan') ? 'mm-active' : Request::is('it/ruangan/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-home"></i>
                                            Ruangan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/periode" class="{{ Request::is('it/periode') ? 'mm-active' : Request::is('it/periode/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon fa fa-calendar"></i>
                                            Periode
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/it/setting" class="{{ Request::is('it/setting') ? 'mm-active' : Request::is('it/setting/*') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon pe-7s-settings"></i>
                                            Setting
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
