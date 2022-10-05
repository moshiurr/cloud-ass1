<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Moshiur's Assignment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>Sample Registration Form</h1>
        <p>Please fill in all fields and click Register.</p>

        <form method="post" action="{{route('save-user-data')}}">
            {{ csrf_field() }}

            <h2>User Information</h2>

            <div class="form-group">
                <label class="control-label" for="first_name">First Name:</span></label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{old('first_name')}}"></input>
                @if ($errors->has('first_name'))
                    <span class="help-block alert alert-danger">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label" for="last_name">Last Name:</span></label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{old('last_name')}}"></input>
                @if ($errors->has('last_name'))
                    <span class="help-block alert alert-danger">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label" for="phone_number">Phone:</span></label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{old('phone_number')}}"></input>
                @if ($errors->has('phone_number'))
                    <span class="help-block alert alert-danger">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label" for="email">Email:</span></label>
                <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}"></input>
                @if ($errors->has('email'))
                    <span class="help-block alert alert-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>



            <h2>Publications</h2>
            <p>Which book would you like information about?</p>

            <!-- create drop-down list containing book names -->
            <select name="book" id="book">
                <option value="Internet and WWW How to Program" selected>Internet and WWW How to Program</option>
                <option value="C++ How to Program">C++ How to Program</option>
                <option value="Java How to Program">Java How to Program</option>
                <option value="Visual Basic How to Program">Visual Basic How to Program</option>
            </select>

            <h2>Operating System</h2>
            <p>Which operating system do you use?</p>

            <!-- create five radio buttons --><input type="radio" name="os" value="Windows" checked="">Windows<input type="radio" name="os" value="Mac OS X">Mac OS X<input type="radio" name="os" value="Linux">Linux<input type="radio" name="os" value="Other">Other<!-- create a submit button -->
            <p class="head"><input type="submit" name="submit" value="Register"></p>
        </form>

    </body>
</html>
