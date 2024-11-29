@extends('dashboard')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Student</h3>
                <p class="text-subtitle text-muted">Data Mahasiswa Universitas Muhammadiyah Sukabumi</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Student</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title">jQuery Datatable</h5>
                <button class="btn btn-success" id="addStudentBtn">Add Student</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="studentTable">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>NIM</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Birth Date</th>
                                <th>Department</th>
                                <th>Program</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="studentForm">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="studentModalLabel">Add Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>



                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" class="form-control" id="department" name="department" required>
                        </div>
                        <div class="mb-3">
                            <label for="program" class="form-label">Program</label>
                            <input type="text" class="form-control" id="program" name="program" required>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            <img id="photoPreview" src="#" alt="Preview" style="display: none; width: 100px; margin-top: 10px;" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {

        let table = $('#studentTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('students.fetch') }}",
            columns: [
                { data: 'photo', name: 'photo' },
                { data: 'name', name: 'name' },
                { data: 'nim', name: 'nim' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'gender', name: 'gender' },
                { data: 'birth_date', name: 'birth_date' },
                { data: 'department', name: 'department' },
                { data: 'program', name: 'program' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });

        $('#addStudentBtn').on('click', function () {
    $('#studentForm')[0].reset(); // Reset form
    $('#id').val('');
    $('#studentModalLabel').text('Add Student');
    $('#submitBtn').show(); // Tampilkan tombol Save
    $('#photo').prop('disabled', false); // Aktifkan kembali input file
    $('#gender').prop('disabled', false); // Aktifkan kembali dropdown gender
    $('#photoPreview').attr('src', '#').hide(); // Reset preview gambar
    $('#studentModal').modal('show');
});




        $('#studentForm').on('submit', function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        url: $('#id').val() ? "{{ route('students.update', '') }}/" + $('#id').val() : "{{ route('students.store') }}",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            $('#studentModal').modal('hide');
            table.ajax.reload();

            // SweetAlert to show success message
            Swal.fire({
                title: 'Success!',
                text: response.message || 'Student added successfully!',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        },
        error: function (xhr) {
            // SweetAlert to show error message
            Swal.fire({
                title: 'Error!',
                text: xhr.responseJSON.message || 'Something went wrong!',
                icon: 'error',
                confirmButtonText: 'Try Again'
            });
        }
    });
});


$(document).on('click', '.delete', function () {
    var id = $(this).data('id');  // Ambil ID dari tombol delete yang diklik

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            // Lakukan proses delete (misalnya menghapus data via Ajax)
            $.ajax({
                url: "{{ route('students.destroy', ':id') }}".replace(':id', id),  // URL untuk menghapus data
                method: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),  // Kirimkan CSRF token
                },
                success: function (response) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your data has been deleted.",
                        icon: "success"
                    }).then(() => {
                        // Reload tabel setelah penghapusan data
                        table.ajax.reload();  // Menggunakan ajax.reload untuk memperbarui tabel tanpa me-refresh halaman
                    });
                },
                error: function () {
                    Swal.fire({
                        title: "Error!",
                        text: "There was an issue deleting the data.",
                        icon: "error"
                    });
                }
            });
        }
    });
});


    });

    $(document).on('click', '.edit', function () {
    var id = $(this).data('id');  // Mendapatkan ID dari data-id pada tombol atau link edit

    $.ajax({
        url: "{{ route('students.show', '') }}/" + id,  // Mengambil data mahasiswa berdasarkan ID
        method: 'GET',
        success: function (data) {
            // Reset form modal sebelum mengisinya
            $('#studentForm')[0].reset();  // Reset semua field di dalam form
            // Reset readonly dan disabled untuk semua elemen
            $('#name').prop('readonly', false);
            $('#nim').prop('readonly', false);
            $('#email').prop('readonly', false);
            $('#phone').prop('readonly', false);
            $('#gender').prop('disabled', false); // Pastikan gender bisa diedit
            $('#birth_date').prop('readonly', false);
            $('#address').prop('readonly', false);
            $('#department').prop('readonly', false);
            $('#program').prop('readonly', false);
            $('#photo').prop('disabled', false); // Foto bisa diubah

            // Mengisi form modal dengan data dari server
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#nim').val(data.nim);
            $('#email').val(data.email);
            $('#phone').val(data.phone);
            $('#gender').val(data.gender);  // Set nilai gender
            $('#birth_date').val(data.birth_date);
            $('#address').val(data.address);
            $('#department').val(data.department);
            $('#program').val(data.program);

            // Menampilkan foto jika ada
            if (data.photo) {
                $('#photoPreview').attr('src', '{{ asset('storage') }}/' + data.photo);  // Menampilkan foto yang sudah ada
                $('#photoPreview').show();  // Menampilkan elemen gambar
            } else {
                $('#photoPreview').hide();  // Menyembunyikan gambar jika tidak ada foto
            }

            // Menampilkan modal untuk edit data mahasiswa
            $('#studentModalLabel').text('Edit Student');
            $('#submitBtn').show();  // Tampilkan tombol Save
            $('#submitBtn').prop('disabled', false); // Pastikan tombol Save bisa diklik
            $('#studentModal').modal('show');
        },
        error: function () {
            alert('Failed to fetch student data.');
        }
    });
});




$(document).on('click', '.view', function () {
    var id = $(this).data('id');  // Ambil ID dari data-id yang ada di ikon view

    $.ajax({
        url: "{{ route('students.show', '') }}/" + id,  // Mengambil data mahasiswa berdasarkan ID
        method: 'GET',
        success: function (response) {
            // Mengisi form modal dengan data mahasiswa
            $('#name').val(response.name).prop('readonly', true);
            $('#nim').val(response.nim).prop('readonly', true);
            $('#email').val(response.email).prop('readonly', true);
            $('#phone').val(response.phone).prop('readonly', true);
            $('#gender').val(response.gender).prop('disabled', true);  // Dropdown gender di-disable
            $('#birth_date').val(response.birth_date).prop('readonly', true);
            $('#address').val(response.address).prop('readonly', true);
            $('#department').val(response.department).prop('readonly', true);
            $('#program').val(response.program).prop('readonly', true);

            // Menampilkan foto jika ada
            if (response.photo) {
                $('#photoPreview').attr('src', "{{ asset('storage/') }}/" + response.photo).show();
                $('#photo').prop('disabled', true);  // Disable input file saat view
            } else {
                $('#photoPreview').hide();
                $('#photo').prop('disabled', true);  // Disable input file meski kosong
            }

            // Menampilkan modal
            $('#studentModalLabel').text('View Student');  // Ubah judul modal menjadi 'View'
            $('#submitBtn').hide();  // Sembunyikan tombol Save
            $('#studentModal').modal('show');
        },
        error: function () {
            alert("Failed to fetch student data");
        }
    });
});



// Untuk menambah data
$(document).on('click', '#addStudentBtn', function () {
    $('#studentModalLabel').text('Add Student');  // Set label modal menjadi 'Add Student'
    $('#studentForm')[0].reset();  // Reset form
    $('#submitBtn').show();  // Tampilkan tombol Save
    $('#submitBtn').prop('disabled', false);  // Pastikan tombol Save aktif
    $('#studentModal').modal('show');
});






</script>
@endpush
