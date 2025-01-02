<!-- resources/views/profile/partials/update-profile-picture-form.blade.php -->
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
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    {{ __('Save Profile Picture') }}
                </button>
            </div>
        </form>
    </div>
</div>
