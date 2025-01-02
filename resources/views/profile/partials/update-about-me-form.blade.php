<!-- resources/views/profile/partials/update-about-me-form.blade.php -->
<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <div class="max-w-xl">
        <form method="POST" action="{{ route('profile.update.about') }}">
            @csrf
            @method('PATCH')

            <!-- About Me -->
            <div class="mb-4">
                <label for="about_me" class="block text-sm font-medium text-gray-700">
                    {{ __('About Me') }}
                </label>
                <textarea name="about_me" id="about_me" rows="4"
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('about_me', $user->about_me) }}</textarea>
            </div>

            <!-- Save Button -->
            <div>
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    {{ __('Save About Me') }}
                </button>
            </div>
        </form>
    </div>
</div>
