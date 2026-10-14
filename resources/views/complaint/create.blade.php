<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Complaints Registration Form</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100">

    <div class="flex min-h-screen items-center justify-center px-4 py-10">

        <div class="w-full max-w-3xl">

            {{-- Header --}}
            <div class="mb-6 flex flex-col items-center gap-4 sm:flex-row sm:items-center sm:gap-6">

                {{-- Logo (place your file at public/images/logo.png) --}}
                <img src="{{ asset('images/logo.jpeg') }}" alt="Company Logo"
                    class="h-24 w-24 flex-shrink-0 object-contain">

                <div class="text-center sm:text-left">

                    <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                        Complaints Registration Form
                    </h1>

                    <p class="mt-2 text-lg text-gray-700">
                        Please complete the fields below, and a Customer Service team member will get back to you.
                    </p>

                </div>

            </div>


            {{-- Success Message --}}
            @if(session('success'))

            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4">

                <div class="flex items-center justify-between gap-4">

                    <div>

                        <p class="font-semibold text-green-800">
                            {{ session('success') }}
                        </p>

                        <p class="mt-1 text-sm text-green-700">
                            Your registration has been saved successfully.
                        </p>

                    </div>

                    @if(session('whatsapp_url'))

                    <a href="{{ session('whatsapp_url') }}" target="_blank" rel="noopener noreferrer"
                        class="whitespace-nowrap rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">
                        Send WhatsApp
                    </a>

                    @endif

                </div>

            </div>

            @endif


            {{-- Validation Errors --}}
            @if($errors->any())

            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4">

                <p class="font-semibold text-red-800">
                    Please correct the following errors:
                </p>

                <ul class="mt-2 list-disc pl-5 text-sm text-red-700">

                    @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                    @endforeach

                </ul>

            </div>

            @endif


            {{-- Form --}}
            <form method="POST" action="{{ route('Complaint.complaintFormSave') }}" enctype="multipart/form-data"
                class="rounded-2xl bg-white p-6 shadow-lg sm:p-8">

                @csrf


                {{-- Personal Information --}}
                <div class="mb-8">

                    <h2 class="mb-4 text-xl font-semibold text-gray-900">
                        Personal Information
                    </h2>

                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                        {{-- Full Name --}}
                        <div>

                            <label for="full_name" class="mb-2 block text-sm font-medium text-gray-700">
                                Full Name
                                <span class="text-red-500">*</span>
                            </label>

                            <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" required
                                placeholder="Enter your full name"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            @error('full_name')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>


                        {{-- Email --}}
                        <div>

                            <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                                Email Address
                                <span class="text-red-500">*</span>
                            </label>

                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                placeholder="you@example.com"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            @error('email')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>


                        {{-- Mobile --}}
                        <div>

                            <label for="mobile" class="mb-2 block text-sm font-medium text-gray-700">
                                Mobile Number
                                <span class="text-red-500">*</span>
                            </label>

                            <input type="tel" id="mobile" name="mobile" value="{{ old('mobile') }}" required
                                placeholder="+91 9876543210"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            @error('mobile')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>

                        {{-- Device: Single select dropdown --}}
                        <div>
                            <label for="course" class="block text-sm font-medium mb-2">
                                Device
                                <span class="text-red-500">*</span>
                            </label>

                            <select name="device" id="device" required class="w-full border rounded-lg px-4 py-3
                                        focus:ring-2 focus:ring-blue-500
                                        focus:outline-none">

                                <option value="">Select a device</option>

                                <option value="desktop" {{ old('device') == 'desktop' ? 'selected' : '' }}>
                                    Desktop
                                </option>

                                <option value="network" {{ old('device') == 'network' ? 'selected' : '' }}>
                                    Network
                                </option>

                                <option value="laptop" {{ old('device') == 'laptop' ? 'selected' : '' }}>
                                    Laptop
                                </option>


                            </select>

                            @error('device')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full min-w-0">
                            <label class="block text-sm font-medium mb-2">
                                Catagory
                            </label>

                            <div class="flex flex-wrap gap-4">
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="category" value="individual"
                                        {{ old('category','individual') == 'individual' ? 'checked' : '' }} required
                                        class="text-blue-600">
                                    Individual
                                </label>

                                <label class="flex items-center gap-2">
                                    <input type="radio" name="category" value="corporate"
                                        {{ old('category') == 'corporate' ? 'checked' : '' }} class="text-blue-600">
                                    Corporate
                                </label>

                            </div>

                            @error('catogory')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Company Name --}}
                        <div class="w-full min-w-0">
                            <div class="hidden" id="company_field">

                                <label for="company_name" class="mb-2 block text-sm font-medium text-gray-700">
                                    Company Name <span class="text-red-500">*</span>
                                </label>

                                <input type="text" id="company_name" name="company_name"
                                    value="{{ old('company_name') }}" placeholder="Enter the company name"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                                @error('company_name')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>
                        </div>

                        {{-- Model Name --}}
                        <div>

                            <label for="modal" class="mb-2 block text-sm font-medium text-gray-700">
                                Modal <span class="text-red-500">*</span>
                            </label>

                            <input type="text" id="modal" name="modal" value="{{ old('modal') }}"
                                placeholder="Enter the modal"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            @error('modal')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>
                        {{-- Serial Number --}}
                        <div>

                            <label for="serial_number" class="mb-2 block text-sm font-medium text-gray-700">
                                Serial Number <span class="text-red-500">*</span>
                            </label>

                            <input type="text" id="serial_number" name="serial_number"
                                value="{{ old('serial_number') }}" placeholder="Enter the serial number"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            @error('serial_number')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>

                        {{-- Operating System: Single select dropdown --}}
                        <div>
                            <label for="operating_system" class="block text-sm font-medium mb-2">
                                Operating System <span class="text-red-500">*</span>
                            </label>

                            <select name="operating_system" id="operating_system" required class="w-full border rounded-lg px-4 py-3
                                        focus:ring-2 focus:ring-blue-500
                                        focus:outline-none">

                                <option value="">Select a operating System</option>

                                <option value="win7" {{ old('operatingSys') == 'win7' ? 'selected' : '' }}>
                                    Windows 7
                                </option>

                                <option value="win8" {{ old('operatingSys') == 'win8' ? 'selected' : '' }}>
                                    Windows 8
                                </option>

                                <option value="Win10" {{ old('operatingSys') == 'win10' ? 'selected' : '' }}>
                                    Windows 10
                                </option>

                                <option value="Win11" {{ old('operatingSys') == 'win11' ? 'selected' : '' }}>
                                    Windows 11
                                </option>
                            </select>

                            @error('device')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        {{-- Complaints --}}
                        <div class="mb-8 w-full md:col-span-2">

                            <label for="complaints" class="mb-2 block text-sm font-medium text-gray-700">
                                Complaints summary <span class="text-red-500">*</span>
                            </label>

                            <textarea id="complaints" name="complaints" rows="8" cols="10"
                                placeholder="Enter your complaints"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">{{ old('complaints') }}</textarea>

                            @error('complaints')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>
                        {{-- File Upload --}}
                        <div class="w-full md:col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-700">
                                File Attachment
                            </label>

                            <label id="dropzone" for="documents"
                                class="flex cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-400 bg-slate-50 px-6 py-10 text-center transition hover:bg-slate-100 focus-within:ring-2 focus-within:ring-blue-500">

                                <svg class="h-12 w-12 text-slate-400" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16V8m0 0-3 3m3-3 3 3M6.5 19a4.5 4.5 0 0 1-.6-8.96A6 6 0 0 1 17.4 9.1 4.5 4.5 0 0 1 17.5 19h-11Z" />
                                </svg>

                                <span class="mt-2 text-lg font-semibold text-gray-800">Browse Files</span>
                                <span class="text-sm text-gray-500">Drag and drop files here</span>

                                <input type="file" name="documents[]" id="documents" multiple
                                    accept=".pdf,.jpg,.jpeg,.png" class="sr-only">
                            </label>

                            <p class="mt-1 text-sm text-gray-500">
                                Allowed formats: PDF, JPG, PNG. Maximum 5 files, 5 MB each.
                            </p>

                            <p id="file-error" class="mt-1 hidden text-sm text-red-500"></p>

                            <ul id="file-list" class="mt-3 space-y-2"></ul>

                            @error('documents')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            @error('documents.*')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 md:col-span-2">
                            <label for="location_address" class="block font-medium mb-2">
                                Location
                            </label>

                            <input type="text" name="location_address" id="location_address"
                                value="{{ old('location_address') }}" placeholder="Search your location"
                                class="w-full rounded-lg border p-3">
                            <div id="map" class="w-full h-[400px] rounded-lg border">eeeeeeeee</div>

                            <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude') }}">

                            <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude') }}">
                        </div>


                    </div>

                </div>








                {{-- Submit --}}
                <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">

                    <button type="reset"
                        class="rounded-lg border border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                        Reset
                    </button>

                    <button type="submit"
                        class="rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Submit Registration
                    </button>

                </div>

            </form>

        </div>

    </div>
    <script>
    window.googleMapsApiKey = "{{ config('services.google_maps.key') }}";
    console.log("rrrrrrrrrrrrrrrrrr");
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&libraries=places&loading=async&callback=initMap"
        async>
    </script>

    <script>
    (function() {
        const MAX_FILES = 5;
        const MAX_SIZE = 5 * 1024 * 1024; // 5 MB
        const ALLOWED = ['pdf', 'jpg', 'jpeg', 'png'];

        const input = document.getElementById('documents');
        const zone = document.getElementById('dropzone');
        const list = document.getElementById('file-list');
        const errorEl = document.getElementById('file-error');
        let files = [];

        function showError(msg) {
            errorEl.textContent = msg;
            errorEl.classList.toggle('hidden', !msg);
        }

        function formatSize(bytes) {
            return bytes < 1024 * 1024 ?
                (bytes / 1024).toFixed(0) + ' KB' :
                (bytes / 1024 / 1024).toFixed(1) + ' MB';
        }

        function sync() {
            const dt = new DataTransfer();
            files.forEach(f => dt.items.add(f));
            input.files = dt.files;

            list.innerHTML = '';
            files.forEach((f, i) => {
                const li = document.createElement('li');
                li.className =
                    'flex items-center justify-between rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm';

                const name = document.createElement('span');
                name.className = 'truncate text-gray-700';
                name.textContent = f.name + ' (' + formatSize(f.size) + ')';

                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'ml-4 text-red-500 hover:text-red-700';
                btn.textContent = 'Remove';
                btn.addEventListener('click', () => {
                    files.splice(i, 1);
                    showError('');
                    sync();
                });

                li.append(name, btn);
                list.appendChild(li);
            });
        }

        function addFiles(newFiles) {
            const problems = [];
            Array.from(newFiles).forEach(f => {
                const ext = f.name.split('.').pop().toLowerCase();
                if (!ALLOWED.includes(ext)) {
                    problems.push(f.name + ': only PDF, JPG and PNG files are allowed.');
                } else if (f.size > MAX_SIZE) {
                    problems.push(f.name + ': exceeds the 5 MB limit.');
                } else if (files.length >= MAX_FILES) {
                    problems.push('You can upload a maximum of ' + MAX_FILES + ' files.');
                } else if (!files.some(x => x.name === f.name && x.size === f.size)) {
                    files.push(f);
                }
            });
            showError(problems.length ? Array.from(new Set(problems)).join(' ') : '');
            sync();
        }

        input.addEventListener('change', () => addFiles(input.files));

        ['dragenter', 'dragover'].forEach(evt =>
            zone.addEventListener(evt, e => {
                e.preventDefault();
                zone.classList.add('border-blue-500', 'bg-blue-50');
            })
        );
        ['dragleave', 'drop'].forEach(evt =>
            zone.addEventListener(evt, e => {
                e.preventDefault();
                zone.classList.remove('border-blue-500', 'bg-blue-50');
            })
        );
        zone.addEventListener('drop', e => addFiles(e.dataTransfer.files));
    })();
    </script>

</body>

</html>