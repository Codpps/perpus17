<section class="bg-white p-8 rounded-2xl shadow-lg max-w-2xl mx-auto">
   <header class="border-b border-gray-100 pb-6">
       <div class="flex items-center gap-3 mb-3">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
           </svg>
           <h2 class="text-2xl font-bold text-gray-900">
               {{ __('Update Password') }}
           </h2>
       </div>

       <p class="text-gray-600">
           {{ __('Ensure your account is using a long, random password to stay secure.') }}
       </p>
   </header>

   <form method="post" action="{{ route('password.update') }}" class="mt-8 space-y-6">
       @csrf
       @method('put')

       <!-- Current Password -->
       <div class="space-y-2">
           <x-input-label for="update_password_current_password" :value="__('Current Password')"
                         class="font-semibold text-gray-700" />
           <div class="relative">
               <x-text-input id="update_password_current_password"
                            name="current_password"
                            type="password"
                            class="pl-10 pr-4 py-3 w-full rounded-xl border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                            autocomplete="current-password" />
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
               </svg>
           </div>
           <x-input-error :messages="$errors->updatePassword->get('current_password')" class="text-sm" />
       </div>

       <!-- New Password -->
       <div class="space-y-2">
           <x-input-label for="update_password_password" :value="__('New Password')"
                         class="font-semibold text-gray-700" />
           <div class="relative">
               <x-text-input id="update_password_password"
                            name="password"
                            type="password"
                            class="pl-10 pr-4 py-3 w-full rounded-xl border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                            autocomplete="new-password" />
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
               </svg>
           </div>
           <x-input-error :messages="$errors->updatePassword->get('password')" class="text-sm" />
       </div>

       <!-- Confirm Password -->
       <div class="space-y-2">
           <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')"
                         class="font-semibold text-gray-700" />
           <div class="relative">
               <x-text-input id="update_password_password_confirmation"
                            name="password_confirmation"
                            type="password"
                            class="pl-10 pr-4 py-3 w-full rounded-xl border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                            autocomplete="new-password" />
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
               </svg>
           </div>
           <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="text-sm" />
       </div>

       <div class="pt-4 border-t border-gray-100">
           <div class="flex items-center gap-4">
               <x-primary-button class="px-6 py-3 bg-blue-600 hover:bg-blue-700 transition rounded-xl text-white font-semibold">
                   {{ __('Save Changes') }}
               </x-primary-button>

               @if (session('status') === 'password-updated')
                   <p x-data="{ show: true }"
                      x-show="show"
                      x-transition
                      x-init="setTimeout(() => show = false, 2000)"
                      class="text-sm text-green-600 bg-green-50 px-4 py-2 rounded-lg">
                       {{ __('Password updated successfully!') }}
                   </p>
               @endif
           </div>
       </div>
   </form>
</section>
