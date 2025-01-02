<!-- resources/views/profile/partials/update-about-me-form.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </div>
</div>
