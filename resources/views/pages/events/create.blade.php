<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Event</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('events.store')}}" method="post" data-toggle="validator">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="event_name">Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Event Name" id="event_name" value="{{old('event_name')}}" name="event_name" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('event_name'))
                                            <div class="error">{{ $errors->first('event_name') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="event_description">Description *</label>
                                        <input type="text" class="form-control" placeholder="Enter Event Description" value="{{old('event_description')}}" id="event_description" name="event_description" data-errors="Please Enter Description." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('event_description'))
                                            <div class="error">{{ $errors->first('event_description') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="event_start_time">Start Time *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d H:i:s" class="form-control" value="{{old('event_start_time')}}" id="event_start_time" name="event_start_time" />
                                    </div>
                                    @if($errors->has('event_start_time'))
                                        <span class="text-red">{{ $errors->first('event_start_time') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="event_end_time">End Time *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d H:i:s" class="form-control" value="{{old('event_end_time')}}" id="event_end_time" name="event_end_time" />
                                    </div>
                                    @if($errors->has('event_end_time'))
                                        <span class="text-red">{{ $errors->first('event_end_time') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="event_location">Location *</label>
                                        <input type="text" class="form-control" placeholder="Enter Location" id="event_location" value="{{old('event_location')}}" name="event_location" data-errors="Please Enter Location." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('event_location'))
                                            <div class="error">{{ $errors->first('event_location') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Event</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
