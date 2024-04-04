<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DHl Dashboard</title>
</head>

<body style="background-color: rgba(23, 25, 35);" class=" flex items-center justify-center h-screen overflow-hidden">
    <div class="bg-slate-800 text-center  m-5 p-20 rounded-lg">
        <form action="" method="post">
            @csrf
            <input type="text" placeholder="name" name="name"
                class="border border-gray-300 m-4 mt-0 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <br>
            <input type="text" placeholder="tracking code" name="tracking_number"
                class="border border-gray-300 m-4 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <br>
            <input type="text" placeholder="zipcode" name="zipcode"
                class="border border-gray-300 m-4 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <br>
            <input type="submit" name="submit" value="Submit"
                class="bg-indigo-500 text-xl m-4 mb-0 hover:ring-indigo-800 hover:opacity-80 text-white font-bold py-2 px-4 rounded-lg cursor-pointer">
        </form>
