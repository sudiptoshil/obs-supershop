
function editSetting(id) {
    let api=getUrl();
        $.ajax({
            url: api+'edit-setting/'+id,
            type: 'GET',
            data: {
                _token: "{{ csrf_token() }}",
            },
            // dataType: 'json',
            success: function (data) {
                $('#name_eng').val(data.name_eng);
                $('#name_local').val(data.name_local);
                $('#settingId').val(data.id);
                $('#note').val(data.note);
                console.log('result',data);
            },
        });
    }


function saveSetting(v){
    let name_eng = $('#nameeng').val();
    let name_local = $('#namelocal').val();
    let type_id = $('#type_id').val();
    let note = $('#notes').val();
    let api=getUrl();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: api+"save-setting",
        data: {name_eng:name_eng,name_local:name_local,type_id:type_id,note:note},
        success: function (data) {
            window.location.reload();

        }
    });
}


function updateSetting(v){
   let id=$("#settingId").val();
   let name_eng = $('#name_eng').val();
   let name_local = $('#name_local').val();
   let note = $('#note').val();
   let api=getUrl();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'PATCH',
        url: api+"update-setting/"+id,
        data: {name_eng:name_eng,name_local:name_local,note:note},
        success: function (data) {
            window.location.reload();
        }
    });
}
