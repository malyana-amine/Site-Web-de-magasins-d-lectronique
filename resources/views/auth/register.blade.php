

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
</head>
<body>
    
    
    <div class="bg-gray-100 py-6 sm:py-8">
        <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-md">
                <div class="bg-white py-6 sm:py-8 px-4 sm:px-10">
                    <h2 class="text-center text-2xl font-bold mb-4">Register</h2>
              <form method="POST" action="{{ route('register') }}"  class="space-y-6" action="#" method="POST">
                @csrf
                  <div>
                      <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                      <input type="text" name="name" id="name" autocomplete="name" required class="w-full border rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                      <small id="nameerror" class="text-red-700 hidden">eror</small>
                    </div>
                    <div>
                  <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                  <input type="email" name="email" id="email" autocomplete="email" required class="w-full border  rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                  <small id="emailerror" class="text-red-700 hidden">eror</small>
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" autocomplete="new-password" required class="w-full border  rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                    <small id="passworderror" class="text-red-700 hidden">eror</small>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password"  required class="w-full  border rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                    <small id="password_confirmationerror" class="text-red-700 hidden">eror</small>
                </div>
                <div>
                    <label for="age" class="block text-gray-700 font-bold mb-2">Age</label>
                    <input type="number" name="age" id="age" required class="w-full border  rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                    <small id="ageerror" class="text-red-700 hidden">eror</small>
                </div>
                <div>
                  <label class="block text-gray-700 font-bold mb-2">Gender</label>
                  <div class="mt-2">
                      <div>
                          <label for="gender_male" class="inline-flex items-center">
                              <input type="radio" name="gender" id="gender_male" value="0" class="form-radio" checked>
                              <span class="ml-2">Male</span>
                            </label>
                        </div>
                        <div>
                            <label for="gender_female" class="inline-flex items-center">
                                <input type="radio" name="gender" id="gender_female" value="1" class="form-radio">
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                        
                </div>
                </div>
                <div>
                    <button  type="submit" class="w-full mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Register</button>

                </div>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('login')}}">
                    Already have an Account
                  </a>
              </form>
            </div>
        </div>
    </div>
</div>

</body>

<script>// Select the input fields and submit button
    const name = document.getElementById("name");
    const nameerror = document.getElementById("nameerror");
    
    
    const email = document.getElementById("email");
    const emailerror = document.getElementById("emailerror");
    
    
    const password = document.getElementById("password");
    const passworderror = document.getElementById("passworderror");
    
    
    const password_confirmation = document.getElementById("password_confirmation");
    const password_confirmationerror = document.getElementById("password_confirmationerror");
    
    
    const age = document.getElementById("age");
    const ageerror = document.getElementById("ageerror");


    const submitBtn = document.querySelector("button[type='submit']");
    
    // Regex patterns for input validation
    const nameRegex = /^[a-zA-Z\s]+$/;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&\s]{8,}$/;
const password_confirmationRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&\s]{8,}$/;

    // const ageRegex = /^[a-zA-Z\s]+$/;
    const ageRegex = /^\d+$/;

    
    // Add keyup event listeners to input fields
    console.log(name);
    name.addEventListener("keyup", validatename);
    email.addEventListener("keyup", validateemail);
    password.addEventListener("keyup", validatepassword);
    password_confirmation.addEventListener("keyup", validatepassword_confirmation);
    age.addEventListener("keyup", validateage);
    
    // Function to validate magazine name
    function validatename() {
      if (nameRegex.test(name.value)) {
        name.classList.remove("border-red-500");
        nameerror.classList.add("hidden");
      } else {
        name.classList.add("border-red-500");
        nameerror.classList.remove("hidden");
        
      }
      validateForm();
    }
    
    // Function to validate address
    function validateemail() {
      if (emailRegex.test(email.value)) {
        email.classList.remove("border-red-500");
        emailerror.classList.add("hidden");
      } else {
        email.classList.add("border-red-500");
        emailerror.classList.remove("hidden");
      }
      validateForm();
    }
    
    function validatepassword() {
      if (passwordRegex.test(password.value)) {
        password.classList.remove("border-red-500");
        passworderror.classList.add("hidden");
      } else {
        password.classList.add("border-red-500");
        passworderror.classList.remove("hidden");
      }
      validateForm();
    }


    function validatepassword_confirmation() {
  if (password_confirmation.value === password.value) {
    password_confirmation.classList.remove("border-red-500");
    password_confirmationerror.classList.add("hidden");
  } else {
    password_confirmation.classList.add("border-red-500");
    password_confirmationerror.classList.remove("hidden");
  }
  validateForm();
}

age.addEventListener("keyup", validateage);

function validateage() {
  if (ageRegex.test(age.value) && age.value >= 18 && age.value <= 100) {
    age.classList.remove("border-red-500");
    ageerror.classList.add("hidden");
  } else {
    age.classList.add("border-red-500");
    ageerror.classList.remove("hidden");
  }
  validateForm();
}

    function validateForm() {
        if (nameRegex.test(name.value) && 
    emailRegex.test(email.value) && 
    passwordRegex.test(password.value) &&
    password_confirmationRegex.test(password_confirmation.value) &&
    ageRegex.test(age.value)) {
  submitBtn.removeAttribute("disabled");
} else {
  submitBtn.setAttribute("disabled", true);
}

    }
    
  </script>

</html>