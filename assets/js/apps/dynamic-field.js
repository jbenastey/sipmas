$(document).ready(function(){
    var jumlahWarga = '';
    $('#add').click(function(){
        jumlahWarga = $('#jumlahWarga').val();
            console.log(jumlahWarga);
        for (var i = 0; i < jumlahWarga; i++) {
            $('#dynamic_field').append('' +
                '<tr id="row'+i+'">' +
                '<td><input type="text" placeholder="Nama" class="form-control" name="nama[]" value="" autocomplete="off"></td>'+
                '<td><input type="text" placeholder="Perkara" class="form-control" name="perkara[]" value="" autocomplete="off"></td>'+
                '<td><input type="text" placeholder="Hukuman" class="form-control" name="hukuman[]" value="" autocomplete="off"></td>'+
                '<td><input type="text" placeholder="Ket" class="form-control" name="ket[]" value="" autocomplete="off"></td>'+
                '</tr>');
        }
    });

    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });

});