formatMoney: function(n, decPlaces, thouSeparator, decSeparator) {
//            var n = this,
            decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces;
            decSeparator = decSeparator == undefined ? "." : decSeparator;
            thouSeparator = thouSeparator == undefined ? "," : thouSeparator;
            sign = n < 0 ? "-" : "+";
            i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "";
            j = (j = i.length) > 3 ? j % 3 : 0;
            return sign + (j ? i.substr(0, j) + thouSeparator : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator) + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");
        },
		
// 
        $("#input_consumer_type").select2("val", this.consumer.get('consumer_type'));

            var dd_category_array = [];
            dd_category_array.push({id:0, text:"Gen"});
            dd_category_array.push({id:1, text:"SC"});
            dd_category_array.push({id:2, text:"BC"});
            $("#inputCategory").select2({ placeholder:"Category", data:dd_category_array, multiple:false,
                initSelection:function (element, callback) {
                    for (current in dd_category_array) {
                        if (dd_category_array[current]['id'] == element.val()) {
                            callback({id:dd_category_array[current]['id'], text:dd_category_array[current]['text']});
                            break;
                        }
                    }
                }
            });

	
        load_dds: function () {
            var consumer_type_array = [];
            consumer_type_array.push({id:0, text:"Residential"});
            consumer_type_array.push({id:1, text:"Commercial"});
            consumer_type_array.push({id:2, text:"Bulk"});
            $("#input_consumer_type").select2({ placeholder:"Consumer Type", data:consumer_type_array, multiple:false,
                initSelection:function (element, callback) {
                    for (current in consumer_type_array) {
                        if (consumer_type_array[current]['id'] == element.val()) {
                            callback({id:consumer_type_array[current]['id'], text:consumer_type_array[current]['text']});
                            break;
                        }
                    }
                }
            });
	