## Laravel Livewire

- Install laravel
- setting .env database
- Install jetstream : <b>composer require laravel/jetstream</b>
- Install Jetstream With Livewire
- <b>php artisan jetstream:install livewire
- <b>npm install</b>
- <b>npm run build</b>
- <b>npm run dev</b>
- <b>php artisan migrate</b>
- <b>php artisan vendor:publish --tag=jetstream-views</b>

--- Membuat Fitur Post -----
- Kosongkan view di dashboard
- Buat model dan migration
- <b>php artisan make:model Post -m</b>
- Buat migration : user_id(string), body(text)
- Buat komponen (daisyUI pake tailwind)
- <b>npm i daisyui</b>
- Setting config
- Buat tampilan Post
- <b>php artisan make:livewire CreatePost</b>
- Buat komponen list post
- <b>php artisan make:livewire ListPost</b>
- Buat fungsi kedua komponen
- Styling tampilan list
