@extends('dbguru.dashboard')
@section('title','profile')

@section('contenttablegr')
<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/sty.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
  <div class="profile">
  <a href="/editguru"><i class="fa-solid fa-pen-to-square" style="position: absolute; right: 22%;"></i></a>
    <img src="{{ Auth()->user()->profile_photo_url }}" alt="Profile Picture">
    <h1 class="profile-name">{{Auth::user()->name}}</h1>
    <h3 class="profile-role">{{Auth::user()->role}}</h3>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida auctor odio ut dignissim. Nullam id scelerisque massa. Fusce elementum, neque in viverra suscipit, nisi metus varius enim, id iaculis nisi lectus a ante. Curabitur eget consectetur libero. Sed eget tellus tincidunt, ullamcorper ex id, congue lorem.</p> -->
    <ul>
      <li class="profile-email"><strong>Email:</strong> {{Auth::user()->email}}</li>
      <li class="profile-phone"><strong>Phone:</strong> {{Auth::user()->phone}}</li>
      <li><strong>Website:</strong> www.johndoe.com</li>
    </ul>
  </div>
</body>
</html>

      @endsection