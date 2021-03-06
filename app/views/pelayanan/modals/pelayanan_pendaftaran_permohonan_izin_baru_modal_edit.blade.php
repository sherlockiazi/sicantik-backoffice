<form method="post" target="target_edit" action="{{ URL::to('pelayanan/pendaftaran/permohonan_izin_baru/edit') }}">
    <div class="modal" ng-show={{ $modal_name }}>

        <input type="hidden" value="@{{ permohonan_izin_baru_edit_data.permohonan_id }}" name="tmpermohonan_id">
        <input type="hidden" value="@{{ permohonan_izin_baru_edit_data.pemohon_id }}" name="tmpemohon_id">
        <input type="hidden" value="@{{ permohonan_izin_baru_edit_data.perusahaan_id }}" name="tmperusahaan_id">

        <div class="modal-container large">
            <div class="modal-header update">
                <h2>Data Awal</h2><a class="button-close" href ng-click="close_modal('modal_edit')">X</a>
            </div>
            <div class="modal-body">
                <div class="body-summary">
                    
                    <div class="summary-title">
                        <h3>Data Perizinan</h3>
                    </div>
                    <div class="body-summary-left">
                        <div class="summary-item">
                            <div class="summary-item-label">
                                Nama Izin
                            </div>
                            <div class="summary-item-value">
                                @{{ permohonan_izin_baru_edit_data.n_perizinan }}
                            </div>
                        </div>
                        <div class="summary-item">
                            <div class="summary-item-label">
                                Kelompok Izin
                            </div>
                            <div class="summary-item-value">
                                @{{ permohonan_izin_baru_edit_data.n_kelompok }}
                            </div>
                        </div>
                    </div>
                    <div class="body-summary-right">
                        <div class="summary-item">
                            <div class="summary-item-label">
                                Jenis Permohonan
                            </div>
                            <div class="summary-item-value">
                                @{{ permohonan_izin_baru_edit_data.n_permohonan }}
                            </div>
                        </div>
                        <div class="summary-item">
                            <div class="summary-item-label">
                                No Pendaftaran
                            </div>
                            <div class="summary-item-value">
                                @{{ permohonan_izin_baru_edit_data.pendaftaran_id }}
                            </div>
                        </div>
                    </div>


                </div>

                <div class="body-tab-wrapper">
                    <div class="tab-nav">
                        <ul class="tab-nav-wrapper">
                            <li class="tab-nav-item enable" id="tab_nav_edit_data_pemohon" ng-click="show_tab('tab.izin_baru_tab_data_pemohon', 'tab_nav_edit_data_pemohon')">Data Pemohon</li>
                            <li class="tab-nav-item" id="tab_nav_edit_data_perusahaan" ng-click="show_tab('tab.izin_baru_tab_data_perusahaan', 'tab_nav_edit_data_perusahaan')">Data Perusahaan</li>
                            <li class="tab-nav-item" id="tab_nav_edit_persyaratan" ng-click="show_tab('tab.izin_baru_tab_persyaratan', 'tab_nav_edit_persyaratan')">Persyaratan</li>
                        <ul>
                    </div>
                    <div class="tab-content-wrapper">

                        <div class="tab-content" ng-show="tab.izin_baru_tab_data_pemohon">

                            <div class="tab-content-left">
                                <div class="tab-content-form">
                                    <div class="content-form-label">Sumber Identitas</div>
                                    <div class="content-form-input"><input type="text" name="sumber_identitas" value="@{{ permohonan_izin_baru_edit_data.sumber_identitas }}" />
                                    <!-- <select name="sumber_identitas" >
                                        <option ng-repeat="a in items"  ng-if="a.selected == true" selected ng-value="a.source" >@{{ permohonan_izin_baru_edit_data.sumber_identitas }}</option>
                                        <option ng-repeat="a in items"  ng-if="a.selected == false" ng-value="a.source" >@{{ a.Title }}</option>
                                    </select> -->
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">ID</div>
                                    <div class="content-form-input"><input type="text" name="no_referensi" value="@{{ permohonan_izin_baru_edit_data.no_referensi }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Nama Pemohon</div>
                                    <div class="content-form-input"><input type="text" name="n_pemohon" value="@{{ permohonan_izin_baru_edit_data.n_pemohon }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">No Telp / HP</div>
                                    <div class="content-form-input"><input type="text" name="telp_pemohon" value="@{{ permohonan_izin_baru_edit_data.telp_pemohon }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Tanggal Terima Berkas</div>
                                    <div class="content-form-input"><input type="text" name="d_terima_berkas" data-provide="datepicker" value="@{{ permohonan_izin_baru_edit_data.d_terima_berkas }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Tanggal Peninjauan</div>
                                    <div class="content-form-input"><input type="text" name="tanggal_peninjauan" data-provide="datepicker" value="@{{ permohonan_izin_baru_edit_data.tanggal_peninjauan }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Lokasi Izin</div>
                                    <div class="content-form-input">
                                        <textarea rows="4" name="a_izin">@{{ permohonan_izin_baru_edit_data.a_izin }}</textarea>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Keterangan</div>
                                    <div class="content-form-input">
                                        <textarea rows="4" name="keterangan">@{{ permohonan_izin_baru_edit_data.keterangan }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content-right">
                                <div class="tab-content-form">
                                    <div class="content-form-label">Propinsi</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.propinsi_pemohon }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="propinsi_pemohon" ng-model="pemohon_propinsi_id" ng-options="prop.n_propinsi for prop in pemohon_propinsi_data track by prop.id">
                                            <option  value="" ng-model="permohonan_izin_baru_edit_data.propinsi_pemohon">@{{ permohonan_izin_baru_edit_data.n_propinsi_pemohon }}</option>
                                            <!-- <option ng-repeat="prop in prop_pemohon_data" ng-model="prop.pemohon_propinsi_id" ng-if="prop.selected == true" ng-value="prop.id" selected>@{{ prop.n_propinsi_pemohon }}</option>
                                            <option ng-repeat="oprop_pemohon in opsi_prop_pemohon" ng-model="oprop_pemohon.propinsi_pemohon" ng-if="oprop_pemohon.selected == false" ng-value="oprop_pemohon.id" >@{{ oprop_pemohon.propinsi_pemohon }}</option> -->
                                            <!-- <option ng-repeat="oprop_pemohon in opsi_prop_pemohon"  ng-if="oprop_pemohon.selected == false" ng-value="oprop_pemohon.id">@{{ permohonan_izin_baru_edit_data.n_propinsi_pemohon }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Kabupaten</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.kabupaten_pemohon }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="kabupaten_pemohon" ng-model="pemohon_kabupaten_id" ng-options="kab.n_kabupaten for kab in pemohon_kabupaten_data track by kab.id">
                                            <option value="" ng-model="permohonan_izin_baru_edit_data.kabupaten_pemohon">@{{ permohonan_izin_baru_edit_data.n_kabupaten_pemohon }}</option>
                                            <!-- <option ng-repeat="okab_pemohon in opsi_kab_pemohon"  ng-if="okab_pemohon.selected == false" ng-value="okab_pemohon.id" >@{{ okab_pemohon.n_kabupaten }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Kecamatan</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.kecamatan_pemohon }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="kecamatan_pemohon" ng-model="pemohon_kecamatan_id" ng-options="kec.n_kecamatan for kec in pemohon_kecamatan_data track by kec.id">
                                            <option value="" ng-model="permohonan_izin_baru_edit_data.kecamatan_pemohon">@{{ permohonan_izin_baru_edit_data.n_kecamatan_pemohon }}</option>
                                            <!-- <option ng-repeat="okec_pemohon in opsi_kec_pemohon"  ng-if="okec_pemohon.selected == false" ng-value="okec_pemohon.id" >@{{ okec_pemohon.n_kecamatan }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Kelurahan</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.kelurahan_pemohon }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="kelurahan_pemohon" ng-model="pemohon_kelurahan_id" ng-options="kel.n_kelurahan for kel in pemohon_kelurahan_data track by kel.id">
                                            <option value="" ng-model="permohonan_izin_baru_edit_data.kelurahan_pemohon">@{{ permohonan_izin_baru_edit_data.n_kelurahan_pemohon }}</option>
                                            <!-- <option ng-repeat="okel_pemohon in opsi_kel_pemohon"  ng-if="okel_pemohon.selected == false" ng-value="okel_pemohon.id" >@{{ okel_pemohon.n_kelurahan }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Alamat Pemohon</div>
                                    <div class="content-form-input">
                                        <textarea rows="4" name="a_pemohon">@{{ permohonan_izin_baru_edit_data.a_pemohon }}</textarea>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Alamat Pemohon di Luar Negeri (Isikan jika ada)</div>
                                    <div class="content-form-input">
                                        <textarea rows="4" name="a_pemohon_luar">@{{ permohonan_izin_baru_edit_data.a_pemohon_luar }}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-content" ng-show="tab.izin_baru_tab_data_perusahaan">

                            <div class="tab-content-left">

                                <div class="tab-content-form">
                                    <div class="content-form-label">NPWP</div>
                                    <div class="content-form-input"><input type="text" name="npwp" value="@{{ permohonan_izin_baru_edit_data.npwp }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Nama Perusahaan</div>
                                    <div class="content-form-input"><input type="text" name="nama_perusahaan" value="@{{ permohonan_izin_baru_edit_data.nama_perusahaan }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Telp Perusahaan</div>
                                    <div class="content-form-input"><input type="text" name="telp_perusahaan" value="@{{ permohonan_izin_baru_edit_data.telp_perusahaan }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Fax</div>
                                    <div class="content-form-input"><input type="text" name="fax_perusahaan" value="@{{ permohonan_izin_baru_edit_data.fax_perusahaan }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Email</div>
                                    <div class="content-form-input"><input type="text" name="email_perusahaan" value="@{{ permohonan_izin_baru_edit_data.email_perusahaan }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Alamat Perusahaan</div>
                                    <div class="content-form-input">
                                        <textarea rows="4" name="a_perusahaan">@{{ permohonan_izin_baru_edit_data.a_perusahaan }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content-right">
                                <div class="tab-content-form">
                                    <div class="content-form-label">Propinsi</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.propinsi_perusahaan }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="propinsi_perusahaan" ng-model="perusahaan_propinsi_id" ng-options="prop.n_propinsi for prop in perusahaan_propinsi_data track by prop.id">
                                            <option  value="" ng-model="permohonan_izin_baru_edit_data.propinsi_perusahaan">@{{ permohonan_izin_baru_edit_data.n_propinsi_perusahaan }}</option>
                                            <!-- <option ng-repeat="oprop_perusahaan in opsi_prop_perusahaan"  ng-if="oprop_perusahaan.selected == false" ng-value="oprop_perusahaan.id" >@{{ oprop_perusahaan.n_propinsi }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Kabupaten</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.kabupaten_perusahaan }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="kabupaten_perusahaan" ng-model="perusahaan_kabupaten_id" ng-options="kab.n_kabupaten for kab in perusahaan_kabupaten_data track by kab.id">
                                            <option value="" ng-model="permohonan_izin_baru_edit_data.kabupaten_perusahaan">@{{ permohonan_izin_baru_edit_data.n_kabupaten_perusahaan }}</option>
                                            <!-- <option ng-repeat="okab_perusahaan in opsi_kab_perusahaan"  ng-if="okab_perusahaan.selected == false" ng-value="okab_perusahaan.id" >@{{ okab_perusahaan.n_kabupaten }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Kecamatan</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.kecamatan_perusahaan }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="kecamatan_perusahaan" ng-model="perusahaan_kecamatan_id" ng-options="kec.n_kecamatan for kec in perusahaan_kecamatan_data track by kec.id">
                                            <option value="" ng-model="permohonan_izin_baru_edit_data.kecamatan_perusahaan">@{{ permohonan_izin_baru_edit_data.n_kecamatan_perusahaan }}</option>
                                            <!-- <option ng-repeat="okec_perusahaan in opsi_kec_perusahaan"  ng-if="okec_perusahaan.selected == false" ng-value="okec_perusahaan.id" >@{{ okec_perusahaan.n_kecamatan }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Kelurahan</div>
                                    <!-- <div class="content-form-input">
                                        @{{ permohonan_izin_baru_edit_data.kelurahan_perusahaan }}
                                    </div> -->
                                    <div class="content-form-input">
                                        <select name="kelurahan_perusahaan" ng-model="pemohon_kelurahan_id" ng-options="kel.n_kelurahan for kel in perusahaan_kelurahan_data track by kel.id">
                                            <option value="" ng-model="permohonan_izin_baru_edit_data.kelurahan_perusahaan">@{{ permohonan_izin_baru_edit_data.n_kelurahan_perusahaan }}</option>
                                            <!-- <option ng-repeat="okel_perusahaan in opsi_kel_perusahaan"  ng-if="okel_perusahaan.selected == false" ng-value="okel_perusahaan.id" >@{{ okel_perusahaan.n_kelurahan }}</option> -->
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="tab-content-form">
                                    <div class="content-form-label">Jenis Kegiatan</div>
                                    <div class="content-form-input"><input type="text" name="n_kegiatan" value="@{{ permohonan_izin_baru_edit_data.n_kegiatan }}" /></div>
                                </div>
                                <div class="tab-content-form">
                                    <div class="content-form-label">Jenis Investasi</div>
                                    <div class="content-form-input"><input type="text" name="n_investasi" value="@{{ permohonan_izin_baru_edit_data.n_investasi }}" /></div>
                                </div> -->
                                
                            </div>

                        </div>

                        <div class="tab-content" ng-show="tab.izin_baru_tab_persyaratan">
                            <div class="tab-content-table">

                                <style>
                                    .c_modal_no {
                                        width:10%;
                                        text-align:center;
                                    }
                                    .c_modal_syarat {
                                        width:50%;
                                    }
                                    .c_modal_terpenuhi {
                                        width:20%;
                                        text-align:center;
                                    }
                                    .c_modal_status {
                                        width:25%;
                                        text-align:center;

                                        font-family:roboto_condensed_regular;
                                    }
                                </style>

                                <table>
                                    <tr class="table-legend">
                                        <th class="c_modal_no" >No</th>
                                        <th class="c_modal_syarat" >Syarat</th>
                                        <th class="c_modal_terpenuhi" >Terpenuhi</th>
                                        <th class="c_modal_status" >Status</th>
                                    </tr>

                                    <tr ng-repeat="syarat in permohonan_izin_baru_edit_data.syarat">
                                        <td class="c_modal_no" >@{{$index+1}}</td>
                                        <td class="c_modal_syarat" >@{{ syarat.persyaratan }}</td>
                                        <td class="c_modal_terpenuhi" >
                                            <input type="checkbox" name="syarat_perizinan_id[]" ng-value="@{{ syarat.id_persyaratan }}" ng-model="syarat.terpenuhi">
                                        </td>
                                        <td class="c_modal_status" >@{{ syarat.status }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- <ul ng-repeat="syarat in entry_data_perizinan_data_awal_data.syarat">
                    <li>@{{ syarat.persyaratan }} , @{{ syarat.status }}, @{{ syarat.terpenuhi }}, urutan @{{ syarat.urut }}</li>
                </ul> -->

            </div>
            <div class="modal-footer">
                <div class="modal-footer-left">
                    &nbsp;
                </div>
                <div class="modal-footer-right">
                    <input type="submit" value="Simpan" class="button-green" ng-click="modal_edit_submit()"/>
                    <a class="btn button-red" ng-click="close_modal('modal_edit')">Batal</a>
                 
                    
                </div>
            </div>
            <iframe src="#" id="target_edit" name="target_edit" style="width:0; height:0; visibility:hidden; position:relative; background:#fff;"></iframe>
        </div>
    </div>
</form>