$(function() {
    $('.add-modal').on('click', function() {
        $('#titleModal').html('Add Student');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/student/add');
        $('#nama_siswa').val('');
        $('#kelas').val('');
        $('#jurusan').val('');
        $('#tanggal_lahir').val('');
        $('#tempat_lahir').val('');
        $('#agama').val('');
        $('#alamat').val('');
        $('#id_siswa').val('');
    });
    $('.edit-modal').on('click', function() {
        $('#titleModal').html('Edit Student');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/student/edit');
        const dataId = $(this).data('id');
        $.ajax({
            // kirim data ke url ini
            url: 'http://localhost/phpmvc/public/student/getedit',
            // isi data
            data: {id : dataId},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama_siswa').val(data.nama_siswa);
                $('#kelas').val(data.kelas);
                $('#jurusan').val(data.jurusan);
                $('#tanggal_lahir').val(data.tanggal_lahir);
                $('#tempat_lahir').val(data.tempat_lahir);
                $('#agama').val(data.agama);
                $('#alamat').val(data.alamat);
                $('#id_siswa').val(data.id_siswa);
            }
        });
    });
});

// Alpine JS
document.addEventListener('alpine:init', () => {
    Alpine.store('navi', {
        link: ['About', 'Bio'],
        text: 'Student',
    });
});