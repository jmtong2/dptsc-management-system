<x-app-layout>
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Seat Cancellation</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('seat-cancellations.store')}}" data-toggle="validator" method="post">
                            @csrf
                            <div class="row">
                                @foreach($errors->all() as $error)
                                    <span class="text-red">{{$error}}</span><br>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reservation_id">Seat Reservation *</label>
                                        <select id="reservation_id" name="reservation_id"
                                                class="selectpicker form-control"
                                                data-style="py-0">
                                            <option value="{{null}}">Select Seat Reservation</option>
                                            @foreach($seatReservations as $seatReservation)
                                                <option @if($seatReservation->id == old('reservation_id')) selected
                                                        @endif value="{{$seatReservation->id}}">{{$seatReservation->name." | ".$seatReservation->trip_id." | ".$seatReservation->reservation_date}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('reservation_id'))
                                            <div class="text-red">{{ $errors->first('reservation_id') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cancellation_reason">Cancellation Reason *</label>
                                        <input type="text" class="form-control" placeholder="Enter Cancellation Reason"
                                               id="cancellation_reason" name="cancellation_reason"
                                               data-errors="Please Enter Cancellation Reason." required>
                                        <div class="help-block with-errors"></div>
                                        @if($errors->has('cancellation_reason'))
                                            <div class="text-red">{{ $errors->first('cancellation_reason') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Seat Cancellation</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>
