<?php

namespace App\Http\Controllers;
use App\models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Obtener todos los productos
        $estudiant = Student::all(); 

        // Pasar los datos a la vista index.blade.php  
        return view('students.index', ["estudiant" => $estudiant]);
    }


    public function create()
    {
        return view(view: 'students.create');
    }


    public function store(Request $request)
    {
    //añadimos nuevos alumnos y los validamos

    //validamos los datos que subimos a la bd
    $request->validate([
    'name'    => 'required|max:10',
    'email'     => 'required|email',
    'address' => 'required|min:10|max:100'
    ]);

    //ponemos usando la variable para añadirlo a la base de datos
    $estudiant = new Student;

    $estudiant->name    = $request->name;
    $estudiant->email     = $request->email;
    $estudiant->address = $request->address; //ojo: mismo nombre de columna que en BD
    $estudiant->save();

    //redirigimos una vez finalizado, al index
    return redirect()->route('students.index');

        
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
             
		$estudiant = Student::findOrFail($id);

        return view('students.show', ["estudiante" => $estudiant]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiant = Student::findOrFail($id);
        //devolvemos el formulario de editar
        return view(view: 'students.edit', data: ["estudiante" => $estudiant]);
    }

    public function update(Request $request, $id) {

    $request->validate([
    'name'    => 'required|max:30|min:1',
    'email'     => 'required|email',
    'address' => 'required|min:10|max:100'
    ]);

    
    $estudiant = Student::find($id);

    $estudiant->name    = $request->name;
    $estudiant->email     = $request->email;
    $estudiant->address = $request->address; //ojo: mismo nombre de columna que en BD
    $estudiant->save();

    return redirect()->route('students.index', $estudiant->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        //eliminar estudiant
        $estudiant = Student::find($id);
        $estudiant->delete();
        return redirect()->route('students.index');
    }
}
