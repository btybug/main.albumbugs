$('document').ready(function () {
    function initdatepicker(){
        // $( ".datepickerRange" ).datepicker({
        //     dateFormat: 'dd-mm-yy',
        //     prevText:'',
        //     nextText:'',
        //     minDate: 0,
        //     maxDate: "+1M",
        //     showOn: "button",
        //     buttonImage: divadatepicker.image_url+"/calendar.jpeg",
        //     buttonImageOnly: true
        // });
        $( ".date-expression" ).datepicker({
            dateFormat: 'dd-mm-yy',
            prevText:'',
            nextText:'',
            changeMonth: true,
            changeYear: true
        });
    }

    initdatepicker();

    function Generator() {
    }

    Generator.prototype.rand = Math.floor(Math.random() * 26) + Date.now();
    Generator.prototype.getId = function () {
        return this.rand++;
    };
    var idGen = new Generator();

    var sendAjax = function sendAjax(at, type) {
        $.ajax({
            type: "post",
            url: "/admin/console/functions/get-by-operator",
            cache: false,
            datatype: "json",
            data: {
                table_name: $('.custom_table').val(),
                type: type,
                slug: $(at).data('slug'),
                new_slug: $(at).data('new-slug'),
                column: $(at).closest(".removable_parent").find(".column-field").val()
            },
            headers: {
                'X-CSRF-TOKEN': $("[name=_token]").val()
            },
            success: function (data) {
                if (!data.error) {
                    $(at).closest(".removable_parent").find(".expression-place").html(data.html);
                    initdatepicker();
                    if(type == 'in'){
                        $(".select2-box").select2();
                    }
                }
            }
        });
    }

    var operators = {
        equal: function (at) {
            sendAjax(at, 'equal');
        },
        not_equal: function (at) {
            this.equal(at);
        },
        more: function (at) {
            this.equal(at);
        },
        less: function (at) {
            this.equal(at);
        },
        more_and_equal: function (at) {
            this.equal(at);
        },
        less_and_equal: function (at) {
            this.equal(at);
        },
        contains: function (at) {
            this.equal(at);
        },
        not_contains: function (at) {
            this.equal(at);
        },
        in: function (at) {
            sendAjax(at, 'in');
        },
        not_in: function (at) {
            this.in(at);
        },
        between: function (at) {
            sendAjax(at, 'between');
        },
        not_between: function (at) {
            this.between(at);
        },
        between_date: function (at) {
            sendAjax(at, 'between_date');
        },
        not_between_date: function (at) {
            this.between_date(at);
        },
        single_date: function (at) {
            sendAjax(at, 'single_date');
        },
        is_null: function (at) {
            $(at).closest(".removable_parent").find(".expression-place").html('');
        },
        not_is_null: function (at) {
            this.is_null(at);
        }
    };

    $("body").on('change', '.select-operator', function () {
        var value = $(this).val();
        if ($.isFunction(operators[value])) {
            operators[value](this);
        }
    });

    var fn_events = {
        specific: function () {
            var table_name = $(".custom_table").val();
            var key = $('#fn-key').val();
            $.ajax({
                type: "post",
                url: "/admin/console/functions/specific",
                cache: false,
                datatype: "json",
                data: {
                    table_name: table_name,
                    key: key
                },
                headers: {
                    'X-CSRF-TOKEN': $("[name=_token]").val()
                },
                success: function (data) {
                    if (!data.error) {
                        $(".specific").html(data.html);
                        $(".specific-select").select2();
                        $(".specific").removeClass("hide");
                        $(".specific").addClass("show");
                    }
                }
            });
            this.revertFiltered();
        },
        filtered: function () {
            var key = $('#fn-key').val();
            var table_name = $(".custom_table").val();
            $(".append_here").html('');
            if (key) {
                $.ajax({
                    type: "post",
                    url: "/admin/console/functions/filtered",
                    cache: false,
                    datatype: "json",
                    data: {
                        table_name: table_name,
                        key: key
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("[name=_token]").val()
                    },
                    success: function (data) {
                        if (!data.error) {
                            $(".append_here").html(data.html);
                            $(".select2-box").select2();
                            initdatepicker();
                        }
                    }
                });
            }

            $(".filtered").removeClass("hide");
            $(".filtered").addClass("show");
            this.revertSpecific()
        },
        revertSpecific: function () {
            $(".specific").removeClass("show");
            $(".specific").addClass("hide");
        },
        revertFiltered: function () {
            $(".filtered").removeClass("show");
            $(".filtered").addClass("hide");
        },
        revert: function () {
            this.revertFiltered();
            this.revertSpecific();
            $(".table-div").empty();
            $(".code-here").empty();
        }
    };

    $("body").on("change", ".custom_row", function () {
        var table_name = $(".custom_table").val();
        if (table_name !== '') {
            var row = $(this).val();
            if ($.isFunction(fn_events[row])) {
                fn_events[row]();
            } else {
                fn_events.revert();
            }
        }
    });

    $("body").on("change", ".custom_table", function () {
        var table_name = $(this).val();
        $(".table-div").empty();
        $(".code-here").empty();
        if (table_name !== '') {
            var row = $(".custom_row").val();
            if ($.isFunction(fn_events[row])) {
                fn_events[row]();
            } else {
                fn_events.revert();
            }
        } else {
            fn_events.revert();
            $(".append_here").html('');
        }
    });

    $("body").delegate(".add_new_field", "click", function () {
        var table_name = $(".custom_table").val();
        if (table_name) {
            $.ajax({
                type: "post",
                url: "/admin/console/functions/options",
                cache: false,
                datatype: "json",
                data: {
                    table_name: table_name,
                    slug: idGen.getId(),
                    new_slug: idGen.getId()
                },
                headers: {
                    'X-CSRF-TOKEN': $("[name=_token]").val()
                },
                success: function (data) {
                    if (!data.error) {
                        $(".append_here").append(data.html);
                    }
                }
            });
        }
    });

    $("body").delegate(".add_new_inside", "click", function () {
        var table_name = $(".custom_table").val();
        var slug = $(this).data('slug');
        var appendBox = $(this).parents().eq(1).find('.inside-conditions');
        if (table_name) {
            $.ajax({
                type: "post",
                url: "/admin/console/functions/inside",
                cache: false,
                datatype: "json",
                data: {
                    table_name: table_name,
                    slug: slug,
                    new_slug: idGen.getId()
                },
                headers: {
                    'X-CSRF-TOKEN': $("[name=_token]").val()
                },
                success: function (data) {
                    if (!data.error) {
                        appendBox.append(data.html);
                    }
                }
            });
        }
    });

    $("body").delegate(".remove_this_field", "click", function () {
        return $(this).closest(".removable_parent").remove();
    });
    $("body").on("click", ".custom_general_remove", function () {
        return $(this).closest(".custom_removable_general_parent").remove();
    });

    var row_value = $('.custom_row').val();
    if ($.isFunction(fn_events[row_value])) {
        fn_events[row_value]();
    }

    $('body').on('click', '.get-result', function () {
        var data = $("form").serialize();
        $.ajax({
            type: "post",
            url: "/admin/console/functions/get-result",
            cache: false,
            datatype: "json",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $("[name=_token]").val()
            },
            success: function (data) {
                if (!data.error) {
                    $(".code-here").html(data.query);
                    $(".table-div").empty();

                    var tableHeaders;
                    $.each(data.columns, function (i, val) {
                        tableHeaders += "<th>" + val + "</th>";
                    });
                    $(".table-div").append('<table id="result-table" class="display table table-striped table-bordered" cellspacing="0" width="100%"><thead><tr>' + tableHeaders + '</tr></thead></table>');
                    //$("#tableDiv").find("table thead tr").append(tableHeaders);

                    $('#result-table').dataTable({
                        columns: data.columns,
                        data: data.data
                    });
                } else {
                    $(".code-here").html(data.query);
                    $(".table-div").empty();
                }
            }
        });
    });


});