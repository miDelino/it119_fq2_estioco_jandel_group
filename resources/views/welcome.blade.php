@extends('students.layout')

@section('content')

    <div class="row mb-4">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Student Management System</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}">Create New Student</a>
        </div>
    </div>
    </div>

   
        <div class="alert alert-success">
            <p></p>
        </div>
    

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Date of Birth:</th>
                <th>Contact Numbers</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        
            <tr>
                <td>Jandel</td>
                <td>jandel@gmail.com</td>
                <td>Male</td>
                <td>Barangay Tanqui</td>
                <td>August 14 2002</td>
                <td>09983062238</td>
                <td>
                  

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        
        </tbody>
    </table>

@endsection




