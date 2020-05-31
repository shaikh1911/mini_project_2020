$(document).ready(function() {

    $.get("view1.php", function(data) {
        $("#table_content").html(data);
    });

    $('#link-add').hide();

    $('#show-add').click(function() {
        $('#link-add').slideDown(500);
        $('#show-add').hide();
    });

    $('#add').click(function() {
        var name = $('#name').val();
        var abbrivation = $('#abbrivation').val();
        var inventor = $('#inventor').val();
        var place = $('#place').val();

        var jname = $('#jname').val();
        var ifactor = $('#ifactor').val();
        var concept = $('#concept').val();
        var base = $('#base').val();

        var exploration = $('#exploration').val();
        var exploitation = $('#exploitation').val();
        var search = $('#search').val();
        var type = $('#type').val();

        var nop = $('#nop').val();
        var nors = $('#nors').val();
        var pop_select = $('#pop_select').val();
        var ntech = $('#ntech').val();

        var testproblems = $('#testproblems').val();
        var app_function = $('#app_function').val();
        var std_problem = $('#std_problem').val();
        var source = $('#source').val();

        var language = $('#language').val();
        var code_exp = $('#code_exp').val();
        var flow = $('#flow').val();
        var performance = $('#performance').val();

        var app = $('#app').val();
        var scope = $('#scope').val();
        var eap = $('#eap').val();
        var comparison = $('#comparison').val();
        





        $.ajax({
            url: "add.php",
            type: "POST",
            data: { name: name, abbrivation: abbrivation, inventor: inventor, place: place,
                    jname: jname, ifactor: ifactor, concept: concept, base: base,
                    exploration: exploration, exploitation: exploitation, search: search, type: type,
                    nop: nop, nors: nors, pop_select: pop_select, ntech: ntech,
                    testproblems: testproblems, app_function: app_function, std_problem: std_problem, source: source,
                    language: language, code_exp: code_exp, flow: flow, performance: performance,
                    app: app, scope: scope, eap: eap, comparison: comparison },
            success: function(data, status, xhr) {
                $('#name').val('');
                $('#abbrivation').val('');
                $('#inventor').val('');
                $('#place').val('');

                $('#jname').val('');
                $('#ifactor').val('');
                $('#concept').val('');
                $('#base').val('');

                $('#exploration').val('');
                $('#exploitation').val('');
                $('#search').val('');
                $('#type').val('');

                $('#nop').val('');
                $('#nors').val('');
                $('#pop_select').val('');
                $('#ntech').val('');

                $('#testproblems').val('');
                $('#app_function').val('');
                $('#std_problem').val('');
                $('#source').val('');

                $('#language').val('');
                $('#code_exp').val('');
                $('#flow').val('');
                $('#performance').val('');

                $('#app').val('');
                $('#scope').val('');
                $('#eap').val('');
                $('#comparison').val('');


                $.get("view1.php", function(html) {
                    $("#table_content").html(html);
                });
                $('#records_content').fadeOut(1100000).html(data);
            },
            error: function() {
                $('#records_content').fadeIn(300000).html('<div class="text-center">error here</div>');
            },
            beforeSend: function() {
                $('#records_content').fadeOut(5000).html('<div class="text-center">Loading...</div>');
            },
            complete: function() {
                $('#link-add').hide();
                $('#show-add').show(700);
            }
        });
    }); // add close

}); // document ready close
