
@extends('layouts.header')

<div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
        <form method="POST" action="{{ route('register.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" />
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" />
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" name="phone_number" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" />
            </div>
            <div class="mb-4">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" name="date_of_birth" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" />
            </div>
            <div class="mb-4">
                <label for="profile_photo" class="block text-sm font-medium text-gray-700">Profile Photo</label>
                <input type="file" name="profile_photo" class="mt-1 p-2 border border-gray-300 rounded-md w-full" />
            </div>
            <div class="mb-4">
                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                <select name="state" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                    <option value="" disabled selected>Select your state</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Delhi">Delhi</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <select name="country" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                    <option value="India" selected>India</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="China">China</option>
                    <option value="Russia">Russia</option>
                    <option value="South Africa">South Africa</option>
                    <!-- Add more countries as needed -->
                </select>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select name="gender" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" />
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" />
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select name="role" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                    <option value="customer">Customer</option>
                    <option value="chef">Chef</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">Register</button>
        </form>

        <hr class="my-6">

        <h4 class="text-center text-lg font-medium">Or Register with</h4>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="{{ route('login.google') }}" class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition duration-200">Google</a>
            <a href="{{ route('login.google') }}" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">Facebook</a>
            <!-- Add other social providers as needed -->
        </div>
    </div>
</div>


</body>
</html>
