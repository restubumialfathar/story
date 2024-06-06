<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add story</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css">
</head>
<body class="font-sans antialiased">


    <div class="container mx-auto p-8">
        <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">
            <!-- Input Gambar -->
            @csrf
            @method('post')
            <div>
                <label for="image" class="block text-gray-700">Thumbnail</label>
                <input type="file" id="image" name="image" class="block w-full mt-1" requireds>
            </div>


            <!-- Input Judul -->
            <div>
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" id="title" name="title" class="block w-full mt-1" required>
            </div>


            <!-- Input Deskripsi -->
            <div>
                <label for="description" class="block text-gray-700">Desciption</label>
                <textarea id="description" name="description" class="block w-full mt-1"></textarea>
            </div>


            <!-- Input Konten -->
            <div>
                <label for="content" class="block text-gray-700">story</label>
                <textarea id="content" name="content" class="block w-full mt-1"></textarea>
            </div>


            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="btn btn-black rounded-lg">Add</button>
            </div>
        </form>
    </div>


</body>
</html>
