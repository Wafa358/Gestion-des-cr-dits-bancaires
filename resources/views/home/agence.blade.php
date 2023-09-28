<x-app-layout>
    <x-slot name="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <h1 class="text-center text-muted mb-3 mt-5">Agence</h1>
                        <p class="text-center text-muted mb-5"> Donnez les informations de l'agence !</p>

                        <form methode="POST" action="{{ route('agence') }}">
                            @csrf



                           
                            
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="city" :value="__('City')" />
                                <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>
                                <div class="mt-1">
                                  <label class="block mt-1 w-full">State</label>
                                  <select id="state" class="form-select">

                                    <option selected>Choose...</option>
                                    <option>Tunis</option>
                                    <option>Nabeul</option>
                                    <option>Janbouba</option>
                                    <option>Beja</option>
                                    <option>Kef</option>
                                    <option>Seliana</option>
                                    <option>Gassrine</option>
                                    <option>Gafsa</option>
                                    <option>Ariana</option>
                                    <option>Ben Arous</option>
                                    <option>Manouba</option>
                                    <option>Sidi bouzid</option>
                                    <option>Tatouin </option>
                                    <option>Tozeur</option>
                                  </select>
                                </div><br>
                                <x-primary-button class="ml-3">
                                    {{ __('Submit') }}
                                </x-primary-button>
                              </form>
            
                    </div>
                </div>
            </div>
        
    </x-slot>

   
</x-app-layout>

 
