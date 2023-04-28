<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
{
    $liste_students = students::orderBy("nom", "asc")->get();

    return view('students', compact("liste_students"));
}
}

?>