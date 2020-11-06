{{--
@foreach ($uploads as $upload)
	<p> Task id: {{$upload->task_id}}</p>
	<p> CA_ID: {{$upload->ca_id}}</p>
	<p> Points given (Boolean) : {{$upload->points_given}}</p>
	<a href="{{route('verifyUpload',['user'=>$upload->ca_id,'id'=>$upload->id])}}"><button class="btn btn-primary">Verify</button></a>
@endforeach --}}
@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($uploads as $upload)
        <div class="card col-md-2">
            <img class="card-img-top" src="{{ asset('images/'.$upload->url) }}" width="100%" alt="Techfest CA Uploaded Image">
            <div class="card-body">
                <h5 class="card-title">Task {{ $upload->task_id }}</h5>
                <p class="card-text">Uploaded by CA #{{$upload->ca_id }}</p>
                <!-- Button trigger modal -->
                @if ($upload->verified)
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target={{'#ModalforUpload-'.$upload->id}}>
                        Reject
                    </button>
                @else
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target={{'#ModalforUpload-'.$upload->id}}>
                        Verify
                    </button>
                @endif


                <!-- Modal -->
                <div class="modal fade" id={{'ModalforUpload-'.$upload->id}} tabindex="-1" role="dialog" aria-labelledby={{'ModalforUpload-'.$upload->id.'CenterTitle'}} aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id={{'ModalforUpload-'.$upload->id.'LongTitle'}}>Uploaded by CA #{{ $upload->ca_id }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('images/'.$upload->url) }}" width="100%" alt="Techfest CA Uploaded Image">
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-primary" href="{{ route('verifyUpload', ['user'=>$upload->ca_id, 'id'=>$upload->id]) }}" role="button">Verify</a>
                                <a class="btn btn-danger" href="{{ route('rejectUpload', ['user'=>$upload->ca_id, 'id'=>$upload->id]) }}" role="button">Reject</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{$uploads->links()}}
@endsection
