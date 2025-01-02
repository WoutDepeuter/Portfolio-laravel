<!-- resources/views/profile/partials/update-profile-picture-form.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <div class="max-w-xl">
        <form method="POST" action="{{ route('profile.update.picture') }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <!-- Profile Picture -->
            <div class="mb-4">
                <label for="profile_picture" class="block text-sm font-medium text-gray-700">
                    {{ __('Profile Picture') }}
                </label>
                <input type="file" name="profile_picture" id="profile_picture"
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Save Button -->
           <div>
               <x-primary-button>{{ __('Save') }}</x-primary-button>
           </div>
        </form>
    </div>
</div>
