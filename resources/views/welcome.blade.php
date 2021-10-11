<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <!-- css  -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="flex flex-row h-screen bg-gray-100">
    {{-- main menu  --}}
    <div class="flex flex-col w-16 p-4 bg-blue-900 justify-between items-center flex-none">
        <div class="flex flex-col space-y-4">
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
        </div>
        <div class="flex flex-col space-y-4">
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
            <a href="#">
                <div class="rounded-full bg-blue-400 w-8 h-8"></div>
            </a>
        </div>
    </div>
    {{-- end main menu  --}}
    {{-- submenu  --}}
    <div class="w-64 bg-gray-100 p-4  space-y-4 flex-none flex flex-col">
        <div class="flex flex-row justify-between items-center">
            <h1 class="text-2xl text-blue-900">Forms</h1>
        </div>
        <div class="bg-red-200 h-64"></div>
        <div class="bg-red-200 h-64"></div>
    </div>
    {{-- end sub menu  --}}
    {{-- main content  --}}
    <div class="flex flex-auto flex-col bg-white rounded-tl-lg shadow-xl ">
        <div class="flex flex-col space-y-1 border-b border-gray-200 p-4">
            <div>
                <p class="text-xl text-blue-900">Create Form</p>
            </div>
            <div>
                <p class="text-sm text-blue-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque doloribus et aspernatur repellat inventore veniam nostrum reiciendis eveniet laborum sint.</p>
            </div>
        </div>
        <div class="p-4 space-y-2 text-blue-900">
            <div class="flex-auto  ">
                <h5 class="text-base font-medium">Input text</h5>
                <input type="text" name="" id="" class="form-input rounded-md border border-gray-200 border-1 shadow-md w-full outline-none focus:border-blue-500 hover:border-blue-500">
            </div>
            <div class="flex flex-row flex-auto space-x-2">
                <div class="flex-auto  w-1/6">
                    <h5 class="text-base font-medium">Input text</h5>
                    <input type="text" name="" id="" class="form-input rounded-md border border-gray-200 border-1 shadow-md w-full outline-none focus:border-blue-500 hover:border-blue-500">
                </div>
                <div class="flex-auto w-3/6 ">
                    <h5 class="text-base font-medium">Input text</h5>
                    <input type="text" name="" id="" class="form-input rounded-md border border-gray-200 border-1 shadow-md w-full outline-none focus:border-blue-500 hover:border-blue-500">
                </div>
                <div class="flex-auto  w-2/6">
                    <h5 class="text-base font-medium">Input select</h5>
                    <select name="" id="" class="form-input rounded-md border border-gray-200 border-1 shadow-md w-full outline-none focus:border-blue-500 hover:border-blue-500">
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                        <option value="">Option 3</option>
                    </select>
                    </div>
            </div>
            <div class="flex-auto flex flex-row space-x-2">
                <div class="flex-auto">
                    <h5 class="text-base font-medium">Input text</h5>
                    <input type="text" name="" id="" class="form-input rounded-md border border-gray-200 border-1 shadow-md w-full outline-none focus:border-blue-500 hover:border-blue-500">
                </div>
                <div  class="flex-auto">
                    <h5 class="text-base font-medium">Input text</h5>
                    <input type="text" name="" id="" class="form-input rounded-md border border-gray-200 border-1 shadow-md w-full outline-none focus:border-blue-500 hover:border-blue-500">
                </div>
            </div>
        </div>
    </div>
    {{-- end main content  --}}
</div>


</body>
</html>
