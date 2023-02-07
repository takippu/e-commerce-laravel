<!DOCTYPE html>
<html lang="en">
@include('add.head')

<body class="bg-black min-h-screen ">
    @include('add.nav')
    <div class="max-w-screen-lg mx-auto">
    <main>
        {{-- @include('home.slider') --}}
        @include('home.products')
    </main>


    </div>
    @include('add.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>

</html>