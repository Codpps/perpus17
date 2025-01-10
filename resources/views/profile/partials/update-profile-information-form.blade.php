<section class="bg-white p-8 rounded-2xl shadow-lg max-w-2xl mx-auto">
   <header class="border-b border-gray-100 pb-6">
       <div class="flex items-center gap-3 mb-3">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
           </svg>
           <h2 class="text-2xl font-bold text-gray-900">
               {{ __('Profile Information') }}
           </h2>
       </div>

       <p class="text-gray-600">
           {{ __("Update your account's profile information and email address.") }}
       </p>
   </header>

   <form id="send-verification" method="post" action="{{ route('verification.send') }}">
       @csrf
   </form>

   <form method="post" action="{{ route('profile.update') }}" class="mt-8 space-y-6">
       @csrf
       @method('patch')

       <!-- Name -->
       <div class="space-y-2">
           <x-input-label for="name" :value="__('Name')" class="font-semibold text-gray-700"/>
           <div class="relative">
               <x-text-input id="name"
                            name="name"
                            type="text"
                            class="pl-10 pr-4 py-3 w-full rounded-xl border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                            :value="old('name', $user->name)"
                            required
                            autofocus
                            autocomplete="name" />
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
               </svg>
           </div>
           <x-input-error class="text-sm" :messages="$errors->get('name')" />
       </div>

       <!-- Email -->
       <div class="space-y-2">
           <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700"/>
           <div class="relative">
               <x-text-input id="email"
                            name="email"
                            type="email"
                            class="pl-10 pr-4 py-3 w-full rounded-xl border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                            :value="old('email', $user->email)"
                            required
                            autocomplete="username" />
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
               </svg>
           </div>
           <x-input-error class="text-sm" :messages="$errors->get('email')" />

           @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
               <div class="mt-4 p-4 bg-yellow-50 rounded-xl">
                   <p class="text-sm text-yellow-800">
                       {{ __('Your email address is unverified.') }}

                       <button form="send-verification"
                               class="ml-2 text-blue-600 hover:text-blue-800 font-medium focus:outline-none focus:underline">
                           {{ __('Click here to re-send the verification email.') }}
                       </button>
                   </p>

                   @if (session('status') === 'verification-link-sent')
                       <p class="mt-2 text-sm font-medium text-green-600">
                           {{ __('A new verification link has been sent to your email address.') }}
                       </p>
                   @endif
               </div>
           @endif
       </div>

       <div class="pt-4 border-t border-gray-100">
           <div class="flex items-center gap-4">
               <x-primary-button class="px-6 py-3 bg-blue-600 hover:bg-blue-700 transition rounded-xl text-white font-semibold">
                   {{ __('Save Changes') }}
               </x-primary-button>

               @if (session('status') === 'profile-updated')
                   <p x-data="{ show: true }"
                      x-show="show"
                      x-transition
                      x-init="setTimeout(() => show = false, 2000)"
                      class="text-sm text-green-600 bg-green-50 px-4 py-2 rounded-lg">
                       {{ __('Profile updated successfully!') }}
                   </p>
               @endif
           </div>
       </div>
   </form>
</section>
