@extends('layouts.table_content')

@section('table_style')
	<style type="text/css">
		.c_no{
			width: 5%;
			text-align: center;
			}
		.c_kecamatan {
			width: 15%;
			text-align: center;
		}
		.c_kabupaten {
			width: 15%;
			text-align: center;
		}
		.c_propinsi {
			width: 15%;
			text-align: center;
		}
		.c_aksi {
			width: 10%;
			text-align: center;
		}
	</style>

@stop

@section('page_name')
	Setting Wilayah / Kecamatan
@stop

@section('angular_controller_script')
	{{ HTML::script('assets/controllers/KonfigurasiCtrl.js') }}
@stop

@section('angular_controller')
	ng-controller="KonfigurasiSettingWilayahKecamatanCtrl"
@stop

@section('nav-menu-left')

	<form ng-submit="tambah_kecamatan()">
		<div class="table-form-content">
			<div class="form-item">
				<button ng-click="open_modal('modal_tambah', suhl.id)" class="row-item ya">Tambah Kecamatan</button>
			</div>
		</div>
	</form>
	
@stop

@section('nav-menu-right')
	<form>
		<div class="table-form-content">
			<div class="form-item">
				&nbsp
			</div>
			<div class="form-item wide">
				<input type="text" placeholder="Search Key">
			</div>
			<div class="form-item">
				<input type="submit" value="Search">
			</div>
		</div>
	</form>
@stop

@section('table_nav')	
	<table>
		<tr>
			<th class="c_no">No</th>
			<th class="c_kecamatan">Nama Kecamatan</th>
			<th class="c_kabupaten">Nama Kabupaten</th>
			<th class="c_propinsi">Nama Provinsi</th>
			<th class="c_aksi">Aksi</th>
		</tr>
	</table>
@stop

@section('table_content')

	<table role="table-fluid">
		<tr ng-repeat="swkc in setting_wilayah_kecamatan | orderBy:predicate:reverse | filter:search | limitTo:displayed">
			<td class="c_no">@{{ $index+1 }}</td>
			<td class="c_kecamatan">@{{ swkc.n_kecamatan }}</td>
			<td class="c_kabupaten">@{{ swkc.n_kabupaten}}</td>
			<td class="c_propinsi">@{{ swkc.n_propinsi }}</td>
			<td class="c_aksi">
				<span class="button-group group-1">
					<a href ng-click="open_modal('modal_edit', swkc.id)" class="edit">Edit</a>
				</span>
			</td>
		</tr>
		<tr>
			<td colspan="8" style="text-align:center">
				<button ng-click="loadMore()" class="btn-load-more">Load More</button>
			</td>
		</tr>
	</table>

@stop

@section('modal-content')
	@include('konfigurasi.modals.setting_wilayah_kecamatan_modal_edit', ['modal_name' => 'modal_edit']);
	@include('konfigurasi.modals.setting_wilayah_kecamatan_modal_tambah', ['modal_name' => 'modal_tambah']);
@stop