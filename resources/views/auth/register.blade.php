{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="role_name" :value="__('name')" />
                <select
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    @error('role_name') is-invalid @enderror" name="role_name" id="role_name">

                    <option selected disabled>-- Select Role Name --</option>
                    @foreach ($role as $name)
                        <option value="{{ $name->name }}" :value="old('name')">{{ $name->name }}</option>
                    @endforeach


                </select>

            </div>
            <div class="mt-4">
                <x-input-label for="department" :value="__('Departments')" />
                <select
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full  @error('department') is-invalid @enderror"
                    name="department" id="department">

                    <option selected disabled>-- Select Department --</option>
                    @foreach ($dept as $name)
                        <option value="{{ $name->name }}">{{ $name->name }}</option>
                    @endforeach


                </select>

            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Signup</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                <a class="auth-brand text-center d-block mb-20" href="#">
                                    <img class="brand-img" src="{{ asset('assets/dist/img/wcu.png') }}"
                                        style="width:100px; height:100px" alt="brand" />
                                </a>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <h1 class="display-4 mb-10 text-center">እንኳን ደህና መጡ :)</h1>
                                    <p class="mb-30 text-center">የእርስዎን አካውንት ይፍጠሩ </p>
                                    {{-- <div class="form-row"> --}}
                                    <div class=" form-group">
                                        <input placeholder="ሙሉ ስም" value="" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-6 form-group">

                                            <input placeholder="Last name" value="" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> --}}
                                    {{-- </div> --}}
                                    <div class="form-group">

                                        <input placeholder="ኢሜይል" id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input placeholder="የይለፍ ቃል" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">

                                            <input placeholder="የይለፍ ቃል ያረጋግጡ" id="password-confirm" type="password"
                                                class="form-control" name="password_confirmation" required
                                                autocomplete="new-password">


                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i
                                                            data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary  btn-block">
                                        {{ __('ይመዝገቡ') }}
                                    </button>
                                    <div class="option-sep">ወይም</div>
                                    {{-- Already have an account? --}}
                                    <p class="text-center">ክዚህ በፊት ተመዝግበዋል? <a href="{{ route('login') }}">በመለያ
                                            ይግቡ</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('assets/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('assets/dist/js/feather.min.js') }}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('assets/vendors/jquery-toggles/toggles.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/toggle-data.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('assets/dist/js/init.js') }}"></script>
</body>

</html>
