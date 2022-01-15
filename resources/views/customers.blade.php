<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
        <br>
        <h1 class="text-center">Phone Numbers</h1>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <select class="custom-select" id="country_id" name="country_id">
                        <option selected value="0">Filter By Country</option>
                        @foreach($countries as $key=>$value)
                            <option value="{{$value}}" @if(request()->get('country_id') == $value) selected @endif>{{$key}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6 pull-right">
                <div class="input-group mb-3">
                    <select class="custom-select" id="is_valid_phone" name="is_valid_phone">
                        <option selected value="0">Filter By Phone Numbers' Validity</option>
                        <option value="true" @if(request()->filled('is_valid_phone') && request()->get('is_valid_phone') == "true") selected @endif>Valid</option>
                        <option value="false" @if(request()->filled('is_valid_phone') && request()->get('is_valid_phone') == "false") selected @endif>Invalid</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">Country</th>
                    <th class="text-center" scope="col">State</th>
                    <th class="text-center" scope="col">Country Code</th>
                    <th class="text-center" scope="col">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td class="text-center">{{$customer->country->name}}</td>
                            <td class="text-center">{{$customer->is_valid_phone}}</td>
                            <td class="text-center">{{$customer->country->country_code}}</td>
                            <td class="text-center">{{$customer->phone}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {{ $customers->links() }}
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#country_id, #is_valid_phone').on('change',function(){
                $.get("{{ route('customers.list') }}", function(){
                    location.replace("{{route('customers.list')}}"+"?country_id="+$("#country_id").val()+"&is_valid_phone="+$("#is_valid_phone").val())
                });
            });
        });
    </script>
  </body>
</html>
