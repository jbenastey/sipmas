$(document).ready(function () {

    var local = window.location.origin + '/sipmas/spt/';
    $('#feedback').delay(5000).fadeOut('slow');

    $('#nama').change(function () {
        var id = $(this).val();
        var getUrl = local + 'ajaxNama/' + id;
        var nip = '';
        var jabatan = '';
        $.ajax({
            url: getUrl,
            type: 'ajax',
            dataType: 'json',
            data: {param1: 'value1'},
            success: function (response) {
                if (response != null) {
                    nip = ''+
                        '<input type="text" class="form-control" name="nip" value="' + response.user_nip + '" readonly>';
                    jabatan = '' +
                        '<input type="text" class="form-control" name="jabatan" value="' + response.user_jabatan + '" readonly>';
                    $('#nip').html(nip);
                    $('#jabatan').html(jabatan);
                }
                else {
                    nip = ''+
                        '<input type="text" class="form-control" placeholder="NIP" name="nip" value="" readonly>';
                    jabatan = '' +
                        '<input type="text" class="form-control" placeholder="Jabatan" name="jabatan" value="" readonly>';
                    $('#nip').html(nip);
                    $('#jabatan').html(jabatan);
                }
            },
            error: function (response) {
                console.log(response.status);
            }
        });
    })
});