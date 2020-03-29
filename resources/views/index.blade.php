@extends('app')

@section('title','Student list')
@section('content')

<div class="container">
    <form action="InsertStudent" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col">
                <input name="school" type="text" placeholder="School name" class="form-control">
            </div>
            <div class="form-group col">
                <input name="student" type="text" placeholder="Student name" class="form-control">
            </div>
            <div class="form-group col">
                <select name="class" placeholder="Select class" class="form-control">
                    <option value="">Select class</option>
                    @for($i=1;$i < 6;$i++)
                    <option value="{{ $i }}">Class {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group col">
                <input name="roll" type="number" placeholder="Roll no" class="form-control">
            </div>
            <div class="form-group col">
                <input name="contact" type="number" placeholder="Contact no" class="form-control">
            </div>
            <div class="form-group col">
                <button class="btn btn-primary btn-sm mt-2" type="submit">Add</button>
            </div>
        </div>
    </form>
    @if(Session::has('msg-ok'))
    <div class="alert alert-success">
        {{ Session::get('msg-ok') }}
    </div>
    @elseif(Session::has('msg-notok'))
    <div class="alert alert-danger">
        {{ Session::get('msg-notok') }}
    </div>
    @endif
    <div class="my-3">
    <table id="data-table" class="table">
        <thead>
            <tr>
                <th>#id</th>
                <th>Schoold name</th>
                <th>Student name</th>
                <th>Class</th>
                <th>Roll</th>
                <th>Contact date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->school }}</td>
                <td>{{ $item->student }}</td>
                <td>{{ $item->class }}</td>
                <td>{{ $item->roll }}</td>
                <td>{{ $item->contact }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>

@endsection
