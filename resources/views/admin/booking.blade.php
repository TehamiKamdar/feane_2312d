@extends('layout.main')

@section('main-section')
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Persons?</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $b)
                <tr>
                    <td>{{$b->name}}</td>
                    <td>{{$b->email}}</td>
                    <td>{{$b->phone}}</td>
                    <td>{{$b->persons}}</td>
                    <td>{{\Carbon\Carbon::parse($b->booking_date)->format('d-M-Y')}}</td>
                    @if ($b->status == "pending")
                    <td>
                        <form action="{{route('booking-approve', $b->id)}}" method="post">
                            @csrf
                            <button class="btn btn-success">Approve</button>
                        </form>
                        <form action="{{route('booking-reject', $b->id)}}" method="post">
                            @csrf
                            <button class="btn btn-danger">Reject</button>
                        </form>
                    </td>
                    @elseif ($b->status == "approve")
                        <td>
                            <button type="button" class="btn btn-success">Approved</button>
                        </td>
                    @else
                        <td>
                            <button type="button" class="btn btn-danger">Rejected</button>
                        </td>

                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
