<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Insertar 5 registros en la tabla students y 10 registros en la tabla teachers
        /* $students = DB::table('students')
                ->insert([
                    ['name' => 'Alambrito', 'career' => 'Informatico','age'=>25],
                    ['name' => 'Luis', 'career' => 'Arquitecto','age'=>30],
                    ['name' => 'Lucia', 'career' => 'Medico','age'=>31],
                    ['name' => 'Ruddy', 'career' => 'Informatico','age'=>31],
                    ['name' => 'Valentina', 'career' => 'Medico','age'=>36],
                ]); */
        
        /* $teachers = DB::table('teachers')
        ->insert([
            ['name' => 'Alambrito', 'nro_courses'=> 1,'profession' => 'Informatico','nro_courses'=> 1],
            ['name' => 'Luis', 'profession' => 'Arquitecto','nro_courses'=> 0],
            ['name' => 'Lucia', 'profession' => 'Medico','nro_courses'=> 2],
            ['name' => 'Ruddy', 'profession' => 'Informatico','nro_courses'=> 3],
            ['name' => 'Valentina', 'profession' => 'Medico','nro_courses'=> 2],
            ['name' => 'Camila', 'profession' => 'Informatico','nro_courses'=> 5],
            ['name' => 'Luisa', 'profession' => 'Arquitecto','nro_courses'=> 1],
            ['name' => 'Diego', 'profession' => 'Medico','nro_courses'=> 0],
            ['name' => 'Julio', 'profession' => 'Informatico','nro_courses'=> 1],
            ['name' => 'Alizon', 'profession' => 'Medico','nro_courses'=> 3],
        ]); */
        //Listar todos los registros de la tabla students
        /* $students = DB::table('students')->get();
        echo $students;  */
        //Listar el primer registro de la tabla teachers
        /* $teacher = DB::table('teachers')->first();
        print_r($teacher); */
        //Listar todos los valores de la columna career de la tabla students
        /* $career = DB::table('students')->pluck('career');
        echo $career; */
        //Listar todos los registros de la tabla students donde su edad(age) sea mayor a 20
        /* $studentsMay = DB::table('students')->where('age', '>', 20)->get();
        echo $studentsMay; */
        //Listar el registro de la tabla teachers que tenga la mayor cantidad de cursos(nro_courses)
        $teacherMayCurs = DB::table('teachers')->max('nro_courses');
        echo $teacherMayCurs;
        //Eliminar todos los registros de la tabla students
        /* $deletedStudents = DB::table('students')->delete(); */
        //Eliminar el registro con id=5 de la tabla teachers
        /* $deletedTeacher = DB::table('teachers')->where('id', '0', 5)->delete(); */

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
