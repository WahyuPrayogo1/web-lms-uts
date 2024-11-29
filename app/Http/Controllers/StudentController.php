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
        return view('Backend.page.student.index');
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::all();
            return DataTables::of($data)
                ->addColumn('action', function($row) {
                    // Membungkus ikon dalam sebuah div dengan kelas 'action-icons'
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
        // Validasi inputan
        $data = $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'address' => 'required',
            'department' => 'required',
            'program' => 'required',
            'photo' => 'nullable|image',  // Validasi foto, boleh kosong dan harus berupa gambar
        ]);

        // Cek apakah ada file foto yang diupload
        if ($request->hasFile('photo')) {
            // Jika ada, simpan foto dan ambil path-nya
            $data['photo'] = $request->file('photo')->store('students', 'public');
        }

        // Simpan data student ke database
        Student::create($data);

        // Response setelah data berhasil disimpan
        return response()->json(['message' => 'Student created successfully.']);
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

        $data = $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'address' => 'required',
            'department' => 'required',
            'program' => 'required',
            'photo' => 'nullable|image',
        ]);

        if ($request->hasFile('photo')) {
            if ($student->photo) {
                unlink(storage_path('app/public/' . $student->photo));
            }
            $data['photo'] = $request->file('photo')->store('students', 'public');
        }

        $student->update($data);

        return response()->json(['message' => 'Student updated successfully.']);
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
