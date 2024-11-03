
@include('layouts.header')
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-sm mx-4">
        <h2 class="text-lg font-semibold mb-4 text-center">OTP Verification</h2>
        
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('otp.verify') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            
            <label for="otp" class="block text-gray-700 mb-2">Enter OTP:</label>
            <input type="text" name="otp" id="otp" required class="border rounded-lg p-2 w-full mb-4" placeholder="Enter your OTP here">
            
            <div class="font-semibold text-gray-600 mb-4 text-center" id="timer">Time left: 5:00</div>
            
            <button type="submit" class="bg-blue-600 text-white rounded-lg py-2 w-full hover:bg-blue-700 transition duration-200">Verify</button>
        </form>
    </div>
    @include('layouts.header')
