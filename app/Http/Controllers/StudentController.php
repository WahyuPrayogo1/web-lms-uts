<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('Backend.page.student.index', compact('students'));
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::all();
            return DataTables::of($data)
                ->addColumn('action', function($row) {

                    return '<div class="action-icons">' .
                        '<i class="bi bi-eye text-info view" style="cursor: pointer;" data-id="'.$row->id.'" title="View Data"></i>' .
                        '<i class="bi bi-pencil text-primary edit" style="cursor: pointer;" data-id="'.$row->id.'" title="Edit"></i>' .
                        '<i class="bi bi-trash text-danger delete" style="cursor: pointer;" data-id="'.$row->id.'" title="Delete"></i>' .
                        '</div>';
                })
                ->addColumn('photo', function($row) {
                    if ($row->photo) {
                        return '<img src="'.asset('storage/'.$row->photo).'" width="50" height="50" style="border-radius: 5px;">';
                    }
                    return '<span>No Photo</span>';
                })
                ->rawColumns(['action', 'photo'])
                ->make(true);
        }
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'nim' => 'required|unique:students,nim',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'address' => 'required',
            'department' => 'required',
            'program' => 'required',
            'photo' => 'nullable|image',
        ], [
            'nim.unique' => 'NIM sudah terdaftar, silakan gunakan NIM lain.',
            'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
            'email.email' => 'Format email yang Anda masukkan tidak valid.',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('students', 'public');
        }

        // Simpan data mahasiswa baru
        $student = Student::create($data);

        // Mengirim data mahasiswa baru dalam respons JSON
        return response()->json([
            'message' => 'Mahasiswa Berhasil di Tambahkan.',
            'student' => $student,
            'photoUrl' => asset('storage/' . $student->photo)
        ]);
    }




    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        // Validasi data, dengan pengecualian untuk nim dan email yang sudah ada
        $data = $request->validate([
            'name' => 'required',
            'nim' => 'required|unique:students,nim,' . $student->id,  // Pengecualian untuk nim yang sedang di-update
            'email' => 'required|email|unique:students,email,' . $student->id,  // Pengecualian untuk email yang sedang di-update
            'phone' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'address' => 'required',
            'department' => 'required',
            'program' => 'required',
            'photo' => 'nullable|image',  // Validasi foto
        ]);

        // Jika ada foto yang diupload, hapus foto lama dan simpan foto baru
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($student->photo) {
                unlink(storage_path('app/public/' . $student->photo));
            }
            // Simpan foto baru
            $data['photo'] = $request->file('photo')->store('students', 'public');
        }

        // Update data student
        $student->update($data);

        return response()->json(['message' => 'Mahasiswa Berhasil di Update.']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        // Hapus file foto jika ada
        if ($student->photo) {
            $filePath = storage_path('app/public/' . $student->photo);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $student->delete();

        return response()->json(['message' => 'Student deleted successfully.']);
    }

}
