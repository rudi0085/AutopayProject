<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Hak Akses</title>
</head>
<body>
    <div class="container">
        <div class="relative" x-data="{open:true , openMobile:true}">
            <x-Header></x-Header>
            <div  class="">

                <div x-show="open"  class="">
                    <x-Sidebar></x-Sidebar>
                </div>

                <div>
                    <main class=" flex-1 py-10 mt-10" :class="{ 'lg:pl-72' : open , 'lg:pl-8' : !open}">
                        <div class="px-4 sm:px-6 lg:px-8">

                            {{ $slot }}

                        </div>
                       
                        
                      </main>
                    
                </div>
    
            </div>
            
        </div>
        
    </div>
</body>
<script>
    [x-cloak] { display: none !important; }
</script>
</html>