<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Event Attendee</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('event-attendees.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="driver_id">Driver</label>
                                        <select id="driver_id" name="driver_id" class="selectpicker form-control"
                                                data-style="py-0">
                                            <option value="{{null}}">Select Driver</option>
                                            @foreach($drivers as $event)
                                                <option @if($event->id == old('driver_id')) selected
                                                        @endif value="{{$event->id}}">{{$event->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('driver_id'))
                                        <span class="text-red">{{ $errors->first('driver_id') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="driver_reliever_id">Driver Reliever</label>
                                        <select id="driver_reliever_id" name="driver_reliever_id"
                                                class="selectpicker form-control" data-style="py-0">
                                            <option value="{{null}}">Select Driver Reliever</option>
                                            @foreach($drivers as $event)
                                                <option @if($event->id == old('driver_reliever_id')) selected
                                                        @endif value="{{$event->id}}">{{$event->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('driver_reliever_id'))
                                        <span class="text-red">{{ $errors->first('driver_reliever_id') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="event_id">Event</label>
                                        <select id="event_id" name="event_id" class="selectpicker form-control"
                                                data-style="py-0">
                                            <option value="{{null}}">Select Event</option>
                                            @foreach($events as $event)
                                                <option @if($event->id == old('event_id')) selected
                                                        @endif value="{{$event->id}}">{{$event->event_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('event'))
                                        <span class="text-red">{{ $errors->first('event') }}</span>
                                    @endif
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
