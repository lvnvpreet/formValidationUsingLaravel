<center >

    <h1>User Registration Form</h1>
    <form action="submit" method="post">
        @csrf
        
        <div class=basic>
            <div>
                <input type="text" placeholder="Enter your name" name="name" value ="{{old('name')}}" class="{{$errors->first('name')?'input-error':''}}">
               @error('name')
                    <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
            <br>
            <div>
                <input type="text" placeholder="Enter your Email" name="email" value ="{{old('email')}}" class="{{$errors->first('email')?'input-error':''}}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
            </div>
            <br>
            <div>
                <input type="text" placeholder="Enter your mobile no." name="mobile" value ="{{old('mobile')}}" class="{{$errors->first('mobile')?'input-error':''}}">
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <hr>
        <h4>Select skills</h4>
        <div>
            <input type="checkbox" name="skill[]" id="php" value ="{{old('[]')}}">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value ="{{old('[]')}}">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skill[]" id="node" value ="{{old('[]')}}">
            <label for="node">NODE</label>
            <input type="checkbox" name="skill[]" id="reactjs" value ="{{old('[]')}}">
            <label for="reactjs">REACTJS</label>
        </div>
        <hr>
        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" id="male" value="{{old('gender')}}">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="{{old('gender')}}">
            <label for="female">Female</label>
        </div>
        <hr>
        <div>
            <h4>Select city</h4>
            <select name='city' id="city">
                <option value="jaipur">Jaipur</option>
                <option value="jhodhpur">Jhodhpur</option>
                <option value="bikaner">Bikaner</option>
                <option value="ajmer">Ajmer</option>
            </select>
        </div>
        <hr>
        <div>
            <h4>Age</h4>
            <div>
                <input type="range" value='24' name='age' min='18' max='65' oninput="this.nextElementSibling.value = this.value">
                <output>24</output>
            </div>
        </div>
        <hr>
        <br><br>
        <div>
            <button>Register</button>
        </div>
    </form>

</center>


<style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            border: 2px solid #000;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            border-radius: 5px;
        }
        .text-danger{
            color: red;
            font-style:italic;
        }
        .basic{
            text-align: left;
            margin-left: 90px;
        }
        .input-error{
            border:1px solid red;
            color:red;
        }
        

    </style>