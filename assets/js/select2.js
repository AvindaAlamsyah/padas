var groupBy = function (xs, key) {
	return xs.reduce(function (rv, x) {
		(rv[x[key]] = rv[x[key]] || []).push(x);
		return rv;
	}, {});
};

function get_desa(id_kec, selector, url) {
	selector.select2({
		ajax: {
			url: url,
			dataType: "json",
			delay: 500,
			data: function (params) {
				return {
					kel: params.term,
					id_kec: id_kec,
				};
			},
			processResults: function (response) {
				return {
					results: response,
				};
			},
			cache: true,
		},
		minimumInputLength: 1,
		placeholder: "Pilih kelurahan/desa",
	});
}

function get_kec(selector, url) {
	selector.select2({
		ajax: {
			url: url,
			dataType: "json",
			delay: 500,
			data: function (params) {
				return {
					kec: params.term,
				};
			},
			processResults: function (data) {
				return {
					results: $.map(groupBy(data, "kab"), function (item, key) {
						var children = [];
						for (var k in item) {
							var childItem = item[k];
							childItem.text = item[k].kec;
							children.push(childItem);
						}
						return {
							text: key,
							children: children,
						};
					}),
				};
			},
			cache: true,
		},
		minimumInputLength: 2,
		placeholder: "Pilih Kecamatan",
	});
}

function select2_get(selector, url, placeholder) {
	$(selector).select2({
		ajax: {
			url: url,
			dataType: "json",
			delay: 500,
			processResults: function (response) {
				return {
					results: response,
				};
			},
			cache: true,
		},
		minimumResultsForSearch: Infinity,
		placeholder: placeholder,
	});
}
