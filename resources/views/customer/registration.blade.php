<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FmMarket-Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../custommer/register/style.css">
<link rel="shortcut icon" href="images/ff.png" />
</head>
<body>
<!-- partial:index.partial.html -->

<div class="user">
    <header class="user__header">

        <h1 class="user__title" style="font-weight: bold; color: Black;">Customer Sign-Up</h1>
    </header>
    <form class="form" action="{{url('customer/processRegister')}}" method="POST">
        @csrf
        <div class="form__group">
            <input type="email" name="email" placeholder="Email" class="form__input" />
        </div>
        @error('email')
			<div style="color:red;background: white; padding-left:20px">{{ $message }}</div>
		@enderror
        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
        </div>
        @error('password')
			<div style="color:red;background: white; padding-left:20px">{{ $message }}</div>
		@enderror
        <div class="form__group">
            <input type="text" name="name" placeholder="Username" class="form__input" />
        </div>
        @error('name')
			<div style="color:red;background: white; padding-left:20px">{{ $message }}</div>
		@enderror
        <div class="form__group">
            <textarea type="text" name="address" placeholder="Address" class="form__input" ></textarea>
        </div>
        @error('address')
			<div style="color:red;background: white; padding-left:20px">{{ $message }}</div>
		@enderror
        <div class="form__group">
            <input type="text" name="phone" placeholder="phone" class="form__input" />
        </div>
        @error('phone')
			<div style="color:red;background: white; padding-left:20px">{{ $message }}</div>
		@enderror
        {{-- <div class="form__group">
            <input type="text" name="photo" placeholder="Photo" class="form__input" />
        </div> --}}

        <button class="btn" type="submit">Register</button>
    </form>
</div>
<!-- partial -->
  <script  src="../custommer/register/script.js"></script>

</body>
</html>






