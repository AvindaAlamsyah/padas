(function ($) {
	"use strict";

	var datatableInit = function () {
		$("#datatable-siswa-aktif").dataTable({});
		$("#datatable-siswa-keluar").dataTable({});
	};

	$(function () {
		datatableInit();
	});
}.apply(this, [jQuery]));
