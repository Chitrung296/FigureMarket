<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FmMarket-Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
{{-- <link rel="stylesheet" href="../custommer/register/style.css"> --}}
<link rel="stylesheet" href="{{ asset('custommer/register/style.css') }}">
<link rel="shortcut icon" href="images/ff.png" />
</head>
<body>
<!-- partial:index.partial.html -->

<div class="user">
    <header class="user__header">
        <img src="" alt="" />
        {{-- <h1 class="user__title">Customer Edit</h1> --}}
        <h1 class="user__title" style="font-weight: bold; color: Black;">Customer Edit</h1>

    </header>

    <form class="form" action="{{url('customer/processUpdate')}}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $data->id }}">
        <div class="form__group">
            <input type="email" readonly name="email" value="{{$data->customerEmail}}" placeholder="Email" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" name="password"   placeholder="New Password" class="form__input" >
        </div>

        <div class="form__group">
            <input type="text" name="name" value="{{$data->customerName}}" placeholder="Username" class="form__input" />
        </div>

        <div class="form__group">
            <textarea type="text" name="address" value="{{$data->customerName}}" placeholder="Address" class="form__input" >{{ $data->customerAddress }}</textarea>
        </div>

        <div class="form__group">
            <input type="text" name="phone" value="{{$data->customerPhone}}" placeholder="phone" class="form__input" />
        </div>

        {{-- <div class="form__group">
            <input type="text" name="photo" value="{{$data->customerPhoto}}" placeholder="Photo" class="form__input" />
        </div> --}}

        <button class="btn" type="submit">Submit Edit</button>
    </form>
</div>
<!-- partial -->
  {{-- <script  src="../custommer/register/script.js"></script> --}}

  <script  src="{{ asset('custommer/register/script.js') }} "></script>


</body>
</html>






