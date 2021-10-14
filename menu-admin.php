<section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <?php echo $level; ?></li>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            <li class="treeview">
              <a href="#"><i class="fa fa-th"></i> <span>Data Master</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=identitas"><i class="fa fa-circle-o text-green"></i> Data Identitas Sekolah</a></li>
                <li><a href="index.php?view=kurikulum"><i class="fa fa-circle-o text-yellow"></i> Data Kurikulum</a></li>
                <li><a href="index.php?view=tahunakademik"><i class="fa fa-circle-o text-red"></i> Data Tahun Akademik</a></li>
                <li><a href="index.php?view=gedung"><i class="fa fa-circle-o text-blue"></i> Data Gedung</a></li>
                <li><a href="index.php?view=ruangan"><i class="fa fa-circle-o text-green"></i> Data Ruangan</a></li>
                <li><a href="index.php?view=golongan"><i class="fa fa-circle-o text-yellow"></i> Data Golongan</a></li>
                <li><a href="index.php?view=ptk"><i class="fa fa-circle-o text-red"></i> Data Jenis PTK</a></li>
                <li><a href="index.php?view=jurusan"><i class="fa fa-circle-o text-blue"></i> Data Jurusan</a></li>
                <li><a href="index.php?view=kelas"><i class="fa fa-circle-o text-green"></i> Data Kelas</a></li>
                <li><a href="index.php?view=statuspegawai"><i class="fa fa-circle-o text-yellow"></i> Data Status Kepegawaian</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Data Pengguna</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=siswa"><i class="fa fa-circle-o text-green"></i> Data Siswa</a></li>
                <li><a href="index.php?view=guru"><i class="fa fa-circle-o text-yellow"></i> Data Guru</a></li>
                <li><a href="index.php?view=wakilkepala"><i class="fa fa-circle-o text-red"></i> Data Kepala Sekolah</a></li>
                <li><a href="index.php?view=admin"><i class="fa fa-circle-o text-blue"></i> Data Administrator</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-tag"></i> <span>Data Akademik</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=kelompokmapel"><i class="fa fa-circle-o text-green"></i> Data Kelompok Mapel</a></li>
                <li><a href="index.php?view=matapelajaran"><i class="fa fa-circle-o text-yellow"></i> Data Mata Pelajaran</a></li>
                <li><a href="index.php?view=jadwalpelajaran"><i class="fa fa-circle-o text-red"></i> Data Jadwal Pelajaran</a></li>
                <li><a href="index.php?view=bahantugas"><i class="fa fa-circle-o text-blue"></i>Data Bahan dan Tugas</a></li>
                <li><a href="index.php?view=kompetensidasar"><i class="fa fa-circle-o text-green"></i>Data Kompetensi Dasar</a></li>
                <!--<li><a href="index.php?view=bahantugas"><i class="fa fa-circle-o"></i>Data Bobot Raport *</a></li>-->
                <li><a href="index.php?view=penilaiandiri"><i class="fa fa-circle-o text-yellow"></i>Data Penilaian Diri</a></li>
                <!--<li><a href="index.php?view=bahantugas"><i class="fa fa-circle-o"></i>Data Set Rubrik *</a></li>-->
                <li><a href="index.php?view=predikat"><i class="fa fa-circle-o text-red"></i>Data Rentang Nilai</a></li>
                <li><a href="index.php?view=penilaianteman"><i class="fa fa-circle-o text-blue"></i>Data Penilaian Teman</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-send"></i> <span>SMS Gateway</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=sms"><i class="fa fa-circle-o text-green"></i> Kirim SMS</a></li>
                <li><a href="index.php?view=broadcast"><i class="fa fa-circle-o text-yellow"></i> Broadcast SMS</a></li>
                <li><a href="index.php?view=autoreply"><i class="fa fa-circle-o text-red"></i> Autoreply</a></li>
                <li><a href="index.php?view=smstoweb"><i class="fa fa-circle-o text-blue"></i> Inbox SMS2WEB</a></li>
                <li><a href="index.php?view=outboxautoreply"><i class="fa fa-circle-o text-green"></i> Outbox Autoreply</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-th-large"></i> <span>Data Absensi</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=absenguru"><i class="fa fa-circle-o text-green"></i> Absensi Guru</a></li>
                <li><a href="index.php?view=absensiswa"><i class="fa fa-circle-o text-yellow"></i> Absensi Siswa</a></li>
                <li><a href="index.php?view=rekapabsensiswa"><i class="fa fa-circle-o text-red"></i> Rekap Absensi Siswa</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-list"></i> <span>PPDB Online</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=psbmenu"><i class="fa fa-circle-o text-green"></i> Data Menu</a></li>
                <li><a href="index.php?view=psbhalaman"><i class="fa fa-circle-o text-yellow"></i> Data Halaman</a></li>
                <li><a href="index.php?view=psbaktivasi"><i class="fa fa-circle-o text-red"></i> Kode Aktivasi</a></li>
                <li><a href="index.php?view=psbsma"><i class="fa fa-circle-o text-blue"></i> Data Pendaftar SMA</a></li>
                <li><a href="index.php?view=psbsmk"><i class="fa fa-circle-o text-green"></i> Data Pendaftar SMK</a></li>
                <li><a href="index.php?view=psbsmp"><i class="fa fa-circle-o text-yellow"></i> Data Pendaftar SMP</a></li>
              </ul>
            </li>
            <li><a href="index.php?view=journalkbm"><i class="fa fa-tags"></i><span>Jurnal KBM</span></a></li>
            <li><a href="index.php?view=forum"><i class="fa fa-th-list"></i> <span>Forum Diskusi</span></a></li>
            <li><a href="index.php?view=soal"><i class="fa fa-users"></i><span>Quiz/Ujian Online</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-calendar"></i> <span>Laporan Nilai Siswa</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=raportuts"><i class="fa fa-circle-o text-green"></i> Data Nilai UTS</a></li>
                <li><a href="index.php?view=raportcetakuts"><i class="fa fa-circle-o text-yellow"></i> Cetak Raport UTS</a></li>

                <li><a href="index.php?view=capaianhasilbelajar"><i class="fa fa-circle-o text-red"></i> Data Capaian Belajar</a></li>
                <li><a href="index.php?view=extrakulikuler"><i class="fa fa-circle-o text-blue"></i> Data Extrakulikuler</a></li>
                <li><a href="index.php?view=prestasi"><i class="fa fa-circle-o text-green"></i> Data Prestasi</a></li>
                <li><a href="index.php?view=raport"><i class="fa fa-circle-o text-yellow"></i> Data Nilai Raport</a></li>
                <li><a href="index.php?view=raportcetak"><i class="fa fa-circle-o text-red"></i> Cetak Raport</a></li>
                <!--<li><a href="index.php?view=bukuinduk"><i class="fa fa-circle-o"></i> Cetak Buku Induk</a></li>-->
              </ul>
            </li>
            <li><a href="index.php?view=dokumentasi"><span></span></a></li>
          </ul>
        </section>