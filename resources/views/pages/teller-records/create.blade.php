<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Teller Records</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('teller-records.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="driver_id">Driver</label>
                                        <select id="driver_id" name="driver_id" class="selectpicker form-control"
                                                data-style="py-0">
                                            <option value="{{null}}">Select Driver</option>
                                            @foreach($drivers as $vehicle)
                                                <option @if($vehicle->id == old('driver_id')) selected
                                                        @endif value="{{$vehicle->id}}">{{$vehicle->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('driver_id'))
                                        <span class="text-red">{{ $errors->first('driver_id') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehicle_id">Vehicle</label>
                                        <select id="vehicle_id" name="vehicle_id" class="selectpicker form-control"
                                                data-style="py-0">
                                            <option value="{{null}}">Select Vehicle</option>
                                            @foreach($vehicles as $vehicle)
                                                <option @if($vehicle->id == old('vehicle_id')) selected
                                                        @endif value="{{$vehicle->id}}">{{$vehicle->registration_number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('vehicle_id'))
                                        <span class="text-red">{{ $errors->first('vehicle_id') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dispatch_time">Dispatch Time *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d H:i:s" class="form-control"
                                               value="{{old('dispatch_time')}}"
                                               id="dispatch_time" name="dispatch_time"/>
                                    </div>
                                    @if($errors->has('dispatch_time'))
                                        <span
                                            class="text-red">{{ $errors->first('dispatch_time') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="terminal_exit_time">Terminal Exit Time *</label>
                                        <input type="datetime-local" data-date-format="Y-m-d H:i:s" class="form-control"
                                               value="{{old('terminal_exit_time')}}"
                                               id="terminal_exit_time" name="terminal_exit_time"/>
                                    </div>
                                    @if($errors->has('terminal_exit_time'))
                                        <span
                                            class="text-red">{{ $errors->first('terminal_exit_time') }}</span>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Teller Record</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
